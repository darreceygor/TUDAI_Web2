<?php

include './db/conexion.php'; // conexion con base de datos

class Model {

    function getSpecialities(){

        $db = new Conexion;

        $query = $db->prepare( "SELECT * FROM specialities");
        $query->execute();

        $specialities = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $specialities;
    } 

    function getDoctors(){

        $db = new Conexion;

        $query = $db->prepare( "SELECT * FROM doctors INNER JOIN specialities ON doctors.ID_specialities=specialities.ID");
        $query->execute();

        $doctors = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $doctors;
    }

    function newDoctor(){
        $db = new Conexion;

        $doctor = [
            "name"          => $_POST['name'],
            "surname"       => $_POST['surname'],
            "speciality"    => $_POST['speciality'],
            "dr_office"     => $_POST['dr_office'],
            "direction"     => $_POST['direction'],
          ];

        $createDoctor = "INSERT INTO consulting_rooms VALUES (:" . implode(", :", array_keys($doctor)) . ")";
        
        $query = $db->prepare($createDoctor);
        $query->execute($doctor);

        


    }


}
