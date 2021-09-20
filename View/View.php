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
        
            <title>Listado</title>
        </head>
        <body>
            
            <h1>Listado de Doctores</h1>
        
            <ul>';
            
            echo '<pre>';
            var_dump($doctors); 
            echo '</pre>';
            echo'<br>';
            
            foreach($doctors as $doctor) {
                '<li>'. $doctor->name .': '.$doctor->surname .' - '.'</li>';
            }
    
        '
            </ul>
         
              
        </body>
        </html>';
    
    
    }
}