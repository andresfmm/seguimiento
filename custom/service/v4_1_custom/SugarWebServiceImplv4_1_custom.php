<?php

if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}

//*
error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
//*/

require_once('service/v4_1/SugarWebServiceImplv4_1.php');
require_once('custom/service/SugarWebServiceTrait.php');
require_once('custom/include/utils/utilities.php');

class SugarWebServiceImplv4_1_custom extends SugarWebServiceImplv4_1
{
    use SugarWebServiceTrait;

    public function __construct()
    {
        self::$helperObject = new SugarWebServiceUtilv4_1();
    }

    function get_entry($session, $module_name, $id, $select_fields, $link_name_to_fields_array)
    {
        $data = file_get_contents("php://input");

        self::write_log(print_r($data, true), $module_name.'->SugarWebServiceImplv4_1_custom->get_entry', 'get_entry');

        return parent::get_entry_list($session, $module_name, $id, $select_fields, $link_name_to_fields_array);
    }

    public function get_entry_list($session, $module_name, $query, $order_by, $offset, $select_fields, $link_name_to_fields_array, $max_results, $deleted)
    {
        $data = file_get_contents("php://input");
        self::write_log(print_r($data, true), $module_name.'->SugarWebServiceImplv4_1_custom->get_entry_list', 'get_entry_list');

        //VENTAS MOSTRADOR, SOLO SE ACEPTAN PLACAS COMODIN CONFIGURADAS
        if($module_name == 'Opportunities'){
            require_once 'custom/modules/Opportunities/VentasMostrador.php';
            $dataQuery = VentasMostrador::limpiarQueryGetEntryList($query);
            if(!empty($dataQuery) && is_array($dataQuery) && array_key_exists('placa',$dataQuery)){
                if(VentasMostrador::isPlacaComodin($dataQuery['placa']) === true){
                    $otId = VentasMostrador::crearByQuery($query);
                    $query = " opportunities.id = '{$otId}'";
                }
            }
        }

        return parent::get_entry_list($session, $module_name, $query, $order_by, $offset, $select_fields, $link_name_to_fields_array, $max_results, $deleted);
    }

    /**
     * Update or create a single SugarBean.
     *
     * @throws SoapFault                  -- The SOAP error, if any
     *
     * @param  String    $session         -- Session ID returned by a previous call to login.
     * @param  String    $module_name     -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @param  Array     $name_value_list -- The keys of the array are the SugarBean attributes, the values of the array are the values the attributes should have.
     * @param  Bool      $track_view      -- Should the tracker be notified that the action was performed on the bean.
     *
     * @return Array     'id'             -- the ID of the bean that was written to (-1 on error)
     */
    public function set_entry($session, $module_name, $name_value_list, $track_view = false)
    {
        //LOG
        $data = file_get_contents("php://input");

        global $beanList, $beanFiles, $current_user;

        $GLOBALS['log']->info('Begin: SugarWebServiceImpl->set_entry');
        if (self::$helperObject->isLogLevelDebug()) {
            $GLOBALS['log']->debug('SoapHelperWebServices->set_entry - input data is ' . var_export($name_value_list, true));
        } // if

        $error = new SoapError();
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'write', 'no_access', $error)) {
            $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entry');
            self::write_log(print_r($error, true), $module_name.'->SugarWebServiceImpl->set_entry', 'set_entry');
            return;
        } // if

        $class_name = $beanList[$module_name];
        require_once($beanFiles[$class_name]);
        $seed = new $class_name();
        foreach ($name_value_list as $name => $value) {
            if (is_array($value) && $value['name'] == 'id') {
                $seed->retrieve($value['value']);
                break;
            } elseif ($name === 'id') {
                $seed->retrieve($value);
            }
        }

        $return_fields = array();
        foreach ($name_value_list as $name => $value) {
            if ($module_name == 'Users' && !empty($seed->id) && ($seed->id != $current_user->id) && $name == 'user_hash') {
                continue;
            }
            if (!empty($seed->field_name_map[$name]['sensitive'])) {
                continue;
            }

            if (!is_array($value)) {
                $seed->$name = $value;
                $return_fields[] = $name;
            } else {
                $seed->$value['name'] = $value['value'];
                $return_fields[] = $value['name'];
            }
        }

        if (!self::$helperObject->checkACLAccess($seed, 'Save', $error, 'no_access') || ($seed->deleted == 1 && !self::$helperObject->checkACLAccess($seed, 'Delete', $error, 'no_access'))) {
            $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entry');
            return;
        } // if
        //
        //CUSTOM STP
        self::write_log(print_r($data, true), $module_name.'->SugarWebServiceImpl->set_entry', 'set_entry');
        try {
        //CUSTOM STP
            $seed->save(self::$helperObject->checkSaveOnNotify());

            $return_entry_list = self::$helperObject->get_name_value_list_for_fields($seed, $return_fields);
            self::write_log(print_r($return_entry_list, true), $module_name.'->SugarWebServiceImpl->entry_list', 'set_entry');
            self::write_log(print_r($seed->id, true), $module_name.'->SugarWebServiceImpl->seedId', 'set_entry');

            if ($seed->deleted == 1) {
                $seed->mark_deleted($seed->id);
            }

            if ($track_view) {
                self::$helperObject->trackView($seed, 'editview');
            }
        } catch (Exception $e) {
            self::write_log(print_r($e, true), $module_name.'->SugarWebServiceImplv4_1->set_entry_error', 'set_entry');
        }

        $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entry');
        return array('id' => $seed->id, 'entry_list' => $return_entry_list);
    }

    
    public function createUserForTraking($data){
        try {
            
            $user = BeanFactory::newBean("SEG_Seguimiento_Periodo_Prueba");

            $user->name         = str_remove_accents($data["name"]);
            $user->description  = $data["description"];

            $user->save();
            return responseMessage(true, 200, "Usuario creado");
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function testService(){
        try {
            
            print_r('biennnnn');
            exit;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
    
}
