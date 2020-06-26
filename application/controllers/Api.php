<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_model');
    }

    public function index(){
        echo 'megawe api';
    }

    public function LoginApi()
    {
        $username = $this->input->post('username');
@@ -16,4 +20,28 @@ public function LoginApi()
        header('content-type: application/json');
        echo json_encode($result);
    }
}

    public function getUser()
    {
        $data = $this->Api_model->geUserApi();
        header('content-type: application/json');
        echo json_encode($data->result_array());
    }

    public function insertMember()
    {
        $data = $this->Api_model->insertMemberApi();
        echo json_encode($data->result_array());
    }

    public function Profile($id)
    {
        $data = $this->Api_model->getProfile($id);
        header('content-type: application/json');
        echo json_encode($data->result_array());
    }

}