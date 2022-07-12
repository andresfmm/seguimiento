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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Debe especificar un numero de resgistro para eliminar el cliente potencial.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Descripción de la cuenta',
    'LBL_ACCOUNT_ID' => 'ID de la cuenta',
    'LBL_ACCOUNT_NAME' => 'Nombre de cuenta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_ADDRESS_INFORMATION' => 'Información de dirección',
    'LBL_ALT_ADDRESS_CITY' => 'Ciudad (direccion alternativa)',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País (dirección alternativa)',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Código postal (dirección alternativa)',
    'LBL_ALT_ADDRESS_STATE' => 'Estado/Provincia (dirección alternativa)',
    'LBL_ALT_ADDRESS_STREET_2' => 'Calle 2 (dirección alternativa)',
    'LBL_ALT_ADDRESS_STREET_3' => 'Calle 3 (dirección alternativa)',
    'LBL_ALT_ADDRESS_STREET' => 'Calle (dirección alternativa)',
    'LBL_ALTERNATE_ADDRESS' => 'Dirección alternativa:',
    'LBL_ALT_ADDRESS' => 'Otra dirección:',
    'LBL_ANY_ADDRESS' => 'Cualquier dirección:',
    'LBL_ANY_EMAIL' => 'Cualquier e-Mail:',
    'LBL_ANY_PHONE' => 'Cualquier teléfono:',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_ASSIGNED_TO_ID' => 'Usuario asignado:',
    'LBL_CITY' => 'Ciudad:',
    'LBL_CONTACT_ID' => 'ID de contacto',
    'LBL_CONTACT_INFORMATION' => 'Información del cliente potencial', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nombre del prospecto:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Cliente potencial-oportunidad:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Cliente potencial:',
    'LBL_CONVERTED_ACCOUNT' => 'Cuenta convertida:',
    'LBL_CONVERTED_CONTACT' => 'Contacto convertido:',
    'LBL_CONVERTED_OPP' => 'Oportunidad convertida:',
    'LBL_CONVERTED' => 'Convertido',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertir cliente potencial',
    'LBL_CONVERTLEAD' => 'Convertir cliente potencial',
    'LBL_CONVERTLEAD_WARNING' => 'Advertencia: este cliente potencial podría ya haber sido convertido',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' en un contacto:',
    'LBL_COUNTRY' => 'País:',
    'LBL_CREATED_NEW' => 'Crear nuevo',
    'LBL_CREATED_ACCOUNT' => 'Nueva cuenta creada',
    'LBL_CREATED_CALL' => 'Creada una nueva llamada',
    'LBL_CREATED_CONTACT' => 'Creado un nuevo contacto',
    'LBL_CREATED_MEETING' => 'Creada una nueva reunión',
    'LBL_CREATED_OPPORTUNITY' => 'Creada una nueva oportunidad',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DO_NOT_CALL' => 'No llamar:',
    'LBL_DUPLICATE' => 'Clientes potenciales similares',
    'LBL_EMAIL_ADDRESS' => 'e-Mail:',
    'LBL_EMAIL_OPT_OUT' => 'Rehusar e-Mail:',
    'LBL_EXISTING_ACCOUNT' => 'Usada una cuenta existente',
    'LBL_EXISTING_CONTACT' => 'Usado un contacto existente',
    'LBL_EXISTING_OPPORTUNITY' => 'Usada una oportunidad existente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    'LBL_HOME_PHONE' => 'Teléfono de casa:',
    'LBL_IMPORT_VCARD' => 'Importar una vCard',
    'LBL_VCARD' => 'VCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crear un interesado automáticamente importando una vCard',
    'LBL_INVALID_EMAIL' => 'e-Mail inválido:',
    'LBL_INVITEE' => 'Reportar a',
    'LBL_LAST_NAME' => 'Apellido:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descripción de cliente potencial:',
    'LBL_LEAD_SOURCE' => 'Origen de clientes potenciales:',
    'LBL_LIST_ACCEPT_STATUS' => 'Aceptar estado',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_LIST_CONTACT_NAME' => 'Nombre del prospecto',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Fecha de creación',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-Mail',
    'LBL_LIST_FIRST_NAME' => 'Nombre',
    'LBL_LIST_FORM_TITLE' => 'Lista de clientes potenciales',
    'LBL_LIST_LAST_NAME' => 'Apellido',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descripción de cliente potencial',
    'LBL_LIST_LEAD_SOURCE' => 'Origen de clientes potenciales',
    'LBL_LIST_MY_LEADS' => 'Mis clientes potenciales',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_PHONE' => 'Teléfono',
    'LBL_LIST_REFERED_BY' => 'Referido por',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_MOBILE_PHONE' => 'Móvil:',
    'LBL_MODULE_NAME' => 'Clientes potenciales',
    'LBL_MODULE_TITLE' => 'Clientes potenciales: Inicio',
    'LBL_NAME' => 'Nombre:',
    'LBL_NEW_FORM_TITLE' => 'Nuevo cliente potencial',
    'LBL_OFFICE_PHONE' => 'Teléfono de oficina:',
    'LBL_OPP_NAME' => 'Nombre de la oportunidad:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Cantidad de la oportunidad:',
    'LBL_OPPORTUNITY_ID' => 'ID  de la oportunidad',
    'LBL_OPPORTUNITY_NAME' => 'Nombre de la oportunidad:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'e-Mail alternativo:',
    'LBL_OTHER_PHONE' => 'Teléfono alternativo:',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_PORTAL_APP' => 'Aplicación del portal',
    'LBL_PORTAL_INFORMATION' => 'Información del portal',
    'LBL_PORTAL_NAME' => 'Nombre del portal:',
    'LBL_POSTAL_CODE' => 'Código postal:',
    'LBL_STREET' => 'Calle',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad (dirección principal)',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País (dirección principal)',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código postal (dirección principal)',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado/Provincia (dirección principal)',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Calle 2 (dirección principal)',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Calle 3 (dirección principal)',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Calle (dirección principal)',
    'LBL_PRIMARY_ADDRESS' => 'Dirección principal:',
    'LBL_REFERED_BY' => 'Referido por:',
    'LBL_REPORTS_TO_ID' => 'Reporta a ID',
    'LBL_REPORTS_TO' => 'Reporta a:',
    'LBL_SALUTATION' => 'Saludo',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_CREATED' => 'Creado por',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de clientes potenciales',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar clientes potenciales marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccionar clientes potenciales marcados',
    'LBL_STATE' => 'Estado o Provincia:',
    'LBL_STATUS_DESCRIPTION' => 'Descripción del estado:',
    'LBL_STATUS' => 'Estado:',
    'LBL_TITLE' => 'Puesto de trabajo:',
    'LNK_IMPORT_VCARD' => 'Crear cliente potencial desde vCard',
    'LNK_LEAD_LIST' => 'Ver Clientes Potenciales',
    'LNK_NEW_ACCOUNT' => 'Crear cuenta',
    'LNK_NEW_APPOINTMENT' => 'Nueva cita',
    'LNK_NEW_CONTACT' => 'Nuevo contacto',
    'LNK_NEW_LEAD' => 'Nuevo cliente',
    'LNK_NEW_NOTE' => 'Nueva nota',
    'LNK_NEW_TASK' => 'Nueva tarea',
    'LNK_NEW_CASE' => 'Nuevo caso',
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_MEETING' => 'Programar reunión',
    'LNK_NEW_OPPORTUNITY' => 'Nueva oportunidad',
    'LNK_SELECT_ACCOUNTS' => ' <b>o</b> Seleccione la cuenta',
    'LNK_SELECT_CONTACTS' => ' <b>O</b> Selecciona Contacto',
    'NTC_DELETE_CONFIRMATION' => '¿Está seguro que desea eliminar este registro?',
    'NTC_REMOVE_CONFIRMATION' => '¿Está seguro que desea quitar este cliente potencial del caso?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campañas',
    'LBL_CAMPAIGN' => 'Campaña:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
    'LBL_PROSPECT_LIST' => 'Público objetivo',
    'LBL_CAMPAIGN_LEAD' => 'Campañas',
    'LBL_BIRTHDATE' => 'Fecha de nacimiento:',
    'LBL_ASSISTANT_PHONE' => 'Teléfono asistente',
    'LBL_ASSISTANT' => 'Asistente',
    'LBL_CREATED_USER' => 'Usuario creado',
    'LBL_MODIFIED_USER' => 'Usuario modificado',
    'LBL_CAMPAIGNS' => 'Campañas',
    'LBL_CONVERT_MODULE_NAME' => 'Módulo',
    'LBL_CONVERT_REQUIRED' => 'Obligatorio',
    'LBL_CONVERT_SELECT' => 'Permitir selección',
    'LBL_CONVERT_COPY' => 'Copiar datos',
    'LBL_CONVERT_EDIT' => 'Editar',
    'LBL_CONVERT_DELETE' => 'Eliminar',
    'LBL_CONVERT_ADD_MODULE' => 'Agregar módulo',
    'LBL_CREATE' => 'Crear',
    'LBL_SELECT' => ' <b>O</b> Seleccionar',
    'LBL_WEBSITE' => 'Sitio Web',
    'LNK_IMPORT_LEADS' => 'Importar clientes potenciales',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'El módulo en el que se creará un nuevo registro',
    'LBL_REQUIRED_TIP' => 'Los módulos obligatorios deben ser creados o seleccionados antes de que se realice la conversión',
    'LBL_COPY_TIP' => 'Si se elige, los campos del cliente potencial serán copiados a los campos con el mismo nombre en los nuevos registros creados',
    'LBL_SELECTION_TIP' => 'Los módulos con un campo relacionado en contactos pueden ser seleccionados antes de que sean creados durante el proceso de conversión de cliente potencial',
    'LBL_EDIT_TIP' => 'Modifique el diseño de la conversión para este módulo',
    'LBL_DELETE_TIP' => 'Quitar este módulo del diseño de conversión',

    'LBL_ACTIVITIES_MOVE' => 'Mover actividad a',
    'LBL_ACTIVITIES_COPY' => 'Copiar actividad a',
    'LBL_ACTIVITIES_MOVE_HELP' => "Seleccione el(los) registro(s) de actividad que quiera mover de los clientes potenciales. Tareas, llamadas, reuniones, notas y correos electrónicos que serán trasladados al registro(s) seleccionado(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Selecciona el o los resgistros para cada copia creada de las actividades de los Clientes Potenciales. Las nuevas Tareas, Llamadas, Reuniones y Notas serán creadas para cada registro seleccionado. Los Emails se relacionarán con los registros seleccionados.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID de campaña',
    'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Introducir fecha' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Cargando' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editar' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Eventos',
);
