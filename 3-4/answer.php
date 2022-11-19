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
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['hidden_name'];
$col1 = $_POST['hidden_col1'];
$col2 = $_POST['hidden_col2'];
$col3 = $_POST['hidden_col3'];
$ans1 = $_POST['a1'];
$ans2 = $_POST['a2'];
$ans3 = $_POST['a3'];


//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkAnswer(&$col,&$ans){
if ($col == $ans ) {
    echo "正解！";
}else{
    echo  "残念・・・";
    }
}

?>
<p><?php echo $name?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php checkAnswer($col1,$ans1);?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php checkAnswer($col2,$ans2);?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php checkAnswer($col3,$ans3);?>

</body>
</html>
<style>

body  { background-color: darkgray;
        color: white;
        text-align: center;
        font-family: serif;}
    

    
</style>
