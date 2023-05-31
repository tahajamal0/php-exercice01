<?php
    class User implements JsonSerializable{
        private string $username;
        private string $password;
        private string $role;
        public function __construct(string $username, string $password, string $role = "0") {
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
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

        public function getRole() : string{
            return $this->role;
        }

        public function setRole(string $role) {
            $this->role = $role;
        }

        public function jsonSerialize() : array
        {
            return [
                'username' => $this->username,
                'password' => $this->password,
                'role' => $this->role
            ];
        }
    }
?>