<!DOCTYPE html>
<html>
<head>
    <title>PHP assignments</title>
</head>

<a href=/calculator.php>Calculator!</a>
<a href=/calendar.php>Calendar!</a>

<body>
<h1>What's your favorite verb?</h1>
<form method="GET">
    <input type="text" name="joke">
    <button>GO!</button>
</form>

<?php
    $joke = $_GET['joke'];
    print "Veni. Vidi. Vici. I came. I saw. I ".$joke."ed.";

?>
</body>
</html>