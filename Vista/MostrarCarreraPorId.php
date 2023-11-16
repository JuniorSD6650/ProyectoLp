<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id" placeholder="Ingrese id Carrera"><br>
    <input type="submit" value="Buscar"><br>
</form>
<?php
if(!empty($_POST)){
    $id = $_POST['id'];
    include_once "../Controladores/CarreraControlador.php";
    $tc = new CarreraControlador();    
    $resultado = $tc->readCarreraPorId($id);

    ?>
        <table border="1px solid">
            <tr>
                <th>nombre</th>
                <th>facultad</th>
            </tr>
            <?php
                foreach($resultado as $item){
                    echo "<tr>
                            <td>".$item["nombre"]."</td>
                            <td>".$item["id_facultad"]."</td>
                        </tr>";
                }
            ?>
        </table> 
    <?php
}
