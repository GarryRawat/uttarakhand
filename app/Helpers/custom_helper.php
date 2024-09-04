<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require APPPATH . 'Libraries/PHPMailer/vendor/autoload.php';
// work in online 
// function getuserIpAddress()
// {


//   $ip_address = '';

//   if (isset($_SERVER['HTTP_CLIENT_IP'])) {
//       $ip_address = $_SERVER['HTTP_CLIENT_IP'];
//   } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//       $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
//   } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
//       $ip_address = $_SERVER['HTTP_X_FORWARDED'];
//   } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
//       $ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
//   } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
//       $ip_address = $_SERVER['HTTP_FORWARDED'];
//   } elseif (isset($_SERVER['REMOTE_ADDR'])) {
//       $ip_address = $_SERVER['REMOTE_ADDR'];
//   }

// return $ip_address;

// }

// end in online 


// work in local server

function getuserIpAddress(){
  $ip_address = 'Unable to determine IP address';
  if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $command = 'ipconfig';
    $output = shell_exec($command);
    if (preg_match('/IPv4 Address.*?: ([\d\.]+)/', $output, $matches)) {
      $ip_address = $matches[1];
    }
  } else {
    $command = 'hostname -I';
    $output = shell_exec($command);
    $ip_addresses = explode(' ', trim($output));
    if (!empty($ip_addresses[0])) {
      $ip_address = $ip_addresses[0];
    }
  }
  return $ip_address;
}

function getcommencount($id)
{
  $db = db_connect();
  return $db->table('user_comments')
    ->where('blog_id', $id)
    ->countAllResults();
}
function getBlogsLikescount($id){
  $db = db_connect();
  return $db->table('blog_likes')
    ->where('blog_id', $id)
    ->countAllResults();
}
// end in local server

function getEmailTemplate($content){
  $html = '<!-- Free to use, HTML email template designed & built by FullSphere. Learn more about us at www.fullsphere.co.uk -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>

  <!--[if gte mso 9]>
  <xml>
    <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
  </xml>
  <![endif]-->

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="x-apple-disable-message-reformatting">
  <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->

    <!-- Your title goes here -->
    <title>Newsletter</title>
    <!-- End title -->

    <!-- Start stylesheet -->
    <style type="text/css">
      a,a[href],a:hover, a:link, a:visited {
        /* This is the link colour */
        text-decoration: none!important;
        color: #0000EE;
      }
      .link {
        text-decoration: underline!important;
      }
      p, p:visited {
        /* Fallback paragraph style */
        font-size:15px;
        line-height:24px;
        font-family:"Helvetica", Arial, sans-serif;
        font-weight:300;
        text-decoration:none;
        color: #000000;
      }
      h1 {
        /* Fallback heading style */
        font-size:22px;
        line-height:24px;
        font-family:"Helvetica", Arial, sans-serif;
        font-weight:normal;
        text-decoration:none;
        color: #000000;
      }
      .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {line-height: 100%;}
      .ExternalClass {width: 100%;}
    </style>
    <!-- End stylesheet -->

  
  
</head>

  <!-- You can change background colour here -->
  <body style="text-align: center; margin: 0; padding-top: 10px; padding-bottom: 10px; padding-left: 0; padding-right: 0; -webkit-text-size-adjust: 100%;background-color: #f2f4f6; color: #000000" align="center">
  
  <!-- Fallback force center content -->
  <div style="text-align: center;">

    <!-- Email not displaying correctly 
    <table align="center" style="text-align: center; vertical-align: middle; width: 600px; max-width: 600px;" width="600">
      <tbody>
        <tr>
          <td style="width: 596px; vertical-align: middle;" width="596">

            <p style="font-size: 11px; line-height: 20px; font-family: "Helvetica", Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">Is this email not displaying correctly? <a class="link" style="text-decoration: underline;" target="_blank" href="https://fullsphere.co.uk/html-emails/free-template/"><u>Click here</u></a> to view in browser</p>

          </td>
        </tr>
      </tbody>
    </table>
     Email not displaying correctly -->
    
    <!-- Start container for logo -->
    <table align="center" style="text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #ffffff;" width="600">
      <tbody>
        <tr>
          <td style="width: 596px; vertical-align: top; padding-left: 0; padding-right: 0; padding-top: 15px; padding-bottom: 15px;" width="596">

            <!-- Your logo is here -->
            <img style="width: 180px; max-width: 180px; height: 85px; max-height: 85px; text-align: center; color: #ffffff;" alt="Logo" src="http://localhost/uttrakhand//public/frontend/images/DeVELOPERS3.png" align="center" width="180" height="85">

          </td>
        </tr>
      </tbody>
    </table>
    <!-- End container for logo -->

    <!-- Hero image -->
    <img style="width: 600px; max-width: 600px; height: 350px; max-height: 350px; text-align: center;" alt="Hero image" src="<?= base_url() ?>/public/frontend/images/home-2.jpg" align="center" width="600" height="350">
    <!-- Hero image -->

    <!-- Start single column section -->
    <table align="center" style="text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #ffffff;" width="600">
        <tbody>
          <tr>
            <td style="width: 596px; vertical-align: top; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 40px;" width="596">

              ' . $content . '           


            </td>
          </tr>
        </tbody>
      </table>
      <!-- End single column section -->
      
      <!-- Start image -->
      <img style="width: 600px; max-width: 600px; height: 240px; max-height: 240px; text-align: center;" alt="Image" src="https://fullsphere.co.uk/misc/free-template/images/image-2.jpg" align="center" width="600" height="240">
      <!-- End image -->

      
    
      <!-- Start footer -->
      <table align="center" style="text-align: center; vertical-align: top; width: 600px; max-width: 600px; background-color: #000000;" width="600">
        <tbody>
          <tr>
            <td style="width: 596px; vertical-align: top; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 30px;" width="596">

              <!-- Your inverted logo is here -->
              <img style="width: 180px; max-width: 180px; height: 85px; max-height: 85px; text-align: center; color: #ffffff;" alt="Logo" src="http://localhost/uttrakhand//public/frontend/images/DeVELOPERS3.png" align="center" width="180" height="85">

              <p style="font-size: 13px; line-height: 24px; font-family: "Helvetica", Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;">
                Address line 1, London, L2 4LN
              </p>

              <p style="margin-bottom: 0; font-size: 13px; line-height: 24px; font-family: "Helvetica", Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;">
                <a target="_blank" style="text-decoration: underline; color: #ffffff;" href="https://fullsphere.co.uk">
                  www.fullsphere.co.uk
                </a>
              </p>

            </td>
          </tr>
        </tbody>
      </table>
      <!-- End footer -->
  </div>
  </body>
</html>';

  return $html;
}

