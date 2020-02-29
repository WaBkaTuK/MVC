<?php
class Model_Register extends Model
{
    private $email;
    private $name;
    private $login;
    private $password;

    // Codes
    // 2 - not enough characters login
    // 3 - not upper first char login
    // 4 - not enough characters password
    // 5 - not upper first char password
    // 6 - not enough numeral chars password
    // 7 - no russian symbols in name
    // 8 - incorrect email
    private function get()
    {
        return $this->getDatabase('users');
    }

    public function validate()
    {
        if (
            $this->unique() &&
            $this->emailValidate() &&
            $this->loginValidate() &&
            $this->passwordValidate() &&
            $this->nameValidate() !== true
        ) return false;
        $this->addToDatabase();
        return true;
    }

    private function loginValidate()
    {
        if (strlen($this->login) <= 5)
            return 2;
        if (($firstChar = str_split($this->login))[0] == strtolower($firstChar[0]))
            return 3;
        return true;
    }

    private function passwordValidate()
    {
        $tmp = 0;
        if (strlen($this->login) <= 6)
            return 4;
        if (($firstChar = str_split($this->login))[0] == strtolower($firstChar[0]))
            return 5;
        for ($i = 0; $i < iconv_strlen($this->password); $i++) {
            is_numeric(str_split($this->password)[$i]) ? $tmp++ : null;
        }
        if ($tmp < 3) return 6;
        return true;
    }

    private function nameValidate()
    {
        if (preg_match('/[а-я]+/msi', $this->name))
            return 7;
        return true;
    }

    private function emailValidate()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            return 8;

    }

    private function unique()
    {
        if (in_array($this->get(), $this->email) &&
            in_array($this->get(), $this->login))
            return false;
        return true;
    }

    private function addToDatabase() {
        $query = "INSERT INTO `users` (`id` ,`user`, `password`, `status`) 
                  VALUES (NULL, '$this->user', '{$this->password}', 'user')";
        mysqli_query($this->connect(), $query);
        return true;
    }
  /*  public function get_data()
    {


        if (isset($_POST['regist']) && !empty($_POST['mail']) && !empty($_POST['pass'])) {
            $login = $_POST['mail'];
            $password = $_POST['pass'];
            $status = 0;

            $query = "insert into users(user,password,status) values ('$login','$password','$status')";

            $res = mysqli_query($this->connect(), $query);

            return $res;

        }
        return null;
    }*/
}