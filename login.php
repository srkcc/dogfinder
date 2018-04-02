<?php require('decode_dog.php'); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Dog Finder</title>
</head>
<body>
    <?php echo doge_response($doge); ?>
    <p>
        <img src="<?php doge_image($doge); ?>" alt="A Dog Picture">
    </p>
</body>