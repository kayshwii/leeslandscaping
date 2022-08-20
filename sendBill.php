<?php
include_once ('dbh.php');
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Lee's Landscaping</title>
</head>
<body>
    <p>Email Sent:</p>
    <?php
        //query the database
        $sqlquery = "SELECT * FROM customers ORDER BY customer_ID DESC LIMIT 1";
        $result = mysqli_query($conn, $sqlquery);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            $row = mysqli_fetch_array($result);
        }
        $sqlquery2 = "SELECT * FROM billing ORDER BY customer_ID DESC LIMIT 1";
        $result2 = mysqli_query($conn, $sqlquery2);
        $resultCheck2 = mysqli_num_rows($result2);
        if ($resultCheck2 > 0) {
            $row2 = mysqli_fetch_array($result2);   
        }
        //store data from the tables to use them in email
        $title = $row['customer_Title'];
        $name = $row['customer_L_Name'];
        $email = $row['customer_Email'];
        $bill = $row2['customer_bill'];
        $paid = $row2['amt_paid'];
        $due = $bill - $paid;

        //structure the email
        $to = $email;
        $subject = "Thank you for your business!";
        $body1 = "Thanks again " . $title . " " . $name . " for your business. <br>
                    You still owe $" . $due;
        $body2 = "Thanks again " . $title . " " . $name . " for your business. <br>
                    And thank you for your payment. We hope we see you again.";
        $headers = "From: lee@leeslandscaping.com";
        if ($due <= 0) {
            mail($to, $subject, $body2, $headers);
            echo "Mail Sent";
            echo "<p>Customer: " . $title . " " . $name . "</p>";
            echo "<p>Message: " . $body2 . "</p>";
            echo "<p>" . $headers . "</p>";
        }
        else {
            mail($to, $subject, $body1, $headers);
            echo "Mail Sent";
            echo "<p>Customer: " . $title . " " . $name . "</p>";
            echo "<p>Message: " . $body1 . "</p>";
            echo "<p>" . $headers . "</p>";
        }
    ?>


</body>
</html>