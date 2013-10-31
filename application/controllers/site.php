<?php

class site extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }


    function members_area()
    {
        $this->load->view('members_area');
    }

    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if(!isset($is_logged_in) || $is_logged_in !== true)
        {
            echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';
            die();
        }

    }

    function index()
    {
        $data = array();
        
        if($query = $this->site_model->get_records())
        {
            $data['records'] = $query;
        }
       
        $this->load->view('options_view', $data); 
        
        //$this->load->model('data_model');
        //$data['rows'] = $this->data_model->getAll();
        //$this->load->view('home', $data);
	
    	//$this->load->model('site_model');
        //$data['records'] = $this->site_model->getAll();
        //$this->load->view('home', $data);
    }
    
    function about()
    {
        $this->load->view('about');
    }

    function create()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'contents' => $this->input->post('content')
         
        ); 
        //FRONT 'contents' is DB ATTR
        //LAST 'content' is element id

        $this->site_model->add_record($data);
        $this->index();
    }

    function delete()
    {
        $this->site_model->delete_row();
        $this->index();
    }
    
    function update()
    {
        $data = array(
            'title' => 'My Freshly Update',
            'contents' => 'Content updated'
        );

        $this->site_model->update_record($data);
    }
}
