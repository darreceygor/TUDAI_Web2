<?php

class View {

    function __construct(){

    }



    function home(){

        include './templates/header.php';
        include './templates/nav.php';

        echo '    
        <h1>HOME</h1>
        ';
        include './templates/footer.php';
    } 


    function showDoctors($doctors){
        
        include './templates/header.php';
        include './templates/nav.php';
        echo '    
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
                echo '
                
                </tbody>
            </table>';
            include './templates/footer.php';
    }


    function about(){

    include './templates/header.php';
    include './templates/nav.php';

    echo '    
    <h1>ABOUT</h1>
    ';
    include './templates/footer.php';
    } 
}