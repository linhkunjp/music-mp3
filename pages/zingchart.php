<div class="zingchart-headding">
    #zingchart
</div>
<ul class="mt-3">
    <?php
    $music = "SELECT * FROM tbl_music LIMIT 10";
    $query = mysqli_query($mysqli, $music);
    while ($row = mysqli_fetch_array($query)) {
        ?>
        <li class="songs-item item" data-id="<?php echo $row['music_id'] ?>">
            <div class="songs-item-first active">
                <span class="songs-item-stt ">
                    <?php echo $row['music_stt'] ?>
                </span>
                <span class="songs-item-line">-</span>
                <div class="position-relative">
                    <img src="admin/modules/qlmusic/uploads/<?php echo $row['music_img'] ?>" class="songs-item-img">
                    <div class="cs-playbtn play" data-id="<?php echo $row['music_id'] ?>" data-type="pause"><i
                            class=" fas fa-play"></i>
                    </div>
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
            <div class="songs-item-end mc-volume">
                <span class="songs-item_list"><i class="fas fa-photo-video"></i></span>
                <span class="songs-item_list mx-3"><i class="fas fa-microphone"></i></span>
                <span class="songs-item_list icon-heart d-flex" data-id="<?php echo $row['music_id'] ?>">
                    <i class="fas fa-heart"></i>
                    <i class="far fa-heart"></i>
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
<div class="zingchart-more">
    <span>Xem
        top 100</span>
</div>
<div class="zingchart-bxh">Bảng Xếp Hạng Tuần</div>
<div class="row">
    <div class="col col-4 zingchart-list">
        <div class="zingchart-item">
            <span class="ps-4 fs-2 ">Việt Nam</span>
            <ul>
                <?php
                $music = "SELECT * FROM tbl_music LIMIT 5";
                $query = mysqli_query($mysqli, $music);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <li class="border-0 songs-item">
                        <div class="d-flex">
                            <span class=" songs-item-stt" style="width: 26px;">
                                <?php echo $row['music_stt'] ?>
                            </span>
                            <span class=" songs-item-line">-</span>
                        </div>
                        <div class="d-flex align-items-center flex-fill">
                            <div class="position-relative">
                                <img src="admin/modules/qlmusic/uploads/<?php echo $row['music_img'] ?>"
                                    class="songs-item-img">
                            </div>
                            <div class=" songs-item-content ms-4">
                                <h3 class="fs-14 ">
                                    <?php echo $row['music_name'] ?>
                                </h3>
                                <span>
                                    <?php echo $row['music_singer'] ?>
                                </span>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <div class="zingchart-more m-0">
                <span>Xem tất cả</span>
            </div>
        </div>
    </div>
    <div class="col col-4 zingchart-list">
        <div class="zingchart-item">
            <span class="ps-4 fs-2">US-UK</span>
            <ul>
                <?php
                $music = "SELECT * FROM tbl_music LIMIT 5";
                $query = mysqli_query($mysqli, $music);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <li class="border-0 songs-item">
                        <div class="d-flex">
                            <span class="songs-item-stt" style="width: 26px;">
                                <?php echo $row['music_stt'] ?>
                            </span>
                            <span class="songs-item-line">-</span>
                        </div>
                        <div class="d-flex align-items-center flex-fill">
                            <div class="position-relative">
                                <img src="admin/modules/qlmusic/uploads/<?php echo $row['music_img'] ?>"
                                    class="songs-item-img">
                            </div>
                            <div class="songs-item-content ms-4">
                                <h3 class="fs-14 ">
                                    <?php echo $row['music_name'] ?>
                                </h3>
                                <span>
                                    <?php echo $row['music_singer'] ?>
                                </span>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <div class="zingchart-more m-0">
                <span>Xem tất cả</span>
            </div>
        </div>
    </div>
    <div class="col col-4 zingchart-list">
        <div class="zingchart-item">
            <span class="ps-4 fs-2">K-Pop</span>
            <ul>
                <?php
                $music = "SELECT * FROM tbl_music LIMIT 5";
                $query = mysqli_query($mysqli, $music);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <li class="border-0 songs-item">
                        <div class="d-flex">
                            <span class=" songs-item-stt" style="width: 26px;">
                                <?php echo $row['music_stt'] ?>
                            </span>
                            <span class=" songs-item-line">-</span>
                        </div>
                        <div class="d-flex align-items-center flex-fill">
                            <div class="position-relative">
                                <img src="admin/modules/qlmusic/uploads/<?php echo $row['music_img'] ?>"
                                    class="songs-item-img">
                            </div>
                            <div class="songs-item-content ms-4">
                                <h3 class=" fs-14">
                                    <?php echo $row['music_name'] ?>
                                </h3>
                                <span>
                                    <?php echo $row['music_singer'] ?>
                                </span>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <div class="zingchart-more m-0">
                <span>Xem tất cả</span>
            </div>
        </div>
    </div>
</div>