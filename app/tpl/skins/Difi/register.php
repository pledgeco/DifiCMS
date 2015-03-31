<?php
if (!session_id())
	session_start();

$_SESSION['security_number'] = mt_rand(1000,9999);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> 
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<title>Prosjektdatabasen</title> 

	<script src="http://habin.biz/web-gallery/static/js/63781736.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.js"></script>
	<link rel="shortcut icon" href="http://www.difi.no/profiles/difino/themes/difi3_difino/favicon.ico" type="image/vnd.microsoft.icon" />
	<script type="text/javascript">
	
	jQuery(document).ajaxSend(function(event, xhr, settings) {
		function getCookie(name) {
			var cookieValue = null;
			if (document.cookie && document.cookie != '') {
				var cookies = document.cookie.split(';');
				for (var i = 0; i < cookies.length; i++) {
					var cookie = jQuery.trim(cookies[i]);
					// Does this cookie string begin with the name we want?
					if (cookie.substring(0, name.length + 1) == (name + '=')) {
						cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
						break;
					}
				}
			}
			return cookieValue;
		}
		function sameOrigin(url) {
			// url could be relative or scheme relative or absolute
			var host = document.location.host; // host + port
			var protocol = document.location.protocol;
			var sr_origin = '//' + host;
			var origin = protocol + sr_origin;
			// Allow absolute or scheme relative URLs to same origin
			return (url == origin || url.slice(0, origin.length + 1) == origin + '/') ||
				(url == sr_origin || url.slice(0, sr_origin.length + 1) == sr_origin + '/') ||
				// or any other URL that isn't scheme relative or absolute i.e relative.
				!(/^(\/\/|http:|https:).*/.test(url));
		}
		function safeMethod(method) {
			return (/^(GET|HEAD|OPTIONS|TRACE)$/.test(method));
		}

		if (!safeMethod(settings.type) && sameOrigin(settings.url)) {
			xhr.setRequestHeader("X-CSRFToken", getCookie('csrftoken'));
		}
	});
	</script>
<script type="text/javascript">
	
	$(document).ready(function(){
		/* default register */
		$('#submit_signup').click(function(event) {
			event.preventDefault();

			regManager.register('default');
		});

		/* hande agree checkbox */
		var checkboxes = $('.checkbox');

		for(var i=0;i<checkboxes.length;i++){
			if ($(checkboxes[i]).children("input").is(':checked')){
				$(checkboxes[i]).addClass("checked");
			}
		}

		$(".checkbox").click(function(){
			if($(this).children("input").is(':checked')){
				// uncheck
				$(this).children("input").removeAttr('checked');
				$(this).removeClass("checked");
			}else{
				// check
				$(this).children("input").attr('checked','checked');
				$(this).addClass("checked");
			}
		});

		/* initial input texts */
		emailInitialTxt = '';
		birthdayInitialDay = 'Day';
		birthdayInitialMonth = 'Month';
		birthdayInitialYear = 'Year';

		/* input texts */
		$("#bday_day").click(function() {
			if($(this).val() == birthdayInitialDay) {
				$(this).val('');
			}
			$(this).removeClass('input-error');
		});
		$('#bday_day').blur(function() {
			if($(this).val() == ''){
				$(this).val(birthdayInitialDay);
			}
		});

		$("#bday_month").click(function() {
			if($(this).val() == birthdayInitialMonth) {
				$(this).val('');
			}
			$(this).removeClass('input-error');
		});
		$('#bday_month').blur(function() {
			if($(this).val() == ''){
				$(this).val(birthdayInitialMonth);
			}
		});

		$("#bday_year").click(function() {
			if($(this).val() == birthdayInitialYear) {
				$(this).val('');
			}
			$(this).removeClass('input-error');
		});
		$('#bday_year').blur(function() {
			if($(this).val() == ''){
				$(this).val(birthdayInitialYear);
			}
		});
	});
	</script>
	<script type="text/javascript" >
	
		ASSET_URL = 'http://habin.biz/web-gallery/images/newregister/assets';
		staticUrl = 'http://habin.biz/web-gallery/static/';
		
		defaultError = 'Something went wrong, try again.';
		
		$(document).ready(function() {
			/* input info texts */
		
			$("#id_email, .email_invitation, #id_password").click(function() {
				if($(this).val() == emailInitialTxt) {
					$(this).val('');
				}
				$(this).removeClass('input-error');
			});
			$('#id_email, .email_invitation, #id_password').blur(function() {
				if($(this).val() == ''){
					$(this).val(emailInitialTxt);
				}
			});
		
			/* fade errors */
			$('.error-container').live("hover", function(){
				$(this).fadeOut();
			});
		
		});
	</script>
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

