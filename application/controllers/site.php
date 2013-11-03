<?php

class site extends CI_Controller {

    function index()
    {
        $this->load->library('pagination');
        $this->load->library('table');

        $this->table->set_heading('Id','The Title', 'The Author', 'The Content');

        $config['base_url'] = 'http://localhost/adwise/index.php/site/index';
        $config['total_rows'] = $this->db->get('data')->num_rows();
        $config['per_page'] = 10;
        $config['num_links'] = 20;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3));

        $this->load->view('site_view', $data);
    }
}