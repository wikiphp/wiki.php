<?php

include('config.php');

$page = $_GET['page'];

if ( $page == "") {
	$page = "main";
	}

print "<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>$site_name - $page</title>
		<link rel='stylesheet' type='text/css' href='$site_root/includes/site.css'>
	</head>
	<body>";
echo ( shell_exec("/usr/bin/pandoc $doc_root/includes/header.md") );

print "<hr/>
	<div id='body' style='width: 90%;'>
		<div id='sidebar' style='width: 20%;float:left;'>";
echo ( shell_exec("/usr/bin/pandoc $doc_root/includes/sidebar.md") );

print "	</div>
	<div id='content' style='width: 80%; float:right;'>";

echo ( shell_exec("/usr/bin/pandoc $doc_root/articles/$page.md") );

print "	</div>
	</div>
	<div id='footer' style='clear:both;'>
	<hr/>";

echo ( shell_exec("/usr/bin/pandoc $doc_root/includes/footer.md") );

print "		</div>
	</body>
</html>";
?>
