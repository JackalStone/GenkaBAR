<?php

//-------------前処理------------------------------------

$fname = 'yoyaku.csv';

$rec = $_POST['rec'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$msg = $_POST['msg'];

$rec2 = $rec.','.$name.','.$tel.','.$mail.','.$msg."\n";

//-------------主処理------------------------------------

$fp=fopen($fname,"a");

fputs($fp,$rec2);
fclose($fp);


$rtbl=file($fname);
$rtbl=array_reverse($rtbl);
$cnt=count($rtbl);


//--------------後処理------------------------------------
?>

<?php
  for($j=0;$j<$cnt;$j++){
    $tbl[$j]=explode(',',$rtbl[$j]);
    list($rec2,$name,$tel,$mail,$msg)=$tbl[$j];
  }
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

            <h3>お申込み完了<br><br></h3>
            <p>
              お申込みありがとうございました。<br>
              ご来店を心よりお待ちしております。<br><br>
            </p>
            <p><img src="images/bart.jpg" width="450px;"><br><br></p>
            <a href="index.php">&lt;&lt; トップページへ戻る</a>


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
