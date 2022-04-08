# CRUD-LYVOS-LARAVEL-PHP-COMPOSER-MYSQL
 Plataforma para la administracion de documentos y servicios , donde se le prestara el servicio al colegio Guilford ubicado en la localidad de suba en bogotá.

PLATAFORMA DE PAGOS COLEGIO GUILFORD El colegio guilford ubicado en bogotá en la localidad de suba ofrece diferentes servicios educativos , recientemente los clientes se han venido quejando por la falta de optimización de los procesos evidenciados en la institución sobre todo por las largas filas que deben realizar para poder realizar los pagos y de no poder realizar la consulta de los servicios que adeudan hasta el momento . los tipos de usuario que debe manejar el sistema son administrador , usuario externo , usuario interno tener un usuario interno el encargado de: Configurar cada uno de los servicios ofrecidos (descripción, costo y duración). realizar el pago o abono al estudiante que previamente debe estar creado en el sistema Cancelar pagos que se encuentren activos generar los reportes usuarios atendidos por dia pagos pendientes por estudiante. se tendrá un usuario externo el cual podrá registrarse en la plataforma y debe estar en la capacidad de : visualizar sus pagos visualizar pagos realizados programar una cita para poder ser atendido calificar la atención una vez cumplida realizar y gestionar comentarios sobre la atención recibida

Un administrador se encarga de gestionar los usuarios internos e indicar el servicio del cual se encarga (pueden haber múltiples usuarios internos encargados ) y además ejerce control total de la plataforma.

Requerimientos []: Funcionales:

Página de inicio:

Página donde se verá el encabezado de las noticias.

Registro de usuarios: -un usuario no registrado sólo verá información relevante al colegio

Si un usuario quiere ver facturas o videos de las clases debe suscribirse y pagar una membresía.

Los usuarios con membresía podrán ver los videos completos al presionar sobre los encabezados.

Perfil de lector estudiante:

Configuración de perfil: Nombre, foto, intereses, tags.

El usuario podrá ver las facturas.

El usuario puede descargar las facturas .

Puede ver la lista de facturas creadas a su nombre. -Puede ver las facturas pagadas y que faltan por cancelar -Solicitar factura y una cita para poder ser atendido

calificar la atención una vez cumplida

Perfil de secretaria:

El usuario podrá actualizar los datos como: Nombre, foto, descripción, lista de facturas, etc.
Es quien crea las facturas. -Es quien está encargado de crear los cursos y servicios

Crea los estudiantes y el nombre del acudiente , asigna un curso específico..

Antes de publicarse estas deben ser autorizadas por el jefe administrador.

Las facturas después de creadas y publicadas no pueden ser editadas.
Puede ver las estadísticas de facturas creadas. -Asigna los tipos de pago de las facturas y agrega si fue cancelada o está vigente puede bloquear facturas y deben dejar el comentario de por que la factura fue bloqueada

Perfil de (Administrador):

Nombre, foto, descripción, lista de noticias bloqueadas, etc
Evalúa las facturas entregadas por la secretaria.

Si estas cumplen son publicadas.

Sí no cumplen dejará un comentario.

Puede dejar comentario al secretario en la factura

Puede ver las estadísticas de impacto del semanario. Es quien crea las facturas. -Es quien está encargado de crear los cursos

Crea los estudiantes y el nombre del acudiente , asigna un curso específico..

Antes de publicarse estas deben ser autorizadas por el jefe rector.

Las facturas después de creadas y publicadas no pueden ser editadas.
Puede ver las estadísticas de facturas creadas. -Asigna los tipos de pago de las facturas y agrega si fue cancelada o está vigente -consulta facturas por cobrar y por pagar puede bloquear facturas y deben dejar el comentario de por que la factura fue bloqueada puede desbloquear las facturas

Perfil de jefe de sistemas (SuperAdmin):

Este perfil permite crear todos los usuarios

Permite bloquear usuarios.

Los usuarios bloqueados solo pueden ver la página principal..

Permite desbloquear al usuario. Debe dejar un comentario del motivo.

No Funcionales

Aclaraciones: Bajo ninguna circunstancia se permite borrar facturas. Solo se pueden marcar como bloqueadas. factura bloqueadas: deben dejar el comentario de por que la factura fue bloqueada Un administrador se encarga de gestionar los usuarios internos e indicar el servicio del cual se encarga (pueden haber múltiples usuarios internos encargados ) y además ejerce control total de la plataforma.