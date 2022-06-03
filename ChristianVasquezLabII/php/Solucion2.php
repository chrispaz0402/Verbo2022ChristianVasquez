<html>
    <body>
        <?php
            $cA = $_GET['txt_cA'];
            $cB = $_GET['txt_cB'];
            $cC = sqrt($cA * $cA + $cB * $cB);
            echo "Resultado: " ,$cC;
           
        ?>

        <table border="1">
            <img src="teorema-pitagoras.png" height="100" width="250" align="center">
        </table>
    </body>
</html>