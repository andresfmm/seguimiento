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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Usuario o contraseña incorrecta',
    'ERR_INI_ZLIB' => 'No pudo deshabilitarse la compresión Zlib temporalmente.  Puede que "Comprobar configuración" falle',
    'ERR_NO_IMAP' => 'No se han encontrado las librerías de IMAP.  Por favor, resuelva esto antes de continuar con la configuración de e-Mail entrante',
    'ERR_NO_OPTS_SAVED' => 'No se han guardado valores óptimos con su cuenta de e-Mail entrante.  Por favor, revise la configuración',
    'ERR_TEST_MAILBOX' => 'Por favor, compruebe su configuración e inténtelo de nuevo',

    'LBL_ASSIGN_TO_USER' => 'Asignar a usuario',
    'LBL_AUTOREPLY' => 'Plantilla de respuesta automática',
    'LBL_AUTOREPLY_HELP' => 'Seleccione una respuesta automática para notificar a los remitentes de e-Mail que su respuesta ha sido recibida',
    'LBL_BASIC' => 'Información de la cuenta de e-Mail',
    'LBL_CASE_MACRO' => 'Macro de casos',
    'LBL_CASE_MACRO_DESC' => 'Establece la macro que será analizada y utilizada para vincular el e-Mail importado a un caso',
    'LBL_CASE_MACRO_DESC2' => 'Establezca ésto a cualquier valor que desee, pero preserve el <b>"%1"</b>',
    'LBL_CLOSE_POPUP' => 'Cerrar ventana',
    'LBL_CREATE_TEMPLATE' => 'Crear',
    'LBL_DELETE_SEEN' => 'Eliminar e-Mails leídos tras importación',
    'LBL_EDIT_TEMPLATE' => 'Editar',
    'LBL_EMAIL_OPTIONS' => 'Opciones de gestión de e-Mail',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opciones de gestión de rebotes',
    'LBL_FILTER_DOMAIN_DESC' => 'Especificar un dominio al cual no se enviarán respuestas automáticas',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Seleccione esta opción para que se creen automáticamente registros de correo en SuiteCRM para todos los correos entrantes.',
    'LBL_FILTER_DOMAIN' => 'No enviar respuestas automáticas a este dominio',
    'LBL_FIND_SSL_WARN' => '<br>La comprobación de SSL puede durar bastante tiempo.  Por favor, tenga paciencia.<br>',
    'LBL_FROM_ADDR' => 'Dirección del remitente',
    'LBL_FROM_ADDR_DESC' => 'La dirección de correo electrónico puesta aquí no aparezca en el campo "De" dirección del correo electrónico del remitente debido a las restricciones impuestas por el proveedor de servicios de correo electrónico. En estas circunstancias, la dirección de correo electrónico que se define es la del servidor de correo saliente que esta configurado.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Nombre del remitente',
    'LBL_GROUP_QUEUE' => 'Asignar a grupo',
    'LBL_HOME' => 'Inicio',
    'LBL_LIST_MAILBOX_TYPE' => 'Utilización de la cuenta de e-Mail',
    'LBL_LIST_NAME' => 'Nombre:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tipo',
    'LBL_LIST_SERVER_URL' => 'Servidor de e-Mail',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LOGIN' => 'Nombre de usuario',
    'LBL_MAILBOX_DEFAULT' => 'BANDEJA DE ENTRADA',
    'LBL_MAILBOX_SSL' => 'Usar SSL',
    'LBL_MAILBOX_TYPE' => 'Acciones posibles',
    'LBL_DISTRIBUTION_METHOD' => 'Método de distribución',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Nueva plantilla de respuesta automática para caso',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Seleccione una respuesta automática para notificar a los remitentes de e-Mail que se ha creado un nuevo caso. El e-Mail contiene el número de casos en la línea de asunto acorde con la configuración de la macro de caso.  Esta respuesta sólo se enviará cuando se reciba el primer e-Mail de un remitente',
    'LBL_MAILBOX' => 'Carpetas en seguimiento',
    'LBL_TRASH_FOLDER' => 'Papelera',
    'LBL_SENT_FOLDER' => 'Elementos enviados',
    'LBL_SELECT' => 'Seleccionar',
    'LBL_MARK_READ_NO' => 'e-Mail marcado como borrado tras importación',
    'LBL_MARK_READ_YES' => 'e-Mail dejado en el servidor tras importación',
    'LBL_MARK_READ' => 'Dejar mensajes en el servidor',
    'LBL_MAX_AUTO_REPLIES' => 'Número de respuestas automáticas',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Establece el máximo número de respuestas automáticas a enviar a una única dirección de e-Mail durante un período de 24 horas',
    'LBL_PERSONAL_MODULE_NAME' => 'Cuenta de e-Mail personal',
    'LBL_CREATE_CASE' => 'Crear caso desde e-Mail',
    'LBL_CREATE_CASE_HELP' => 'Seleccione para crear automáticamente un registro de contacto en SuiteCRM desde los correos entrantes.',
    'LBL_MODULE_NAME' => 'Cuenta de e-Mail de grupo',
    'LBL_BOUNCE_MODULE_NAME' => 'Bandeja de gestión de e-Mail rebotado',
    'LBL_MODULE_TITLE' => 'e-Mail entrante',
    'LBL_NAME' => 'Nombre',
    'LBL_NONE' => 'Ninguno',
    'LBL_ONLY_SINCE_NO' => 'No. Comprobar contra todos los e-Mails en el servidor de e-Mail',
    'LBL_ONLY_SINCE_YES' => 'Sí.',
    'LBL_PASSWORD' => 'Contraseña',
    'LBL_POP3_SUCCESS' => 'Su prueba de conexión de POP3 tuvo éxito',
    'LBL_POPUP_TITLE' => 'Comprobar configuración',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Seleccionar carpetas suscritas',
    'LBL_SELECT_TRASH_FOLDERS' => 'Seleccionar papelera',
    'LBL_SELECT_SENT_FOLDERS' => 'Seleccionar carpeta de elementos enviados',
    'LBL_DELETED_FOLDERS_LIST' => 'Las siguientes carpetas %s o no existen o han sido eliminadas del servidor',
    'LBL_PORT' => 'Puerto del servidor de e-Mail',
    'LBL_REPLY_TO_NAME' => 'Nombre de "Responder a"',
    'LBL_REPLY_TO_ADDR' => 'Dirección de "Responder a"',
    'LBL_SAME_AS_ABOVE' => 'Usando el mismo Nombre/Dirección',
    'LBL_SERVER_OPTIONS' => 'Configuración avanzada',
    'LBL_SERVER_TYPE' => 'Protocolo del servidor de e-Mail',
    'LBL_SERVER_URL' => 'Dirección del servidor de e-Mail',
    'LBL_SSL_DESC' => 'Si su servidor de e-Mail soporta conexiones seguras de sockets (SSL), habilitar esta opción forzará conexiones SSL al importar el e-Mail',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'El equipo seleccionado tiene acceso a la cuenta de e-Mail',
    'LBL_SSL' => 'Usar SSL',
    'LBL_STATUS' => 'Estado',
    'LBL_SYSTEM_DEFAULT' => 'Predeterminado en el sistema',
    'LBL_TEST_BUTTON_TITLE' => 'Probar',
    'LBL_TEST_SETTINGS' => 'Probar configuración',
    'LBL_TEST_SUCCESSFUL' => 'Conexión completada con éxito',
    'LBL_TEST_WAIT_MESSAGE' => 'Un momento por favor...',
    'LBL_WARN_IMAP_TITLE' => 'e-Mail entrante deshabilitado',
    'LBL_WARN_IMAP' => 'Avisos:',
    'LBL_WARN_NO_IMAP' => 'El e-Mail entrante <b>no puede</b> funcionar sin las librerías de C del cliente de IMAP habilitadas/compiladas en el módulo de PHP.  Por favor, contacte con su administrador para resolver este problema',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Nueva cuenta de e-Mail de grupo',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nueva cuenta de gestión de rebotes',
    'LNK_LIST_MAILBOXES' => 'Todas las cuentas de e-Mail',
    'LNK_LIST_SCHEDULER' => 'Planeaciones',
    'LNK_SEED_QUEUES' => 'Crear cabeza de serie para colas de equipos',
    'LBL_GROUPFOLDER_ID' => 'ID de carpeta de grupo',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permitir a los usuarios enviar e-Mails usando en "De" el nombre y la dirección como dirección de respuesta',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Cuando esta opción está seleccionada, el nombre y dirección de remitente asociado con esta cuenta de e-Mail de grupo aparecerá como una opción para el campo De cuando redacte e-Mails para usuarios que tengan acceso a la cuenta de e-Mail de grupo',
    'LBL_STATUS_ACTIVE' => 'Activo',
    'LBL_STATUS_INACTIVE' => 'Inactivo',
    'LBL_IS_PERSONAL' => 'Personal',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importar e-Mails automáticamente',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Aviso: Está modificando su configuración de importación automática lo cual puede provocar pérdida de datos',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Aviso: La importación automática debe estar habilitada para la creación automática de casos',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Borradores',
    'LBL_LIST_TITLE_MY_INBOX' => 'Bandeja de entrada',
    'LBL_LIST_TITLE_MY_SENT' => 'Email Enviado',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'e-Mails archivados',
    'LNK_MY_DRAFTS' => 'Borradores',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Ver Email',
    'LNK_QUICK_REPLY' => 'Responder',
    'LNK_SENT_EMAIL_LIST' => 'e-Mails enviados',
    'LBL_EDIT_LAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Modificado por',
    'LBL_SERVICE' => 'Servicio',
    'LBL_STORED_OPTIONS' => 'Opciones almacenadas',
    'LBL_GROUP_ID' => 'ID de grupo',
);
