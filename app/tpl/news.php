<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head> 
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="http://colympus.com/images/favicon.ico" type="image/vnd.microsoft.icon" />
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
  width: 850px;
  margin-left: auto;
    margin-right: auto;
}

#inside-wrap {
  width:100%;

}

#right-wrapper {
  float:right; 
  width:400px; 


}

#left-wrapper {
  float:left; 
  width: 450px;
}

#search-button {
  background-image: url("images/search-2.png");
  height:34px;
  width:70px;
  float:right;
  margin-right:122px;
}

#search-button:hover {
  background-image: url("images/search-hover3.png");
  height:34px;
  width:70px;
  float:right;
  margin-right:122px;
}

#projectregister {
  background-image: url("images/new_reg.png");
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



.content1 {
    overflow: hidden;
    margin-top:25px;
    margin-bottom:8px;
    font-size:13px;
}

.content1 img {
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

    .logoheader {
        background-image: url("images/logo.png");
    height:200px;
    width:300px;
    

    }

ul#nav li { /*Setter at liste elementet ikke skal ha noen stil på seg. Setter også at det skal være 15 pixler mellom hver lenke i meny*/
    list-style-type: none;
    display: inline-block;
    margin-left: -4px;
    margin-top:18px;
    margin-right: 55px;
}

a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a { 
    font-size:15px;
    color:black;
    
}

a:hover {
    color:#2d558d;

}

/* http://www.menucool.com */

#sliderFrame, #sliderFrame div {
    box-sizing: content-box;
}

#sliderFrame 
{
    position:relative;
    width:850px;
    margin: 0 auto; /*center-aligned*/
}
  
#slider, #slider div.sliderInner {
    width:850px;height:280px;/* Must be the same size as the slider images */
    border-radius: 4px;
}

/* make video and audio to have rounded corners */
#slider iframe, #slider div.video, #slider audio { border-radius:4px; }

#slider {
    background:#fff url(loading.gif) no-repeat 50% 50%;
    position:relative;
    transform: translate3d(0,0,0);
    box-shadow: 0px 1px 5px #999999;
}

/* image wrapper */
#slider a.imgLink, #slider div.video
{
    z-index:2;
    cursor:pointer;
    position:absolute;
    top:0px;left:0px;border:0;padding:0;margin:0;
    width:100%;height:100%;
}
#slider .video {
    background:transparent url(video.png) no-repeat 50% 50%;
}

/* Caption styles */
#slider div.mc-caption-bg, #slider div.mc-caption-bg2 {
    position:absolute;
    width:100%;
    height:auto;
    padding:10px 0;/* 10px will increase the height.*/
    left:0px; /*if the caption needs to be aligned from right, specify by right instead of left. i.e. right:20px;*/
    bottom:0px;/*if the caption needs to be aligned from top, specify by top instead of bottom. i.e. top:150px;*/
    z-index:3;
    overflow:hidden;
    font-size: 0;
    border-radius: 0 0 4px 4px;/*round caption bottom corners */
}
#slider div.mc-caption-bg {
    /* NOTE: Its opacity is to be set through the sliderOptions.captionOpacity setting in the js-image-slider.js file.*/
    background:Black;/* or any other colors such as White, or: background:none; */
}
#slider div.mc-caption-bg2 {
    background:none;
}
#slider div.mc-caption {
    font: bold 14px/20px Arial;
    color:#EEE;
    z-index:4;
    text-align:center;
    background:none;
}
#slider div.mc-caption a {
    color:#FB0;
}
#slider div.mc-caption a:hover {
    color:#DA0;
}


/* ------ built-in navigation bullets wrapper ------*/
/* Note: check themes\2\js-image-slider.css to see how to hide nav bullets */
#slider div.navBulletsWrapper  {
    top:400px;/* Its position is relative to the #slider */
    text-align:center;
    background:none;
    position:relative;
    z-index:10;
}

/* each bullet */
#slider div.navBulletsWrapper div 
{
    width:11px; height:11px;
    font-size:0;color:White;/*hide the index number in the bullet element*/
    background:transparent url(bullet.png) no-repeat 0 0;
    display:inline-block; *display:inline; zoom:1;
    overflow:hidden;cursor:pointer;
    margin:0 6px;/* set distance between each bullet*/
}

#slider div.navBulletsWrapper div.active {background-position:0 -11px;}

/* --------- Others ------- */

#slider div.loading 
{
    width:100%; height:100%;
    background:transparent url(loading.gif) no-repeat 50% 50%;
    filter: alpha(opacity=60);
    opacity:0.6;
    position:absolute;
    left:0;
    top:0; 
    z-index:9;
}

#slider img, #slider>b, #slider a>b {
    position:absolute; border:none; display:none;
}

#slider div.sliderInner {
    overflow:hidden; 
    -webkit-transform: rotate(0.000001deg);/* fixed the Chrome not crop border-radius bug*/
    position:absolute; top:0; left:0;
}

