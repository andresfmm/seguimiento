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
    'LBL_ASSIGNED_TO_ID' => 'ID usuario asignado',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Fecha de creación',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado por nombre',
    'LBL_CREATED' => 'Creado por',
    'LBL_DESCRIPTION' => 'Descripción',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NAME' => 'Nombre',
    'LBL_SAVING' => 'Guardando...',
    'LBL_SAVED' => 'Guardado',
    'LBL_CREATED_USER' => 'Creado por usuario',
    'LBL_MODIFIED_USER' => 'Modificado por usuario',
    'LBL_LIST_FORM_TITLE' => 'Lista Feed',
    'LBL_MODULE_NAME' => 'Flujo de Actividad',
    'LBL_MODULE_TITLE' => 'Flujo de Actividad',
    'LBL_DASHLET_DISABLED' => 'Aviso: El sistema SuiteCRM Feed está deshabilitado, no se enviarán nuevas entradas de feeds hasta que sea activado',
    'LBL_RECORDS_DELETED' => 'Todas las entradas anteriores de SuiteCRM Feed han sido quitadas, si el sistema SuiteCRM Feed está habilitado, se generarán nuevas entradas automáticamente.',
    'LBL_CONFIRM_DELETE_RECORDS' => '¿Está seguro que desea eliminar todas las entradas de SuiteCRM Feed?',
    'LBL_FLUSH_RECORDS' => 'Eliminar entradas de Feed',
    'LBL_ENABLE_FEED' => 'Habilitar Dashlet Mi Flujo de Actividad',
    'LBL_ENABLE_MODULE_LIST' => 'Activar Feeds para',
    'LBL_HOMEPAGE_TITLE' => 'Mi Flujo de Actividad',
    'LNK_NEW_RECORD' => 'Nuevo Feed',
    'LNK_LIST' => 'Fuente',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar SuiteCRM Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Historial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_NEW_FORM_TITLE' => 'Nuevo SuiteCRM Feed',
    'LBL_ALL' => 'Todo',
    'LBL_USER_FEED' => 'Feed de Usuario',
    'LBL_ENABLE_USER_FEED' => 'Activar Feed de usuario',
    'LBL_TO' => 'Enviar a',
    'LBL_IS' => 'es',
    'LBL_DONE' => 'Hecho',
    'LBL_TITLE' => 'Título',
    'LBL_ROWS' => 'Filas',
    'LBL_CATEGORIES' => 'Módulos',
    'LBL_TIME_LAST_WEEK' => 'Última semana',
    'LBL_TIME_WEEKS' => 'semanas',
    'LBL_TIME_DAY' => 'día', // PR 6080
    'LBL_TIME_DAYS' => 'días',
    'LBL_TIME_YESTERDAY' => 'Ayer',
    'LBL_TIME_HOURS' => 'Horas',
    'LBL_TIME_HOUR' => 'Hora',
    'LBL_TIME_MINUTES' => 'Minutos',
    'LBL_TIME_MINUTE' => 'Minuto',
    'LBL_TIME_SECONDS' => 'Segundos',
    'LBL_TIME_SECOND' => 'Segundo',
    'LBL_TIME_AND' => 'y',
    'LBL_TIME_AGO' => 'hace',
// Activity stream
    'CREATED_CONTACT' => 'creado un <b>NUEVO</b> {0}',
    'CREATED_OPPORTUNITY' => 'creado un <b>NUEVO</b> {0}',
    'CREATED_CASE' => 'creado un <b>NUEVO</b> {0}',
    'CREATED_LEAD' => 'creado un <b>NUEVO</b> {0}',
    'FOR' => 'para', // Activity stream for cases
    'FOR_AMOUNT' => 'para la cantidad de', // Activity stream for opportunity
    'CLOSED_CASE' => '<b>CERRADO</b> un {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTIDO</b> un {0}',
    'WON_OPPORTUNITY' => 'ha <b>GANADO</b> una {0}',
    'WITH' => 'con',

    'LBL_LINK_TYPE_Link' => 'Enlace',
    'LBL_LINK_TYPE_Image' => 'Imagen',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Seleccionar',
    'LBL_POST' => 'Enviar',
    'LBL_AUTHENTICATE' => 'conectar a',
    'LBL_AUTHENTICATION_PENDING' => 'No todas las cuentas externas que ha seleccionado han sido autenticadas. De click en \'Cancelar\' para regresar a la ventana de opciones para autenticar las cuentas externas, o de click en \'Aceptar\' para proceder sin autenticar',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzado' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Mostrar más opciones',
    'LBL_HIDE_OPTIONS' => 'Ocultar opciones',
    'LBL_VIEW' => 'Ver',
    'LBL_POST_TITLE' => 'Actualización del estado del poste para ',
    'LBL_URL_LINK_TITLE' => 'Enlace URL a utilizar',
);
