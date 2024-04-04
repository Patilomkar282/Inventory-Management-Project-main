<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add-Inventory</title>
    <link rel="stylesheet" href="css/addinventory.css" />
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
                    <a href="#">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">Lab Assistants</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="scan-outline"></ion-icon></span>
                        <span class="title">Scaned Inventories</span>
                    </a>
                </li>
                <li>
                    <a href="addinventory.php">
                        <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
                        <span class="title">Add Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="#">
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
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search Here" />
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">
                    <img src="./images/user.jpg" />
                </div>
            </div>
            <!-- Inventory addition form -->
            <div class="Container1">

             <h1>Add Inventory to Lab</h1>

             <form action="inventory.php" method="post">
                <label for="serial-no">Serial No:</label>
                <input type="text" id="serial-no" name="serial_no" required>
                <label for="purchase-date">Purchase Date:</label>
                <input type="date" id="purchase-date" name="purchase_date" required>
                <br><br>
                <label for="Inventory-Description">Inventory Description:</label>
                <input type="Text" id="Inventory-Description" name="Inventory_Description"  required>
                <label for="labrotary">Labrotary:</label>
                <select id="labrotary" name="labrotary" required>
                    <option value="">Select a Labrotary</option>
                    <option value="MB-407-A">MB-407-A</option>
                    <option value="MB-407-B">MB-407-B</option>
                    <option value="MB-408-A">MB-408-A</option>
                    <option value="MB-408-B">MB-408-B</option>
                    <option value="MB-409">MB-409</option>
                    <option value="MB-413">MB-413</option>
                    <option value="MB-414">MB-414</option>

                </select>
                <label for="Purchase-Price">Purchase Price:</label>
                <input type="number" id="Purchase-Price" name="Purchase_Price" required>
                <label for="dsr-number">DSR Number:</label>
                <input type="text" id="dsr-number" name="dsr_number" required>
                <label for="Assistant-Confirmed">Assistant Confirmed:</label>
                <input type="text" id="Assistant-Confirmed" name="Assistant_Confirmed" required>
               
                <input type="submit" name='additem' value="Add Item">

             </form>
            </div>








        </div>







        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            //MenuToggle
            let toggle = document.querySelector(".toggle");
            let navigation = document.querySelector(".navigation");
            let main = document.querySelector(".main");

            toggle.onclick = function() {
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