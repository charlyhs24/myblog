<?php
require_once 'core/init.php';

$error = '';
$id = $_GET['id'];
if(isset($_GET['id'])){
    $articles = tampilkan_where_id($id);
    while($row = mysqli_fetch_assoc($articles)){
        $judul_awal = $row['judul'];
        $isi_awal = $row['isi'];
        $tag_awal = $row['tag'];
    }
}
if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tag = $_POST['tag'];
    if(!empty(trim($judul)) && (!empty(trim($isi)))){
        if(edit_data($judul, $isi, $tag, $id)){
            header('Location: index.php'); 
        }else{
            $error = 'ada masalah saat tambah data';
        }
    }else{
        $error = 'judul dan isi harus di isi'; 
    }
}
?>

<form action="" method = "post">
    <label for="judul"> Judul</label>
    <input type="text" name = "judul" value = "<?=$judul_awal ?>"><br>

    <label for="isi">Isi</label>
    <textarea rows ="8" col = "40" name = "isi"><?=$isi_awal ?></textarea><br>
    
    <label for="tag">Tag</label>
    <input type="text" name = "tag" value = "<?=$tag_awal ?>"><br><br>

    <div id="error"><?=$error ?></div>

    <input type="submit" name = "submit" value = "submit">
</form>