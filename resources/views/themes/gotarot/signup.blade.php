@extends('themes.gotarot.default')

@section('content')
    <!-- Splash Page -->
    <div class="swiper-slide sliderbg_splash swiper-slide-visible swiper-slide-active" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nestedsplash">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="splash_container">
                            <!-- Logo + description -->
                            <div class="logo">
                                <strong>Go</strong>Tarot<span style="font-size:33%">.com.hk</span><br>
                                <span>Call tarot masters</span><BR>
                            </div>

                            <!-- Social Media -->
                            <ul class="splash_social">
                                <li><a href="#"><img src="{{ asset('/img/gotarot/facebook.png') }}"   border="0"></a></li>
                                <li><a href="#"><img src="{{ asset('/img/gotarot/twitter.png') }}"   border="0"></a></li>
                                <li><a href="#"><img src="{{ asset('/img/gotarot/google.png') }}"   border="0"></a></li>
                                <li><a href="#"><img src="{{ asset('/img/gotarot/pinterest.png') }}"   border="0"></a></li>
                            </ul>

                            <!-- Continue button -->
                            <div class="slide-to-navigate">
                                <a onclick="swiperParent.swipeTo(1);">
                                    <img src="{{ asset('/img/gotarot/slide-to-navigate.png') }}"   border="0">
                                </a>
                                <BR>slide to navigate
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbarsplash"></div>
        </div>
    </div>

    <!-- (1) Menu  -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 847px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="menu">
                            <ul>
                                <li><a onclick="swiperParent.swipeTo(2);"><img src="{{ asset('/img/gotarot/about.png') }}"  ><span>About Us</span></a></li>
                                <li><a onclick="swiperParent.swipeTo(3);"><img src="{{ asset('/img/gotarot/tools.png') }}"  ><span>Services</span></a></li>
                                <li><a onclick="swiperParent.swipeTo(4);"><img src="{{ asset('/img/gotarot/blog.png') }}"  ><span>Blog</span></a></li>
                                <li><a onclick="swiperParent.swipeTo(5);"><img src="{{ asset('/img/gotarot/docs.png') }}"  ><span>Portfolio</span></a></li>
                                <li><a onclick="swiperParent.swipeTo(6);"><img src="{{ asset('/img/gotarot/photos.png') }}"  ><span>Gallery</span></a></li>
                                <li><a onclick="swiperParent.swipeTo(7);"><img src="{{ asset('/img/gotarot/videos.png') }}"  ><span>Videos</span></a></li>
                                <li><a onclick="swiperParent.swipeTo(8);"><img src="{{ asset('/img/gotarot/clients.png') }}"  ><span>Clients</span></a></li>
                                <li><a onclick="swiperParent.swipeTo(9);"><img src="{{ asset('/img/gotarot/twitter(1).png') }}"  ><span>Twitter</span></a></li>
                                <li><a onclick="swiperParent.swipeTo(10);"><img src="{{ asset('/img/gotarot/contact.png') }}"  ><span>Contact</span></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar" style="opacity: 0;">
                <div class="swiper-scrollbar-drag swiper-scrollbar-cursor-drag" style="height: 0px;"></div>
            </div>
        </div>
    </div>

    <!-- (2) About us -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 1947px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="pages_container">
                            <h2 class="page_title">About Us</h2>
                            <div class="image_single radius4">
                                <img src="{{ asset('/img/gotarot/page_photo.jpg') }}" border="0">
                            </div>
                            <div class="image_caption green green_borderbottom radius4">
                                Image title
                            </div>
                            <h3>Imagination is our power</h3>
                            <blockquote>Design is the fundamental soul of a human-made creation that ends up expressing itself in successive outer layers of the product or service. <span class="quote_author">-Steve Jobs</span></blockquote>
                            <h3>Just a simple listing</h3>
                            <ul class="listing">
                                <li>Proin dignissim risus ut quam aliquam dignissim.</li>
                                <li>Nunc erat eros, cursus et commodo vitae, pulvinar ac libero.</li>
                                <li>In erat elit, bibendum vitae commodo vitae, bibendum non justo.</li>
                            </ul>
                            <h3>A more detailed listing</h3>
                            <ul class="listing_detailed">
                                <li><a>Proin dignissim risus</a></li>
                                <li><a>Nunc erat eros, cursus et</a></li>
                                <li><a>In erat elit, bibendum</a></li>
                            </ul>
                            <h2>Toggle styles</h2>
                            <div class="toogle_wrap radius8">
                                <div class="trigger">
                                    <a>toggle with text</a>
                                </div>
                                <div class="toggle_container" style="display: none;">
                                    <p>Lorem ipsum <a>dolor sit amet</a>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                            <div class="toogle_wrap radius8">
                                <div class="trigger">
                                    <a href="">toggle with lists</a>
                                </div>
                                <div class="toggle_container" style="display: none;">
                                    <ul class="listing_detailed">
                                        <li>Consectetur adipisicing elit sed</li>
                                        <li>Sed do eiusmod tempor incididunt</li>
                                        <li>Ut enim ad minim veniam</li>
                                    </ul>
                                </div>
                            </div>
                            <h2>Some flexible <span class="tag">tabs</span></h2>
                            <ul id="tabsmenu" class="tabsmenu">
                                <li class="active"><a href="http://famousthemes.com/gomobile/index_splash.html#tab1-tab">Text tab</a></li>
                                <li><a href="http://famousthemes.com/gomobile/index_splash.html#tab2-tab">Listing tab</a></li>
                                <li><a href="http://famousthemes.com/gomobile/index_splash.html#tab3-tab">Quote tab</a></li>
                            </ul>
                            <div id="tab1" class="tabcontent">
                                <h4>Simple text title</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div id="tab2" class="tabcontent" style="display: none;">
                                <h4>Listing title</h4>
                                <ul class="listing">
                                    <li>Consectetur adipisicing elit sed</li>
                                    <li>Sed do eiusmod tempor incididunt</li>
                                    <li>Ut enim ad minim veniam</li>
                                </ul>
                            </div>
                            <div id="tab3" class="tabcontent" style="display: none;">
                                <h4>Quote title</h4>
                                <blockquote>Design is the fundamental soul of a human-made creation that ends up expressing itself in successive outer layers of the product or service. <span class="quote_author">-Steve Jobs</span></blockquote>
                            </div>
                            <h2>Some buttons styles</h2>
                            <a class="button_12 green green_borderbottom radius4">Button 1/2</a>
                            <a class="button_12 blue blue_borderbottom radius4">Button 1/2</a>
                            <a class="button_12 red red_borderbottom radius4">Button 1/2</a>
                            <a class="button_12 orange orange_borderbottom radius4">Button 1/2</a>
                            <a class="button_12 black black_borderbottom radius4">Button 1/2</a>
                            <a class="button_12 gray gray_borderbottom radius4">Button 1/2</a>
                            <a class="button_11 bluegreen bluegreen_borderbottom radius4">Full width button</a>
                            <div class="clearfix"></div>
                            <div class="scrolltop radius20">
                                <a><img src="{{ asset('/img/gotarot/top.png') }}" alt="Go on top" title="Go on top"></a>
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

    <!-- (3) Services/Motto -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 1903px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="pages_container">
                            <h2 class="page_title">Our motto</h2>
                            <blockquote>Design is the fundamental soul of a human-made creation that ends up expressing itself in successive outer layers of the product or service. <span class="quote_author">-Steve Jobs</span></blockquote>

                            <h3>Our main services</h3>
                            <div class="service_box">
                                <div class="services_icon">
                                    <img src="{{ asset('/img/gotarot/services.png') }}" />
                                </div>
                                <div class="service_content">
                                    <h4>Web development</h4>
                                    <p>Lorem ipsum dolor sit <a>amet consectetur</a> adipisicing elit, <strong>sed do eiusmod</strong> tempor</p>
                                </div>
                            </div>
                            <div class="service_box">
                                <div class="services_icon">
                                    <img src="{{ asset('/img/gotarot/layout.png') }}">
                                </div>
                                <div class="service_content" />
                                    <h4>Layout design</h4>
                                    <p>Cras <strong>vestibulum</strong> <a>justo eget lorem</a> semper ac facilisis nulla porta</p>
                                </div>
                            </div>
                            <div class="service_box">
                                <div class="services_icon">
                                    <img src="{{ asset('/img/gotarot/pencil.png') }}" />
                                </div>
                                <div class="service_content">
                                    <h4>Drawing</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>
                            <div class="service_box">
                                <div class="services_icon">
                                    <img src="{{ asset('/img/gotarot/code.png') }}" />
                                </div>
                                <div class="service_content">
                                    <h4>Programming</h4>
                                    <p>Lorem ipsum dolor sit amet, <a><strong>consectetur adipisicing elit</strong></a>, sed do eiusmod tempor</p>
                                </div>
                            </div>
                            <div class="service_box">
                                <div class="services_icon">
                                    <img src="{{ asset('/img/gotarot/travel.png') }}" />
                                </div>
                                <div class="service_content">
                                    <h4>Custom work</h4>
                                    <p>Lorem ipsum dolor sit <a>amet consectetur</a> adipisicing elit, <strong>sed do eiusmod</strong> tempor</p>
                                </div>
                            </div>
                            <div class="service_box">
                                <div class="services_icon">
                                    <img src="{{ asset('/img/gotarot/security.png') }}" />
                                </div>
                                <div class="service_content">
                                    <h4>Security</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                </div>
                            </div>

                            <h3>Prices</h3>

                            <ul class="responsive_table">
                                <li class="table_row">
                                    <div class="table_section_small">Nr</div>
                                    <div class="table_section">Service</div>
                                    <div class="table_section">Price</div>
                                </li>
                                <li class="table_row">
                                    <div class="table_section_small">01</div>
                                    <div class="table_section">Web development</div>
                                    <div class="table_section">1200$</div>
                                </li>
                                <li class="table_row">
                                    <div class="table_section_small">02</div>
                                    <div class="table_section">Drawing</div>
                                    <div class="table_section">600$</div>
                                </li>
                                <li class="table_row">
                                    <div class="table_section_small">03</div>
                                    <div class="table_section">Custom work</div>
                                    <div class="table_section">500$</div>
                                </li>
                                <li class="table_row">
                                    <div class="table_section_small">04</div>
                                    <div class="table_section">Layout design</div>
                                    <div class="table_section">800$</div>
                                </li>
                                <li class="table_row">
                                    <div class="table_section_small">05</div>
                                    <div class="table_section">Security</div>
                                    <div class="table_section">650$</div>
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

    <!-- (4) Blog -->
    <div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
        <div class="swiper-container swiper-nested swiper-free-mode">
            <div class="swiper-wrapper" style="width: 800px; height: 659px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                    <div class="slide-inner">
                        <div class="pages_container">
                            <div class="posts_archive_page">
                                <h2 class="page_title">Blog</h2>
                                <div class="toogle_wrap_blog radius8">
                                    <div class="trigger_blog">
                                        <a>blog categories</a>
                                    </div>
                                    <div class="toggle_container_blog" style="display: none;">
                                        <ul class="listing_detailed">
                                            <li><a>webdesign work</a></li>
                                            <li><a>painted illustrations</a></li>
                                            <li><a>programming and javascript</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="posts">
                                    <li class="post" id="postid1" style="display: list-item;">
                                        <a  class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a>blog category</a>
                                            <span class="post_comments">25 Comments</span>
                                            <a  class="post_readmore">read more</a>
                                        </div>
                                        <div class="post_left">
                                            <span class="day">23</span>
                                            <span class="month">june</span>
                                        </div>
                                    </li>
                                    <li class="post" id="postid2" style="display: list-item;">
                                        <a  class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a>Cras vestibulum justo eget lorem semper ac facilisis nulla porta...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a>programming</a>
                                            <span class="post_comments">18 Comments</span>
                                            <a  class="post_readmore">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">18</span>
                                            <span class="month">sept</span>
                                        </div>
                                    </li>
                                    <li class="post" id="postid3" style="display: list-item;">
                                        <a  class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a>Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a>blog category</a>
                                            <span class="post_comments">11 Comments</span>
                                            <a  class="post_readmore">read more</a>
                                        </div>

                                        <div class="post_left">
                                            <span class="day">09</span>
                                            <span class="month">dec</span>
                                        </div>
                                    </li>
                                    <li class="post" id="postid4" style="display: none;">
                                        <a  class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a>Cras vestibulum justo eget lorem semper ac facilisis nulla porta...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a>programming</a>
                                            <span class="post_comments">06 Comments</span>
                                            <a  class="post_readmore">read more</a>
                                        </div>
                                        <div class="post_left">
                                            <span class="day">12</span>
                                            <span class="month">mart</span>
                                        </div>
                                    </li>
                                    <li class="post" id="postid5" style="display: none;">
                                        <a class="post_more"></a>
                                        <div class="post_right_reveal">
                                            <h4><a>Cras vestibulum justo eget lorem semper ac facilisis nulla porta...</a></h4>
                                        </div>
                                        <div class="post_right_unreveal">
                                            Posted in <a>programming</a>
                                            <span class="post_comments">18 Comments</span>
                                            <a class="post_readmore">read more</a>
                                        </div>
                                        <div class="post_left">
                                            <span class="day">18</span>
                                            <span class="month">sept</span>
                                        </div>
                                    </li>
                                </ul>
                                <div id="loadMore" class="radius8">Load more posts</div>
                                <div id="showLess" class="radius8">No more posts</div>
                            </div> <!--End of posts archive page-->

                            <ul class="post_details_page">
                                <li id="postid1" style="display: none;">
                                    <a class="backtoblog radius8">back to blog</a>
                                    <h2 class="post_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                    <div class="image_single radius4">
                                        <img src="{{ asset('/img/gotarot/page_photo.jpg') }}" border="0">
                                    </div>
                                    <div class="image_caption green green_borderbottom radius4">Image title</div>
                                    <h3>Imagination is our power</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue. Proin dignissim risus ut quam aliquam dignissim. In erat elit, bibendum vitae commodo vitae, bibendum non justo.<br><br> Nunc erat eros, cursus et commodo vitae, pulvinar ac libero. Nullam et scelerisque erat. Cras vestibulum justo eget lorem semper ac facilisis nulla porta.</p>
                                    <h3>Comments</h3>
                                    <div class="comment_row">
                                        <div class="comm_avatar"><img src="{{ asset('/img/gotarot/avatar.jpg') }}"   border="0"></div>
                                        <div class="comm_content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in by <a>comment author</a></p></div>
                                    </div>
                                    <div class="comment_row">
                                        <div class="comm_avatar"><img src="{{ asset('/img/gotarot/avatar.jpg') }}"   border="0"></div>
                                        <div class="comm_content"><p>Nullam et scelerisque erat. Cras vestibulum justo eget lorem semper ac facilisis nulla porta by <a>comment author</a></p></div>
                                    </div>
                                    <h3>Leave a comment</h3>
                                    <div class="form">
                                        <form action="">
                                            <label>Name:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Email:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Comment:</label>
                                            <textarea class="form_textarea radius4" rows="" cols=""></textarea>

                                            <input type="submit" class="form_submit radius4 green green_borderbottom" value="Submit">
                                        </form>
                                    </div>
                                </li>
                                <li id="postid2" style="display: none;">
                                    <a class="backtoblog radius8">back to blog</a>
                                    <h2 class="post_title">Cras vestibulum justo eget lorem semper ac facilisis nulla porta</h2>
                                    <div class="image_single radius4"><img src="{{ asset('/img/gotarot/page_photo.jpg') }}"   border="0"></div>
                                    <div class="image_caption green green_borderbottom radius4">Image title</div>
                                    <h3>Imagination is our power</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue. Proin dignissim risus ut quam aliquam dignissim. In erat elit, bibendum vitae commodo vitae, bibendum non justo.<br><br> Nunc erat eros, cursus et commodo vitae, pulvinar ac libero. Nullam et scelerisque erat. Cras vestibulum justo eget lorem semper ac facilisis nulla porta.</p>
                                    <h3>Comments</h3>
                                    <div class="comment_row">
                                        <div class="comm_avatar"><img src="{{ asset('/img/gotarot/avatar.jpg') }}"   border="0"></div>
                                        <div class="comm_content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in by <a>comment author</a></p></div>
                                    </div>
                                    <h3>Leave a comment</h3>
                                    <div class="form">
                                        <form action="">
                                            <label>Name:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Email:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Comment:</label>
                                            <textarea class="form_textarea radius4" rows="" cols=""></textarea>

                                            <input type="submit" class="form_submit radius4 green green_borderbottom" value="Submit">
                                        </form>
                                    </div>
                                </li>
                                <li id="postid3" style="display: none;">
                                    <a class="backtoblog radius8">back to blog</a>
                                    <h2 class="post_title">Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue</h2>
                                    <div class="image_single radius4"><img src="{{ asset('/img/gotarot/page_photo.jpg') }}"   border="0"></div>
                                    <div class="image_caption green green_borderbottom radius4">Image title</div>
                                    <h3>Imagination is our power</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue. Proin dignissim risus ut quam aliquam dignissim. In erat elit, bibendum vitae commodo vitae, bibendum non justo.<br><br> Nunc erat eros, cursus et commodo vitae, pulvinar ac libero. Nullam et scelerisque erat. Cras vestibulum justo eget lorem semper ac facilisis nulla porta.</p>
                                    <h3>Comments</h3>
                                    <div class="comment_row">
                                        <div class="comm_avatar"><img src="{{ asset('/img/gotarot/avatar.jpg') }}"   border="0"></div>
                                        <div class="comm_content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in by <a>comment author</a></p></div>
                                    </div>
                                    <h3>Leave a comment</h3>
                                    <div class="form">
                                        <form action="">
                                            <label>Name:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Email:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Comment:</label>
                                            <textarea class="form_textarea radius4" rows="" cols=""></textarea>

                                            <input type="submit" class="form_submit radius4 green green_borderbottom" value="Submit">
                                        </form>
                                    </div>
                                </li>
                                <li id="postid4" style="display: none;">
                                    <a class="backtoblog radius8">back to blog</a>
                                    <h2 class="post_title">Cras vestibulum justo eget lorem semper ac facilisis nulla porta</h2>
                                    <div class="image_single radius4"><img src="{{ asset('/img/gotarot/page_photo.jpg') }}"   border="0"></div>
                                    <div class="image_caption green green_borderbottom radius4">Image title</div>
                                    <h3>Imagination is our power</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue. Proin dignissim risus ut quam aliquam dignissim. In erat elit, bibendum vitae commodo vitae, bibendum non justo.<br><br> Nunc erat eros, cursus et commodo vitae, pulvinar ac libero. Nullam et scelerisque erat. Cras vestibulum justo eget lorem semper ac facilisis nulla porta.</p>
                                    <h3>Comments</h3>
                                    <div class="comment_row">
                                        <div class="comm_avatar"><img src="{{ asset('/img/gotarot/avatar.jpg') }}"   border="0"></div>
                                        <div class="comm_content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in by <a>comment author</a></p></div>
                                    </div>
                                    <h3>Leave a comment</h3>
                                    <div class="form">
                                        <form action="">
                                            <label>Name:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Email:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Comment:</label>
                                            <textarea class="form_textarea radius4" rows="" cols=""></textarea>

                                            <input type="submit" class="form_submit radius4 green green_borderbottom" value="Submit">
                                        </form>
                                    </div>
                                </li>
                                <li id="postid5" style="display: none;">
                                    <a class="backtoblog radius8">back to blog</a>
                                    <h2 class="post_title">Cras vestibulum justo eget lorem semper ac facilisis nulla porta</h2>
                                    <div class="image_single radius4"><img src="{{ asset('/img/gotarot/page_photo.jpg') }}"   border="0"></div>
                                    <div class="image_caption green green_borderbottom radius4">Image title</div>
                                    <h3>Imagination is our power</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in tempus volutpat, posuere ullamcorper augue. Proin dignissim risus ut quam aliquam dignissim. In erat elit, bibendum vitae commodo vitae, bibendum non justo.<br><br> Nunc erat eros, cursus et commodo vitae, pulvinar ac libero. Nullam et scelerisque erat. Cras vestibulum justo eget lorem semper ac facilisis nulla porta.</p>
                                    <h3>Comments</h3>
                                    <div class="comment_row">
                                        <div class="comm_avatar"><img src="{{ asset('/img/gotarot/avatar.jpg') }}"   border="0"></div>
                                        <div class="comm_content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit sapien, eleifend in by <a>comment author</a></p></div>
                                    </div>
                                    <h3>Leave a comment</h3>
                                    <div class="form">
                                        <form action="">
                                            <label>Name:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Email:</label>
                                            <input type="text" class="form_input radius4">
                                            <label>Comment:</label>
                                            <textarea class="form_textarea radius4" rows="" cols=""></textarea>

                                            <input type="submit" class="form_submit radius4 green green_borderbottom" value="Submit">
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <div class="scrolltop radius20"><a><img src="{{ asset('/img/gotarot/top.png') }}" alt="Go on top" title="Go on top"></a></div>
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