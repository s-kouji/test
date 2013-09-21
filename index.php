<!DOCTYPE html>
<html><head>
<title>SES: Social Event Service</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="HTML KickStart is a ultra–lean set of HTML5, CSS, and jQuery (javascript) files, layouts, and elements designed to give you a headstart and save you a lot of hours on your next web project." />
<meta name="copyright" content="Joshua Gatcke 99lime.com All Rights Reserved" />

<!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<!-- KICKSTART -->

</head>
<body>

<!-- ===================================== END HEADER ===================================== -->
<nav class="navbar">
<a class="hide-phone" id="logo"><img class="icon_wrapper" src="images/dummy.png" width="28px" height="28px"> @hogehoge</a>
<ul>
<li><a href="index.html"><span>SES: </span>Social Event Service</a></li>
</ul>
</nav>

<div class="grid">
	
<!-- ===================================== 
	GRIDS/COLUMNS 
===================================== -->

	<div><br><br><br><br><br></div>

	<ul class="tabs">
	<li><a href="#grids-example"><i class="icon-group"></i><b class="overmouse1" style="color:#555;">「フォローユーザの人気イベント」に絞る </b></a></li>
	<li><a href="#grids-html"><i class="icon-user"></i><b class="overmouse1" style="color:#555;">「主催者 = フォローユーザ」に絞る </b></a></li>
	</ul>

	<div id="grids-example" class="tab-content">
		
		
		<!-- 4column -->
		<div class="col_8 visible">
			<div class="col_5 visible_top top_event">
				<div class="sns_count">
					<p class="sns_count"><span class="sns_count">12人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
				</div>

				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/php.png">
				</a>
			</div>

			<div class="col_7 visible_top top_event">
				<a href="#">
					<div class="event_title">
						PHP入門 - 基本構文の解説からデータベースへのアクセス
					</div>
				</a>

				<div class="event_mentor">
					 主催者 : ラスマス
				</div>

				<div class="event_date">
					 開催日 : 2013 年 9 月 3 日
				</div>

				<div class="social_icon">
					<img src="images/conference1.png"> 
				</div>	
				<div class="icon_wrapper_list">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example02.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example03.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example04.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example05.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example15.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example16.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example08.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example09.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example10.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example11.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example12.png" width="36px" height="36px">
				</div>
			</div>
		</div>
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">4人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<div class="event_title">
					初心者のためのRubyプログラミング入門 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/conference1.png">
				</div>	
				<div class="icon_wrapper_list">
					<img class="icon_wrapper" src="images/sns_icon_example/example13.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example15.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example16.png" width="36px" height="36px">
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/ruby.png">
				</a>
			</div>
		</div>
		<div class="clear"></div>

		<!-- 4column -->
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">4人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<div class="event_title">
					サンプルで学ぶJavaScript入門 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/conference1.png">
				</div>	
				<div class="icon_wrapper_list">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example02.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example03.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example04.png" width="36px" height="36px">
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/javascript.png">
				</a>
			</div>
		</div>
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">3人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<div class="event_title">
					超初心者向けのTwitter API入門 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/conference1.png">
				</div>	
				<div class="icon_wrapper_list">
					<img class="icon_wrapper" src="images/sns_icon_example/example05.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example08.png" width="36px" height="36px">
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/twitterapi.png">
				</a>
			</div>
		</div>
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">2人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<div class="event_title">
					初心者のためのCSS(スタイルシート)講座 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/conference1.png">
				</div>	
				<div class="icon_wrapper_list">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example09.png" width="36px" height="36px">
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/css.png">
				</a>
			</div>
		</div>
		<div class="clear"></div>

		<!-- 4column -->
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">2人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<div class="event_title">
					HTMLで作ろうホームページ、HTML入門編 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/conference1.png">
				</div>	
				<div class="icon_wrapper_list">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example11.png" width="36px" height="36px">
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/html.png">
				</a>
			</div>
		</div>
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">2人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<div class="event_title">
					初心者のためのCSS(スタイルシート)講座 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/conference1.png">
				</div>	
				<div class="icon_wrapper_list">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px">
					<img class="icon_wrapper" src="images/sns_icon_example/example13.png" width="36px" height="36px">
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/css.png">
				</a>
			</div>
		</div>
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">1人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<div class="event_title">
					JavaScript入門 - 基本構文の解説とクラス/関数
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/conference1.png">
				</div>	
				<div class="icon_wrapper_list">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px">
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/javascript.png">
				</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>






	<div id="grids-html" class="tab-content">

		<!-- 4column -->
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>

			<a href="#">
				<div class="event_title">
					PHP入門 - データベースへのアクセス 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/user3.png">
				</div>
				<div class="event_img">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px"> @kouji
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/php.png">
				</a>
			</div>
		</div>
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>

			<a href="#">
				<div class="event_title">
					初心者のためのRubyプログラミング入門 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/user3.png">
				</div>
				<div class="event_img">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px"> @kouji
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/ruby.png">
				</a>
			</div>
		</div>
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>

			<a href="#">
				<div class="event_title">
					HTMLで作ろうホームページ、HTML入門編  
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/user3.png">
				</div>
				<div class="event_img">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px"> @kouji
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/html.png">
				</a>
			</div>
		</div>
		<div class="clear"></div>

		<!-- 4column -->
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>

			<a href="#">
				<div class="event_title">
					JavaScript入門 - 基本構文の解説とクラス/関数 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/user3.png">
				</div>
				<div class="event_img">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px"> @kouji
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/javascript.png">
				</a>
			</div>
		</div>
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>

			<a href="#">
				<div class="event_title">
					初心者のためのCSS(スタイルシート)講座 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/user3.png">
				</div>
				<div class="event_img">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px"> @kouji
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/css.png">
				</a>
			</div>
		</div>
		<div class="col_4 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>

			<a href="#">
				<div class="event_title">
					超初心者向けのTwitter API入門 
				</div>
			</a>
			<br>
			<div class="col_6">
				<div class="social_icon">
					<img src="images/user3.png">
				</div>
				<div class="event_img">
					<img class="icon_wrapper" src="images/sns_icon_example/example01.png" width="36px" height="36px"> @kouji
				</div>
			</div>
			<div class="col_6">
				<a href="#">
					<img class="event_thumnail" src="images/event_thumnail/twitterapi.png">
				</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div><!--END GRID WRAP-->


