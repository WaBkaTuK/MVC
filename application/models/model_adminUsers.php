<?php

class Model_AdminUsers extends Model
{
    public function get_data()
    {
        $tmp = [];
        $query = 'select * from users';
        $res = mysqli_query($this->connect(), $query);
        while ($row = mysqli_fetch_assoc($res)) {
            array_push($tmp, $row);
        }

        return $tmp;
    }


}
