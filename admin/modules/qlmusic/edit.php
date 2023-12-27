<?php
$sql_sua_sp = "SELECT * FROM tbl_music WHERE music_id='$_GET[idmusic]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);

?>
<div class="pt-3 px-4">
  <h3 class="p-3">Sửa bài hát</h3>
  <?php
  while ($row = mysqli_fetch_array($query_sua_sp)) {
    ?>
    <form class="border p-3 w-50" method="POST"
      action="modules/qlmusic/process.php?idmusic=<?php echo $row['music_id'] ?>" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Tên bài hát</label>
        <input type="text" value="<?php echo $row['music_name'] ?>" name="music_name" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" name="music_img" class="form-control">
      </div>
      <div class="form-group justify-content-center p-3">
        <img src="modules/qlmusic/uploads/<?php echo $row['music_img'] ?>" width="150px">
      </div>
      <div class="form-group">
        <label for="">File nhạc</label>
        <input type="file" name="music_path" class="form-control">
      </div>
      <div class="form-group">
        <label for="">sCa sĩ</label>
        <input type="text" value="<?php echo $row['music_singer'] ?>" name="music_singer" class="form-control">
      </div>
      <div class="pt-2 text-center">
        <input class="p-2" type="submit" name="editmusic" value="Sửa">
      </div>
    </form>
    <?php
  }
  ?>
</div>