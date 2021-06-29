<!--doctype html-->
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
          <form action="yoyaku2.php" name="form1" method="post">
          <table class="table">
            <tr>
              <th>ご予約日時</th>
              <td>
                <select name="mon">
                    <?php
                    for ($mon = 1; $mon <=12; $mon++) {
                       print ('<option value="' . $mon. '">' . $mon . '月</option>');
                       }
                    ?>
                </select>
                <select name="day">
                    <?php
                      for ($day = 1; $day <=31; $day++) {
                         print ('<option value="' . $day. '">' . $day . '日</option>');
                         }
                    ?>
                </select>
                <select name="ytime">
                    <?php
                      $time = array('18:00','18:30','19:00','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00','24:30','25:00','25:30','26:00');

                      foreach($time as $ytime) {
                      print('<option value="' . $ytime . '">' . $ytime . '時</option>');
                      }
                    ※必須?>
                </select>
              </td>
            </tr>
            <tr>
              <th>お名前</th>
              <td><input size="20" type="text" name="name">※必須</td>
            </tr>
            <tr>
              <th>TEL</th>
              <td><input size="20" type="text" name="tel"></td>
            </tr>
            <tr>
              <th>MAIL</th>
              <td><input size="30" type="text" name="mail">※必須</td>
            </tr>
            <tr>
              <th>備考</th>
              <td><textarea name="msg" cols="50" rows="10"></textarea></td>
            </tr>
          </table>

          <p align="center">
              <input type="submit" value="　 確認 　" onclick="return checkForm();">
              <input type="reset" value="リセット">
          </p>
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

<script>
function checkForm(){
    if(document.form1.name.value == "" || document.form1.mail.value == ""){
        alert("必須項目を入力して下さい。");
	return false;
    }else{
	return true;
    }
}</script>
