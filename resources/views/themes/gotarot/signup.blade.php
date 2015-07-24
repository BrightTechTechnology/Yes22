@extends('themes.gotarot.default')

@section('content')
    @include('themes.gotarot.partials.splashPage')
    @include('themes.gotarot.partials.menuPage')

    @include('themes.gotarot.about')
    @include('themes.gotarot.services')
    @include('themes.gotarot.blog')

    <!-- (5) Portfolio -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 1918px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="pages_container">
                            <h2 class="page_title">Portfolio</h2>
                            <div class="toogle_wrap radius8">
                                <div class="trigger"><a>portfolio categories</a></div>
                                <div class="toggle_container" style="display: none;">
                                    <ul class="listing_detailed">
                                        <li><a>webdesign work</a></li>
                                        <li><a>painted illustrations</a></li>
                                        <li><a>programming and javascript</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio_item radius8">
                                <div class="portfolio_image">
                                    <a rel="gallery-1" href="{{ asset('/img/gotarot/portfolio_thumb.png') }}" class="swipebox" title="Webdesign work">
                                        <img src="{{ asset('/img/gotarot/portfolio_thumb.png') }}"   border="0">
                                    </a>
                                </div>
                                <div class="portfolio_details">
                                    <h4>Webdesign work</h4>
                                    <p>Nullam et scelerisque erat. Cras vestibulum justo...</p>
                                    <a rel="gallery-2" href="{{ asset('/img/gotarot/contact.png') }}portfolio_thumb.jpg" class="swipebox view_details" title="Webdesign work">view details</a>
                                </div>
                            </div>
                            <div class="portfolio_item radius8">
                                <div class="portfolio_image">
                                    <a rel="gallery-1" href="{{ asset('/img/gotarot/portfolio_thumb2.jpg') }}" class="swipebox" title="Webdesign work">
                                        <img src="{{ asset('/img/gotarot/portfolio_thumb2.jpg') }}"   border="0">
                                    </a>
                                </div>
                                <div class="portfolio_details">
                                    <h4>Mobile development</h4>
                                    <p>Cras vestibulum justo eget lorem semper ac facilisis...</p>
                                    <a rel="gallery-2" href="{{ asset('/img/gotarot/portfolio_thumb2.jpg') }}" class="swipebox view_details" title="Webdesign work">view details</a>
                                </div>
                            </div>
                            <div class="portfolio_item radius8">
                                <div class="portfolio_image">
                                    <a rel="gallery-1" href="{{ asset('/img/gotarot/portfolio_thumb3.jpg') }}" class="swipebox" title="Webdesign work">
                                        <img src="{{ asset('/img/gotarot/portfolio_thumb3.jpg') }}"   border="0">
                                    </a>
                                </div>
                                <div class="portfolio_details">
                                    <h4>Applications</h4>
                                    <p>Sed ut felis non arcu pulvinar molestie....</p>
                                    <a rel="gallery-2" href="{{ asset('/img/gotarot/portfolio_thumb3.jpg') }}" class="swipebox view_details" title="Webdesign work">view details</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h3>Portfolio with round images</h3>
                            <div class="portfolio_item radius8">
                                <div class="portfolio_image_round">
                                    <a rel="gallery-1" href="{{ asset('/img/gotarot/portfolio_thumb.jpg') }}" class="swipebox" title="Webdesign work">
                                        <img src="{{ asset('/img/gotarot/portfolio_thumb.jpg') }}"   border="0">
                                    </a>
                                </div>
                                <div class="portfolio_details">
                                    <h4>Webdesign work</h4>
                                    <p>Nullam et scelerisque erat. Cras vestibulum justo...</p>
                                    <a rel="gallery-2" href="{{ asset('/img/gotarot/portfolio_thumb.jpg') }}" class="swipebox view_details" title="Webdesign work">view details</a>
                                </div>
                            </div>
                            <div class="portfolio_item radius8">
                                <div class="portfolio_image_round">
                                    <a rel="gallery-1" href="{{ asset('/img/gotarot/portfolio_thumb2.jpg') }}" class="swipebox" title="Webdesign work">
                                        <img src="{{ asset('/img/gotarot/portfolio_thumb2.jpg') }}"   border="0">
                                    </a>
                                </div>
                                <div class="portfolio_details">
                                    <h4>Mobile development</h4>
                                    <p>Cras vestibulum justo eget lorem semper ac facilisis...</p>
                                    <a rel="gallery-2" href="{{ asset('/img/gotarot/portfolio_thumb2.jpg') }}" class="swipebox view_details" title="Webdesign work">view details</a>
                                </div>
                            </div>
                            <div class="portfolio_item radius8">
                                <div class="portfolio_image_round">
                                    <a rel="gallery-1" href="{{ asset('/img/gotarot/portfolio_thumb3.jpg') }}" class="swipebox" title="Webdesign work">
                                        <img src="{{ asset('/img/gotarot/portfolio_thumb3.jpg') }}"   border="0">
                                    </a>
                                </div>
                                <div class="portfolio_details">
                                    <h4>Applications</h4>
                                    <p>Sed ut felis non arcu pulvinar molestie....</p>
                                    <a rel="gallery-2" href="{{ asset('/img/gotarot/portfolio_thumb3.jpg') }}" class="swipebox view_details" title="Webdesign work">view details</a>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="scrolltop radius20">
                                <a>
                                    <img src="{{ asset('/img/gotarot/top.png') }}" alt="Go on top" title="Go on top">
                                </a>
                            </div>
                        </div>
                        <!--End of page container-->
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar" style="opacity: 0;">
                <div class="swiper-scrollbar-drag swiper-scrollbar-cursor-drag" style="height: 0px;"></div>
            </div>
        </div>
    </div>

    <!-- (6) Gallery -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 2391px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="pages_container">
                            <h2 class="page_title">Photo Gallery 1/3</h2>
                            <ul class="photo_gallery_13">
                                <li>
                                    <a rel="gallery-3" href="{{ asset('/img/gotarot/photo1.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo1.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-3" href="{{ asset('/img/gotarot/photo2.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo2.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-3" href="{{ asset('/img/gotarot/photo3.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo3.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-3" href="{{ asset('/img/gotarot/photo4.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo4.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-3" href="{{ asset('/img/gotarot/photo5.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo5.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-3" href="{{ asset('/img/gotarot/photo6.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo6.jpg') }}" alt="image">
                                    </a>
                                </li>
                            </ul>
                            <h2>Photo Gallery 1/2</h2>
                            <ul class="photo_gallery_12">
                                <li>
                                    <a rel="gallery-4" href="{{ asset('/img/gotarot/photo7.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo7.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-4" href="{{ asset('/img/gotarot/photo8.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo8.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-4" href="{{ asset('/img/gotarot/photo9.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo9.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-4" href="{{ asset('/img/gotarot/photo10.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo10.jpg') }}" alt="image">
                                    </a>
                                </li>
                            </ul>
                            <h2>Photo Gallery 1/1</h2>
                            <ul class="photo_gallery_11">
                                <li>
                                    <a rel="gallery-5" href="{{ asset('/img/gotarot/photo11.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo11.jpg') }}" alt="image">
                                    </a>
                                </li>
                            </ul>
                            <h2 class="page_title">Round corners 1/3</h2>
                            <ul class="photo_gallery_13_round">
                                <li>
                                    <a rel="gallery-6" href="{{ asset('/img/gotarot/photo1.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo1.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-6" href="{{ asset('/img/gotarot/photo2.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo2.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-6" href="{{ asset('/img/gotarot/photo3.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo3.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-6" href="{{ asset('/img/gotarot/photo4.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo4.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-6" href="{{ asset('/img/gotarot/photo5.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo5.jpg') }}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a rel="gallery-6" href="{{ asset('/img/gotarot/photo6.jpg') }}" title="Photo title" class="swipebox">
                                        <img src="{{ asset('/img/gotarot/photo6.jpg') }}" alt="image">
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="scrolltop radius20">
                                <a>
                                    <img src="{{ asset('/img/gotarot/top.png') }}" alt="Go on top" title="Go on top">
                                </a>
                            </div>
                        </div>
                        <!--End of page container-->
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar" style="opacity: 0;">
                <div class="swiper-scrollbar-drag swiper-scrollbar-cursor-drag" style="height: 0px;"></div>
            </div>
        </div>
    </div>

    <!-- (7) Videos -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 1266px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="pages_container">
                            <h2 class="page_title">Our Videos</h2>
                            <p>
                                Just some responsive videos. You can add your video description here.
                            </p>
                            <div class="videocontainer radius6">
                                <div class="fluid-width-video-wrapper" style="padding-top: 37.5%;">
                                    VID HERE
                                </div>
                            </div>
                            <h3>My Mobile Page V3</h3>
                            <div class="videocontainer radius6">
                                <div class="fluid-width-video-wrapper" style="padding-top: 37.5%;">
                                    VID HERE
                                </div>
                            </div>
                            <h3>Photography style</h3>
                            <div class="videocontainer radius6">
                                <div class="fluid-width-video-wrapper" style="padding-top: 37.5%;">
                                    VID HERE
                                </div>
                            </div>
                            <div class="scrolltop radius20">
                                <a>
                                    <img src="{{ asset('/img/gotarot/top.png') }}" alt="Go on top" title="Go on top">
                                </a>
                            </div>
                        </div>
                        <!--End of page container-->
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar" style="opacity: 0;">
                <div class="swiper-scrollbar-drag swiper-scrollbar-cursor-drag" style="height: 0px;"></div>
            </div>
        </div>
    </div>

    <!-- (8) Clients -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 1162px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="pages_container">
                            <h2 class="page_title">Our Clients</h2>
                            <div class="client_row">
                                <div class="service_box">
                                    <div class="services_icon"><img src="{{ asset('/img/gotarot/clients.png') }}"  ></div>
                                    <div class="service_content">
                                        <h4>Web company</h4>
                                        <p>Lorem ipsum dolor sit amet, <a><strong>consectetur adipisicing elit</strong></a>, sed do eiusmod tempor</p>
                                    </div>
                                </div>
                                <h3>Things we done for this client:</h3>
                                <ul class="listing">
                                    <li>Proin dignissim risus ut quam aliquam dignissim.</li>
                                    <li>Nunc erat eros, cursus et commodo vitae, pulvinar ac libero.</li>
                                    <li>In erat elit, bibendum vitae commodo vitae, bibendum non justo.</li>
                                </ul>
                                <a class="button_12 green green_borderbottom radius4">See work</a>
                                <a class="button_12 blue blue_borderbottom radius4">Client web</a>
                            </div>
                            <div class="client_row">
                                <div class="service_box">
                                    <div class="services_icon">
                                        <img src="{{ asset('/img/gotarot/clients.png') }}">
                                    </div>
                                    <div class="service_content">
                                        <h4>Design company</h4>
                                        <p>Lorem ipsum dolor sit <a>amet consectetur</a> adipisicing elit, <strong>sed do eiusmod</strong> tempor</p>
                                    </div>
                                </div>
                                <h3>Things we done for this client:</h3>
                                <ul class="listing">
                                    <li>Proin dignissim risus ut quam aliquam dignissim.</li>
                                    <li>Nunc erat eros, cursus et commodo vitae, pulvinar ac libero.</li>
                                    <li>In erat elit, bibendum vitae commodo vitae, bibendum non justo.</li>
                                </ul>
                                <a class="button_12 green green_borderbottom radius4">See work</a>
                                <a class="button_12 blue blue_borderbottom radius4">Client web</a>
                            </div>


                            <div class="clearfix"></div>
                            <div class="scrolltop radius20">
                                <a>
                                    <img src="{{ asset('/img/gotarot/top.png') }}" alt="Go on top" title="Go on top">
                                </a>
                            </div>
                        </div>
                        <!--End of page container-->
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar" style="opacity: 0;"><div class="swiper-scrollbar-drag swiper-scrollbar-cursor-drag" style="height: 0px;"></div></div>
        </div>
    </div>

    <!-- (9) Twitter -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 756px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="pages_container">
                            <h2 class="page_title">Latest Tweets</h2>
                            <div class="tweet">
                                <ul class="tweet_list">
                                    <li class="tweet_first tweet_odd">
                                        <span class="tweet_time">
                                            <a href="http://twitter.com/FamousThemes/status/532947975429828608" title="view tweet on twitter">about 246 days ago</a>
                                        </span>
                                        <span class="tweet_join">we were checking out</span>
                                        <span class="tweet_text">Wedding Bells by
                                            <span class="at">@</span>
                                            <a href="http://twitter.com/FamousThemes">FamousThemes</a> on
                                            <span class="at">@</span>
                                            <a href="http://twitter.com/dribbble">dribbble</a>
                                            <a href="https://dribbble.com/shots/1797998-Wedding-Bells">dribbble.com/shots/1797998-…</a>
                                        </span>
                                    </li>
                                    <li class="tweet_even">
                                        <span class="tweet_time">
                                            <a href="http://twitter.com/FamousThemes/status/529344775187881984" title="view tweet on twitter">about 256 days ago</a>
                                        </span>
                                        <span class="tweet_join">we replied</span>
                                        <span class="tweet_text">
                                            <span class="at">@</span>
                                            <a href="http://twitter.com/tristanschaub">tristanschaub</a>
                                            Hi, Beauty Center includes 5 color schemes. And options to change any color. For other question please use our profile page.
                                        </span>
                                    </li>
                                    <li class="tweet_odd">
                                        <span class="tweet_time">
                                            <a href="http://twitter.com/FamousThemes/status/462929181027074048" title="view tweet on twitter">about 439 days ago</a>
                                        </span>
                                        <span class="tweet_join">we replied</span>
                                        <span class="tweet_text">
                                            <span class="at">@</span>
                                            <a href="http://twitter.com/bluestreak101">bluestreak101</a>
                                            Just drop us an email on our themeforest profile page with your demo url and we will look at it.
                                        </span>
                                    </li>
                                    <li class="tweet_even">
                                        <span class="tweet_time">
                                            <a href="http://twitter.com/FamousThemes/status/449291789691006976" title="view tweet on twitter">about 477 days ago</a>
                                        </span>
                                        <span class="tweet_join">we replied</span>
                                        <span class="tweet_text">
                                            <span class="at">@</span>
                                            <a href="http://twitter.com/ImTiffanyMarler">ImTiffanyMarler</a> Make sure the timthumb file and cache foldr inside the theme , have the corect permissions on your server (755 or 777)
                                        </span>
                                    </li>
                                    <li class="tweet_odd">
                                        <span class="tweet_time">
                                            <a href="http://twitter.com/FamousThemes/status/444428841285459968" title="view tweet on twitter">about 490 days ago</a>
                                        </span>
                                        <span class="tweet_join">we were checking out</span>
                                        <span class="tweet_text">
                                            Check out this great <a href="http://search.twitter.com/search?q=&tag=themeforest&lang=all" class="tweet_hashtag">#themeforest</a> item 'House Of Worship - Church Wordpress Theme' <a href="http://themeforest.net/item/house-of-worship-church-wordpress-theme/7028531">themeforest.net/item/house-of-…</a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <a  class="button_11 blue">Follow Us!</a>
                            <div class="clearfix"></div>
                            <div class="scrolltop radius20">
                                <a>
                                    <img src="{{ asset('/img/gotarot/top.png') }}" alt="Go on top" title="Go on top">
                                </a>
                            </div>
                        </div>
                        <!--End of page container-->
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar" style="opacity: 0;">
                <div class="swiper-scrollbar-drag swiper-scrollbar-cursor-drag" style="height: 0px;"></div>
            </div>
        </div>
    </div>

    <!-- (10) Contact -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 1316px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="pages_container">

                            <h2 class="page_title">Get in touch</h2>
                            <h2 id="Note"></h2>
                            <div class="form">
                                <form class="cmxform" id="CommentForm" method="post" action="" novalidate="novalidate">
                                    <label>Name:</label>
                                    <input type="text" name="ContactName" id="ContactName" value="" class="form_input radius4 required">
                                    <label>Email:</label>
                                    <input type="text" name="ContactEmail" id="ContactEmail" value="" class="form_input radius4 required email">
                                    <label>Message:</label>
                                    <textarea name="ContactComment" id="ContactComment" class="form_textarea radius4 textarea required" rows="" cols=""></textarea>
                                    <input type="submit" name="submit" class="form_submit radius4 green green_borderbottom" id="submit" value="Send">
                                    <input class="" type="hidden" name="to" value="youremaill@yourwebsiteee.com">
                                    <input class="" type="hidden" name="subject" value="Contacf form message">
                                    <label id="loader" style="display:none;">
                                        <img src="{{ asset('/img/gotarot/loader.gif') }}" alt="Loading..." id="LoadingGraphic">
                                    </label>
                                </form>
                            </div>

                            <h2>Let's socialize</h2>
                            <ul class="social">
                                <li class="social_facebook">
                                    <a>
                                        <img src="{{ asset('/img/gotarot/facebook(1).png') }}" border="0">
                                    </a>
                                </li>
                                <li class="social_twitter">
                                    <a>
                                        <img src="{{ asset('/img/gotarot/twitter(2).png') }}" border="0">
                                    </a>
                                </li>
                                <li class="social_google">
                                    <a>
                                        <img src="{{ asset('/img/gotarot/google(1).png') }}" border="0">
                                    </a>
                                </li>
                                <li class="social_pinterest">
                                    <a>
                                        <img src="{{ asset('/img/gotarot/pinterest(1).png') }}" border="0">
                                    </a>
                                </li>
                                <li class="social_flickr">
                                    <a>
                                        <img src="{{ asset('/img/gotarot/flickr.png') }}" border="0">
                                    </a>
                                </li>
                                <li class="social_digg">
                                    <a>
                                        <img src="{{ asset('/img/gotarot/digg.png') }}" border="0">
                                    </a>
                                </li>
                            </ul>
                            <h2>Give Us a call</h2>
                            <a href="tel:123 456 789" class="call_button radius8">Click To Call Now!</a>
                            <a href="http://maps.google.com/maps?q=houston+usa&hl=ro&sll=37.0625,-95.677068&sspn=53.961216,114.169922&hnear=Houston,+Harris,+Texas&t=m&z=5" class="map_button radius8">View our location</a>

                            <div class="clearfix"></div>
                            <div class="scrolltop radius20">
                                <a>
                                    <img src="{{ asset('/img/gotarot/top.png') }}" alt="Go on top" title="Go on top">
                                </a>
                            </div>
                        </div>
                        <!--End of page container-->
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar" style="opacity: 0;">
                <div class="swiper-scrollbar-drag swiper-scrollbar-cursor-drag" style="height: 0px;"></div>
            </div>
        </div>
    </div>

@stop