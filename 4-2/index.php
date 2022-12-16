<?php
require_once 'getData.php';

$data = new getData();
$userData = $data -> getUserData();
$postData = $data -> getPostData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>
<body>

    <div class = "logo" ><img src = "1599315827_logo.png"></div>
    <div class = "wrapper">
        <div class = "rightUpper"><?php echo "ようこそ".$userData['last_name'].$userData['first_name']."さん";?></div>
        <div class = "rightBottom"><?php echo "最終ログイン日：".$userData['last_login'];?></div>
    </div>
    <table>
        <tr class = "title">
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php foreach($postData as $post){?>
        <tr class = "contents">
            <td><?php echo $post['id'];?></td>
            <td><?php echo $post['title'];?></td>
            <td><?php if ($post['category_no']==1){
                echo"食事";
            }else if($post['category_no']==2){
                echo"旅行";
            }else{
                echo"その他";
            };?></td>
            <td><?php echo $post['comment'];?></td>
            <td><?php echo $post['created'];?></td>
        </tr>
        <?php } ?>

    </table>
        <div class = "footer">Y&I group.inc</div>
    

</body>
</html>

