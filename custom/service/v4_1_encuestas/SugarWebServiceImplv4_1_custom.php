<?php

if (!defined('sugarEntry')) {
  define('sugarEntry', true);
}

error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE & ~E_DEPRECATED);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once('service/v4_1/SugarWebServiceImplv4_1.php');
require_once('custom/service/SugarWebServiceTrait.php');
require_once('custom/include/utils/utilities.php');

class SugarWebServiceImplv4_1_custom extends SugarWebServiceImplv4_1
{
  use SugarWebServiceTrait;
  protected $data = array(
    'encuesta_formato_id' => '677bd216-2be6-d75a-4b87-5e713a11df40',
    'fecha_tipo' => '',
    'fecha_inicial' => '2020-03-01',
    'fecha_final' => '2020-04-30',
  );

  public function __construct()
  {
    parent::__construct();
    self::$helperObject = new SugarWebServiceUtilv4_1();
  }

  public function encuesta_registrar_respuestas($session = null, $data = array())
  {
    $response = ENC_Respuesta_Pregunta::registrar_respuestas($data);
    if (empty($response))
    {
      return $this->displaySoapError('respuestas_not_saved', 'Respuesta no guardas');
    }
    return $response;
  }

  /**
   * @param null $session
   * @param array $data
   * @return array|void
   */
  public function encuesta_get($session = null, $data = array())
  {
    if (!empty($data["formato_encuesta_id"]) && empty($data["encuesta_id"])) {
      $formato = BeanFactory::newBean("ENC_Formato_Encuesta")->retrieve($data["formato_encuesta_id"]);

      if (!($formato && $formato->id)) {
        return $this->displaySoapError('encuesta_not_found', 'Formato Encuesta no encontrada', '203', "No se encontró el formato encuesta solicitado");
      }

      $encuesta = $formato->getEncuesta($data);
    } else {
      /** @var ENC_Encuestas $encuesta */
      $encuesta = BeanFactory::newBean('ENC_Encuestas')->retrieve($data['encuesta_id']);
    }

    if (!($encuesta && $encuesta->id)) {
      return $this->displaySoapError('encuesta_not_found', 'Encuesta no encontrada', '204', "No se encontró la encuesta solicitada");
    }

    $formulario = $encuesta->getFormulario();

    return $formulario;
  }

  /**
   * Obtiene lista de preguntas con sus respuestas
   * @param null $session
   * @param array $data
   * @return bool|array
   */
  public function encuesta_resultados_get($session = null, $data = array())
  {
    global $current_user;

    // Validar sesión
    $user_id = $this->get_user_id($session);
    if (!$user_id)
    {
      $this->displaySoapError("invalid_session", null, null, null, array(), true);
      return false;
    }

    // Se validan que los demás parametros estén completos
    $data['fecha_tipo'] = empty($data['fecha_tipo']) ? 'PRIMERA_RESPUESTA': $data['fecha_tipo'];
    if (empty($data['fecha_inicial']) || empty($data['fecha_final']) || empty($data['encuesta_formato_id']))
    {
      $this->displaySoapError('parametros_insuficientes','Parámetros insuficientes');
      return false;
    }

    /** @var ENC_Formato_Encuesta $form */
    $form = BeanFactory::getBean('ENC_Formato_Encuesta')->retrieve($data['encuesta_formato_id']);
    // Se validan que los demás parametros estén completos
    if (empty($form))
    {
      $this->displaySoapError('formato_no_existe','El formato de encuesta indicado no existe.');
      return false;
    }

    // Se retorna el objeto json enviado los parámtros completos
    return $form->getResultadosEncuesta2($data);
  }

  public function test($session = null, $data = array())
  {
    $data = empty($data) ? $this->data : $data;

    /** @var ENC_Encuestas $form */
    $form = BeanFactory::getBean('ENC_Encuestas')->retrieve('64f20edf-e31a-412b-aeb0-5eb43e536278');

    // Se retorna el objeto json enviado los parámtros completos
    return $form->getFormulario();
  }
}
