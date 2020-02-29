<?php

class Model_Services extends Model
{
    public function get_data()
    {
        $tmp = [];
        $query = 'select * from services';
        $res = mysqli_query($this->connect(), $query);
        while ($row = mysqli_fetch_assoc($res)) {
           array_push($tmp,array(
              'Title' => $row['title'],
               'Service' => $row['service'],
               'Cost' => $row['price'],
           ));
        }

        return $tmp;
    }

}