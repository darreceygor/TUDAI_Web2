<?php

class View {

    function __construct(){

    }

    function showDoctors($doctors){
        
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="'.BASE_URL.'" />
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            <title>Listado</title>
        </head>
        <body>
            
            <h1>Listado de Doctores</h1>
        
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Consultorio</th>
                    <th scope="col">Direccion</th>
                </tr>
                </thead>
                <tbody>
                <tr>';

                foreach($doctors as $doctor) {
                    echo '<th scope="row">'.$doctor->ID_doctors.'</th>
                    <td>'. $doctor->name .'</td>
                    <td>'.$doctor->surname .'</td>
                    <td>'.$doctor->dr_office .'</td>
                    <td>'.$doctor->direction .'</td>
                </tr>';
                    
                }
                
'
                </tbody>
            </table>





 
         
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </body>
        </html>';
    
    
    }
}