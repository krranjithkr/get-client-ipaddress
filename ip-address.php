<?php
require_once "Class/RemoteAddress.php";
$getIp = new RemoteAddress();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Retrive the ipaddress of the client</title>
<meta name="robots" content="noindex,follow">
</head>

<body>
</body>
<p>Your ipaddress is : 
<?php
echo $ipaddress = $getIp->getIpAddress();
?>
</p>
</html>