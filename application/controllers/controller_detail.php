<?php

class Controller_Detail extends Controller
{
    function __construct()
    {
        $this->model = new Model_Detail();
        $this->view = new View();
    }

    function action_index()
    {
        if(isset($_POST['addComm'])){
            $postid = $_POST['id'];
            $userid = $_SESSION['user']['Id'];
            $comment = $_POST['commtext'];
            $query = "insert into comments(user_id,post_id,comment) values('$userid','$postid','$comment')";
            $res = mysqli_query($this->model->connect(),$query);

        }
        $data = $this->model->get_data($_POST['id'], $_POST['title'], $_POST['content']);
        //print_r($_POST);
        $this->view->generate('detail_view.php', 'template_view.php', $data);
    }

}
