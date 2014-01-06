<?php
class Home extends CI_Controller{

	public function index()
	{

		$this->load->library('parser');

		$data= array(
			'head_titulo' => 'Memoriza con Sismemox',
			'head_descripcion' =>'Sistema web para memorizacion interactiva',
			'head_keywords'=> 'memorizar,memorizacion,aprende rapido, memoriza rapido, aprende divertido, memoriza en poco tiempo, aprende en poco tiempo, memoriza de forma divertida, memoriza jugando'
			);

		$this->parser->parse('templates/header',$data);
		$this->load->view('pages/home');
		$this->load->view('templates/footer',$data);
	}
}