<?php include("head.php");


$fullname=$_POST["fullname"];
$username=$_POST["username"];
$email=$_POST["email"];
$submit=$_POST["submit"];
$errors=["$fullname"=>"","$username"=>"","$email"=>""];
if(isset($submit)){
    if(empty($fullname)){
    $errors["$fullname"]="Write here your names";
    }else{
      $uccess["$fullname"]=htmlspecialchars("$fullname");
    }

    if(empty($username)){
        $errors["$username"]="Write here your username";
        }else{
          $uccess["$username"]=htmlspecialchars("$username");
        }

        if(empty($email)){
            $errors["$email"]="Email is needed";
            }else{
              $uccess["$email"]=htmlspecialchars("$email");
            }


}

?>
<form action="page.php" method="POST">
<div class="username">Full Names :</div>
<div class="username"><input type="text" value="<?php  
echo $fullname;
?>" name="fullname" placeholder="Full names">
<font color="red">
<?php echo $errors["$fullname"];
echo $uccess["$fullname"];
?></font>
</div>

<div class="username">Username</div>
<div class="username"><input type="text" name="username" placeholder="Username">
<font color="red">
<?php echo $errors["$username"];
echo $uccess["$username"];
?></font>
</div>
<div class="username">Email</div>
<div class="username"><input type="email" name="email" placeholder="Your Email">

<font color="red">
<?php echo $errors["$email"];
echo $uccess["$email"];
?></font>

</div>
<?php include("page1.php"); ?>