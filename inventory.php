<?php
session_start();
include_once ('connection.php');

// Form handling

if (isset($_POST['additem'])) {

    $serial_no = $_POST['serial_no'];

    $purchase_date = $_POST['purchase_date'];

    $inventory_description = $_POST['Inventory_Description'];

    $labrotary = $_POST['labrotary'];

    $purchase_price = $_POST['Purchase_Price'];

    $dsr_number = $_POST['dsr_number'];

    $assistant_confirmed = $_POST['Assistant_Confirmed'];
    $image_url = $_POST['image_url'];


    // Insert into database

    $sql = "INSERT INTO inventory_data (serial_no, purchase_date, inventory_description, labrotary, purchase_price, dsr_number, assistant_confirmed,image_url)

            VALUES ('$serial_no', '$purchase_date', '$inventory_description', '$labrotary', '$purchase_price', '$dsr_number', '$assistant_confirmed','$image_url')";
    //$sql = "INSERT INTO inventory_data (serial_no, purchase_date, inventory_description, labrotary, purchase_price, dsr_number, assistant_confirmed)

            //VALUES ('$serial_no', '$purchase_date', '$inventory_description', '$labrotary', '$purchase_price', '$dsr_number', '$assistant_confirmed')";


    if ($conn->query($sql) === TRUE) {

        echo "<script>alert('Item added successfully!')</script>";
        echo "New record created successfully";
        

    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;

    }

}

