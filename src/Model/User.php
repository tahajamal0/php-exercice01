<?php
    class User implements JsonSerializable{
        private string $username;
        private string $password;
        public function __construct(string $username, string $password) {
            $this->username = $username;
            $this->password = $password;
        }

        public function getUsername() : string{
            return $this->username;
        }

        public function getPassword() : string{
            return $this->password;
        }

        public function setUsername(string $username) {
            $this->username = $username;
        }
        public function setPassword(string $password) {
            $this->password = $password;
        }

        public function jsonSerialize() : array
        {
            return [
                'username' => $this->username,
                'password' => $this->password
            ];
        }
    }
?>