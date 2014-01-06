<?php
class Contacto extends CI_Controller{

	public function index()
	{
		$this->load->library('parser');

		$data = array(
			'head_titulo' =>'Contáctanos - Sismemox',
			'head_descripcion'=>'Contacta a sismemox',
			'head_keywords'=>'Contacta a Sismemox'
			);

		$this->parser->parse('templates/header',$data);
		$this->load->view('pages/contacto');
		$this->load->view('templates/footer');

	}

	public function view()
	{
		$this->load->library('email');

		$this->email->from('your@example.com', 'Your Name');
		$this->email->to('someone@example.com');
		$this->email->cc('another@another-example.com');
		$this->email->bcc('them@their-example.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();

		echo $this->email->print_debugger();

		//---------------------------------------
		$data['title']=ucfirst($page);//Capitalize the first letter

		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer',$data);
	}
}