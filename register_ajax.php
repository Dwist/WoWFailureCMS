<?php
include ("configs.php");
class Request
{
    protected $result;

    public function dispatch()
    {
        switch ($_POST["action"]) {
            case "register":
                $this->_register($_POST["username"], $_POST["password"], $_POST["email"]);
                echo $this->getResult();
                break;
            case "check_username":
                //$this->_check_acc($_POST["username"]);
                //echo $this->getResult();
                echo ("2");
                break;
        }

    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($data)
    {
        $this->result = $data;
    }

    private function _check_acc($username)
    {
        global $connection_setup, $server_adb;
        $sql = "SELECT username FROM `" . $server_adb . "`.`account` WHERE username='" .
            strtoupper(mysql_real_escape_string($username)) . "'";
        $query = mysql_query($sql, $connection_setup) or die(mysql_error());
        if (mysql_num_rows($query) == 1) {
            $this->setResult("2");
        } elseif (mysql_num_rows($query) == 0) {
            $this->setResult("1");
        }
    }

    private function _register($username, $password, $email)
    {
        global $connection_setup, $server_adb;
        $escaped = array(strtoupper(mysql_real_escape_string($username)), strtoupper(mysql_real_escape_string
            ($password)), mysql_real_escape_string($email));
        $sql = "INSERT INTO `" . $server_adb .
            "`.`account` (`username`,`sha_pass_hash`,`expansion`,`email`) VALUES ('" . $escaped[0] .
            "','" . strtoupper(sha1($escaped[0] . ":" . $escaped[1])) . "',3,'" . $escaped[2] . "')";
        $query = mysql_query($sql, $connection_setup) or die(mysql_error());
        if ($query) {
            $this->setResult("1");
        } else {
            $this->setResult("2");
        }
    }
}
$Request = new Request();
$Request->dispatch();
?>