<?php
/**
* Traducciones a diferentes idiomas, para que el plugins sea mas entendible de lo que es :)
* Author : JLGC @monolinux
* Web : http://www.junglacode.org
* License: GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Package : Fullestop Lock Down Admin
*/

$LANG = 'es-MX'; /*lenguaje definido*/
/*referencia pero con formato de wordpress
https://msdn.microsoft.com/es-cl/library/ms533052.aspx*/
$__IDIOMA__ = array(
'es-MX' => 
    array(   
        'fullestop_error' => array(
            'Ingrese un nuevo nombre de URL para WP-Admin',
            'No se guardaron las opciones',
            'Opciones Guardadas.'
            ),
        'change_url' => 'Cambiar la URL del Login de WordPress?',
        'fullestop_disable' => array(
            'Puedes escribir la Keyword de WordPress',
            'No se puede crear la URL de administración.'
            ),
        'description' => 'El desarrollo de Fullestop Lockdown WP plugin, 
        Le puede ayudar a ocultar la URL del WP admin (/wp-admin/).
        Cuando un usuario no ha iniciado sesión. Puede editar la URL de inicio de sesión a través de este complemento.
        El administrador puede ocultar la ruta, de modo que cuando un usuario intenta iniciar sesión directamente
        Devolverá el error 404. Este complemento ayuda a mejorar la seguridad de usuarios no autorizados',
        'checked' => 'Favor de marcar la casilla para ocultar wp-admin:',
        'lastest' => 'La URL de administración más reciente es :'

    ),
 'en-US' => 
    array(   
        'fullestop_error' => array(
            'Please Enter New URL name for WP-Admin',
            'Options Not saved.',
            'Options saved.' 
            ),
        'change_url' => 'Change the WordPress Login URL?',        
        'fullestop_disable' => array(
            'You can\'t write Wordpress Keyword',
            'You can\'t make that your Admin URL.'
            ),
        'description' => 'Fullestop developed Lockdown WP plugin, 
        which helps in hiding the WP admin (/wp-admin/) 
        URL when a user is not logged in. You can edit the Login URL through this plugin.
        The administrator can hide the path, so that when a user attempt to log in directly 
        it will return 404 page. This plugin helps to improve security from unauthorized user',
        'checked' => 'Please Checked here to hide wp-admin:',
        'lastest' => 'Latest admin URL is :'

    )   
);
