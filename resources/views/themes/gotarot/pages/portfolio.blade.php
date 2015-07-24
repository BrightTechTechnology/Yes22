@include('themes.gotarot.partials.contentPageWrapperTop')
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
@include('themes.gotarot.partials.contentPageWrapperBottom')