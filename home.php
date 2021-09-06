<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}
$con = mysqli_connect("localhost","root");
mysqli_select_db($con,'projectjs128');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="home.css">
</head>
<body>
<div class="maindiv">
    <h1>Welcome to the quiz!! <span><?php  echo $_SESSION["username"]; ?></span></h1>
     <h3>You will be given 30 seconds to answer all questions.</h3>
    <h2>All The Best👍👍</h2>
    <button onclick="hide()" id="btn">Start the Quiz</button>
    <span id="logout"><a href="logout.php">Logout</a></span>
    <span id="timer">0:00</span>
    <?php 
        $i=1;
        $j=1;
        function call(int $i)
        {
         $q= "select * from questions where qid='$i'";
         $result=mysqli_query($GLOBALS["con"],$q);
         $r=mysqli_fetch_array($result);
        ?>
        <p>Q<?php echo $r["qid"];?><?php echo $r["question"];?></p>
        <?php
        $query="select * from answers where quesid='$i'";
        $re=mysqli_query($GLOBALS["con"],$query);
        while( $rows= mysqli_fetch_array($re)){
        ?>
        <input type="radio" name="quizcheck[<?php echo $rows["quesid"];?>]" value=<?php echo $rows["aid"];?>/>
        <label for=""><?php echo $rows["answer"];?></label>
        <br/>
        <?php }?>
        
       <?php };?>
       <form action="check.php" method="post">
    <div id="main">
       <?php while($i<=5){?>
    <div id="quiz">
        <?php call($i);
        $i++; ?>
    </div> 
        <br/>
        <?php }; ?>
        <input type="submit" id="next"  value="Submit" name="submit" style="margin-left:150px;"></input>
    </div>
    </form>
</div>
<script src="home.js"></script>
</body>
</html>