<?php
// セッションスタート
session_start();
// OAuth用ライブラリ「twitteroauth」
require_once 'twitteroauth/twitteroauth.php';
require_once 'config.php';

// アプリ登録した際に発行された値を入れて下さい。
$consumer_key = CONSUMER_KEY;
$consumer_secret = CONSUMER_SECRET;
// call_backする場所
$call_back_url = OAUTH_CALLBACK;
//--------------------------------------
//セッションのアクセストークンのチェック
//--------------------------------------
/*
if((isset($_SESSION["oauth_token"]) && $_SESSION["oauth_token"] !== NULL) && (isset($_SESSION["oauth_token_secret"]) && $_SESSION["oauth_token_secret"] !== NULL)) {
  print "ログイン";
  // ログインしたらここにくる
}
  // ログアウトの状態
  else {*/
    // オブジェクト生成
    $twitter_oauth_object = new TwitterOAuth (
      $consumer_key,
      $consumer_secret);
    //call_backを指定して request tokenを取得
    $oOauthToken = $twitter_oauth_object->getRequestToken($call_back_url);
    //セッション格納
    $_SESSION['request_token'] = $oOauthToken['oauth_token'];
    $sToken = $oOauthToken['oauth_token'];
    $_SESSION['request_token_secret'] = $oOauthToken['oauth_token_secret'];
    /*
    //認証URLの引数 falseの場合はtwitter側で認証確認表示
    if(isset($_GET['authorizeBoolean']) && $_GET['authorizeBoolean'] != '') {
      $bAuthorizeBoolean = false;
    }
      else {
        $bAuthorizeBoolean = true;
      }*/
    //Authorize url を取得
    print "準備おk";
    $sUrl = $twitter_oauth_object->getAuthorizeURL($sToken);
  //}
?>
<a href="<?php print($sUrl);?>"><img src="./images/lighter.png" alt="Sign in with Twitter"/></a>