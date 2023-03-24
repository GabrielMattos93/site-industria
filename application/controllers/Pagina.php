<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {
	function __construct(){
	parent:: __construct();
	$this->load->Helper('url');
	}
	public function index(){
		$dados['titulo'] = 'Indústria Cramer'; 
		$this->load->view('home', $dados);
	}

	public function about(){
		$dados['titulo'] = 'Sobre Nós'; 
		$this->load->view('about', $dados);
	}

	public function service(){
		$dados['titulo'] = 'Serviços'; 
		$this->load->view('service', $dados);
	}
	
	public function project(){
		$dados['titulo'] = 'Projetos'; 
		$this->load->view('project', $dados);
	}
	
	public function feature(){
		$dados['titulo'] = 'Destaques'; 
		$this->load->view('feature', $dados);
	}
	
	public function team(){
		$dados['titulo'] = 'Nossa Equipe'; 
		$this->load->view('team', $dados);
	}

	public function testimonial(){
		$dados['titulo'] = 'Depoimento de Clientes'; 
		$this->load->view('testimonial', $dados);
	}

	public function contact(){
		$dados['titulo'] = 'Fale Conosco'; 
		$this->load->view('contact', $dados);
	}
}
