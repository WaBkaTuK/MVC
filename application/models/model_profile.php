<?php


class Model_Profile extends Model
{
    public function get_data()
    {
        $tmp = [];
        $userid = $_SESSION['user']['Id'];
        $username = $_SESSION['user']['User'];
        $userstatus = $_SESSION['user']['Status'];
        $query ="select id, comment from comments where user_id = '$userid' ";
        $res = mysqli_query($this->connect(),$query);
        while($row = mysqli_fetch_assoc($res)){
            array_push($tmp,$row);
        }

        return $tmp;
    }


}
