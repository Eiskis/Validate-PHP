<?php
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', '1');
ini_set('log_errors', '1');
mb_internal_encoding('UTF-8');
date_default_timezone_set('UTC');



// Load Baseline.php
require_once 'baseline.php';

// Print welcome page
header('Content-Type: text/html; charset=utf-8');
echo '
<html>
	<head>
		<title>Validate.php</title>
		<style type="text/css">

			body {
				background-color: #fafafa;
				color: #373f45;
				font-family: sans-serif;
				padding: 5% 5% 8em 5%;
				max-width: 65em;
				margin: 0 auto;
				font-weight: 200;
				line-height: 1.6;
			}

			p {
				max-width: 50em;
			}

			ul {
				list-style: none;
				padding-left: 0;
			}

			ul li {
				float: left;
				width: 25%;
				margin-bottom: 0.6em;
			}

			.clear {
				clear: both;
			}

			h1 {
				font-weight: 100;
			}

			h2, h3, h4 {
				font-weight: 200;
				margin-top: 2em;
			}

			code {
				font-size: 1.1em;
			}

			a, a:visited {
				color: #0080bf;
			}

			@media handheld,only screen and (max-width: 40em) {
				ul li {
					width: 50%;
				}
			}

		</style>
	</head>
	<body>

		<h1>Validate.php</h1>

		<p>Simple input validator/sanitizer for real life use. Written in PHP, released under MIT.</p>

		<h2>Tasks</h2>

		<p>Automated tests can be run at <a href="tests/" target="_blank">tests/</a>. You can also <a href="compile/" target="_blank">compile/</a> validate.php from the source files, or play around in the <a href="play/" target="_blank">playground</a>.</p>

		<h2>Validators available for</h2>
		<ul>
		';

		// Output list based on source files
		$files = rglob_files('source/ValidatorRoutines/', 'php');
		foreach ($files as $key => $value) {
			$files[$key] = unsuffix(basename($value));
		}
		sort($files);
		foreach ($files as $file) {
			echo '<li><code>'.unsuffix(basename($file), '.php').'()</code></li>';
		}

		echo '
		</ul>

		<div class="clear"></div>
	</body>
</html>
';

die();

?>