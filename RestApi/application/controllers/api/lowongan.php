<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class lowongan extends REST_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('api/lowongan_model' , 'a');
    }

    public function index_get()
    {
        $lowongan = $this->a->getLowongan();

        if($lowongan) {
            $this->response([
                'status' => true,
                'data' => $lowongan
            ], REST_Controller::HTTP_OK);
        }
    }
}