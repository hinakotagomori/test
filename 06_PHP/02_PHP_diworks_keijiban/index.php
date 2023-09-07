<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>diworksblog 掲示板</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
    
<body>
    <?php
    
    mb_internal_encoding("utf8");
    
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    
    $stmt = $pdo->query("select * from diworks_keijiban");
       
    ?>
    
     <div class="container">
            <nav>
            <a href="02-ensyu2-diblog-index.html">
            <img src="diblog_logo.jpg" alt="diblog"
                 width="300px"height="auto">
            </a>
         <header>               
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
    
        </ul>
            </nav>
        </header>
        
        <main>
            <div class="main-container">
             <div class="left">
             <div style="padding: 10px;
                         padding-bottom: auto;
                         margin-bottom: 10px;
                         ">
                  
                <h1>プログラミングに役立つ掲示板</h1>
                 
                 <form method="post" action="insert.php"> 
                    <div>
                        <h2>入力フォーム</h2>
                        
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">     
                    </div>
        
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">  
                    </div>
        
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>
        
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div> 
                 
                 </form>
                 
                 <?php
                 
                 while ($row = $stmt->fetch()){
                     
                 echo "<div class='kiji'>";
                 echo "<h3>" .$row['title']."</h3>";
                 echo "<div class='contents'>";
                 echo $row['comments'];
                 echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                 echo "</div>";
                 echo "</div>";
                 }
                     
                 ?>
                 
                 
                 </div>   
                 </div>
                 </div>
                
            <div class="right">

             <div style="padding: 10px;
                         padding-bottom: 474px;
                         margin-bottom: 10px;">
             <h3>人気の記事</h3>
                <br>
                PHPオススメ本
                <br>
                PHP Myadminの使い方
                <br>
                いま人気のエディタTops
                <br>
                HTMLの基礎
                <br>
                 
             <h3>オススメリンク</h3>
                 <br>
                 ﾃﾞｨｰｱｲﾜｰｸｽ株式会社
                 <br>
                 XAMPPのダウンロード
                 <br>
                 Eclipseのダウンロード
                 <br>
                 Braketsのダウンロード
                 <br>
                 
             <h3>カテゴリ</h3>
                 <br>
                 HTML
                 <br>
                 PHP
                 <br>
                 MySQL
                 <br>
                 JavaScript
                 <br>
      
                </div>

        </main>
        
        <footer>
            copyright(c) all right reserved diworks 2015-2018
        </footer>

    </div>   
</body>



</html>