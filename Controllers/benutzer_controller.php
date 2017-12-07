<?php
reqiure_once('login_Model.php');

    public function login($username, $password) { // Login
        $data = $this->sanitise($data);
        $sql = 'SELECT ID, email, password FROM hussaini_members WHERE email = \\''.$data['email'].'\\' AND password = \\''.$data['password'].'\\'';
        $results = $this->mysqli->query($sql);
        $personArray = array();
        while($row = $results->fetch_array(MYSQLI_ASSOC)) {
            $personArray[] =  new Person($row);
        }
        return $personArray;
    }
    
    ?>