<?php
$URLVar=$_GET["URL"];
if (!preg_match("|^[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,})/?$|",$URLVar)) 
{
$URLError="This is an Invalid URL Format.";
 echo "".$URLError;
}
else 
echo "URL is ".$URLVar;

?>

<html>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="GET">
URL: <input type="text" name="URL" /> <br />

<input type="submit"/>
</form>
</body>
</html>
