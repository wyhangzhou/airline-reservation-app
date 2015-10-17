<?php
return "<!DOCTYPE html>
<html>
<head>
<title>$pageData->title</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
	$pageData->css
</head>
<body>
	$pageData->content
	$pageData->scriptElements
</body>
</html>";