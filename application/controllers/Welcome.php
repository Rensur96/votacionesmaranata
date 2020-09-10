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
		parent:: __construct();
		$this->load->model('ModelUsers');
		$this->load->model('ModelVotar');
	}
	public function index()
	{
		$data['nombre'] ="";
		$this->load->view('layout/header.php',$data);
		$this->load->view('index.php');
		$this->load->view('layout/footer.php');
	}
	public function login()
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$result = $this->modelUsers->getLoginData($user,$pass);
		if($result){
			header('location: '.base_url().'diaconos');
		} else{
			header('location: '.base_url().'?error=1');
		}
	}
	public function logout()
	{
		session_destroy();
		header('location: '.base_url());
	}
	public function diaconos(){
		if ($this->session->userdata('login')) {
			$data['nombre'] = $this->session->userdata('userName');
			$this->load->view('layout/header.php',$data);
			if($this->modelVotar->verificar($this->session->userdata('userId'),'diaconos')){
				$data['nomina'] ='Diaconos';
				$this->load->view('layout/realizado.php',$data);
			} else{
				$this->load->view('diaconos.php');
			}
			$this->load->view('layout/footer.php');
			$this->load->view('scripts/diaconos.php');
		} else{
			header('location: '.base_url());

		}
	}
	
	public function diaconizas()
	{
		if ($this->session->userdata('login')) {
			$data['nombre'] = $this->session->userdata('userName');
			$this->load->view('layout/header.php',$data);
			if($this->modelVotar->verificar($this->session->userdata('userId'),'diaconizas')){
				$data['nomina'] ='diaconizas';
				$this->load->view('layout/realizado.php',$data);
			} else{
				$this->load->view('diaconizas.php');
			}
			$this->load->view('layout/footer.php');
			$this->load->view('scripts/diaconizas.php');
		} else{
			header('location: '.base_url());

		}
	}
	public function fraternidad(){
		if ($this->session->userdata('login')) {
			$data['nombre'] = $this->session->userdata('userName');
			$this->load->view('layout/header.php',$data);
			if($this->modelVotar->verificar($this->session->userdata('userId'),'fraternidad')){
				$data['nomina'] ='fraternidad';
				$this->load->view('layout/realizado.php',$data);
			} else{
				$this->load->view('fraternidad.php');
			}
			$this->load->view('layout/footer.php');
			$this->load->view('scripts/fraternidad.php');
		} else{
			header('location: '.base_url());

		}
	}
	public function concilio(){
		if ($this->session->userdata('login')) {
			$data['nombre'] = $this->session->userdata('userName');
			$this->load->view('layout/header.php',$data);
			if($this->modelVotar->verificar($this->session->userdata('userId'),'concilio')){
				$data['nomina'] ='concilio';
				$this->load->view('layout/realizado.php',$data);
			} else{
				$this->load->view('concilio.php');
			}
			$this->load->view('layout/footer.php');
			$this->load->view('scripts/concilio.php');
		} else{
			header('location: '.base_url());

		}
	}
	public function jovenes(){
		if ($this->session->userdata('login')) {
			$data['nombre'] = $this->session->userdata('userName');
			$this->load->view('layout/header.php',$data);
			if($this->modelVotar->verificar($this->session->userdata('userId'),'jovenes')){
				$data['nomina'] ='jovenes';
				$this->load->view('layout/realizado.php',$data);
			} else{
				$this->load->view('jovenes.php');
			}
			$this->load->view('layout/footer.php');
			$this->load->view('scripts/jovenes.php');
		} else{
			header('location: '.base_url());

		}
	}
	public function adolescentes(){
		if ($this->session->userdata('login')) {
			$data['nombre'] = $this->session->userdata('userName');
			$this->load->view('layout/header.php',$data);
			if($this->modelVotar->verificar($this->session->userdata('userId'),'adolescentes')){
				$data['nomina'] ='adolescentes';
				$this->load->view('layout/realizado.php',$data);
			} else{
				$this->load->view('adolescentes.php');
			}
			$this->load->view('layout/footer.php');
			$this->load->view('scripts/adolescentes.php');
		} else{
			header('location: '.base_url());

		}
	}
	public function escuela(){
		if ($this->session->userdata('login')) {
			$data['nombre'] = $this->session->userdata('userName');
			$this->load->view('layout/header.php',$data);
			if($this->modelVotar->verificar($this->session->userdata('userId'),'escuela')){
				$data['nomina'] ='escuela';
				$this->load->view('layout/realizado.php',$data);
			} else{
				$this->load->view('escuela.php');
			}
			$this->load->view('layout/footer.php');
			$this->load->view('scripts/escuela.php');
		} else{
			header('location: '.base_url());

		}
	}
	public function resultados(){
		$this->load->view('layout/header.php');
		$this->load->view('resultados.php');
		$this->load->view('layout/footer.php');
	}



}
