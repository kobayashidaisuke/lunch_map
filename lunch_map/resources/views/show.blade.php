@extends('layouts.default')

@section('content')
<h1>{{ $shop->name }}</h1>
<div>
    <p>{{ $shop->category->name }}</p>
    <p>{{ $shop->address }}</p>
</div>
<iframe id='map' src='https://www.google.com/maps/embed/v1/place?key=AIzaSyB0_-0ixQD6jAyT-C9o_t615TLNwwqKHgg&amp;q={{ $shop->address }}' width='100%' height='320' frameborder='0'>
</iframe>
<div>
    <a href="{{ route('shop.list') }}">一覧に戻る</a>
    | <a href="{{ route('shop.edit', ['id' =>  $shop->id]) }}">編集</a>
    {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy', $shop->id]]) }}
    {{ Form::submit('削除', ['class' => 'btn btn-outline-danger']) }}
    {{ Form::close() }}
</div>
@endsection
