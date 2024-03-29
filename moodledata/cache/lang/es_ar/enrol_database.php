<?php $this->cache['es_ar']['enrol_database'] = array (
  'dbencoding' => 'Codificación de base de datos',
  'dbhost' => 'Host de la base de datos',
  'dbhost_desc' => 'Escriba la dirección IP del servidor de la base de datos o el nombre del host',
  'dbname' => 'Nombre de la base de datos',
  'dbpass' => 'Contraseña de la base de datos',
  'dbsetupsql' => 'Comando de configuración de la base de datos',
  'dbsetupsql_desc' => 'Comando SQL para la instalación de bases de datos especiales, a menudo utilizado para establecer la codificación de comunicación - ejemplo para MySQL y PostgreSQL: <em>SET NAMES \'utf8\'</em>',
  'dbsybasequoting' => 'Use sybase quotes',
  'dbsybasequoting_desc' => 'Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL!',
  'dbtype' => 'Driver de la base de datos',
  'dbtype_desc' => 'Nombre del driver de la base de datos ADOdb, tipo del motor de base de datos externo.',
  'dbuser' => 'Usuario de la base de datos',
  'debugdb' => 'Depurar ADOdb',
  'debugdb_desc' => 'Debug ADOdb connection to external database - use when getting empty page during login. Not suitable for production sites!',
  'defaultcategory' => 'Categoría por defecto del nuevo curso',
  'defaultcategory_desc' => 'Categoría por defecto para cursos de creación automática. Usada cuando no se ha especificado o no se ha encontrado el ID de una nueva categoría.',
  'defaultrole' => 'Rol por defecto',
  'defaultrole_desc' => 'Rol que se asigna por defecto si nigún otro rol se especifica en una tabla externa.',
  'ignorehiddencourses' => 'Pasar por alto cursos ocultos',
  'ignorehiddencourses_desc' => 'Si se activa esta opción, los usuarios no serán matriculados en cursos configurados como no disponibles para los estudiantes.',
  'localcoursefield' => 'Campo de curso local',
  'localrolefield' => 'Campo de rol local',
  'localuserfield' => 'Campo de usuario local',
  'newcoursetable' => 'Tabla de nuevos cursos remotos',
  'newcoursetable_desc' => 'Se especifica el nombre de la tabla que contiene la lista de cursos que deberían crearse automáticamente. Si está vacía, significa que no está creado ningún curso.',
  'newcoursecategory' => 'Campo de ID de categoría del nuevo curso',
  'newcoursefullname' => 'Campo de nombre completo del nuevo curso',
  'newcourseidnumber' => 'Campo de número ID del nuevo curso',
  'newcourseshortname' => 'Campo de nombre corto del nuevo curso',
  'pluginname' => 'Base de datos externa',
  'pluginname_desc' => 'You can use an external database (of nearly any kind) to control your enrolments. It is assumed your external database contains at least a field containing a course ID, and a field containing a user ID. These are compared against fields that you choose in the local course and user tables.',
  'remotecoursefield' => 'Nombre del campo en la tabla remota que se usa para emparejar las entradas en la tabla de cursos',
  'remotecoursefield_desc' => 'The name of the field in the remote table that we are using to match entries in the course table.',
  'remoteenroltable' => 'Tabla de matriculación remota de usuarios',
  'remoteenroltable_desc' => 'Indique el nombre de la tabla que contiene la lista de matrículas de usuario. Si queda vacío significa que no hay sincronización en la matriculación de usuarios.',
  'remoterolefield' => 'Nombre del campo en la tabla remota que se usa para emparejar las entradas en la tabla de roles',
  'remoterolefield_desc' => 'The name of the field in the remote table that we are using to match entries in the roles table.',
  'remoteuserfield' => 'Nombre del campo en la tabla remota que se usa para emparejar las entradas en la tabla de usuarios',
  'settingsheaderdb' => 'Conexión con la base de datos externa',
  'settingsheaderlocal' => 'Asignación de campos locales',
  'settingsheaderremote' => 'Sincronización de matriculación remota',
  'settingsheadernewcourses' => 'Creación de nuevos cursos',
  'remoteuserfield_desc' => 'The name of the field in the remote table that we are using to match entries in the user table.',
  'templatecourse' => 'Nueva plantilla de curso',
  'templatecourse_desc' => 'Optional: auto-created courses can copy their settings from a template course. Type here the shortname of the template course.',
);