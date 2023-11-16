<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id" placeholder="Ingrese id Libro"><br>
    <input type="submit" value="Buscar"><br>
</form>
<?php
if(!empty($_POST)){
    $id = $_POST['id'];
    include_once "..\Controladores\LibroControlador.php";
    $tc = new LibroControlador();    
    $resultado = $tc->readLibrosPorId($id);

    ?>
        <table border="1px solid">
            <tr>
                <th>nombre</th>
                <th>autor</th>
                <th>edicion</th>
                <th>disponibilidad</th>
                <th>fecha de Publicacion</th>
                <th>carrera</th>
                <th>precio</th>
            </tr>
            <?php
                foreach($resultado as $item){
                    echo "<tr>
                            <td>".$item["nombre"]."</td>
                            <td>".$item["autor"]."</td>
                            <td>".$item["edicion"]."</td>
                            <td>".$item["disponibilidad"]."</td>
                            <td>".$item["fechaPublicacion"]."</td>
                            <td>".$item["id_carrera"]."</td>
                            <td>".$item["precio"]."</td>
                         </tr>";
                }
            ?>
        </table> 
    <?php
}




/* CreateCarrera y UpdateFacultad 
   CreateEstudiante y DeleteEstudiante
   CreateFacultad y DeleteCarrera
   CreateLibro y DeleteFacultad
   UpdateCarrera y UpdateLibro
   UpdateEstudiante y DeleteLibro*/