<?php
$host="localhost";
$user="root";
$password="12345678";
$db="subscribe";
$con=mysqli_connect($host,$user,$password,$db) or die("Sorry unable to connect");
$email=$_POST['email'];
if(isset($_POST['sub']))
{
    $subscribe="INSERT INTO `subscribers` (`id`, `email`) VALUES (NULL, '$email');";
    $subscribed=mysqli_query($con,$subscribe);
    if($subscribed)
    {
        echo '<script type="text/javascript"> alert("Subscribed Successfully!!!"); </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("OOPS something went wrong!!!"); </script>';
    }
}
?>
<html>
    <head>
        <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap');

      body {
        background: #CAD3DB;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: 'Mulish', sans-serif;
      }

      .subscribe {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: white;
        width: 945px;
        height: 474px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(61, 159, 255, 0.2)
      }


      .subscribe__title {
        font-weight: bold;
        font-size: 26px;
        margin-bottom: 18px;
      }

      .subscribe__copy {
        max-width: 450px;
        text-align: center;
        margin-bottom: 53px;
        line-height: 1.5;
      }

      .form {
        margin-bottom: 25px;
      }

      .form__email {
        padding: 20px 25px;
        border-radius: 5px;
        border: 1px solid #CAD3DB;
        width: 431px;
        font-size: 18px;
        color: #0F121F;
      }

      .form__email:focus {
        outline: 1px solid #3D9FFF;
      }

      .form__button {
        background: #3D9FFF;
        padding: 10px;
        border: none;
        width: 244px;
        height: 65px;
        border-radius: 5px;
        font-size: 18px;
        color: white;
        box-shadow: 0 4px 20px rgba(61, 159, 255, 0.7);
      }

      .form__button:hover {
        box-shadow: 0 10px 20px rgba(61, 159, 255, 0.7);
      }

      </style>
    </head>
<body>

<div class="subscribe">
	<h2 class="subscribe__title">Let's keep in touch</h2>
	<p class="subscribe__copy">Subscribe to keep up with fresh news and exciting updates. We promise not to spam you!</p>
	<div class="form">
    <form method="post">
		<input type="email" name="email" class="form__email" placeholder="Enter your email address" />
        <input type="submit" name="sub" value="Subscribe" id="disp" class="form__button"/><br>
    </form>
	</div>
</div>

</body>