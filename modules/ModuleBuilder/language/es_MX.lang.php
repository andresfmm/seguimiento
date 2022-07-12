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
    'LBL_LOADING' => 'Cargando' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ocultar Opciones' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Proporcione un <b>Nombre</b> Para el paquete.  El Nombre que introduzca debe ser alfanumérico y no contener espacios. (Ejemplo: HR_Gestion)<br/><br/> Usted puede proporcionar <b>Autor</b> y <b>Descripción</b> para el paquete. <br/><br/>Haga Click <b>Guardar</b> para crear el paquete.',
            'modify' => 'Usted puede modificar el <b>Nombre</b>, <b>Autor</b> y <b>Descripción</b> de el paquete, asi como ver y personalizar todos los módulos que contienen el paquete .<br><br>También puede <b>Publicar</b> y <b>Desplegar</b> el Paquete, asi como <b>Exportar</b> los cambios hechos en el paquete.',
            'name' => 'Este es el <b>Nombre</b> del paquete actual. <br/><br/>El Nombre que introduzca debe ser alfanumérico y no contener espacios. (Ejemplo: HR_Gestion)',
            'author' => 'Este es el <b>Autor</b> Que se muestra durante la instalación como el nombre de la entidad que hizo el paquete. El autor pueder ser tanto una persona o una empresa.',
            'description' => 'Esta es la <b>Descripción</b> de el paquete que es mostrada durante la instalación.',
            'publishbtn' => 'Haga Click en <b>Publicar</b> para guardar todos los datos itroducidos y crea un archivo .zip que es un version instalable del paquete.<br><br>Use <b>Module Loader</b> para subir el archivo .zip e instalar el paquete.',
            'deploybtn' => '>Haga Click en <b>Desplegar</b> para guardar todos los datos introducidos e instalar el paquete, incluidos todos los modulos, en el caso actual.',
            'duplicatebtn' => 'Haga Click en <b>Duplicar</b> para copiar el contenido de el paquete en un nuevo paquete y mostrar el nuevo paquete. <br/><br/>para el nuevo paquete, un nuevo nombre se generara automaticamente agregando un numero al final del nombre del paquete usado para crearlo. Usted puede renombrar el nuevo paquete Ingresando un nuevo <b>Nombre</b> y cliqueando en <b>Guardar</b>.',
            'exportbtn' => 'Haga Click en <b>Exportar</b> para crear un archivo .zip que contiene los cambios hechos en el paquete.<br><br>El archivo contiene código generado para el paquete de personalización, y no se trata de una versión instalable del paquete.<br><br>Use <b>Module Loader</b>para importar el archivo zip y hacer las personalizaciones disponibles para los paquetes nuevos.',
            'deletebtn' => 'Haga Click en <b>Borrar</b> Para suprimir este paquete y todos los archivos relacionados con este paquete.',
            'savebtn' => 'Haga Click en <b>Guardar</b> para guardar todos los datos relacionados con este paquete.',
            'existing_module' => 'Haga Click en el <b>nombre de un modulo</b> para editar y personalizar las propiedades de los campos, las relaciones y diseños asociados con el módulo.',
            'new_module' => 'Haga Click en <b>Nuevo Modulo</b> para crear un nuevo modulo para este paquete.',
            'key' => 'Estas 5-Letras, alfanumérica <b>Clave</b> Se utilizarán para prefijo de todos los directorios, nombres de clase y tablas de la base de datos de todos los módulos en el paquete actual.<br><br>La clave se utiliza para tratar de alcanzar un nombre de tabla singularidad.',
            'readme' => 'Usted Puede agregar un <b>Leame</b> de texto para este paquete.<br><br>El Readme estará disponible en el momento de la instalación.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Proporcione un <b>Nombre</b> para el módulo. la <b>Etiqueta</b> que nos proporcione aparecerán en la pestaña de navegación. <br/><br/>Elige para mostrar una pestaña de navegación para el modulo. marque  <b>Pestaña de Navegación</b>en el checkbox.<br/><br/>A continuación, seleccione el tipo de módulo que desea crear. <br/><br/>Seleccione un tipo de plantilla. Cada plantilla contiene un conjunto específico de campos, así como diseños predefinidos, para utilizar como base en el módulo. <br/><br/>Haga Click en <b>Guardar</b> Para crear el modulo.',
            'modify' => 'Puede cambiar el módulo de propiedades o personalizar los <b>campos</b>, <b>Relaciones</b> y <b>Diseños</b> relacionados con el módulo.',
            'importable' => 'Compruebe la casilla de <b> Importables </ b> la cual permitirá la importación de datos sobre este módulo. <br><br> Un enlace de Asistente de importación aparecerá en el panel de accesos directos en el módulo. El Asistente de importación facilita la importación de datos de fuentes externas en el módulo personalizado.',
            'team_security' => 'Comprobación de el <b>Equipo de Seguridad</b> casilla activara un equipo de seguridad para este modulo.  <br/><br/>Si el equipo de seguridad esta activo, the Team selection field will appear within the records in the module ',
            'reportable' => 'Si selecciona esta casilla, este módulo permite tener generador de informes.',
            'assignable' => 'Si selecciona esta casilla, permitirá llevar un registro en este módulo para ser asignado a un usuario seleccionado.',
            'has_tab' => 'Si selecciona "pestaña de navegación" proporcionará una pestaña de navegación para el módulo.',
            'acl' => 'Si selecciona esta casilla, permitirá controles de acceso en este módulo, incluido el campo Nivel de Seguridad.',
            'studio' => 'Si selecciona esta casilla, permitirá a los administradores personalizar este módulo dentro de Studio.',
            'audit' => 'Si selecciona esta casilla, permitirá Auditoría para este módulo. Los cambios en ciertos campos se registran de manera que los administradores pueden revisar el historial de cambios.',
            'viewfieldsbtn' => 'Click <b>View Fields</b> to view the fields associated with the module and to create and edit custom fields.',
            'viewrelsbtn' => 'Haga clic en <b>Ver Campos</b> para ver los campos relacionados con el módulo y para crear y editar campos personalizados.',
            'viewlayoutsbtn' => 'Haga clic en <b>Ver Diseños</b> para ver los diseños para el módulo y para personalizar los campos arrglandolos dentro de el diseño.',
            'duplicatebtn' => 'Haga clic en <b>Duplicar</b> para copiar las propiedades del módulo en un nuevo módulo y para mostrar el nuevo módulo. <br/> <br/> Para el nuevo módulo, un nuevo nombre se generará automáticamente añadiendo un número al final del nombre del módulo utilizado para crear el nuevo. <br/><br/> Puede cambiar el nombre de el Modulo nuevo introduciendo un nuevo <b>Nombre</b> y hacer clic en <b>Guardar</b>.',
            'deletebtn' => 'Haga Click en <b>Eliminar</b> para eliminar este modulo.',
            'name' => 'Este es el <b>Nombre</b> de la actual módulo. <br/><br/> El nombre que introduzca debe ser alfanumérico y debe comenzar con una letra y no contener espacios. (Ejemplo: HR_Gestión)',
            'label' => 'Esta es la <b>Etiqueta</b> que aparecerá en la pestaña de navegación para el módulo. ',
            'savebtn' => 'Haga Click en <b>Guardar</b> para guardar toda la información relacionada con el modulo.',
            'type_basic' => 'el tipo de plantilla <b>básica</b> proporciona campos básicos, como el Nombre, Asignado a, el Equipo, Fecha de creación y Descripción de los campos.',
            'type_company' => 'el tipo de plantilla <b>Empresa</b> proporciona campos de   organizacion-específica, tales como Nombre de la empresa, la Industria y la dirección de facturación. <br/> <br/> Utilice esta plantilla para crear módulos que son similares a la norma de un módulo de Cuentas.',
            'type_issue' => 'El tipo de plantilla <b>Emisión</b> proporciona casos de campos especificos de error, tales como Número, estado, prioridad y descripción. <br/> <br/> Utilice esta plantilla para crear módulos que son similares a estandares para los modulos de casos de error.',
            'type_person' => 'El tipo de plantilla <b>Persona</b> ofrece los campos específicos de un individuo, como el Saludo, Título, Nombre, Dirección y Teléfono. <br/><br/> Utilice esta plantilla para crear módulos que son similares a los estandares de modulos para Contactos y clientes.',
            'type_sale' => 'El tipo de plantilla de <b>Venta</b> dispone de campos específicos a las oportunidades, como por ejemplo, Origen del Potencial, Fase, Cantidad, y Probabilidad.<br /><br />Utilice esta plantilla para crear módulos que son similares a los módulos estándares de las Oportunidades.',
            'type_file' => 'El tipo de plantilla de <b>Archivo<b> dispone de campos específicos de Documentos, como por ejemplo, Nombre del Archivo, tipo de Documento, y Fecha de Publicación. <br /><br />Utilice esta plantilla para crear módulos que son similares a los módules estándares de Documentos.',

        ),
        'dropdowns' => array(
            'default' => 'Todos los Menus desplegables de la aplicación, se listan aquí. <br> <br> Para realizar cambios para un menú desplegable, haga clic en el nombre del menú desplegable. <br><br> Realice los cambios en el <b>Editor de menus desplegables</b> en el formulario de la parte derecha del panel, y haga clic en <b>Guardar</b>. Realice los cambios que sean necesarios, y luego haga clic en "Guardar </b>. <br><br> Para crear un nuevo menú desplegable, haga clic en <b>Añadir menu desplegable </b>. Introduzca las propiedades de la lista desplegable situada formulario en el <b>Editor de menus desplegables</b> y haga clic en <b>Guardar</b>.',
            'editdropdown' => 'Las listas desplegables pueden ser utilizadas para campos desplegables estándar o personalizados de cualquier módulo.<br><br>Proporcione un <b>Nombre</b> para la lista desplegable.<br><br>Si ha instalado otros paquetes de idioma en la aplicación, podrá seleccionar el <b>Idioma</b> a utilizar para los elementos de la lista.<br><br>En el campo <b>Nombre del Elemento</b>, proporcione un nombre para la opción en la lista desplegable.  Este nombre no aparecerá en la lista visible por los usuarios.<br><br>En el campo <b>Etiqueta de Visualización</b>, proporcione una etiqueta que será visible por los usuarios.<br><br>Tras proporcionar el nombre del elemento y la etiqueta de visualización, haga click en <b>Agregar</b> para añadir el elemento a la lista desplegable.<br><br>Para cambiar el orden de los elementos en la lista, arrastre elementos y suéltelos en las posiciones deseadas.<br><br>Para editar la etiqueta de visualización de un elemento, haga click en el icono <b>Editar</b> e introduzca una nueva etiqueta. Para eliminar un elemento de la lista desplegable, haga click en el icono <b>Eliminar</b>.<br><br>Para deshacer un cambio realizado a una etiqueta de visualización, haga click en <b>Deshacer</b>.  Para rehacer un cambio que ha sido previamente deshecho, haga click en <b>Rehacer</b>.<br><br>Haga click en <b>guardar</b> para guardar la lista desplegable.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Aquí aparecen todos los campos que se pueden mostrar en el <b>ListView</b>. <br><br>La columna <b>por defecto</b> contiene los campos que se muestran en el ListView por defecto. <br/> <br/> La columna <b>oculta</b> contiene campos que pueden agregarse por defecto o a la columna disponible.'
        ,
            'savebtn' => 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que estén aplicados en el módulo.',
            'historyBtn' => 'Haga click en <b>Ver historial</b> para ver y restaurar del historial, un diseño previamente guardado.',
            'historyDefault' => 'Haga click en <b>Restaurar vista por omisión</b> para restaurar el diseño original de una vista.',
            'Hidden' => '<b>Oculto</b> los campos no aparecerán en el subpanel.',
            'Default' => '<b>Por defecto</b> los campos aparecen en el subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'la columna <b>por defecto</b> contiene los campos que se muestran en una vista de lista por defecto. <br/><br/> la columna <b> Disponible</b> contiene los campos que el usuario puede elegir para crear Una lista personalizada. <br/><br/> La columna <b>Ocultos</b>contiene los campos que usted como administrador puede agregar por defecto o columnas disponibles para que los usuarios las vean.'
        ,
            'savebtn' => 'Haga clic en <b>Guardar y Utilizar</b> para guardar todos los cambios que usted ha hecho y los hace activos dentro de el módulo.',
            'historyBtn' => 'Da clic en <b>Ver historial</b> para ver y restaurar plantillas previamente guardadas.<br><br><b>Restaurar</b> dentro de <b>Historial</b> restaura el primer campo creado dentro de plantillas previamente guardadas. Para cambiar etiquetas de campos, da clic en Editar enseguida de cada campo.',
            'historyDefault' => 'Haga clic en <b>Restaurar por defecto</b> para restablecer una vista a su trazado original. <br><br><b>Restaurar por defecto</b> sólo restaura la ubicación del campo en el diseño original. Para cambiar las etiquetas de campo, haga clic en el icono de edición junto a cada campo.',
            'Hidden' => 'Oculta campos que actualmente no estan disponibles para verlos por los usuarios en la lista de vistas.',
            'Available' => 'Activa campos que no se muestran por defecto, pero se pueden agregar a la lista de vistas para los usuarios.',
            'Default' => 'Por defecto se muestran los campos a los usuarios que no han creado lista personalizada.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Todos los campos que pueden ser mostrados en el <b>Subpanel</b> aparecen aquí.<br><br>La columna <b>Por omisión</b> contiene los campos que son mostrados en el Subpanel.<br/><br/>La columna <b>Disponibles</b> contiene los campos que un usuario puede seleccionar en la Búsqueda para crear una vista de Lista personalizada. <br/><br/>La columna <b>Ocultos</b> contiene los campos que pueden ser agregados a las columnas Por omisión o Disponibles.'
        ,
            'savebtn' => 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que estén aplicados en el módulo.',
            'historyBtn' => 'Da clic en <b>Ver historial</b> para ver y restaurar plantillas previamente guardadas.<br><br><b>Restaurar</b> dentro de <b>Historial</b> restaura el primer campo creado dentro de plantillas previamente guardadas. Para cambiar etiquetas de campos, da clic en Editar enseguida de cada campo.',
            'historyDefault' => 'Haga clic en <b>Restaurar por defecto</b> para restablecer una vista a su trazado original. <br><br><b>Restaurar por defecto</b> sólo restaura la ubicación del campo en el diseño original. Para cambiar las etiquetas de campo, haga clic en el icono de edición junto a cada campo.',
            'Hidden' => 'Oculta campos que actualmente no estan disponibles para verlos por los usuarios en la lista de vistas.',
            'Default' => 'Por defecto se muestran los campos a los usuarios que no han creado lista personalizada.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Todos los campos que se pueden mostrar en el formulario <b> Filtro </ b> aparecen aquí. <br> <br> La columna <b> Predeterminado </ b> contiene los campos que se mostrarán en el formulario de búsqueda. <br/> <br/> La columna <b> Oculto </ b> contiene los campos disponibles para usted como administrador para agregarlos al formulario de búsqueda.'
        ,
            'savebtn' => 'Al hacer clic en <b>Guardar y Utilizar</b> para guardar todos los cambios y hacerlos activos',
            'Hidden' => 'Los campos oculto son campos que no se muestra en la vista de búsqueda.',
            'historyBtn' => 'Da clic en <b>Ver historial</b> para ver y restaurar plantillas previamente guardadas.<br><br><b>Restaurar</b> dentro de <b>Historial</b> restaura el primer campo creado dentro de plantillas previamente guardadas. Para cambiar etiquetas de campos, da clic en Editar enseguida de cada campo.',
            'historyDefault' => 'Haga clic en <b>Restaurar por defecto</b> para restablecer una vista a su trazado original. <br><br><b>Restaurar por defecto</b> sólo restaura la ubicación del campo en el diseño original. Para cambiar las etiquetas de campo, haga clic en el icono de edición junto a cada campo.',
            'Default' => 'Los campos por defecto se mostrarán en la vista de búsqueda.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en la <b>vista de detalle</b>.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Cambie el diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado nuevamente.',
            'defaultquickcreate' => 'El área de <b>Diseño</b> contiene los campos que actualmente están siendo mostrados en el formulario de <b>Creación Rápida</b>.<br><br>El formulario de Creación Rápida aparece en los subpaneles de un módulo cuando el botón Crear es pulsado.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del diseño que pueden ser agregados al mismo.<br><br>Cambie el diseño arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Diseño</b> así como dentro del mismo diseño.<br><br>Para quitar un campo del diseño, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasará a estar disponible en la Caja de Herramientas para ser agregado nuevamente.',
            //this default will be used for edit view
            'default' => 'Realice los cambios en la capa mostrada puede arrastrar y soltar elementos  y campos entre las dos areas en esta pagina. <br/><br/> La columna de la izquierda, llamada <b>caja de Herramientas</b>, contiene herramientas útiles, elementos y campos para modificar el diseño. <br/><br/> El área a mano derecha, llamada <b>Diseño Actual</b> o <b>Vista previa del diseño</b>, contiene el modulo de diseño <br/><br/>Si el área de diseño es llamada <b>Diseño Actual</b> Entonces usted esta trabajando en una copia de el diseño que es actualmente mostrado en el modulo. <br/><br/>Si el área de diseño es llamada <b>Vista previa del diseño</b> Entonces usted esta trabajando en una copia creada anteriormente Haga click en <b>Guardar</b> Nota: Si otro usuario utiliza una copia diferente de el diseño, la que puede ver en esta área tal vez no coincida con la versión actual.',
            'saveBtn' => 'Haga Click en <b>Guardar</b> para preservar los cambios que haga en el diseño. Si no despliega los cambios antes de salir de estudio, los cambios no se mostrarán en el módulo. Cuando vuelva a estudio para modificar el diseño, se muestra el diseño con los cambios preservados. el diseño no se mostrara en el mostrara en el modulo hasta que haga click en <b>Guardar y Utilizar</b>.',
            'historyBtn' => 'Da clic en <b>Ver historial</b> para ver y restaurar plantillas previamente guardadas.<br><br><b>Restaurar</b> dentro de <b>Historial</b> restaura el primer campo creado dentro de plantillas previamente guardadas. Para cambiar etiquetas de campos, da clic en Editar enseguida de cada campo.',
            'historyDefault' => 'Haga clic en <b>Restaurar por defecto</b> para restablecer una vista a su trazado original. <br><br><b>Restaurar por defecto</b> sólo restaura la ubicación del campo en el diseño original. Para cambiar las etiquetas de campo, haga clic en el icono de edición junto a cada campo.',
            'publishBtn' => 'Haga clic en <b>Guardar y Utilizar</b> para implementar el diseño. <br><br>después de implementar, el diseño sera inmediatamente mostrado en el módulo.',
            'toolbox' => 'La <b>Caja de Herramientas</b> contiene una variedad de herramientas útiles para la edición de diseños, incluyendo la Papelera, diseño adicional de elementos y el conjunto de campos disponibles. <br/><br/>Cualquiera de los elementos y de los campos se pueden arrastrar y soltar en el diseño, y cualquier diseño de los elementos y campos se pueden arrastrar y soltar en la papelera. <br/><br/>Arrastrando una nueva fila o  un nuevo panel de elementos a el diseño sera  agregado en el diseño donde este es quitado. <br/><br/>Un campo de relleno crea espacio en blanco en el diseño en que se haya colocado. <br/><br/> Arrastre y suelte cualquiera de los campos disponibles a un campo en un panel de intercambio de los dos.',
            'panels' => 'Esta área muestra como su diseño se publicara dentro de el modulo cuando esta se use.<br/><br/>Puede posicionar campos, columnas y paneles arrastrando y soltándolos en la posición deseada. <br/><br/>Quite elementos arrastrando y soltándolos en la  papelera de la caja de herramientas, o agregar nuevos elementos y campos arrastrando y soltando de la caja de herramientas en la posición deseada en el diseño.',
            'delete' => 'Arrastre y suelte cualquier elemento aqui para remover de el diseño',
            'property' => 'Edite la etiqueta mostrada para este campo. <br/>El <b>Orden de Tabulación</b> controla en qué orden la tecla tabulador cambiará el foco entre los distintos campos.',
        ),
        'fieldsEditor' => array(
            'default' => 'Todos los campos que estan disponibles para el modulo actual estan listados aqui. <br><br> Los campos estandar que incluye el modulo por defecto aparecen en el area <b>Por defecto</b>. <br><br> Los campos personalizados que fueron creados para el modulo aparecen en el area <b>Personalizados</b>.<br><br>Para Editar los campos, haga click en el <b>Nombre de el Campo</b>.  Realize los cambios con el formulario de <b>Propiedades</b> de el panel de la derecha, y haga click en <b>Guardar</b>. <br><br>Mientras visualiza las propiedades de los campos, puede crear rapidamente un nuevo campo con propiedades similares haga click en <b>Clone</b>.Realice los campos que sean necesarios, y luego haga click en <b>Guardar</b> <br><br>Para crear un campo nuevo, haga click en <b>Agregar Campo</b>. Intrusca las propiedades para el campo en el formulario de <b>Propiedades</b>, y haga click en <b>Guardar</b>. El Campo nuevo aparecerá  en el area <b>Personalizado</b>.<br><br> Para Cambiar las etiquetas de cualquiera de los campos, haga click en <b>Editar Etiqutas</b>.',
            'mbDefault' => 'Los <b>Campos</b> disponibles para un módulo se listan aquí por Nombre de Campo.<br><br>Para personalizar la etiqueta del campo, haga click en el nombre del campo.<br><br>Para crear un nuevo campo, haga click en <b>Agregar Campo</b>. La etiqueta y el resto de propiedades del nuevo campo pueden ser editadas tras su creación haciendo click en el Nombre de Campo.<br><br>Tras la implantación del módulo, los nuevos campos creados con el Constructor de módulos serán tratados en el Estudio como campos estándar del módulo.',
            'addField' => 'Seleccione un <b>Tipo de datos</b> para el nuevo campo. El tipo que seleccione determina qué clase de caracteres puede introducirse en el campo. Por ejemplo, sólo los números que son enteros pueden ingresarse en campos que son del tipo de datos Integer. <br><br>Proporcionar un <b>nombre</b> para el campo.  El nombre debe ser alfanumérico y no debe contener ningún espacio. Subrayados son válidos. <br><br>La <b>Exhibición de la etiqueta</b> es la etiqueta que aparecerá para los campos de los trazados de módulo.  La <b>Etiqueta del sistema</b> se utiliza para hacer referencia al campo en el código. <br><br>Dependiendo del tipo de datos seleccionado para el campo, se pueden fijar algunas o todas de las siguientes propiedades para el campo: <br><br><b>Texto de ayuda</b> aparece temporalmente mientras que un usuario se desplaza sobre el campo y se puede utilizar para solicitar al usuario el tipo de entrada deseada. <br> <br><b>Texto comentario</b> sólo se ve dentro de estudio y o módulo constructor y puede utilizarse para describir el campo para los administradores. <br><br><b>Valor por defecto</b> aparecerá en el campo.  Los usuarios pueden introducir un nuevo valor en el campo o use el valor predeterminado. <br><br>Seleccionar la <b>Masa actualización</b> casilla de verificación para poder utilizar la función de actualización de masa para el campo. <br> <br>El <b>Tamaño máximo del</b> valor determina el número máximo de caracteres que pueden introducirse en el campo. Casilla de <br><br>selecciona el <b>Campo requerido</b> para hacer el campo requerido. Debe proporcionarse un valor para el campo para poder guardar un registro que contiene el campo. <br><br>Seleccione <b>Reportable</b> checkbox para permitir que el campo que se utilizará para los filtros y para exhibir datos en informes. <br> Casilla de <br>seleccionar la <b>Auditoría</b> para poder seguir los cambios en el campo en el registro de cambios. <br><br>Seleccione una opción en el campo de <b>Importable</b> a permitir, no permitir o requerir el campo a importar en el Asistente de importación de. <br> <br>Seleccionar una opción en el campo de <b>Duplicación Merge</b> para activar o desactivar las características de combinar duplicados y Find Duplicates. <br><br>Adicional propiedades pueden establecerse para ciertos tipos de datos.',
            'editField' => 'Las propiedades del campo pueden ser personalizadas.<br><br>Haga click en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.',
            'mbeditField' => 'La <b>Etiqueta de Visualización</b> de un campo de Sugar puede ser personalizada. El resto de propiedades del campo no pueden ser personalizadas.<br><br>Haga click en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.<br><br>Para quitar un campo de modo que no aparezca en el módulo, quite el campo de los <b>Diseños</b> correspondientes.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exporte las personalizaciones hechas con estudio mediante la creancion de paquetes que pude cargar en otra instancia de SuiteCRM atravez de el <b>Modulo de Carga</b>.<br><br>Primero, provea un <b>Nombre del paquete</b>. Puede Proveer información del <b>Autor</b> y <b>Descripción</b> también para el paquete.<br><br>Seleccione el modulo(s) que contiene las personalizaciones  que usted desea exportar. Solo los módulos que contienen personalizaciones aparecerán para su selección. <br><br>a Continuación, haga click en <b>Exportar</b> para crear un archivo .zip para el paquete que contiene las personalizaciones.',
            'exportCustomBtn' => 'Haga click en <b>Exportar</b> para crear un archivo .zip contenedor de las personaliaciones de el paquete que puede exportar.',
            'name' => 'Este es el <b>Nombre</b> de el paquete. Este nombre se mostrara durante la instalacion.',
            'author' => 'Este es el <b>Autor</b>Que se muestra durante la instalación como el nombre de la entidad que creó el paquete. El autor puede ser tanto una persona o una empresa.',
            'description' => 'Este es la <b>Descripción</b> de el paquete que se muestra durante la instalación.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bienvenido al area de <b>Herramientas para desarrolladores</b>. <br/><br/>Utilice las herramientas dentro de esta area de creación y gestión estándar y personalizacion de módulos y campos.',
            'studioBtn' => 'Utilice <b>Estudio</b> para personalizar los módulos instalados.',
            'mbBtn' => 'Utilice <b>Módulo Creador</b> para crear nuevos módulos.',
            'sugarPortalBtn' => 'Utilice <b>Editor del portal SuiteCRM</b> para administrar y personalizar el portal de SuiteCRM.',
            'dropDownEditorBtn' => 'Utilice el <b>Editor desplegable </b> para añadir y editar desplegables globales para la aplicación .',
            'appBtn' => 'El modo de aplicación es donde se puede personalizar diversas propiedades del programa, como el número de informes de TPS son mostrados en la página principal',
            'backBtn' => 'Regresa al paso anterior.',
            'studioHelp' => 'En <b>Estudio</ b>, puede cambiar la forma en que se muestra la información, determinar lo que datos estan disponibles y crear campos de informacion personalizados para modulos <i>instalados</i>.',
            'moduleBtn' => 'Haga click para editar este modulo.',
            'moduleHelp' => 'Seleccione el componente de un módulo que le gustaría editar.',
            'fieldsBtn' => 'Determinar qué información puede ser almacenada en el módulo para controlar los<b>Campos</b> en el módulo. <br/><br/>Puede editar y crear nuevos campos para almacenar información.',
            'labelsBtn' => 'Editar las <b>Etiquetas</ b> que muestran los campos en el módulo.',
            'relationshipsBtn' => 'Agregar nuevas <b>Relaciones</b> del módulo o ver las existentes.',
            'layoutsBtn' => 'Editar los siguientes <b>Diseños</b> de el módulo : Editar Vista, vistar Detalles, listar vista y vista de busqueda.',
            'subpanelBtn' => 'Determinar qué información es mostrada en los <b>Subpanels</b> para este módulo.',
            'portalBtn' => 'Personalizar los <b>Diseños</b> del módulo que aparecen en el <b>portal SuiteCRM</b>.',
            'layoutsHelp' => 'Seleccione un <b>Diseño</b> para editar.',
            'subpanelHelp' => 'Seleccione un <b>Subpanel</b> para editar.',
            'newPackage' => 'Haga Click en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
            'exportBtn' => 'Haga Click en <b>Exportar Personalizaciones</b> para crear un paquete que contiene las personalizaciones realizadas en el Estudio de módulos específicos.',
            'mbHelp' => 'Use <b>Módulo Builder</b> para crear paquetes que contienen módulos personalizados basado en Estandares u objetos personalizados.',
            'viewBtnEditView' => 'Modifica el diseño del modulo <b>Editar Vista</b>.',
            'viewBtnDetailView' => 'Modifica el diseño del modulo <b>Detalles Vista</b>.',
            'viewBtnDashlet' => 'Personalizar el <b>SuiteCRM Dashlet</b> del módulo, incluyendo la vista de Lista y la Búsqueda del SuiteCRM Dashlet.<br><br>El SuiteCRM Dashlet estará disponible para ser añadido a las páginas del módulo Inicio.',
            'viewBtnListView' => 'Modifica el diseño del modulo <b>Listar Vista</b>.',
            'searchBtn' => 'Modifica el diseño del modulo <b>Búsqueda</b>.',
            'viewBtnQuickCreate' => 'Modifica el diseño del modulo <b>Creación Rápida</b>.',
            'addLayoutHelp' => "Para crear un diseño personalizado para un Grupo de Seguridad, seleccione el Grupo de Seguridad apropiado y el diseño desde el cual va a copiar.",
            'searchHelp' => 'Los formularios de <b>Búsqueda</b> que pueden ser personalizados aparecen aquí. <br><br>Los formularios de Búsqueda contienen campos para filtrar registros.<br><br>Haga click en un icono para seleccionar el diseño de búsqueda a editar.',
            'dashletHelp' => 'Los diseños de <b>SuiteCRM Dashlet</b> que pueden ser personalizados aparecen aquí.<br><br>El SuiteCRM Dashlet estará disponible para ser añadido a las páginas del módulo Inicio.',
            'DashletListViewBtn' => 'La <b>vista de Lista de SuiteCRM Dashlet</b> muestra los registros basándose en los fíltros de búsqueda del SuiteCRM Dashlet.',
            'DashletSearchViewBtn' => 'La <b>Búsqueda de SuiteCRM Dashlet</b> filtra los registros de la vista de lista de SuiteCRM Dashlet.',
            'popupHelp' => 'Los diseños de <b>Ventanas Emergentes</b> que pueden ser personalizados aparecen aqui.<br>',
            'PopupListViewBtn' => 'Las <b>Listas Emergentes</b> muestran registros basados en las Búsquedas emergentes.',
            'PopupSearchViewBtn' => 'La <b>Búsqueda Emergente</b> muestra registros de las Listas Emergentes.',
            'BasicSearchBtn' => 'Modifique el formulario de <b>Filtro Rápido</b> que aparece en la pestaña de Filtro Rápido en el área para el Filtrado en el modulo.',
            'AdvancedSearchBtn' => 'Modifique el formulario de <b>Filtro Avanzado</b> que aparece en la pestaña de Búsqueda Avanzada en el área de Búsqueda en el modulo.',
            'portalHelp' => 'Administre y personalice el <b>Portal SuiteCRM</b>.',
            'SPUploadCSS' => 'Suba una <b>Hoja de estilos</b> para el Portal SuiteCRM.',
            'SPSync' => '<b>Sync</b> Personalizaciones para un instancia del el Portal SuiteCRM.',
            'Layouts' => 'Modifique los <b>Diseños</b> de los módulos para el Portal SuiteCRM.',
            'portalLayoutHelp' => 'Los módulos dentro de el Portal SuiteCRM aparecen en esta área.<br><br>Seleccione un módulo para editar el <b>Diseño</b>.',
            'relationshipsHelp' => 'Se puede relacionar este módulo a otros módulos en el mismo paquete o de los módulos ya instalados en la Aplicación.<br/><br/> Para crear una nueva relación, haga clic en <b>Añadir Relación</ b>. Las propiedades de la relación se muestran en el formulario en la parte derecha del panel. Utilice La lista desplegable <b>Relacionado a</b>  para seleccionar el módulo a los que se refieren el módulo actual. <br><br>Provea una <b>Etiqueta</ b> que aparecerá como título del sub-panel para el correspondiente módulo. <br><br>Las relaciones entre los módulos  se gestionarán a través de sub-paneles que aparecen debajo de la Vistas de detalle en los módulos.<br> <br> Para el sub-panel de el modulo relacionado, que podría estar en condiciones de seleccionar diferentes sub-panel de diseños, dependiendo de en qué módulo es seleccionado para la relación. <br/><br/>Haga clic en <b>Guardar </b> para crear una relación. Haga clic en <b>Eliminar</b> para borrar la relación de seleccionada. <br/><br/> Para editar una relación existente, haga clic en <b>Nombre de Relación</b>, y edite las propiedades dentro de el panel a mano derecha.',
            'relationshipHelp' => 'Las <b>Relaciones</b> pueden ser creadas entre este módulo y otro módulo personalizado o implantado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga click en <b>guardar</b> para crear la relación.',
            'convertLeadHelp' => 'Aquí puede añadir módulos para la disposición de convertir la pantalla y modificar los diseños existentes. <br/> Puede reordenar los módulos arrastrando sus filas en la tabla. <br/> <br/> <b>Módulo:</b> El nombre del módulo. <br/> <br/> <b>Requerido:</b> Los módulos requeridos deben ser creados o seleccionados antes de que el plomo se puede convertir. <br/> <br/> <b>Copiar datos:</b> Si está activado, los campos de la iniciativa se copiarán a campos con el mismo nombre en los registros recién creados. <br/> <br/> <b>Permitir la selección:</b> Los Módulos con un campo de relación en los contactos pueden ser seleccionados en lugar de creados durante el proceso de convertir plomo. <br/> <br/> <b>Edición:</b> Modificar el diseño de convertir para este módulo. <br/> <br/> <b>Borrar:</b> Eliminar este módulo de la disposición de convertir. <br/> <br/>',


            'editDropDownBtn' => 'Edita un Dropdown general',
            'addDropDownBtn' => 'Agrega un nuevo Dropdown general',
        ),
        'fieldsHelp' => array(
            'default' => 'Los <b>Campos</b> del módulo aparecen aquí listados por Nombre de Campo.<br><br>La plantilla del módulo incluye un conjunto predeterminado de campos.<br><br>Para crear un nuevo campo, haga click en <b>Agregar Campo</b>.<br><br>Para editar un campo, haga click en el <b>Nombre de Campo</b>.<br/><br/>Tras la implantación del módulo, los nuevos campos creados en el Constructor de módulos, así como los campos de la plantilla, se tratarán como campos estándar en el Estudio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Las <b>Relaciones</b> que han sido creadas entre el módulo y otros módulos aparecen aquí.<br><br>El <b>Nombre</b> de la relación es un nombre generado por el sistema para la relación.<br><br>El <b>Módulo Principal</b> es el módulo que posee las relaciones. Las propiedades de la relación son guardadas en tablas de la base de datos pertenecientes al módulo primario.<br><br>El <b>Tipo</b> es el tipo de relación existente entre el Módulo Principal y el <b>Módulo Relacionado</b>.<br><br>Haga clic en el título de una columna para ordenar por la columna.<br><br>Haga clic en una fila de la tabla de la relación para ver y editar las propiedades asociadas con la relación.<br><br>Haga clic en <b>Agregar Relación</b> para crear una nueva relación.',
            'addrelbtn' => 'ayuda emergente para agregar relación..',
            'addRelationship' => 'Las <b>Relaciones</b> pueden ser creadas entre este módulo y otro módulo personalizado o implantado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionan campos de los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relación para el módulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos módulos contendrán campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del Módulo Principal contendrán un subpanel, y los registros del Módulo Relacionado contendrán un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos módulos mostrarán subpaneles.<br><br> Seleccione el <b>Módulo Relacionado</b> para la relación. <br><br>Si el tipo de relación implica el uso de subpaneles, seleccione la vista de subpanel para los módulos correspondientes.<br><br> Haga click en <b>guardar</b> para crear la relación.',
        ),
        'labelsHelp' => array(
            'default' => 'Las <b>Etiquetas</b> de los campos, así como otros títulos en el módulo, pueden ser cambiadas.<br><br>Edite la etiqueta haciendo click dentro del campo, introduciendo una nueva etiqueta y haciendo click en <b>guardar</b>.<br><br>Si hay algún paquete de idioma instalado en la aplicación, puede seleccionar el <b>Idioma</b> a utilizar para las etiquetas.',
            'saveBtn' => 'Haga click en <b>guardar</b> para guardar todos los cambios.',
            'publishBtn' => 'Haga click en <b>guardar e implantar</b> para guardar todos los cambios y activarlos.',
        ),
        'portalSync' => array(
            'default' => 'Introduzca la <b>URL del Portal SuiteCRM</b> de la instancia de el portal para actualizar, y haga click en <b>Ir</b>.<br><br>Introduzca un nombre de usuario válido en SuiteCRM y la contraseña, y luego haga click en <b>Empezar sincronización</b>. <br><br>Las Personalizaciones realizadas a los <b>diseños</b>de el Portal SuiteCRM, junto con las <b>hojas de estilos</b> si uno se ha subido, se transferirán a un instancia especificada de el portal.',
        ),
        'portalStyle' => array(
            'default' => 'Puede personalizar la apariencia del portal de Sugar mediante una hoja de estilos.<br><br>Seleccione la <b>Hoja de Estilos</b> a subir.<br><br>La hoja de estilos será utilizada en el portal Sugar la próxima vez que realice una sincronización.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Para empezar un proyecto, haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete de su módulo(s) personalizado. <br/><br/> Cada paquete puede contener uno o más módulos. <br/> <br/> Por ejemplo, puede ser que desea crear un paquete que contiene un módulo personalizado que se relaciona con el módulo de Cuentas. O bien, usted puede ser que desee crear un paquete que contiene varios de los nuevos módulos que trabajar juntos como un proyecto y que están relacionadas entre sí y con otros módulos existentes en la aplicación.',
            'somepackages' => 'Un <b>paquete</b> actúa como un contenedor de módulos personalizados, que son parte de un proyecto. El paquete puede contener uno o más <b>módulos personalizados</b>, que pueden estar relacionados entre sí o con otros módulos en la aplicación. <br/> <br/> Después de crear un paquete para su proyecto, usted puede crear Módulos de los paquetes de inmediato, o puede volver al Constructor de Módulos en otro momento para completar el proyecto. <br><br>Cuando el proyecto se completa, puede <b>Desplegar</b> para instalar el paquete de módulos personalizados dentro  de la aplicación.',
            'afterSave' => 'Su nuevo paquete debe contener por lo menos un módulo. Usted puede crear uno o más módulos personalizados para el paquete.<br/><br/>Haga clic en <b>Nuevo Módulo</b> para crear un módulo personalizado para este paquete.<br/><br/>Después de crear por lo menos un módulo, puede publicar o desplegar en el paquete para hacerlo disponible en su instancia y / o de otras instancias de usuarios. <br/><br/>Para desplegar el paquete en un paso dentro de su instancia de SuiteCRM, haga click en <b>Desplegar</b>.<br><br>Haga click en <b>Publicar</b> para guardar el paquete como un archivo .zip. Después el archivo .Zip se guarda en su sistema, utilice el <b>Módulo de Carga</b> para Subir e instalar el paquete en su instancia de SuiteCRM.<br/><br/> Puede distribuir el archivo a otros usuarios para cargar e instalar dentro de sus propias instancias de SuiteCRM.',
            'create' => 'Un <b>paquete</b> actúa como un contenedor de módulos personalizados, que son parte de un proyecto. El paquete puede contener uno o más <b>módulos</b> personalizados , que pueden estar relacionados entre sí o con otros módulos en la aplicación. <br/><br/>Después de crear un paquete para su proyecto, usted puede crear Módulos de los paquetes de inmediato, o puede volver a la Constructor de modulos en otro momento para completar el proyecto.',
        ),
        'main' => array(
            'welcome' => 'Utilize  las <b>Herramientas de Desarrollo</b> para crear y manejar estándares y módulos personalizados y campos.<br/><br/>Para administrar los módulos de la aplicación, haga click en <b>Estudio</b>.<br/><br/>Para crear módulos personalizados, haga click en <b> Constructor de Modulos</b>.',
            'studioWelcome' => 'Todos los módulos instalados actualmente, incluyendo estándar y los objetos del módulo de carga, son personalizables dentro Estudio.'
        ),
        'module' => array(
            'somemodules' => "Dado que el actual paquete contiene al menos un módulo, puede <b>Desplegar</b> los módulos en el paquete dentro de  su instancia de SuiteCRM o <b>Publicar</b> el paquete que se instalará en la actual instancia de SuiteCRM u otra Instancia utilizando el <b>Módulo de Carga</b>.<br/><br/>Para instalar el paquete directamente dentro de su instancia de SuiteCRM, haga clic en <b>Desplegar</b>.<br><br>Para crear una archivo . zip de el paquete que puede ser cargado e instalado dentro de la instancia actual de SuiteCRM y otros casos utilizando el <b>Módulo  de Carga</b>, haga clic en <b>Publicar</b>. <br/> <br/> Usted puede construir los módulos de este paquete en etapas, y publicar o desplegar cuando esté listo para hacerlo. <br/><br/>Después de la publicación o el despliegue de un paquete, puede hacer cambios en el conjunto de propiedades y personalizar los módulos más. Luego volverá a re-publicar o re-desplegar el paquete para aplicar los cambios.",
            'editView' => 'Aquí se pueden editar los campos ya existentes. Usted puede eliminar cualquiera de los campos ya existentes o añadir campos disponibles en el panel de la izquierda.',
            'create' => 'Cuando escoja el tipo de <b>Tipo</b> del módulo que desea crear, tenga en cuenta los tipos de campos que quiera que en el módulo. <br/><br/>Cada plantilla del módulo contiene una serie de campos relacionados con el tipo de módulo descrito por el título.<br/><br/> <b>Básicos</b> -Proporciona campos básicos que aparecen en Módulos estándar, tales como el Nombre, Asignado a, el Equipo, Fecha de creación y el campo Descripción. <br/><br/><b>Empresa</b> - Proporciona campos de una organización específica, tales como Nombre de la empresa, la Industria y   Dirección. Utilice esta plantilla para crear módulos que son similares a módulos estandar de contabilidad.<br/><br/><b>Persona</b> - Proporciona campos específicos de un individuo, como el Saludo, Título, Nombre, Dirección y Teléfono . Utilice esta plantilla para crear módulos que son similares a módulos estandar de contactos y clientes.<br/><br/><b>Número</b> - Proporciona caso de error-y campos específicos, tales como Número, estado, prioridad Y descripción. Utilice esta plantilla para crear modulos similares a los estandares de Casos y Bug Tracker. <br/><br/> Nota: Después de crear el módulo, puede editar las etiquetas de los campos proporcionado por la plantilla, así como Crear campos personalizados para agregar los diseños del módulo.',
            'afterSave' => 'Personalice el módulo para que se adapte a sus necesidades de edición y creación de campos, establezca  relaciones con otros módulos y la organización de los campos dentro de el diseño.<br/><br/>Para ver los campos de la plantilla y gestionar los campos personalizados en el módulo, haga clic en <b>Ver Campos</b>.<br/><br/>Para crear y manejar las relaciones entre el módulo y otros módulos, ya sean módulos existentes u otros módulos personalizados en el mismo paquete, haga clic en <b>Ver Relaciones</b>.<br/><br/>Para editar los diseños módulo, haga clic en <b>Ver Diseños</b>. Puede cambiar a Vista Detallada, Editar Vista y  Listar Vista de diseño para el modulo solo podrá para los módulos existentes en la aplicación dentro de estudio.<br/><br/>Para crear un módulo con las mismas propiedades del módulo actual, Haga clic en <b>Duplicar</b>. Puede personalizar aún más el módulo nuevo.',
            'viewfields' => 'Los campos en el módulo puede ser personalizado para satisfacer sus necesidades.<br/><br/>No puede eliminar campos estándar, pero puede quitarlos de los diseños apropiados dentro de los diseños de páginas.<br/><br/>Puede editar las etiquetas de los campos estándar. Las otras propiedades de los campos estándar no son editables. Sin embargo, usted puede crear rápidamente nuevos campos que tienen propiedades similares, haga clic en el nombre de un campo y, a continuación, haga clic en <b>Clone</b> en el formulario de <b>Propiedades</ b>. Introduzca las nuevas propiedades y, a continuación, haga clic en <b>Guardar</b>.<br/> <br/> Si usted es la personaliza un nuevo módulo, una vez que el módulo se ha instalado, no todas las propiedades de los campos puede ser editadas. Configure de todas las propiedades de los campos estándar y campos personalizados antes de publicar e instalar el paquete que contiene el módulo personalizado.',
            'viewrelationships' => 'Puede crear relaciones varios-a-varios entre el actual módulo y otros módulos en el paquete, y / o entre el actual módulo y los módulos ya instalados en la aplicación.<br><br>Para crear relaciones uno-a-varios y uno-a-uno, cree <b>Relacionar</b> y <b>Relacionar Flex</b>campos de los módulos.',
            'viewlayouts' => 'Puede controlar qué campos están disponibles para la captura de datos dentro de <b>Editar Vista</b>. También se puede controlar los datos  que se muestra dentro de <b>Ver Detalles</b>. Las vistas no tienen que coincidir.<br/><br/> La creación rápida de un formulario es mostrada cuando se hace clic en <b>Crear</ b>en un módulo subpanel. Por defecto, <b>Crear Rápido</ b> el formulario de el diseño es el mismo por defecto que el diseño de <b>Editar Vista</b>. Puede personalizar de forma rápida Crear de manera que contenga menos y / o diferentes campos de la Vista de Diseño.<br><br> Puede determinar el módulo de seguridad el usando la personalizacion de el diseño junto con <b>Gestión de Roles</b>.<br><br>',
            'existingModule' => 'Después de la creación y personalización de este módulo, puede crear módulos adicionales o regresar al paquete a <b>Publicar</b> o <b>Desplegar</b> el paquete.<br><br>Para crear módulos adicionales, haga clic en <b>Duplicar</b> para crear un módulo con las mismas propiedades que el actual módulo, o navegar de vuelta al paquete, y haga clic en <b>Nuevo Módulo</b>.<br><br>Si está listo a <b>Publicar</b> o <b>Desplegar</ b>, el paquete que contiene este módulo, navegar de vuelta al paquete para realizar estas funciones. Puede publicar y desplegar paquetes que contengan al menos un módulo.',
            'labels' => 'Las etiquetas de los campos estandar  así como los campos personalizados se pueden cambiar. Cambiar etiquetas de un campo no afectará a los datos almacenados en los campos.',
        ),
        'listViewEditor' => array(
            'modify' => 'Hay tres columnas que aparecen a la izquierda. La Columna "por defecto" contiene los campos que se muestran en una vista de lista por defecto, La columna "Disponible" contiene los campos que el usuario puede elegir para crear una vista de una lista personalizada, y la columna "Oculto" contiene los campos disponibles para su uso Como administrador para añadir a las ya sea por defecto o columnas disponibles para su uso por los usuarios, pero se encuentra inhabilitado.',
            'savebtn' => 'Al hacer clic en <b>Guardar</b> guardar todos los cambios y hace que este activo',
            'Hidden' => 'Campos ocultos son campos que no están disponibles actualmente para los usuarios para el uso en vista de lista.',
            'Available' => 'Campos disponibles son los campos que no se muestran por defecto, pero puede ser activado por los usuarios.',
            'Default' => 'Por defecto se muestran los campos a los usuarios que no han creado una lista personalizada en la vista de ajustes.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Hay dos columnas mostradas a la izquierda. la columna "por defecto" contiene los campos que se mostrarán en la vista de búsqueda, y la columna "Oculto" contiene los campos disponibles para usted como un administrador para añadir a la vista.',
            'savebtn' => 'Al hacer clic en <b>Guardar y Desplegar</b> guarda todos los cambios y los hace activos',
            'Hidden' => 'Campos oculto son campos que no se muestra en la vista de búsqueda.',
            'Default' => 'Campos por defecto que se mostrarán en la vista de búsqueda.'
        ),
        'layoutEditor' => array(
            'default' => 'Hay dos columnas mostradas a la izquierda. La columna de la derecha, el actual diseño de la etiqueta o de diseño de la vista previa, es donde se cambia el diseño de el módulo. La columna de la izquierda, titulado Caja de herramientas, contiene elementos útiles y herramientas para su uso cuando la edición de el diseño. <br/><br/> Si el area de diseño,  que llevará por título Diseño Actual entonces está trabajando en una copia de el diseño actualmente utilizado el módulo de visualización.<br/><br/>Si es llamado Vista previa de diseño de entonces Están trabajando en una copia creada anteriormente por un clic en el botón Guardar, ya que podría haber sido cambiado a partir de la versión vista por los usuarios de este módulo.',
            'saveBtn' => 'Al hacer clic en este botón guarda el diseño de modo que usted pueda conservar sus cambios. Al volver a este módulo empezará a partir de este diseño modificado. Su diseño sin embargo no será visto por los usuarios del módulo hasta que haga clic en el botón Guardar y Publicar.',
            'publishBtn' => 'Haga clic en este botón para desplegar el diseño. Esto significa que este diseño será inmediatamente visto por los usuarios de este módulo.',
            'toolbox' => 'La caja de herramientas contiene una variedad de funciones útiles para la edición de diseños, incluyendo un área de la basura, un conjunto de elementos adicionales y un conjunto de campos disponibles. Cualquiera de estas puede ser arrastrado y colocado en el diseño.',
            'panels' => 'Esta zona muestra la forma en que su diseño se verá a los usuarios de este módulo cuando este sea mostrado.<br/><br/>Puede reposicionar elementos tales como campos, filas y paneles  arrastrándolos y soltándolos; eliminar elementos arrastrándolos y soltándolos En la zona de la basura en la caja de herramientas, o añadir nuevos elementos arrastrándolos de la caja de herramientas y soltándolos sobre ellos en el diseño en la posición deseada.'
        ),
        'dropdownEditor' => array(
            'default' => 'Hay dos columnas mostradas a la izquierda. La columna de la derecha, el actual diseño de la etiqueta o de diseño de la vista previa, es donde se cambia el diseño de el módulo. La columna de la izquierda, titulado Caja de herramientas, contiene elementos útiles y herramientas para su uso cuando la edición de el diseño. <br/><br/> Si el area de diseño,  que llevará por título Diseño Actual entonces está trabajando en una copia de el diseño actualmente utilizado el módulo de visualización.<br/><br/>Si es llamado Vista previa de diseño de entonces Están trabajando en una copia creada anteriormente por un clic en el botón Guardar, ya que podría haber sido cambiado a partir de la versión vista por los usuarios de este módulo.',
            'dropdownaddbtn' => 'Al hacer clic en este botón añade un nuevo elemento a la lista desplegable.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exporte personalizaciones realizadas en Estudio mediante la creación de paquetes que se puede cargar en otra instancia de SuiteCRM a través de el <b>Módulo de Carga</b>.<br><br>En primer lugar, proporcione un <b>Nombre del paquete</b>. Puede proporcionar <b>Autor</b> y <b>Descripción</b> para la información de el paquete también.<br><br>Seleccione el módulo(s) que contienen la personalizaciónes que desea exportar. Sólo los módulos que contiene personalizaciones aparecerá para seleccionar.<br><br> A continuación, haga clic en <b>Exportar</b> para crear un Archivo .zip para el paquete que contiene los cambios.',
            'exportCustomBtn' => 'Haga clic en <b>Exportar</ b> para crear un  archivo .zip para el paquete que contiene la personalización que usted desea exportar.
',
            'name' => 'Este es el <b>Nombre</b> de el paquete. Este nombre sera mostrado durante la instalación.',
            'author' => 'El <b>Autor</b> es el nombre de la entidad que ha creado el paquete. El autor puede ser un individuo o una empresa.<br><br>El autor se mostrará en el Cargador de Modulo después de que le paquete se haya subido para instalarlo con Studio.',
            'description' => 'Este es la <b>Descripción</b> del paquete que se muestra durante la instalación.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bienvenido a el area <b>Herramientas de Desarrollo</b>.<br/><br/> Utilize las herramientas dentro de esta area para crear y manejar estandares y personalizar modulos y campos.',
            'studioBtn' => 'Utilice <b>Estudio</b> para personalizar los módulos instalados pora cambiar la organización de los campos, seleccionando que campos estan disponibles y creando campos de datos personalizados.',
            'mbBtn' => 'Utilice el <b>Módulo Constructor</b> para crear nuevos módulos.',
            'appBtn' => 'Use de aplicaciones para personalizar el modo de diversas propiedades del programa, como el número de informes de TPS se muestran en la página principal',
            'backBtn' => 'Volver a la etapa anterior.',
            'studioHelp' => 'Utilice <b>Estudio</b> para personalizar los módulos instalados.',
            'moduleBtn' => 'Haga clic para editar este módulo.',
            'moduleHelp' => 'Seleccione el módulo de componente que desea editar',
            'fieldsBtn' => 'Modificar el tipo de información que se almacena en el módulo de control de la <b> Campos</b> en el módulo.<br/><br/>Puede editar y crear campos personalizados aquí.',
            'labelsBtn' => 'Edite las <b>Etiquetas</b> para mostrar los valores en este módulo.',
            'layoutsBtn' => 'Personalize el <b>Diseño</b> de Edición, Detalle, la Lista y vista de búsqueda.',
            'subpanelBtn' => 'Edite que información se muestra en estos subpaneles.',
            'layoutsHelp' => 'Seleccione un <b>Diseño para editar</b>.<br/><br/>Para cambiar el formato que contiene los campos de datos para la entrada de datos, haga click en <b>Editar Vista</b>.<br/><br/>Para cambiar el diseño que muestra los datos entró en el campo en el editor de Vista, haga clic en <b>Ver Detalles</b>. <br/><br/> Para cambiar las columnas que aparecen en la lista por defecto, haga click en <b>Vista de lista</b>.<br/><br/>Para cambiar la búsqueda Básica y Avanzada, haga click en <b>Buscar</b>.',
            'subpanelHelp' => 'Seleccione un <b>Subpanel</b> para editar.',
            'searchHelp' => 'Seleccione un diseño de <b>Búsqueda</b> para editar.',
            'newPackage' => 'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
            'mbHelp' => '<b>Bienvenido al Constructor de Módulos</ b>. <br/><br/>Use el <b>Constructor de Módulos</ b> para crear paquetes que contienen módulos personalizados basado en estandares objetos personalizados. <br/><br/>Para empezar, haga clic en <b>Nuevo Paquete</ b> para crear un nuevo paquete, o seleccione un paquete para editar. <br/> <br/> Un<b>Paquete</b> Actúa como un contenedor de módulos personalizados, que son parte de un proyecto. El paquete puede contener uno o más módulos personalizados que pueden ser relacionados unos con otros o con los módulos en la aplicación. <br/> <br/> Ejemplos: Es posible que desee crear un paquete que contiene un módulo personalizado que se relaciona con el módulo estándar de Cuentas. O bien, usted puede ser que desee crear un paquete que contiene varios de los nuevos módulos que trabajan juntos como un proyecto y que están relacionadas entre sí y con los módulos en la aplicación.',
            'exportBtn' => 'Haga clic en <b>Exportar Personalizaciones </b> para crear un paquete que contiene las personalizaciones realizadas en Estudio para módulos específicos.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editor de listas desplegables',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Constructor de módulos',
    'LBL_STUDIO' => 'Estudio',
    'LBL_DROPDOWNEDITOR' => 'Editor de listas desplegables',
    'LBL_DEVELOPER_TOOLS' => 'Herramientas de desarrollo',
    'LBL_SUITEPORTAL' => 'Editor del Portal SuiteCRM',
    'LBL_PACKAGE_LIST' => 'Lista de paquetes',
    'LBL_HOME' => 'Inicio',
    'LBL_NONE' => '-Ninguno-',
    'LBL_DEPLOYE_COMPLETE' => 'Implantación completada',
    'LBL_DEPLOY_FAILED' => 'Ocurrió un error durante el proceso de implantación, podría no haberse instalado correctamente el paquete.',
    'LBL_AVAILABLE_SUBPANELS' => 'Subpaneles disponibles',
    'LBL_ADVANCED' => 'Avanzada',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzado',
    'LBL_BASIC' => 'Básica',
    'LBL_BASIC_SEARCH' => 'Filtro rápido',
    'LBL_CURRENT_LAYOUT' => 'Diseño',
    'LBL_CURRENCY' => 'Moneda',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'Vista de Lista de SuiteCRM Dashlet',
    'LBL_POPUP' => 'Vista Emergente',
    'LBL_POPUPLISTVIEW' => 'Vista de Lista Emergente',
    'LBL_POPUPSEARCH' => 'Búsqueda emergente',
    'LBL_DASHLETSEARCHVIEW' => 'Búsqueda de SuiteCRM Dashlet',
    'LBL_DETAILVIEW' => 'Vista de detalle',
    'LBL_DROP_HERE' => '[Suelte Aqui]',
    'LBL_EDIT' => 'Editar',
    'LBL_EDIT_LAYOUT' => 'Editar diseño',
    'LBL_EDIT_FIELDS' => 'Editar Campos Personalizados',
    'LBL_EDITVIEW' => 'Vista de edición',
    'LBL_FILLER' => '(relleno)',
    'LBL_FIELDS' => 'Campos',
    'LBL_FAILED_TO_SAVE' => 'Falla al guardar',
    'LBL_FAILED_PUBLISHED' => 'Fallo al publicar',
    'LBL_HOMEPAGE_PREFIX' => 'Mi',
    'LBL_LAYOUT_PREVIEW' => 'Vista preliminar del diseño',
    'LBL_LAYOUTS' => 'Diseños',
    'LBL_LISTVIEW' => 'Vista de lista',
    'LBL_MODULES' => 'Módulos',
    'LBL_MODULE_TITLE' => 'Estudio',
    'LBL_NEW_PACKAGE' => 'Nuevo paquete',
    'LBL_NEW_PANEL' => 'Nuevo panel',
    'LBL_NEW_ROW' => 'Nueva fila',
    'LBL_PACKAGE_DELETED' => 'Paquete eliminado',
    'LBL_PUBLISHING' => 'Publicando ...',
    'LBL_PUBLISHED' => 'Publicado',
    'LBL_SELECT_FILE' => 'Seleccionar archivo',
    'LBL_SUBPANELS' => 'Subpaneles',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'Título:',
    'LBL_SEARCH_FORMS' => 'Búsqueda',
    'LBL_SEARCH' => 'Búsqueda',
    'LBL_SEARCH_BUTTON' => 'Búsqueda',
    'LBL_FILTER' => 'Filtro',
    'LBL_TOOLBOX' => 'Caja de herramientas',
    'LBL_QUICKCREATE' => 'Creación rápida',
    'LBL_EDIT_DROPDOWNS' => 'Editar una lista desplegable global',
    'LBL_ADD_DROPDOWN' => 'Agregar una nueva lista desplegable global',
    'LBL_BLANK' => '-Vacío-',
    'LBL_TAB_ORDER' => 'Órden de tabulación',
    'LBL_TABDEF_TYPE' => 'Tipo de Visualización:',
    'LBL_TABDEF_TYPE_HELP' => 'Seleccione la forma en la que se debe mostra esta sección. Esta opción únicamente tendrá efecto si ha habilitado el modo pestañas para esta vista.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Pestaña',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Seleccione Panel para que el panel se muestre en la vista inicial o en la vista del panel anterior que se haya seleccionado como Pestaña.  <br/>Seleccione Pestaña para mostrar el panel en una pestaña independiente. Cuando se ha seleccionado un panel como Pestaña, los siguientes paneles seleccionados como Panel se mostrarán en la vista de dicha pestaña.  <br/>Siempre que seleccione un panel como Pestaña será el primer panel a mostrar en dicha Pestaña.  <br/>Si se selecciona como Pestaña el segundo panel o posteriores, el primer panel se establecerá automáticamente como Pestaña si se hubiera seleccionado anteriormente como Panel.',
    'LBL_TABDEF_COLLAPSE' => 'Contraído',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Seleccione para que por defecto el estado del panel sea contraído.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nombre',
    'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
    'LBL_DROPDOWN_ITEMS' => 'Elementos de lista',
    'LBL_DROPDOWN_ITEM_NAME' => 'Nombre del elemento',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Etiqueta de visualización',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizar con vista de detalle',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleccione esta opción para sincronizar el diseño de la vista de edición con el diseño correspondiente de la vista de detalle. Los campos y su ubicación en la vista de edición serán sincronizados y guardados automáticamente en la vista de detalle al hacer click en guardar o guardar e implantar. <br>Luego no será posible hacer cambios de diseño desde la vista de detalle.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Esta vista de detalle está sincronizada con la vista de edición correspondiente. <br> Los campos y su ubicación son un reflejo de los campos y su ubicación en la vista de edición.<br> Las modificaciones a la vista de detalle no pueden ser guardadas desde ésta página. Haga los cambios o quite la sincronización en la página de vista de edición. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Copiar de vista de edición',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Ingrese valores tanto para el nombre como para la etiqueta. Para agregar un elemento en blanco, haga click en agregar sin escribir ningún valor en el nombre y la etiqueta.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Clave ya existe en la lista',
    'LBL_NO_SAVE_ACTION' => 'No se ha podido encontrar la opción de guardar para esta vista.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: documento mal constituido',


//RELATIONSHIPS
    'LBL_MODULE' => 'Módulo',
    'LBL_LHS_MODULE' => 'Módulo principal',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relación creada en el Estudio',
    'LBL_RELATIONSHIPS' => 'Relaciones',
    'LBL_RELATIONSHIP_EDIT' => 'Editar relación',
    'LBL_REL_NAME' => 'Nombre',
    'LBL_REL_LABEL' => 'Etiqueta',
    'LBL_REL_TYPE' => 'Tipo',
    'LBL_RHS_MODULE' => 'Módulo relacionado',
    'LBL_NO_RELS' => 'Sin relaciones',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condición opcional',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Columna',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valor',
    'LBL_SUBPANEL_FROM' => 'Subpanel de',
    'LBL_RELATIONSHIP_ONLY' => 'No se creará ningún elemento visible para esta relación ya que existía anteriormente una relación visible entre estos dos módulos',
    'LBL_ONETOONE' => 'Uno a uno',
    'LBL_ONETOMANY' => 'Uno a muchos',
    'LBL_MANYTOONE' => 'Muchos a uno',
    'LBL_MANYTOMANY' => 'Muchos a muchos',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Seleccione un módulo a editar.',
    'LBL_QUESTION_LAYOUT' => 'Seleccione un diseño a editar.',
    'LBL_QUESTION_SUBPANEL' => 'Seleccione un subpanel a editar.',
    'LBL_QUESTION_SEARCH' => 'Seleccione un diseño de búsqueda a editar.',
    'LBL_QUESTION_MODULE' => 'Seleccione un componente de módulo a editar.',
    'LBL_QUESTION_PACKAGE' => 'Seleccione un paquete a editar, o cree un nuevo paquete.',
    'LBL_QUESTION_EDITOR' => 'Seleccione una herramienta.',
    'LBL_QUESTION_DASHLET' => 'Seleccione un diseño de dashlet a editar.',
    'LBL_QUESTION_POPUP' => 'Seleccionar un diseño emergente para editarlo.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nombre',
    'LBL_LABELS' => 'Etiquetas',
    'LBL_MASS_UPDATE' => 'Actualización masiva',
    'LBL_DEFAULT_VALUE' => 'Valor predeterminado',
    'LBL_REQUIRED' => 'Requerido',
    'LBL_DATA_TYPE' => 'Tipo',
    'LBL_HCUSTOM' => 'PERSONALIZADO',
    'LBL_HDEFAULT' => 'PREDETERMINADO',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_CUSTOM_FIELDS' => 'campo creado en Estudio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Editar etiquetas',
    'LBL_SECTION_PACKAGES' => 'Paquetes',
    'LBL_SECTION_PACKAGE' => 'Paquete',
    'LBL_SECTION_MODULES' => 'Módulos',
    'LBL_SECTION_DROPDOWNS' => 'Listas desplegables',
    'LBL_SECTION_PROPERTIES' => 'Propiedades',
    'LBL_SECTION_DROPDOWNED' => 'Editar lista desplegable',
    'LBL_SECTION_HELP' => 'Ayuda',
    'LBL_SECTION_MAIN' => 'Principal',
    'LBL_SECTION_FIELDEDITOR' => 'Editar campo',
    'LBL_SECTION_DEPLOY' => 'Desplegar',
    'LBL_SECTION_MODULE' => 'Módulo',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Por omisión',
    'LBL_HIDDEN' => 'Oculto',
    'LBL_AVAILABLE' => 'Disponible',
    'LBL_LISTVIEW_DESCRIPTION' => 'A continuación se muestran tres columnas. La columna <b>Por omisión</b> contiene los campos que se muestran en una lista predeterminada. La columna <b>Adicional</b> contiene campos que un usuario puede elegir a la hora de crear una vista personalizada. La columna <b>Disponible</b> muestra columnas disponibles para que usted como administrador pueda, o bien añadirlas a las columnas por omisión, o a las adicionales para que sean usadas por usuarios',
    'LBL_LISTVIEW_EDIT' => 'Editor de listas',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Vista Preliminar',
    'LBL_MB_RESTORE' => 'Restaurar',
    'LBL_MB_DELETE' => 'Eliminar',
    'LBL_MB_DEFAULT_LAYOUT' => 'Diseño por omisión',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Agregar',
    'LBL_BTN_SAVE' => 'Guardar',
    'LBL_BTN_SAVE_CHANGES' => 'Guardar cambios',
    'LBL_BTN_DONT_SAVE' => 'Descartar cambios',
    'LBL_BTN_CANCEL' => 'Cancelar',
    'LBL_BTN_CLOSE' => 'Cerrar',
    'LBL_BTN_SAVEPUBLISH' => 'Guardar y desplegar',
    'LBL_BTN_CLONE' => 'Clonar',
    'LBL_BTN_ADDROWS' => 'Agregar filas',
    'LBL_BTN_ADDFIELD' => 'Agregar campo',
    'LBL_BTN_ADDDROPDOWN' => 'Agregar lista desplegable',
    'LBL_BTN_SORT_ASCENDING' => 'Orden ascendente',
    'LBL_BTN_SORT_DESCENDING' => 'Orden descendente',
    'LBL_BTN_EDLABELS' => 'Editar Etiquetas',
    'LBL_BTN_UNDO' => 'Deshacer',
    'LBL_BTN_REDO' => 'Rehacer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Agregar campo personalizado',
    'LBL_BTN_EXPORT' => 'Exportar Personalizaciones',
    'LBL_BTN_DUPLICATE' => 'Duplicar',
    'LBL_BTN_PUBLISH' => 'Publicar',
    'LBL_BTN_DEPLOY' => 'Desplegar',
    'LBL_BTN_EXP' => 'Exportar',
    'LBL_BTN_DELETE' => 'Eliminar',
    'LBL_BTN_VIEW_LAYOUTS' => 'Ver Diseños',
    'LBL_BTN_VIEW_FIELDS' => 'Ver Campos',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Ver relaciones',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Agregar relación',
    'LBL_BTN_RENAME_MODULE' => 'Cambiar el Nombre del Módulo',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Error: El campo ya existe',
    'ERROR_INVALID_KEY_VALUE' => "Error: Valor de Clave No Válido: [&#39;]",
    'ERROR_NO_HISTORY' => 'No se han encontrado archivos en el historial',
    'ERROR_MINIMUM_FIELDS' => 'El diseño debe contener al menos un campo',
    'ERROR_GENERIC_TITLE' => 'Ha ocurrido un error',
    'ERROR_REQUIRED_FIELDS' => '¿Está seguro de que desea continuar? Los siguientes campos requeridos no se encuentran en el diseño:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nombre del Paquete:',
    'LBL_MODULE_NAME' => 'Nombre del Modulos:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_KEY' => 'Clave:',
    'LBL_ADD_README' => ' Leame',
    'LBL_LAST_MODIFIED' => 'Ultima Modificación:',
    'LBL_NEW_MODULE' => 'Modulo Nuevo',
    'LBL_LABEL' => 'Etiqueta:',
    'LBL_LABEL_TITLE' => 'Etiqueta',
    'LBL_WIDTH' => 'Anchura',
    'LBL_PACKAGE' => 'Paquete:',
    'LBL_TYPE' => 'Tipe:',
    'LBL_NAV_TAB' => 'Pestaña de Navegación',
    'LBL_CREATE' => 'Crear',
    'LBL_LIST' => 'Lista',
    'LBL_VIEW' => 'Vista',
    'LBL_HISTORY' => 'Historial',
    'LBL_RESTORE_DEFAULT' => 'Restaurar Vista Por Defecto',
    'LBL_ACTIVITIES' => 'Actividades',
    'LBL_NEW' => 'Nuevo',
    'LBL_TYPE_BASIC' => 'básico',
    'LBL_TYPE_COMPANY' => 'empresa',
    'LBL_TYPE_PERSON' => 'persona',
    'LBL_TYPE_ISSUE' => 'problema',
    'LBL_TYPE_SALE' => 'venta',
    'LBL_TYPE_FILE' => 'archivo',
    'LBL_RSUB' => 'Este es el subpanel que se mostrará en su módulo',
    'LBL_MSUB' => 'Este es el subpanel que su módulo proporciona para que sea mostrado por el módulo relacionado',
    'LBL_MB_IMPORTABLE' => 'Importable',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] ha sido eliminado',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exportar personalizaciones',
    'LBL_EC_NAME' => 'Nombre de paquete:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Descripción:',
    'LBL_EC_CHECKERROR' => 'Favor Selecione un modulo.',
    'LBL_EC_CUSTOMFIELD' => 'campo(s) personalido',
    'LBL_EC_CUSTOMLAYOUT' => 'diseño(s) personalizado',
    'LBL_EC_NOCUSTOM' => 'No hay Modulos personalizados.',
    'LBL_EC_EMPTYCUSTOM' => 'personalizaciones vacio.',
    'LBL_EC_EXPORTBTN' => 'Exportar',
    'LBL_MODULE_DEPLOYED' => 'Modulos ha sido desplegados.',
    'LBL_UNDEFINED' => 'no definido',
    'LBL_EC_VIEWS' => 'feed(s) personalizados',
    'LBL_EC_SUITEFEEDS' => 'feed(s) personalizados',
    'LBL_EC_DASHLETS' => 'dahslet(s) personalizados',
    'LBL_EC_CSS' => 'css(s) personalizados',
    'LBL_EC_TPLS' => 'tpls(s) personalizados',
    'LBL_EC_IMAGES' => 'imágene(s) personalizadas',
    'LBL_EC_JS' => 'js(s) personalizados',
    'LBL_EC_QTIP' => 'qtip(s) personalizados',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'No se han podido recuperar datos',
    'LBL_AJAX_LOADING' => 'Cargando...',
    'LBL_AJAX_DELETING' => 'Eliminando...',
    'LBL_AJAX_BUILDPROGRESS' => 'Construcción en Progreso...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Despliege en Progreso...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resultado',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Esta operación se ha realizado correctamente',
    'LBL_AJAX_LOADING_TITLE' => 'En curso...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Por favor espere, carga...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => '¿Está seguro de que desea eliminar este paquete? Esto eliminara definitivamente todos los archivos asociados con este paquete.',
    'LBL_JS_REMOVE_MODULE' => '¿Está seguro de que desea quitar este módulo? Esto eliminará permanentemente todos los archivos asociados con este módulo.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Cualquier personalización que haya realizado en el Estudio será sobrescrita cuando este módulo sea desplegado de nuevo. ¿Está seguro de que desea proceder?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Desplegando Paquete',
    'LBL_JS_VALIDATE_NAME' => 'Nombre - Debe ser alfanumérico, sin espacios y comenzando por letra',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'El Nombre del Paquete ya existe',
    'LBL_JS_VALIDATE_KEY' => 'Clave - Debe ser alfanumérica',
    'LBL_JS_VALIDATE_LABEL' => 'Por favor, introduzca la etiqueta que se utilizará como Nombre Visible de este módulo',
    'LBL_JS_VALIDATE_TYPE' => 'Por favor, seleccione el tipo de módulo que quiere construir de la lista anterior',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etiqueta - por favor, agregue la etiqueta que será mostrada sobre el subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Al eliminar este campo personalizado, eliminará tanto el campo personalizado como todos los datos de la base de datos relacionados con el campo personalizado. El campo ya no aparecerá en ninguno de los diseños de módulos. ¿Desea continuar?<br /><br />Al eliminar este campo personalizado, eliminará tanto el campo personalizado como todos los datos en la base de datos relacionados con el campo personalizado. El campo ya no aparecerá en ninguno de los diseños de módulos, y no estará disponible en los Informes.\n\nEl cambio en los Informes será visto tras cerrar la sesión y abrir una nueva, y todos los informes que contengan el campo tendrán que ser actualizados para poder ser ejecutados.\n\n¿Desea continuar?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => '¿Está seguro de que desea eliminar esta relación?',
    'LBL_CONFIRM_DONT_SAVE' => 'Hay cambios pendientes de ser guardados, ¿desea guardarlos ahora?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => '¿Guardar Cambios?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Los datos pueden ser truncados y ésto no podrá deshacerse, ¿está seguro de que desea continuar?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Seleccione el tipo de datos apropiado acorde con el tipo de datos que será introducido en el campo.',

