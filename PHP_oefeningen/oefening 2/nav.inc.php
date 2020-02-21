<?php 

if ($_SERVER["SCRIPT_NAME"] === "/PHP_Les/PHP_oefeningen/oefening 2/index.php") {
    
    $current = 'home';    

    } else {

    $current = 'contact';

    }
    ?>


<nav>
<ul>
<li <?php if($current == 'home') {echo 'class="cssstyle"';} ?>><a href="index.php">Home</a></li>
<li <?php if($current == 'contact'){echo 'class="cssstyle"';} ?>><a href="contact.php">Contact</a></li>
</ul>
    </nav>