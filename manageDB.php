<?php
session_start();
include_once ('connection.php');

// Form handling

if (isset($_POST['shiftitem'])) {

    $serial_no = $_POST['serial_no'];
    $inventory_description = $_POST['Inventory_Description'];
    $purchase_price = $_POST['Purchase_Price'];
    $Move_To_Laboratory = $_POST['Move_To_Laboratory'];
    $Status = $_POST['Status'];


    // Insert into database

    $sql = "INSERT INTO manage_invent(serial_no,inventory_description, purchase_price,Move_To_Laboratory,Status)

            VALUES ('$serial_no','$inventory_description',  '$purchase_price','$Move_To_Laboratory','$Status')";


    if ($conn->query($sql) === TRUE) {

        echo "New record created successfully";

    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;

    }

}
?>






