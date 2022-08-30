<?php 
if(isset($session['loggedUser'])){
    header("Location: ".parse_url($_SERVER['REQUEST_URI'],PHP_URL_HOST)."/home");
}
echo "PHP_SELF: ".$_SERVER["PHP_SELF"];?>
<form method="POST" action="<?php $reqURL;?>">
    <div class="form-floating mb-3">
     <input
       type="email"
       class="form-control" name="username" id="username" placeholder="test">
     <label for="floatingLabel">write your id</label>
   </div>
    <div class="form-floating mb-3">
     <input
       type="password"
       class="form-control" name="pass" id="pass" placeholder="pass">
     <label for="floatingLabel">write your password</label>
   </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username = filter_var($_POST['username'],FILTER_SANITIZE_EMAIL);
        $pass = $_POST['pass'];
        if(!filter_var($username,FILTER_VALIDATE_EMAIL)===false){
            $user = find_username('user_tb','email',$username);
            if($user !==false){
                if(password_verify($pass,$user['pass'])){
                    $_SESSION['loggedUser'] = $user;
                    header("Location: ".parse_url($_SERVER['REQUEST_URI'],PHP_URL_HOST)."/home");
                }else{
                echo "<h1>Wrong username/password</h1>";
            }
            }else{
                echo "<h1>Wrong username/password</h1>";
            }
        }else{
            echo "<h1>Not Valid</h1>";
        }
    }
?>