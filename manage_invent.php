<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add-Inventory</title>
    <link rel="stylesheet" href="css/manage_invent.css" />
</head>

<body>
     <div class="container">
       <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="cart"></ion-icon></span>
                        <span class="logo">
                            <h2>SmartStock</h2>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="lab_assist.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Lab Assistants</span>
                    </a>
                </li>
                <li>
                    <a href="scan_invent.php">
                        <span class="icon"><ion-icon name="scan-outline"></ion-icon></span>
                        <span class="title">Scanned Inventories</span>
                    </a>
                </li>
                <li>
                    <a href="addinventory.php">
                        <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
                        <span class="title">Add Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="manage_invent.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Manage Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--  main  -->

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
            <!-- Inventory addition form -->
            <div class="Container1">

                <h1>Add Inventory to Lab</h1>

                <form action="manageDB.php" method="post" id="inventory">
                    <label for="serial-no">Serial No:</label>
                    <input type="text" id="serial-no" name="serial_no" required>
                    <label for="Inventory-Description">Inventory Description:</label>
                    <input type="Text" id="Inventory-Description" name="Inventory_Description" required>
                    <label for="Purchase-Price">Purchase Price:</label>
                    <input type="number" id="Purchase-Price" name="Purchase_Price" required>
                    <label for="Move_To_Laboratory">Move To Labrotary:</label>
                    <select id="Move_To_Laboratory" name="Move_To_Laboratory" required>
                        <option value="">Select a Laboratory</option>
                        <option value="MB-407-A">MB-407-A</option>
                        <option value="MB-407-B">MB-407-B</option>
                        <option value="MB-408-A">MB-408-A</option>
                        <option value="MB-408-B">MB-408-B</option>
                        <option value="MB-409">MB-409</option>
                        <option value="MB-413">MB-413</option>
                        <option value="MB-414">MB-414</option>

                    </select>
                    <label for="Status">Status:</label>
                    <select id="Status" name="Status" required>
                        <option value="">Select a Laboratory</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Pending">Pending</option>
                        <option value="Return">Return</option>
                        <option value="In-Progress">In-Progress</option>
                       

                    </select>
                  
                    
                     <input type="submit" name='shiftitem' value="Add Inventory"> 
                    <!-- <button name='additem' value="Generate QR Code" onclick="generateQRCode()"> -->
                    <!--button type="button"name='shiftitem' >Move Inventory</button>-->

                </form>
            </div>
            <div class="details">
            <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Shifts</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <td>Serial No</td>
                                <td>Inventory Description</td>
                                <td>Purchase_Price</td>
                                <td>Move To</td>
                                <td>Status</td>
                              
                                
                            </tr>
                        </thead>
                        <?php

            // Database connection

            //session_start();
            include_once ('connection.php');


            // Fetch data from the manage_invent table

            $sql = "SELECT * FROM manage_invent";

            $result = $conn->query($sql);


            if ($result->num_rows > 0) {

                // Display each row as a table row (<tr>)

                while ($row = $result->fetch_assoc()) {

                    

                    echo "<td>" . $row["serial_no"] . "</td>";
                    

                    echo "<td>" . $row["Inventory_Description"] . "</td>";
                    echo "<td>" . $row["Purchase_Price"] . "</td>";
                    echo "<td>" . $row["Move_To_Laboratory"] . "</td>";
                    echo "<td>" . $row["Status"] . "</td>";
                    echo "</tr>";

                }

            } else {

                echo "<tr><td colspan='5'>No data found</td></tr>";

            }


            // Close the database connection

            $conn->close();

            ?>
                    </table>
                
                    

                    
            </div>
        </div>

            


        </div>

     </div>


        <div id="qrcode"></div>
        <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>

        <script>
            function generateQRCode() {
                var formData = new FormData(document.getElementById("inventory"));
                var data = "";

                formData.forEach(function (value, key) {
                    data += key + ": " + value + "\n";
                });

                if (data.trim() !== "") {
                    var qrCodeDiv = document.getElementById("qrcode");
                    qrCodeDiv.innerHTML = ""; // Clear previous QR code if any

                    var qrcode = new QRCode(qrCodeDiv, {
                        text: data,
                        width: 128,
                        height: 128
                    });
                } else {
                    alert("Please enter some data first.");
                }
            }
        </script>


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            //MenuToggle
            let toggle = document.querySelector(".toggle");
            let navigation = document.querySelector(".navigation");
            let main = document.querySelector(".main");

            toggle.onclick = function () {
                navigation.classList.toggle("active");
                main.classList.toggle("active");
            };

            //add hovered class in selected list items
            let list = document.querySelectorAll(".navigation li");

            function activeLink() {
                list.forEach((item) => item.classList.remove("hovered"));
                this.classList.add("hovered");
            }
            list.forEach((item) => item.addEventListener("mouseover", activeLink));
        </script>

</body>

</html>