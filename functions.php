<?php
require ('db.php');

function template_header($title) {
echo <<<EOT
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<nav class="navtop">
    	<div>
    		<h1>Gallery System</h1>
            <a href="index.php"><i class="fas fa-image"></i>Gallery</a>
    	</div>
    </nav>
EOT;
}

function template_footer() {
echo <<<EOT
     <div class="footer">
        <p>&copy; Gallery System</p>
     </div>
    </body>
</html>
EOT;
}

?>
