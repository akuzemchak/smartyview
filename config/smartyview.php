<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

// config for smarty template library
$config = array(
	'smarty_template_dir' => APPPATH.'views',
	'smarty_compile_dir' => APPPATH.'cache/smarty/templates_c',
	'smarty_config_dir' => APPPATH.'views/_config',
	'smarty_cache_dir' => APPPATH.'cache/smarty'
);