<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

// config for smarty template library
// more info about these settings at http://www.smarty.net/docs/en/installing.smarty.basic.tpl

//Base folder for all your templates
$config['smarty_template_dir'] = APPPATH.'views';

//Where templates will be compiled to
$config['smarty_compile_dir'] = APPPATH.'cache/smarty/templates_c';

//Place to hold template config files
$config['smarty_config_dir'] = APPPATH.'views/_config';

//Universal smarty cache directory
$config['smarty_cache_dir'] = APPPATH.'cache/smarty';

//Default plugin directory to "application/helpers/"
$config['smarty_plugin_dir'] = APPPATH.'helpers';