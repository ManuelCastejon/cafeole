<?php

// añadir seguridad de Codeingiter

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    // index.php/pages/XXX
    // donde XXX es el nombre de la página estática
    
    public function inicio($page = 'index')
    {
            if ( ! file_exists(APPPATH.'views/index/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
    
            $data['title'] = ucfirst($page); // Capitalize the first letter
            
            $this->load->helper('url');

            $this->load->view('templates/header', $data);
            $this->load->view('index/'.$page, $data);
            $this->load->view('templates/footer', $data);
    }
}