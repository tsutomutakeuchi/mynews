{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'My プロフィールの新規作成'を埋め込む --}}
@section('title', 'My プロフィールの新規作成edit')

{{-- admin.profile.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィールedit</h2>
            </div>
        </div>
    </div>
@endsection