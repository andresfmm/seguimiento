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
    'LBL_MODULE_NAME' => 'Inicio',
    'LBL_NEW_FORM_TITLE' => 'Nuevo contacto',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_LAST_NAME' => 'Apellidos:',
    'LBL_LIST_LAST_NAME' => 'Apellidos',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_EMAIL_ADDRESS' => 'e-Mail:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Mi pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Proceso por Etapa de Ventas',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Proceso por Etapa de Ventas',
    'LNK_NEW_CONTACT' => 'Nuevo contacto',
    'LNK_NEW_ACCOUNT' => 'Crear cuenta',
    'LNK_NEW_OPPORTUNITY' => 'Nuevo contacto',
    'LNK_NEW_LEAD' => 'Nuevo cliente potencial',
    'LNK_NEW_CASE' => 'Nuevo caso',
    'LNK_NEW_NOTE' => 'Nueva nota o archivo adjunto',
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_EMAIL' => 'Archivar e-Mail',
    'LNK_NEW_MEETING' => 'Programar reunión',
    'LNK_NEW_TASK' => 'Nueva tarea',
    'LNK_NEW_BUG' => 'Informar de incidencia',
    'LNK_NEW_SEND_EMAIL' => 'Redactar e-Mail',
    'LBL_NO_ACCESS' => 'Usted no tiene acceso a esta área.  Contacte al administrador del sitio para tener acceso',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Sin Resultados --',
    'LBL_NO_RESULTS' => '<h2>No se han encontrado resultados. Por favor, realice una nueva búsqueda</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Trucos para la búsqueda:</h3><ul><li>Asegúrese que ha seleccionado las categorías adecuadas más arriba.</li><li>Amplíe sus criterios de búsqueda.</li><li>Si aun así no obtiene resultados, pruebe con la opción de búsqueda avanzada</li></ul>',

    'LBL_ADD_DASHLETS' => 'Agregar SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Sitio Web',
    'LBL_RSS_TITLE' => 'Lector de noticias',
    'LBL_CLOSE_DASHLETS' => 'Cerrar',
    'LBL_OPTIONS' => 'Opciones',
    // dashlet search fields
    'LBL_TODAY' => 'Hoy',
    'LBL_YESTERDAY' => 'Ayer',
    'LBL_TOMORROW' => 'Mañana',
    'LBL_NEXT_WEEK' => 'La próxima semana',
    'LBL_LAST_7_DAYS' => 'Últimos 7 días',
    'LBL_NEXT_7_DAYS' => 'Siguientes 7 días',
    'LBL_LAST_MONTH' => 'Último mes',
    'LBL_NEXT_MONTH' => 'Siguiente mes',
    'LBL_LAST_YEAR' => 'Último año',
    'LBL_NEXT_YEAR' => 'Próximo año',
    'LBL_LAST_30_DAYS' => 'Últimos 30 días',
    'LBL_NEXT_30_DAYS' => 'Próximos 30 días',
    'LBL_THIS_MONTH' => 'Este mes',
    'LBL_THIS_YEAR' => 'Este año',

    'LBL_MODULES' => 'Módulos',
    'LBL_CHARTS' => 'Gráficos',
    'LBL_TOOLS' => 'Herramientas',
    'LBL_WEB' => 'Sitio Web',
    'LBL_SEARCH_RESULTS' => 'Resultado de la búsqueda',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Vistas del módulo',
        'Portal' => 'Portal',
        'Charts' => 'Gráficos',
        'Tools' => 'Herramientas',
        'Miscellaneous' => 'Varios'
    ),
    'LBL_ADDING_DASHLET' => 'Agregando SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Agregado',
    'LBL_REMOVE_DASHLET_CONFIRM' => '¿Está seguro de que desea quitar el SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Quitando SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Sólo mis elementos',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Título',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Mostrar filas',

    'LBL_DASHLET_DELETE' => 'Eliminar SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Actualizar SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Editar SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Cerrar',

    'LBL_SEARCH' => 'Buscar',
    'LBL_CLEAR' => 'Limpiar',

    'LBL_BASIC_CHARTS' => 'Gráficos básicos',

    'LBL_DASHLET_SEARCH' => 'Encontrar SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Versión',
    'LBL_BUILD' => 'Preparado',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - proveedores de marco CE',

    'LBL_DASHLET_TITLE' => 'Mis sitios',
    'LBL_DASHLET_OPT_TITLE' => 'Título',
    'LBL_DASHLET_INCORRECT_URL' => 'Ubicación sitio web incorrecto',
    'LBL_DASHLET_OPT_URL' => 'Dirección del sitio web',
    'LBL_DASHLET_OPT_HEIGHT' => 'Altura del Dashlet (en pixeles)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM noticias',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Descubrir SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Filtro rápido' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzado' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Icono de inicio',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Rápidamente vuelve al dashboard de página de inicio con un solo clic.',
    'LBL_TOUR_MODULES' => 'Módulos',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Todos los módulos importantes están aquí.',
    'LBL_TOUR_MORE' => 'Más módulos',
    'LBL_TOUR_MORE_DESCRIPTION' => 'El resto de los módulos está aquí.',
    'LBL_TOUR_SEARCH' => 'Búsqueda Full-Text',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Búsqueda es ahora mucho mejor.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notificaciones',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Notificaciones de la aplicación de SuiteCRM iría aquí.',
    'LBL_TOUR_PROFILE' => 'Perfil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Perfil de acceso, ajustes y cierre de sesión.',
    'LBL_TOUR_QUICKCREATE' => 'Creación rápida',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Crear registros rápidamente sin perder su lugar.',
    'LBL_TOUR_FOOTER' => 'Pie plegable',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Fácilmente expandir y contraer el pie de página.',
    'LBL_TOUR_CUSTOM' => 'Aplicaciones personalizadas',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Integraciones personalizadas iría aquí.',
    'LBL_TOUR_BRAND' => 'Su marca',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Su logo va aquí. Puede pasar el mouse encima para más información.',
    'LBL_TOUR_WELCOME' => 'Bienvenido a SuiteCRM',
    'LBL_TOUR_WATCH' => 'Mira que hay de nuevo en SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""> <li class="icon-ok"> Nueva barra de navegación simplificada</li><li class="icon-ok">Nuevo pie de página plegable </li> <li class="icon-ok"> Búsqueda mejorada </li> <li class="icon-ok"> Menú de acciones actualizadas </li> </ul> <p> ¡y mucho más! </p>',
    'LBL_TOUR_VISIT' => 'Para más información por favor visite nuestra aplicación',
    'LBL_TOUR_DONE' => '¡Listo!',
    'LBL_TOUR_REFERENCE_1' => 'Siempre puede consultar nuestra',
    'LBL_TOUR_REFERENCE_2' => 'a través del enlace de "Foro de apoyo" en la pestaña perfil.',
    'LNK_TOUR_DOCUMENTATION' => 'documentación',
    'LBL_TOUR_CALENDAR_URL_1' => '¿Compartir su calendario de SuiteCRM con 3 aplicaciones, como Microsoft Outlook o Exchange? Si es así, tienes una nueva dirección URL. Esta URL nueva y más segura incluye una clave personal que evitará la publicación no autorizada de su calendario.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Obtén tu nueva URL compartida de calendario.',
    'LBL_CONTRIBUTORS' => 'Colaboradores',
    'LBL_ABOUT_SUITE' => 'Acerca de SuiteCRM',
    'LBL_PARTNERS' => 'Socios',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE y recalendarización son módulos escritos por SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => 'Editar todas las ocurrencias',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar todas las ocurrencias',
    'LBL_CONFIRM_REMOVE' => '¿Está seguro que desea eliminar el registro?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'Suite CRM - CRM de Código Abierto para el mundo',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite por Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps por Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO Provided por Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribución a versión SuiteCRM 7.3 por ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Campos calculados de flujo de trabajo aportados por diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Acerca de las traducciones SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Traducción colaborativa por la SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Traducción creada usando Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM es publicado bajo la licencia de código abierto - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'Todo el código manejado y escrito por el proyecto será lanzado con licencia de código abierto - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'El soporte de SuiteCRM está disponible en ambas Gratis y Soporte De Pago',

    'LBL_SUITE_PARTNERS' => 'Tenemos socios comerciales leales y apasionados del código abierto. Para ver una lista completa de nuestros socios por favor visite nuestro sitio web.',

    'LBL_SAVE_BUTTON' => 'Guardar',
    'LBL_DELETE_BUTTON' => 'Eliminar',
    'LBL_APPLY_BUTTON' => 'Aplicar',
    'LBL_SEND_INVITES' => 'Enviar invitaciones',
    'LBL_CANCEL_BUTTON' => 'Cancelar',
    'LBL_CLOSE_BUTTON' => 'Fecha de cierre',

    'LBL_CREATE_NEW_RECORD' => 'Crear Actividad',
    'LBL_CREATE_CALL' => 'Programar llamada',
    'LBL_CREATE_MEETING' => 'Programar reunión',

    'LBL_GENERAL_TAB' => 'Detalles',
    'LBL_PARTICIPANTS_TAB' => 'Asistentes',
    'LBL_REPEAT_TAB' => 'Ocurrencia',

    'LBL_REPEAT_TYPE' => 'Repetir',
    'LBL_REPEAT_INTERVAL' => 'Intervalo',
    'LBL_REPEAT_END' => 'Fin',
    'LBL_REPEAT_END_AFTER' => 'Después',
    'LBL_REPEAT_OCCURRENCES' => 'ocurrencias',
    'LBL_REPEAT_END_BY' => 'Por',
    'LBL_REPEAT_DOW' => 'En',
    'LBL_REPEAT_UNTIL' => 'Repetir Hasta',
    'LBL_REPEAT_COUNT' => 'Número de ocurrencias',
    'LBL_REPEAT_LIMIT_ERROR' => 'Su solicitud va a crear más de $limit reuniones.',

    //Events
    'LNK_EVENT' => 'Evento',
    'LNK_EVENT_VIEW' => 'Ver Evento',
    'LBL_DATE' => 'Fecha: ',
    'LBL_DURATION' => 'Duración: ',
    'LBL_NAME' => 'Título: ',
    'LBL_HOUR_ABBREV' => 'hora',
    'LBL_HOURS_ABBREV' => 'horas',
    'LBL_MINSS_ABBREV' => 'minutos',
    'LBL_LOCATION' => 'Lugar:',
    'LBL_STATUS' => 'Estado:',
    'LBL_DESCRIPTION' => 'Descripción:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Se ha producido un error al realizar la búsqueda. La sintaxis de su consulta podría no ser válida.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'No se puede encontrar el motor de búsqueda solicitado. Intente realizar la búsqueda de nuevo.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Error al conectar al servidor Elasticsearch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Se ha producido un error interno en la Búsqueda.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Se ha producido un error desconocido al realizar la búsqueda.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No hay resultados para su búsqueda. Inténtelo de nuevo con otros criterios.',

    'LNK_TASK_VIEW' => 'Ver Tarea',

);
