<?php

class Model {

    function getSpecialities(){

        $db = new PDO('mysql:host=localhost;'.'dbname=consulting_rooms;charset=utf8', 'root', '');

        $query = $db->prepare( "SELECT * FROM specialities");
        $query->execute();

        $specialities = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $specialities;
    }

    function getDoctors(){

        $db = new PDO('mysql:host=localhost;'.'dbname=consulting_rooms;charset=utf8', 'root', '');

        $query = $db->prepare( "SELECT * FROM doctors");
        $query->execute();

        $doctors = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $doctors;
    }
}