function sendMail($email, $content){

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->isHTML(true);
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'rwtgaurav40@gmail.com';
  $mail->Password = 'vghzkrfevvgjnani';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port = 465;
  $mail->setFrom('rwtgaurav40@gmail.com', 'Wolves Travel');
  $mail->addAddress($email);
  $mail->Subject = 'Wolve Travel';
  $mail->Body = $content;

  if ($mail->send()) {
    return true;
  } else {
    return false;
    echo 'Email could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
}

function sendMailforsubscriber($content, $type)
{
  $db = db_connect();
  $query = $db->table('subscribers')
    ->get()
    ->getResultArray();
  if ($type == 'blog') {
    $content = '
    <h2>Check Out Our Latest Blog!</h2>
    <p>We are excited to share our newest blog post with you. Discover the latest updates, travel tips, and stories from Wolves Travel.</p>
    <p>Click <a href="[Blog URL]">here</a> to read the full post.</p>
    <p>If you have any questions or feedback, feel free to reach out to us at [Your Contact Information].</p>
    <p>Happy Reading!</p>
    <p>Best regards,</p>
    <p>Wolves Travel Team</p>
';
  }
  // else if(ty)

  $email_content = getEmailTemplate($content);
  // $subscribeArr = [];
  foreach ($query as $allsubscribers) {

    $emailSent = sendMail($allsubscribers['email'], $email_content);
  }

  if ($emailSent) {
    return true;
  } else {
    return false;
  }
}


function getAllDataBySearch($searchTerm){
  $db = db_connect();
  $blogItems = $db->table('blogs')
    ->select('blogs.slug,blogs.blog_title')
    ->like('blogs.blog_title', $searchTerm)
    ->get()
    ->getResultArray();

  $combinedResults = [];
  if ($blogItems) {

    foreach ($blogItems as $blog) {
      $combinedResults[] = [
        'name' => $blog['blog_title'],
        'url' => base_url() . 'blogdetails/' . $blog['slug'],
      ];
    }
  }
  $uttarakhadArray = $db->table('explore_uttarakhand')
    ->select('explore_uttarakhand.slug,explore_uttarakhand.place,cities.city_name')
    ->join('cities', 'cities.id = explore_uttarakhand.city_id')
    ->like('place', $searchTerm)
    ->get()
    ->getResultArray();

  $ukArr = [];
  if ($uttarakhadArray) {

    foreach ($uttarakhadArray as $uttrakhand):
      $combinedResults[] = [
        'name' => $uttrakhand['place'],
        'url' => base_url() . $uttrakhand['city_name'] . '/' . $uttrakhand['slug'],
      ];
    endforeach;
  }


  $citiesArray = $db->table('cities')

    ->like('city_name', $searchTerm)
    ->get()
    ->getResultArray();

  $cityArr = [];

  if ($citiesArray) {

    foreach ($citiesArray as $city):
      $combinedResults[] = [
        'name' => $city['city_name'],
        'url' => base_url() . $city['city_name'],
      ];
    endforeach;
  }
  return json_encode($combinedResults);
}

function get_pages_meta_header(){

  $db = db_connect();



}
