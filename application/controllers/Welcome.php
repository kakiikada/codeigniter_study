<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	// public function view($page = 'home')
	// {
	//         if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	//         {
	//                 // おっと、そのページはありません！
	//                 show_404();
	//         }
  //
	//         $data['title'] = ucfirst($page); // 頭文字を大文字に
  //
	//         $this->load->view('templates/header', $data);
	//         $this->load->view('pages/'.$page, $data); //about.php
	//         $this->load->view('templates/footer', $data);
	// }

	public function index()[
		$this->load->mode('task_model');
		$this->->load->library('');
	]

}
