<?php

class Model {

    function getDoctors(){

        $db = new PDO('mysql:host=localhost;'.'dbname=consulting_rooms;charset=utf8', 'root', '');

        $query = $db->prepare( "SELECT * FROM doctors");
        $query->execute();

        $doctors = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $doctors;
    }
}
