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
	<body>
<!-- Begin Header -->
";

echo ( shell_exec("/usr/bin/pandoc $doc_root/includes/header.md") );
print "<!-- End Header -->
";

print "<hr>
	<div id='body' style='width: 90%;'>

<!-- Begin Sidebar  -->
		<div id='sidebar' style='width: 20%;float:left;'>
";
echo ( shell_exec("/usr/bin/pandoc $doc_root/includes/sidebar.md") );

print "		</div>
<!-- End Sidebar -->

<!-- Begin Body -->
		<div id='content' style='width: 80%; float:right;'>";

echo ( shell_exec("/usr/bin/pandoc $doc_root/articles/$page.md") );

print "		</div>
<!-- End Body -->

	</div>

<!-- Begin Footer -->
	<div id='footer' style='clear:both;'>
	<hr>
";

echo ( shell_exec("/usr/bin/pandoc $doc_root/includes/footer.md") );

print "	</div>
<!-- End Footer -->

	</body>
</html>";
?>
