<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head> 
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="http://www.difi.no/profiles/difino/themes/difi3_difino/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="stylesheet" href="{url}/css/style.css" type="text/css">
<title>{difiname}</title> 
</head>

<body>
<style type="text/css">
body {
	background: #ffffff;
	font-size:12px;
}

.wrapper {
	width: 1000px;
	margin-left: auto;
    margin-right: auto;
}

#inside-wrap {
	width:100%;

}

#right-wrapper {
	float:right; 
	width:430px; 


}

#left-wrapper {
	float:left; 
	width: 500px;
}

.search-button {
	background-image: url("http://prosjektdatabasen.com/images/search-2.png");
	height:36px;
	width:70px;
	float:right;
	margin-right:84px;
    background-repeat: no-repeat;
    border: 0px;
    background-color:white;
    margin-top:1px;
}

.search-button:hover {
	background-image: url("http://prosjektdatabasen.com/images/search-hover3.png");
	height:36px;
	width:70px;
	float:right;
	margin-right:84px;
     background-repeat: no-repeat;
     border: 0px;
}


.search-button:active {
    background-image: url("http://prosjektdatabasen.com/images/search-hover3.png");
    height:36px;
    width:70px;
    float:right;
    margin-right:84px;
     background-repeat: no-repeat;
     border: 0px;
}




#projectregister {
	background-image: url("http://prosjektdatabasen.com/images/new_reg.png");
	height:36px;
	width:134px;
	float:left;
	
}

#projectregister:hover {
	background-image: url("images/new_reg_hover.png");
	height:36px;
	width:134px;
	float:left;
	
}



.content {
    overflow: hidden;
    margin-top:20px;
    margin-bottom:8px;
    font-size:13px;
}

.content img {
    float: left;
}

#projext-box
{
     position: relative; 
   		width: 100%;
}


#text
{
    z-index:100;
    position:absolute;    
    color:white;
    font-size:24px;
    font-weight:bold;
    left:150px;
    top:350px;
}


	.wrap {
	  /* force the div to properly contain the floated images: */
	  position:relative;
	  float:left;
	  clear:none;
	  overflow:hidden;
	}
	.wrap img {
	  position:relative;
	  z-index:1;
	  margin-bottom:5px;
	  margin-left: 3px;

	}
	.wrap .desc {
	  display:block;
	  position:absolute;
	  width:100%;
	  top:24%;
	  left:0;
	  z-index:2;
	  text-align:center;
	  color:white;

	}

    .text {
color:#a4a4a4; width:320px; padding:10px; border: 1px solid;border-radius: 4px;
font-size:11px;

}



.reg {
    width:80px;
    color:#FFF;
    height:37px;
    background-color:#534f4f;
    padding:10px;
    border-color:#575454;
    border-radius: 5px;
    border: 1px solid;
    text-align: center;
 

}

.reg:hover{
    width:80px;
    color:#FFF;
    height:37px;
    background-color:#676565;
    padding:10px;
    border-color:#676565;
    border-radius: 5px;
    border: 1px solid;
    text-align: center;
  

}
</style>
<iframe name="external_content" src="about:blank" style="width:0px; height: 0px; display:none" onload="document.getElementById('mydiv').innerHTML=frames['external_content'].document.documentElement.innerHTML"></iframe>


<div class="wrapper">

	<?PHP include 'includes/header.php'; ?>

	<div id="inside-wrap">
    	<div id="left-wrapper">
    		<h2 style="color:black; font-size:20px;">Prosjektdatabasen</h2>
    		<p style="color:#424242; font-size:13px;">Søk etter prosjekter i prosjektveiviseren</p>
    		 <form action="index.php" method="GET">
                 <input type="hidden" name="url" value="search" /> 
        <input type="text" name="query" class="text" placeholder="Søk etter prosjekter.." style="height:12px;"/>
        <input type="submit" value="" class="search-button" />
    </form>


            

			<div class="content">
    		<img src="images/circle-new.png"/ alt="" >
    		<h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Siste 12 prosjekter</h2>
    		
			</div>​
<?php
$userid = mysql_real_escape_string($_GET['id']);
$userdata = mysql_query("SELECT id, username FROM users WHERE id = ". $userid);
 
// <?php $data = mysql_query("SELECT title, id, published, shortstory, longstory, image FROM cms_news ORDER BY id DESC LIMIT 5");
               
        while($user = mysql_fetch_array($userdata, MYSQL_ASSOC))
        {
            $template->setParams('userName' . $a, $user['username']);
            $template->setParams('newsID' . $a, $user['id']);
           
            $a++;
        }

