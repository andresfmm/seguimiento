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
    'LBL_MODULE_NAME' => 'Tareas de proyecto',
    'LBL_MODULE_TITLE' => 'Tareas de proyecto: Inicio',

    'LBL_ID' => 'ID:',
    'LBL_PROJECT_TASK_ID' => 'ID de tarea de proyecto:',
    'LBL_PROJECT_ID' => 'ID de proyecto:',
    'LBL_DATE_ENTERED' => 'Fecha de creación:',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación:',
    'LBL_ASSIGNED_USER_ID' => 'Asignado a:',
    'LBL_MODIFIED_USER_ID' => 'Modificado por:',
    'LBL_CREATED_BY' => 'Creado por:',
    'LBL_NAME' => 'Nombre:',
    'LBL_STATUS' => 'Estado:',
    'LBL_DATE_DUE' => 'Fecha de vencimiento:',
    'LBL_TIME_DUE' => 'Hora de vencimiento:',
    'LBL_PREDECESSORS' => 'Predecesores:',
    'LBL_DATE_START' => 'Fecha inicial:',
    'LBL_DATE_FINISH' => 'Fecha final:',
    'LBL_TIME_START' => 'Hora inicial:',
    'LBL_TIME_FINISH' => 'Hora final:',
    'LBL_DURATION' => 'Duración:',
    'LBL_DURATION_UNIT' => 'Unidad de duración:',
    'LBL_ACTUAL_DURATION' => 'Duración real:',
    'LBL_PARENT_ID' => 'Proyecto:',
    'LBL_PARENT_TASK_ID' => 'ID de tarea padre:',
    'LBL_PERCENT_COMPLETE' => 'Porcentaje completado (%):',
    'LBL_PRIORITY' => 'Prioridad:',
    'LBL_DESCRIPTION' => 'Notas:',
    'LBL_ORDER_NUMBER' => 'Orden:',
    'LBL_TASK_NUMBER' => 'Número de tarea:',
    'LBL_TASK_ID' => 'ID tarea:',
    'LBL_MILESTONE_FLAG' => 'Hito:',
    'LBL_ESTIMATED_EFFORT' => 'Trabajo estimado (h):',
    'LBL_ACTUAL_EFFORT' => 'Trabajo real (h):',
    'LBL_UTILIZATION' => 'Ocupación (%):',
    'LBL_DELETED' => 'Eliminada:',

    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_PARENT_NAME' => 'Proyecto',
    'LBL_LIST_PERCENT_COMPLETE' => 'Porcentaje completado (%)',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Asignada a',
    'LBL_LIST_DATE_DUE' => 'Fecha de vencimiento',
    'LBL_LIST_PRIORITY' => 'Prioridad',
    'LBL_LIST_CLOSE' => 'Cerrar',
    'LBL_PROJECT_NAME' => 'Nombre de proyecto',

    'LNK_NEW_PROJECT' => 'Crear proyecto',
    'LNK_PROJECT_LIST' => 'Lista de proyectos',
    'LNK_NEW_PROJECT_TASK' => 'Crear tarea de proyecto',
    'LNK_PROJECT_TASK_LIST' => 'Tareas de proyecto',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Mis tareas de proyecto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tareas de proyecto',
    'LBL_NEW_FORM_TITLE' => 'Nueva tarea de proyecto',

    'LBL_HISTORY_TITLE' => 'Historial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',

    'LBL_ASSIGNED_USER_NAME' => 'Asignado a',
    'LBL_PARENT_NAME' => 'Nombre de proyecto',
    'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Línea de tiempo',

    'LBL_SUBTASK' => 'Sub-tarea',
    'LBL_LAG' => 'Retardo',
    'LBL_DAYS' => 'Días',
    'LBL_HOURS' => 'Horas',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo de relación',
);
