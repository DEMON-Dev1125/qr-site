<?php
$accordion_parent = qrcdr()->getConfig('accordion') == true ? ' data-parent="#collapseSettings"' : '';
$collapsed = qrcdr()->getConfig('accordion') == true ? '' : ' show';
?>
<div class="accordion" id="collapseSettings">
    <button class="btn btn-primary btn-lg btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseColors">
        <span class="vertical-middle text-white font-weight-bold"><?php echo qrcdr()->getString('options'); ?></span>
    </button>
    <div class="collapse<?php echo $collapsed; ?> bg-light py-2" id="collapseColors"<?php echo $accordion_parent; ?>>
        <div class="col-sm-12 mb-2 custom-background">
            <div class="row">
                <div class="col-sm-6">
                    <label><?php echo qrcdr()->getString('background'); ?></label>
                    <div class="collapse show" id="collapse-background">
                        <div class="input-group qrcolorpicker colorpickerback">
                            <div class="input-group-prepend">
                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                            </div>
                            <input type="text" class="form-control" data-format="hex" value="<?php echo $stringbackcolor; ?>" name="backcolor">
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-control custom-switch mt-2">
              <input type="checkbox" class="custom-control-input collapse-control-reversed" id="trans-bg" name="transparent" data-target="#collapse-background">
              <label class="custom-control-label" for="trans-bg"><?php echo qrcdr()->getString('transparent_background'); ?></label>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <label><?php echo qrcdr()->getString('foreground'); ?></label>
                    <div class="input-group qrcolorpicker mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </div>
                        <input type="text" class="form-control" data-format="hex" 
                        value="<?php echo $stringfrontcolor; ?>" name="frontcolor">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input collapse-control" id="gradient-bg" data-target="#collapse-gradient" name="gradient">
                          <label class="custom-control-label" for="gradient-bg"><?php echo qrcdr()->getString('gradient'); ?></label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="collapse" id="collapse-gradient">
                        <label><?php echo qrcdr()->getString('second_color'); ?></label>
                        <div class="input-group qrcolorpicker mb-2" id="collapse-gradient">
                            <div class="input-group-prepend">
                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                            </div>
                            <input type="text" class="form-control qrcolorpicker_bg" data-format="hex" value="#8900D5" name="gradient_color">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="radial-gradient" name="radial">
                              <label class="custom-control-label" for="radial-gradient"><?php echo qrcdr()->getString('radial'); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mb-2">

            <div class="row collapse collapse-markers-bg">
                <div class="col-sm-6 mt-2">
                    <label><?php echo qrcdr()->getString('marker_outline'); ?></label>
                    <div class="input-group qrcolorpicker">
                        <div class="input-group-prepend">
                            <span class="input-group-text colorpicker-input-addon"><i><div class="colorpicker-minisquare"></div></i></span>
                        </div>
                        <input type="text" class="form-control" data-format="hex" value="<?php echo $stringfrontcolor; ?>" name="marker_out_color">
                    </div>
                </div>

                <div class="col-sm-6 mt-2">
                    <label><?php echo qrcdr()->getString('marker_center'); ?></label>
                    <div class="input-group qrcolorpicker">
                        <div class="input-group-prepend">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </div>
                        <input type="text" class="form-control" data-format="hex" value="<?php echo $stringfrontcolor; ?>" name="marker_in_color">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-2">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input collapse-control" id="markers-bg" data-target=".collapse-markers-bg" name="markers_color">
                      <label class="custom-control-label" for="markers-bg"><?php echo qrcdr()->getString('custom_markers_colors'); ?></label>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-12 mb-2">
            <div class="row">
                <div class="col-sm-6">
                    <label><?php echo qrcdr()->getString('size'); ?></label>
                    <select name="size" class="custom-select qrcode-size-selector">
                <?php
                for ($i=8; $i<=32; $i+=4) {
                    $value = $i*25;
                    echo '<option value="'.$i.'" '.( $matrixPointSize == $i ? 'selected' : '' ) . '>'.$value.'</option>';
                }; ?>
                    </select>
                </div>

                <div class="col-sm-6">
                    <label><?php echo qrcdr()->getString('error_correction_level'); ?></label>
                    <select name="level" class="custom-select">
                        <option value="L" <?php if ($errorCorrectionLevel=="L") echo "selected"; ?>>
                            <?php echo qrcdr()->getString('precision_l'); ?>
                        </option>
                        <option value="M" <?php if ($errorCorrectionLevel=="M") echo "selected"; ?>>
                            <?php echo qrcdr()->getString('precision_m'); ?>
                        </option>
                        <option value="Q" <?php if ($errorCorrectionLevel=="Q") echo "selected"; ?>>
                            <?php echo qrcdr()->getString('precision_q'); ?>
                        </option>
                        <option value="H" <?php if ($errorCorrectionLevel=="H") echo "selected"; ?>>
                            <?php echo qrcdr()->getString('precision_h'); ?>
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    

    <button class="mt-2 btn btn-primary btn-lg btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseWatermark">
        <span class="vertical-middle text-white font-weight-bold"><?php echo qrcdr()->getString('logo'); ?></span>
    </button>
    <div class="collapse<?php echo $collapsed; ?> bg-light py-2" id="collapseWatermark"<?php echo $accordion_parent; ?>>
        <?php
        if (qrcdr()->getConfig('uploader') == true) {
            ?>
        <div class="col-12">
            <small><?php echo qrcdr()->getString('upload_or_select_watermark'); ?></small>
            <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" aria-describedby="validate-upload" id="upmarker">
                <div id="validate-upload" class="invalid-feedback">
                    <?php echo qrcdr()->getString('invalid_image'); ?>
                </div>
            <label class="custom-file-label" for="file"></label>
            </div>
        </div>
            <?php
        }
        /**
        * Watermarks
        */
        $waterdir = $relative."images/watermarks/";
        $watermarks = glob($waterdir.'*.{gif,jpg,png,svg}', GLOB_BRACE);
        $count = count($watermarks);
        if (qrcdr()->getConfig('uploader') == true || $count > 0) {
            $listwatermarks = '';
            foreach ($watermarks as $key => $water) {
                $listwatermarks .= '<label class="btn btn-light';
                if ($optionlogo == $water) $listwatermarks .= ' active ';

                $watervalue = $water;
                if (substr($water, 0, strlen($relative)) == $relative) {
                    $watervalue = substr($water, strlen($relative));
                }

                $listwatermarks .= '"><input type="radio" name="optionlogo" value="'.$watervalue.'"';
                if ($optionlogo == $watervalue) $listwatermarks .= ' checked';
                $listwatermarks .= ' id="optionlogo'.$key.'"><img src="'.$water.'"></label>';
            }
            ?>
            <div class="col-12 pt-2">
                <div class="logoselecta form-group">
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-light active">
                            <input type="radio" name="optionlogo" value="none" checked="">
                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </label><?php echo $listwatermarks; ?>
                        <label class="btn btn-light custom-watermark"><input type="radio" name="optionlogo" value=""><div class="hold-custom-watermark"></div></label>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-2">
                <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="no-logo-bg" name="no_logo_bg">
                <label class="custom-control-label" for="no-logo-bg"><?php echo qrcdr()->getString('no_logo_background'); ?></label>
                </div>
            </div>
            <?php
        }
        ?>
    </div> <!-- collapse logo -->
    
</div><!-- collapseSettings -->
