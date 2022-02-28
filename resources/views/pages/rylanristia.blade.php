@extends('layouts.rylanristia')

@section('content')
    <div class="skw-pages d-none d-lg-block d-md-none">
        <div class="skw-page skw-page-1 active">
            <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                    <div class="skw-page__content"></div>
                </div>
            </div>
            <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                    <div class="skw-page__content">
                        <h2 class="skw-page__heading">Hi April!</h2>
                        <p class="skw-page__description">Seperti biasa, bukan aku kalo ga unprectable. tapi mungkin udah
                            ketebak si kalo aku bakalan bikin website lagi. Tapi tenang, kali ini lebih beda.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="skw-page skw-page-2">
            <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                    <div class="skw-page__content">
                        <h2 class="skw-page__heading">Apa yang beda?</h2>
                        <p class="skw-page__description">Hmmm, pokoknya beda. kamu ikutin terus aja ya alur websitenya akan
                            membawa kamu kemana. hehehe :).</p>
                    </div>
                </div>
            </div>
            <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                    <div class="skw-page__content"></div>
                </div>
            </div>
        </div>
        <div class="skw-page skw-page-3">
            <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                    <div class="skw-page__content"></div>
                </div>
            </div>
            <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                    <div class="skw-page__content">
                        <p class="skw-page__description">Happy birthday ya, wish aku yang terbaik buat kamu. Tetap semangat
                            kaya april yang aku kenal, jaga kesehatan kamu, perbanyak istirahat juga disela-sela kesibukan
                            kamu biar kamu ga sakit. kaya tangan beomgyu tuh, berdarah.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="skw-page skw-page-4">
            <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                    <div class="skw-page__content">
                        <p class="skw-page__description">By the way, semangat ya ngerjain skripsi-nya. aku yakin sesusah
                            apapun, kamu pasti bisa. karna kamu hebat. Aku tau kamu itu gimana, jadi... semangat. Oiya, aku
                            gapernah cape bilang ini ke kamu. Aku selalu ada buat kamu, kapanpun,
                            dimanapun. kalo butuh bantuan kabarin aku ya. aku pasti bantu semaksimal mungkin. Anyway, Tuh
                            anak anak ngasih bunga ke kamu.</p>
                    </div>
                </div>
            </div>
            <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                    <div class="skw-page__content"></div>
                </div>
            </div>
        </div>
        <div class="skw-page skw-page-5">
            <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                    <div class="skw-page__content"></div>
                </div>
            </div>
            <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                    <div class="skw-page__content">
                        <h2 class="skw-page__heading">Last but not least from me.</h2>
                        <p class="skw-page__description">
                            Ada banyak twit dari orang-orang buat kamu hari ini. kalo ga percaya coba aja cek
                            <a class="skw-page__link" href="{{ route('twitter.index') }}">Twitter</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-scroll d-block d-lg-none">
        <div class="pages">
            <div class="image-placement-1"></div>
            <div class="description-mobile">
                <h1 class="mt-5">Hi April!</h1>
                <p>Seperti biasa, bukan aku kalo ga unprectable. tapi mungkin udah ketebak si kalo aku bakalan bikin website
                    lagi. Tapi tenang, kali ini lebih beda.</p>
            </div>
        </div>

        <div class="pages">
            <div class="image-placement-2"></div>
            <div class="description-mobile">
                <h1 class="mt-5">Apa yang beda?</h1>
                <p>Hmmm, pokoknya beda. kamu ikutin terus aja ya alur websitenya akan membawa kamu kemana. hehehe :).</p>
            </div>
        </div>

        <div class="pages">
            <div class="image-placement-3"></div>
            <div class="description-wrapped">
                <div class="description-mobile">
                    <p class="mt-5">Happy birthday ya, wish aku yang terbaik buat kamu. Tetap semangat kaya april
                        yang aku kenal, jaga kesehatan kamu, perbanyak istirahat juga disela-sela kesibukan kamu biar kamu
                        ga sakit. kaya tangan beomgyu tuh, berdarah.</p>
                </div>
            </div>
        </div>

        <div class="pages">
            <div class="image-placement-4"></div>
            <div class="description-wrapped">
                <div class="description-mobile">
                    <p class="mt-5">By the way, semangat ya ngerjain skripsi-nya. aku yakin sesusah apapun, kamu
                        pasti bisa. karna kamu hebat. Aku tau kamu itu gimana, jadi... semangat. Oiya, aku gapernah cape
                        bilang ini ke kamu. Aku selalu ada buat kamu, kapanpun, dimanapun.
                        kalo butuh bantuan kabarin aku ya. aku pasti bantu semaksimal mungkin. Anyway, Tuh anak anak ngasih
                        bunga ke kamu.</p>
                </div>
            </div>
        </div>

        <div class="pages">
            <div class="image-placement-5"></div>
            <div class="description-wrapped">
                <div class="description-mobile">
                    <h1 class="mt-5">Last but not least for me.</h1>
                    <p>
                        Ada banyak twit dari orang-orang buat kamu hari ini. kalo ga percaya coba aja cek
                        <a class="skw-page__link" href="{{ route('twitter.index') }}">Twitter</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
