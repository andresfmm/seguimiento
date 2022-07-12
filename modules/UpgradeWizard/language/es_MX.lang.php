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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'No se ha podido determinar el grupo',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'No se ha podido determinar el propietario',
    'ERR_UW_CONFIG_WRITE' => 'Error al actualizar config.php con la información de la nueva versión',
    'ERR_UW_CONFIG' => 'Por favor, de permisos de escritura para su archivo config.php, y recargue esta página',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Directorio no escribible',
    'ERR_UW_FILE_NOT_COPIED' => 'Archivo no copiado',
    'ERR_UW_FILE_NOT_DELETED' => 'Problema al quitar el paquete',
    'ERR_UW_FILE_NOT_READABLE' => 'El archivo no ha podido ser leído',
    'ERR_UW_FILE_NOT_WRITABLE' => 'El archivo no ha podido ser movido o escrito',
    'ERR_UW_FLAVOR_2' => 'Edición de la actualización:',
    'ERR_UW_FLAVOR' => 'Edición del Sistema SuiteCRM: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log no ha podido ser creado/escrito.  Por favor, corrija los permisos en su directorio de SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload está establecido a un valor mayor que 1.  Por favor, cambie esto en su archivo php.ini y reinicie su servidor web',
    'ERR_UW_NO_FILE_UPLOADED' => 'Por favor, especifique un archivo e inténtelo de nuevo',
    'ERR_UW_NO_FILES' => 'Ha ocurrido un error, no se han encontrado archivos para comprobar',
    'ERR_UW_NO_MANIFEST' => 'El archivo zip no contiene un archivo manifest.php.  No se puede continuar',
    'ERR_UW_NO_VIEW' => 'La vista especificada no es válida',
    'ERR_UW_NOT_VALID_UPLOAD' => 'No es una subida de fichero válida',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'No ha podido crearse el directorio temporal. Compruebe los permisos de ficheros',
    'ERR_UW_ONLY_PATCHES' => 'Sólo puede subir parches en esta página',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Se han encontrado errores durante la comprobación previa',
    'ERR_UW_UPLOAD_ERR' => 'Ha ocurrido un error en la subida del archivo, por favor, inténtelo de nuevo<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Versión del Sistema SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'Versión de PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Versión del Sistema SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'Esta página no es para ejecutar ',
    'LBL_BUTTON_BACK' => '< Atrás',
    'LBL_BUTTON_CANCEL' => 'Cancelar',
    'LBL_BUTTON_DELETE' => 'Eliminar paquete',
    'LBL_BUTTON_DONE' => 'Hecho',
    'LBL_BUTTON_EXIT' => 'Salir',
    'LBL_BUTTON_NEXT' => 'Siguiente >',
    'LBL_BUTTON_RECHECK' => 'Comprobar de nuevo',
    'LBL_BUTTON_RESTART' => 'Reiniciar',

    'LBL_UPLOAD_UPGRADE' => 'Subir una actualización',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Copia de seguridad',
    'LBL_UW_BACKUP_FILES_EXIST' => 'La copia de seguridad de los archivos de esta actualización pueden encontrarse en',
    'LBL_UW_BACKUP' => 'Copia de seguridad',
    'LBL_UW_CANCEL_DESC' => 'El asistente de actualizaciones ha sido cancelado.  Todos los archivos temporales y el archivo zip subido han sido eliminados.<br><br>Presione "Hecho" para iniciar de nuevo el asistente de actualizaciones',
    'LBL_UW_CHECK_ALL' => 'Comprobar todo',
    'LBL_UW_CHECKLIST' => 'Pasos de la actualización',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Copias de seguridad de archivos sobrescritos están en el siguiente directorio: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Combinar manualmente los siguientes archivos: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Proceso de actualización: combinar manualmente archivos',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Por favor, utilice cualquier el método diff que le sea más familiar para combinar estos archivos.  Hasta que no haya completado este proceso, su instalación de SuiteCRM estará en un estado incierto, y la actualización incompleta.',
    'LBL_UW_COMPLETE' => 'Completado',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Todos los requerimientos del sistema han sido satisfechos',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Configuración de PHP: Paso por referencia en tiempo de llamada',
    'LBL_UW_COMPLIANCE_CURL' => 'Módulo cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'Módulo IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Módulo MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Parámetro mbstring.func_overload de MBStrings',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Configuración de PHP: Límite de memoria',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Setting: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Versión de la base de datos mínima',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Ruta de php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Versión mínima de PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Configuración de PHP: Modo seguro',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Configuración detectada',
    'LBL_UW_COMPLIANCE_XML' => 'Análisis XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Soporte Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Versión PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'Archivos copiados con éxito',

    'LBL_UW_DB_CHOICE1' => 'El ásistente de actualizaciones ejecutará el SQL',
    'LBL_UW_DB_CHOICE2' => 'Consultas de SQL lanzadas manualmente',
    'LBL_UW_DB_ISSUES_PERMS' => 'Privilegios de base de datos',
    'LBL_UW_DB_METHOD' => 'Método de actualización en base de datos',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Todos los privilegios disponibles',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Privilegio necesario',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Las siguientes actualizaciones se han instalado:',
    'LBL_UW_END_LOGOUT_PRE' => 'La actualización está completa',
    'LBL_UW_END_LOGOUT_PRE2' => 'De click en "Hecho" para salir del asistente de actualización',
    'LBL_UW_END_LOGOUT' => 'Por favor, cierre su sesión si planea realizar más actualizaciones además de este parche/nivel de actualización',

    'LBL_UW_FILE_DELETED' => ' ha sido eliminado<br>',
    'LBL_UW_FILE_GROUP' => 'Grupo',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Permisos de archivo',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Todos los archivos son escribibles</b>',
    'LBL_UW_FILE_OWNER' => 'Propietario',
    'LBL_UW_FILE_PERMS' => 'Permisos',
    'LBL_UW_FILE_UPLOADED' => ' ha sido subido',
    'LBL_UW_FILE' => 'Nombre del archivo',
    'LBL_UW_FILES_QUEUED' => 'Las siguientes actualizaciones están listas para ser instaladas:',
    'LBL_UW_FILES_REMOVED' => 'Los siguientes archivos se eliminarán del sistema: <br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>De click en siguiente para actualizar paquetes</b>',
    'LBL_UW_FROZEN' => 'Debe realizar los siguientes pasos antes de continuar',
    'LBL_UW_HIDE_DETAILS' => 'Ocultar detalles',
    'LBL_UW_IN_PROGRESS' => 'En progreso',
    'LBL_UW_INCLUDING' => 'Incluyendo',
    'LBL_UW_INCOMPLETE' => 'Incompleto',
    'LBL_UW_MANUAL_MERGE' => 'Combinación de archivos',
    'LBL_UW_MODULE_READY' => 'El módulo está listo para ser instalado. Pulsa en Proceder para realizar la instalación.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'No se han detectado actualizaciones registradas',
    'LBL_UW_NONE' => 'Ninguno',
    'LBL_UW_OVERWRITE_DESC' => 'Todos los archivos cambiados serán sobrescritos, incluyendo cualquier personalización al código fuente y cambios a las plantillas que haya podido realizar. ¿Está seguro que desea proceder?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => '¿Crear tarea para combinación manual?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => '¿Enviarse a si mismo un e-Mail recordatorio para la combinación manual?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Los siguientes archivos han sido modificados.  Desmarque los elementos que requieren una combinación manual. <i>Los cambios de diseño detectados son desmarcados automáticamente; marque los que deberían ser sobrescritos',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'No se requiere combinación manual de archivos',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'No es necesario',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Archivos Auto-preservados:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Todos los tests de inspección previa han sido satisfactorios. Presione "Siguiente" para proceder con estos cambios',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'De click en Siguiente para copiar los archivos actualizados al sistema',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Nota: </b> El resto del proceso de actualización es obligatorio, y dando click en Siguiente lo obligará a completar el proceso. Si no desea proceder, de click en el botón de Cancelar',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Cambiar todos los archivos',

    'LBL_UW_REBUILD_TITLE' => 'Reconstruir resultado',
    'LBL_UW_SCHEMA_CHANGE' => 'Cambios en el esquema',

    'LBL_UW_SHOW_COMPLIANCE' => 'Mostrar configuración detectada',
    'LBL_UW_SHOW_DB_PERMS' => 'Mostrar permisos de base de datos que faltan',
    'LBL_UW_SHOW_DETAILS' => 'Mostrar detalles',
    'LBL_UW_SHOW_DIFFS' => 'Mostrar archivos que requieren combinanción manual',
    'LBL_UW_SHOW_NW_FILES' => 'Mostrar archivos con permisos incorrectos',
    'LBL_UW_SHOW_SCHEMA' => 'Mostrar script de cambios al esquema',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Mostrar consultas erróneas',
    'LBL_UW_SHOW' => 'Mostrar',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Archivos omitidos',
    'LBL_UW_SQL_RUN' => 'Comprobar cuando se haya ejecutado el SQL manualmente',
    'LBL_UW_START_DESC' => 'Bienvenido al asistente de actualizaciones de SuiteCRM. Este asistente está diseñado para asistir a los administradores en la actualización de sus instancias de SuiteCRM. Por favor, siga con atención las instrucciones.',
    'LBL_UW_START_DESC2' => 'Nota: Le recomendamos que cree una copia de la instancia de SuiteCRM que se utiliza en producción y pruebe el paquete de actualización antes de implementar la nueva versión. Si ha cambiado el archivo "composer.json", ejecute después de finalizado el proceso de actualización:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'De click en Siguiente para realizar una verificación en su sistema para asegurarse que el sistema está listo para la actualización. La verificación incluye permisos de archivos, privilegios en base de datos y configuraciones en el servidor',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'El nuevo asistente de actualizaciones continuará con el proceso de instalación. Por favor, continue con su actualización',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Bienvenido al nuevo asistente de actualizaciones',

    'LBL_UW_TITLE_CANCEL' => 'Cancelar',
    'LBL_UW_TITLE_COMMIT' => 'Realizar actualización',
    'LBL_UW_TITLE_END' => 'Reporte',
    'LBL_UW_TITLE_PREFLIGHT' => 'Comprobaciones previas',
    'LBL_UW_TITLE_START' => 'Iniciar',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Comprobaciones del sistema',
    'LBL_UW_TITLE_UPLOAD' => 'Subir actualización',
    'LBL_UW_TITLE' => 'Asistente de actualizaciones',
    'LBL_UW_UNINSTALL' => 'Desinstalar',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Aceptar licencia',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Convertir licencia',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Inicio en progreso',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Comprobaciones del sistema en progreso',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Comprobación de licencia en progreso',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Comprobaciones previas en progreso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Copia de archivos en proceso',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Realización de la actualización en progreso',
    'LBL_UW_COMMIT_DESC' => 'De click en Siguiente para ejecutar scripts adicionales',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Scripts de actualizaciones en progreso',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Resumen de la actualización en progreso',
    'LBL_UPGRADE_IN_PROGRESS' => 'en progreso     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Tiempo transcurrido',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Cancelación de actualización y limpieza en progreso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'La actualización puede demorar un tiempo',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Comprobaciones de subida en progreso',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Subiendo paquete de actualización... ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'El asistente de actualizaciones eliminará el antiguo esquema 4.5.1',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Eliminación manual del esquema Post-instalación',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Método de eliminación de esquema anterior',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Mostrar el antiguo esquema que sería eliminado',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Consultas ignoradas',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Se requiere la versión de PHP 5 o superior',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Su versión de PHP no está soportada por SuiteCRM.  Necesitará instalar una versión que sea compatible con la aplicación SuiteCRM.  Por favor, consulte la matriz de compatibilidad en las notas de lanzamiento para información sobre las versiones de PHP soportadas. Su versión es la ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'El modo de compatibilidad hacia atrás de PHP está habilitado. Establezca zend.ze1_compatibility_mode a Off antes de continuar',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Acción',
    'LBL_ML_CANCEL' => 'Cancelar',
    'LBL_ML_COMMIT' => 'Proceder',
    'LBL_ML_DESCRIPTION' => 'Descripción',
    'LBL_ML_INSTALLED' => 'Fecha de instalación',
    'LBL_ML_NAME' => 'Nombre',
    'LBL_ML_PUBLISHED' => 'Fecha de publicación',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Desinstalable',
    'LBL_ML_VERSION' => 'Versión',
    'LBL_ML_INSTALL' => 'Instalar',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Su versión actual de PHP es: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'La version de PHP recomendada es ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' o superior', // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Asistente de actualización',
    'LBL_UPLOAD_SUCCESS' => 'Paquete de actualización subido exitosamente. De click en siguiente para realizar una verificación final',
    'LBL_UW_TITLE_LAYOUTS' => 'Confirmar diseños',
    'LBL_LAYOUT_MODULE_TITLE' => 'Diseños',
    'LBL_LAYOUT_MERGE_DESC' => 'Hay nuevo campos disponibles que han sido agregado como parte de esta actualización y pueden ser agregadas automáticamente a su diseño de módulos existente.  Para conocer más acerca des esot, vea las notas de la versión a la que está actualizando.<br><br>. <br><br> ',
    'LBL_LAYOUT_MERGE_TITLE' => 'De click en siguiente para confirmar los cambios y finalizar la actualización',
    'LBL_LAYOUT_MERGE_TITLE2' => 'De click en siguiente para completar la actualización',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmar diseños',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Resultado de la confirmación de diseños',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Los siguientes diseños se han unificado satisfactoriamente:',
    'LBL_SELECT_FILE' => 'Seleccionar archivo:',
    'ERROR_VERSION_INCOMPATIBLE' => 'El archivo subido no es compatible con esta versión de SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'El archivo cargado no es compatible con esta versión de PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'El archivo subido no es compatible con esta versión de SuiteCRM: ',
    'LBL_LANGPACKS' => 'Paquetes de Lenguaje' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Cargador de módulos' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Parche de actualizaciones' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Temas' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Flujo de Trabajo' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Actualización' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Procesando' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Versión compatible no se encuentra en el archivo de manifiesto',
    'LBL_UPGRD_CSTM_CHK' => 'El proceso de Upgrade actualizará algunos archivos pero estos archivos también existen en la carpeta custom. Por favor revise los cambios antes de continuar:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'El archivo subido excede el límite definido por la directiva upload_max_filesize en php.ini',
        2 => 'El archivo subido excede el límite definido por la directiva MAX_FILE_SIZE especificada en el formulario HTML',
        3 => 'El archivo ha sido sólo parcialmente subido',
        4 => 'No se ha subido ningún archivo',
        5 => 'Error desconocido',
        6 => 'Falta una carpeta temporal',
        7 => 'Error al escribir el archivo',
        8 => 'El archivo subido ha sido bloqueado por su extensión',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Advertencia: ¡no se ha establecido caducidad de la contraseña!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Por favor actualice su configuración aquí',
);
