<!DOCTYPE html>
<html lang="es">

<?php include 'vistasGenerales/cabecera.html';?>

<body>
    <div class="container">
        <div class="contenedor">
            
            <form class="" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post" enctype="multipart/form-data">
            <h2 class="titulo">Cambiar el estado del registro</h2>
            <p>Llene el formulario para agregar un producto a la base de datos</p>
                
                <select name="estado" class="form-select" id="estado">
                    <option value="0"><?php echo $nombreestado ?></option>
                    <option value="1">Pendiente</option>
                    <option value="2">Activo</option>
                    <option value="3">Inactivo</option>
                </select>
                
                <input class="btn btn-success acciones" type="submit" value="Actualizar">
                <a class="btn btn-success acciones" href="dashboard.php">Cancelar</a>
            </form>
        </div>
    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>