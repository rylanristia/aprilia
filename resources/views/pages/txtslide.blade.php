@extends('layouts.txtslider')

@section('content')
    <div id="main">
        <h1>Tomorrow X Together</h1>
        <div class="content">
        </div>
        <div class="buttons">
            <button class="next" onclick="go(-1)"></button>
            <button class="prev" onclick="go(1)"></button>
        </div>
    </div>
@endsection
