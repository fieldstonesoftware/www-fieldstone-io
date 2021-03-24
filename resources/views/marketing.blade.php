@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="home standard_layout">
        <div class="remodal-bg">
            <div class="content_contain" style="padding-bottom: 4.5em;">
                <div class="page_contain">
                    <div class="banner">
                        <a href="https://pro.fieldstone.io/register/">
                            <div class="banner_icon">
                                <img src="/img/logomark.min.svg" alt="Fieldstone">
                            </div>
                            <div class="banner_content">
                                 <p class="small">
                                    Fieldstone Cloud is Open! Sign up today! <span class="arrow">→</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="contain">
                        <section class="hero">
                            <div class="hero_bg">
{{--                                <video poster="/img/hero/hero_poster.jpg" playsinline autoplay muted loop>--}}
{{--                                    <source src="/img/hero/hero.mp4" type="video/mp4">--}}
{{--                                </video>--}}
                            </div>
                            <div class="hero_content">
                                <h1>Flat Rate Price Book<br>for HVAC & Plumbing</h1>
                                <p>Fieldstone is a Cloud platform for HVAC & Plumbing to help you organize
                                    daily operations, reduce paperwork and improve your focus. Sign up today
                                    to start using the flat rate price book feature.</p>
                                <div class="hero_actions" style="z-index: -999;">
                                    <a href="/docs" class="btn"><span>Learn More</span></a>
                                    <a href="https://pro.fieldstone.io/register" class="btn"><span>Sign Up</span></a>
{{--                                    <a href="https://link-to-another-resource" data-remodal-target="video_modal" class="btn secondary"><span><img src="/img/icons/play.min.svg" alt="Play Video"><span>Watch Demos</span></span></a>--}}

<!--                                     <div data-remodal-id="video_modal" class="video_modal remodal">
                                        <div class="video_contain">
                                            <button data-remodal-action="close" class="remodal-close"></button>
                                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="https://www.youtube.com/embed/cAGQGXtBvs4?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"></iframe>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="contain">
                        <div class="content_block img_left">
                            <div class="bg">
{{--                                <video poster="/img/blocks/blocks_3.jpg" playsinline autoplay muted loop>--}}
{{--                                    <source src="/img/blocks/blocks_3.mp4" type="video/mp4">--}}
{{--                                </video>--}}
                            </div>
                            <div class="image">
{{--                                <img src="/img/homepage/forge.jpg" alt="Forge">--}}
                            </div>
                            <div class="content">
                                <h1>Fieldstone 2.0</h1>
                                <p>Version 1.x of Fieldstone included cloud access which worked great for
                                in-office staff. For working on-the-go, it was less than ideal. To address
                                this, we're adding mobile apps to version 2.0.</p>
                                <a href="/docs" class="btn"><span>Learn More</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
