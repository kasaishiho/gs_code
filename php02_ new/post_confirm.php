<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

$flg=0;
$name=$_POST["name"];
$mail=$_POST["mail"];


//課題は
//名前とメールの変数をカンマ区切りの文字列にしてファイルに書き込めるようにしてください。
//文字列イメージ
//例） yamazaki , test@test.jp
//確認のURL（必ずここから）
//localhost/php01/post.php
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file,$name.",".$mail."\n");

// fwrite($file, $name."\n");
// fwrite($file, $mail."\n");

fclose($file);





// if($name==""){
//     $name="未入力です";

// }

// if($mail==""){
//     $mail="未入力です";
    
// }

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo h($name); ?>
EMAIL：<?php echo h($mail); ?>

<?php
    if($flg==0){
?>
    <button>登録</button>
<?php
    }
?>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>