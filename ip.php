<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body
  <div class="header-logo">
    <div class="block">
    </div>
  </div>
  <style type="text/css">
    *{
      padding: 0;
      margin: 0;
    }
    .header-logo{
      box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      max-width: 100%;
      margin-bottom: 100px;
    }
    .block{
      max-width: 100%;
    }
  </style>
  <?php

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


echo "Your IP address is: " . get_client_ip();
?>
  </body>
</html>
