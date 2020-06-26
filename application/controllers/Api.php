<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_model');
    }

    public function LoginApi()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $result = $this->Api_model->loginApi($username, $password)->result_array();
        header('content-type: application/json');
        echo json_encode($result);
    }

    public function RegisterApi()
    {
        // menangkap data yang dikirim melalui method post
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        // mengisi ulang variabel level sesuai level di database
        switch ($level) {
            case "MEMBER":
                $level = "2";
                break;
            case "PERUSAHAAN":
                $level = "3";
                break;
            default:
                $level = false;
        }

        // jika username sudah digunakan
        if ($this->Api_model->getUser($username)) {
            $response = array(
                'status' => false,
                'message' => 'Username telah digunakan!'
            );

            header('content-type: application/json');
            echo json_encode($response);

            return;
        }

        // mengecek apakah username dan password valid
        if ($username && $password && $level) {
            // jika usernam dan password valid
            $data = array(
                'username' => $username,
                'password' => md5($password),
                'level' => $level
            );

            // cek apakah berhasil menginput user baru
            if ($this->Api_model->registerNewAccount($data)) {
                // jika berhasil mendaftarkan user

                $response = array(
                    'status' => true,
                    'message' => 'Berhasil melakukan registrasi akun'
                );

                header('content-type: application/json');
                echo json_encode($response);
            } else {
                // jika gagal mendaftarkan user
                $response = array(
                    'status' => false,
                    'message' => 'gagal melakukan registrasi akun'
                );

                header('content-type: application/json');
                echo json_encode($response);
            }
        } else {
            // response error jika username / password tidak valid
            $response = array(
                'status' => false,
                'message' => 'username, password, atau tipe user tidak valid'
            );

            header('content-type: application/json');
            echo json_encode($response);
        }
    }

    public function Profil(){
    $data = $this->Api_model->getProfil();
    echo json_encode($data);
    }

}