#slider>a, #slider video, #slider audio {display:none;}
#slider div {-webkit-transform: translate3d(0,0,0);transform: translate3d(0,0,0);}

.content-box-gray .content {
    overflow: hidden;
    padding: 8px;
    font-size: 15px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border: 1px solid #c6c5c5;
    color: #424347;
}
.content-box-gray .title {
    height:20px;
    line-height:20px;
    border-radius: 5px;
    background:#424347;
    font-size:14px;

    font-family:verdana;
    display:block;
    color:white;
    display:block;
    padding:10px;
    border: 1px solid #424347;
    border-bottom:none;
}

.titlenews {
    height:20px;
    line-height:20px;
        border-radius: 5px;
            background:#424347;
    font-size:14px;
    font-family:verdana;
    display:block;
    color:white;
    display:block;
    padding:10px;
    border: 1px solid #424347;
    border-bottom:none;
}

.content-news .content {
    overflow: hidden;
    padding: 8px;
    font-size: 15px;
        border-radius: 5px;
    border: 1px solid #c6c5c5;
    color: #424347;
}
.content-news .title {
    
    height:20px;
    line-height:20px;
    border-radius: 5px;
    background:#424347;
    font-size:14px;

    font-family:verdana;
    display:block;
    color:white;
    display:block;
    padding:10px;
    border: 1px solid #424347;
    border-bottom:none;
}

.newslist{
font-size:15px;
width:328px;
color:black;
height:35px;
background-color:#dadbde;
    line-height:20px;
    border-radius: 5px;
    margin-bottom:5px;
    line-height: 37px;
    padding:10px;
    margin-left:2px;
}

.newslist2{
font-size: 15px;
width:328px;
color:white;
height:35px;
background-color:#4674b4;
    line-height:20px;
    border-radius: 5px;
    margin-bottom:5px;
     line-height: 37px;
     padding:10px;
     margin-left:2px;
}

.skrevetav {

width:200px;
color:black;

background-color:#efefef;
    line-height:20px;
    border-radius: 5px;
    margin-bottom:5px;
    line-height: 34px;
    padding:5px;
    text-align: center;

}
</style>


<div class="wrapper" style="color:white;">

<center><a href="/index"><img src="images/logo.png" style="width:33%;"></a>
</center>
    <ul id="nav"> <center><!--  meny  -->
                <li><a href="/index"> Hjem</a></li>
                <li><a href="#"> Om oss</a></li>
                <li><a href="#"> Shoppen</a></li>
                   <li><a href="#"> Kontakt</a></li>
        <li><a href="#"> Logg inn</a></li></center>


    </ul>   


<hr />




  <div id="inside-wrap">
      <div id="left-wrapper" style="margin-top:1px;">
             <div class="titlenews" style="    width:460px;">{newsTitle}</div><br />



    <?php
$stripped = mysql_real_escape_string($_GET['id']);
$data = mysql_query("SELECT title, id, published, dato, longstory, image, author FROM cms_news WHERE id = ". $stripped);
 
// <?php $data = mysql_query("SELECT title, id, published, shortstory, longstory, image FROM cms_news ORDER BY id DESC LIMIT 5");
               
        while($news = mysql_fetch_array($data, MYSQL_ASSOC))
        {
             $template->setParams('newsTitle' . $a, $news['title']);
            $template->setParams('newsID' . $a, $news['id']);
            $template->setParams('newsDate' . $a, date("d-m-y", $news['published']));
            $template->setParams('newsContent', $news['longstory']);
            $template->setParams('dato' . $a, $news['dato']);
            $template->setParams('newsIMG' . $a, $news['image']);
            $template->setParams('author' . $a, $news['author']);
            $a++;
        }

$listQ = mysql_query("SELECT title, id, dato, image FROM cms_news ORDER BY id DESC LIMIT 10");
                $output = "";
                while($list = mysql_fetch_assoc($listQ)) {
                    if($list['id'] == $_GET['id'])
                    $output .= '
                       <div class="newslist2"">'.$list['title'].' &raquo;</div>
                   ';
                    else
                    $output .= '
                   
                        <a href="http://colympus.com/index.php?url=news&id='.$list['id'].'" style="color:black;"> <div class="newslist">
                         '.$list['title'].'</div></a>
                      
                   ';
                }
                $template->setParams('audiList', $output);
                
                unset($result);
                unset($news1);
                unset($news); ?>


                
           
       <text style="color:black; font-size:14px;">     {newsContent}
     
</text>
<br /><br />
   <div class="skrevetav"> <b>Av:</b> {author} - {dato} </div><br /><br />


        </div>

       <div id="right-wrapper">
    

            <div class="content-box-gray" style="margin-top:1px; width:350px; float:right;">
    <div class="title" style="margin-bottom:7px;"><div style="margin-left:3px;">Siste nyheter</div></div>

   
  {audiList}



        </div><br /><br />
</div>

   





      </div> 
  </div> 

</div>

  </body>
</html>
