<?php

echo 
'<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="mt-4">Crear Registro</h2>
                <hr>
                <form method="post" >
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="surname">Apellido</label>
                    <input type="text" name="surname" id="surname" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="speciality">Especialidad</label>
                    <input type="text" name="speciality" id="speciality" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="dr_office">Consultorio</label>
                    <input type="text" name="dr_office" id="dr_office" class="form-control">
                  </div>

                  <div class="form-group">
                  <label for="direction">Direccion</label>
                  <input type="text" name="direction" id="direction" class="form-control">
                </div>
                  
                  <div class="form-group">
                    <input type="submit" name="new_doctor" class="btn btn-primary mt-2" value="Aceptar">
                    <a class="btn btn-primary mt-2" href="admin">Cancelar</a>
                  </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>';