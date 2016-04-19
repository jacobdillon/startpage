<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Start</title>
		<link rel="stylesheet" type="text/css" href="styles-php.css">
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="clippy.js-master/src/clippy.css" media="all">
		<!--
		<script type="text/javascript">
			var img = new Image();
				img.src = "backgrounds/rotate.php";
			
			var int = setInterval(function() {
				if (img.complete) {
					clearInterval(int);
					document.getElementsByTagName('body')[0].style.backgroundImage = 'url(' + img.src + ')';
				}
			}, 50);
		</script> -->
	</head>
	<body>
		<?php
			function GetServerStatus($site, $port)
			{
			$status = array("<div class='online'>Online</div>", "<div class='offline'>Offline</div>");
			$fp = @fsockopen($site, $port, $errno, $errstr, .5);
			if (!$fp) {
				return $status[1];
			} else  { return $status[0];}
			}
		?>
		<div class="pageContainer">
			<div class="vertAlignRow1">
				<div class="boxContainer">
					<div class="box">
                        <div class="boxHeader" id="boxHeader1">Information</div>
							<ul> 
								<li><a href="http://reddit.com">Reddit</a></li>
								<li><a href="http://arstechnica.com">Ars Technica</a></li>
								<li><a href="http://news.ycombinator.com">Hacker News</a></li>
								<li><a href="http://www.gmail.com">Gmail</a></li>
								<li><a href="https://hbh7.com/mail/">hbh7's Email</a></li>
                                <li><a href="https://www.icloud.com/#reminders">iCloud Reminders</a></li>
                                <li><a href="https://github.com/hbh7?tab=repositories">hbh7's Github Repos</a></li>
                            				</ul>
						</div>
					<div class="box">
						<div class="boxHeader" id="boxHeader2">Services Statuses</div>
							<ul>
								<li><div><span><a href="http://10.20.30.3/admin/index.php"><strong>10.20.30.3 - RPi-Hole</strong></a></span><?php echo GetServerStatus('10.20.30.3',80); ?></div></li>
								<li><div><span><a href="https://freenas.hbh7.com"><strong>10.20.30.8 - FreeNAS</strong></a></span><?php echo GetServerStatus('10.20.30.8',80); ?></div></li>
								<li><div><span><a href="https://hbh7.com:8006"><strong>10.20.31.1 - Proxmox</strong></a></span><?php echo GetServerStatus('10.20.31.1',8006); ?></div></li>
								<li><div><span><a href="http://sandstorm.hbh7.com"><strong>10.20.31.100 - SandStorm</strong></a></span><?php echo GetServerStatus('10.20.31.100',6080); ?></div></li>
								<li><div><span><a href="https://hbh7.com"><strong>10.20.31.101 - Webserver</strong></a></span><?php echo GetServerStatus('10.20.31.101',80); ?></div></li>
								<li><div><span><a href="http://sonerezh.hbh7.com"><strong>10.20.31.102 - Sonerezh</strong></a></span><?php echo GetServerStatus('10.20.31.102',80); ?></div></li>
								<li><div><span><a href="http://ampache.hbh7.com"><strong>10.20.31.103 - Ampache</strong></a></span><?php echo GetServerStatus('10.20.31.103',80); ?></div></li>
								<li><div><span><a href="http://subsonic.hbh7.com"><strong>10.20.31.104 - Subsonic</strong></a></span><?php echo GetServerStatus('10.20.31.104',80); ?></div></li>
								<li><div><span><a href="https://onlyoffice.hbh7.com"><strong>10.20.31.111 - OnlyOffice</strong></a></span><?php echo GetServerStatus('10.20.31.111',80); ?></div></li>
							</ul>
					</div>
					<div class="box">
						<div class="boxHeader" id="boxHeader3">Hobby</div>
							<ul>
								<li><a href="http://www.twitch.tv/monstercat">Monstercat Twitch</a></li>
								<li><a href="https://hbh7.com/p/">Glype Proxy</a></li>
								<li><a href="https://github.com/">Github</a></li>
								<li><a href="https://amazon.com/">Amazon</a></li>
								<li><a href="https://ebay.com/">eBay</a></li>
								<li><a href="http://youtube.com">Youtube</a></li>
								<li><a href="http://vessel.com">Vessel</a></li>
							</ul>
					</div>
				</div>
			</div>
			<div class="vertAlignRow2">
				<div class="boxContainer">
					<div class="box">
						<div class="boxHeader" id="boxHeader4">Projects</div>
							<ul>
								<li><a href="http://school.hbh7.com/westwardexpansion">hbh7 - Westward Expansion</a></li>
								<li><a href="https://hbh7.com/wordpress/">hbh7 - Random Wordpress</a></li>
								<li><a href="http://westwardexpansion.eva.school.hbh7.com/">Eva - Westward Expansion</a></li>
								<li><a href="http://hbh7.com/eva/beijing/">Eva - Beijing</a></li>
								<li><a href="http://based-art.hbh7.com/">Eva - Based Art</a></li>
							</ul>
					</div>
					<div class="box">
						<div class="boxHeader" id="boxHeader5">Good Memes</div>
							<ul>
								<li><a href="http://www.food.com/recipe/best-meatballs-203145">The Best Meatballs</a></li>
								<li><a href="http://thundercandraw.deviantart.com/">Eva's Deviant Poptart</a></li>
								<li style="color: #DA1E3C"><a href="http://uniqcode.com/typewriter/">Typewriter Sim</a> - <a href="http://webwit.nl/input/kbsim/">Model M Sim</a></li>
								<li><a href="https://www.dropbox.com/s/8xbpp2d0b9x8mql/wish%20list.txt">My Wish List</a></li>
								<li><a href="https://github.com/hbh7/startpage">This Startpage on Github</a></li>
								<li><a href="http://addictivearcade.weebly.com/">Addictive Arcade</a></li>
								<li><a href="https://www.dominos.com/en/">Domino's Pizza</a></li>
								<li><a href="http://www.tickcounter.com/countdown/1465409580000/america-new_york/owdhms/FFFFFF3B5998000000FF0000/">Days Left of School</a></li>
							</ul>
					</div>
					<div class="box">
						<div class="boxHeader" id="boxHeader6">School</div>
							<ul>
								<li><a href="http://pathways.finalsite.com/">Pathways</a></li>
								<li><a href="https://powerschool.hartfordschools.org/public/home.html">Powerschool</a></li>
								<li style="color: #DA1E3C"><a href="https://docs.google.com">Google Docs</a> - <a href="https://drive.google.com">Google Drive</a></li>
								<li style="color: #DA1E3C"><a href="http://ai2.appinventor.mit.edu/">App Inventor</a> - <a href="https://docs.google.com/document/d/1IN5JYQ0yAkYn6l4wCFBjfUSTjt3JP73YJfVljC85-mg/edit">Class Page</a></li>
								<li style="color: #DA1E3C"><a href="https://www.connexus.com/login.aspx">Connexus</a> - <a href="https://translate.google.com/">Google Translate</a></li>
								<li><a href="https://connection.naviance.com/family-connection/auth/login/?hsid=hphspatd">Naviance</a></li>
                                <li><a href="https://www.adrive.com/public/2kKtAc/3d-Modeling">3D Modeling Files</a></li>
                                <li><a href="https://newsela.com/">Newsella</a></li>
							</ul>
					</div>
				</div>

				<div class="search">
					<form class="searchForm" method="GET" action="https://google.com/search">
						<input class="searchInput" type="text" name="q" autofocus>
					</form>
				</div>
			</div>
		</div>
		
		<!-- jQuery 1.7+ -->
		<script src="jquery-2.2.3.min.js"></script>

		<!-- Clippy.js -->
		<script src="clippy.js-master/build/clippy.min.js"></script>
		
		<!-- Init script -->
		<script type="text/javascript">
			clippy.load('Clippy', function(agent){
				
				function getOffset( el ) {
					var _x = 0;
					var _y = 0;
					while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
						_x += el.offsetLeft - el.scrollLeft;
						_y += el.offsetTop - el.scrollTop;
						el = el.offsetParent;
					}
					return { top: _y, left: _x };
				}
				var x = getOffset( document.getElementById('boxHeader1') ).left; 
				var y = getOffset( document.getElementById('boxHeader1') ).top; 
				
				agent.moveTo(x+120,y-120);
				agent.show();
				agent.animate();
				
				function doAnimation() {
					agent.animate();
				}
				setInterval(doAnimation, 15000);
				
				function doSpeak() {
					var randomNum = Math.floor((Math.random() * 10) + 1);
					if (randomNum == 1) {
						agent.speak("It looks like you're trying to use the startpage. Want some help with that?");
					}
					if (randomNum == 2) {
						agent.speak("It looks like you're trying to use the internet. Want some help with that?");
					}
					if (randomNum == 3) {
						agent.speak("It looks like you're trying to bend the spoon with your mind! Want some help? Have you tried realizing the truth, that there is no spoon?");
					}
					if (randomNum == 4) {
						agent.speak("It looks like you're trying to find a place to go. Want some help with that?");
					}
					if (randomNum == 5) {
						agent.speak("It looks like you've found this website. Want to bookmark it?");
					}
					if (randomNum == 6) {
						agent.speak("Would you like some help with that?");
					}
					if (randomNum == 7) {
						agent.speak("Would you like some fries with that?");
					}
					if (randomNum == 8) {
						agent.speak("You should try turning it off and on again.");
					}
					if (randomNum == 9) {
						agent.speak("Have you tried control+alt+delete?");
					}
					if (randomNum == 10) {
						agent.speak("Hi! I am Clippy, your office assistant. Would you like some assistance today?");
					}
				}
				setInterval(doSpeak, 30000);
			
			});
		</script>
		
	</body>
</html>
