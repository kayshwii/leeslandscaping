<?php
include_once ('dbh.php');

    //customer table info
    $customer_L_Name = $_POST['customer_L_Name'];
    $customer_F_Name = $_POST['customer_F_Name'];
    $customer_Title = $_POST['customer_Title'];
    $street_Address = $_POST['street_Address'];
    $city_State_Zip = $_POST['city_State_Zip'];
    $customer_Phone = $_POST['customer_Phone'];
    $customer_Email = $_POST['customer_Email'];
    //billing table info
    $service = $_POST['service'];
    $customer_bill = $_POST['customer_bill'];
    $amt_paid = $_POST['amt_paid'];
    $bill_date = $_POST['bill_date'];
    $date_paid = $_POST['date_paid'];

    $sqlinsert = "INSERT INTO customers (customer_L_Name, customer_F_Name, customer_Title , street_Address, city_State_Zip, customer_Phone, customer_Email) VALUES ('$customer_L_Name', '$customer_F_Name', '$customer_Title', '$street_Address', '$city_State_Zip', '$customer_Phone', '$customer_Email')";
    mysqli_query($conn, $sqlinsert);

    $sqlinsert2 = "INSERT INTO billing (customer_L_Name, service, customer_bill, amt_paid , bill_date, date_paid) VALUES ('$customer_L_Name', '$service', '$customer_bill', '$amt_paid', '$bill_date', '$date_paid')";
    mysqli_query($conn, $sqlinsert2);

    header("Location: sendBill.php");