@extends('layouts.app')

@section('content')
<div class="sub_header bg_4">
            <div id="intro_txt" class="animated fadeInDown">
            <h1>IIIT DM campus <strong>Gallery</strong></h1>
            <p>&nbsp;</p>
            </div>
        </div> <!--End sub_header -->
        
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div><!-- Position -->

        <div class="container margin_60">
    <section class="grid">
            <div class="main_title">
                <h2>Here some pictures ...</h2>
                <p>&nbsp;</p>
                </div>
                <div class="row">
                    <ul class="magnific-gallery">
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_4.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/img/gallery/large/pic_4.jpg" title="Photo title" data-effect="mfp-move-horizontal">
                                        <i class="pe-7s-albums"></i>
                                        <p>Your caption</p>
                                </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_5.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                        <a href="/img/gallery/large/pic_5.jpg" title="Photo title" data-effect="mfp-move-horizontal">
                                        <i class="pe-7s-albums"></i>
                                        <p>Your caption</p>
                                       </a>
                                </div>
                             
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_6.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                        <a href="img/gallery/large/pic_6.jpg" title="Photo title" data-effect="mfp-move-horizontal">
                                        <i class="pe-7s-albums"></i>
                                        <p>Your caption</p>
                                    </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_7.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/img/gallery/large/pic_7.jpg" title="Photo title">
                                        <i class="pe-7s-albums"></i>
                                        <p>Your caption</p>
                                    </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <ul class="magnific-gallery">
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_8.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/img/gallery/large/pic_8.jpg" title="Photo title">
                                        <i class="pe-7s-albums"></i>
                                        <p>Your caption</p>
                                    </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_9.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/img/gallery/large/pic_9.jpg" title="Photo title">
                                        <i class="pe-7s-albums"></i>
                                        <p>Your caption</p>
                                    </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/img/gallery/pic_10.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/img/gallery/large/pic_10.jpg" title="Photo title">
                                        <i class="pe-7s-albums"></i>
                                        <p>Your caption</p>
                                    </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                        
                    </ul>
                </div>      
        </section>
        
        <section class="grid">
            <div class="container margin_60">
            <div class="main_title">
                <h2>Here some videos ...</h2>
                <p>&nbsp;</p>
                </div>
                    <div class="row">
                    <ul class="magnific-gallery">
                        <li>
                            <figure>
                                <img src="/img/video1.jpg" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="/video/student.mp4" class="video_pop"><i class="arrow_triangle-right_alt2"></i></a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                
                        
                        
                    </ul>
                </div>
            </div>
        </section>
            </div>
@endsection