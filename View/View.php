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
    

    function showSpecialities($specialities){
        
        include './templates/header.php';
        include './templates/nav.php';
        echo '    
            <h1>Listado de Especialidades</h1>
        
            <form method="POST" id="formSpecialities">
                <select name="speciality">';
                    foreach($specialities as $speciality) {
                        echo '
                            <option value="'.$speciality->ID.'">'.$speciality->speciality.'</option>';
                    };
                echo '
                </select>
                <button type="submit">Consultar</button>
            </form>
            <div id="container">
            </div>';

        include './templates/footer.php';
    }

    function showDoctors($doctors,$specialities){
        
        include './templates/header.php';
        include './templates/nav.php';

        echo '   
        
        <div class="speciality">
            <h1>Listado de Especialidades</h1>
            
                <form method="POST" id="formSpecialities">
                    <select name="speciality">';
                    foreach($specialities as $speciality) {
                        echo '
                            <option value="'.$speciality->ID.'">'.$speciality->speciality.'</option>';
                    };
                    echo '
                    </select>
                    <button type="submit">Consultar</button>
                </form>
        </div>

        <div class="mt-5">
            <h1>Listado de Doctores</h1>
        
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">name</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Consultorio</th>
                    <th scope="col">Direccion</th>
                </tr>
                </thead>
                <tbody>
                <tr>';

                //ver listado general de medicos
                if ($_POST['speciality'] == '') {
                    foreach($doctors as $doctor) {
                        echo '<th scope="row">'.$doctor->ID_doctors.'</th>
                        <td>'.$doctor->speciality.'</td> 
                        <td>'.$doctor->name .'</td>
                        <td>'.$doctor->surname .'</td>
                        <td>'.$doctor->dr_office .'</td>
                        <td>'.$doctor->direction .'</td>
                        </tr>';
                    }
                }
                else {

                    //filtra listado por especialidad
                    foreach($doctors as $doctor) {
                        if ($_POST['speciality'] == $doctor->ID_specialities){
                            echo '<th scope="row">'.$doctor->ID_doctors.'</th>
                            <td>'.$doctor->speciality.'</td> 
                            <td>'.$doctor->name .'</td>
                            <td>'.$doctor->surname .'</td>
                            <td>'.$doctor->dr_office .'</td>
                            <td>'.$doctor->direction .'</td>
                            </tr>';
                        }
                    }
                }
                echo '
                
                </tbody>
            </table>
        </div>';
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
    
    function admin($doctors){

        include './templates/header.php';
        include './templates/nav.php';

        
        include './View/form.php';
                  
         echo' 

              <a href="crear.php"  class="btn btn-primary mt-4">Crear Registro</a>
              <hr>
            </div>
          </div>
        </div>


        <div class="mt-5">
            <h1>Listado de Doctores</h1>
        
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">name</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Consultorio</th>
                    <th scope="col">Direccion</th>
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>';

                //ver listado general de medicos
                foreach($doctors as $doctor) {
                        echo '<th scope="row">'.$doctor->ID_doctors.'</th>
                        <td>'.$doctor->speciality.'</td> 
                        <td>'.$doctor->name .'</td>
                        <td>'.$doctor->surname .'</td>
                        <td>'.$doctor->dr_office .'</td>
                        <td>'.$doctor->direction .'</td>
                        <td>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <button type="button" class="btn btn-danger">Borrar</button>
                            </div>
                        </tr>';
                    }
                echo '
                
                </tbody>
            </table>
        </div>';
        
        include './templates/footer.php';

    }


}