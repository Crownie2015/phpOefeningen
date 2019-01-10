<?php
class LoginSystem {
    public function login($email, $password){
        if(!empty($email) && !empty($password)){
            $db = new Database;
            $query = $db->query("SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "'");
            $count = $query->rowCount();

            if($count == 1){
                echo "Je bent ingelogd !!";
            } else {
                echo "De gegevens waren fout!!";
            }
        } else {
            die("Data niet ontvangen!!");
        }
    }

    public function encryptPass($password){
        if(!empty($password)){
            return md5($password);
        }
    }

    public function clean($data){
        if(!empty($data)){
            $data = trim(strip_tags(stripslashes($data)));
            return $data;
        }
    }
}