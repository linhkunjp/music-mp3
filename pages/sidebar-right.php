<div class="sidebar-right text-white d-flex flex-column">
    <div class="d-flex align-items-center list-option">
        <div class="d-flex fs-5 rounded-pill align-items-center bg-active option-menu">
            <div class="px-4 py-2 rounded-pill">Danh sách phát</div>
            <div class="mx-3">Nghe gần đây</div>
        </div>
    </div>
    <div class="list-song">
        <div class="current-song">
            <?php
            $music = "SELECT * FROM tbl_music ORDER BY music_id DESC";
            $query = mysqli_query($mysqli, $music);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="cs-list current-song-item item" data-id="<?php echo $row['music_id'] ?>">
                    <div class="position-relative cs-img">
                        <img src="admin/modules/qlmusic/uploads/<?php echo $row['music_img'] ?>" class="cs-list-img">
                        <div class="cs-playbtn play" data-id="<?php echo $row['music_id'] ?>" data-type="pause"><i
                                class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <span class="fs-14">
                            <?php echo $row['music_name'] ?>
                        </span>
                        <span class="cs-author">
                            <?php echo $row['music_singer'] ?>
                        </span>
                    </div>
                    <div class="fs-5 ms-auto cs-list-more">
                        <span class="icon-heart" data-id="<?php echo $row['music_id'] ?>">
                            <i class="fas fa-heart"></i>
                            <i class="far fa-heart"></i>
                        </span>
                        <span>
                            <i class="fas fa-ellipsis-h "></i>
                        </span>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="next-song">
            <h3 class="fs-4 ms-3 my-4 next-song-tit">Tiếp theo</h3>
            <ul class="music-list">
                <?php
                $music = "SELECT * FROM tbl_music ORDER BY music_singer DESC";
                $query = mysqli_query($mysqli, $music);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <li class="cs-list next-song-item item" data-id="<?php echo $row['music_id'] ?>">
                        <div class="position-relative cs-img">
                            <img src="admin/modules/qlmusic/uploads/<?php echo $row['music_img'] ?>" class="cs-list-img">
                            <div class="cs-playbtn play" data-id="<?php echo $row['music_id'] ?>" data-type="pause"><i
                                    class="fas fa-play"></i></div>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="fs-14">
                                <?php echo $row['music_name'] ?>
                            </span>
                            <span class="cs-author">
                                <?php echo $row['music_singer'] ?>
                            </span>
                        </div>
                        <div class="fs-5 me-3 ms-auto cs-list-more">
                            <span class="icon-heart" data-id="<?php echo $row['music_id'] ?>">
                                <i class="fas fa-heart"></i>
                                <i class="far fa-heart"></i>
                            </span>
                            <span>
                                <i class="fas fa-ellipsis-h "></i>
                            </span>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>