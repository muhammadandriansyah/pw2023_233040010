<?php
$component = ["metherboard", "processor", "Hard disk", "pc cooler", "VGA card", "SSD"]
?>

<!DOCTYPE html>
<html lang="en>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
    </head>
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($component as $components) { ?>
        <li><?php echo $components ?></li>
        <?php } ?>
    </ol>

    <hr>

    <h3> Macam-macam perangkat keraskomputer baru</h3>
    <ol>
        <?php array_push($component, "Card Reader", "Modem");?>
        <?php sort($component) ?>    
        <?php foreach ($component as $componentsB) : ?>
        <li><?php echo $componentsB ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>