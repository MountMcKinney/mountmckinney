<?php
// /* ---------------------------------------------
//    EMAIL FORM by Josh Hughes (josh@deaghean.com)
//    Free to use and adjust as needed
//    --------------------------------------------- */
//
// /* Change these values as needed ($to determines who receives the form data) */
$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$comments = $_POST['contactComments'];

$to = $email;
$from = 'john@mountmckinney.com';
$subject = "Test Form";

$body = "From: $name\n Email: $email\n Comments: $comments\n";

if ($_POST['buttonSubmit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
        console.log('Woo!');
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
        console.log('Boo!');
    }
}

//
// /* If you'd like to make sure certain fields have been filled out,
//    enter a comma-delimited list of required field names.
//    Example: $requiredFields = "field_name1, field_name2"; */
//
// $requiredFields = "contactName, contactEmail";
//
//
// /* ------- ADVANCED EDITING BELOW THIS LINE ------- */
//
// /* Make sure a form was submitted */
//
// if (!$_POST)
// 	$missingFields = true;
// else
// 	$missingFields = false;
//
// /* Check required fields */
//
// if ((trim($requiredFields) != '') and ($missingFields != true))
// {
// 	$checkFields = explode(',', $requiredFields);
// 	for ($i = 0; $i < count($checkFields); $i++)
// 	{
// 		if (trim($_POST[trim($checkFields[$i])]) == '')
// 			$missingFields = true;
// 	}
// }
//
// /* If there are missing fields, print an error */
//
// if ($missingFields)
// {
// 	print "<h1>Missing Fields</h1>
// 	<p>Please go back and fill out all of the required fields.</p>";
//   console.log("Rut roh")
// }
//
// else
// {
// 	$from = sprintf("From: %s", $from);
// 	$message = "Submitted Form Values:\n\n";
//
// 	/* The message is a list in the following format:
// 	   Field_name: Value of the Field */
//
// 	foreach($_POST as $key => $value)
// 		$message .= sprintf("%s: %s\n\n", $key, htmlentities($value));
//
// 	/* Send the message */
//
// 	$success = mail($to, $subject, $message, $from);
//
// 	/* Print a success or error message */
//
// 	if ($success)
// 		print "<h1>Form Sent!</h1>
// 		<p>Thank you for your submission!</p>";
//     console.log("Eureka!");
// 	else
// 		print "<h1>Error!</h1>
// 		<p>The form was <strong>NOT</strong> sent! There seems to be some sort of malfunction.</p>";
//     console.log("No bueno");
// }
?>
