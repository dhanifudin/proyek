@extends('base')

@section('title', 'Item')

@section('content')
    @foreach ($items as $item)
        <li>{{ $item['name'] }}</li>
    @endforeach
@endsection
