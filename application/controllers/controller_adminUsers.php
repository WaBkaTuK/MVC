<?php


class Controller_AdminUsers extends Controller
{
    function __construct()
    {
        $this->model = new Model_AdminUsers();
        $this->view = new View();
    }

    function action_index()
    {


        if (isset($_POST['ban'])) {
            $id = $_POST['idUser'];
            $query = "delete from users where id = '$id'";
            $res = mysqli_query($this->model->connect(), $query);
        }

        $data = $this->model->get_data();
        $this->view->generate('adminUsers_view.php', 'template_view.php', $data);
    }
}