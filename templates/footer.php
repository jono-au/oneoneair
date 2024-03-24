<footer>

<?php if( have_rows('footer','options') ): ?>

<div class="container contact">
    <div class="row">
    <?php while( have_rows('footer','options') ) : the_row(); 
        $text = get_sub_field('text');
    ?>
<div class="col-md-3 col-sm-6">
    <p><?php echo $text;?></p>
</div>     

    <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>


<div class="container socials">
    <div class="row">
        <div class="col"><img src="/app/uploads/2022/10/OneOneAir_RGB_Logo_without_TD_Mono_White-1.svg" alt="avcair"></div>
        <div class="col"><img src="/app/uploads/2022/10/Frame-2.svg" alt="avcair"></div>
        <div class="col">
            <a href="<?php the_field('facebook_link' ,'options')?>" target="_blank"><img src="/app/uploads/2022/10/Facebook-Negative.svg" alt="avcair" ></a>
            <a href="<?php the_field('instagram_link' ,'options')?>" target="_blank"><img src="/app/uploads/2022/10/Instagram-Negative.svg" alt="avcair" ></a>
            <a href="<?php echo get_field('linkedin_link' ,'options')?>" target="_blank"><img src="/app/uploads/2022/10/LinkedIn-Negative.svg" alt="avcair" ></a>
        </div>
    </div>
</div>

<div class="container tc">
    <div class="row">
        <div class="col">
            <ul>
                <li><a href="#">TERMS & CONDITIONS</a></li>
                <li><a href="#">PRIVACY POLICY</a></li>
                <li><a href="#">STANDARD GROUND HANDLING POLICY</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container copyright">
    <div class="row">
        <div class="col">
            <p><?php echo date("Y");?> COPYRIGHT AVCAIR. ALL RIGHTS RESERVED. </p>
            <p>Created by DAIS.</p>
        </div>
    </div>
</div>
</footer>

<script>
    document.getElementById("gform_submit_button_1").value = "Submit Enquiry";
</script>
