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
    'LBL_MODULE_NAME' => 'Oportunidades',
    'LBL_MODULE_TITLE' => 'Oportunidades : Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de oportunidades',
    'LBL_LIST_FORM_TITLE' => 'Lista de oportunidades',
    'LBL_OPPORTUNITY_NAME' => 'Nombre de la oportunidad:',
    'LBL_OPPORTUNITY' => 'Oportunidad:',
    'LBL_NAME' => 'Nombre de la oportunidad',
    'LBL_INVITEE' => 'Contactos',
    'LBL_CURRENCIES' => 'Divisas',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nombre',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_LIST_AMOUNT' => 'Cantidad',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Cantidad',
    'LBL_LIST_DATE_CLOSED' => 'Fecha de cierre',
    'LBL_LIST_SALES_STAGE' => 'Etapa de ventas',
    'LBL_ACCOUNT_ID' => 'ID de la cuenta',
    'LBL_CURRENCY_NAME' => 'Nombre de la divisa',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo de la moneda',

    'UPDATE' => 'Oportunidad - Actualizar Moneda',
    'LBL_ACCOUNT_NAME' => 'Nombre de la cuenta:',
    'LBL_AMOUNT' => 'Cantidad:',
    'LBL_AMOUNT_USDOLLAR' => 'Cantidad en dólares EUA:',
    'LBL_CURRENCY' => 'Divisa:',
    'LBL_DATE_CLOSED' => 'Fecha de cierre:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN' => 'Campaña:',
    'LBL_NEXT_STEP' => 'Siguiente paso:',
    'LBL_LEAD_SOURCE' => 'Origen de clientes potenciales:',
    'LBL_SALES_STAGE' => 'Etapa de ventas:',
    'LBL_PROBABILITY' => 'Probabilidad (%):',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DUPLICATE' => 'Posible oportunidad duplicada',
    'MSG_DUPLICATE' => 'El registro para la oportunidad que va a crear podría ser un duplicado de otro registro de oportunidad existente. Los registros de oportunidad con nombres similares se listan a continuación.<br>Haga clic en Guardar para continuar con la creación de esta oportunidad, o en Cancelar para volver al módulo sin crear la oportunidad',
    'LBL_NEW_FORM_TITLE' => 'Nueva oportunidad',
    'LNK_NEW_OPPORTUNITY' => 'Nueva oportunidad',
    'LNK_OPPORTUNITY_LIST' => 'Oportunidades',
    'ERR_DELETE_RECORD' => 'Debe especificar un número de registro a eliminar',
    'LBL_TOP_OPPORTUNITIES' => 'Mis principales oportunidades',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '¿Está seguro que desea eliminar esta oportunidad del proyecto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mis oportunidades cerradas',
    'LBL_TOTAL_OPPORTUNITIES' => 'Oportunidades totales',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades ganadas',
    'LBL_ASSIGNED_TO_ID' => 'Asignada a ID:',
    'LBL_MODIFIED_NAME' => 'Modificada por usuario',
    'LBL_CREATED_USER' => 'Usuario creado',
    'LBL_MODIFIED_USER' => 'Usuario modificado',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campañas',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importar oportunidades',
    'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Contratos',
    'LBL_AOS_QUOTES' => 'Cotizaciones',
);
