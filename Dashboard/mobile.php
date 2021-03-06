<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Covid19 Tunnel</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
                            <h1 class="hero-title mt-0">Live Count</h1><br>
                            <br><br>
                            <p class="hero-paragraph">
<?php
//$myfile = fopen("/home/pi/Desktop/out.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("/home/pi/Desktop/out.txt")
$file = file("/home/pi/Desktop//out.txt");
for ($i = max(0, count($file)-1); $i < count($file); $i++) {
  echo $file[$i] . "\n";
}

fclose($myfile);
?></p>
						</div>	
                    </div>
                </div>
            </section>
        </main>
        </div>

    <script src="dist/js/main.min.js"></script>
</body>
</html>
