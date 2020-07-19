<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>GAT AWS TRAINING</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>
    <?php
      $posts = array(
        array(
          "title" => "EC2 (Elastic Computing Cloud)",
          "detail" => "安全でサイズ変更可能なコンピューティング性能をクラウド内で提供するウェブサービス",
          "image" => "./img/ec2.png",
        ),
        array(
          "title" => "S2 (Simple Storage Service)",
          "detail" => "スケーラビリティ、データ可用性、セキュリティ、およびパフォーマンスを提供するオブジェクトストレージサービス",
          "image" => "./img/s3.png",
        )
      );
    ?>

    <h2 class="text-center mt-3 mb-5">AWSサービス概要</h2>
    <div class="container">

      <?php foreach ($posts as $post) : ?>
      <div class="mb-5 row">
        <div class="col-sm-2 mb-2">
          <img src=<?php echo $post["image"]; ?> class="w-75 rounded-circle"></img>
        </div>
        <div class="col-sm-10">
          <h3><?php echo $post["title"]; ?></h3>
          <p>
            <?php echo $post["detail"]; ?>
          </p>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </body>
</html>
