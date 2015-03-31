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
    margin-bottom:9px;
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

    #news-about {
        font-size:14px;
        float:right;
        color:#2e7297;
        margin-top:33px;
        background-color:#eeeeee;
        border: 1px solid #eeeeee;
        border-radius: 4px;
        width:130px;
        text-align: center;
        position:relative;



    }

</style>


<div class="wrapper">

<?PHP include 'includes/header.php'; ?>

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

$listQ = mysql_query("SELECT title, id, dato FROM cms_news ORDER BY id DESC LIMIT 10");
                $output = "";
                while($list = mysql_fetch_assoc($listQ)) {
                    if($list['id'] == $_GET['id'])
                    $output .= '
                       <text style="font-size:13px; line-height:140%; font-weight:bold;">'.$list['title'].'</text> &raquo;<br />
                   ';
                    else
                    $output .= '
                       <a style="font-size:13px; color:#5a5d5e; line-height:140%; font-weight:normal;" href="http://prosjektdatabasen.com/index.php?url=news&id='.$list['id'].'">'.$list['title'].'</a>
                       <br />

                       

                   ';
                }
                $template->setParams('audiList', $output);
                
                unset($result);
                unset($news1);
                unset($news); ?>

    <div id="inside-wrap">
        <div id="left-wrapper">
            
            <div class="content">
            <img src="images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">{newsTitle}</h2>
             <text style="color:#525354; font-size:13px;"><b>Av:</b> {author} ({dato})</text><br /><br />
                
           
            {newsContent}<br />



                        </div>​


            
            </div> 

         <div id="right-wrapper">
        <div class="content">
            <img src="images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Siste nyheter</h2>
               {audiList}

                        </div>​

                        <div class="content">
            <img src="images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Viktige lenker</h2>
            <a href="#" style="font-size:13px; line-height: 140%; font-weight:normal;">› Registrer et prosjekt</a><br />
            <a href="#" style="font-size:13px; line-height: 140%; font-weight:normal;">› Logg inn</a><br />
            <a href="#" style="font-size:13px; line-height: 140%; font-weight:normal;">› Prosjektveiviseren.no</a><br />
            <a href="#" style="font-size:13px; line-height: 140%; font-weight:normal;">› Kontakt oss</a><br />
            <a href="#" style="font-size:13px; line-height: 140%; font-weight:normal;">› Om Difi</a><br />
            </div>​
         
        </div> 
    </div> 

</div>

    </body>
</html>
