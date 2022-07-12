<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_EDIT_LAYOUT' => 'Editar diseño',
    'LBL_EDIT_FIELDS' => 'Editar campos personalizados',
    'LBL_SELECT_FILE' => 'Seleccionar archivo',
    'LBL_MODULE_TITLE' => 'Estudio',
    'LBL_TOOLBOX' => 'Caja de herramientas',
    'LBL_SUITE_FIELDS_STAGE' => 'Campos SuiteCRM (haga clic en los elementos para agregarlos al área de diseño)',
    'LBL_VIEW_SUITE_FIELDS' => 'Ver Campos SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Error al guardar',
    'LBL_CONFIRM_UNSAVE' => 'Los cambios no se han guardado y se perderán. ¿Está seguro que desea continuar?',
    'LBL_PUBLISHING' => 'Publicando...',
    'LBL_PUBLISHED' => 'Publicado',
    'LBL_FAILED_PUBLISHED' => 'Error al publicar',
    'LBL_DROP_HERE' => '[Soltar aquí]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nombre',
    'LBL_LABEL' => 'Etiqueta',
    'LBL_MASS_UPDATE' => 'Actualización masiva',
    'LBL_DEFAULT_VALUE' => 'Valor predeterminado',
    'LBL_REQUIRED' => 'Requerido',
    'LBL_DATA_TYPE' => 'Tipo',


    'LBL_HISTORY' => 'Historial',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>¡Bienvenido al Estudio!</h2><br> ¿Qué desea hacer hoy?<br><b> Por favor, seleccione una de las siguientes opciones</b>',
    'LBL_SW_EDIT_MODULE' => 'Editar un módulo',
    'LBL_SW_EDIT_DROPDOWNS' => 'Editar listas desplegables',
    'LBL_SW_EDIT_TABS' => 'Configurar pestañas',
    'LBL_SW_RENAME_TABS' => 'Renombrar pestañas',
    'LBL_SW_EDIT_GROUPTABS' => 'Configurar grupos de pestañas',
    'LBL_SW_EDIT_PORTAL' => 'Editar portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Reparar campos personalizados',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrar campos personalizados',

//Manager Backups History
    'LBL_MB_DELETE' => 'Eliminar',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Crea una lista desplegable',
    'LBL_DROPDOWN_NAME' => 'Nombre de lista desplegable:',
    'LBL_DROPDOWN_LANGUAGE' => 'Idioma de lista desplegable:',
    'LBL_TABGROUP_LANGUAGE' => 'Idioma:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Valor mostrado',
    'LBL_DD_DATABASEVALUE' => 'Tabla de base de datos',
    'LBL_DD_ALL' => 'Todo',

//BUTTONS
    'LBL_BTN_SAVE' => 'Guardar',
    'LBL_BTN_CANCEL' => 'Cancelar',
    'LBL_BTN_SAVEPUBLISH' => 'Guardar y publicar',
    'LBL_BTN_HISTORY' => 'Historial',
    'LBL_BTN_ADDROWS' => 'Agregar filas',
    'LBL_BTN_UNDO' => 'Deshacer',
    'LBL_BTN_REDO' => 'Repetir',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Agregar campo personalizado',
    'LBL_BTN_TABINDEX' => 'Editar orden de pestañas',

//TABS
    'LBL_MODULES' => 'Módulos',
    'LBL_MODULE_NAME' => 'Administración',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configurar el Módulo del Menú: Filtros',
    'LBL_GROUP_TAB_WELCOME' => 'Las siguientes pestañas y grupos de subpestañas serán mostradas a los usuarios que elijan ver módulos agrupados en la barra de navegación. Arrastre y suelte módulos a las cajas con pestañas para configurar qué subpestañas deben aparecer bajo qué pestañas. Los grupos de pestañas vacíos no serán mostrados en la barra de navegación',
    'LBL_RENAME_TAB_WELCOME' => 'Haga click en el valor de visualización de cualquier pestaña de la siguiente tabla para renombrar la pestaña',
    'LBL_DELETE_MODULE' => 'Quitar&nbsp;el&nbsp;módulo<br />del&nbsp;filtro',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Para establecer las etiquetas de los grupos de pestañas en otros idiomas disponibles, seleccione un idioma, edite las etiquetas y haga clic en guardar & desplegar para realizar los cambios para ese idioma',
    'LBL_ADD_GROUP' => 'Agregar filtro',
    'LBL_NEW_GROUP' => 'Nuevo grupo',
    'LBL_RENAME_TABS' => 'Renombrar pestañas',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Error: Valor de clave no válido: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Guardar' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Deshacer' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Rehacer' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Incorporada' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Agregar campo' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximizar' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimizar' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Publicar' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Agregar filas' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Agregar campo' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Editar' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Seleccionar un idioma para editar.',
    'LBL_SINGULAR' => 'Etiqueta Singular',
    'LBL_PLURAL' => 'Etiqueta Plural',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Haga clic en <b>excepto</b> para aplicar los cambios.'

);
