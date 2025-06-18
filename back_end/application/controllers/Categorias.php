<?php
defined('BASEPATH') or exit('Ação não permitida!');

class Categorias extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        }
    }

    public function index()
    {
        
        $data = array(
            'titulo' => 'Categorias',
            'styles' => array(
                '/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
            ),
            'scripts' => array(
                '/plugins/datatables.net/js/jquery.dataTables.min.js',
                '/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                '/plugins/datatables.net/js/sara.js',
                '/js/form-components.js', 
            ),
            'categorias' => $this->core_model->get_all('categorias')         
           
        );
        
        $this->load->view('layout/header', $data);
        $this->load->view('categorias/categorias');
        
    }

    public function insert()
    {       
        if (!$this->input->post()) {
            redirect('/');
        }

        $data = elements(
            array('cate_descricao'),
            $this->input->post(),
        );

        $data = html_escape($data);

        if ($this->core_model->insert('categorias', $data)) {
            $this->session->set_flashdata('sucesso', 'Registro inserido com sucesso.');
        } else {
            $this->session->set_flashdata('error', 'Não foi possível inserir o registro.');
        }
        redirect($this->router->fetch_class());
    }

    public function edit($cate_id)
    {
        
        if (!$this->input->post()) {
            redirect('/');
        }
        $data = elements(
            array('cate_descricao'),
            $this->input->post(),
        );

        $data = html_escape($data);

        $this->core_model->update('categorias', $data, array('cate_id'=>$cate_id));
        redirect($this->router->fetch_class());       
    }
    public function delete($cate_id)
    {
        
        if (!$this->input->post()) {
            redirect('/');
        }        

        $data = html_escape($id);

        $this->core_model->delete('categorias', array('cate_id' => $cate_id));
        redirect($this->router->fetch_class());       
    }

    public function upload_imagem($cate_id)
    {
        //Insere Imagem
        $path = "uploads/img/categorias/".$cate_id;
        if (!file_exists($path)){
            mkdir($path,0777,true);
        }
        $config["upload_path"] = $path;
        $config["max_size"] = 2048;
        $config['allowed_types'] = 'png|jpeg|jpg';
        $this->load->library("upload",$config);

        if(!$this->upload->do_upload('cate_imagem')) {
            print_r($this->upload->display_errors());
            exit();
        }

        $data = elements(
            array('cate_imagem'),
            array('cate_imagem' => $this->upload->data('file_name'))
        );

        $data = html_escape($data);
        // print_r($data);
        // exit();
        if ($this->core_model->update('categorias', $data, array('cate_id' => $cate_id))){
            $this->session->set_flashdata('sucesso', 'Registro alterado com sucesso.');
        }
        redirect($this->router->fetch_class(), 'refresh');
    }

}
