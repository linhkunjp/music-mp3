<div class="profile">
    <a>
        <img src="./images/0.webp" class="cd-thumb">
    </a>
    <span>Gia Linh</span>
    <div class="profile-vip ">
        <span class="bg-warning text-dark btn">Nâng cấp vip</span>
        <span class="bg-active text-white btn">Nhập code vip</span>
        <i class="btn fa-ellipsis-h fas fw-bold"></i>
    </div>
</div>
<div class="music-option">
    <ul>
        <li class="tab-item active">Tổng quan</li>
        <li class="tab-item">Bài hát</li>
        <li class="tab-item">Playlist</li>
        <li class="tab-item">Nghệ sĩ</li>
        <li class="tab-more fs-2">
            <i class="fas fa-ellipsis-h"></i>
        </li>
    </ul>
</div>

<div class="option-all tab-pane active" style="background-color: transparent;">
    <div class="mb-5">
        <?php include("option/option-music.php"); ?>
    </div>
    <?php include("option/option-playlist.php"); ?>
    <div class="mb-5">
        <?php include("option/option-singer.php"); ?>
    </div>
</div>
<div class="option-music tab-pane">
    <?php include("option/option-music.php"); ?>
</div>
<div class="option-playlist tab-pane ">
    <?php include("option/option-playlist.php"); ?>
</div>
<div class="option-singer tab-pane">
    <?php include("option/option-singer.php"); ?>
</div>