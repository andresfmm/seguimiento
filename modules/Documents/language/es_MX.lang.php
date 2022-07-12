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
    //module
    'LBL_MODULE_NAME' => 'Documentos',
    'LBL_MODULE_TITLE' => 'Documentos : inicio',
    'LNK_NEW_DOCUMENT' => 'Crear documento',
    'LNK_DOCUMENT_LIST' => 'Lista de documentos',
    'LBL_DOC_REV_HEADER' => 'Versiones',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de documentos',
    //vardef labels
    'LBL_NAME' => 'Nombre del documento',
    'LBL_DESCRIPTION' => 'Descripción',
    'LBL_CATEGORY' => 'Categoría',
    'LBL_SUBCATEGORY' => 'Subcategoría',
    'LBL_STATUS' => 'Estado',
    'LBL_CREATED_BY' => 'Creado por',
    'LBL_DATE_ENTERED' => 'Fecha de creación',
    'LBL_DATE_MODIFIED' => 'Fecha de modificación',
    'LBL_DELETED' => 'Eliminado',
    'LBL_MODIFIED' => 'Modificado por ID',
    'LBL_MODIFIED_USER' => 'Modificado por',
    'LBL_CREATED' => 'Creado por',
    'LBL_REVISIONS' => 'Versiones',
    'LBL_RELATED_DOCUMENT_ID' => 'ID de documento relacionado',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID de versión de documento relacionado',
    'LBL_IS_TEMPLATE' => 'Es una plantilla',
    'LBL_TEMPLATE_TYPE' => 'Tipo de documento',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
    'LBL_REVISION_NAME' => 'Núméro de versión',
    'LBL_MIME' => 'Tipo MIME',
    'LBL_REVISION' => 'Versión',
    'LBL_DOCUMENT' => 'Documento relacionado',
    'LBL_LATEST_REVISION' => 'Última versión',
    'LBL_CHANGE_LOG' => 'Historial de cambios',
    'LBL_ACTIVE_DATE' => 'Fecha de publicación',
    'LBL_EXPIRATION_DATE' => 'Fecha de expiración',
    'LBL_FILE_EXTENSION' => 'Extensión de archivo',
    'LBL_LAST_REV_MIME_TYPE' => 'Última revisión de tipo MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Sin especificar',
    'LBL_HOMEPAGE_TITLE' => 'Mis documentos',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nuevo documento',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nombre del documento:',
    'LBL_FILENAME' => 'Nombre del archivo:',
    'LBL_LIST_FILENAME' => 'Archivo:',
    'LBL_DOC_VERSION' => 'Versión:',
    'LBL_FILE_UPLOAD' => 'Archivo:',

    'LBL_CATEGORY_VALUE' => 'Categoría:',
    'LBL_LIST_CATEGORY' => 'Categoría',
    'LBL_SUBCATEGORY_VALUE' => 'Subcategoría:',
    'LBL_DOC_STATUS' => 'Estado:',
    'LBL_LAST_REV_CREATOR' => 'Versión creada por:',
    'LBL_LASTEST_REVISION_NAME' => 'Nombre de última versión:',
    'LBL_SELECTED_REVISION_NAME' => 'Nombre de la versión seleccionada:',
    'LBL_CONTRACT_STATUS' => 'Estado del contrato:',
    'LBL_CONTRACT_NAME' => 'Nombre del Contrato:',
    'LBL_DET_RELATED_DOCUMENT' => 'Documento relacionado:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Versión de documento relacionado:",
    'LBL_DET_IS_TEMPLATE' => '¿Plantilla?',
    'LBL_DET_TEMPLATE_TYPE' => 'Tipo de documento:',
    'LBL_DOC_DESCRIPTION' => 'Descripción:',
    'LBL_DOC_ACTIVE_DATE' => 'Fecha de publicación:',
    'LBL_DOC_EXP_DATE' => 'Fecha de expiración:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Lista de documentos',
    'LBL_LIST_DOCUMENT' => 'Documento',
    'LBL_LIST_SUBCATEGORY' => 'Subcategoría',
    'LBL_LIST_REVISION' => 'Versión',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publicado por',
    'LBL_LIST_LAST_REV_DATE' => 'Fecha de versión',
    'LBL_LIST_VIEW_DOCUMENT' => 'Ver',
    'LBL_LIST_ACTIVE_DATE' => 'Fecha de publicación',
    'LBL_LIST_EXP_DATE' => 'Fecha de expiración',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LINKED_ID' => 'Enlazado a',
    'LBL_SELECTED_REVISION_ID' => 'ID de versión seleccionado',
    'LBL_LATEST_REVISION_ID' => 'ID de última revisión',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nombre de archivo de la versión seleccionada',
    'LBL_FILE_URL' => 'URL de archivo',

    //document search form.
    'LBL_SF_CATEGORY' => 'Categoría:',
    'LBL_SF_SUBCATEGORY' => 'Subcategoría:',

    'DEF_CREATE_LOG' => 'Documento creado',

    //error messages
    'ERR_DOC_NAME' => 'Nombre del documento',
    'ERR_DOC_ACTIVE_DATE' => 'Fecha de publicación',
    'ERR_FILENAME' => 'Nombre del archivo',
    'ERR_DOC_VERSION' => 'Versión de documento',
    'ERR_DELETE_CONFIRM' => '¿Desea eliminar esta versión del documento?',
    'ERR_DELETE_LATEST_VERSION' => 'No tiene permisos para eliminar la última versión de un documento',
    'LNK_NEW_MAIL_MERGE' => 'Combinar correspondencia',
    'ERR_MISSING_FILE' => 'Este documento le falta un archivo, probablemente debido a un error durante la carga. Por favor vuelva a intentar cargar el archivo o en contacto con su administrador.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nombre',
    'LBL_LIST_IS_TEMPLATE' => '¿Plantilla?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Tipo de documento',
    'LBL_LAST_REV_CREATE_DATE' => 'Fecha de creación de última versión',
    'LBL_CONTRACTS' => 'Contratos',
    'LBL_CREATED_USER' => 'Usuario creado',
    'LBL_DOCUMENT_INFORMATION' => 'Información de documento', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID de origen del documento',
    'LBL_DOC_TYPE' => 'Origen',
    'LBL_DOC_TYPE_POPUP' => 'Seleccione el origen del archivo<br> que luego estará disponible',
    'LBL_DOC_URL' => 'URL de origen del documento',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nombre del archivo',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Los 20 archivos modificados recientemente serán mostrados en orden descendente en la lista debajo. Use la búsqueda para encontrar otros archivos',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nombre del archivo',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'El usuario intentó acceder a un API externo no válido ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'La comprobación de inicio de sesión falló para API externa ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Incidencias',

    'LBL_AOS_CONTRACTS' => 'Contratos',
);
