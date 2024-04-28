<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary"href="crear.php"role="button">
            Agregar registro
            </a>
    </div>
    <div class="card-body">
    </div>
    <div
        class="table-responsive"
    >
        <table
            class="table"
        >
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Foto</th>
                    <th scope="col">HV</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Fecha de inicio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">Ana Castro</td>
                    <td>imagen.jpg</td>
                    <td>HV.pdf</td>
                    <td>Developer</td>
                    <td>28/03/2023</td>
                    <td>
                        <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
                        <a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                 
                    </td>
                </tr>
               
            </tbody>
        </table>
    </div>
    
    
</div>


<?php include("../../templates/footer.php"); ?>