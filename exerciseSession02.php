<?php

/*
Crea un php con un array inicial con 3 valores numéricos.
    a) Crea un formulario que permita modificar el valor en una posición en concreto.
    b) Consigue que se mantenga las modificaciones en el array.
    c) Añade un botón para calcular el valor medio. 
*/

session_start();

if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [10, 20, 30];
}

$array = $_SESSION['array'];

$average = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        $position = (int)$_POST['position'];
        $new_value = isset($_POST['new_value']) ? (int)$_POST['new_value'] : null;

        if ($action == 'Modify' && $new_value !== null) {
            $array[$position] = $new_value;
            $_SESSION['array'] = $array;
        } elseif ($action == 'Average') {
            $average = array_sum($array) / count($array);
        } elseif ($action == 'Reset') {
            $_SESSION['array'] = [10, 20, 30];
            $array = $_SESSION['array'];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify array saved in session</title>
</head>
<body>

<h1>Modify array saved in session</h1>

<form method="POST" action="">
    <label for="position">Position to modify:</label>
    <select id="position" name="position">
        <?php for ($i = 0; $i < count($array); $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select><br><br>

    <label for="new_value">New value:</label>
    <input type="number" id="new_value" name="new_value" value=""><br><br>

    <button type="submit" name="action" value="Modify">Modify</button>
    <button type="submit" name="action" value="Average">Average</button>
    <button type="submit" name="action" value="Reset">Reset</button>
</form>

<p><?php echo "Current array:" . implode(", ", $array); ?></p>


<?php if ($average):
    echo "Average: " . round($average, 2);
    endif; 
?>

</body>
</html>