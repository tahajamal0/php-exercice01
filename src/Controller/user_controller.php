<?php
    require __DIR__.'/../Model/user_db.php';
    $data = getData();

    function exists(string $user) : bool { 
        foreach ($GLOBALS['data'] as $key => $value) {
            if($value['user'] == $user){
                return true;
            }
        }
        return false;
    }

    function getUserByName(string $user){
        foreach ($GLOBALS['data'] as $key => $value) {
            if($value['user'] == $user){
                return $value;
            }
        }
        return null;
    }

    function sign_up(string $user, string $password) : bool{
        if(!exists($user)){
            $password = password_hash($password, PASSWORD_DEFAULT);
            array_push($GLOBALS['data'], array("user"=>$user, "password"=>$password));
            writeToDB($user,$password);
            return true;
        }
        return false;
    }

    function login(string $user, string $password) : bool {
        $userObj = getUserByName($user);
        if($userObj != null){
            if (password_verify($password, $userObj["password"])){
                return true;
            }
        }
        return false;
    }
?>