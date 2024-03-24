<?php //HERO BANNER BLOCK ?>

<div class="container-fluid" style="background:black;padding:0;">
<div class="container-fluid hero" style="background: url(<?php the_field('background_image')?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-5">
                <div><?php the_field('title')?></div> 
                <div><?php the_field('text')?></div>
                <div><img src="<?php the_field('logo')?>" alt="logo"></div>  
            </div>
        </div>
    </div>
</div>

<div id="hero-scroll-img"><a href="#air-ambulance"><img src="/app/uploads/2022/10/horizontal.svg" alt="avcair"></a></div>
</div>