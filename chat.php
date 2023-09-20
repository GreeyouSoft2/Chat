<?php   
$J_file = "chatlog.json"; // ファイルパス格納
date_default_timezone_set('Asia/Tokyo'); // タイムゾーンを日本にセット

if(isset($_POST['submit']) && $_POST['submit'] === "送信"){ // #1
    $chat = [];
    $chat["person"] = "person1";
    $chat["imgPath"] = "image/person1.png"; //画像ファイル名は任意
    $chat["time"] = date("H:i");
    $chat["text"] = htmlspecialchars($_POST['text'],ENT_QUOTES);

    // 次はここに記述していきます。
} // #1
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <title>ChatRooms</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/css/all.min.css">
  <script src="js/main.js"></script>
</head>
<body>
  <main class="main">
    <div class="chat-system">
      <form class="send-box flex-box" action="chat.php#chat-area" method="post">
        <textarea id="textarea" type="text" name="text" rows="1" required placeholder="message.."></textarea>
        <input type="submit" name="submit" value="送信" id="search">
        <label for="search"><i class="far fa-paper-plane"></i></label>
        <input id="web-chat"><label for="web-chat">  <i class="far fa-paper-plane" style="cursor:pointer;"></i></label>
      </form>
    </div>
  </main>
</body>
</html>
