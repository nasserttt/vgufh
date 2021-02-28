<?php
require 'libs/vendor/autoload.php';
ob_start();
?>

<body style="background-color:#fff;">
  <div style="position: relative;background-color:#D90405;height:50px;width:100%;border-bottom:4px solid #484242;"></div>
  <div style="width: 160px;
  float:right;
  margin-top:-25px;
  margin-right:40px;
  text-align:center;
  text-transform:uppercase;
  color:#959595;
  font-size:16px;
  font-weight:600;">
        <img src="imgs/logo.jpg" alt="" class="img-fluid" style="width:105px;margin:auto;">
        <p style="font-weight:700;margin-top:2px;">
          tedcodeteam <br>
          date: <?=date("d/m/Y")?>
        </p>
      </div>
  <br><br><br><br>
  <table style="width:100%;">
    <tr>
      <td style="width:100%;font-size:24px;">
         <div styl="color:#444444;">
            <h2 style="text-transform:uppercase;
  border-bottom: 2px solid #444444;
  display:inline-block;
  font-weight:bold;
  padding-bottom:5px;font-size:2.2rem;color:#444444;">Quotation</h2>
           <br>
            <p style="text-transform:uppercase;font-weight:600;color:#444444;">tedcodeteam</p>
            <p  style="text-transform:uppercase;font-weight:600;color:#444444;">oman, suhar</p>
            <p styl="color:#444444;"><span style="text-transform:uppercase;font-weight:600;color:#444444;">phone:</span> 96609659/98358233</p>
            <p styl="color:#444444;"><span  style="text-transform:uppercase;font-weight:600;color:#444444;">email:</span> tedcodeteam@gmail.com</p>
            <p style="text-transform:uppercase;font-weight:600;color:#444444;">tedcodeteam</p>
            <p style="text-transform:uppercase;font-weight:600;color:#444444;">www.tedcodeteam.com</p>
          </div>
        <br><br>
      </td>
      
    </tr>
    <tr>
      <td style="background-color:#D90405;color: #fff;padding:12px;border-radius: 8px;width:20%;font-size:24px;">
        <p style="text-transform:uppercase;">- quote to :</p>
      </td>
      <td  style="width:80%;"></td>
    </tr>
    <tr>
      <td style="width:100%;font-size:24px;padding-left:30px;">
        <p style="text-transform:uppercase;font-weight:600;color:#444444;border-bottom:1px solid #e3e3e3;display:inline-block;"><?=$_POST['client_name']?></p>
        <br><br>
      </td>
    </tr>
    
    <tr>
      <td style="width:100%;background-color: #444444;height:30px;" colspan="2"></td>
    </tr>
  </table>
  <br>
  <?php $col_style="width:25%;border-left: 1.5px solid #515151; border-right: 1.5px solid #515151;border-top: 2px solid #515151;border-bottom: 2px solid #515151;padding:12px;"; ?>
   <table style="width:100%;border-collapse: collapse;">
        <thead>
          <tr>
            <th style="color:red;<?=$col_style?>">Description</th>
            <th style="color:red;<?=$col_style?>">Unit Price</th>
            <th style="color:red;<?=$col_style?>">Qty</th>
            <th style="color:red;<?=$col_style?>">Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php for($i=1; $i<=$_POST['count']; $i++): ?>
          <tr>
            <td style="<?=$col_style?>" class="rowDesc"><?=$_POST['product_desc_'.$i]?></td>
            <td style="color:red;<?=$col_style?>" class="text-danger"><?=$_POST['product_unit_price_'.$i]?></td>
            <td style="color:red;<?=$col_style?>" class="text-danger"><?=$_POST['product_qty_'.$i]?></td>
            <td style="color:red;<?=$col_style?>" class="text-danger"><?=round(($_POST['product_unit_price_'.$i]*$_POST['product_qty_'.$i]),2)?></td>
          </tr>
          <?php endfor; ?> 
          <tr>
            <td style="<?=$col_style?>"></td>
            <td style="<?=$col_style?>"></td>
            <td style="<?=$col_style?>">Total</td>
            <td style="<?=$col_style?>"><span id="totalAmount" class="text-danger"><?=$_POST['total_amount']?></span> OMR</td>
          </tr>
          <tr>
            <td colspan="4" style="color:red;<?=$col_style?>;letter-spacing:2px;font-size:18px;text-align:center;">Suggested Services</td>
          </tr>
          <tr>
            <td style="<?=$col_style?>" class="rowDesc">Company Profile</td>
            <td style="color:red;<?=$col_style?>" class="text-danger">35</td>
            <td style="color:red;<?=$col_style?>" class="text-danger">1</td>
            <td style="color:red;<?=$col_style?>" class="text-danger">35</td>
          </tr>
          <tr>
            <td style="<?=$col_style?>" class="rowDesc">QR code of company profile</td>
            <td style="color:red;<?=$col_style?>" class="text-danger">Free</td>
            <td style="color:red;<?=$col_style?>" class="text-danger"></td>
            <td style="color:red;<?=$col_style?>" class="text-danger"></td>
          </tr>
          <tr>
            <td style="<?=$col_style?>" class="rowDesc">Email Signature</td>
            <td style="color:red;<?=$col_style?>" class="text-danger">5</td>
            <td style="color:red;<?=$col_style?>" class="text-danger">1</td>
            <td style="color:red;<?=$col_style?>" class="text-danger">5</td>
          </tr>
        </tbody>
      </table>
  
  <br><br>
  
  <div style="border:3px solid #444444;font-weight:bold;padding: 4px 15px;">
      <p style="color:red;margin:0;text-transform:uppercase;"><u><i>Note</i></u></p>
      <p style="margin:0;font-weight:600;">OFFICIAL EMAIL HOSTING services also provided in request</p>
    </div>
    <br>
  <table style="width:100%;">
    <tr>
      <td style="width:100;text-align:center;">
        <p styl="text-align:center;font-weight:600;">
          If you have any question about this Quote, <br>
          Please contact TEDCODETEAM <br>
          <span style="color:red">- Waiting to Hear From You</span>
        </p>
      </td>
    </tr>
  </table>
  <br><br>
  <table  style="width:100%;border-collapse: collapse;color:white;">
    <tr>
      <td style="width:33.33%;background-color:#D90405;height:50px;">
        <img src="imgs/web_icon.png" style="width:25px;vertical-align:middle" alt=""> www.tedcodeteam.com 
      </td>
      <td style="width:33.33%;background-color:#D90405;height:50px;">
        <img src="imgs/instagram_icon.png" style="width:25px;vertical-align:middle" alt=""> TEDCODETEAM
      </td>
      <td style="width:33.33%;background-color:#D90405;height:50px;">
        <img src="imgs/whatsapp_icon.png" style="width:25px;vertical-align:middle" alt=""> 96609659/98358233
      </td>
    </tr>
  </table>
    
</body>

<?php

$template = ob_get_clean();
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];
  
$mpdf = new \Mpdf\Mpdf([
  'mode' => 'utf-8',
  'format' => 'A4',
  'margin_left' => 10,
  'margin_right' => 10,
  'margin_top' => 0,
  'margin_bottom' => 10,
  'margin_header' => 0,
  'margin_footer' => 0,
  'fontDir' => array_merge($fontDirs, [
    __DIR__ . '/libs/vendor/mpdf/mpdf/ttfonts',
  ]),
  'fontdata' => $fontData + [
    'Exo2' => [
      'R' => 'Exo2-VariableFont_wght',
    ]
  ],
  'default_font' => 'Exo2'

]);

$mpdf->WriteHTML($template);
$file_name = 'quotation_'.date("d_M_Y_h_i_s_a").'.pdf';
$generated_pdf_path = 'files/'.$file_name;
$mpdf->Output($generated_pdf_path,'F');
                echo $generated_pdf_path;
?>