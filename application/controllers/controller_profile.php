<?php


class Controller_Profile extends Controller
{

    function __construct()
    {
        $this->model = new Model_Profile();
        $this->view = new View();
    }

    function action_index()
    {
        if(isset($_POST['delComm'])){
            $commId = $_POST['commId'];
            $query = "delete from comments where id = '$commId'";
            $res = mysqli_query($this->model->connect(),$query);


        }
        $data = $this->model->get_data();
        $this->view->generate('profile_view.php', 'template_view.php', $data);
    }
}
