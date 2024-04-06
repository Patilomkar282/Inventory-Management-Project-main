<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css" />
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

        <!-- main -->

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

            <!-- cards -->

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">490</div>
                        <div class="cardName">Lab MB-407-A</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">600</div>
                        <div class="cardName">Lab MB-407-B</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">800</div>
                        <div class="cardName">Lab MB-408-A</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">300</div>
                        <div class="cardName">Lab MB-408-B</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">300</div>
                        <div class="cardName">Lab MB-409</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">300</div>
                        <div class="cardName">Lab MB-413</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">300</div>
                        <div class="cardName">Lab MB-414</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- Add charts -->

            <div class="graphBox">
                <div class="box">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="box">
                    <canvas id="earning"></canvas>
                </div>
            </div>

            <!-- details list -->

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Shifts</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>ID</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CPU</td>
                                <td>$1200</td>
                                <td>01</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Chairs</td>
                                <td>$110</td>
                                <td>02</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Desk</td>
                                <td>$620</td>
                                <td>03</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Monitor</td>
                                <td>$620</td>
                                <td>04</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Mouse</td>
                                <td>$575</td>
                                <td>05</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Desk</td>
                                <td>$620</td>
                                <td>06</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Monitor</td>
                                <td>$620</td>
                                <td>07</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Mouse</td>
                                <td>$575</td>
                                <td>08</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>CPU</td>
                                <td>$1200</td>
                                <td>09</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Chairs</td>
                                <td>$110</td>
                                <td>10</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Lab Assistants</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./images/img1.jpg" /></div>
                            </td>
                            <td>
                                <h4>Tejashree<br /><span>Assistant 1</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./images/img2.jpg" /></div>
                            </td>
                            <td>
                                <h4>Omkar<br /><span>Assistant 2</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./images/img3.jpg" /></div>
                            </td>
                            <td>
                                <h4>Shantanu<br /><span>Assistant 3</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./images/img4.jpg" /></div>
                            </td>
                            <td>
                                <h4>Kalyani<br /><span>Assistant 4</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>

    <script src="my_chart.js"></script> 

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