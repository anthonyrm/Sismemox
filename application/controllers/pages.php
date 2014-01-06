<?php
class Pages extends CI_Controller{
/*Carga siguientes paginas estaticas
	-Nosotros
*/
	public function view($page='home')
	{
		if(! file_exists('application/views/pages/'.$page.'.php'))
		{
			//Whoops, we don't have a page for that!
			
			show_404();
		}

		$this->load->library('parser');


		$data= array(
			'head_titulo' => 'Sismemox - '.ucfirst($page),
			'head_descripcion' =>'Sistema de memorizacion interactiva',
			'head_keywords'=> 'Sismemox, sistema de memoria'

			);

		$this->parser->parse('templates/header',$data);
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}
}	