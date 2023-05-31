<?php
    namespace Model;
    use Model\User;
    class UserDB{
        private $user_data;
        private $user_data_decoded;
        private $users;

        public function __construct(){
            $this->user_data = file_get_contents(__DIR__.'/data.json');
            $this->users = [];
            $this->user_data_decoded = json_decode($this->user_data, true);
            $this->InitUsers();
        }

        private function InitUsers(){
            foreach ($this->user_data_decoded as $value) {
                $this->users[] = new User($value['username'], $value['password'], $value['role']);
            }
        }

        public function getData(){
            return $this->users;
        }

        public function WriteToDB(string $user, string $password){
            $this->users[] = new User($user, $password, 0);
            file_put_contents(__DIR__.'/data.json', json_encode($this->users));
        }
    }
?>