.content {
    overflow: hidden;
    margin-top:20px;
    margin-bottom:8px;
}

.content img {
    float: left;
}

#reg-login {
	background-image: url("images/reg_logod_1.png");
	width:108px;
	height: 36px;
	float:left;
}

#reg-login:hover {
	background-image: url("images/reg_loginn_hover.png");
	width:108px;
	height: 36px;
	float:left;
}

.text {
color:#a4a4a4; width:280px; padding:10px; border: 1px solid;border-radius: 4px;
font-size:11px;

}

input[type=submit] {
	width:130px;
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
	width:130px;
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

</style>

	<div class="wrapper">
   
   <?PHP include 'includes/header.php'; ?>



	<div id="inside-wrap">
    	<div id="left-wrapper">
				<div class="content">
            <img src="images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px;">Registrer ditt prosjekt</h2>
               <font color="red" style="font-size:20px;"><?php if(isset($template->form->error)) { echo '<br><b><div class="index-error">'.$template->form->error.'</div></b>'; } ?></font>

                        </div>​
				<form action="register" method="post">
				
					<h2 style="margin-top:-5px; margin-bottom:-4px;">Prosjektnavn</h2>
					<p>Kan ikke inneholde mellomrom eller strek.</p>
						<div class="input-area">
						<div id="error_email" class="errors error-top"></div>
						<input id="id_email" type="text" class="text" autocomplete="off" name="reg_username" maxlength="200" placeholder="Navn på prosjekt" />
						</div>
					<h2 style="margin-bottom:-4px;">E-postadresse</h2>
					<p>Viktig at du bruker en ekte E-post.</p>
						<div class="input-area">
						<div id="error_email" class="errors error-top"></div>
						<input id="id_email" type="text" class="text" autocomplete="off" name="reg_email" maxlength="200" placeholder="Din e-postadresse"/>
						</div>
					<h2 style="margin-bottom:-4px;">Passord</h2>
					<p>Passordet m&aring; inneholde minst 6 tall/bokstaver.</p>
						<div class="input-area">
						<input id="id_password" type="password" class="text" autocomplete="off" name="reg_password" placeholder="Ditt passord" />
						<div id="error_password" class="errors error-bottom"></div>
						</div>
					<h2 style="margin-bottom:-4px">Gjenta Passord</h2>
					<p>For sikkerhets skyld, gjenta passordet du valgte.</p>
						<div class="input-area">
						<input id="id_password" type="password" class="text" autocomplete="off" name="reg_rep_password" placeholder="Gjenta passordet ditt"/>
						<div id="error_password" class="errors error-bottom"></div>
						</div>
					<h2 style="margin-bottom:-4px;">Er du et menneske?</h2>
					<p>Skriv inn tallene du ser under.</p>
					<h2><img src="http://prosjektdatabasen.com/app/tpl/skins/Difi/captcha/image.php" alt="" /></h2>
						<div class="input-area">
						<input type="text" class="text" autocomplete="off" name="captcha" placeholder="Skriv inn tallene"/>
						<div id="error_captcha" class="errors error-bottom"></div>
						</div>
					
					

						<div class="input-area" style="float:left; margin-right:250px;">
						</div>
						<input type="submit" name="register" class="loginsubmit" value="Registrer nå" style="margin-top:18px;"/>
					<br /><br />
						
					
					
				</form>
			</div>
			 <div id="right-wrapper" style="margin-right:40px;">
			 	 <img src="/images/reg_display.png" style="width:100%; margin-top:20px;">
              
              <div class="content">
            <img src="images/circle-new.png"/ alt="" >
            <h2 style="color:#2e7297; margin-top:9px; font-size:16px; margin-bottom:18px;">Har du allerede registrert et prosjekt?</h2>
            Du har kanskje allerede opprettet et prosjekt? Du trenger bare å trykke på logg inn knappen nedenfor. Du bruker ditt prosjektnavn og passord
            for å logge inn. <br /><br />
            <a id="reg-login" href="#"></a>
            <br /><br />
           
                        </div>​
         
			 </div>
	</div>
	<br /><br />
</body>
</html>