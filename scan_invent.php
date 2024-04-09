<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scanned-Inventory</title>
    <link rel="stylesheet" href="css/scan.css" />
    <link rel="stylesheet" href="css/scan_invent.css" />
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
            <!-- Scanned Inventory Data -->


            <div class="details">
            <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Qr Codes and Inventory</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    
                    <table>
    <thead>
        <tr>
            <td>Serial No</td>
            <td>Inventory Description</td>
            <td>Labrotary</td>
            <td>QR Codes</td>
        </tr>
    </thead>
    <?php

    // Database connection
    include_once ('connection.php');

    // Fetch data from the manage_invent table
    $sql = "SELECT serial_no,Inventory_Description,labrotary,images_url FROM inventory_data";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display each row as a table row (<tr>)
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["serial_no"] . "</td>";
            echo "<td>" . $row["Inventory_Description"] . "</td>";
            echo "<td>" . $row["labrotary"] . "</td>";
            echo "<td><a href='" . $row["images_url"] . "' target='_blank'><img src='data:image/jpeg;base64," . base64_encode($row["images_url"]) . "' alt='QR Code' style='max-width: 100px;'></a></td>";
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