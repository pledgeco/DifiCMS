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
    width:500px; 


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


.text {
color:#a4a4a4; width:250px; padding:10px; border: 1px solid;border-radius: 4px;
font-size:11px;

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
input[type=submit] {
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

input[type=submit]:hover {
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

.admin{
    width:110px;
    color:#FFF;
    height:20px;
    float:left;
    background-color:#2e7297;
    padding:10px;
    border-color:#2e7297;
    border-radius: 5px;
    border: 1px solid;
    text-align: center;
    margin-bottom:60px;

}

.admin:hover {
    width:110px;
    color:#FFF;
    height:20px;
    float:left;
    background-color:#4d97bf;
    padding:10px;
    border-color:#4d97bf;
    border-radius: 5px;
    border: 1px solid;
    text-align: center;
    margin-bottom:60px;

}

</style>


<div class="wrapper">

    <?PHP include 'includes/header.php'; ?>

    <div id="inside-wrap">
        <div id="left-wrapper">
   
            <div class="content">
            <img src="images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Logg inn</h2>
            <form action="index" method="post">
            <div class="input-area" style="float:left;">
                <h3 style="margin-bottom:7px;">Prosjektnavn</h3>
                <input type="text" class="text" name="log_username" placeholder="Skriv inn prosjektnavn" maxlength="100"/>

                <h3 style="margin-bottom:7px;">Passord</h3>
                <input type="password" class="text" name="log_password" placeholder="Ditt passord" maxlength="100"/><br /><br />
                <input type="submit" name="login" class="loginsubmit submit-button button-link button-content" value="Logg inn" style=" float:left;"/>
                <br />
                <a style="float:right; margin-right:40px; font-size:12px;" href="forgotten" > Glemt passordet ditt?</a>
                <div id="error_name" class="errors error-bottom"></div>

            </div>
            
        </form>

            </div>​

            <div class="content" style="margin-top:-64px;">
            <img src="images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Administratorpanel</h2>
            Trykk <a href="http://prosjektdatabasen.com/difi/index.php" style="color:#4d97bf;">HER</a> for å gå til administratorpanelet. <br />Dette området er kun for ansatte hos Difi.

            </div>​


</div>

         <div id="right-wrapper">

            <div class="content">
            <img src="images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Vil du registrere et prosjekt?</h2>
            <img src="/images/mac1.png" style="width:55%; float:right;">
         Du kan enkelt registrere et prosjekt i prosjektdatabasen. Trykk på knappen nedenfor, så vil du fylle inn et skjema som
         beskriver ditt prosjekt. Når du har opprettet prosjektet ditt, så vil du kunne laste opp dokumenter til hver fase i
         prosjektveiviseren. Du kan opprette så mange prosjekter du ønsker.
<br /><br />
        <a id="projectregister" href="register"></a>

            </div><br />

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
