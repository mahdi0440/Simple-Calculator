<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="calculator.php">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required>
        <br>
        <label for="operation">Operation:</label>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if (isset($result)) {
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