//Revert Module labels
    'LBL_RESET' => 'Restablecer',
    'LBL_RESET_MODULE' => 'Restablecer Módulo',
    'LBL_REMOVE_CUSTOM' => 'Quitar Personalizaciones',
    'LBL_CLEAR_RELATIONSHIPS' => 'Limpiar Relaciones',
    'LBL_RESET_LABELS' => 'Restablecer Eqiquetas',
    'LBL_RESET_LAYOUTS' => 'Restablecer Diseños"',
    'LBL_REMOVE_FIELDS' => 'Quitar Campos Personalizados',
    'LBL_CLEAR_EXTENSIONS' => 'Limpiar Extensiones',
    'LBL_HISTORY_TIMESTAMP' => 'Registro de Tiempo',
    'LBL_HISTORY_TITLE' => 'historial',

    'fieldTypes' => array(
        'varchar' => 'Campo de Texto',
        'int' => 'Entero',
        'float' => 'Coma flotante',
        'bool' => 'Casilla de Verificación',
        'enum' => 'Desplegable',
        'dynamicenum' => 'Lista Desplegable Dinámica',
        'multienum' => 'Selección Múltiple',
        'date' => 'Fecha',
        'phone' => 'Teléfono',
        'currency' => 'Moneda',
        'html' => 'HTML',
        'radioenum' => 'Opción Radio',
        'relate' => 'Relacionado',
        'address' => 'Dirección',
        'text' => 'Área de Texto',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Fecha y hora',
        'decimal' => 'Decimal',
        'image' => 'Imagen',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Etiquetas de uso frecuente",
        "all" => "Todas las etiquetas",
    ),

    'parent' => 'Posiblemente Relacionado con',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Está seleccionando este elemento para su eliminación de la lista desplegable. Cualquier campo desplegable que use esta lista con este elemento como valor ya no mostrará dicho valor, y el valor ya no podrá ser seleccionado en los campos desplegables. ¿Está seguro de que desea continuar?",

    'LBL_ALL_MODULES' => 'Todos los Módulos',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relacionado {1} ID)',
);
