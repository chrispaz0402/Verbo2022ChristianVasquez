<html>
    <body>
        <?php
            $valor = $_GET['txt_valor'];

            if ($valor > 0){
                echo "el numero es positivo";
            }
            if ($valor < 0){
                echo "el numero es negativo";
            }
            if ($valor == 0 ){
                echo "el numero es neutro";
            }
        ?>
    </body>
</html>