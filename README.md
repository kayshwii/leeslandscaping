# leeslandscaping

this was my final project for php applic development at wilmington university. the assignment was as follows:

Create a PHP page that will extract a customer’s bill amount and the amount paid. Then it will calculate the amount due. If the amount due is greater than 0, an email should be generated and sent to the customer with that amount in the message. If the amount due is zero or there is a credit, generate a thank-you email that thanks the customer for his or her payment and expresses Lee’s wishes for continued business with this customer. Name the main page sendBill.php and be sure to include all the necessary accompanying files when you submit your work.

this task felt super open-ended. i imagined the only ones using this site would be lee or one of his associates, and they would be using it to submit billing information after a service was performed. so we start by collecting necessary data through a form. on submit we send this data to our database then direct the user to the email sent confimation page. this final php file querys both tables to retrieve data from the last entry and uses it to fill an email. i used a very simple variable to store the value of the amount due by subtracting the amount paid from the total bill.

i created two different messages to send to the customer and run a simple if/else statement to determine which will be sent. then i echo the results back to the page to show the user what was sent.

one thing i realized after i submitted the assignment was that i didnt provide the user a link back to the index page! anyways this was fun and i like how open-ended it was so i felt like i wasnt just supposed to follow a guide or an example from a book. we had a problem and had to think outside the box to accomplish the task.
