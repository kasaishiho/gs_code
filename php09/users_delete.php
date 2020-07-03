<?php
//(9回目授業)
//1.  DB接続します
try {
    //dbname=gs_db
    //host=localhost
    //Password:MAMP='root', XAMPP=''
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}


//２．POST値取得（POST数に合わせて増やす）
$id   = $_GET["id"];



//３．SQL文作成 //*の箇所とテーブル名を変更！！
$sql = "DELETE FROM gs_user_table_2 WHERE id=:id";//ここに変数（$id）を埋め込んではセキュリティ的にアウト！！バインド変数を使って渡すべき！！
$stmt = $pdo->prepare($sql);

$stmt->bindValue(":id", $id);


//5. SQL実行
$status = $stmt->execute();

//6. 画面遷移(select.php)
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}else{
    //header("Location: 行き先ファイル名");
    header("Location: users_select.php");
    exit();
}



?>


