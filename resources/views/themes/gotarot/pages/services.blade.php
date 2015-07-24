@include('themes.gotarot.partials.contentPageWrapperTop')
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
        <div class="service_content">
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
@include('themes.gotarot.partials.contentPageWrapperBottom')