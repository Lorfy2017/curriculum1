<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$q1 = ['80','22','20','21'];
$q2 = ['PHP','Python','JAVA','HTML'];
$q3 = ['join','select','insert','update'];

//② ①で作成した、配列から正解の選択肢の変数を作成してください

$col1 = $q1[2];
$col2 = $q2[3];
$col3 = $q3[1];

?>
<p>お疲れ様です<?php echo $name ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($q1 as $value) { ?>
  <input type="radio" name="a1" value= <?php echo $value;?> ><?php echo $value;
	}
?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($q2 as $value) { ?>
  <input type="radio" name="a2" value= <?php echo $value;?> ><?php echo $value;
	}
?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($q3 as $value) { ?>
  <input type="radio" name="a3" value= <?php echo $value;?> ><?php echo $value;
	}
?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->

<input type="hidden" name="hidden_name" value= <?php echo $name;?> />
<input type="hidden" name="hidden_col1" value= <?php echo $col1;?> />
<input type="hidden" name="hidden_col2" value= <?php echo $col2;?> />
<input type="hidden" name="hidden_col3" value= <?php echo $col3;?> />
<input type="submit" value="回答する" /></form>
</body>
</html>

<STYLE>
    
  body  { background-color: darkgray;
          color: white;
          text-align: center;
          font-family: serif;}
    
  h2  {font-family: serif;
        color: white;
        text-align: center;}
    
</STYLE>