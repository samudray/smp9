<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template{
	protected $_ci;

	function __construct(){
		$this->_ci = &get_instance();
	}

	function display($content, $data = null){
		$data['header'] = $this->_ci->load->view('template/header', $data, true);
		$data['content'] = $this->_ci->load->view($content, $data, true);
		$data['footer'] = $this->_ci->load->view('template/footer', $data, true);
		$data['nav'] = $this->_ci->load->view('template/nav', $data, true);
		$data['bg'] = $this->_ci->load->view('template/bg', $data, true);

		$this->_ci->load->view('template/index', $data);
	}
}