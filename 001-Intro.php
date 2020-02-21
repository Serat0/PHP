<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-les 1</title>
</head>
<body>

    <?php
        $name = "Slim Shady";

        /* ============================= Manier van Printen ==============================*/

        // Hi, my name is Slim Shady

        echo "<h1>hi, My name is " . $name . "</h1>" ;
        echo '<h1>hi, My name is  $name  </h1>' ;
        echo "<h1>hi, My name is  $name  </h1>" ;
    ?>

        <!-- Beste Manier van printen -->

    <h1>hi, My name is <?php echo $name ?> </h1>


    <?php 
        if (empty($name)) {
            echo " Name canot be empty ";
        } else {
            echo "Welcome";
        }   
    
    ?>

    <?php
        $name = "";

    if (isset($name)){
    echo " Name canot be empty ";
    } else {
    echo "Welcome";
    }   

?>


</body>
</html>