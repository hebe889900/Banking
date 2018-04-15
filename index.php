<!-- Authors:
     Rashid Feroz [rashid.2008feroz@gmail.com]
     fb - facebook.com/rashid.feroz1
     website - www.hackwhiz.com

     Kuldeep kumar [kuldeepanditkumar@gmail.com]
     fb - facebook.com/kuldeepanditkumar

     Abhimanyu shrivastava [aabhimanyu13@gmail.com]
     fb - facebook.com/abhimanyu.shrivastava.58
     -->

<?php 
if(isset($_REQUEST['submitBtn'])){
    include '_inc/dbconn.php';
    $username=$_REQUEST['uname'];
    
    //salting of password
    $salt="@g26jQsG&nh*&#8v";
    $password= sha1($_REQUEST['pwd'].$salt);
  
    $sql="SELECT email,password FROM customer WHERE email='$username' AND password='$password'";
    $result=mysql_query($sql) or die(mysql_error());
    $rws=  mysql_fetch_array($result);
    
    $user=$rws[0];
    $pwd=$rws[1];    
    
    if($user==$username && $pwd==$password){
        session_start();
        $_SESSION['customer_login']=1;
        $_SESSION['cust_id']=$username;
    header('location:customer_account_summary.php'); 
    }
   
else{
    header('location:index.php');  
}}
?>
<?php 
session_start();
        
if(isset($_SESSION['customer_login'])) 
    header('location:customer_account_summary.php');   
?>

<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="google.css">
    <noscript>
        <meta http-equiv="refresh" content="0;url=no-js.php">
    </noscript>

    <meta charset="UTF-8">
    <title>Online Banking System</title>
</head>

<body class="devsite-doc-page devsite-full-width-page devsite-header-no-lower-tabs no-touch" data-family="endorsed" id="top_of_page">
    <div class="devsite-wrapper">
        <?php include 'header.php' ?>
        <div class="user_login">
            <form action='' method='POST'>
                <table align="left">
                    <tr>
                        <td><span class="caption">Secure Login</span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="uname" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="pwd" required>
                        </td>
                    </tr>

                    <tr>
                        <td class="button1">
                            <input type="submit" name="submitBtn" value="Log In" class="button">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="image">
            <img src="home.jpg" height="100%" width="100%" />
            <div class="text">

                <a href="safeonlinebanking.php"><h3>Click to read safe online banking tips</h3></a>
                <a href="t&c.php"><h3>Terms and conditions</h3></a>
                <a href="faq.php"><h3>FAQ'S</h3></a>

            </div>
        </div>

        <div class="left_panel">
            <p>Our internet banking portal provides personal banking services that gives you complete control over all your banking demands online.</p>
            <h3>Features</h3>
            <ul>
                <li>Registration for online banking</li>
                <li>Adding Beneficiary account</li>
                <li>Funds Transfer</li>
                <li>Last Login record</li>
                <li>Mini Statement</li>
                <li>ATM and Cheque Book</li>
                <li>Staff approval Feature</li>
                <li>Account Statement by date</li>

            </ul>
        </div>

        <div class="right_panel">

            <h3>PERSONAL BANKING</h3>
            <ul>
                <li>Personal Banking application provides features to administer and manage non personal accounts online.</li>
                <li>Phishing is a fraudulent attempt, usually made through email, phone calls, SMS etc seeking your personal and confidential information.</li>
                <li>Online Bank or any of its representative never sends you email/SMS or calls you over phone to get your personal information, password or one time SMS (high security) password.</li>
                <li>Any such e-mail/SMS or phone call is an attempt to fraudulently withdraw money from your account through Internet Banking. Never respond to such email/SMS or phone call. Please report immediately on reportif you receive any such email/SMS or Phone call. Please lock your user access immediately.
                </li>
            </ul>
        </div>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