$listUser = mysql_query("SELECT id, username FROM users ORDER BY id DESC LIMIT 12");
                $output = "";
                while($listProject = mysql_fetch_assoc($listUser)) {
                    if($listProject['id'] == $_GET['id'])
                    $output .= '
                       <strong>'.$listProject['username'].'</strong> &raquo;<br />
                   ';
                    else
                    $output .= '<div class="wrap">
	<img src="images/projects.png" />
	<h3 class="desc"><a style="font-size:13px; color:#fff; line-height: 140%;" href="http://prosjektdatabasen.com/prosjekt/'.$listProject['username'].'">'.$listProject['username'].'</a></h3>

</div>
                      

                   ';
                }
                $template->setParams('projectList', $output);
           		
                unset($result);
                unset($news1);
                unset($user); ?>





{projectList}

<div class="content" style="margin-top:255px;">
    		<img src="images/circle-new.png"/ alt="" >
    		<h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Registrer et prosjekt</h2>
    		Du kan enkelt registrere et prosjekt i prosjektdatabasen. Trykk på knappen nedenfor, så vil du fylle inn et skjema som
         beskriver ditt prosjekt. Når du har opprettet prosjektet ditt, så vil du kunne laste opp dokumenter til hver fase i
         prosjektveiviseren. Du kan opprette så mange prosjekter du ønsker.

		

			</div>​

          <a id="projectregister" href="register"></a>
</div>
   		 <div id="right-wrapper">
   		 	<div class="content">
    		<img src="images/circle-new.png"/ alt="" >
    		<h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Hva er prosjektdatabasen?</h2>
    		Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. Lorem Ipsum har vært bransjens 
    		standard for dummytekst helt siden 1500-tallet, da en ukjent boktrykker stokket en mengde bokstaver for å lage 
    		et prøveeksemplar av en bok. Lorem Ipsum har tålt tidens tann usedvanlig godt, og har i tillegg til å bestå gjennom
    		 fem århundrer også tålt spranget over til elektronisk typografi uten vesentlige endringer. Lorem Ipsum ble gjort allment 
    		 kjent i 1960-årene ved lanseringen av Letraset-ark med avsnitt fra Lorem Ipsum, og senere med sideombrekkingsprogrammet Aldus 
    		 PageMaker som tok i bruk nettopp Lorem Ipsum for dummytekst.
			</div>​


<?php
$stripped = mysql_real_escape_string($_GET['id']);
$data = mysql_query("SELECT title, id, published, dato, longstory, image FROM cms_news WHERE id = ". $stripped);
 
// <?php $data = mysql_query("SELECT title, id, published, shortstory, longstory, image FROM cms_news ORDER BY id DESC LIMIT 5");
               
        while($news = mysql_fetch_array($data, MYSQL_ASSOC))
        {
            $template->setParams('newsTitle' . $a, $news['title']);
            $template->setParams('newsID' . $a, $news['id']);
            $template->setParams('newsDate' . $a, date("d-m-y", $news['published']));
            $template->setParams('newsContent', $news['longstory']);
            $template->setParams('dato' . $a, $news['dato']);
            $template->setParams('newsIMG' . $a, $news['image']);
            $a++;
        }

$listQ = mysql_query("SELECT title, id, dato FROM cms_news ORDER BY id DESC LIMIT 4");
                $output = "";
                while($list = mysql_fetch_assoc($listQ)) {
                    if($list['id'] == $_GET['id'])
                    $output .= '
                       <strong>'.$list['title'].'</strong> &raquo;<br />
                   ';
                    else
                    $output .= '
                       <a style="font-size:13px; line-height: 140%;" href="http://prosjektdatabasen.com/index.php?url=news&id='.$list['id'].'"><strong style="color:#46423b;">'.$list['title'].'</strong></a>
                       <br />

                       <a style="font-size:13px; line-height: 140%; color:#000000;" href="http://prosjektdatabasen.com/index.php?url=news&id='.$list['id'].'">'.$list['dato'].'</a><br />
                       <a style="font-size:12px; line-height: 140%; color:#2e7297;" href="http://prosjektdatabasen.com/index.php?url=news&id='.$list['id'].'">Les mer ›</a><br /><br />

                   ';
                }
                $template->setParams('audiList', $output);
           		
                unset($result);
                unset($news1);
                unset($news); ?>

			<div class="content" style="margin-bottom:-10px;">
    		<img src="images/circle-new.png"/ alt="" >
    		<h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Siste nyheter</h2>
    		{audiList}

    		 
			</div>​

			<div class="content">
    		<img src="images/circle-new.png"/ alt="" >
    		<h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Viktige lenker</h2>
    		<a href="register" style="font-size:13px; line-height: 140%;">› Registrer et prosjekt</a><br />
			<a href="#" style="font-size:13px; line-height: 140%;">› Logg inn</a><br />
			<a href="http://prosjektveiviseren.no" style="font-size:13px; line-height: 140%;">› Prosjektveiviseren.no</a><br />
			<a href="#" style="font-size:13px; line-height: 140%;">› Kontakt oss</a><br />
			<a href="#" style="font-size:13px; line-height: 140%;">› Om Difi</a><br />
			</div>​
    	</div> 
	</div> 

</div>

	</body>
</html>
