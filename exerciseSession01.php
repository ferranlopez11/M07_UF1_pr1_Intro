<?php

/*
Crea un formulario que permita gestionar la cantidad de refresco o leche que hay en un
supermercado.
    a) Se debe mantener el nombre del trabajador que está utilizando la aplicación.
    b) Se debe poder añadir y quitar leche o refresco seleccionando de una lista
    c) Se debe controlar que no se pueden quitar mas unidades de las que haya, en ese
    caso mostrar error.
*/

session_start();

if (!isset($_SESSION['inventario'])) {
    $_SESSION['inventario'] = [];
}

$error = "";
$success = "";

$worker_name = isset($_POST['worker_name']) ? $_POST['worker_name'] : '';
if ($worker_name != "" && !isset($_SESSION['inventario'][$worker_name])) {
    $_SESSION['inventario'][$worker_name] = [
        'milk' => 0,
        'softDrink' => 0
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $worker_name = $_POST['worker_name'];
    $product = $_POST['product'];
    $quantity = (int)$_POST['quantity'];
    $action = $_POST['action'];

    if (!isset($_SESSION['inventario'][$worker_name])) {
        $error = "<br>Error: Worker name is required.";
    } else {
        $inventario = &$_SESSION['inventario'][$worker_name];

        switch ($action) {
            case "add":
                $inventario[$product] += $quantity;
                $success = "<br>$quantity units of $product added.";
                break;

            case "remove":
                if ($inventario[$product] >= $quantity) {
                    $inventario[$product] -= $quantity;
                    $success = "<br>$quantity units of $product removed.";
                } else {
                    $error = "<br>Error: You cannot remove more units than are in inventory.";
                }
                break;

            case "reset":
                $inventario['milk'] = 0;
                $inventario['softDrink'] = 0;
                $success = "<br>Inventory reset.";
                break;

            default:
                $error = "<br>Error: Invalid action.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket management</title>
</head>
<body>
    
<h1>Supermarket management</h1>

<form method="POST" action="">
    <label for="worker_name">Worker name:</label>
    <input type="text" id="worker_name" name="worker_name" value="<?php echo isset($worker_name) ? $worker_name : ''; ?>"><br><br>

	<h2>Choose product:</h2>
    <label for="product"></label>
    <select id="product" name="product">
        <option value="milk">Milk</option>
        <option value="softDrink">Soft Drink</option>
    </select><br><br>

	<h2>Product quantity:</h2>
    <label for="quantity"></label>
    <input type="number" id="quantity" name="quantity" value="1" min="1"><br><br>

    <button type="submit" name="action" value="add">Add</button>
    <button type="submit" name="action" value="remove">Remove</button>
    <button type="submit" name="action" value="reset">Reset</button>
</form>

<br>

<h2>Inventary:</h2>
<p>Worker: <?php echo isset($worker_name) ? $worker_name : 'None'; ?></p>

<?php if (isset($worker_name) && isset($_SESSION['inventario'][$worker_name])): ?>
    <p>Units of milk: <?php echo $_SESSION['inventario'][$worker_name]['milk']; ?></p>
    <p>Units of soft drink: <?php echo $_SESSION['inventario'][$worker_name]['softDrink']; ?></p>
<?php else: ?>
    <p>No inventory available for this worker.</p>
<?php endif; ?>

<?php echo "<font color='red'> $error </font>"; ?>
<?php echo "<font color='green'> $success </font>"; ?>


</body>
</html>
