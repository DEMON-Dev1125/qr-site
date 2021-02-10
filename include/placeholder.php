<!-- <nav class="navbar sticky-top"> -->
<div class=" bg-light">
    <div class="form-group text-center wrapresult">
        <div class="resultholder">
            <img class="img-fluid" src="<?php echo $relative.qrcdr()->getConfig('placeholder'); ?>" />
            <div class="infopanel"></div>
        </div>
    </div>
    <div class="preloader"><i class="fa fa-cog fa-spin"></i></div>
    <input type="hidden" class="holdresult">
    <!-- <button class="btn btn-lg btn-block btn-primary ellipsis generate_qrcode<?php echo $rounded_btn_save; ?>" disabled><i class="fa fa-check"></i> <?php echo qrcdr()->getString('save'); ?></button> -->
    <div class="text-center mt-2 linksholder"></div>
</div>
<!-- </nav> -->
<div class="mt-3">
    <?php
    if (file_exists(dirname(dirname(__FILE__)).'/'.$relative.'include/options.php')) {
        include dirname(dirname(__FILE__)).'/'.$relative.'include/options.php';
    }
    ?>
</div>
<div class="right__footer">
    <div class="row">
        <div class="col-6 col-sm-6 col-lg-12 col-xl-6 download">
            <a href="">
                <img src="<?php echo $relative?>svg/buttons/down_first.svg" alt="" />
            </a>
            <!-- <button class="btn btn-lg btn-block btn-primary ellipsis generate_qrcode<?php echo $rounded_btn_save; ?>" disabled><i class="fa fa-check"></i> <?php echo qrcdr()->getString('save'); ?></button> -->
        </div>
        <div class="col-6 col-sm-6 col-lg-12 col-xl-6 vector">
            <a href="">
                <img src="<?php echo $relative?>svg/buttons/vector_first.svg" alt="" />
            </a>
        </div>
    </div>
</div>