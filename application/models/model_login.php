<?php

class Model_Login extends Model
{
    public function get_data()
    {
        if(isset($_POST['login']) && !empty($_POST['mail']) && !empty($_POST['pass'])) {
            $login = $_POST['mail'];
            $pass = $_POST['pass'];

            $checkquery = 'select * from users';

            $check = mysqli_query($this->connect(), $checkquery);

            while ($checkrow = mysqli_fetch_assoc($check)) {
                if ($login == $checkrow['user'] && $pass == $checkrow['password']) {
                    $_SESSION['user'] = [
                        'Id' => $checkrow['id'],
                        'User' => $checkrow['user'],
                        'Status' => $checkrow['status'],
                    ];
                }
            }
        }
    }
}
