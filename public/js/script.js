$(document).ready(function () {
    $("#watchvideo").modal({ backdrop: "static", keyboard: false });
    $("#watchvideo").modal("show");
    var owl = $(".owl-carousel");

    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none",
    });

    $(".zoom").hover(
        function () {
            $(this).addClass("transition");
        },
        function () {
            $(this).removeClass("transition");
        }
    );

    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
        },
    });

    $(".carousel").carousel({
        interval: 8000,
    });

    $(".play").click(function () {
        if ($(this).parent().prev().get(0).paused) {
            $(this).parent().prev().get(0).play();
            $(this).parent().prev().removeClass("blurEffect");
            $(".content").hide();
        }
    });

    $(".video").on("ended", function () {
        $(this).addClass("blurEffect");
        $(".content").show();
    });

    // Subscription Form

    $(".subscription-form").on("submit", function (e) {
        e.preventDefault();
        let form = $(this);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        // console.log($(this).serialize();
        $.ajax({
            type: "POST",
            url: "subscription",
            data: form.serialize(),
            success: function (data) {
                $("#subscription-modal").modal("show");
            },
        });
    });

    $(document).ready(function(){
        $('video').bind('contextmenu',function() { return false; });
     });

    $("#send-code").on("submit", function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        // console.log($(this).serialize();
        $.ajax({
            type: "POST",
            url: "verify_code",
            data: { code: $("input[name=code]").val() },
            success: function (data) {
                if (data.status == true) {
                    $("#watchvideo").modal('hide');
                    $('#movie').trigger('play');
                } else {
                    $("#watch_video_alert").show();
                    setTimeout(function () {
                        $("#watch_video_alert").hide();
                    }, 5000);
                }

                // $('#subscription-modal').modal('show');
            },
        });
    });
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
});
