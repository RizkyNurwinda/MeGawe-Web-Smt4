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
    

}

   
=======
}
>>>>>>> db3bb6735e3bd9b5f804ce6fbb9071b7704f7152
=======
}
>>>>>>> db3bb6735e3bd9b5f804ce6fbb9071b7704f7152
=======
}
>>>>>>> db3bb6735e3bd9b5f804ce6fbb9071b7704f7152
