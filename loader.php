<?php
if ( ! defined('ABSPATH')) exit;
 
// Inicia a sessão
session_start();

// Funções globais
require_once ABSPATH . '/functions/global-functions.php';

$login = new login();
