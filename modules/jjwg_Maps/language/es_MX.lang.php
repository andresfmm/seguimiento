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

$mod_strings['LBL_MAP'] = 'Mapa';
$mod_strings['LBL_MODULE_NAME'] = 'Mapas';
$mod_strings['LBL_MODULE_TITLE'] = 'Mapas: Inicio';
$mod_strings['LBL_MODULE_ID'] = 'Mapas';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Listado de mapas';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Marcador personalizado';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Área personalizada';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Mis listas de mapas';

$mod_strings['LBL_FLEX_RELATE'] = 'Relacionado al (Centro):';
$mod_strings['LBL_MODULE_TYPE'] = 'Tipo de módulo a desplegar:';
$mod_strings['LBL_DISTANCE'] = 'Distancia (Radio):';
$mod_strings['LBL_UNIT_TYPE'] = 'Tipo de Unidad:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Visualización de Mapa';
$mod_strings['LBL_MAP_LEGEND'] = 'Leyenda:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Grupos:';
$mod_strings['LBL_MAP_GROUP'] = 'Grupo';
$mod_strings['LBL_MAP_TYPE'] = 'Tipo';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Asignado a:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Obtener direcciones';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Vista de mapas de Google';

$mod_strings['LNK_NEW_MAP'] = 'Añadir Nuevo Mapa';
$mod_strings['LNK_NEW_RECORD'] = 'Añadir Nuevo Mapa';
$mod_strings['LNK_MAP_LIST'] = 'Lista de mapas';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Prueba de Geocodificación';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Mapa de radio rápida';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Ninguno';
$mod_strings['LBL_MAP_ADDRESS'] = 'Dirección';
$mod_strings['LBL_MAP_PROCESS'] = 'Se Proceso!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Último estado de Geocode';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Módulo geocodificada cuenta';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Módulo';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = 'Sin Resultados';
$mod_strings['LBL_OK'] = 'Aceptar';
$mod_strings['LBL_INVALID_REQUEST'] = 'Solicitud Inválida';
$mod_strings['LBL_APPROXIMATE'] = 'Aproximado';
$mod_strings['LBL_EMPTY'] = 'Vacío';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Total';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Restaurar';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'La tabla debajo muestra el número de objetos de módulo geocodificada, agrupados por respuesta de geocodificación. Tenga en cuenta que el límite de uso estándar de mapas de Google es 2500 solicitudes por día. Este módulo almacenará en caché la información de la geocodificación de direcciones durante el proceso para reducir el número total de solicitudes necesitada.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Para procesar las solicitudes de geocodificación se recomienda configurar una tarea programada cada noche. Un punto de entrada personalizado se ha creado para este propósito y se puede acceder sin autenticación. La URL que se muestra a continuación está destinada a utilizarse con una tarea administrativa prevista. Por favor, consulte la documentación para obtener más información.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Exportación de direcciones URL';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Utilice los vínculos siguientes para exportar direcciones completos que necesitan información de geocodificada. Luego utilizar una herramienta de geocodificación de lote en línea o sin conexión a geocodificar las direcciones. Cuando haya acabado la geocodificación, importar las direcciones en el módulo de caché de dirección para ser utilizado con los mapas. Tenga en cuenta que el módulo de caché de dirección es opcional. Toda la información geocodificada es almacenada en el módulo representativo.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Dirección de Caché';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Añadir a la Lista de público objetivo';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Procesando...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Configuración';
$mod_strings['LBL_CONFIG_SAVED'] = 'Configuraciones Guardadas con Exito!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Dirección de facturación';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Dirección de envío';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Dirección principal';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Dirección alternativa';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Posiblemente relacionado con';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Dirección (Simple, usuarios)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = '(Custom Controller Logic) Personalizado';
$mod_strings['LBL_ENABLED'] = 'Habilitado';
$mod_strings['LBL_DISABLED'] = 'Deshabilitado';
$mod_strings['LBL_DEFAULT'] = 'Predeterminado:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Predeterminado:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Módulos geocodificados válidos:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Módulos geocodificados válidos:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Configuración del tipo de dirección: Esto define los módulos ' tipo de dirección usados cuando se geocodifican direcciones. Valores aceptables: 'cobranza'; 'enviado'; 'primario'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Tipo de dirección para ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Tipos de direcciones para Cuentas:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Tipo de dirección de contactos:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Tipos de direcciones para Clientes Potenciales:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Tipos de direcciones para Oportunidades:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(de Cuenta Relacionada)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Tipos de direcciones para Casos:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Tipos de direcciones para Proyectos:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(Relacionado con Cuenta/Oportunidad)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Tipo de dirección para Reuniones:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Tipo de dirección para Prospectos/Objetivos:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Objeto relacionado a través del campo Flex Relate';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Configuración de campo del grupo marcador: define el 'campo' que se utilizará como parámetro de grupo cuando se visualicen marcadores en un mapa. Ejemplos: assign_user_name, industry, status, sales_stage, priority";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Campo de grupo para ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Campo Grupo de cuentas:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Campo de grupo para los contactos:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Campo de grupo para prospectos:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Campo Grupo de cuentas:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Campo de grupo para casos:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Campo de grupo para Proyectos:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Campo de grupo para Reuniones:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Campo de grupo para Prospectos/Objetivos:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Configuración de geocodificación/Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'URL de geocoding API:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'La dirección URL de Proxy o el Geocoding API de Google Maps';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Frase secreta para Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'La frase secreta para ser utilizado con la comparación MD5 de Proxy.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Límite de la geocodificación:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' establece el límite de consulta al seleccionar registros para geocodificar.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Límite de geocodificación de Google:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' establece el límite de solicitud al geocodificar con la API de Google Maps.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Límite de direcciones de exportación:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' establece el límite de consulta al seleccionar registros para exportar.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Permitir tipos de ubicación \"APROXIMADOS\":";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - permite que los tipos de ubicación de 'APROXIMATE' se consideren resultados de geocodificación 'OK'.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Configuración de caché de direcciones:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Habilitar caché de direcciones (Obtener):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' permite que el módulo de caché de direcciones recupere datos de la tabla de caché.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Habilitar Guardar Caché de Dirección (Guardar):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' permite que el módulo de caché de direcciones guarde datos en la tabla de caché.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Lógica ganchos de ajuste:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Activar todos los ganchos de lógica: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' permite ganchos lógicos para la actualización automática basada en objetos relacionados. Se recomienda desactivar al actualizar su SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Configuraciones de Marcador / Mapeo:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Límite de marcadores de mapa:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' establece el límite de consulta al seleccionar registros para mostrar en un mapa.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Mapa predeterminado del centro Latitude:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' establece la posición de latitud central predeterminada para los mapas.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Longitud predeterminada del centro del mapa:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' establece la posición de longitud central predeterminada para los mapas.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Tipo de unidad predeterminado del mapa:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' establece el tipo de medida de unidad predeterminado para los cálculos de distancia. Valores: 'mi' (millas) o 'km' (kilómetros).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Distancia predeterminada del mapa:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' establece la distancia predeterminada utilizada para los mapas basados en distancia.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Ajuste del marcador duplicado del mapa:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'ajuste de marcador duplicado de mapa' establece un ajuste de compensación que se agregará a la longitud y la latitud en caso de posición duplicada del marcador.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Marcadores del mapa Cluster Tamaño de la cuadrícula:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' se usa para establecer el tamaño de la cuadrícula para calcular los clusterers del mapa.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Marcadores de mapa Clusterer zoom máximo:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' se utiliza para establecer el nivel de zoom máximo en el que no se aplicarán los clústeres.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Nota importante: Todos los ajustes guardados se pueden encontrar en la tabla 'config' en categoría 'jjwg'. Tenga en cuenta que un archivo controller.php personalizado ya no debe utilizarse para reemplazar la configuración.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Áreas del Mapa';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Marcadores de Mapa';
$mod_strings['LBL_PARENT_ID'] = 'ID del Padre';
$mod_strings['LBL_JJWP_PARTNERS'] = 'Socios JJWP';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Obtén una clave';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google Api Key';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Configure la clave Google Api en el panel administrativo de Google Maps.';
