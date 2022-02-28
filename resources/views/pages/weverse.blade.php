@extends('layouts.weverse')

@section('content')
    <div class="content-weverse">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="left-menu sticky-top">
                        <h2 style="font-family: 'Noto Sans KR', sans-serif; font-weight:600">TOMORROW <br>X TOGETHER</h2>
                        <p class="fc-gray" style="font-size: 16px">5,262,225 Wever</p>
                        <img src="https://cdn-contents.weverse.io/admin/xlx2048/png/f8e2cec6aa3942518459b8f60a5b18b3656.png"
                            alt="" height="70px" class="mt-4 d-lg-block d-none">
                        <div class="flex-column mt-4 d-lg-block d-none">
                            <div class="menu-bar mt-4 mb-auto">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex align-content-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                Feed
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-content-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 fc-green">
                                                Artist
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-content-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                Media
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-content-center">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="./images/weverse-only.svg" alt="..." width="25px"
                                                    class="me-2">
                                            </div>
                                            <div class="flex-grow-1">
                                                Only
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="middle-menu">
                        <div class="write-section">
                            <div class="card p-4">
                                <h5 class="pb-3">Create Post</h5>
                                <div class="post d-flex">
                                    <img src="https://cdn-contents.weverse.io/static/profile/profile_defalut_img_02.png"
                                        alt="" width="50px" height="50px" class="me-4 ">
                                    <textarea name="" id="" cols="30" rows="7"
                                        placeholder="I'm soryy, this is not real tho :) Sekarang ngehalu dulu aja ya hehehe."></textarea>
                                </div>
                                <hr>
                                <div class="command d-flex">
                                    <img src="./images/weverse-checklist.svg" alt="" width="30px">
                                    <h5 class="ms-3 mt-2 fc-gray" style="font-size: 14px">Hide from artist</h5>
                                    <button class="btn btn-post ms-auto">OK</button>
                                </div>
                            </div>
                        </div>
                        <div class="weverse-post mt-3">
                            <!-- soobin -->
                            <div class="card p-3">
                                <div class="header d-flex">
                                    <img src="./images/soobin.svg" alt="" width="50px">
                                    <p class=" ms-3 mt-3">
                                        <strong>TXT_SOOBIN <img src="./images/verified.svg" alt="" width="18px"
                                                class="ms-2 verified"></strong>
                                        <br>
                                        <span class="fc-gray pt-2">12 April 2022, 11:43</span>
                                    </p>
                                    <div class="ms-auto mt-3">
                                        <img src="./images/translate-weverse.svg" onclick="soobin_post()">
                                        <img src="./images/more-post-weverse.svg" alt="">
                                    </div>
                                </div>
                                <p class="pt-3" id="soobin-post">
                                    안녕 에이프릴, 내 소중한 딸의 생일을 축하해. 입가에 환한 미소가 번지는 늘 건강하시길 바랍니다. ❤️❤️❤️
                                </p>
                                <hr>
                                <div class="d-flex">
                                    <img src="./images/weverse-stick.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">20K+</span>
                                    <img src="./images/weverse-comment.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">3,677</span>
                                </div>
                                <hr>

                                {{-- comment --}}
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/yeonjun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_YEONJUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Birthday girl? Who? Do I know her?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/beomgyu.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_BEOMGYU</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who is this Hyeong?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/taehyun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_TAEHYUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who else is this?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/kai.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_HUENINGKAI</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                ??????
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end comment --}}

                                <div class="comment-section d-flex mt-4">
                                    <img src="./images/profile-april.svg" alt="" width="35px">
                                    <div class="card-comment d-flex ms-2">
                                        <input type="text" class="form-control" placeholder="Leave a comment"
                                            style="font-size: 13px">
                                        <button class="btn fc-green fw-bold me-3">Post</button>
                                    </div>
                                </div>
                            </div>
                            <!-- taehyun -->
                            <div class="card p-3 mt-4">
                                <div class="header d-flex">
                                    <img src="./images/taehyun.svg" alt="" width="50px">
                                    <p class=" ms-3 mt-3">
                                        <strong>TXT_TAEHYUN <img src="./images/verified.svg" alt="" width="18px"
                                                class="ms-2 verified"></strong>
                                        <br>
                                        <span class="fc-gray pt-2">12 April 2022, 11:43</span>
                                    </p>
                                    <div class="ms-auto mt-3">
                                        <img src="./images/translate-weverse.svg" alt="" onclick="taehyun_post()">
                                        <img src="./images/more-post-weverse.svg" alt="">
                                    </div>
                                </div>
                                <p class="pt-3" id="taehyun-post">
                                    자, 여기 생일 소녀가 있습니다~ 그녀의 생일을 축하합시다~~ 🥳🥳🥳
                                </p>
                                <hr>
                                <div class="d-flex">
                                    <img src="./images/weverse-stick.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">20K+</span>
                                    <img src="./images/weverse-comment.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">3,677</span>
                                </div>
                                <hr>
                                {{-- comment --}}
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/yeonjun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_YEONJUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Birthday girl? Who? Do I know her?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/beomgyu.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_BEOMGYU</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who else is this?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/taehyun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_TAEHYUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who else is this?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/kai.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_HUENINGKAI</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                ??????
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end comment --}}
                                <div class="comment-section d-flex">
                                    <img src="./images/profile-april.svg" alt="" width="35px">
                                    <div class="card-comment d-flex ms-2">
                                        <input type="text" class="form-control" placeholder="Leave a comment"
                                            style="font-size: 13px">
                                        <button class="btn fc-green fw-bold me-3">Post</button>
                                    </div>
                                </div>
                            </div>
                            <!-- yeonjun -->
                            <div class="card p-3 mt-4">
                                <div class="header d-flex">
                                    <img src="./images/yeonjun.svg" alt="" width="50px">
                                    <p class=" ms-3 mt-3">
                                        <strong>TXT_YEONJUN <img src="./images/verified.svg" alt="" width="18px"
                                                class="ms-2 verified"></strong>
                                        <br>
                                        <span class="fc-gray pt-2">12 April 2022, 11:43</span>
                                    </p>
                                    <div class="ms-auto mt-3">
                                        <img src="./images/translate-weverse.svg" alt="" onclick="yeonjun_post()">
                                        <img src="./images/more-post-weverse.svg" alt="">
                                    </div>
                                </div>
                                <p class="pt-3" id="yeonjun-post">
                                    우리의 가장 운이 좋은 모아 중 하나는 오늘 생일입니다. 오늘과 같은 특별한 날이 행복한 순간들로 채워지길 바랍니다. 계속 우리와 함께있어! 🥰🥰
                                </p>
                                <hr>
                                <div class="d-flex">
                                    <img src="./images/weverse-stick.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">20K+</span>
                                    <img src="./images/weverse-comment.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">3,677</span>
                                </div>
                                <hr>
                                {{-- comment --}}
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/yeonjun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_YEONJUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Birthday girl? Who? Do I know her?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/beomgyu.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_BEOMGYU</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who else is this?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/taehyun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_TAEHYUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who else is this?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/kai.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_HUENINGKAI</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                ??????
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end comment --}}
                                <div class="comment-section d-flex">
                                    <img src="./images/profile-april.svg" alt="" width="35px">
                                    <div class="card-comment d-flex ms-2">
                                        <input type="text" class="form-control" placeholder="Leave a comment"
                                            style="font-size: 13px">
                                        <button class="btn fc-green fw-bold me-3">Post</button>
                                    </div>
                                </div>
                            </div>
                            <!-- beomgyu -->
                            <div class="card p-3 mt-4">
                                <div class="header d-flex">
                                    <img src="./images/beomgyu.svg" alt="" width="50px">
                                    <p class=" ms-3 mt-3">
                                        <strong>TXT_BEOMGYU <img src="./images/verified.svg" alt="" width="18px"
                                                class="ms-2 verified"></strong>
                                        <br>
                                        <span class="fc-gray pt-2">12 April 2022, 11:43</span>
                                    </p>
                                    <div class="ms-auto mt-3">
                                        <img src="./images/translate-weverse.svg" alt="" onclick="beomgyu_post()">
                                        <img src="./images/more-post-weverse.svg" alt="">
                                    </div>
                                </div>
                                <p class="pt-3" id="beomgyu-post">
                                    생일 축하해! 케익을 준비하지 못해서 죄송합니다... 그럼 제 생일 케익과 함께 맛있게 드세요 🤣🤣🤣 맛있게 드셨으면 좋겠어요!! 🥳🎂🍰
                                </p>
                                <img src="https://pbs.twimg.com/media/EwWWhUFVcAg2vsw?format=jpg&name=small" alt=""
                                    class="rounded">
                                <hr>
                                <div class="d-flex">
                                    <img src="./images/weverse-stick.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">20K+</span>
                                    <img src="./images/weverse-comment.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">3,677</span>
                                </div>
                                <hr>
                                {{-- comment --}}
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/yeonjun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_YEONJUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Birthday girl? Who? Do I know her?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/beomgyu.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_BEOMGYU</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who else is this?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/taehyun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_TAEHYUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who else is this?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/kai.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_HUENINGKAI</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                ??????
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end comment --}}
                                <div class="comment-section d-flex">
                                    <img src="./images/profile-april.svg" alt="" width="35px">
                                    <div class="card-comment d-flex ms-2">
                                        <input type="text" class="form-control" placeholder="Leave a comment"
                                            style="font-size: 13px">
                                        <button class="btn fc-green fw-bold me-3">Post</button>
                                    </div>
                                </div>
                            </div>
                            <!-- hueningkai -->
                            <div class="card p-3 mt-4">
                                <div class="header d-flex">
                                    <img src="./images/kai.svg" alt="" width="50px">
                                    <p class=" ms-3 mt-3">
                                        <strong>TXT_HUENINGKAI <img src="./images/verified.svg" alt="" width="18px"
                                                class="ms-2 verified"></strong>
                                        <br>
                                        <span class="fc-gray pt-2">12 April 2022, 11:43</span>
                                    </p>
                                    <div class="ms-auto mt-3">
                                        <img src="./images/translate-weverse.svg" alt="" onclick="hueningkai_post()">
                                        <img src="./images/more-post-weverse.svg" alt="">
                                    </div>
                                </div>
                                <p class="pt-3" id="hueningkai-post">
                                    누나야 생일 축하해~~ 🥳🥳🥳 성공과 행운을 빕니다! 항상 행복하시고 건강하시고 웃는 날이 많아지는 날이 많았으면 좋겠습니다! 앞으로도 멋지고 행복하길
                                    바라요 😍😍😍😍😍😍 생일축하해요!!! 🥳🥳🥳🥳🎂🎂🎂
                                </p>
                                <img src="https://pbs.twimg.com/media/FKnXV-tVgAA9KJG?format=jpg&name=small" alt=""
                                    class="rounded">
                                <hr>
                                <div class="d-flex">
                                    <img src="./images/weverse-stick.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">20K+</span>
                                    <img src="./images/weverse-comment.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">3,677</span>
                                </div>
                                <hr>
                                {{-- comment --}}
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/yeonjun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_YEONJUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Birthday girl? Who? Do I know her?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/beomgyu.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_BEOMGYU</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who else is this?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/taehyun.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_TAEHYUN</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                Who else is this?
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/kai.svg" alt="" width="30px">
                                    </div>
                                    <div class="col-11">
                                        <div>
                                            <p class="comment-txt">
                                                <strong>TXT_HUENINGKAI</strong><img src="./images/verified.svg" alt=""
                                                    width="13px" class="ms-1 verified">
                                                ??????
                                            </p>
                                            <div class="d-flex stats">
                                                <img src="./images/like-weverse.svg" alt="">
                                                <p class="pt-3 ps-1">20k+</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Reply</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1">Translate</p>
                                                <span class="fc-gray button-split px-1">.</span>
                                                <p class="pt-3 ps-1 fc-gray">Apr 12, 2022, 11:54</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end comment --}}
                                <div class="comment-section d-flex">
                                    <img src="./images/profile-april.svg" alt="" width="35px">
                                    <div class="card-comment d-flex ms-2">
                                        <input type="text" class="form-control" placeholder="Leave a comment"
                                            style="font-size: 13px">
                                        <button class="btn fc-green fw-bold me-3">Post</button>
                                    </div>
                                </div>
                            </div>
                            <!-- soobin -->
                            <div class="card p-3 mt-4 mb-5">
                                <div class="header d-flex">
                                    <img src="./images/soobin.svg" alt="" width="50px">
                                    <p class=" ms-3 mt-3">
                                        <strong>TXT_SOOBIN <img src="./images/verified.svg" alt="" width="18px"
                                                class="ms-2 verified"></strong>
                                        <br>
                                        <span class="fc-gray pt-2">12 April 2022, 11:43</span>
                                    </p>
                                    <div class="ms-auto mt-3">
                                        <img src="./images/translate-weverse.svg" alt="">
                                        <img src="./images/more-post-weverse.svg" alt="">
                                    </div>
                                </div>
                                <p class="pt-3">
                                    i have a something for you. click this link
                                    <a href="{{ route('txt') }}">Tomorrow X Together</a>
                                </p>
                                <hr>
                                <div class="d-flex">
                                    <img src="./images/weverse-stick.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">20K+</span>
                                    <img src="./images/weverse-comment.svg" alt="" class="me-2">
                                    <span class="me-2 fc-gray" style="font-size: 14px">3,677</span>
                                </div>
                                <hr>
                                <div class="comment-section d-flex">
                                    <img src="./images/profile-april.svg" alt="" width="35px">
                                    <div class="card-comment d-flex ms-2">
                                        <input type="text" class="form-control" placeholder="Leave a comment"
                                            style="font-size: 13px">
                                        <button class="btn fc-green fw-bold me-3">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-menu ms-3 sticky-top">
                        <div class="profile d-flex">
                            <img src="https://cdn-contents.weverse.io/static/profile/profile_defalut_img_02.png" alt=""
                                width="50px" height="50px" class="me-3 mt-3">
                            <p class="pt-3">
                                <strong>아프릴라</strong>
                                <br>
                                <span class="fc-gray" style="font-size: 12px">Joined on Jan 22 2022</span>
                            </p>
                        </div>
                        <div class="language-section mt-3">
                            <div class="card d-flex p-3">
                                <a href="#" class="text-decoration-none me-2">한국어 - <span
                                        class="fc-gray">English</span> - 日本語</a>
                            </div>
                        </div>
                        <p class="fc-gray mt-5" style="font-size: 13px">privacy prolicy - term of us - term of
                            relationship - term os use for
                            paid services - cookies policy - weverse subs term of use - about weverse</p>
                        <h6 class="fc-gray mt-3" style="font-size: 13px">&copy;WEVERSE COMPANY Inc.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
