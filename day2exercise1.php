<?php
$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";
if( preg_match( "/MSIE/i", "$viewer" ) )
{
$browser = "Internet Explorer" ;
}
else if( preg_match( "/Netscape/i", "$viewer"  ) )
{
$browser = "Netscape";
$css = "style/netscape.css";
}
elseif(preg_match('/Chrome/i' , "$viewer"))
{
$browser = 'Google Chrome';
}
else  if( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "Mozilla" ;
}
elseif(preg_match('/Safari/i',"$viewer"))
{
$browser = 'Apple Safari';
}
$platform = "An unidentified OS!";
if( preg_match( "/Windows/i", "$viewer" ) )
{
$platform = "Windows!";
}
else if ( preg_match( "/Linux/i", "$viewer"  ) )
{
$platform = "Linux!";
}
else if  ( preg_match( "/Mac/i", "$viewer" ) )
{
$platform = "Mac!";
}
echo("You are using $browser on $platform");
?>
<!DOCTYPE html>
<html>
<head>
       <title>PHP example</title>
       
<link rel="stylesheet" type="text/css" href="<?php echo $css ?>">
</head>
<body>

</body>
</html>