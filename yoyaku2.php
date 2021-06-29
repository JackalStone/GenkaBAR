<?php

//----------------前処理-----------------------------------

$mon = $_POST['mon'];
$day = $_POST['day'];
$ytime = $_POST['ytime'];
$rec = $mon.'月'.$day.'日'.$ytime;

$name = $_POST['name'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$msg = $_POST['msg'];


//--------------主処理------------------------------------


//--------------後処理------------------------------------
?>

<html>
<head>
  <meta charset="UTF-8">
  <title>原価BAR GINZA 予約フォーム</title>
  <link rel="shortcut icon" href="images/favcon.ico">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP|Sawarabi+Mincho|Share+Tech+Mono|Tinos" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div id="wrapper">

    <div id="header">
      <div id="headerin">
          <p><img src="images/icon.jpg" width="150px"></p>
      </div>
      <h1><img src="images/yyy4.jpg" width="100%" alt="メインビジュアル"></h1>
    </div> <!-- ヘッダー -->



    <div id="main">

      <div id="navi">
        <ul>
          <li><a href="index.php">TOP</a></li>
          <li><a href="menu.php">MENU</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="access.php">ACCESS</a></li>
          <li><a href="yoyaku.php">ご予約はこちら</a></li>
        </ul>
      </div><!-- ナビ -->

      <div id="content">
        <h2>ご予約</h2>
        <div id="cont5">
          <h3>確認画面<br><br></h3>
              <p align="center">以下の内容で間違いがなければ、「送信する」ボタンを押してください。<br><br></p>
              <form action="yoyaku3.php" method="post">
              <table class="table">
                  <tr>
                    <th>日時</th>
                    <td><input type="hidden" name="rec" value=""><?= $rec ?></td>
                  </tr>
                  <tr>
                    <th>お名前</th>
                    <td><input type="hidden" name="name" value=""><?= $name ?></td>
                  </tr>
                  <tr>
                    <th>TEL</th>
                    <td><input type="hidden" name="tel" value=""><?= $tel ?></td>
                  </tr>
                  <tr>
                    <th>MAIL</th>
                    <td><input type="hidden" name="mail" value=""><?= $mail ?></td>
                  </tr>
                  <tr>
                    <th>備考</th>
                    <td><input type="hidden" name="msg" value=""><?= $msg ?></td>
                  </tr>
              </table>

                <p align="center">
                  <input type="hidden" name="rec" value="<?= $rec ?>">
                  <input type="hidden" name="name" value="<?= $name ?>">
                  <input type="hidden" name="tel" value="<?= $tel ?>">
                  <input type="hidden" name="mail" value="<?= $mail ?>">
                  <input type="hidden" name="msg" value="<?= $msg ?>">
                  <input type="submit" value="　送信する　">
                  <input type="button" value="前画面に戻る" onClick="history.back()"></p>
              </form>

        </div> <!-- 予約フォーム -->
      </div> <!-- コンテンツ -->

    </div> <!-- メイン -->



    <div id="link">
    	<ul>
    		<li><a href="https://twitter.com/genkabar" target="_blank"><img src="images/x_twitter.png" width="55px"></a></li>
    		<li class="sen"><a href="https://www.instagram.com/genkabar/" target="_blank"><img src="images/x_instagram.png" width="55px"></a></li>
    		<li><a href="https://ja-jp.facebook.com/genkabarginza/" target="_blank"><img src="images/x_facebook.png" width="55px"></a></li>
    	</ul>
    </div> <!-- リンク -->



    <div id="footer">
      <p>© HIGH TENSION Corp.</p>
    </div> <!-- フッター -->



    <div id="return">
      <a href="#wrapper"><img src="images/pagetop.png" width="55px"></a>
    </div>--><!-- トップへ -->

  </div> <!-- ラッパー -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/pagetop.js"></script>
</body>
</html>
