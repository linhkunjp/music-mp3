
var audio = new Audio();
var slider;
var currentPlayID;

$(function() {
    $('.play').click(function() {
        var _this = $(this)
        var id = $(this).attr('data-id')
        var type = $(this).attr('data-type')
        if (type == 'pause') {
            $.ajax({
                url: './get_data.php',
                method: "POST",
                data: { id: id },
                dataType: 'json',
                error: err => {
                    console.error(err)
                    alert("An error occurred");
                },
                success: function(resp) {
                    if (resp.status == 'success') {
                        var data = resp.data
                        currentPlayID = data.music_id
                        $('#display-img').attr('src', data.music_img);
                        $('#inplay-title').text(data.music_name);
                        $('#inplay-description').text(data.music_singer);
                        audio.setAttribute('src', data.music_path)
                        audio.currentTime = 0;
                        audio.play();
                        
                        $('.play').attr('data-type', 'pause')
                        _this.attr('data-type', 'play')
                        
                        $('.play').html('<i class="fa fa-play"></i>')
                        $('.play[data-id="'+id+'"]').html('<img class="cs-playbtn-img playing"src="./images/icon-playing.gif">')  

                        $('.cd-thumb').css('-webkit-animation','10s linear infinite spinner-border')

                        $('.mc_left').css('transform','translateX(10px)')

                        $('#play-btn').attr('data-value', 'pause')
                        $('#play-btn').html('<i class="fa fa-pause"></i>').focus()
                        setTimeout(() => {
                            var duration = String(Math.floor(audio.duration / 60)).padStart(2, '0') + ":" + String(Math.floor(60 * Math.abs((audio.duration / 60) - Math.floor(audio.duration / 60)))).padStart(2, '0')
                            $('#inplay-duration').text(duration)
                        }, 500)

                        slider = setInterval(() => {
                            var current_slide = (audio.currentTime / audio.duration) * 100;
                            $('#playBackSlider').val(current_slide)
                            $('#currentTime').text(String(Math.floor(audio.currentTime / 60)).padStart(2, '0') + ":" + String(Math.floor(60 * Math.abs((audio.currentTime / 60) - Math.floor(audio.currentTime / 60)))).padStart(2, '0'))
                        }, 500)
                    } else {
                        console.error(err)
                        alert("An error occurred");
                    }
                    setTimeout(() => {

                    }, 500)
                }
            })
        }
    })
    $('.item').click(function() {
        var id = $(this).attr('data-id')
        $('.item').removeClass('active')
        $('.item[data-id="'+id+'"]').addClass('active')
        $('.next-song-item[data-id="'+id+'"]').remove()
        $('.current-song-item[data-id="'+id+'"]').addClass('d-flex')
        $('.next-song-tit').addClass('d-flex')
    })

    $('#play-btn').click(function() {
        if (audio.src != '') {
            var action = $(this).attr('data-value')
            if (action == "pause") {
                $(this).attr('data-value', 'play')
                $('#play-btn').html('<i class="fa fa-play"></i>')
                $('.play').html('<i class="fa fa-play"></i>')
                $('.mc_left').css('transform','translateX(0px)')
                // $('.cd-thumb').stop(true)
                audio.pause();

            } else {
                $(this).attr('data-value', 'pause')
                $('#play-btn').html('<i class="fa fa-pause"></i>')
                $('.play[data-id="' + currentPlayID + '"]').html('<img class="cs-playbtn-img playing"src="./images/icon-playing.gif">')
                $('.mc_left').css('transform','translateX(10px)')
                // $('.cd-thumb').animate(
                //     {rotation: 360},
                //     {
                //         duration: 10000,
                //         step: function(now) {
                //                     $(this).css({"transform": "rotate("+now+"deg)"});
                //                 },
                //     }
                //     );
                audio.play();

            }
        }
    })

    $('#playBackSlider').on('mousedown', function() {
        if (audio.src != '') {
            clearInterval(slider)
            $(this).on('mousemove', function() {
                audio.pause()
                audio.currentTime = (audio.duration * ($(this).val() / 100));
                $('#currentTime').text(String(Math.floor(audio.currentTime / 60)).padStart(2, '0') + ":" + String(Math.floor(60 * Math.abs((audio.currentTime / 60) - Math.floor(audio.currentTime / 60)))).padStart(2, '0'))
            })
        }
    })
    $('#playBackSlider').on('mouseup', function() {
        if (audio.src != '') {
            $(this).off('mousemove')
            audio.currentTime = (audio.duration * ($(this).val() / 100));
            $('#currentTime').text(String(Math.floor(audio.currentTime / 60)).padStart(2, '0') + ":" + String(Math.floor(60 * Math.abs((audio.currentTime / 60) - Math.floor(audio.currentTime / 60)))).padStart(2, '0'))
            if ($('#play-btn').attr('data-value') == 'pause') {
                audio.play()
                slider = setInterval(() => {
                    var current_slide = (audio.currentTime / audio.duration) * 100;
                    $('#playBackSlider').val(current_slide)
                    $('#currentTime').text(String(Math.floor(audio.currentTime / 60)).padStart(2, '0') + ":" + String(Math.floor(60 * Math.abs((audio.currentTime / 60) - Math.floor(audio.currentTime / 60)))).padStart(2, '0'))
                }, 500)
            }
        }
    })

    $('#volume').on('mousedown', function(e) {
        $(this).on('mousemove', function() {
            var vol = $(this).val() / 100
            audio.volume = vol
            if (vol == 0) {
                $('#vol-icon').html('<i class="fas fa-volume-mute"></i>')
            } else if (vol < .5) {
                $('#vol-icon').html('<i class="fas fa-volume-down"></i>')
            } else {
                $('#vol-icon').html('<i class="fa fa-volume-up"></i>')
            }
        })
    })
    $('#volume').on('mouseup', function(e) {
        $(this).off('mousemove')
    })

    $('#next-btn').click(function() {
            if (currentPlayID > 0) {
                var currentIndex = $('#music-list .item[data-id="' + currentPlayID + '"]').index();
                if (!!$('#music-list .item').eq(currentIndex + 1)) {
                    $('#music-list .item').eq(currentIndex + 1).find('.play').trigger('click')
                }
            }
        })

    $('#prev-btn').click(function() {
        if (currentPlayID > 0) {
            var currentIndex = $('#music-list .item[data-id="' + currentPlayID + '"]').index();
            if ((currentIndex - 1) == -1) {
                audio.currentTime = 0
            } else {
                if (!!$('#music-list .item').eq(currentIndex - 1)) {
                    $('#music-list .item').eq(currentIndex - 1).find('.play').trigger('click')
                }
            }
        }
    })

    $('.btn-random').click(function() {
        if (audio.src != '') {
            $(this).toggleClass('action');
                if($(this).hasClass('action')){
                    $(this).css('color','var(--primary-color)')
                    var newIndex = Math.floor(Math.random() * $('#music-list .item').length)
                        $('#music-list .item').eq(newIndex).find('.play').trigger('click')            
                    console.log($('#music-list .item').eq(newIndex))
                }else{
                    $(this).css('color','#fff')
                }
        }
    })

    $('.btn-repeat').click(function() {
        if (audio.src != '') {
            $(this).toggleClass('action');
                if($(this).hasClass('action')){
                    $(this).css('color','var(--primary-color)')
                    audio.loop = true;
                }else{
                    $(this).css('color','#fff')
                    audio.loop = false;
                }
        }
    })

    $('.icon-heart').click(function(){
        var id = $(this).attr('data-id')
        $('.icon-heart[data-id="'+id+'"] i:first-child').toggle()
        $('.icon-heart[data-id="'+id+'"] i:last-child').toggle()
    })

    $('.inplay-heart').click(function(){
        $('.inplay-heart i').toggle()
    })

      audio.onended = function() {
        $('#next-btn').trigger('click')
        if (audio.src != '') {
            $('#play-btn').html('<i class="fa fa-play"></i>')
            $('#play-btn').attr('data-value', 'play')
            audio.pause();
            audio.currentTime = 0;
        }
    }
})