@extends('layouts.sender')

@section('title')
    Twitter - Aprilia's birthday
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-none d-md-block d-lg-block">
                <div class="side-menu sticky-top">
                    <img src="./images/twitter-logo.svg" alt="" class="ms-auto twitter me-lg-4 me-3 mt-4">
                    <div class="flex-column">
                        <div class="menu-bar mt-5 mb-auto">
                            <ul class="list-group">
                                <li class="list-group-item d-flex align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="./images/home.svg" alt="..." width="40px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Home
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="./images/explore.svg" alt="..." width="40px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Explore
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="./images/notification.svg" alt="..." width="40px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Notification
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="./images/message.svg" alt="..." width="40px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Message
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="./images/bookmark.svg" alt="..." width="40px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Bookmarks
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="./images/list.svg" alt="..." width="40px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Lists
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="./images/person.svg" alt="..." width="40px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Profile
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="./images/more.svg" alt="..." width="40px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            More
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-bar d-flex">
                            <img src="{{ url('./images/profile-april.svg') }}" alt="" width="50px" height="50px">
                            <p class="fc-white mt-1 ms-4">Aprilia Anjani<br><span
                                    style="color: gainsboro;">@Singularyvin</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="twit-timeline shadow-lg">
                    <div class="pt-3 ps-3 ps-lg-4 pt-lg-3 pb-2 d-flex sticky-top fc-white timeline-heading">
                        <h4 class="fc-white">Home</h4>
                        <img src="./images/twitter-star.svg" alt="" class="ms-auto twitter me-3">
                    </div>
                    <hr class="mt-1">
                    <div class="write-post d-flex">
                        <img src="{{ url('./images/profile-april.svg') }}" alt="" class="ms-4 mt-3">
                        <textarea name="" id="" cols="30" rows="6"
                            class="fc-white mt-3 ms-4 me-4">You can't do anything, you just can click on the right panel and scrolling down pril :)</textarea>
                    </div>
                    <div class="d-flex command">
                        <button class="btn btn-tweet ms-auto mx-3">Tweet</button>
                    </div>
                    <hr>
                    <div class="timeline-body ms-lg-4 me-lg-4 ms-3 me-3">
                        @foreach ($twitter as $tweet)
                            <div class="tweets">
                                <div class="head-card d-flex">
                                    <img src="{{ url('./images/profile.png') }}" alt="" class="profile">
                                    <p class="fc-white">{{ $tweet->name }}</p>
                                </div>
                                <div class="text-sender">
                                    <p>
                                        {{ Str::limit($tweet->description, 150) }}
                                        {{-- {{ $tweet->description }} --}}
                                        <a href="{{ route('twitter.show', $tweet->id) }}"
                                            class="text-decoration-none fc-blue-medium">See all</a>
                                    </p>
                                </div>
                                <p class="time-stamp">10AM - 12 April, 2022</p>
                                <div class="twit-stats d-flex">
                                    <p class="me-3"><strong>4.1K</strong> likes</p>
                                    <p class="me-3"><strong>4.1K</strong> replies</p>
                                    <p class="me-3"><strong>4.1K</strong> retweets</p>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                        <div class="card my-5 jumbotron p-4 fc-white bg-blue-dark rounded-3 shadow-sm">
                            <h5>This is the end of timeline</h5>
                            <p>How is it, you like it? now i have one more page for you. click on button below.</p>
                            <a href="{{ url('weverse') }}" class="btn btn-tweet">Next page</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlight-tweets shadow-sm sticky-top pt-1">
                    <div class="input-search mt-3 d-lg-block d-none">
                        <input type="text" class="rounded-pill form-control" placeholder="Search">
                    </div>
                    <div class="highlighted mt-3">
                        <div class="card-trends">
                            <h5 class="ms-4 fc-white pt-2 sticky-top">Tomorrow X Together</h5>
                            {{-- highlighted --}}
                            <a href="" class="tweet d-flex">
                                <img src="./images/profile.png" alt="">
                                <p>
                                    Rylanristia @rylanristia_
                                    <br> You can't do anything, just scrolling down
                                </p>
                            </a>
                            <a href="" class="tweet d-flex">
                                <img src="./images/profile.png" alt="">
                                <p>
                                    Rylanristia @rylanristia_
                                    <br> You can't do anything, just scrolling down
                                </p>
                            </a>
                            <a href="" class="tweet d-flex">
                                <img src="./images/profile.png" alt="">
                                <p>
                                    Rylanristia @rylanristia_
                                    <br> You can't do anything, just scrolling down
                                </p>
                            </a>
                            <a href="" class="tweet d-flex">
                                <img src="./images/profile.png" alt="">
                                <p>
                                    Rylanristia @rylanristia_
                                    <br> You can't do anything, just scrolling down
                                </p>
                            </a>
                            <a href="" class="tweet d-flex">
                                <img src="./images/profile.png" alt="">
                                <p>
                                    Rylanristia @rylanristia_
                                    <br> You can't do anything, just scrolling down
                                </p>
                            </a>
                            <a href="" class="tweet d-flex">
                                <img src="./images/profile.png" alt="">
                                <p>
                                    Rylanristia @rylanristia_
                                    <br> You can't do anything, just scrolling down
                                </p>
                            </a>
                            <a href="" class="tweet d-flex">
                                <img src="./images/profile.png" alt="">
                                <p>
                                    Rylanristia @rylanristia_
                                    <br> You can't do anything, just scrolling down
                                </p>
                            </a>
                            <a href="" class="tweet d-flex">
                                <img src="./images/profile.png" alt="">
                                <p>
                                    Rylanristia @rylanristia_
                                    <br> You can't do anything, just scrolling down
                                </p>
                            </a>
                            <a href="" class="tweet d-flex">
                                <img src="./images/profile.png" alt="">
                                <p>
                                    Rylanristia @rylanristia_
                                    <br> You can't do anything, just scrolling down
                                </p>
                            </a>
                        </div>

                        <!-- trends -->
                        <div class="card-tweets mt-4">
                            <h5 class="ms-4 fc-white pt-2 sticky-top">Highlight Tweets</h5>
                            @foreach ($highlighted as $item)
                                <a href="{{ route('twitter.show', $item->id) }}" class="tweet d-flex">
                                    <img src="./images/profile.png" alt="">
                                    <p>
                                        {{ $item->name }}
                                        <br>{{ Str::limit($item->description, 40) }}
                                    </p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <p class="disabled mt-4 pb-5" style="color: gray;">
                        term of us - privacy of policy - accessibility - cookies policy - birthday presents - more ...
                        <br> &copy;rylanristia - 2022 for aprilia
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
