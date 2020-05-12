@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="remodal-bg partners_page">

        <div class="content_contain">
            <div class="page_contain">
                <div class="contain">
                    <section class="partners_hero">
                        <div class="hero_bg">
                            <video poster="/img/blocks/blocks_1.jpg" playsinline autoplay muted loop>
                                <source src="/img/blocks/blocks_1.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="hero_content">
                            <h1>An inspirational message about Fieldstone Partners</h1>
                            <p>Fielstone Partners are really great. They're the best partners.</p>
                        </div>
                        <div class="hero_btn">
                            <a href="#" class="btn"><span>Become A Partner</span></a>
                        </div>
                    </section>
                </div>

                <section class="featured_partner">
                    <div class="contain">
                        <div class="featured_contain">
                            @if($featured == 'xxx')
                                <img class="featured_img" src="/img/partners/xxx.jpeg" alt="XXX" style="right: 48%;">
                                <div class="featured_content">
                                    <h6>Featured Partner</h6>
                                    <img class="logo" src="/img/partners/xxx.min.svg" alt="XXX">
                                    <p>XXX is a really great partner. They're one of our best partners honestly.</p>
                                    <a href="/partner/xxx" class="learn_more">More about XXX <span>→</span></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>

                <div class="contain">
                    <div class="partners_block content_block bg_left">
                        <div class="bg">
{{--                            <video poster="/img/blocks/blocks_2.jpg" playsinline autoplay muted loop>--}}
{{--                                <source src="/img/blocks/blocks_2.mp4" type="video/mp4">--}}
{{--                            </video>--}}
                        </div>
                        <ul class="partners_list">
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/yyy.min.svg" alt="YYY">
                                    </div>
                                    <p class="small">This partner YYY is awesome.</p>
                                    <a href="/partner/yyy" class="learn_more">More about YYY
                                        <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/zzz.png" width="107" alt="zzz">
                                    </div>
                                    <p class="small">This partner ZZZ is awesome.</p>
                                    <a href="/partner/zzz" class="learn_more">More about ZZZ <span>→</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
