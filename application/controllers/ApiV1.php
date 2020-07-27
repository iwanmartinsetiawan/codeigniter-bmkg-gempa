<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApiV1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('BMKG_v1');
    }

    public function gempaM5Terkini()
    {

        return $this->output->set_header('HTTP/1.0 200 OK')
            ->set_header('HTTP/1.1 200 OK')
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($this->BMKG_v1->getGempaM5Terkini()));
    }

    public function gempaM5()
    {

        return $this->output->set_header('HTTP/1.0 200 OK')
            ->set_header('HTTP/1.1 200 OK')
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($this->BMKG_v1->getGempaM5()));
    }

    public function gempaDirasakan()
    {

        return $this->output->set_header('HTTP/1.0 200 OK')
            ->set_header('HTTP/1.1 200 OK')
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($this->BMKG_v1->getGempaDirasakan()));
    }

    public function gempaTsunamiTerkini()
    {

        return $this->output->set_header('HTTP/1.0 200 OK')
            ->set_header('HTTP/1.1 200 OK')
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($this->BMKG_v1->getGempaTsunamiTerkini()));
    }
}
