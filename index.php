<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Lee's Landscaping</title>
</head>
<body>

    <form action="post.php" method="post">
        <table>
            <tr>
                <td>Customer First Name: </td>
                <td><input type="text" name="customer_F_Name" placeholder="First Name" /></td>
            </tr>
            <tr>
                <td>Customer Last Name: </td>
                <td><input type="text" name="customer_L_Name" placeholder="Last Name" /></td>
            </tr>
            <tr>
                <td>Customer Title:</td>
                <td><input type="text" name="customer_Title" placeholder="Mr, Ms, Dr, etc." /></td>
            </tr>
            <tr>
                <td>Street Address:</td>
                <td><input type="text" name="street_Address" placeholder="Street Address" /></td>
            </tr>
            <tr>
                <td>City, State, Zip:</td>
                <td><input type="text" name="city_State_Zip" placeholder="City, State, Zip" /></td>
            </tr>
            <tr>
                <td>Customer Phone Number:</td>
                <td><input type="tel" name="customer_Phone" placeholder="###-###-####" /></td>
            </tr>
            <tr>
                <td>Customer Email:</td>
                <td><input type="email" name="customer_Email" placeholder="your@mail.com" /></td>
            </tr>
            <tr>
                <td>Service Performed: </td>
                <td><input type="text" name="service" placeholder="example: flowers" /></td>
            </tr>
            <tr>
                <td>Billed Amount: </td>
                <td><input type="number" name="customer_bill" placeholder="whole number" /></td>
            </tr>
            <tr>
                <td>Amount Paid:</td>
                <td><input type="number" name="amt_paid" placeholder="whole number" /></td>
            </tr>
            <tr>
                <td>Bill Date:</td>
                <td><input type="date" name="bill_date" placeholder="Date Billed" /></td>
            </tr>
            <tr>
                <td>Date Paid:</td>
                <td><input type="date" name="date_paid" placeholder="Date Paid" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" /></td>
            </tr>
        </table>
    </form>

</body>
</html>