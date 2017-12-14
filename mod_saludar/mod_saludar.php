<?php
// Evitamos el acceso directo
defined('_JEXEC') or die;
// incluir el archivo helper.php que contiene la clase que se utiliza para recoger los datos necesarios
require_once dirname(__FILE__) . '/helper.php';

$saludar = modSaludarHelper::diHola($params);
require JModuleHelper::getLayoutPath('mod_saludar');