<form action="/home" method="POST">
    <input name="name" />
    <button type="submit">Submit</button>
</form>
<?php
    echo "<h1>Home Page</h1>";
    if(isset($_POST['name'])){
        echo "<h2>".$_POST['name']."</h2>";
    }
?>