<?php

class site extends CI_Controller {
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
