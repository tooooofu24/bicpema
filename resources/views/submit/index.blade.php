@extends('layouts.navigation')

@section('content')
<div class="container">
    <div class="card col-10 col-md-8 col-lg-7 mx-auto">
        <div class="card-header text-center">
            <h1 class="mb-0 h3">コード投稿</h1>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="post_name">タイトル<span class="badge bg-primary mx-2">必須</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" class="form-control" name="name" id="post_name" placeholder="プログラムのタイトルを入力してください" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="subject">科目<span class="badge bg-primary mx-2">必須</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-flask"></i></span>
                        <select class="form-select" name="subject" id="subject">
                            <option disabled selected>科目を選択してください</option>
                            <option value="物理">物理</option>
                            <option value="科学">科学</option>
                            <option value="生物">生物</option>
                            <option value="地学">地学</option>
                            <option value="数学">数学</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="target">対象生徒<span class="badge bg-primary mx-2">必須</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
                        <select class="form-select" name="target" id="target" disabled>
                            <option>対象生徒を選択してください</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="area">分野<span class="badge bg-primary mx-2">必須</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-book"></i></span>
                        <select class="form-select" name="area" id="area" disabled required>
                            <option>分野を選択してください</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="comment">説明</label>
                    <textarea class="form-control" rows="4" id="comment" name="comment" placeholder="シミュレーションの概要を入力してください。"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="js">プログラムファイル<span class="badge bg-primary mx-2">必須</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-file-code"></i></span>
                        <input type="text" id="js" class="form-control" name="js" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="img">サムネイル画像</label>
                    <input type="file" class="image_pond" name="img" id="img">
                    <!-- <span class="input-group-text"><i class="fas fa-file-image"></i></span> -->
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection