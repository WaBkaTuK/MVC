<?php

class Model
{
    public function connect()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'shmkstorage';

        $mysqli = mysqli_connect($host,$user,$password,$database);
        $mysqli->set_charset('utf8');
        return $mysqli;
    }


}