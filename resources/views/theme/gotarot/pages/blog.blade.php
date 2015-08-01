@include('theme.gotarot.partials.contentPageWrapperTop')

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
@include('theme.gotarot.partials.contentPageWrapperBottom')