<?php
$sql_list_sp = "SELECT * FROM tbl_music ORDER BY music_id DESC";
$query_list_sp = mysqli_query($mysqli, $sql_list_sp);
?>
<div class="px-4 py-4">
  <h3 class="pb-3">Danh sách </h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tên bài hát</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Ca sĩ</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      while ($row = mysqli_fetch_array($query_list_sp)) {
        $i++;
        ?>
        <tr>
          <td>
            <?php echo $i ?>
          </td>
          <td>
            <?php echo $row['music_name'] ?>
          </td>
          <td><img src="modules/qlmusic/uploads/<?php echo $row['music_img'] ?>" width="150px"></td>
          <td>
            <?php echo $row['music_singer'] ?>
          </td>
          <td>
            <a href="modules/qlmusic/process.php?idmusic=<?php echo $row['music_id'] ?>"
              onclick="return confirm('Bạn có muốn xoá không');">Xóa</a> |
            <a href="?action=qlmusic&query=sua&idmusic=<?php echo $row['music_id'] ?>">Sửa</a>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>