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
    'ERR_DELETE_RECORD' => 'Especifique el número de registro para eliminar el contacto',
    'LBL_ACCOUNT_ID' => 'ID de la cuenta:',
    'LBL_ACCOUNT_NAME' => 'Nombre de la cuenta:',
    'LBL_CAMPAIGN' => 'Campaña:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_ADDRESS_INFORMATION' => 'Información de dirección',
    'LBL_ALT_ADDRESS_CITY' => 'Ciudad (dirección alternativa):',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País (dirección alternativa):',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Código postal (dirección alternativa):',
    'LBL_ALT_ADDRESS_STATE' => 'Estado/Provincia (dirección alternativa):',
    'LBL_ALT_ADDRESS_STREET_2' => 'Calle 2 (dirección alternativa):',
    'LBL_ALT_ADDRESS_STREET_3' => 'Calle 3 (dirección alternativa):',
    'LBL_ALT_ADDRESS_STREET' => 'Calle (dirección alternativa):',
    'LBL_ALTERNATE_ADDRESS' => 'Dirección alternativa:',
    'LBL_ALT_ADDRESS' => 'Otra dirección:',
    'LBL_ANY_ADDRESS' => 'Cualquier dirección:',
    'LBL_ANY_EMAIL' => 'Cualquier e-Mail:',
    'LBL_ANY_PHONE' => 'Cualquier teléfono:',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
    'LBL_ASSIGNED_TO_ID' => 'Usuario asignado',
    'LBL_ASSISTANT_PHONE' => 'Tel. asistente:',
    'LBL_ASSISTANT' => 'Asistente:',
    'LBL_BIRTHDATE' => 'Fecha de nacimiento:',
    'LBL_CITY' => 'Ciudad:',
    'LBL_CAMPAIGN_ID' => 'ID campaña',
    'LBL_CONTACT_INFORMATION' => 'Información de contacto', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nombre de contacto:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Oportunidad-Contacto:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Contacto:',
    'LBL_COUNTRY' => 'País:',
    'LBL_CREATED_ACCOUNT' => 'Nueva cuenta creada',
    'LBL_CREATED_CALL' => 'Nueva llamada creada',
    'LBL_CREATED_CONTACT' => 'Nuevo contacto creado',
    'LBL_CREATED_MEETING' => 'Nueva reunión creada',
    'LBL_CREATED_OPPORTUNITY' => 'Creada nueva oportunidad',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contactos',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Informadores directos',
    'LBL_DO_NOT_CALL' => 'No llamar:',
    'LBL_DUPLICATE' => 'Posible contacto duplicado',
    'LBL_EMAIL_ADDRESS' => 'e-Mail:',
    'LBL_EMAIL_OPT_OUT' => 'Rehusar e-Mail:',
    'LBL_EXISTING_ACCOUNT' => 'Usada cuenta existente',
    'LBL_EXISTING_CONTACT' => 'Usado contacto existente',
    'LBL_EXISTING_OPPORTUNITY' => 'Usada oportunidad existente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    'LBL_HOME_PHONE' => 'Tel. casa:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importar vCard',
    'LBL_VCARD' => 'VCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crea automáticamente un nuevo contacto a partir de una vCard',
    'LBL_INVALID_EMAIL' => 'e-Mail no válido:',
    'LBL_INVITEE' => 'Informadores',
    'LBL_LAST_NAME' => 'Apellidos:',
    'LBL_LEAD_SOURCE' => 'Origen de clientes potenciales:',
    'LBL_LIST_ACCEPT_STATUS' => 'Estado de aceptación',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_LIST_CONTACT_NAME' => 'Nombre de contacto',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-Mail',
    'LBL_LIST_FIRST_NAME' => 'Nombre',
    'LBL_LIST_FORM_TITLE' => 'Lista de contactos',
    'LBL_LIST_LAST_NAME' => 'Apellidos',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_PHONE' => 'Teléfono',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_MOBILE_PHONE' => 'Móvil:',
    'LBL_MODIFIED' => 'Modificado por:',
    'LBL_MODULE_NAME' => 'Contactos',
    'LBL_MODULE_TITLE' => 'Contactos : Inicio',
    'LBL_NAME' => 'Nombre:',
    'LBL_NEW_FORM_TITLE' => 'Nuevo contacto',
    'LBL_NOTE_SUBJECT' => 'Asunto de la nota',
    'LBL_OFFICE_PHONE' => 'Tel. oficina:',
    'LBL_OPP_NAME' => 'Nombre de la oportunidad:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID de rol en oportunidad:',
    'LBL_OPPORTUNITY_ROLE' => 'Rol en oportunidad',
    'LBL_OTHER_EMAIL_ADDRESS' => 'e-Mail alternativo:',
    'LBL_OTHER_PHONE' => 'Tel. alternativo:',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_PORTAL_APP' => 'Aplicación del portal:',
    'LBL_PORTAL_INFORMATION' => 'Información del portal',
    'LBL_PORTAL_NAME' => 'Nombre del portal:',
    'LBL_STREET' => 'Calle',
    'LBL_POSTAL_CODE' => 'Código postal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad (dirección principal):',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País (dirección principal):',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código postal (dirección principal):',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado/Provincia (dirección principal):',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Calle 2 (dirección principal):',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Calle 3 (dirección principal):',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Calle (dirección principal):',
    'LBL_PRIMARY_ADDRESS' => 'Dirección principal:',
    'LBL_PRODUCTS_TITLE' => 'Productos',
    'LBL_REPORTS_TO_ID' => 'Reportar a ID:',
    'LBL_REPORTS_TO' => 'Reportar a:',
    'LBL_RESOURCE_NAME' => 'Nombre de recurso',
    'LBL_SALUTATION' => 'Saludo:',
    'LBL_SAVE_CONTACT' => 'Guardar contacto',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de contactos',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar contactos marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccionar contactos marcados',
    'LBL_STATE' => 'Estado o Provincia:',
    'LBL_SYNC_CONTACT' => 'Sincronizar con Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Público objetivo',
    'LBL_TITLE' => 'Puesto de trabajo:',
    'LNK_CONTACT_LIST' => 'Contactos',
    'LNK_IMPORT_VCARD' => 'Importar Vcard',
    'LNK_NEW_ACCOUNT' => 'Crear cuenta',
    'LNK_NEW_APPOINTMENT' => 'Nueva cita',
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_CASE' => 'Nuevo caso',
    'LNK_NEW_CONTACT' => 'Nuevo contacto',
    'LNK_NEW_EMAIL' => 'Archivar e-Mail',
    'LNK_NEW_MEETING' => 'Programar reunión',
    'LNK_NEW_NOTE' => 'Nueva nota',
    'LNK_NEW_OPPORTUNITY' => 'Nueva oportunidad',
    'LNK_NEW_TASK' => 'Nueva tarea',
    'LNK_SELECT_ACCOUNT' => "Seleccione cuenta",
    'NTC_DELETE_CONFIRMATION' => '¿Está seguro que quiere eliminar este registro?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'La creación de una oportunidad requiere una cuenta.\n Por favor, cree una nueva cuenta o seleccione una existente',
    'NTC_REMOVE_CONFIRMATION' => '¿Está seguro que desea eliminar este contacto del caso?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copiar a dirección primaria',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copiar a otra dirección',

    'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Incidencias',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_PROJECTS_RESOURCES' => 'Recursos del Proyecto',
    'LBL_CAMPAIGNS' => 'Campañas',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campañas',
    'LBL_LIST_CITY' => 'Ciudad',
    'LBL_LIST_STATE' => 'Estado/Provincia',
    'LBL_HOMEPAGE_TITLE' => 'Mis contactos',
    'LBL_OPPORTUNITIES' => 'Oportunidades',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
    'LNK_IMPORT_CONTACTS' => 'Importar contactos',

    // SNIP
    'LBL_USER_SYNC' => 'Sincronizar Usuario',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Eventos',

    'LBL_AOP_CASE_UPDATES' => 'Actualizaciones de Casos',
    'LBL_CREATE_PORTAL_USER' => 'Crear Usuario del Portal',
    'LBL_ENABLE_PORTAL_USER' => 'Habilitar Usuario del Portal',
    'LBL_DISABLE_PORTAL_USER' => 'Deshabilitar el Usuario del Portal',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Error al crear el usuario del portal',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Error al habilitar el usuario del portal',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Error al deshabilitar el usuario del portal',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Usuario del portal creado',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Usuario del portal habilitado',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Usuario del portal deshabilitado',
    'LBL_NO_JOOMLA_URL' => 'No se especificó URL del portal',
    'LBL_PORTAL_USER_TYPE' => 'Tipo de Usuario del Portal',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Cuenta Deshabilitada',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID de cuenta de Joomla',

    'LBL_AOS_CONTRACTS' => 'Contratos',
    'LBL_AOS_INVOICES' => 'Facturas',
    'LBL_AOS_QUOTES' => 'Cotizaciones',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Contactos del projecto a partir del nombre del projecto',
);
