<?php
/** O nome do banco de dados*/
define('DB_NAME', 'vistoria');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');
/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/TCC2017/vistoria/');

/** caminho para os models **/
if ( !defined('MODELS') )
	define('MODELS', '/TCC2017/vistoria/models/');

/** caminho para os models **/
if ( !defined('CONTROLLERS') )
	define('CONTROLLERS', '/TCC2017/vistoria/controllers/');

if ( !defined('FOTOS') )
	define('FOTOS', '/TCC2017/vistoria/controllers/vistoria/uploads/fotos_vistoria/vistoria_');

/** caminho para os models **/
if ( !defined('VIEWS') )
	define('VIEWS', '/TCC2017/vistoria/views/');

/** caminho tela login **/
if (!defined('LOGINURL'))
	define('LOGINURL', BASEURL.'views/login.php');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'database/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'includes/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'includes/footer.php');

//require_once ABSPATH . '/functions/global-functions.php';