<?php
    require __DIR__.'/../Model/UserDB.php';

    class UserController
    {
        private $db;
        private $data;

        public function __construct()
        {
            $this->db = new UserDB();
            $this->data = $this->db->getData();
        }

        private function exists(string $username) : bool {
            foreach ($this->data as $user) {
                if($user->getUsername() == $username){
                    return true;
                }
            }
            return false;
        }

        function getUserByName(string $username){
            foreach ($this->data as $user) {
                if($user->getUsername() == $username){
                    return $user;
                }
            }
            return null;
        }

        function sign_up(string $username, string $password) : bool{
            if(!$this->exists($username)){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $this->data[] = new User($username, $password);
                $this->db->WriteToDB($username, $password);
                return true;
            }
            return false;
        }

        function login(string $username, string $password) : bool {
            $userObj = $this->getUserByName($username);
            if($userObj != null){
                if (password_verify($password, $userObj->getPassword())){
                    return true;
                }
            }
            return false;
        }
    }
?>