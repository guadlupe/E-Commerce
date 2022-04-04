<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>

<body>
    <form method="GET">
        <input type="text" name="num1" placeholder="Numeral 1">
        <input type="text" name="num2" placeholder="Numeral 2">
        <select name="operation">
            <option>Select</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>

    <h2>=</h2>

    <?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operation'];
        switch ($operator) {
            case "Select":
                echo "You need to select an operation!";
            break;
            case "Add":
                echo $result1 + $result2;
            break;
            case "Subtract":
                echo $result1 - $result2;
            break;
            case "Select":
                echo $result1 * $result2;
            break;
            case "Select":
                echo $result1 / $result2;
            break;
        }
    }
    ?>
</body>



</html>