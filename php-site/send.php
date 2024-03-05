<?php
//session_start();
$error='';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$list=$_POST['list'];
$message=$_POST['message'];

// Here we get all the information from the fields sent over by the form.
//$name = $_POST['name'];
//$email = $_POST['email'];
//$message = $_POST['message'];
if(empty($name)||empty($email))
{
	$error .= "Name and Email are required fields. \n";	
}
	
if(IsInjected($email) || empty($email))
{
	$error .= "Bad email value! \n";
}


if($error=='')
{	
//$subject = 'the subject';
	$message = '<table>

<tr>
	<td>Name</td>
	<td>'.$name.'</td>
</tr>
<tr>
	<td>Email</td>
	<td>'.$email.'</td>
</tr>
<tr>
	<td>phone</td>
	<td>'.$phone.'</td>
</tr>
<tr>
	<td>list</td>
	<td>'.$list.'</td>
</tr>
	 
<tr>
	<td>Message</td>
	<td>'.$message.'</td>
</tr>

</table>';

//	$to = array('gauthammarolix@gmail.com', 'arunmarolix@gmail.com', 'bdm@marolix.com');
//	$to = "rajrupa.marolix@gmail.com , bdm@marolix.com ";
	
	$to = 'info@vcpk.ac.in';
	
	$headers = 'From: '.$email . "\r\n" .
	 "MIME-Version: 1.0\n" .
	 "Content-type: text/html; charset=iso-8859-1";

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
		mail($to,  $phone, $list, $message, $headers); //This method sends the mail.
	//	echo "Your email was sent!"; // success message
    echo '<script type="text/javascript">alert("Thank you for contacting us. We will be in touch with you very soon.");window.location.href = "https://vcpk.ac.in/";</script>';
	}
    else
    {
		echo '<script type="text/javascript">alert("Invalid Email, please provide an correct email.");</script>';
	}
 
	
	
	}
	else
	{
		echo $error;
	}

	
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>