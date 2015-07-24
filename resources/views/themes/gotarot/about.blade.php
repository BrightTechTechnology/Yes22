@include('themes.gotarot.partials.contentPageWrapperTop')

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

@include('themes.gotarot.partials.contentPageWrapperBottom')