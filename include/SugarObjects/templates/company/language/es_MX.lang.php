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
    'ERR_DELETE_RECORD' => '¿Está seguro de que desea quitar esto de este proyecto?',
    'LBL_ACCOUNT_NAME' => 'Nombre de la compañía:',
    'LBL_ACCOUNT' => 'Compañía:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_ADDRESS_INFORMATION' => 'Información de dirección',
    'LBL_ANNUAL_REVENUE' => 'Ventas anuales:',
    'LBL_ANY_ADDRESS' => 'Dirección:',
    'LBL_ANY_EMAIL' => 'e-Mail:',
    'LBL_EMAIL_NON_PRIMARY' => 'Correo Electrónico No Principal',
    'LBL_ANY_PHONE' => 'Teléfono:',
    'LBL_ASSIGNED_TO_NAME' => 'Usuario:',
    'LBL_RATING' => 'Percepción',
    'LBL_ASSIGNED_TO' => 'Asignado a:',
    'LBL_ASSIGNED_USER' => 'Asignado a:',
    'LBL_ASSIGNED_TO_ID' => 'Asignado a:',
    'LBL_BILLING_ADDRESS_CITY' => 'Ciudad de facturación:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'País de facturación:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Código postal de facturación:',
    'LBL_BILLING_ADDRESS_STATE' => 'Estado de facturación:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Dirección de facturación 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Dirección de facturación 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Dirección de facturación 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Dirección de facturación:',
    'LBL_BILLING_ADDRESS' => 'Dirección de facturación:',
    'LBL_ACCOUNT_INFORMATION' => 'Información de la cuenta',
    'LBL_CITY' => 'Ciudad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_COUNTRY' => 'País:',
    'LBL_DATE_ENTERED' => 'Fecha de creación:',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_DESCRIPTION_INFORMATION' => 'Información',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DUPLICATE' => 'Duplicar cuenta',
    'LBL_EMAIL' => 'e-Mail:',
    'LBL_EMPLOYEES' => 'Empleados:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Sector de actividad:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_LIST_CITY' => 'Ciudad',
    'LBL_LIST_EMAIL_ADDRESS' => 'e-Mail',
    'LBL_LIST_PHONE' => 'Teléfono',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_MEMBER_OF' => 'Miembro de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Filiales',
    'LBL_NAME' => 'Nombre:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'otro e-Mail:',
    'LBL_OTHER_PHONE' => 'Otro teléfono:',
    'LBL_OWNERSHIP' => 'Propietario:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID de la cuenta padre',
    'LBL_PHONE_ALT' => 'Otro teléfono:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Línea directa:',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_EMAIL_ADDRESS' => 'e-Mail',
    'LBL_EMAIL_ADDRESSES' => 'e-Mails',
    'LBL_POSTAL_CODE' => 'Código postal:',
    'LBL_SAVE_ACCOUNT' => 'Guardar cuenta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Ciudad de envío:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de envío:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Código postal de envío:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Estado de envío:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Dirección de envío 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Dirección de envío 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Dirección de envío 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Dirección de envío:',
    'LBL_SHIPPING_ADDRESS' => 'Dirección de envío:',

    'LBL_STATE' => 'Estado o región:',
    'LBL_TICKER_SYMBOL' => 'Code boursier:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Sitio Web:',

    'LNK_ACCOUNT_LIST' => 'Cuentas',
    'LNK_NEW_ACCOUNT' => 'Crear cuenta',

    'MSG_DUPLICATE' => 'La cuenta está duplicada. Las cuentas con nombres similares se listan a continuación.<br>De click en Crear Cuenta para continuar o seleccione una de las cuentas que se listan a continuación.',
    'MSG_SHOW_DUPLICATES' => 'La cuenta está duplicada. Las cuentas con nombres similares se listan a continuación.<br>De click en Guardar para continuar o cancele para regresar al módulo sin crear la cuenta.',

    'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',

    'LBL_EDIT_BUTTON' => 'Editar  ',
    'LBL_REMOVE' => 'Quitar',

);
