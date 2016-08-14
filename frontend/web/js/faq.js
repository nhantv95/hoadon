var baseurl;
baseurl = $("#urlbasefaq").val();
var id = $("#idcauhoi").val();
jQuery(document).ready(function ($) {

    $(function () {
        $("form.ajax").submit(function () {
            $.post($(this).attr("action"), $(this).serialize(), function (response) {
                if (response == "ok") {
                    $(":checked").each(function () {
                        var idtl = $(this).val();
                        if (idtl != 'on') {
                            kt = 1;
                        }
                        if (kt == 1) {
                            $.ajax({
                                url: baseurl + '/VOTE',
                                data: { ID_CHOI: id, ID_TLOI: idtl },
                                async: false
                            })
                        }
                    });
                    if (kt == 1) {
                        xemketqua();
                        //alert('Cảm ơn đóng góp của bạn!');
                        bquyet = 'bquyet'
                        var date = new Date();
                        var minutes = 30;
                        date.setTime(date.getTime() + (minutes * 60 * 1000));
                        $.cookie('bquyet', bquyet, { expires: date });
                    } else {
                        alert('Bạn chưa chọn check!');
                        return;
                    }
                    $('#modal_captcha').modal('hide');
                } else {
                    // load lai capchat cung loi
                    $.ajax({
                        url: baseurl + '/CAPTCHAT',
                        async: false,                        
                    }).done(function (data) {
                        $("#updatecap").html(data);
                    })
                }
            });
            return false;
        });
    });

    $("#btnbquyet").bind("click", function (event) {
        var bquyet = $.cookie('bquyet');
        if (bquyet == 'bquyet') {
            xemketqua();
            return;
        }
        var kt = 0;
        $(":checked").each(function () {
            var idtl = $(this).val();
            if (idtl != 'on') {
                kt = 1;
            }
        })
        if (kt == 1)
            $('#modal_captcha').modal('show');
        else
            alert('Bạn chưa chọn check!');
        //var kqtam = $("input:radio[name=radiotloi]:checked").val();       
    });

    $("#btnResult").bind("click", function () {
        xemketqua();
    });

    function xemketqua() {       
        $.ajax({ url: baseurl + '/FAQRESULT', data: { ID_CHOI: id } }
               ).done(function (data) {
                   $("#myModal").empty();
                   $("#myModal").html(data);
                   $('#myModal').modal('show');
               });
    }
});