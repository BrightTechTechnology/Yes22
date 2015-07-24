@include('themes.gotarot.partials.contentPageWrapperTop')
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
@include('themes.gotarot.partials.contentPageWrapperBottom')