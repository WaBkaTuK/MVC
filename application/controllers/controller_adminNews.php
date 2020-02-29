<?php
class Controller_AdminNews extends Controller
{
    function __construct()
    {
        $this->model = new Model_AdminNews();
        $this->view = new View();
    }

    function action_index()
    {

        if (isset($_POST['upd']))
        {

            $id = $_POST['Id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $query = "update news set title = '$title', content = '$content' where id='$id'";
            $res = mysqli_query($this->model->connect(), $query);
        }
        if(isset($_POST['add']))
        {
            $title2 = $_POST['title2'];
            $content2 = $_POST['content2'];
            $query = "insert into news(title,content) values('$title2','$content2')";
            $res = mysqli_query($this->model->connect(), $query);
            if($res){
                echo 'yes';
            };
        }
        if(isset($_POST['del']))
        {
            $id = $_POST['Id'];
            $query = "delete from news where id = '$id'";
            $res = mysqli_query($this->model->connect(),$query);
        }


        $data = $this->model->get_data();

        $this->view->generate('adminNews_view.php','template_view.php',$data);


    }
}