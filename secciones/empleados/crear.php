<?php include("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">Datos del empleado</div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="primernombre" class="form-label">Primer nombre</label>
        <input type="text"
            class="form-control" name="primernombre"id="primernombre" aria-describedby="helpId" placeholder="Primer nombre"/>
    </div>

    <div class="mb-3">
        <label for="segundonombre" class="form-label">Segundo nombre</label>
        <input type="text"
            class="form-control" name="segundonombre"id="segundonombre" aria-describedby="helpId" placeholder="Segundo nombre"/>
    </div>

    <div class="mb-3">
        <label for="primerapellido" class="form-label">Primer apellido</label>
        <input type="text"
            class="form-control" name="primerapellido"id="primerapellido" aria-describedby="helpId" placeholder="Primer apellido"/>
    </div>

    <div class="mb-3">
        <label for="segundoapellido" class="form-label">Segundo apellido</label>
        <input type="text"
            class="form-control" name="segundoapellido"id="segundoapellido" aria-describedby="helpId" placeholder="Segundo apellido"/>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto:</label>
        <input type="file"
            class="form-control" name="fot"id="foto" aria-describedby="helpId" placeholder="Foto"/>
    </div>

    <div class="mb-3">
        <label for="HV" class="form-label">HV(PDF)</label>
        <input type="file"
            class="form-control" name="hv"id="hv" aria-describedby="helpId" placeholder="HV"/>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cargo:</label>
        <select class="form-select form-select-sm" name="" id="idcargo">
            <option selected>Select one</option>
            <option value="">New Delhi</option>
            <option value="">Istanbul</option>
            <option value="">Jakarta</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="fechade inicio" class="form-label">Fecha de inicio</label>
        <input type="date"class="form-control" name="fechadeinicio" id=""aria-describedby="emailHelpId"placeholder="Fecha de inicio"/>
    </div>

    <button
        type="submit"class="btn btn-success">Agregar</button>
        <a name="" id=""class="btn btn-primary" href="index.php"role="button">Cancelar</a>
        
    </form>
       

    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include("../../templates/footer.php"); ?>