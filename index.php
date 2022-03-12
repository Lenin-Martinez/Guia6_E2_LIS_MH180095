<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hEstilo.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div class="entrada">
            <label>Ingrese un numero</label><br>
            <input type="number" name="nmbNumero"><br><br>
            <input type="submit" value="Mostrar tabla" name="btnMostrar"><br><br>
        </div>
    </form>

    <div class="resultado">
        <?php
            MostrarTabla();
        ?>
    </div>
</body>
</html>


<?php
    function MostrarTabla()
    {
        if((!empty($_POST["nmbNumero"])) && (isset($_POST["btnMostrar"])))
        {
            $Numero= $_POST["nmbNumero"];
            echo "Tabla del " .$Numero. "<br><br>";

            for($i =1; $i < 11; $i++)
            {
                echo $i. " x " .$Numero. " = " .($i * $Numero). "<br>";
            }
        }
    }

?>