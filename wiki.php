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

	<div id='header'>";

echo ( shell_exec("/usr/bin/pandoc $doc_root/includes/header.md") );
print "
		</div>
<!-- End Header -->
";

print "<hr>
	<div id='body'>

<!-- Begin Sidebar  -->
		<div id='sidebar'>
";
echo ( shell_exec("/usr/bin/pandoc $doc_root/includes/sidebar.md") );

print "		</div>
<!-- End Sidebar -->

<!-- Begin Body -->
		<div id='content'>";

echo ( shell_exec("/usr/bin/pandoc $doc_root/articles/$page.md") );

print "		</div>
<!-- End Body -->

	</div>

<!-- Begin Footer -->
	<div id='footer'>
	<hr>
";

echo ( shell_exec("/usr/bin/pandoc $doc_root/includes/footer.md") );

print "	</div>
<!-- End Footer -->

	</body>
</html>";
?>
