<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2018 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

	'PLURAL_RULE'											=> 1,

	'ACP_CAT_DIGESTS'										=> 'Res�menes',
	'ACP_DIGESTS_SETTINGS'									=> 'Ajustes de resumen',
	'ACP_DIGESTS_GENERAL_SETTINGS'							=> 'Ajustes generales',
	'ACP_DIGESTS_GENERAL_SETTINGS_EXPLAIN'					=> 'Estos son los ajustes generales de los res�menes. Ten en cuenta que si los res�menes se deben entregar en una hora exacta, debes configurar y habilitar el <strong> <a href="https://wiki.phpbb.com/Modular_cron#Use_system_cron"> cron del sistema </a> de phpBB </ strong>. De lo contrario, la pr�xima vez que haya tr�fico en el foro, se enviar�n los res�menes de las horas actuales y anteriores. Para obtener m�s informaci�n, consulta las preguntas frecuentes en los foros en phpbb.com.',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS'						=> 'Ajustes por defecto del usuario',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS_EXPLAIN'				=> 'Esta configuraci�n permite a los administradores establecer los valores por defecto que ven los usuarios cuando se suscriben a un resumen.',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS'							=> 'Editar suscriptores',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS_EXPLAIN'					=> 'Esta p�gina te permite ver qui�n est� o no est� recibiendo res�menes. Puedes suscribir o anular la suscripci�n de forma selectiva, y editar todos los detalles del resumen o suscriptores individuales. Al marcar filas con la casilla de verificaci�n en la primera columna, puedes suscribir a estos usuarios con valores por defecto o cancelar su suscripci�n. Para ello, selecciona los controles apropiados en la parte inferior de la p�gina y luego presiona Enviar. Tambi�n puedes usar estos controles para ordenar y filtrar la lista junto con el bot�n Actualizar.',
	'ACP_DIGESTS_BALANCE_LOAD'								=> 'Balancear la carga',
	'ACP_DIGESTS_BALANCE_LOAD_EXPLAIN'						=> 'Si muchos res�menes se envian a ciertas horas, eso puede causar problemas de rendimiento, esto distribuye las suscripciones de los res�menes para que el mismo n�mero de res�menes se envien para cada hora deseada. La siguiente tabla muestra el n�mero actual y los nombres de los suscriptores para cada hora con <strong> horas superpobladas </ strong>. Esta funci�n actualiza el resumen de env�o de horas m�nimamente. Se hacen cambios en las horas donde el n�mero de suscriptores excede la carga normal, y solo para los suscriptores que exceden la media horaria de esa hora. <em> Precauci�n </ em>: los suscriptores pueden estar molestos porque sus horarios de suscripci�n han cambiado y pueden recibir una notificaci�n por correo electr�nico, dependiendo de la configuraci�n en la configuraci�n general de los res�menes. Si quieres puedes restringir el equilibrio a un tipo especifico de resumen, balanceo para horas espec�ficas y aplicar balanceo a horas espec�ficas.',
	'ACP_DIGESTS_BALANCE_OPTIONS'							=> 'Opciones de balanceo',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'				=> 'Suscripci�n y baja en masa',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'		=> 'Esta funci�n permite a los administradores suscribirse o cancelar la suscripci�n a todos los miembros de su foro de una sola vez. Las configuraciones predeterminadas de los res�menes se utilizan para suscribir miembros. Si un miembro ya tiene una suscripci�n de resumen, una suscripci�n masiva conservar� su configuraci�n de resumen. No puedes especificar los foros que ser�n suscritos. Los usuarios se suscribir�n a todos los foros a los que tengan acceso de lectura. <strong>Precauci�n</strong>: los suscriptores pueden estar molestos si est�n suscritos o cancelados sin su permiso.',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME'						=> 'Restablecer correo',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'				=> '',
	'ACP_DIGESTS_TEST'										=> 'Ejecutar manualmente el correo',
	'ACP_DIGESTS_TEST_EXPLAIN'								=> 'Esta funci�n te permite ejecutar res�menes manualmente para las pruebas iniciales y la resoluci�n de problemas. Tambi�n puedes usarlo para recrear res�menes para una fecha y hora en particular. La zona horaria del foro se utiliza para calcular la fecha y la hora. Ten en cuenta que cuando se env�an los res�menes dependen del tr�fico del foro, por lo que los res�menes pueden llegar tarde para algunos usuarios. Esto se puede cambiar si configuras <a href="https://wiki.phpbb.com/Modular_cron#Use_system_cron"> un cron del sistema </a> y habilita la funci�n phpBB <strong> cron del sistema </strong> . Para obtener m�s informaci�n, consulta las Preguntas frecuentes sobre la extensi�n Res�menes en los foros en phpbb.com.',

	'LOG_CONFIG_DIGESTS_BAD_DIGEST_TYPE'					=> '<strong>Advertencia: el suscriptor %1$s tiene un tipo de resumen incorrecto de %2$s. Suponiendo que se quiere un resumen diario.</strong>',
	'LOG_CONFIG_DIGESTS_BAD_SEND_HOUR'						=> '<strong>La hora de env�o del resumen de %1$s del usuario no es v�lida. Es %2$d. El numero debe ser >= 0 and < 24.</strong>',
	'LOG_CONFIG_DIGESTS_BALANCE_LOAD'						=> '<strong>Las cargas de balances de res�menes se ejecutan exitosamente</strong>',
	'LOG_CONFIG_DIGESTS_BOARD_DISABLED'						=> '<strong>Se intent� ejecutar el env�o del resumen, pero se detuvo porque el foro est� deshabilitado.</strong>',
	'LOG_CONFIG_DIGESTS_CACHE_CLEARED'						=> '<strong>La carpeta store/phpbbservices/digests fue vaciada',
	'LOG_CONFIG_DIGESTS_CLEAR_SPOOL_ERROR'					=> '<strong>No se pueden borrar archivos en la carpeta store/phpbbservices/digests. Esto puede deberse a un problema de permisos o una ruta incorrecta. Los permisos de archivo en la carpeta deben configurarse en escritura p�blica (777 en sistemas basados en Unix).</strong>',
	'LOG_CONFIG_DIGESTS_DUPLICATE_PREVENTED'				=> '<strong>NO se enviaron res�menes a %1$s (%2$s) para la fecha %3$s y hora %4$02d UTC porque se envi� uno a este suscriptor a principios de esta hora.</strong>',
	'LOG_CONFIG_DIGESTS_EDIT_SUBSCRIBERS'					=> '<strong>Editado los res�menes de suscriptores</strong>',
	'LOG_CONFIG_DIGESTS_FILE_CLOSE_ERROR'					=> '<strong>No se puede cerrar el archivo %s</strong>',
	'LOG_CONFIG_DIGESTS_CREATE_DIRECTORY_ERROR'				=> '<strong>No se puede crear la carpeta %s. Esto puede deberse a permisos insuficientes. Los permisos de archivo en la carpeta deben configurarse en escritura p�blica (777 en sistemas basados en Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_OPEN_ERROR'					=> '<strong>No se puede abrir un controlador de archivos en la carpeta %s. Esto puede deberse a permisos insuficientes. Los permisos de archivo en la carpeta deben configurarse en escritura p�blica (777 en sistemas basados en Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_WRITE_ERROR'					=> '<strong>No se puede escribir el archivo %s. Esto puede deberse a permisos insuficientes. Los permisos de archivo en la carpeta deben configurarse en escritura p�blica (777 en sistemas basados en Unix).</strong>', 
	'LOG_CONFIG_DIGESTS_FILTER_ERROR'						=> '<strong>El remitente de los res�menes se llam� con un user_digest_filter_type inv�lido = %1$s para %2$s</strong>',
	'LOG_CONFIG_DIGESTS_FORMAT_ERROR'						=> '<strong>Se envi� un resumen de correo con un user_digest_format inv�lido de %1$s para %2$s</strong>',
	'LOG_CONFIG_DIGESTS_GENERAL'							=> '<strong>Configuraciones generales de res�menes alterados.</strong>',
	'LOG_CONFIG_DIGESTS_HOUR_RUN'							=> '<strong>Ejecutando res�menes para %1$s en %2$02d UTC</strong>',
	'LOG_CONFIG_DIGESTS_INCONSISTENT_DATES'					=> '<strong>Ocurri� un error inusual. No se procesaron horas porque la �ltima vez que se enviaron correctamente los res�menes (marca de tiempo %1$d) se realiz� despu�s de que se ejecutaron los res�menes (marca de tiempo %2$d).</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD'						=> '<strong>No se puede enviar un resumen a %1$s (%2$s). Este problema debe investigarse y solucionarse ya que probablemente significa que hay un problema general de env�o de correos electr�nicos.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD_NO_EMAIL'				=> '<strong>No se puede enviar un resumen a %s. Este problema debe investigarse y solucionarse ya que probablemente significa que hay un problema general de env�o de correos electr�nicos.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD'						=> array(
		1 => '<strong>Un resumen fue %1$s %2$s (%3$s) para la fecha %4$s y hora %5$02d UTC que contiene %6$d mensaje y %7$d mensaje privado</strong>',
		2 => '<strong>Un resumen fue %1$s %2$s (%3$s) para la fecha %4$s y hora %5$02d UTC que contiene %6$d publicaciones y %7$d mensajes privados</strong>',
	),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_DISK'				=> '<strong>Se escribi� un resumen en store/phpbbservices/digests/%s. El resumen NO se envi� por correo electr�nico, pero se coloc� aqu� para su an�lisis.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_NO_EMAIL'			=> array(
		1 => '<strong>El resumen fue %1$s %2$s para la fecha %3$s y hora %4$02d UTC que contiene %5$d mensaje y %6$d mensaje privado</strong>',
		2 => '<strong>El resumen fue %1$s %2$s para la fecha %3$s y hora %4$02d UTC que contiene %5$d publicaciones y %6$d mensajes privados</strong>',
	),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE'						=> '<strong>A digest was NOT sent to %1$s (%2$s) because user filters and preferences meant there was nothing to send</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE_NO_EMAIL'			=> '<strong>NO se envi� un resumen a %s porque los filtros y preferencias del usuario significaban que no hab�a nada que enviar</strong>',
	'LOG_CONFIG_DIGESTS_LOG_START'							=> '<strong>Comenzando el resumen de correo</strong>',
	'LOG_CONFIG_DIGESTS_LOG_END'							=> '<strong>Terminando resumen de correo</strong>',
	'LOG_CONFIG_DIGESTS_MAILER_RAN_WITH_ERROR'				=> '<strong>Se produjo un error mientras se estaba ejecutando el correo. Uno o m�s res�menes pueden haber sido generados exitosamente.</strong>',
	'LOG_CONFIG_DIGESTS_MANUAL_RUN'							=> '<strong>Ejecuci�n manual del remitente invocado.</strong>',
	'LOG_CONFIG_DIGESTS_MESSAGE'							=> '<strong>%s</strong>',	// Se utiliza para la depuraci�n general, de lo contrario es dif�cil solucionar problemas en el modo cron.
	'LOG_CONFIG_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'			=> '<strong>Ejecutada una acci�n de suscripci�n o cancelaci�n de suscripci�n de los res�menes.</strong>',
	'LOG_CONFIG_DIGESTS_NO_ALLOWED_FORUMS'					=> '<strong>Advertencia: el suscriptor %s no tiene permisos de foro, por lo tanto, a menos que haya foros necesarios, los res�menes nunca contendr�n ning�n contenido.</strong>',
	'LOG_CONFIG_DIGESTS_NO_BOOKMARKS'						=> '<strong>Advertencia: el suscriptor %s quiere temas marcados en su resumen pero no tiene temas marcados.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_ERROR'					=> '<strong>No se puede enviar una notificaci�n por email de los res�menes generados por el administrador a %s</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_SENT'					=> '<strong>Se envi� un correo electr�nico a %1$s (%2$s) que indica que se cambiaron sus configuraciones de resumen</strong>',
	'LOG_CONFIG_DIGESTS_REGULAR_CRON_RUN'					=> '<strong>Ejecuci�n cron regular (phpBB) de la aplicaci�n de correo invocada</strong>',
	'LOG_CONFIG_DIGESTS_RESET_CRON_RUN_TIME'				=> '<strong>El tiempo de env�o de los res�menes fue restablecido.</strong>',
	'LOG_CONFIG_DIGESTS_RUN_TOO_SOON'						=> '<strong>Ha transcurrido menos de una hora desde que se ejecutaron los res�menes por �ltima vez. Abortado.</strong>',
	'LOG_CONFIG_DIGESTS_SIMULATION_DATE_TIME'				=> '<strong>El administrador eligi� crear res�menes para %1$s en %2$02d:00 tiempo del foro.</strong>',
	'LOG_CONFIG_DIGESTS_SORT_BY_ERROR'						=> '<strong>Se enviaron mensajes a las publicaciones de correo con un user_digest_sortby no v�lido = %1$s para %2$s</strong>',
	'LOG_CONFIG_DIGESTS_SYSTEM_CRON_RUN'					=> '<strong>Sistema cron ejecutado del remitente invocado.</strong>',
	'LOG_CONFIG_DIGESTS_TEST'								=> '<strong>%s</strong>',	// Se utiliza para la soluci�n de problemas generales, por favor, mantenlo como est� en todas las traducciones.
	'LOG_CONFIG_DIGESTS_TIMEZONE_ERROR'						=> '<strong>El user_timezone "%1$s" para el nombre de usuario "%2$s" no es v�lido. Supuso una zona horaria de "%3$s". P�dele al usuario que establezca una zona horaria adecuada en el Panel de control del usuario. Consulte http://php.net/manual/en/timezones.php para obtener una lista de zonas horarias v�lidas.</strong>',
	'LOG_CONFIG_DIGESTS_USER_DEFAULTS'						=> '<strong>Configuraciones predeterminadas modificadas del usuario del resumen</strong>',
));
