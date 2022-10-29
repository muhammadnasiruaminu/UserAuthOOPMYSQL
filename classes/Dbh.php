<?php

class Dbh{
    private function connect()
    {
        $hostname = "localhost";
        $username   =   "root";
        $password   =   "";
        $dbnme      =   "zuriphp";
        $dbh        =   new PDO('mysql:host='.$hostname.';dbname='.$dbnme.'', $username, $password);
    }
    
}


