<?php
class Nosotros extends CI_Controller{

	public function index()
	{

		$this->load->library('parser');


		$data= array(
			'head_titulo' => 'Sismemox - Nosotros',
			'head_descripcion' =>'Sistema de memorizacion interactiva',
			'head_keywords'=> 'Sismemox, sistema de memoria'

			);

		$this->parser->parse('templates/header',$data);
		$this->load->view('pages/nosotros');
		$this->load->view('templates/footer');
	}
}	