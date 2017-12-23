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

?>
<p id= "judul_single">
    <?=$judul_awal ?>
</p>
<p id= "isinya">
    <?=$isi_awal ?>
</p>
<p id= "tagnya">
    <?=$tag_awal ?>
</p>