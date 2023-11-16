<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id" placeholder="Ingrese id Estudiante"><br>
    <input type="submit" value="Buscar"><br>
</form>
<?php
if(!empty($_POST)){
    $id = $_POST['id'];
    include_once "../Controladores/EstudianteControlador.php";
    $tc = new EstudianteControlador();    
    $resultado = $tc->readEstudiantePorId($id);

    ?>
        <table border=1>
            <tr>
                <th>Nombre</th> 
                <th>apellido1</th> 
                <th>apellido2</th> 
                <th>email</th> 
                <th>telefono</th> 
                    
            </tr>
            <?php
                foreach($resultado as $item){
                    echo "<tr>
                            <td>".$item["nombre"]."</td>
                            <td>".$item["apellido1"]."</td>
                            <td>".$item["apellido2"]."</td>
                            <td>".$item["email"]."</td>
                            <td>".$item["telefono"]."</td>
                        </tr>";
                }
            ?>
        </table>
    <?php
}

    


 
       
 
       



 



