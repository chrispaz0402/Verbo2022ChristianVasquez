<html>
    <body>
        <?php
            $codigo = $_GET['txt_codigo'];
            $nombre = $_GET['txt_nombre'];
            $apellido = $_GET['txt_apellido'];
            $sueldob = $_GET['txt_sbase'];
            $bonificacion = $_GET['txt_boni'];
            $horase = $_GET['txt_hextras'];
            $descuento = $_GET['txt_descuento'];
            
            $igss = ($sueldob*0.0483);
            $horase = ($sueldob + $bonificacion)/30/8 * $horase;
            $totali = ($sueldob + $bonificacion + $horase);
            $totaldes = ($descuento + $igss);
            $sueldoliquido = ($totali - $totaldes);
        ?>
        <table border = "1" width = "20%" align = "center">
            <tr>
                <td colspan ="2" align = "center">DATOS GENERALES</td> 
            </tr>
            <tr>
                <td align = "center" width = 50%>Código</td>
                <td align = "center"><?php	echo $codigo; ?></td>
            </tr>
            <tr>
                <td align = "center">Nombre Completo</td>
                <td align = "center"><?php	echo $nombre; ?></td>
            </tr>
            
            <tr>
                <td colspan = "2 "align = "center">INGRESOS</td>
            </tr>

            <tr>
                <td align = "center">Sueldo base</td>
                <td align = "center"><?php	echo $sueldob; ?></td>
            </tr>

            <tr>
                <td align = "center">Bonificación</td>
                <td align = "center"><?php	echo $bonificacion; ?></td>
            </tr>

            <tr>
                <td align = "center">Horas extra</td>
                <td align = "center"><?php echo $horase; ?> </td>
            </tr>

            <tr>
                <td colspan = "2 "align = "center">DESCUENTOS</td>
            </tr>

            
            <tr>
                <td align = "center">Descuentos</td>
                <td align = "center"><?php echo $descuento; ?> </td>
            </tr>

            <tr>
                <td align = "center">IGSS</td>
                <td align = "center"><?php echo $igss; ?> </td>
            </tr>

            <tr>
                <td colspan = "2 "align = "center">TOTAL A RECIBIR</td>
            </tr>
            
            <tr>
                <td align = "center">Total de Ingresos</td>
                <td align = "center"><?php echo $totali; ?> </td>
            </tr>

            <tr>
                <td align = "center">Total de Descuentos</td>
                <td align = "center"><?php echo $totaldes; ?> </td>
            </tr>

            <tr>
                <td align = "center">Sueldo Líquido</td>
                <td align = "center"><?php echo $sueldoliquido; ?> </td>
            </tr>
            </table>
    </body>
</html>