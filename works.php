<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Portfolio">
		<meta name="author" content="Paulina Serwińska">
		
		<title>Portfolio</title>
		<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        
		<link rel="stylesheet/less" type="text/css" href="less/style.less">
		<script src="less.min.js"></script>
    </head>
	<body>
	<?php include "tpl/menu.tpl";?>
	
	<section id="works">
		<article id="work1">
		<table>
			<tr>
				<td>
					<h1>Primo Nieruchomości</h1>
					<h1>Luty 2016</h1>
					<p>Projekt strony obejmujący zakodowanie otrzymanego layout'u w stylu Single Page Application, z wykorzystaniem języków HTML5, CSS3 oraz JavaScript.</p>
					<p>Pierwszy projekt komercyjny wykonany dla firmy Primo Nieruchomości, wdrożony w marcu 2016 i działający w tym czasie.</p>
					<div class="buttons">
						<button onclick="window.location.href='#'">WWW</button>
						<button onclick="window.location.href='#'">widok</button>
					</div>
				</td>
				<td>
					<div id="tabletBox">
						<div id="tablet" data-hor="0">
							<div class="screen">
								<div style="display: block;" id="ajaxTabletLoader"></div>
								<div class="iframe">
									<iframe src="http://www.primonieruchomosci.pl/" data-zoom="0.3125" id="iFrameTablet" height="1066" width="800"></iframe>
								</div>
							</div>
						</div>
						<div style="display: block;" class="toggle"></div>
						<div class="shadow"></div>
					</div>
				</td>
			</tr>
		</table>
		</article>
		<article id="work2">
			<h1>Primo Nieruchomości</h1>
			<h1>Luty 2016</h1>
			<p>Projekt strony obejmujący zakodowanie otrzymanego layout'u w stylu Single Page Application, z wykorzystaniem języków HTML5, CSS3 oraz JavaScript.</p>
			<p>Pierwszy projekt komercyjny wykonany dla firmy Primo Nieruchomości, wdrożony w marcu 2016 i działający w tym czasie.</p>
			<div class="buttons">
				<button onclick="window.location.href='#'">WWW</button>
				<button onclick="window.location.href='#'">widok</button>
			</div>
		</article>
		<div id="buttons">
	</section>
	<div style="clear:both"></div>
	</body>
</html>