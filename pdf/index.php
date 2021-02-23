<?php
$getfile = filter_input(INPUT_GET, 'f', FILTER_SANITIZE_STRING);
require_once dirname(dirname(__FILE__)) . '/config.php';
$filepath = dirname(dirname(__FILE__)).'/'.$_CONFIG['qrcodes_dir'].'/'.$getfile.'.svg';
if (file_exists($filepath)) {
    include_once dirname(__FILE__).'/mpdf/autoload.php';

    $mpdf = new \Mpdf\Mpdf(['mode' => 'c']); // Only core fonts
    $mpdf->imageVars['myvariable'] = file_get_contents($filepath);
    $mpdf->SetTitle('QR code');
    $image = '<div style="width:100%; text-align: center;"><img style="height: auto; max-width:100%; margin:0 auto;" src="var:myvariable" /></div>';

    $mpdf->WriteHTML($image);
    $mpdf->Output('qrcode.pdf', 'I');
} else {
  header('Location: ../');
}
exit;
