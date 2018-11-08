#!/bin/bash
BDUsuario="admin_foro"
BDNombreProyecto="proyecto_foro"
BDNombreBD="proyecto_foro"
BDContrasena="1234"

#BDBorraTablas="resources/borra_tablas.sql" 
BDCreaTablas="resources/crea_tablas.sql"
#BDCreaDatos="resources/crea_datos.sql"

#mysql -u $BDUsuario -p$BDContrasena $BDNombreProyecto < $BDBorraTablas
mysql -u $BDUsuario -p$BDContrasena $BDNombreProyecto < $BDCreaTablas
#mysql -u $BDUsuario -p$BDContrasena $BDNombreProyecto < $BDCreaDatos
#mysql -u $BDUsuario -p$BDContrasena $BDNombreProyecto < $BDBorraTablas



