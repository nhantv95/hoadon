

var HelperJs = function () {
    return {

        //Basic Map
        loading: function (name, overlay) {
       
                $('#loadDing').append("<div id='overlay' style='display: block;'></div><div id='preloader' style='display: block;'>" + "Đang tải dữ liệu..." + "</div>");
                if (overlay == 1) {
                    $('#overlay').css('opacity', 0.4).fadeIn(400, function () { $('#preloader').fadeIn(400); });
                    return false;
                }
                $('#preloader').fadeIn();       
     
        },

        //Panorama Map
        unloading: function () {
            $('#preloader').fadeOut(400, function () { $('#overlay').fadeOut(); $(this).remove(); })
            $('#loadDing').html('');
            $('#loadDing').empty();
        }

    };
}();
