<div class="pt-3 px-4">
  <h3 class="p-3">Thêm bài hát</h3>
  <form class="border p-3 w-50" autocomplete="off" method="POST" action="modules/qlmusic/process.php"
    enctype="multipart/form-data">
    <div class="form-group">
      <label for="">Tên bài hát</label>
      <input type="text" name="music_name" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Ảnh</label>
      <input type="file" name="music_img" class="form-control">
    </div>
    <div class="form-group">
      <label for="">File nhạc</label>
      <input type="file" name="music_path" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Ca sĩ</label>
      <input type="text" name="music_singer" class="form-control">
    </div>
    <div class="pt-2 text-center">
      <input class="p-2" type="submit" name="addmusic" value="Thêm sản phẩm">
    </div>
  </form>
</div>