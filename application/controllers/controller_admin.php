<?php
class Controller_Admin extends Controller
{
    function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();
    }

    function action_index()
    {
        if(!empty($_SESSION) && $_SESSION['user']['Status'] == 1) {
            $data = $this->model->get_data();

            $this->view->generate('admin_view.php', 'template_view.php', $data);
        }else{
            $data = 0;
            $this->view->generate('404_view.php', 'template_view.php', $data);
        }


    }
}