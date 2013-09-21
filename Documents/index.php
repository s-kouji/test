<!DOCTYPE html>
<html><head>
<title>SES: Social Event Service</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="HTML KickStart is a ultra–lean set of HTML5, CSS, and jQuery (javascript) files, layouts, and elements designed to give you a headstart and save you a lot of hours on your next web project." />
<meta name="copyright" content="Joshua Gatcke 99lime.com All Rights Reserved" />

<!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<!-- KICKSTART -->

</head>
<body>
<?php 

session_start();
require_once('twitteroauth/twitteroauth/twitteroauth.php');
require_once('twitteroauth/config.php');

$consumer_key = CONSUMER_KEY;
$consumer_secret = CONSUMER_SECRET;


$tw_obj = new TwitterOAuth ($consumer_key, $consumer_secret, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret'] );

$request_method = 'GET';

$tw_rest_api = 'https://api.twitter.com/1.1/account/verify_credentials.json';

$request = $tw_obj->OAuthRequest($tw_rest_api, $request_method, array('include_entities ' => false));

$request = json_decode($request);
$img_url = $request->{'profile_image_url'};
$screen_name = $_SESSION['screen_name'];

?>
<!-- ===================================== END HEADER ===================================== -->
<nav class="navbar">
<a class="hide-phone" id="logo"><img class="icon_wrapper" src="<?php echo $img_url;?>" width="28px" height="28px"> @<?php echo $screen_name; ?></a>
<ul>
<li><a href="index.html"><span>SES: </span>Social Event Service</a></li>
<li><a href="http://www.99lime.com/uikit/"><span>UI</span>KIT</a></li>
<li><a href="http://www.99lime.com/blog/">Blog</a></li>
</ul>
</nav>

<div class="grid">
	
<!-- ===================================== 
	GRIDS/COLUMNS 
===================================== -->

	<div><br><br><br><br><br><br></div>

	<ul class="tabs">
	<li><a href="#grids-example"><b class="overmouse1" style="color:#555;">「フォローユーザの人気イベント」に絞る </b></a></li>
	<li><a href="#grids-html"><b class="overmouse1" style="color:#555;">「主催者 = フォローユーザ」に絞る </b></a></li>
	</ul>

	<div id="grids-example" class="tab-content">
		<h4>あなたのフォローユーザが参加している人気イベントに絞ってみました！</h4>
		
		<!-- 4column -->
		<div class="col_6 visible">
			<div class="col_6 visible_top top_event">
				<div class="sns_count">
					<p class="sns_count"><span class="sns_count">8人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
				</div>

				<a href="#">
					<img class="event_thumnail" src="images/dummy.png">
				</a>

				<div class="event_mentor">
					 主催者 : 菅沼 孝二
				</div>

				<div class="event_date">
					 開催日 : 2013 年 12 月 26 日
				</div>

				<div class="social_icon">
					<img src="images/conference1.png">
				</div>
				<div class="icon_wrapper_list_top">
					<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
					<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
					<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
					<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
					<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
					<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
					<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
					<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
					 ...
				 </div>
			</div>

			<div class="col_6 visible_top top_event">
				<a href="#">
					<div class="event_title">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
					</div>
				</a>
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">4人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>	
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">3人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="clear"></div>

		<!-- 4column -->
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">3人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">2人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">2人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">1人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="clear"></div>

		<!-- 4column -->
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">1人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>

			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">1人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>
			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">1人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>
			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count"><span class="sns_count">1人</span>のフォローユーザが<br>このイベントに参加予定です！</p>
			</div>
			<a href="#">
				<img class="event_thumnail" src="images/dummy.png">
			</a>

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/conference1.png">
			</div>
			<div class="icon_wrapper_list">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px">
			</div>
		</div>
		<div class="clear"></div>
	</div>






	<div id="grids-html" class="tab-content">
		<h4>あなたのフォローユーザが主催者として開催するイベントに絞ってみました</h4>

		<!-- 4column -->
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>
			<img class="event_thumnail" src="images/dummy.png">

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/user3.png">
			</div>
			<div class="event_img">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px"> @kouji
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>
			<img class="event_thumnail" src="images/dummy.png">

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/user3.png">
			</div>
			<div class="event_img">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px"> @kouji
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>
			<img class="event_thumnail" src="images/dummy.png">

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/user3.png">
			</div>
			<div class="event_img">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px"> @kouji
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>
			<img class="event_thumnail" src="images/dummy.png">

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/user3.png">
			</div>
			<div class="event_img">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px"> @kouji
			</div>
		</div>
		<div class="clear"></div>

		<!-- 4column -->
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>
			<img class="event_thumnail" src="images/dummy.png">

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/user3.png">
			</div>
			<div class="event_img">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px"> @kouji
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>
			<img class="event_thumnail" src="images/dummy.png">

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/user3.png">
			</div>
			<div class="event_img">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px"> @kouji
			</div>
		</div>
		<div class="col_3 visible">
			<div class="sns_count">
				<p class="sns_count">あなたのフォローユーザが<span class="sns_count"><br>主催者</span>としてこのイベントを開催します！</p>
			</div>
			<img class="event_thumnail" src="images/dummy.png">

			<a href="#">
				<div class="event_title">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
				</div>
			</a>
			<br>
			<div class="social_icon">
				<img src="images/user3.png">
			</div>
			<div class="event_img">
				<img class="icon_wrapper" src="images/kouji.jpg" width="36px" height="36px"> @kouji
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
	    	<img class="account_icon" src="images/kouji.jpg" width="36px" height="36px">
	    	<span class="account_name">@kouji</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/kouji.jpg" width="36px" height="36px">
	    	<span class="account_name">@kouji</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/kouji.jpg" width="36px" height="36px">
	    	<span class="account_name">@kouji</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/kouji.jpg" width="36px" height="36px">
	    	<span class="account_name">@kouji</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/kouji.jpg" width="36px" height="36px">
	    	<span class="account_name">@kouji</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/kouji.jpg" width="36px" height="36px">
	    	<span class="account_name">@kouji</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/kouji.jpg" width="36px" height="36px">
	    	<span class="account_name">@kouji</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/kouji.jpg" width="36px" height="36px">
	    	<span class="account_name">@kouji</span>
	    </div>
	    <div class="sns_account_icon">
	    	<img class="account_icon" src="images/kouji.jpg" width="36px" height="36px">
	    	<span class="account_name">@kouji</span>
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
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