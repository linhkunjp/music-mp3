<div class="d-flex align-items-center option-heading music-header">
    <h3>Bài Hát</h3>
    <div class="ms-auto d-flex">
        <div class="option-heading-all">
            <span>Tất cả</span>
            <i class="fas fa-chevron-right mt-0"></i>
        </div>
        <div class="btn text-white option-heading-upload">
            <i class="fas fa-upload me-2"></i>
            Tải lên
        </div>
        <div class="btn text-white option-heading-play">
            <i class="fas fa-play me-2"></i>
            Phát tất cả
        </div>
    </div>
</div>
<div class="grid row music-list">
    <ul class="mt-3 px-4" id="music-list">
        <?php
        $music = "SELECT * FROM tbl_music";
        $query = mysqli_query($mysqli, $music);
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <li class="songs-item item" data-id="<?php echo $row['music_id'] ?>">
                <div class="songs-item-first">
                    <div class="position-relative">
                        <img src="admin/modules/qlmusic/uploads/<?php echo $row['music_img'] ?>" class="songs-item-img">
                        <div class="cs-playbtn play" data-id="<?php echo $row['music_id'] ?>" data-type="pause"><i
                                class=" fas fa-play"></i></div>
                    </div>
                    <div class="songs-item-content ms-4">
                        <h3 class="fs-14">
                            <?php echo $row['music_name'] ?>
                        </h3>
                        <span>
                            <?php echo $row['music_singer'] ?>
                        </span>
                    </div>
                </div>
                <div class="songs-item-center">
                    <span>
                        <?php echo $row['music_name'] ?>
                    </span>
                </div>
                <div class="songs-item-end">
                    <span class="songs-item_list"><i class="fas fa-photo-video"></i></span>
                    <span class="songs-item_list mx-3"><i class="fas fa-microphone"></i></span>
                    <span class="songs-item_list icon-heart d-flex " data-id="<?php echo $row['music_id'] ?>">
                        <i class="fas fa-heart fs-14"></i>
                        <i class="far fa-heart fs-14"></i>
                    </span>
                    <div>
                        <span class="songs-item_time ms-1 me-2">
                            <?php echo $row['music_duration'] ?>
                        </span>
                        <span class="songs-item_list ms-4 me-2"><i class="fas fa-ellipsis-h"></i></span>
                    </div>
                </div>
            </li>
            <?php
        }
        ?>
    </ul>
</div>