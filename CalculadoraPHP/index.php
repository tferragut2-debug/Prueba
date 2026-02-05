<?php
$resultado = "";

if (isset($_POST["calcular"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case "suma":
            $resultado = $num1 + $num2;
            break;
        case "resta":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error: división por cero";
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>

<h1>Calculadora en PHP</h1>

<form method="post">
    <input type="number" name="num1" required>
    <select name="operacion">
        <option value="suma">+</option>
        <option value="resta">−</option>
        <option value="multiplicacion">×</option>
        <option value="division">÷</option>
    </select>
    <input type="number" name="num2" required>
    <br><br>
    <button type="submit" name="calcular">Calcular</button>
</form>

<?php if ($resultado !== ""): ?>
    <h2>Resultado: <?php echo $resultado; ?></h2>
<?php endif; ?>

</body>
</html>
