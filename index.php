<?php
require_once "core/init.php";


$articles = tampilkan();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    while($row = mysqli_fetch_assoc($articles)):
    ?>
    <div class = "each_article">
        <h3><a href="single.php?id=<?= $row['id']?> "><?= $row['judul']?></a></h3>
        <p><?= excerpt($row['isi'])?></p>
        <p class ="waktu"><?= $row['waktu']?> </p>
        <p class ="tag"><?= $row['tag']?></p>
        <a href="edit.php?id=<?= $row['id']?> ">Edit</a>
        <a href="delete.php?id=<?= $row['id']?> ">Hapus</a>
    </div>
    <?php endwhile;?>
</body>
</html>