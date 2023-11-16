<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id" placeholder="Ingrese id del estudiante"><br>
    <input type="text" name="nombre" placeholder="Ingrese Nombre del estudiante"><br>
    <input type="text" name="apellido1" placeholder="Ingrese apellido1 del estudiante"><br>
    <input type="text" name="apellido2" placeholder="Ingrese apellido2 del estudiante"><br>
    <input type="text" name="email" placeholder="Ingrese email del estudiante"><br>
    <input type="text" name="telefono" placeholder="Ingrese telefono del estudiante"><br>
    <input type="submit" value="Guardar"><br>
</form>
<?php
   if(!empty($_POST)){
    $id = $_POST['id'];
    $nombre = $_POST['nombre']; 
    $apellido1 = $_POST['apellido1']; 
    $apellido2 = $_POST['apellido2'];   
    $email = $_POST['email']; 
    $telefono = $_POST['telefono']; 
    include_once "..\Controladores\EstudianteControlador.php";
    //echo createEstudiante($id, $nombre,$apellido1,$apellido2, $email,$telefono);
      
    ?>
        <h1>Estudiante</h1>
        <table border=1>
            <tr>
                <th>id</th>
                <th>Nombre</th> 
                <th>apellido1</th> 
                <th>apellido2</th> 
                <th>email</th> 
                <th>telefono</th> 
                    
            </tr>
            <?php
                $estudianteControlador = new EstudianteControlador();
                $estudiantes = $estudianteControlador->readEstudiantes();
                foreach($estudiantes as $estudiante){
                    echo "<tr>
                            <td>".$estudiante["id"]."</td>
                            <td>".$estudiante["nombre"]."</td>
                            <td>".$estudiante["apellido1"]."</td>
                            <td>".$estudiante["apellido2"]."</td>
                            <td>".$estudiante["email"]."</td>
                            <td>".$estudiante["telefono"]."</td>
                            
                        </tr>";
                }
            ?>
        </table>
    <?php
}

    


 
       
 
       



 



