<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

// config for smarty template library
// more info about these settings at http://www.smarty.net/docs/en/installing.smarty.basic.tpl
$config = array(
	'smarty_template_dir' => APPPATH.'views', // base folder for all your templates
	'smarty_compile_dir' => APPPATH.'cache/smarty/templates_c', // where templates will be compiled to
	'smarty_config_dir' => APPPATH.'views/_config', // place to hold template config files
	'smarty_cache_dir' => APPPATH.'cache/smarty' // universal smarty cache directory
);