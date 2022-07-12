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
    'ERR_DELETE_RECORD' => 'Debe especificar un número de registro a eliminar',
    'LBL_ACCOUNT_ID' => 'ID de la cuenta:',
    'LBL_CASE_ID' => 'ID del caso:',
    'LBL_CLOSE' => 'Cerrar:',
    'LBL_CONTACT_ID' => 'ID del contacto:',
    'LBL_CONTACT_NAME' => 'Contacto:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notas',
    'LBL_DESCRIPTION' => 'Nota',
    'LBL_EMAIL_ADDRESS' => 'e-Mail:',
    'LBL_EMAIL_ATTACHMENT' => 'Adjunto por e-Mail',
    'LBL_FILE_MIME_TYPE' => 'Tipo MIME',
    'LBL_FILE_URL' => 'URL de archivo',
    'LBL_FILENAME' => 'Adjunto:',
    'LBL_LEAD_ID' => 'ID del cliente potencial:',
    'LBL_LIST_CONTACT_NAME' => 'Contacto',
    'LBL_LIST_DATE_MODIFIED' => 'Modificado',
    'LBL_LIST_FILENAME' => 'Adjunto',
    'LBL_LIST_FORM_TITLE' => 'Listea de notas',
    'LBL_LIST_RELATED_TO' => 'Relacionado con',
    'LBL_LIST_SUBJECT' => 'Asunto',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_CONTACT' => 'Contacto',
    'LBL_MODULE_NAME' => 'Notas',
    'LBL_MODULE_TITLE' => 'Notas : Inicio',
    'LBL_NEW_FORM_TITLE' => 'Nueva nota o archivo adjunto',
    'LBL_NOTE_STATUS' => 'Nota',
    'LBL_NOTE_SUBJECT' => 'Asunto:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Adjuntos',
    'LBL_NOTE' => 'Nota:',
    'LBL_OPPORTUNITY_ID' => 'ID de oportunidad:',
    'LBL_PARENT_ID' => 'ID padre:',
    'LBL_PARENT_TYPE' => 'Tipo de padre',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_PORTAL_FLAG' => '¿Mostrar en el portal?',
    'LBL_EMBED_FLAG' => '¿Incluir en e-Mail?',
    'LBL_PRODUCT_ID' => 'ID de producto:',
    'LBL_QUOTE_ID' => 'ID de presupuesto:',
    'LBL_RELATED_TO' => 'Relacionado con:',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de notas',
    'LBL_STATUS' => 'Estado',
    'LBL_SUBJECT' => 'Asunto:',
    'LNK_IMPORT_NOTES' => 'Importar notas',
    'LNK_NEW_NOTE' => 'Nueva nota o adjunto',
    'LNK_NOTE_LIST' => 'Notas',
    'LBL_MEMBER_OF' => 'Miembro de:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
    'LBL_REMOVING_ATTACHMENT' => 'Quitando adjunto...',
    'ERR_REMOVING_ATTACHMENT' => 'Error al quitar adjunto...',
    'LBL_CREATED_BY' => 'Creado por',
    'LBL_MODIFIED_BY' => 'Modificado por',
    'LBL_SEND_ANYWAYS' => 'Este correo no tiene asunto. ¿Enviar/guardar de todas formas?',
    'LBL_NOTE_INFORMATION' => 'Información de la nota', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Mis notas',
    'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Nombre',
    'LBL_LAST_NAME' => 'Apellidos',
    'LBL_DATE_ENTERED' => 'Fecha de creación',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación',
    'LBL_DELETED' => 'Eliminado',
    'LBL_FILE_CONTENTS' => 'Contenido del archivo',
);
