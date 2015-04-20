<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{difiName}: eXperter</title>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Difi/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Difi/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Difi/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Difi/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Difi/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Difi/js/fullcontent.js"></script>
        
        <script type="text/javascript">
            document.DifiLoggedIn = true;
            var DifiName = "{username}";
            var DifiId = {userid};
            var DifiReqPath = "";
            var DifiStaticFilePath = "{url}/app/tpl/skins/Difi";
            var DifiImagerUrl = "http://Difi.com/Difi-imaging/";
            var DifiPartner = "";
            var DifiDefaultClientPopupUrl = "{url}/client";
            window.name = "DifiMain";
            if (typeof DifiClient != "undefined") {
                DifiClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                DifiClient.maximizeWindow = true;
            }
        </script>
        <style type="text/css"> 
#navi .viptab a { background-image: url('http://habin.biz/images/tabs2.png'); background-position: -10px -84px; }
#navi .viptab span { background-image: url('http://habin.biz/images/tabs2.png'); background-position: -4px -84px; }
#navi .viptab:hover a { background-image: url('http://habin.biz/images/tabs2.png'); background-position: -10px -112px; }
#navi .viptab:hover span { background-image: url('http://habin.biz/images/tabs2.png'); background-position: -4px -112px; }
</style>
        <!--[if IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Difi/styles/ie8.css" type="text/css">
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Difi/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Difi/styles/ie6.css" type="text/css" />
            <script type="text/javascript" src="{url}/app/tpl/skins/Difi/js/pngfix.js"></script>
            <script type="text/javascript">
                try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
            </script>
            <style type="text/css">
                body { behavior: url({url}/app/tpl/skins/Difi/js/csshover.htc); }
            </style>
        <![endif]-->
    </head>
    
    <body id="home">
    
        <div id="overlay"></div>
        <div id="header-container">
            <div id="header" class="clearfix">
                <h1><a href="{url}/"></a></h1>
                <div id="subnavi">
                    <div id="subnavi-user">
                        <div style="margin-top:7px"><b>Tip:</b> Bli vip i dag og f&aring; mer ut av Habin!</div>
                    </div>
                    <div id="subnavi-search">
                        <div id="subnavi-search-upper">
                            <ul id="subnavi-search-links">
                                <li><a href="{url}/logout" style="color:#000">Logg ut!</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="to-difi">
                        <a href="{url}/client" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="DifiClient.openOrFocus(this); return false;"><b>Sjekk inn p&aring; Habin</b><i></i></a>
                    </div>
                </div>
                <ul id="navi">
                    <li class="metab"><a href="{url}/me">{username}</a><span></span></li>
                    <li class="selected"><strong>Community</strong><span></span></li>
		    <li><a href="{url}/sikkerhet">Sikkerhet</a><span></span></li>
			<li><a href="{url}/police">RPG</a><span></span></li>
                    <li class="viptab"><a href="{url}/shop1">VIP-Shop</a><span></span></li>
                </ul>
                <div id="Difis-online"><div class="rounded"><span>{online} brukere p&aring;logget!</span></div></div>
            </div>
        </div>
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                    <ul>
                        <li class=""><a href="{url}/community">Community</a></li>
                        <li class=""><a href="{url}/news">Nyheter</a></li>
                        <li class=""><a href="{url}/staff">Staff</a></li>
							<li class="selected">eXperter</li>
						<li class="last"><a href="{url}/eventholder">Eventholder</a></li>
			
			
			
                    </ul>
                </div>
            </div>
            <div id="container">
                <div id="content" style="position: relative" class="clearfix">
		<div class="habblet-container" style="position: relative; left: 0px; top: -2px; width: 83%;">

<center>

<script type="text/javascript" src="http://www.adcash.com/script/java.php?option=rotateur&rotateur=122797"></script>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-6573453452007197";
/* 728x90, opprettet 18.10.11 */
google_ad_slot = "9287579450";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</script></center>
                                 <div id="column1" class="column">                         <div class="habblet-container ">		                            
								 <div id="column1" class="column">                         <div class="habblet-container ">                           
								 <div class="cbb clearfix blue ">                                 <h2 class="title">eXperter</h2>                                 <div style="padding:5px">          
                       <?php
                        $GetUsers = mysql_query("SELECT * FROM users WHERE expert = '1' ORDER BY RAND() LIMIT 9999");
                        while($Users = mysql_fetch_assoc($GetUsers))
                        {
                            echo "<div class=\"ContentBox\"><div class=\"BoxHeader\" id=\"blue\">{$Users['name']}</div><div class=\"BoxContent\"><p>";
                            $GetUsers = mysql_query("SELECT username,motto,last_online,online,look FROM users WHERE expert = '1' ORDER BY RAND() LIMIT 9999");
                            while($Users = mysql_fetch_assoc($GetUsers))
                            {
                                if($Users['online'] == 1){ $OnlineStatus = "<font color=\"darkgreen\"><b>P&aring;logget</b></font>"; } else { $OnlineStatus = "<font color=\"darkred\"><b>Avlogget</b></font>"; }
                                echo "<img style=\"position:absolute;\" src=\"http://www.Difi.com.tr/Difi-imaging/avatarimage?figure={$Users['look']}&action=crr=3&direction=2&head_direction=3&gesture=sml&size=2\"><br>"
                                    ."<p style=\"margin-left:80px;margin-top:20px;\"><strong>{$Users['username']}</strong><br>" . htmlspecialchars($Users['motto']) . "</p>"
                                    ."<p style=\"float:right;margin-top:-30px;margin-right:5px;\">{$OnlineStatus}</p><br><br><br>";
                            }
                            echo "</p></div></div>";
                        }
                    ?>
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                    </div></div></div></div></div></div>
                    <div id="column2" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Hvordan blir jeg eXpert?</h2>
                                <div style="padding:5px">
                                    Det er mange som vil være eXpert på Habin. Nå har du muligheten til å bli det kun for 200 VIP poeng. Denne betalingen er kun 1 gang og du har tilgang til eXpert sentralen når du vil og du har et helt unikt eXpert skilt.
Vi velger også kun fra eXpert ansatte til å bli moderator på Habin fra nå av. Dette er fordi de som er eXpert har som regel mye erfaring med å hjelpe andre folk. Men selv om du har kjøpt deg eXpert medlemskap betyr
det ikke at du kan oppføre deg som du vil. Bryter du Habinloven, så fjerner vi eXpert medlemskapet med engang. <br /><br />

<b>Får jeg rettigheter i eXpert sentralen?</b><br />
Hvis du har kjøpt deg eXpert medlemskap, så er du på prøve for å få rettigheter i sentralen. Viser du at vi kan stole på deg, så vil du få mer ansvar for sentralen. Alt fra sjef til vakthold. Det er mange stillinger som
vi skal dele ut etterhvert. Via eXpert medlemskapet kan du bygge deg opp i systemet vårt og få en bra stilling. Vi gir dere muligheten dere aldri har hatt før.

<br /><br />
<b>Hvor er eXpert sentralen?</b><br />
Den er hos Petter.<br /><br />

<b>Hvordan kommer jeg inn i sentralen uten rettigheter?</b><br />
Du må enten vente på en moderator slipper deg inn eller en fra vaktholdet kommer til rommet. Eller så er du så heldig at du overbevist oss om at du skal få ha rettigheter.<br /><br />

<b>Hvor kjøper jeg eXpert medlemskap?</b><br />
Det kjøper du i VIP Shop <a href="/shop1">HER.</a><br /><br />
                                    
                                    <center><img src="http://habin.biz//client/c_images/album1584/XXX.gif"></center>
                                </div>
				
                            </div>
			    
                        </div>
			
                    </div>
					<script type="text/javascript"><!--
google_ad_client = "ca-pub-6573453452007197";
/* reklame */
google_ad_slot = "1023670289";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
		    
                </div>
		

        </div>
            </div>
        </div>
	
        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <script type="text/javascript">
            DifiView.run();
        </script>

        <!--[if lt IE 7]>
            <script type="text/javascript">
                Pngfix.doPngImageFix();
            </script>
        <![endif]-->
        
        <div id="footer" >
		
		<script type="text/javascript" src="http://www.adcash.com/script/java.php?option=rotateur&rotateur=122754"></script>
        </div>
    
    </body>
</html>