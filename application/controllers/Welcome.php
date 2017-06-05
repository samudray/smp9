<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->template->display('content/home');
	}

	public function sejarahSekolah(){
		$this->template->display('content/sejarah');
	}

	public function visimisi(){
		$this->template->display('content/visimisi');
	}

	public function sarana(){
		$this->template->display('content/sarana');
	}

	public function struktur(){
		$this->template->display('content/struktur');
	}

	public function agenda(){
		$this->template->display('content/agenda');
	}

	public function pengumuman(){
		$this->template->display('content/pengumuman');
	}

	public function gallery(){
		$this->template->display('content/gallery');
	}

	public function contact(){
		$this->template->display('content/contact');
	}

}
