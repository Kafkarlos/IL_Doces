<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function index()
	{
		
	}

	public function get_categorias()
	{
		if($data = $this->core_model->get_all('categorias')){
			$status_header = 200;
		}else{
			$data = array(
				'message' => 'Erro na requisição'
			);
			$status_header = 500;
		}
		$this->output
		->set_status_header($status_header)
		->set_content_type('applicatio/json', 'utf-8')
		->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
		->_display();
		exit;
	}

	public function get_produtos()
	{
		if($data = $this->core_model->get_all('vwprodutos')){
			$status_header = 200;
		}else{
			$data = array(
				'message' => 'Erro na requisição'
			);
			$status_header = 500;
		}
		$this->output
		->set_status_header($status_header)
		->set_content_type('applicatio/json', 'utf-8')
		->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
		->_display();
		exit;
	}
}
