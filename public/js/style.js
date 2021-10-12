(function ($) {

    // FilePondの設定
    $.fn.filepond.registerPlugin(FilePondPluginImagePreview);

    // 投稿画面
    $('select[id="subject"]').on('change', function () {
        var target = $('select[id="target"]');
        target.removeAttr('disabled');
        // 初めて選択した時だけoptionを追加する
        if (target.children('option').length == 1) {
            target.append($('<option>').html("小学生").val("小学生"));
            target.append($('<option>').html("中学生").val("中学生"));
            target.append($('<option>').html("高校生").val("高校生"));
        }
    })
    $('select[id="target"]').on('change', function () {
        var target = $(this).val();
        var subject = $('select[id="subject"]').val();
        // targetとsubjectに対応したデータを取得する
        $.ajax({
            type: "GET",
            url: "/js/getAreas",
            datatype: "json",
            data: {
                target: target,
                subject: subject
            },
            success: function (data) {
                var area = $('select[id="area"]');
                area.removeAttr('disabled');
                // 一度全てのoptionタグを削除
                area.empty();
                area.append($('<option>').html('分野を選択してください').val(''));
                data.forEach((value, index, array) => {
                    area.append($('<option>').html(value['name']).val(value['id']));
                });
            },
            error: function (data) {
                alert('エラーです。画面をリロードしてもう一度やり直してください');
            }
        });
    })
    $('.image_pond').filepond();
}(jQuery));