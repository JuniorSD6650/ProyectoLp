<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id" placeholder="Ingrese id del Carrera"><br>
    <input type="text" name="nombre" placeholder="Ingrese Nombre de la Carrera"><br>
    <input type="number" name="id_facultad" placeholder="Ingrese ID de facultad"><br>
    <input type="submit" value="Guardar"><br>
</form>
<?php
   if(!empty($_POST)){
    $id = $_POST['id'];
    $nombre = $_POST['nombre']; 
    $id_facultad = $_POST['id_facultad'];
    include_once "..\Controladores\carreraControlador.php";
    //echo createCarreera($id, $nombre, $id_facultad);
    
    ?>
        <h1>Carrera</h1>
        <table border=1>
            <tr>
                <th>id</th>
                <th>Nombres</th> 
                <th>id_facultad</th>
            </tr>
            <?php
                $carreraControlador = new CarreraControlador();
                $carreras = $carreraControlador->readCarreras();
                foreach($carreras as $carrera){
                    echo "<tr>
                            <td>".$carrera["id"]."</td>
                            <td>".$carrera["nombre"]."</td>
                            <td>".$carrera["id_facultad"]."</td>
                        </tr>";
                }
            ?>
    
        </table>
    <?php
    
}



