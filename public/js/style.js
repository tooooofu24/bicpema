$(function () {

    // FilePondの設定
    $.fn.filepond.registerPlugin(FilePondPluginImagePreview);
    $.fn.filepond.registerPlugin(FilePondPluginFileValidateType);

    var image_pond = $('.image_pond');
    image_pond.filepond();
    image_pond.filepond('labelIdle', '<span class="filepond--label-action">サムネイル画像を選択してください</span>');
    image_pond.filepond('acceptedFileTypes', ['image/*']);
    image_pond.filepond('storeAsFile', true);
    image_pond.filepond('labelFileTypeNotAllowed', '画像ファイルを選択してください！');
    image_pond.filepond('fileValidateTypeLabelExpectedTypes', '{lastType}形式のファイルがアップロードできます');
    var js_pond = $('.js_pond');
    js_pond.filepond();
    js_pond.filepond('labelIdle', '<span class="filepond--label-action">JSファイルを選択してください</span>');
    js_pond.filepond('acceptedFileTypes', ['text/javascript']);
    js_pond.filepond('storeAsFile', true);
    js_pond.filepond('labelFileTypeNotAllowed', 'JSファイルを選択してください！');
    js_pond.filepond('fileValidateTypeLabelExpectedTypes', '{lastType}形式のファイルがアップロードできます');

    //リサイズされたときの処理
    var timer = false;
    $(window).on('resize', function () {
        // run画面以外の時と全画面の時はリロードしない
        if (location.pathname.substr(-3, 3) !== 'run' || document.fullscreen) {
            return false;
        }
        if (timer !== false) {
            clearTimeout(timer);
        }
        // 200ms毎にリロードしているか判定
        timer = setTimeout(function () {
            location.reload()
        }, 200);
    })

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

    // 実行画面全画面表示
    $('.expand').on('click', function () {
        var canvas = document.getElementById('canvas').firstElementChild;
        canvas.requestFullscreen();
    })


    // var sidebarToggle = $('#sidebar-toggle');
    // sidebarToggle.addEventListener('click', function () {
    //     if (sidebar.classList.contains('contracted')) {
    //         sidebar.classList.remove('contracted');
    //         localStorage.removeItem('sidebar', 'contracted');
    //     } else {
    //         sidebar.classList.add('contracted');
    //         localStorage.setItem('sidebar', 'contracted');
    //     }
    // });
});