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
    'ERR_NO_OPPS' => 'Por favor, cree al menos una Oportunidad para ver sus gráficos',
    'LBL_ALL_OPPORTUNITIES' => 'El valor total de todas las oportunidades es',
    'LBL_CHART_TYPE' => 'Tipo de gráfico:',
    'LBL_CREATED_ON' => 'Ejecutado por última vez el',
    'LBL_CLOSE_DATE_START' => 'Fecha de cierre esperada - De:',
    'LBL_CLOSE_DATE_END' => 'Fecha de cierre esperada - Para:',
    'LBL_DATE_END' => 'Fecha final:',
    'LBL_DATE_RANGE_TO' => 'a',
    'LBL_DATE_RANGE' => 'El rango de fechas es',
    'LBL_DATE_START' => 'Fecha de inicio:',
    'LBL_EDIT' => 'Editar',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Muestra las cantidades acumuladas de oportunidades por cliente potencial seleccionado por el resultado para los usuarios seleccionados. El resultado se basa en si la etapa de la venta es ganada, perdido o cualquier otro valor.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Todas las oportunidades por cliente potencial y por resultados',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Muestra las cantidades acumuladas de oportunidades por cliente potencial seleccionado por los usuarios seleccionados.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Todas las oportunidades por cliente potencial',
    'LBL_LEAD_SOURCE_OTHER' => 'Otra',
    'LBL_LEAD_SOURCES' => 'Orígenes de clientes potenciales:',
    'LBL_MODULE_NAME' => 'Cuadro de mando',
    'LBL_MODULE_TITLE' => 'Cuadro de mando: Inicio',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Muestra las cantidades acumuladas de oportunidades por mes y por resultado para los usuarios seleccionados donde la fecha estimada de cierre está dentro del rango de fechas especificado.  El resultado se basa en si el etapa de venta es ganada, perdida o cualquier otro valor',
    'LBL_OPP_SIZE' => 'Valor de la oportunidad en',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'oportunidades donde el cliente potencial es',
    'LBL_OPPS_IN_STAGE' => 'con etapa de venta',
    'LBL_OPPS_OUTCOME' => ' donde el resultado es',
    'LBL_OPPS_WORTH' => 'oportunidades valoradas en',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Muestra las cantidades acumuladas por las etapas de venta seleccionados para sus oportunidades donde la fecha de cierre esperada está dentro del rango de fechas especificado',
    'LBL_REFRESH' => 'Actualizar',
    'LBL_ROLLOVER_DETAILS' => 'Mueva el cursor sobre una barra para más detalle',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Mueva el cursor sobre una sección para más detalle',
    'LBL_SALES_STAGE_FORM_DESC' => 'Muestra las cantidades acumuladas de oportunidades por los etapas de venta seleccionados para los usuarios seleccionados donde la fecha estimada de cierre está dentro del rango de fechas especificado',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Proceso por Etapa de Ventas',
    'LBL_SALES_STAGES' => 'Etapas de venta:',
    'LBL_TOTAL_PIPELINE' => 'Total en pipeline',
    'LBL_USERS' => 'Usuarios:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline por mes por resultado',
    'LBL_YEAR' => 'Año:',
    'LNK_NEW_ACCOUNT' => 'Crear cuenta',
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_CASE' => 'Nuevo caso',
    'LNK_NEW_CONTACT' => 'Nuevo contacto',
    'LNK_NEW_LEAD' => 'Nuevo cliente potencial',
    'LNK_NEW_MEETING' => 'Programar reunión',
    'LNK_NEW_NOTE' => 'Nueva nota o adjunto',
    'LNK_NEW_OPPORTUNITY' => 'Nueva oportunidad',
    'LNK_NEW_TASK' => 'Nueva tarea',
    'NTC_NO_LEGENDS' => 'Ninguno',

    'LBL_TITLE' => 'Título:',
    'LBL_MY_MODULES_USED_SIZE' => 'Número de accesos',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Proceso por Etapa de Ventas',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Fuentes de Contacto por Resultado',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Resultados por mes',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Oportunidades Por Fuente de Contacto',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Mi Proceso por Etapa de Ventas',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Mis módulos Utilizados (últimos 30 días)',
);
