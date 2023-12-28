<div class="music-control text-white px-3">
    <div class="row">
        <div class="col d-flex ps-4 music-control-item" style="max-width: 25%;">
            <div class="mc_left d-flex align-items-center">
                <div>
                    <img class="mc-img cd-thumb" id="display-img"></img>
                </div>
                <div class="d-flex flex-column mx-4 cursor">
                    <span id="inplay-title">No title</span>
                    <span class="mc-author" id="inplay-description">No singer</span>
                </div>
                <div class="d-flex m-3 align-items-center action-control">
                    <div class="me-4 icon-hover inplay-heart">
                        <i class="fas fa-heart p-3"></i>
                        <i class="far fa-heart p-3"></i>
                    </div>
                    <i class="fas fa-ellipsis-h p-3 icon-hover"></i>
                </div>
            </div>
        </div>
        <div class="col music-control-action">
            <div class="d-flex flex-column justify-content-center music-control-item" style="height: 90px;">
                <div class="d-flex m-auto mb-3 mc-icon mt-0 control-item">
                    <i class="fas fa-random icon-hover btn-random"></i>
                    <div id="prev-btn">
                        <i class="fas fa-caret-left icon-hover"></i>
                    </div>
                    <div class="icon-play" id="play-btn" data-value="play">
                        <i class="fas fa-play icon-play"></i>
                    </div>
                    <div id="next-btn">
                        <i class="fas fa-caret-right icon-hover"></i>
                    </div>
                    <i class="fas fa-redo icon-hover btn-repeat"></i>
                </div>
                <div class="d-flex m-auto mc-progress my-0 align-items-center" style="width: 80%;">
                    <span id="currentTime">00:00</span>
                    <input id="playBackSlider" value="0" class=" mx-2" type="range">

                    <span id="inplay-duration">00:00</span>
                </div>
                <audio id="audio" src="./music/a.mp3"></audio>
            </div>
        </div>
        <div class="col d-flex justify-content-end m-auto action-control" style="max-width: 25%;">
            <div class="mc-volume d-flex align-item-center">
                <i class="fas fa-photo-video icon-hover"></i>
                <i class="fas fa-microphone icon-hover"></i>
                <i class="far fa-square icon-hover"></i>
                <div class="align-items-center d-flex volume-progress">
                    <span id="vol-icon"><i class="fa fa-volume-up"></i></span> <input type="range" value="100"
                        id="volume">
                </div>
            </div>
        </div>
    </div>
</div>