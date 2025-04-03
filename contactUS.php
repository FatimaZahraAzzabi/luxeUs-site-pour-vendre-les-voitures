<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
<style type="text/css">.login-container {
  max-width: 500px;
  margin: 0 auto;
  text-align: center;
}

form {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
  padding: 40px;
  margin-top: 50px;
}

h1 {
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 30px;
}

label {
  display: block;
  text-align: left;
  margin-bottom: 10px;
}

input[type="email"],
input[type="text"] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-bottom: 20px;
}

button[type="submit"] {
  background-color: #0070ba;
  color: #fff;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #005d9e;
}

a {
  color: #0070ba;
  text-decoration: none;
  margin-top: 20px;
  display: block;
  font-size: 14px;
}

a:hover {
  text-decoration: underline;
}
</style>

<div class="login-container">
  <form method="post">
    <h1>CONTACT US</h1>
    <label for="email"> Your name </label>
    <input type="text" id="name" name="name" required>
    <label for="email"> You adresse email</label>
    <input type="email" id="email" name="email" required>
    <label for="text">Put your comment here</label>
    <input type="text"  name="message" required>
    <button type="submit">SEND</button>
 
  </form>
  <?php

if(isset($_POST['email'])) {

    // Change these variables to match your own email settings
    $to = "m.chaaban897@gmail.com";
    $subject = "New form submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   
    // Construct the message body
    $body = "Name = ".$name."\r\nEmail = ".$email."\r\nMessage = ".$message;
   
    // Send the email
   
   
mail($to, $subject, $body);
echo "successfull";
     
    // Redirect back to the form page
    header('Location: paypal.php');
    exit();
}
?>

</div>
</body>
</html>

	
