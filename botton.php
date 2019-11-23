<?php
  $file = ”buttonStatus.txt”;
  $handle = fopen($file,’w+’);
if (isset($ POST[’on’]))
 {
    $onstring = ”ON”;
    fwrite($handle,$onstring);
    fclose($handle);
    print ”

    <html>
    <body>
    <title>Home automation</title>
    <style type=text/css>
    h1
    {
        padding-left: 300px;
    }
    h2
    {
        position: absolute;
        top: 100px;
        left: 450px;
    }
    </style>
    h1>Internet of Things Implementation/h1>
    <h2>The Device has been Turned ON </h2>
    </body>
    </html>
    ”;
}
else if(isset($ POST[’off’]))
{
    $offstring = ”OFF”;
    fwrite($handle, $offstring);
    fclose($handle);
    print ”
    <html>
    <body>
    <title>Home automation</title>
    <style type=text/css>
    h1
      {
          padding-left: 300px;
      }
    h2
      {

         position: absolute;
         top: 100px;
         left: 450px;
      }
    </style>
    <h1>Internet of Things Implementation/h2>
    <h2>The Device has been Turned OFF </h2>
    </body>
    </html>
    ”;
}       
?>