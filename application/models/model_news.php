<?php

class Model_News extends Model
{
    public function get_data()
    {
        $tmp = [];
        $query = "select * from news";
        $res = mysqli_query($this->connect(),$query);

        while($row = mysqli_fetch_assoc($res)){
            array_push($tmp,array(
                    "Id" => $row['id'],
                    "Title" => $row['title'],
                    "Content" => $row['content'],
                ));
        }
        return $tmp;
    }
}