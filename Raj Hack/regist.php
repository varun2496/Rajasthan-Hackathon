<?php  
if(isset($_POST["submit"]))
{  
if(!empty($_POST['user']) && !empty($_POST['pass'])) 
{  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('hack') or die("cannot select DB");  
    $query=mysql_query("SELECT * FROM login WHERE uname='".$user."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(uname,password) VALUES('$user','$pass')";  
   $result=mysql_query($sql);  
        if($result)
		{  
    echo "Account Successfully Created";  

    header("Location:loginn.php");  

    } 
	else {  
    echo "Failure!";  
    }  
  
    }
	else 
	{  
    echo "<h2><b>User already registered !Try Again </b></h2>";
    }  
  
} else {  
    echo "<h2><b>All fields are required!</b></h2>";  
}  
}  
?>  
