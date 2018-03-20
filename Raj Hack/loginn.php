
<?php  
if(isset($_POST["log"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('hack') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM login WHERE uname='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['uname'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  

   header("Location:part1.php");  
 
}  
    }
	else 
	{  

    echo "Invalid Username or password !Try Again ";
    
	
	}  
  
} 
}  
?>  