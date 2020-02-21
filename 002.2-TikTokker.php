<?php
    $post = [
        "displayName"   => "Crushn'it!",
        "username"      => "@chrushinit",
        "video"         => "http://bit.ly/tiktokker",
        "description"   => "the last one really went 💥👋🏼 #alarmclock #BestThingSince #satisfying #crushinit
                            Something For Your M.I.N.D. - Superorganism",
        "comments"      => [
            [
                "username" => "GoodBytes",
                "text"     => " Pretty Good 🤣"
            ],
            [
                "username" => "DenDavid",
                "text"     => " De UI kon wel beter 🤔🤔🤔🤔"
            ],
            [
                "username" => "HippeFilip",
                "text"     => " Lab2 Komt inorder 😁"
            ]
        ]
        
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiktokker</title>
    <style> 
        article{
            display: flex;
            font-family: Helvetica;
        }


    </style>
</head>
<body>

    <article>
        <div>
        <video controls autoplay muted   src="<?php echo $post ["video"]; ?>"></video>
    
        </div>
        <div>
            <h2><?php echo $post ["displayName"]; ?></h2>
            <h3><a href="#"><?php echo $post ["username"]; ?></a></h3>

            <p><?php echo $post ["description"]; ?></p>

        <?php foreach ($post['comments'] as $comment ) { ?>
            <p>
                <strong><?php echo $comment ["username"]; ?></strong>
                <span><?php echo $comment ["text"]; ?></span>
            </p>

        <?php } ?>

        </div>
    </article>
    
</body>
</html>