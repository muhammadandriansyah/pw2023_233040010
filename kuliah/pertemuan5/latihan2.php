<?php
$binatang = ["🐶", "🐼", "🐵","☠","🥶"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>


<body>
    <h3>Daftar Binatang</h3>
    <ol>
        
            <?php for ($i = 1; $i < count($binatang); $i++) { ?>
        <li><?php echo $binatang[0]; ?></li>
        <?php } ?>
</ol>

<h3> daftar makanan</h3>
<ul>
    <li>🍿</li>
    <li>🎂</li>
    <li>🥜</li>
    <li>(●'◡'●)</li>
    <li>🧙‍♂️</li>

    <h3>Daftar Binatang</h3>
    <ol>
    <li><?php echo $b; ?></li>
        <?php  endforeach; ?>
            </ol>
</body>
</html> 