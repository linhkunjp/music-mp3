<?php
include('../../config/config.php');
$music_id = $_GET['music_id'];

$name = $_POST['music_name'];
$singer = $_POST['music_singer'];

$anh = $_FILES['music_img']['name'];
$anh_tmp = $_FILES['music_img']['tmp_name'];
$anh = time() . '_' . $anh;

$file_name = $_FILES['music_path']['name'];
$extent_file = "mp3";
$pattern = '#.+\.(mp3)$#i';

$source = $_FILES['music_path']['tmp_name'];
$dest = "music/" . $_FILES['music_path']['name'];


if (isset($_POST['addmusic'])) {
    // thêm 
    $sql_add = "INSERT INTO tbl_music(music_img,music_name,music_path,music_singer) VALUE ('" . $anh . "','" . $name . "','" . $dest . "','" . $singer . "')";
    mysqli_query($mysqli, $sql_add);

    move_uploaded_file($anh_tmp, 'uploads/' . $anh);
    move_uploaded_file($source, '../../../music/' . $file_name);

    header('Location:../../index.php?action=qlmusic&query=them');
} elseif (isset($_POST['editmusic'])) {
    // sủa 
    if (!empty($_FILES['music_img']['name'])) {
        move_uploaded_file($anh_tmp, 'uploads/' . $anh);
        move_uploaded_file($source, '../../../music/' . $file_name);

        $sql_update = "UPDATE tbl_music SET music_img='" . $anh . "',music_name='" . $name . "',music_path='" . $dest . "',music_singer='" . $singer . "' WHERE music_id='$_GET[idmusic]'";

    } else {

        $sql_update = "UPDATE tbl_music SET music_name='" . $name . "',music_singer='" . $singer . "' WHERE music_id='$_GET[idmusic]'";

    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=qlmusic&query=them');
} else {
    $id = $_GET['idmusic'];
    $sql = "SELECT * FROM tbl_music WHERE music_id = '$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['music_img']);
        unlink('../../../music/' . $row['music_path']);
    }
    $sql_xoa = "DELETE FROM tbl_music WHERE music_id='" . $id . "' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=qlmusic&query=them');
}


?>