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

/** caminho tela login **/
if (!defined('LOGINURL'))
	define('LOGINURL', BASEURL.'views/login/login.php');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'views/includes/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'views/includes/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'views/includes/footer.php');

require_once ABSPATH . '/functions/global-functions.php';