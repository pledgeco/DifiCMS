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

.pv_menu_1 {background:url(images/pv_menu_1.png) left no-repeat; width:211px; height:102px; position:relative; text-align:center; float:left;}
.pv_menu_2 {background:url(images/pv_menu_2.png) left no-repeat; width:191px; height:102px; position:relative; text-align:center; float:left;}
.pv_menu_3 {background:url(images/pv_menu_3.png) left no-repeat; width:191px; height:102px; position:relative; text-align:center; float:left;}
.pv_menu_4 {background:url(images/pv_menu_4.png) left no-repeat; width:191px; height:102px; position:relative; text-align:center; float:left;}
.pv_menu_5 {background:url(images/pv_menu_5.png) left no-repeat; width:208px; height:102px; position:relative; text-align:center; float:left;}

#pv_modell a.bp_1 {z-index:10; position:relative; top:37px; left:-90px;}
#pv_modell a.bp_2 {z-index:10; position:relative; top:37px; left:-95px;}
#pv_modell a.bp_3 {z-index:10; position:relative; top:37px; left:-95px;}
#pv_modell a.bp_4 {z-index:10; position:relative; top:37px; left:-95px;}
#pv_modell a.bp_5 {z-index:10; position:relative; top:37px; left:-105px;}
#pv_modell a.bp_6 {z-index:10; position:relative; top:-33px; left:85px;} 

.small_text_blue {font-size:13px;; color:#00527F; line-height:14px;!important; margin-left: auto; margin-right: auto; width:140px;}
.small_text_green {font-size:13px; color:#1B8600; line-height:14px; !important; margin-left: auto; margin-right: auto; width:140px;} 
.small_text_orange {font-size:13px; color:#C25500; line-height:14px; !important; margin-left: auto; margin-right: auto; width:140px;}

.small_text_blue:hover {color:#00527F;}
.small_text_green:hover {color:#1B8600;}
.small_text_orange:hover;{color:#C25500;}


.fase-header {
    font-size:19px;
    text-decoration: underline;
    text-align: center;
}
</style>


<div class="wrapper">

    <?PHP include 'includes/header.php'; ?>
<br /><br />
<div style="text-align:center; width:100%">
    <div id="pv_modell">
      <div class="pv_menu_1">

        <a href="/konseptfasen/bp1" class="bp_1"><img src="images/bp_1.png" alt="Beslutningspunkt 1" class="tooltip" title="Beslutningspunkt 1" /></a>

        <div class="pv_menu_text_first">
          <h2 class="blue"><a href="/konseptfasen" class="fase-header" style="margin-left:15px;">Konsept</a></h2>
          <div class="small_text_blue" style="margin-left:40px;">Idé, Behov, Mål</div>        </div>

      </div>
      <div class="pv_menu_2">

        <a href="/konseptfasen/bp2" class="bp_2"><img src="images/bp_2.png" alt="Beslutningspunkt 2" class="tooltip" title="Beslutningspunkt 2" /></a>

        <div class="pv_menu_text">
          <h2 class="green"><a href="/planleggingsfasen" class="fase-header" style="margin-left:5px;">Planlegge</a></h2>
          <a class="small_text_green" style="margin-left:7px;" href="/planleggingsfasen">Styringsunderlag</a>        </div>

      </div>
      <div class="pv_menu_3">

        <a href="/planleggingsfasen/bp3" class="bp_3"><img src="images/bp_3.png" alt="Beslutningspunkt 3" class="tooltip" title="Beslutningspunkt 3" /></a>

        <div class="pv_menu_text">
          <h2 class="green"><a href="/gjennomf%C3%B8ringsfaser" class="fase-header">Gjennomføre</a></h2>
          <a class="small_text_green" href="gjennomforing">Gjennomføringsfaser</a>        </div>

      </div>
      <div class="pv_menu_4">

        <a href="/gjennomf%C3%B8ringsfaser/bp4" class="bp_4"><img src="images/bp_4.png" alt="Beslutningspunkt 4" class="tooltip" title="Beslutningspunkt 4" /></a>

        <div class="pv_menu_text">
          <h2 class="green"><a href="/avslutningsfasen" class="fase-header">Avslutte</a></h2>
          <div class="small_text_green">Overlevering, Evaluering</div>        </div>

      </div>
      <div class="pv_menu_5">

        <a href="/avslutningsfasen/bp5" class="bp_5"><img src="images/bp_5.png" alt="Beslutningspunkt 5" class="tooltip" title="Beslutningspunkt 5" /></a>

        <div class="pv_menu_text">
          <h2 class="blue"><a href="/realiseringsfasen" class="fase-header">Realisere</a></h2>
          <div class="small_text_blue">Gevinster</div>        </div>

        <a href="/realiseringsfasen/bp6" class="bp_6"><img src="images/bp_6.png" alt="Beslutningspunkt 6" class="tooltip" title="Beslutningspunkt 6" /></a>

      </div>
    </div>
    <div id="inside-wrap">
        <div id="left-wrapper"></div>
            

         <div id="right-wrapper">
          
        </div> 
    </div> 

</div>

    </body>
</html>
