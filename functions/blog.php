<?php

    function tampilkan(){
        global $link;
        $query = "SELECT * FROM blog";
        $result = mysqli_query($link, $query) or die('gagal tampil data');
        return $result;
    }
    function tampilkan_where_id($id){
        global $link;
        $query = "SELECT * FROM blog WHERE id =$id";
        $result = mysqli_query($link, $query) or die('gagal tampil data');
        return $result;
    }
    function hapus_data($id){
        $query = "DELETE FROM blog WHERE id=$id";
        return run($query);
    }
    function edit_data($judul, $isi, $tag, $id){
        $query = "UPDATE blog SET judul ='$judul', isi='$isi', tag='$tag'  WHERE id=$id";
        return run($query);
    }
    function tambah_data($judul, $isi, $tag){
        $judul = kunci($judul);
        $isi = kunci($isi);
        $query = "INSERT INTO blog (judul, isi, tag) Values ('$judul', '$isi', '$tag')";
        return run($query);    
    }
    function run($query){
        global $link;
        if(mysqli_query($link, $query)) return true;
        else return false;
    }
    function excerpt($string){
        substr($string, 0, 10);
        return $string . "...";
    }
    function kunci($data){
        global $link;
        return mysqli_real_escape_string($link, $data);
    }

     

?>