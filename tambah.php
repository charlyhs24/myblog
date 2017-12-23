<?php
require_once 'core/init.php';

$error = '';
if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tag = $_POST['tag'];
    if(!empty(trim($judul)) && (!empty(trim($isi)))){
        if(tambah_data($judul, $isi, $tag)){
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
    <input type="text" name = "judul" value = ""><br>

    <label for="isi">Isi</label>
    <textarea name="isi" cols="40" rows="8"></textarea><br>
    
    <label for="tag">Tag</label>
    <input type="text" name = "tag" value = ""><br><br>

    <div id="error"><?=$error ?></div>

    <input type="submit" name = "submit" value = "submit">
</form>