<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:index.php");
}
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"projectjs128");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .main{
            width:100vw;
            height:100vh;
            background:cornflowerblue;
            color:white;
            text-align:center;
            font-weight:500;
        }
        a{
            width: 100px;
            height: 40px;
            background:linear-gradient(45deg,red,pink);
            color: white;
            position: absolute;
            top: 20px;
            left: 100px;
            font-size: 30px;
            text-decoration:none;
            font-weight: 500;
            border-radius: 10px;
            text-align: center;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="main">
    <?php
    $j=1;
    $result=0;
    if(isset($_POST["submit"]))
    {
        if(!empty($_POST["quizcheck"]))
        {
            $i=$_POST["quizcheck"];
            $count=count($_POST["quizcheck"]);
          $q="select * from questions";
          $query=mysqli_query($con,$q);
          while($rows = mysqli_fetch_array($query))
          {
              if((int)$i[$j]==$rows["quesans"])
              {
                  $result++;
              }
              $j++;
          } ?>
          <h1>Out of 5 you attempted <?php echo $count;?> questions</h1><br/>
          <h2><?php
             if($result == 5){
              echo "Excellent work👍👍😍";}
              elseif($result < 5 && $result > 2)
              {
                  echo "Nice Try!! 😁👍";
              }
              else{
                  echo "Better Luck Next Time👍";
              }
          ?></h2>
          <br/>
          <h3 style="font-size:20px;font-weight:500;">Your score is <?php echo $result; ?></h3>
          <a href="logout.php">Logout</a>
<?php
        }
    }
?>
    </div>
</body>
</html>