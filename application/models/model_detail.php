<?php

class Model_Detail extends Model
{
    public function get_data($id, $title, $content)
    {
        $userId = $_SESSION['user']['Id'];
        $tmp = [
            'news' => [],
            'comment'=> [],
            'man' => [],
        ];

        $query = "SELECT * FROM news WHERE id = '$id'";
        $res = mysqli_query($this->connect(), $query);

//        while ($row = mysqli_fetch_assoc($res)) {
//            array_push($tmp['news'], array(
//                'Title' => $row['title'],
//                'Content' => $row['content'],
//            ));
//        }
        while ($row = mysqli_fetch_assoc($res)) {
            array_push($tmp['news'], $row);
        }


//        $query2 = "select * from comments where post_id = '$id'";
//        $res2 = mysqli_query($this->connect(), $query2);
//        while ($comm = mysqli_fetch_assoc($res2)) {
//            array_push($tmp['comment'], array(
//                'Comm' => $comm['comment'],
//            ));
//        }


        $query2 = "select * from comments where post_id = '$id'";
        $res2 = mysqli_query($this->connect(), $query2);
        while ($comm = mysqli_fetch_assoc($res2)) {
            array_push($tmp['comment'], $comm);
        }


       /* $query3 = "select distinct user from users,comments where users.id = '$userId' and users.id = comments.user_id";*/
      /*  select DISTINCT user from users,comments where users.id = 1 and users.id = comments.user_id */
       /* $res3 = mysqli_query($this->connect(),$query3);
        while ($man = mysqli_fetch_assoc($res3)){
            array_push($tmp['man'], $man);
        }
*/
        return $tmp;
    }
}
