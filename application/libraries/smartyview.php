<?php

class Smartyview {
	
	// global smarty object
	private $smarty;
	
	// construct
	public function __construct($config) {
		// get smarty lib
		require_once APPPATH.'/third_party/smarty/Smarty.class.php';
		
		// setup the object
		$this->smarty = new Smarty();
		$this->smarty->template_dir = $config['smarty_template_dir'];
		$this->smarty->compile_dir = $config['smarty_compile_dir'];
		$this->smarty->config_dir = $config['smarty_config_dir'];
		$this->smarty->cache_dir = $config['smarty_cache_dir'];
	}
	
	// compile and output the template
	public function render($template = '', $data = array()) {
		// get codeigniter object
		$CI =& get_instance();
		
		// assign template variables
		$this->smarty->assign($data);
		$this->smarty->assign('CI', $CI);
		
		// output the template
		$output = $this->smarty->fetch($template);
		$CI->output->append_output($output);
	}
	
}