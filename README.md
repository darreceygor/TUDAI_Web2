### TPE WEB 2

# Requerimientos Funcionales

# Acceso público 

Deben existir diferentes secciones donde se muestre el contenido dinámicamente generado desde la base de datos. Estas secciones pueden ser accedidas de manera pública, no es necesario loguearse.
 * Listado de ítems: Se debe poder visualizar todos los items cargados
 * Detalle de ítem: Se debe poder navegar y visualizar cada ítem particularmente 
 * Listado de categorías: Se debe poder visualizar un listado con todas las categorías cargadas
 * Listado de ítems x categoría: Se debe poder visualizar los ítems perteneciente a una categoría seleccionada

Importante: En cada ítem siempre se debe mostrar el nombre de la categoría a la que pertenece.

# Acceso administrador de datos 

Debe existir una sección para la administración de datos, la cual es accedida solo a usuarios administradores del sitio.*
 * El usuario administrador debe loguearse con usuario y contraseña.
 * El usuario debe poder desloguearse (logout)
 * Solo los usuarios logueados pueden modificar las categorías y los ítems.

Se debe crear servicios de ABM (alta/baja/modificación) para administrar los datos:
Administrar Ítems (entidad del lado N de la relación).
 * Lista de Items (Noticias/Productos/…)
 * Agregar Items (Noticias/Productos/…)
 * Eliminar Items (Noticias/Productos/…)
 * Editar Items (Noticias/Productos/…)
Importante: 
Al agregar Items (Noticias/Productos/…) se debe poder elegir la categoría a la que pertenecen utilizando un select que muestre el nombre de la misma. 
Administrar Categorías (entidad del lado 1 de la relación)
 * Lista de Categorias
 * Agregar Categorias
 * Eliminar Categorias
 * Editar Categorias.

--------------------------------------------------------------------------------------------------------------------------------
Requerimientos Técnicos (no funcionales)
=> Todos los HTML deben mostrarse utilizando un motor de plantillas (Smarty o similar)*.
=> Todas las acciones realizadas en la página deben estar manejadas utilizando el patrón MVC.
=> Las URL deben ser semánticas.
=> El sitio debe incluir un archivo sql para instalar la base de datos.

