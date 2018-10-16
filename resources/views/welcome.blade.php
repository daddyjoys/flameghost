<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Pragma" content="no-cache" />
	<title>Scripts, API.</title>

	<!-- bootstrap -->
	<!--<link href="/assets/1669a134/css/bootstrap.css" rel="stylesheet">
	<script src="/assets/1669a134/js/bootstrap.js"></script>-->
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	 <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	 <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

	<style>
		#left-menu { border-right:1px solid #dfdfdf; }
		#text-block { line-height:24px; }
		.navbar .navbar-brand { float:right; }
		.nav .title { color:grey; }
		.nav .divider { border-top:1px solid #dfdfdf; }
	</style>
	<script>
		export default {
			mounted() {
				console.log('Component mounted.')
			}
		}
	</script>

</head>
<body>
	<div id="container">
		<div class="row">
			<div class="col-md-12">
				
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Documentation <span class="sr-only">(current)</span></a></li>
								<li><a href="#">Sandbox</a></li>
							</ul>
							<a class="navbar-brand" href="/"><img src="/img/logo/logo_rosstour_clean.png"></a>
						</div>
					</div>
				</nav>
				
			</div>
		</div>
		<div class="row" style="padding:10px 27px;">
			<div id="left-menu" class="col-md-2">
				<h3>Scripts</h4>
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a style="" href="#">Parser docx <span class="label label-primary">&nbsp;[php]&nbsp;</span></a></li>
				</ul>
				<h3>API Documentation</h4>
				<ul class="nav nav-pills nav-stacked">
					<li class="divider"><p></p></li>
					<li class=""><a href="#">Work with API</a></li>
					<li class="title">Dictionaries</li>
					<li><a href="#">Directory of countries</a></li>
					<li><a href="#">Directory of cities</a></li>
					<li><a href="#">Directory of Regions</a></li>
					<li><a href="#">Handbook of Food Types in hotels</a></li>
					<li class="divider"><p></p></li>
					<li class="title">Search methods</li>
					<li><a href="#">Search for regions in the country</a></li>
					<li><a href="#">Поиск ID города вылета по имени</a></li>
					<li><a href="#">Поиск ID региона по имени и стране</a></li>
					<li><a href="#">Поиск ID типа питания по названию</a></li>
					<li><a href="#">Поиск регионов в стране</a></li>
					<li class="divider"><p></p></li>
					<li><a class="text-warning" href="#">Коды ошибок и их описание</a></li>
				</ul>
			</div>

			<div class="col-md-8" style="">
				<div id="text-block">
					<div class="blocks scripts">
						<h3>Parser docx</h3>
						<p class="label label-primary">&nbsp;[php]&nbsp;</p>
						<p><strong>message from client: </strong><i>I have a script which retrieves a webpage and i need to be able to pass to function to extract the data from page and returned as json for further processing. </i></p>
						<p><a target="_blank" href="https://www.upwork.com/jobs/_~01484d08b110392a67/">Upwork job link</a></p>
						<h4>use parseDocX.php</h4>
						<code class="code-block">
							$app = new PARSEDOCX();<br />
							<span style="color:grey">/*  <br />&nbsp;&nbsp;&nbsp;params string<br />
							&nbsp;&nbsp;&nbsp;return string<br />
							*/</span><br />
							$json = $app->parse($html_text);<br />
						</code>
						<hr />
						<h4>You can check the scripts work:</h4>
						<p>use this text or insert your own:</p>
						<form method="post" action="/test.php" name="scripts">
							<textarea class="form-control" rows="15" name="data"><!DOCTYPE html>
								<html xmlns="http://www.w3.org/1999/xhtml"> <head> <title>OR Members Report</title> </head> <body> <div id="main"> <div id="header"> <div id="title">Tract<span class="superscript">&reg;</span></div> <div id="topNav"> <ul> <li><a title="Search Again">Search Again (new_search.cfm)</a></li> <li><a title="Change County">Change County (../index.cfm)</a></li> <li><a>My Account (../my_account.cfm)</a></li> <li><a>(../my_account.cfm)</a> <a>(../my_account.cfm)</a> <a title="Ask Dean" target="_blank">Ask Dean (../../ask_dean.cfm)</a></li> <li><a title="Order Premuim Reports" target="_blank">Order (../order/index.cfm)</a></li> <li><a title="Log Off">Log Off (../Logout.cfm)</a></li> </ul> </div> </div> <h3>Member's Report</h3> <div id="backButton"><a title="Back"><img src="../_images/arrow_back_glass_red-text.gif" width="80" height="24" alt="" border="0" /> (javascript:history.back(1))</a></div> <div id="instructions4"></div> <br /> <div id="premiumLink" align="center"><br /> <a>Click Here for Full Premium Report (report_premium.cfm?TractID=24)</a></div> <div id="memberReport" align="center"> <table id="tableDetails" border="0"> <tr> <td colspan="2">&nbsp;</td> </tr> <tr> <td id="maps" width="780"> <ul> <li><a onclick=" popupWin = window.open('../or/av-av.cfm','myPopup','width=1314,height=758,top=200,left=100,resizable=Yes,scrollbars=Yes'); popupWin.focus(); return false;" onmouseover="window.status = 'Aerial-Area';return true;" onmouseout="window.status = ''; return true;">Aerial-Area (../or/av-av.cfm)</a></li> <li><a onclick=" popupWin = window.open('../or/av/av-av.html','myPopup','width=1314,height=758,top=200,left=100,resizable=Yes,scrollbars=Yes'); popupWin.focus(); return false;" onmouseover="window.status = 'Aerial-Nbhd';return true;" onmouseout="window.status = ''; return true;">Aerial-Nbhd (../or/av/av-av.html)</a></li> <li><a target="_blank">Location(s) (tract_locals.cfm?TractID=24)</a></li> </ul> </td> <td>&nbsp;&nbsp; <strong>Streets</strong></td> </tr> <tr> <td align="center"> <table> <tr> <th align="left" valign="bottom">Tract Name</th> <th align="center" valign="bottom">B/T<br /> Code</th> <th align="left">City</th> <th align="center">City<br /> Code</th> <th align="left">Area</th> <th align="center">Area<br /> Code</th> <th align="left">Nbhd</th> <th align="center">Zip<br /> Code</th> </tr> <tr> <td align="left">Crest (AV)</td> <td align="center">CRST</td> <td align="left">Aliso Viejo</td> <td align="center">AV</td> <td align="left">Aliso Viejo</td> <td align="center">AV</td> <td align="left">Aliso Viejo</td> <td align="center">92656</td> </tr> </table> </td> <td align="left" valign="top" rowspan="7" width="200px"> <table> <tr> <td>Boulder Cir<br /> Northern Pine Loop<br /> Oak Ridge Cir<br /> Ponderosa St (access)<br /> Sierra Cir<br /></td> </tr> </table> </td> </tr> <tr> <td>&nbsp;</td> </tr> <tr> <td align="center"><strong>Features</strong></td> </tr> <tr> <td align="center" valign="top"> <table> <tr> <th align="center" valign="bottom" width="50">Type</th> <th align="center" valign="bottom" width="50">Units</th> <th align="center" valign="bottom" width="50">Attached</th> <th align="center" valign="bottom" width="50">Gated</th> <th align="center" valign="bottom" width="50">Pool</th> <th align="center" valign="bottom" width="50">Spa</th> <th align="center" valign="bottom" width="50">Tennis</th> <th align="center" valign="bottom" width="50">Golf</th> <th align="center" valign="bottom" width="50">55 +</th> <th align="left">Builder</th> </tr> <tr> <td align="center">SFR</td> <td align="center">109</td> <td align="center">No</td> <td align="center">No</td> <td align="center">No</td> <td align="center">No</td> <td align="center">No</td> <td align="center">No</td> <td align="center">No</td> <td align="left">Brock Homes</td> </tr> <tr> <td align="left" colspan="10">Built in 1996.</td> </tr> </table> </td> </tr> <tr> <td>&nbsp;</td> </tr> <tr> <td align="center"><strong>Models</strong></td> </tr> <tr align="left" valign="top"> <td align="center" valign="top"> <table> <tr> <th align="left" valign="bottom" width="200">Model Name</th> <th align="center" valign="bottom" width="50">Model Code</th> <th align="center" valign="bottom" width="50">Bed</th> <th align="center" valign="bottom" width="50">Bath</th> <th align="right" valign="bottom" width="50">SqFt</th> <th align="center" valign="bottom" width="50">Levls</th> <th align="center" valign="bottom" width="50">Fam</th> <th align="center" valign="bottom" width="50">Din</th> <th align="center" valign="bottom" width="50">Nook</th> <th align="center" valign="bottom" width="50">Den</th> <th align="center" valign="bottom" width="50">Bon</th> <th align="center" valign="bottom" width="50">Loft</th> <th align="center" valign="bottom" width="50">Fpl</th> <th align="center" valign="bottom" width="50">Util</th> <th align="center" valign="bottom" width="50">Gar</th> </tr> <tr> <td align="left">Avalon (1)</td> <td align="center">A</td> <td align="center">3</td> <td align="center">2.50</td> <td align="right">1529</td> <td align="center">B</td> <td align="center">No</td> <td align="center">DA</td> <td align="center">No</td> <td align="center">No</td> <td align="center">No</td> <td align="center">No</td> <td align="center">1</td> <td align="center">IL</td> <td align="center">2</td> </tr> <tr> <td align="left">Catalina (2)</td> <td align="center">B</td> <td align="center">4</td> <td align="center">2.50</td> <td align="right">1806</td> <td align="center">B</td> <td align="center">Yes</td> <td align="center">DA</td> <td align="center">Yes</td> <td align="center">No</td> <td align="center">No</td> <td align="center">No</td> <td align="center">1</td> <td align="center">IL</td> <td align="center">2</td> </tr> <tr> <td align="left">Laguna (3)</td> <td align="center">C</td> <td align="center">4</td> <td align="center">2.50</td> <td align="right">1972</td> <td align="center">B</td>
								<td align="center">Yes</td><td align="center">DA</td><td align="center">No</td><td align="center">No</td><td align="center">No</td><td align="center">No</td><td align="center">1</td><td align="center">IL</td><td align="center">2</td></tr><tr><td align="left">Monarch (4)</td><td align="center">D</td><td align="center">4</td><td align="center">2.50</td><td align="right">2206</td><td align="center">B</td><td align="center">Yes</td><td align="center">DA</td><td align="center">Yes</td><td align="center">No</td><td align="center">No</td><td align="center">No</td><td align="center">1</td><td align="center">IL</td><td align="center">2</td></tr></table><div id="sqftAlert">Square footage is from the builders records.&nbsp; It is approximate and subject to change.</div>
								</td></tr></table></div></div><div id="footer"></div></body></html>
							</textarea><br />
							<button class="brn btn-primary btn-sm">Parse text</button>
						</form>
					</div>

					<?php 
						if ( !empty($_POST) ) {
							echo '<pre>';
							var_export($_POST);
							echo '</pre>';
						}
					?>

					<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
					<div class="blocks api">
						<h4>Работа с API</h4>
						<p>REST API сервиса работает по протоколу HTTP и представляет собой набор методов, с помощью которых совершаются запросы и возвращаются ответы для каждой операции. Все ответы приходят в формате JSON и кодировке — UTF-8..</p>
						<p>Все вызовы методов API — это GET или POST HTTP-запросы к URL <i>https://online-rosstour.ru/api/</i></p>
						<p>Для POST запросов качестве входящих данных принимаются данные в формате JSON.</p>
						<br />
						<h4>Параметры запроса</h4>
						<p>В каждом запросе обязательно должен присутствовать <span class="text-danger">token</span>. 
							Также для некоторых методов определены дополнительные параметры. 
						</p>
						<p>Порядок следования параметров в запросе значения не имеет.</p>
						<p>Для обращение к нужному методу API, необходимо послать запрос на URL вида: <i>https://online-rosstour.ru/api/<span class="text-danger">{метод}</span>/</i> </p>
						<p>В качестве положительного ответа, Вы получите JSON вида: <code>{ "success": true, "result": { . . . } }</code>, где <code>"success": true</code> говорит о том, что запрос успешно обработан и в <code>result</code> находится результат выполнения метода.</p>
						<p>При возниконовении ошибки, Вы получите JSON вида: <code>{ "success": false, "result": { "code" : "value", . . . } }</code>, где <code>code</code> - код возникшей ошибки, а в качестве <code>value</code> приходит текст ошибки.</p>
						<!--<h4>Создание заявки в системе онлайн бронирования РоссТур</h4>-->
					</div>

					<div class="blocks auth">
					
					</div>
				</div>
			</div>
			<div class="col-md-2">
				OZON.TRAVEL
				<iframe width="200" scrolling="no" height="500" frameborder="0" src="//partners.ozon.travel/searchform_v2_0/?forpartner=z7dkcuw5&formOrientation=vertical&tab=avia&tab=railway&tab=insurance&type=avia&color_form=FFFFFF&color_blocks=F7F7F7&color_fields=FFFFFF&color_button=EFEFEF&color_border=DFDFDF"></iframe>
				<script async src="//www.ozon.travel/f/js/widget/iframe-widget.js?type=offers&forpartner=z7dkcuw5&MaxCount=4&Vertical"></script>
			</div>
		</div>
	</div>
</body>
</html>


        <!-- Fonts -->
		<!--
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		-->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a, ul.nav>li.title {
                color: #636b6f;
                padding: 0 0px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
