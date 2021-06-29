<!--doctype html-->
<html>
<head>
  <meta charset="UTF-8">
  <title>原価BAR GINZA</title>
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
      <div id="fadein">
          <img src="images/zzz1.jpg" width="100%">
          <img src="images/zzz2.jpg" width="100%">
          <img src="images/zzz3.jpg" width="100%">
          <img src="images/zzz4.jpg" width="100%">
          <img src="images/zzz5.jpg" width="100%">
      </div>
      <div id="arrow">
        <a href="#content"><img src="images/arrow1.jpg"></a>
      </div>
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
      </div> <!-- ナビ -->

      <div id="content">
        <h2>TOP</h2>
        <div id="cont1">
            <h3>CONCEPT</h3>
            <p><br><br>アフターファイブに、大切な人と楽しくお酒を飲む時間を提供したいという思いから
            「原価BAR」を立ち上げました。<br><br></p>
            <p>お酒を気兼ねなく何杯でも楽しんで欲しいという思いから生まれた、新しいタイプの飲食店です。<br>
            2500円の入場料を支払うことで、店内のメニューはすべて原価で楽しむことができるシステムとなっております。大衆的なものは安く、高級酒や希少酒も手軽な値段で楽しんでいただけます。また、フードも原価で販売しており、低予算でたくさん食べることができます。</p>
            <p><br>「原価BAR」は、いわゆる激安店ではありません。</p>
            <p>幅広い層に喜んでいただけるよう、メニューラインナップの拡充・更新を心がけ、頻繁に新しいお酒を仕入れます。試したいお酒、1度は飲んでみたい憧れのお酒など、是非、原価 BARでご賞味下さい。</p>
            <p>原価BARは、少人数で静かに味わいたいとき、団体で賑やかに飲みたいとき、同僚とのコミュニケーションを持ちたいとき、合コンや誕生会などのパーティーを開きたいときなど、様々なシチュエーションに合わせて楽しむことが可能です。<br><br></p>

            <p>原価BAR　横山信夫</p>
            <p><img src="images/bg1.jpg" width="340px"><img src="images/bg2.jpg" width="340px"></p>
        </div> <!-- コンセプト -->
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
  $(function(){
    $("#fadein img:not(:first-child)").hide();
    setInterval(function() {
      $("#fadein img:first-child").fadeOut("slow").next("img").fadeIn("slow").end().appendTo("#fadein");
    },6000);
  });
</script>
