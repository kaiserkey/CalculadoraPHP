<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
        <link rel="stylesheet" href="estilocalculadora.css">
    </head>
    <body>
        <?  
            include("funcionCalculadora.php");
        ?>
        <form method="post" name="formCalculadora" id="enviar" action="<?php echo $_SERVER['PHP_SELF'] ?>">

            <table>
                <tr>
                    <th colspan="5">
                        <div id="display">
                            <?
                                if(isset($_POST["datos_php"])){
                                    echo $_POST["datos_php"];
                                }
                            ?>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th colspan="5">
                        <div id="resultado">
                            <?
                                if(isset($_POST["datos_php"])){
                                    calcular($_POST["datos_php"]);
                                }
                            ?>
                        </div>
                    </th>
                </tr>
                <tr>
                    <td><input type="button" value="7" name="7" onclick="agregarDisplay(7)"></td>
                    <td><input type="button" value="8" name="8" onclick="agregarDisplay(8)"></td>
                    <td><input type="button" value="9" name="9" onclick="agregarDisplay(9)"></td>
                    <td><input type="button" value="DEL" name="del" onclick="agregarDisplay('del')"></td>
                    <td><input type="button" value="AC" name="ac" onclick="agregarDisplay('ac')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="4" name="4" onclick="agregarDisplay(4)"></td>
                    <td><input type="button" value="5" name="5" onclick="agregarDisplay(5)"></td>
                    <td><input type="button" value="6" name="6" onclick="agregarDisplay(6)"></td>
                    <td><input type="button" value="x" name="x" onclick="agregarDisplay('x')"></td>
                    <td><input type="button" value="/" name="/" onclick="agregarDisplay('/')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="1" name="1" onclick="agregarDisplay(1)"></td>
                    <td><input type="button" value="2" name="2" onclick="agregarDisplay(2)"></td>
                    <td><input type="button" value="3" name="3" onclick="agregarDisplay(3)"></td>
                    <td><input type="button" value="+" name="+" onclick="agregarDisplay('+')"></td>
                    <td><input type="button" value="-" name="-" onclick="agregarDisplay('-')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="0" name="0" onclick="agregarDisplay(0)"></td>
                    <td><input type="button" value="." name="." onclick="agregarDisplay('.')"></td>
                    <td><input type="button" value="%" name="%" onclick="agregarDisplay('%')"></td>
                    <td><input type="button" value="PI" name="pi" onclick="agregarDisplay(Math.PI.toFixed(2))"></td>
                    <input type="hidden" id="datos_php" name="datos_php">
                    <td><input type="submit" value="=" name="="></td>
                </tr>
            </table>
        </form>
        <script src="funcionJavascript.js"></script>
    </body>
</html>
