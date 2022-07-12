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
    'LBL_MODULE_NAME' => 'Tareas',
    'LBL_MODULE_TITLE' => 'Tareas : Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de tareas',
    'LBL_LIST_FORM_TITLE' => 'Lista de tareas',
    'LBL_NEW_FORM_TITLE' => 'Nueva tarea',
    'LBL_LIST_CLOSE' => 'Cerrar',
    'LBL_LIST_SUBJECT' => 'Asunto',
    'LBL_LIST_CONTACT' => 'Contacto',
    'LBL_LIST_PRIORITY' => 'Prioridad',
    'LBL_LIST_RELATED_TO' => 'Relacionado con',
    'LBL_LIST_DUE_DATE' => 'Fecha de vencimiento',
    'LBL_LIST_DUE_TIME' => 'Hora de vencimiento',
    'LBL_SUBJECT' => 'Asunto:',
    'LBL_STATUS' => 'Estado:',
    'LBL_DUE_DATE' => 'Fecha de vencimiento:',
    'LBL_DUE_TIME' => 'Hora de vencimiento:',
    'LBL_PRIORITY' => 'Prioridad:',
    'LBL_DUE_DATE_AND_TIME' => 'Fecha y hora de vencimiento:',
    'LBL_START_DATE_AND_TIME' => 'Fecha y hora inicial:',
    'LBL_START_DATE' => 'Fecha inicial:',
    'LBL_LIST_START_DATE' => 'Fecha inicial',
    'LBL_START_TIME' => 'Hora inicial:',
    'DATE_FORMAT' => '(aaaa-mm-dd)',
    'LBL_NONE' => 'Ninguno',
    'LBL_CONTACT' => 'Contacto:',
    'LBL_EMAIL_ADDRESS' => 'e-Mail:',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_EMAIL' => 'e-Mail:',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_NAME' => 'Nombre:',
    'LBL_CONTACT_NAME' => 'Contacto',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_DATE_DUE_FLAG' => 'Sin fecha de vencimiento',
    'LBL_DATE_START_FLAG' => 'Sin fecha de inicio',
    'LBL_LIST_MY_TASKS' => 'Mis tareas abiertas',
    'LNK_NEW_TASK' => 'Nueva tarea',
    'LNK_TASK_LIST' => 'Tareas',
    'LNK_IMPORT_TASKS' => 'Importar tareas',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
    'LBL_LIST_DATE_MODIFIED' => 'Fecha de modificación',
    'LBL_CONTACT_ID' => 'ID de contacto:',
    'LBL_PARENT_ID' => 'ID del padre:',
    'LBL_CONTACT_PHONE' => 'Teléfono de contacto:',
    'LBL_PARENT_TYPE' => 'Tipo de padre:',
    'LBL_TASK_INFORMATION' => 'Información de la tarea', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
    //For export labels
    'LBL_DATE_DUE' => 'Fecha de vencimiento',
    'LBL_RELATED_TO' => 'Relacionado a:',
);
