@extends('layouts.navigation')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="fs-4 m-0">投稿</h1>
    </div>
    <div class="card-body">
        <form action="{{route('submit.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <div class="form-group">
                    <label for="title">タイトル<span class="badge bg-primary mx-2">必須</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                        <input type="text" class="form-control" name="title" id="title" placeholder="プログラムのタイトルを入力してください" required>
                    </div>
                    @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <div class="form-group mb-3">
                        <label for="subject">科目<span class="badge bg-primary mx-2">必須</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-flask"></i></span>
                            <select class="form-select" name="subject" id="subject" required>
                                <option disabled selected>科目を選択してください</option>
                                <option value="物理">物理</option>
                                <option value="科学">科学</option>
                                <option value="生物">生物</option>
                                <option value="地学">地学</option>
                                <option value="数学">数学</option>
                            </select>
                        </div>
                        @error('subject')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="target">対象生徒<span class="badge bg-primary mx-2">必須</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
                            <select class="form-select" name="target" id="target" disabled required>
                                <option>対象生徒を選択してください</option>
                            </select>
                        </div>
                        @error('target')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="area">分野<span class="badge bg-primary mx-2">必須</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                            <select class="form-select" name="area_id" id="area" disabled required>
                                <option>分野を選択してください</option>
                            </select>
                        </div>
                        @error('area_id')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="comment">説明</label>
                        <textarea class="form-control" rows="9" id="comment" name="comment" placeholder="シミュレーションの概要を入力してください"></textarea>
                        @error('comment')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col">
                    <div class="form-group">
                        <label for="js">プログラムファイル<span class="badge bg-primary mx-2">必須</span></label>
                        <input type="file" class="js_pond" name="js" id="js">
                        @error('js')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="img">サムネイル画像</label>
                        <input type="file" class="image_pond" name="img" id="img">
                        @error('img')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">投稿</button>
            </div>
        </form>
    </div>
</div>
@endsection