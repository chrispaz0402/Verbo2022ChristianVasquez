<html>
    <body>
        <?php
            $carnet = $_GET['txt_carnet'];
            $nombre = $_GET['txt_nombre'];
            $apellido = $_GET['txt_apellido'];
            $curso  = $_GET['txt_curso'];
            $nota1 = $_GET['txt_nota1'];
            $nota2 = $_GET['txt_nota2'];
            $nota3 = $_GET['txt_nota3'];
            $nota4 = $_GET['txt_nota4'];
            $promedio = ($nota1 + $nota2 + $nota3 + $nota4)/4;

            echo "Carné: ",$carnet;
            echo "<br>Nombre: ",$nombre;
            echo "<br>Apellido: ",$apellido;
            echo "<br>Curso: ",$curso;
        ?>

        <table border="1" width="20%" align="center">
            <tr>
                <td colspan="2" align="center">Detalle de notas</td>
            </tr>
            <tr>
                <td align="center" width="50%">Primera unidad</td>
                <td align="center"> <?php echo $nota1; ?></td>
            </tr>

            <tr>
                <td align="center" width="50%">Segunda unidad</td>
                <td align="center"> <?php echo $nota2; ?></td>
            </tr>

            <tr>
                <td align="center" width="50%">Tercera unidad</td>
                <td align="center"> <?php echo $nota3; ?></td>
            </tr>

            <tr>
                <td align="center" width="50%">Cuarta unidad</td>
                <td align="center"> <?php echo $nota4; ?></td>
            </tr>

            <tr>
                <td align="center" width="50%">Promedio</td>
                <td align="center"> <?php echo $promedio; ?></td>
            </tr>
        </table>
    </body>
</html>