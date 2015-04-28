<?php
error_reporting(E_ALL);

if(!isset($_GET['username']) || empty($_GET['username'])) {
    header('Location: /me');
    die();
}

$username = mysql_real_escape_string($_GET['username']);
$uquery = mysql_query("SELECT * FROM users WHERE username = '" . $username . "'");

if(mysql_num_rows($uquery) != 1) {
    header('Location: /me');
    die();
}

$udata = mysql_fetch_assoc($uquery);

?>
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
    font-size:13px;
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

#search-button {
    background-image: url("images/search-2.png");
    height:34px;
    width:70px;
    float:right;
    margin-right:120px;
}

#search-button:hover {
    background-image: url("images/search-hover3.png");
    height:34px;
    width:70px;
    float:right;
    margin-right:120px;
}

#projectregister {
    background-image: url("images/register-project.png");
    height:44px;
    width:173px;
    float:left;
    
}

#projectregister:hover {
    background-image: url("images/register-project-hover.png");
    height:44px;
    width:173px;
    float:left;
    
}



.content {
    overflow: hidden;
    margin-top:20px;
    margin-bottom:8px;
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






#pv_modell {display: inline-block; width: 1010px;}

#pv_modell h2 {padding:0; margin:15px 0 5px 0; font-size:14px;;}

#pv_modell h2.blue a, .pv_menu_1, .pv_menu_5 {color:#00527F; !important;}
#pv_modell h2.green a, .pv_menu_2, .pv_menu_3, .pv_menu_4 {color:#1B8600; !important;}
#pv_modell h2.orange a, .pv_menu_2, .pv_menu_3, .pv_menu_4 {color:#C25500; !important;}

.pv_menu_1 {background:url(/images/pv_menu_1.png) left no-repeat; width:211px; height:102px; position:relative; text-align:center; float:left;}
.pv_menu_2 {background:url(/images/pv_menu_2.png) left no-repeat; width:191px; height:102px; position:relative; text-align:center; float:left;}
.pv_menu_3 {background:url(/images/pv_menu_3.png) left no-repeat; width:191px; height:102px; position:relative; text-align:center; float:left;}
.pv_menu_4 {background:url(/images/pv_menu_4.png) left no-repeat; width:191px; height:102px; position:relative; text-align:center; float:left;}
.pv_menu_5 {background:url(/images/pv_menu_5.png) left no-repeat; width:208px; height:102px; position:relative; text-align:center; float:left;}

#pv_modell a.bp_1 {z-index:10; position:relative; top:37px; left:-90px;}
#pv_modell a.bp_2 {z-index:10; position:relative; top:37px; left:-95px;}
#pv_modell a.bp_3 {z-index:10; position:relative; top:37px; left:-95px;}
#pv_modell a.bp_4 {z-index:10; position:relative; top:37px; left:-95px;}
#pv_modell a.bp_5 {z-index:10; position:relative; top:37px; left:-105px;}
#pv_modell a.bp_6 {z-index:10; position:relative; top:-37px; left:85px;} 

.small_text_blue {font-size:13px;; color:#00527F; line-height:14px;!important; margin-left: auto; margin-right: auto; width:140px;}
.small_text_green {font-size:13px; color:#1B8600; line-height:14px; !important; margin-left: auto; margin-right: auto; width:140px;} 
.small_text_orange {font-size:13px; color:#C25500; line-height:14px; !important; margin-left: auto; margin-right: auto; width:140px;}

.small_text_blue:hover {color:#00527F;}
.small_text_green:hover {color:#1B8600;}
.small_text_orange:hover;{color:#C25500;}


.fase-header {
    font-size:16px;
    text-decoration: underline;
    text-align: center;
}

button[type=submit] {
    width:110px;
    color:#FFF;
    height:40px;
    float:left;
    background-color:#2e7297;
    padding:10px;
    border-color:#2e7297;
    border-radius: 5px;
    border: 1px solid;
    text-align: center;
    margin-bottom:80px;

}

button[type=submit]:hover {
    width:110px;
    color:#FFF;
    height:40px;
    float:left;
    background-color:#4d97bf;
    padding:10px;
    border-color:#4d97bf;
    border-radius: 5px;
    border: 1px solid;
    text-align: center;
    margin-bottom:80px;

}


strong {
  font-weight: bold; 
}

em {
  font-style: italic; 
}

table {
  background: #f5f5f5;
  border-collapse: separate;
  box-shadow: inset 0 1px 0 #fff;
  font-size: 12px;
  margin: 30px auto;
  text-align: left;
  float:left;
    border-color:#f5f5f5;
    border-radius: 5px;
    border: 1px solid;
    margin-top:-2px;
    width:100%;
    
} 

th {
  background: url(http://prosjektdatabasen.com/images/noise-diagonal.png), linear-gradient(#4d97bf, #2e7297);
  border-left: 1px solid #f5f5f5;
  border-right: 1px solid #f5f5f5;
  border-top: 1px solid #f5f5f5;
  border-bottom: 1px solid #f5f5f5;
  box-shadow: inset 0 1px 0 #f5f5f5;
  color: #fff;
  font-weight: bold;
  padding: 10px 15px;
  position: relative;
  text-shadow: 0 1px 0 #000;  
  border-color:#f5f5f5;
}

th:after {
  background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
  content: '';
  display: block;
  height: 25%;
  left: 0;
  margin: 1px 0 0 0;
  position: absolute;
  top: 25%;
  width: 100%;
  border-color:#f5f5f5;
}

th:first-child {
  border-left: 1px solid #FFF;  
  box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
  box-shadow: inset -1px 1px 0 #999;
}

td {
  border-right: 1px solid #fff;
  border-left: 1px solid #e8e8e8;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #f5f5f5;
  padding: 10px 15px;
  position: relative;
  transition: all 300ms;
  font-size:13px;
}

td:first-child {
  box-shadow: inset 1px 0 0 #fff;
} 

td:last-child {
  border-right: 1px solid #f5f5f5;
  box-shadow: inset -1px 0 0 #fff;
} 

tr {
  background: url(http://prosjektdatabasen.com/images/noise-diagonal.png);  
}

tr:nth-child(odd) td {
  background: #f1f1f1 url(http://prosjektdatabasen.com/images/noise-diagonal.png);  
}

tr:last-of-type td {
  box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
  box-shadow: inset 1px -1px 0 #fff;
} 

tr:last-of-type td:last-child {
  box-shadow: inset -1px -1px 0 #fff;
} 

#projectregister {
    background-image: url("/images/new_reg.png");
    height:36px;
    width:134px;
    float:left;
    
}

#projectregister:hover {
    background-image: url("/images/new_reg_hover.png");
    height:36px;
    width:134px;
    float:left;
    
}

a:link{
    text-decoration: none;
}

  a:visited {
    text-decoration: none;
}



</style>

<iframe name="external_content" src="about:blank" style="width:0px; height: 0px; display:none" onload="document.getElementById('mydiv').innerHTML=frames['external_content'].document.documentElement.innerHTML"></iframe>


<div class="wrapper">

<?PHP include 'includes/header.php'; ?>
<br /><br />
<div class="content" style="margin-top:-30px; margin-bottom:-1px;">
    
            <h2 style="color:black; font-size:20px;">Prosjektnavn: <?php echo htmlspecialchars($udata['username']); ?></h2><br />
</div>
             

<div style="text-align:center; width:100%">
    <div id="pv_modell">
      <div class="pv_menu_1">

        <a onclick="frames['external_content'].location.replace('/bp1listing/<?php echo htmlspecialchars($udata['username']); ?>')" class="bp_1"><img src="/images/bp_1.png" alt="Beslutningspunkt 1" class="tooltip" title="Beslutningspunkt 1" /></a>

        <div class="pv_menu_text_first">
          <h2 class="blue"><a onclick="frames['external_content'].location.replace('/konseptlisting/<?php echo htmlspecialchars($udata['username']); ?>')" class="fase-header" style="margin-left:15px; text-decoration:none;">Konsept</a></h2>
          <a class="small_text_blue" style="margin-left:16px;" onclick="frames['external_content'].location.replace('/konseptlisting/<?php echo htmlspecialchars($udata['username']); ?>')">Idé, Behov, Mål</a>        </div>

      </div>
      <div class="pv_menu_2">

        <a onclick="frames['external_content'].location.replace('/bp2listing/<?php echo htmlspecialchars($udata['username']); ?>')" class="bp_2"><img src="/images/bp_2.png" alt="Beslutningspunkt 2" class="tooltip" title="Beslutningspunkt 2" /></a>

        <div class="pv_menu_text">
          <h2 class="green"><a onclick="frames['external_content'].location.replace('/planlegginglisting/<?php echo htmlspecialchars($udata['username']); ?>')" class="fase-header" style="margin-left:5px; text-decoration:none;">Planlegge</a></h2>
          <a class="small_text_green" style="margin-left:7px;" onclick="frames['external_content'].location.replace('/planlegginglisting/<?php echo htmlspecialchars($udata['username']); ?>')">Styringsunderlag</a>        </div>

      </div>
      <div class="pv_menu_3">

        <a onclick="frames['external_content'].location.replace('/bp3listing/<?php echo htmlspecialchars($udata['username']); ?>')" class="bp_3"><img src="/images/bp_3.png" alt="Beslutningspunkt 3" class="tooltip" title="Beslutningspunkt 3" /></a>

        <div class="pv_menu_text">
          <h2 class="green"><a onclick="frames['external_content'].location.replace('/gjennomforinglisting/<?php echo htmlspecialchars($udata['username']); ?>')" class="fase-header" style="text-decoration:none;">Gjennomføre</a></h2>
          <a class="small_text_green" onclick="frames['external_content'].location.replace('/gjennomforinglisting/<?php echo htmlspecialchars($udata['username']); ?>')">Gjennomføringsfaser</a>        </div>

      </div>
      <div class="pv_menu_4">

        <a onclick="frames['external_content'].location.replace('/bp4listing/<?php echo htmlspecialchars($udata['username']); ?>')" class="bp_4"><img src="/images/bp_4.png" alt="Beslutningspunkt 4" class="tooltip" title="Beslutningspunkt 4" /></a>

        <div class="pv_menu_text">
          <h2 class="green"><a onclick="frames['external_content'].location.replace('/avsluttelisting/<?php echo htmlspecialchars($udata['username']); ?>')" class="fase-header" style="text-decoration:none;">Avslutte</a></h2>
          <a class="small_text_green" onclick="frames['external_content'].location.replace('/avsluttelisting/<?php echo htmlspecialchars($udata['username']); ?>')">Overlevering, Evaluering</a>        </div>

      </div>
      <div class="pv_menu_5">

        <a onclick="frames['external_content'].location.replace('/bp5listing/<?php echo htmlspecialchars($udata['username']); ?>')" class="bp_5"><img src="/images/bp_5.png" alt="Beslutningspunkt 5" class="tooltip" title="Beslutningspunkt 5" /></a>

        <div class="pv_menu_text">
          <h2 class="blue"><a onclick="frames['external_content'].location.replace('/realiserelisting/<?php echo htmlspecialchars($udata['username']); ?>')" class="fase-header" style="text-decoration:none;">Realisere</a></h2>
          <a class="small_text_blue" onclick="frames['external_content'].location.replace('/realiserelisting/<?php echo htmlspecialchars($udata['username']); ?>')">Gevinster</a>        </div>

        <a onclick="frames['external_content'].location.replace('/bp6listing/<?php echo htmlspecialchars($udata['username']); ?>')" class="bp_6"><img src="/images/bp_6.png" alt="Beslutningspunkt 6" class="tooltip" title="Beslutningspunkt 6" />
        </a>

      </div>
    </div>
</div>
<br />
    <div id="inside-wrap">
        <div id="left-wrapper">
        

          <div class="content">
            <img src="http://prosjektdatabasen.com/images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:-2px;">Informasjon om <?php echo htmlspecialchars($udata['username']); ?></h2><br />
             
           <br /><div style="width: 400px; padding:15px; background-color:#e2efd8; border-radius: 5px;font-size:14px; ">

<b>Prosjektbeskrivelse:</b><br />

<?php 
echo htmlspecialchars(wordwrap($udata['motto'], 58,"\n", TRUE)); ?><br /><br />
<b>Registrert:</b><br />
<?php
$timestamp=$udata['account_created'];
echo gmdate("j. F Y", $timestamp);
?><br />



           </div>
</div>

            
            </div> 

         <div id="right-wrapper">
            <div id="mydiv">
              <div class="content" style="margin-top:20px;">
            <img src="http://prosjektdatabasen.com/images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:-2px;">Hvordan se dokumentene i dette prosjektet?</h2><br />
             
           <br /><div style="width: 400px;
  padding:15px;
  
    background-color:#e1ecef; 
    border-radius: 5px;
    font-size:14px;
">Ovenfor ser du alle de forskjellige fasene innenfor et prosjekt. Trykk på den fasen du ønsker å laste ned dokumenter ifra.
             Hver fase vil åpne og lukke seg ettersom du trykker på dem.<br /><br />
<text style="font-size:15px;"><b>1.</b>  Trykk på fasen du vil se.</text><br /><br />
            <text style="font-size:15px;"><b>2.</b>  Trykk på last ned knappen.</text><br /><br />
            <text style="font-size:15px;"><b>3.</b>  Fortsett til neste fase.</text>
           </div></div>
            </div>

        </div> 
    </div> 

</div>

    </body>
</html>