<!--SNS account-->
<div id="sns_account_icon_list">
	<div id="sns_account_icon_list_title">
		フォローユーザ
	</div>

	<div id="sns_account_icon_list_box" class="wrapper">
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/sns_icon_example/example03.png" width="36px" height="36px">
	    	by<img class="sns_icon" src="images/twitter_icon.png" width="24px" height="24px">
	    	<span class="account_name">@tarou</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/sns_icon_example/example02.png" width="36px" height="36px">
	    	by<img class="sns_icon" src="images/facebook_icon.png" width="24px" height="24px">
	    	<span class="account_name">@jirou</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/sns_icon_example/example01.png" width="36px" height="36px">
	    	by<img class="sns_icon" src="images/twitter_icon.png" width="24px" height="24px">
	    	<span class="account_name">@saburou</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/sns_icon_example/example04.png" width="36px" height="36px">
	    	by<img class="sns_icon" src="images/twitter_icon.png" width="24px" height="24px">
	    	<span class="account_name">@shijou</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/sns_icon_example/example07.png" width="36px" height="36px">
	    	by<img class="sns_icon" src="images/facebook_icon.png" width="24px" height="24px">
	    	<span class="account_name">@gojou</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/sns_icon_example/example08.png" width="36px" height="36px">
	    	by<img class="sns_icon" src="images/facebook_icon.png" width="24px" height="24px">
	    	<span class="account_name">@mutuse</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/sns_icon_example/example09.png" width="36px" height="36px">
	    	by<img class="sns_icon" src="images/twitter_icon.png" width="24px" height="24px">
	    	<span class="account_name">@nanase</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/sns_icon_example/example10.png" width="36px" height="36px">
	    	by<img class="sns_icon" src="images/facebook_icon.png" width="24px" height="24px">
	    	<span class="account_name">@yatuhashi</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/sns_icon_example/example11.png" width="36px" height="36px">
	    	by<img class="sns_icon" src="images/twitter_icon.png" width="24px" height="24px">
	    	<span class="account_name">@kujou</span>
	    </div>
	</div>

	<div id="sns_account_icon_list_title">
		で絞る
	</div>

	<div class="selected_cancel_bottun">
		選択をクリア
	</div>
</div>
<!--SNS account-->


<div class="callout clearfix">
	<div class="grid">
		<a class="button red large" href="http://www.99lime.com/downloads/"><i class="icon-download-alt"></i> Download Event List</a> 
		<span style="white-space: nowrap;">
		<a class="button blue large" href="https://twitter.com/htmlkickstart"><i class="icon-twitter"></i></a>
		<a class="button blue large" href="mailto:joshua@99lime.com"><i class="icon-envelope-alt"></i></a></span><br />
		<p>Downloaded over 91036 Times :)</p>
	</div>
</div>

<!-- Begin MailChimp Signup Form -->
<div class="grid center" id="mc_embed_signup">
<form action="http://99lime.us4.list-manage2.com/subscribe/post?u=f4a8f36be8ffba6bf0580ef5f&amp;id=67a4916516" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">

<div class="mc-field-group">
<h4>99Lime Announcements and Releases.</h4>

<input type="email" style="width:40%;" value="" placeholder="name@domain.com" name="EMAIL" class="required email" id="mce-EMAIL">
<button class="button small orange" type="submit" value="Get Notified" name="subscribe" id="mc-embedded-subscribe">Get Notified</button>
</div>
<label for="mce-EMAIL"><span>No spam. We hate spam too.</span></label>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>
</form>
</div>

<!--End mc_embed_signup-->

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div id="footer">
&copy; Copyright 2014 All Rights Reserved. This website was built with 
<a href="http://www.99lime.com">HTML KickStart</a> • 
<a href="http://99lime.com/rss/">RSS</a> • 
<a href="http://www.99lime.com/_bak2/">Joshua Gatcke</a>
</div>

<!-- KICKSTART -->
<script type="text/javascript" src="js/jquery1.9.1.min.js"></script>
<script type="text/javascript" src="js/kickstart.js"></script>            
<!-- KICKSTART -->

<!-- KICKSTART -->
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/perfect-scrollbar-0.4.4.min.js"></script> 
<script type="text/javascript">
  $(document).ready(function ($) {
    $('#sns_account_icon_list_box').perfectScrollbar({
      wheelSpeed: 20,
      wheelPropagation: false
    });
  });
</script>
<!-- KICKSTART -->

<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript">
  	$(document).ready(function(){
	$(".overmouse1").hover(function() {
        $(this).stop().animate({ color: "#f46200"}, 300);
        },function() {
        $(this).stop().animate({ color: "#555" }, 300);
        });
	});
</script>
<script type="text/javascript">
  	$(".sns_account_icon").click(function(){
		$(this).css("background","#FF9872");
	});
</script>
<script type="text/javascript">
  	$(".selected_cancel_bottun").click(function(){
		$(".sns_account_icon").css("background","#fff");
	});
</script>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1641401-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body></html>