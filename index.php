<!DOCTYPE html>
<html>
  <head>
    
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/main.css">
    <title>koobee・weebee紹介</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
    <?php include '../common/include/db.php'; ?>
    <?php include '../common/include/analytics.php'; ?>
    <?php include '../common/include/css-js.php'; ?>
  </head>
  <body>
    <div id="wrapper">

      <?php include '../common/include/gn.php' ;?>
      
    
      <div class="search">
        <img src="img/search.png">
      </div>
      
      <a href="child/about.php">
      	<div class="box" ontouchstart="">
      		<img src="img/koobee.png" class="koobee">
      		<div>
      			<span>about</span>
      			<p>koobeeについて</p>
      		</div>
      	</div>
      </a>

      <a href="child/intro.php">
        <div class="box" ontouchstart="">
          <img src="img/department.png" class="department">
          <div>
            <span>introduction</span>
            <p>部署紹介</p>
          </div>
        </div>
      </a>

      <a href="child/event.php">
        <div class="box" ontouchstart="">
          <img src="img/schedule.png" class="schedule">
          <div>
            <span>event</span>
            <p>1年の流れ</p>
          </div>
        </div>
      </a>

<!--
      <div class="button" >
        <span></span>
      </div>
-->
      <?php include '../common/include/footer.php'; ?>

    </div>
  </body>
</html>