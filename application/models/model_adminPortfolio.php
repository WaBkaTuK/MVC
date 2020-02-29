<?php


class Model_AdminPortfolio extends Model
{
    public function get_data()
    {
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


}
