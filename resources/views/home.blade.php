@extends('layouts.app')

@section('content')
<div id="app">
    <app upload="{{ json_encode($upload ?? '')}}"></app>
</div>
@endsection
