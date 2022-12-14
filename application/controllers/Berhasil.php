<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Berhasil extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function Index() {
		$this->load->view('navbar/navbar');
		$this->load->view('berhasil/berhasil');
		$this->load->view('footer/footer');
		// Load form helper library
		$this->load->helper('form');

		// Load session library
		// $this->load->library('session');

	}
}