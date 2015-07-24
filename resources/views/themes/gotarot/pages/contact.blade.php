@include('themes.gotarot.partials.contentPageWrapperTop')
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

@include('themes.gotarot.partials.contentPageWrapperBottom')