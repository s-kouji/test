<?php
// セッションスタート
session_start();
// OAuth用ライブラリ「twitteroauth」
require_once 'twitteroauth/twitteroauth.php';
require_once('config.php');
// アプリ登録した際に発行された値を入れて下さい。
$consumer_key = CONSUMER_KEY;
$consumer_secret = CONSUMER_SECRET;
// call_backする場所
$call_back_url = 'アプリ設定で設定したURL';
//--------------------------------------
//セッションのアクセストークンのチェック
//--------------------------------------
if((isset($_SESSION["oauth_token"]) && $_SESSION["oauth_token"] !== NULL) && (isset($_SESSION["oauth_token_secret"]) && $_SESSION["oauth_token_secret"] !== NULL)) {
  // ログインしたらここにくる
}
  // ログアウトの状態
  else {
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
    //認証URLの引数 falseの場合はtwitter側で認証確認表示
    if(isset($_GET['authorizeBoolean']) && $_GET['authorizeBoolean'] != '') {
      $bAuthorizeBoolean = false;
    }
      else {
        $bAuthorizeBoolean = true;
      }
    //Authorize url を取得
    $sUrl = $twitter_oauth_object->getAuthorizeURL($sToken, $bAuthorizeBoolean);
  }

  if($_SESSION['user_id'] == null){
  	print "NULL";
  }
?>
  <a href="<?php print($sUrl);?>">Twitterアカウントを使いログインする</a>
  <a href="./redirect.php"><img src="./images/lighter.png" alt="Sign in with Twitter"/></a>