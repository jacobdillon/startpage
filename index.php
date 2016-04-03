<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Start</title>
		<link rel="stylesheet" type="text/css" href="styles-php.css">
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
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
								<li><div><span>10.20.31.1 - <a href="https://hbh7.com:8006"><strong>Proxmox</strong></a></span><?php echo GetServerStatus('10.20.31.1',8006); ?></div></li>
								<li><div><span>10.20.30.8 - <a href="https://freenas.hbh7.com"><strong>FreeNAS</strong></a></span><?php echo GetServerStatus('10.20.30.8',80); ?></div></li>
								<li><div><span>10.20.31.100 - <a href="https://sandstorm.hbh7.com"><strong>SandStorm</strong></a></span><?php echo GetServerStatus('10.20.31.100',80); ?></div></li>
								<li><div><span>10.20.31.101 - <a href="https://hbh7.com"><strong>Webserver</strong></a></span><?php echo GetServerStatus('10.20.31.101',80); ?></div></li>
								<li><div><span>10.20.31.111 - <a href="https://onlyoffice.hbh7.com"><strong>OnlyOffice</strong></a></span><?php echo GetServerStatus('10.20.31.111',80); ?></div></li>
							</ul>
					</div>
					<div class="box">
						<div class="boxHeader" id="boxHeader3">Hobby</div>
							<ul>
								<li><a href="https://github.com/">Github</a></li>
								<li><a href="https://hbh7.com:8006">Proxmox</a></li>
								<li><a href="https://amazon.com/">Amazon</a></li>
								<li><a href="https://ebay.com/">Ebay</a></li>
                                <li><a href="http://onlyoffice.hbh7.com/">hbh7's OnlyOffice</a></li>
								<li><a href="http://youtube.com">Youtube</a></li>
								<li><a href="http://vessel.com">Vessel</a></li>
								<li><a href="http://www.twitch.tv/monstercat">Monstercat Twitch</a></li>
								<li><a href="https://hbh7.com/p/">Glype Proxy</a></li>
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
					<!--<form class="searchForm" method="GET" action="https://duckduckgo.com/?q=">
						<input class="searchInput" type="text" name="q" autofocus>
					</form>-->
					<form class="searchForm" method="GET" action="https://google.com/search">
						<input class="searchInput" type="text" name="q" autofocus>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
