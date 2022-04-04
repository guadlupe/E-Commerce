<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
    </head>

<body>

<?php
    $dayofweek = date("w");

    switch ($dayofweek) {
        case 0:
            echo "It is Sunday!";
            break;
        case 1:
            echo "It's Monday";
            break;
        case 2:
            echo "It's Tuesday";
            break;
        case 3:
            echo "It's Wednesday! (Hump daaaaaaaaaay)";
            break;
        case 4:
            echo "It's Thursday";
            break;
        case 5:
            echo "It's Friday!";
            break;
        case 6:
            echo "It's Saturday!";
            break;
    }
?>

</body>
</html>