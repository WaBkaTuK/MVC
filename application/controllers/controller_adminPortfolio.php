<?php

class Controller_AdminPortfolio extends Controller
{
    function __construct()
    {
        $this->model = new Model_AdminPortfolio();
        $this->view = new View();
    }

    function action_index()
    {

        if (isset($_POST['upd']))
        {

            $id = $_POST['Id'];
            $year = $_POST['year'];
            $site = $_POST['site'];
            $descr = $_POST['descr'];
            $query = "update porfolio set year = '$year', site = '$site', description = '$descr' where id='$id'";
            $res = mysqli_query($this->model->connect(), $query);
        }
        if(isset($_POST['add']))
        {
            $year2 = $_POST['year2'];
            $site2 = $_POST['site2'];
            $descr2 = $_POST['descr2'];
            $query = "insert into porfolio(year,site,description) values('$year2','$site2','$descr2')";
            $res = mysqli_query($this->model->connect(), $query);
        }
        if(isset($_POST['del']))
        {
            $id = $_POST['Id'];
            $query = "delete from porfolio where id = '$id'";
            $res = mysqli_query($this->model->connect(),$query);
        }

        $data = $this->model->get_data();
        $this->view->generate('adminPortfolio_view.php', 'template_view.php', $data);
    }
}