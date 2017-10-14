<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>MapleStory Launcher</title>
	<link rel="shortcut icon" href="/nexon.ico" />
	<link href="/css/launcher/styles.css" rel="stylesheet" />
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.2.min.js"></script>
	<script src="/js/launcher/scripts.js"></script>
	<script>
		$(function() {
			//load the Hero Banners
			loadEvents();
			//load the Rankings module
			loadRanking();
			//load the Item Gallery
			$.getScript('/js/launcher/item-shop.js', function() {
				makeCashShopPage();
			});
			//a basic ticker scroller (make something better and more dynamic)
			$('#m-ticker-controls li').click(function() {
				$(this).toggleClass('active');
				$(this).siblings().toggleClass('active')
				$('#m-ticker-feed li').toggleClass('dn')
			})
			//Make every link open in a blank window
			$('a').attr('target', '_blank');
		});
	</script>
</head>

<body>
	<div id="wrap">
		<h1>MapleStory</h1>
		<div id="m-ticker">
			<ul id="m-ticker-feed">
				<li><a href="#">Welcome to the new PartnerStory!</a></li>
				<li class="dn"><a href="#">Pink bean chair will soon be available. Probably.</a></li>
			</ul>
			<ul id="m-ticker-controls">
				<li class="up">Up</li>
				<li class="down active">Down</li>
			</ul>
		</div>
		<div id="m-events">
			<div id="m-events-controls">
				<!--<a>Populated automatically by JS</a>-->
			</div>
			<div id="m-events-wrap">
				<ul id="m-events-slide">
					<!--<li><a href="http://apple.com"><img src="img/temp-hero-1.jpg" alt="" /></a></li>-->
				</ul>
			</div>
		</div>
		<div id="m-rankings">
			<h2><a href="/rankings">Rankings</a></h2>
			<div id="m-ranks-avatar">
				<img id="m-ranks-avatar-pet" src="http://msavatar1.nexon.net/Pet/DOMKHCJHJDKFNBJBHIEGIEPJKIAFPIHLNFNLFPGCEGJBNKNGJPNAGOEMKPOMMBGB.gif" alt="" />
				<img id="m-ranks-avatar-img" src="http://msavatar1.nexon.net/Character/PKOBOAAPGKMEGFIJDCHGLBODBBGMGBOHKLDHCEMPKPJCAJFNLODGENEOEHKOGDLBAMOOKGCIJFDPBKKBPIDFKEEFNIGJHPNC.gif" alt="" />
			</div>
			<div id="m-ranks-list">
				<!--<ul>
        This section will be populated by JS
        	<li><span class="number">1</span> <span class="name">Gearbucket</span></li>
    	</ul>-->
			</div>

		</div>
		<div id="m-gallery">
			<h2><a href="http://maplestory.nexon.net/CashShop/ItemGallery.aspx">Item Gallery</a></h2>
			<div id="m-carousel">
				<ul>
				</ul>
			</div>
			<div id="m-carousel-popup">
				<div class="nub"></div>
				<div class="name"></div>
				<div class="nx"></div>
				<div class="desc"></div>
			</div>
		</div>

	</div>
	<!--/wrap-->
	<div id="launcher-bot">
		<ul id="launcher-links">
			<li><a href="/downloads">Click here to join the discord for support</a></li>
			<li><a href="/forums">Click here to view our forums to stay updated!</a></li>
		</ul>
		<div id="launcher-start">
			<a href="">Start Game</a>
		</div>
	</div>
</body>

</html>
