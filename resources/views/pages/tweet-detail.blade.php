@extends('layouts.sender')

@section('title')
    Tweet of {{ $tweets->name }}
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="twitter-card">
            <div class="d-flex align-items-center mb-2 control-back" onclick="window.history.back()">
                <div class="flex-shrink-0">
                    <img src="{{ url('./images/arrow.svg') }}" alt="..." height="30px" width="30px">
                </div>
                <div class="flex-grow-1 ms-3 txt-control">
                    Tweet
                </div>
            </div>
            <div class="card shadow-lg">
                <div class="head-card d-flex">
                    <img src="{{ url('./images/profile.png') }}" alt="" class="profile">
                    <p class="fc-white">{{ $tweets->name }}</p>
                    <img src="{{ url('./images/twitter-logo.svg') }}" alt="" class="ms-auto twitter">
                </div>
                <div class="text-sender">
                    <p>{{ $tweets->description }}</p>
                </div>
                <p class="time-stamp">10AM - 12 April, 2022</p>
                <div class="twit-stats d-flex">
                    <p class="me-3"><strong>4.1K</strong> likes</p>
                    <p class="me-3"><strong>4.1K</strong> replies</p>
                    <p class="me-3"><strong>4.1K</strong> retweets</p>
                </div>
            </div>
        </div>
    </div>
@endsection
