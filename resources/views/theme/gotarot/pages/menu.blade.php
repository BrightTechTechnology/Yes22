
<div class="swiper-slide sliderbg" style="width: 800px; height: 511px;">
    <div class="swiper-container swiper-nested swiper-free-mode">
        <div class="swiper-wrapper" style="width: 800px; height: 847px;">
            <div class="swiper-slide swiper-slide-visible swiper-slide-active">
                <div class="slide-inner">
                    <div class="menu">
                        <ul>
                            <?php
                                $i = 1;
                                if (in_array('splash', $pages)) {$i ++;}

                                foreach($pages as $description => $page) {
                                    $exclude_list = ['Splash', 'Menu', 'Suppliers'];
                                    if( ! in_array($description, $exclude_list)){
                                        echo '<li><a onclick="swiperParent.swipeTo('.$i.');"><img src="/img/gotarot/'.$page.'.png"><span>'.$description.'</span></a></li>';
                                        $i = $i + 1;
                                    }
                                    if ($description == 'Suppliers'){
                                        foreach ($page as $supplier){
                                            echo '<li style="background-image: none!important;"><a onclick="swiperParent.swipeTo('.$i.');">
                                                <img style="width:100%!important; max-width:100%!important; border: 3px #dddddd solid;" class="img img-circle" src="/img/upload/supplier/supplier'.$supplier['id'].'.jpg">
                                                <span>'.$supplier['name'].'</span>
                                            </a></li>';
                                            $i = $i + 1;
                                        }
                                    }

                                }
                            ?>
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