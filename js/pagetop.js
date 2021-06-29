// JavaScript Document
  $(function() {
      var isDisplay = false;
      var TopBtn= $('#return');
      TopBtn.css('bottom', '-200px');
      var isDisplay = false;
      //スクロール位置が150でボタンを表示
      $(window).scroll(function() {
          if ($(this).scrollTop() > 150) {
              if (isDisplay == false) {
                  isDisplay = true;
                  TopBtn.stop().animate({'bottom' : '10px'}, 200);
              }
          }
          else {
              if (isDisplay) {
                  isDisplay = false;
                  TopBtn.stop().animate({'bottom' : '-200px'}, 200);
              }
          }
      });
  });
