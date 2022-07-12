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
    'LBL_MODULE_NAME' => 'Incidencias',
    'LBL_MODULE_TITLE' => 'Seguimiento de incidencias : Inicio',
    'LBL_MODULE_ID' => 'Incidencias',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de incidencias',
    'LBL_LIST_FORM_TITLE' => 'Lista de incidencias',
    'LBL_NEW_FORM_TITLE' => 'Nueva incidencia',
    'LBL_SUBJECT' => 'Asunto:',
    'LBL_NUMBER' => 'Número:',
    'LBL_STATUS' => 'Estado:',
    'LBL_PRIORITY' => 'Prioridad:',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_CONTACT_NAME' => 'Contacto:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_LIST_NUMBER' => 'Núm.',
    'LBL_LIST_SUBJECT' => 'Asunto',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_PRIORITY' => 'Prioridad',
    'LBL_LIST_RESOLUTION' => 'Resolución',
    'LBL_LIST_LAST_MODIFIED' => 'Modificado',
    'LBL_INVITEE' => 'Contactos',
    'LBL_TYPE' => 'Tipo:',
    'LBL_LIST_TYPE' => 'Tipo',
    'LBL_RESOLUTION' => 'Resolución:',
    'LBL_RELEASE' => 'Lanzamiento:',
    'LNK_NEW_BUG' => 'Informe de incidencia',
    'LNK_BUG_LIST' => 'Incidencias',
    'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar la incidencia',
    'LBL_LIST_MY_BUGS' => 'Mis incidencias asignadas',
    'LNK_IMPORT_BUGS' => 'Importar incidencias',
    'LBL_FOUND_IN_RELEASE' => 'Encontrado en lanzamiento:',
    'LBL_FIXED_IN_RELEASE' => 'Corregido en lanzamiento:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Corregido en lanzamiento',
    'LBL_WORK_LOG' => 'Registro de actividad:',
    'LBL_SOURCE' => 'Fuente:',
    'LBL_PRODUCT_CATEGORY' => 'Categoría:',

    'LBL_CREATED_BY' => 'Creado por:',
    'LBL_MODIFIED_BY' => 'Modificado por:',

    'LBL_LIST_EMAIL_ADDRESS' => 'e-Mail',
    'LBL_LIST_CONTACT_NAME' => 'Nombre de contacto',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_LIST_PHONE' => 'Teléfono',
    'NTC_DELETE_CONFIRMATION' => '¿Está seguro que desea quitar este contacto de esta incidencia?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Seguimiento de incidencias',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',

    'LBL_BUG_INFORMATION' => 'Información de incidencia', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);