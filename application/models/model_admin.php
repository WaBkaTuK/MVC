<?php

class Model_Admin extends Model
{
    public function get_data()
    {
   /*     if (!empty($_POST['portfolio'])) {
            $tmp = [];
            $query = 'select * from porfolio';
            $res = mysqli_query($this->connect(), $query);

            while ($row = mysqli_fetch_assoc($res)) {
                array_push($tmp, array(
                    'Id' => $row['id'],
                    'Year' => $row['year'],
                    'Site' => $row['site'],
                    'Description' => $row['description'],
                ));
            }
            return $tmp;

        }
        if(isset($_POST['news'])){
            $tmp = [];
            $query = 'select * from news';
            $res = mysqli_query($this->connect(), $query);

            while ($row = mysqli_fetch_assoc($res)) {
                array_push($tmp, array(
                    'Id' => $row['id'],
                    'Title' => $row['title'],
                    'Content' => $row['content'],
                ));
            }
            return $tmp;

        }
        return null; */
    }

}