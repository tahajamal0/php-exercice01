<?php
    $user_data = file_get_contents(__DIR__.'/../../data.json');
    $user_data_decoded = json_decode($user_data, true);

    function getData(){
        return $GLOBALS['user_data_decoded'];
    }

    function writeToDB(string $user, string $password){
        array_push($GLOBALS['user_data_decoded'], array("user"=>$user, "password"=>$password));
        file_put_contents(__DIR__.'/../../data.json', json_encode($GLOBALS['user_data_decoded']));
    }
?>