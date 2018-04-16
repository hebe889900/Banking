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
$pages = 'home';
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
        <div id = "gc-wrapper">
            <div class = "devsite-main-content clearfix">
                <section class = "background-grey full-bleed-section">
                    <div class = "l-max-width-standard l-pad-top-7 wall">
                        <article class = "page no-article-survey">
                            <form class = "cf center" action='' method='POST'>
                                <h1 class="contact-form__title">Secure Login</h1>
                                <div class="field" data-contact-form-field-required="true" data-page="1" data-type="TEXT">
                                    <label class="cc" for="username">
                                        <span class="contact-form-label__text">Username</span>
                                        <span> *</span></label>
                                        <input id="username" maxlength="1000" name="uname" type="text">
                                </div>
                                <div class="field" data-contact-form-field-required="true" data-page="1" data-type="TEXT">
                                    <label class="cc" for="password">
                                        <span class="contact-form-label__text">Password</span>
                                        <span> *</span></label>
                                        <input id="password" maxlength="1000" name="pwd" type="password">
                                </div>
                                <div class="button-bar">
                                    <span class="notification-area" tabindex="-1">* Required field</span>
                                    <div class="buttons">
                                        <div class="mspin mspin-small submit-spin" style="display: none;"></div>
                                        <button class="submit-button" type="submit" name="submitBtn" value="Log In">Submit</button>
                                    </div>
                                </div>                                 
                                <div class = "contact-form__intro cc">
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
                            </form>                                                          
                        </artical>
                    </div>
                </section>
                <?php include 'footer.php' ?>                    
            </div>
        </div>
    </div>
</body>
<script src="js/google.js"></script>
<script src="js/jquery.js"></script>
<script src="js/script_foot_closure.js"></script>
<script src="js/script_foot.js"></script>
<script>
var a = window.devsite || {};
window.devsite = a;
a.readyCallbacks = [];
window.devsite.readyCallbacks = a.readyCallbacks;
a.ready = function(b) {
    a.readyCallbacks.push(b)
};
window.devsite.ready = a.ready;
  $(document).ready(function() {
    new devsite.feedback.Widget({
        'product_id': '81777',
        'bucket': '',
        'context': 'Maps JS API v3',
        'version': 'devsite-20180226-r03-rc00.default'
      },
      document.querySelectorAll('.devsite-feedback-button'),
      'en',
      document.querySelector('.devsite-site-mask'),
      document.querySelector('.devsite-feedback-dialog'),
      document.querySelector('.devsite-feedback-cancel'),
      document.querySelectorAll('.devsite-feedback-item a:not([href])')
    );
  });    
        (function($) {
          
          devsite.devsite.Init($, {'FULL_SITE_SEARCH_ENABLED': 1, 'ENABLE_BLOCKED_VIDEO_PLACEHOLDER': 0, 'VERSION_HASH': '9abbcf9aa7', 'SITE_NAME': 'devsite', 'HISTORY_ENABLED': 1, 'ENABLE_BLOCKED_LINK_TOOLTIP': 0, 'ALLOWED_HOSTS': ['.android.com', '.anvato.com', '.apigee.com', '.appspot.com', '.dialogflow.com', '.gonglchuangl.net', '.google.cn', '.google.com', '.googleplex.com', '.nest.com', '.openthread.io', '.openweave.io', '.orbitera.com', '.tensorflow.org'], 'BLOCK_RSS_FEEDS': 0, 'SCRIPTSAFE_DOMAIN': 'google-developers.appspot.com', 'VTAGS_ENABLED': 0},
                               '[]','en',
                               true, 'rufwork@gmail.com',
                               {"f62218c009ec029abef196bba5aa34cf": true, "8de7a048f21618359bd37f5ce44be073": false, "098dafe57affddc137df300142652cfd": false, "8e03e230de0bd8a6fe173fdf172e8b3f": true, "cb025a64a50094835616312f4774a53d": true, "51470233c56fc1fde50f00b73c52b216": false, "d169d485cf24243a263783dbe42029b1": true, "039e5d84b87fd75807ffb37b7f1bbf2c": true, "752953480de00a336d911a46966cc16d": false, "700def1a83e356c06c0925afb05de4b0": false, "6749dcb526ce9bde6993550c7d928d24": true}, '/maps/documentation/javascript/',
                               'https://developers.google.com/');
        })(jQuery);

        
        devsite.localInit = function() {
          
        };

      </script><script>
      $('.devsite-utility-footer-language-select').each(function() {
        $(this).change(function(){$('.devsite-utility-footer-language').submit();});
      });
      </script>
</html>        

