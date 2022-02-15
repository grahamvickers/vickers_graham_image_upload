@extends('layouts.app')

@section('content')
<div id="app">
    <app :image="{{ json_encode($image ?? '')}}"></app>
</div>
@endsection
