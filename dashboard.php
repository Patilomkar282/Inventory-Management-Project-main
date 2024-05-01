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
                
               
            </div>

            <!-- cards -->

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php 
                            

                            include_once ('connection.php');
                            $sql = "SELECT count(*) FROM inventory_data where labrotary='MB-407-A'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $count = $row['count(*)'];
                                echo $count;
                            } else {
                                echo "Error: " . $conn->error;
                             }
                           



                            ?>
                        </div>
                        <div class="cardName"><a href='./Labs/Lab407A.php'>Lab MB-407-A</a></div>
                        
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"> <?php 
                            

                            include_once ('connection.php');
                            $sql = "SELECT count(*) FROM inventory_data where labrotary='MB-407-B'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $count = $row['count(*)'];
                                echo $count;
                            } else {
                                echo "Error: " . $conn->error;
                             }
                           



                            ?>
                            </div>
                        <div class="cardName"><a href='./Labs/Lab407B.php'>Lab MB-407-B</a></div>
                        
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"> <?php 
                            

                            include_once ('connection.php');
                            $sql = "SELECT count(*) FROM inventory_data where labrotary='MB-408-A'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $count = $row['count(*)'];
                                echo $count;
                            } else {
                                echo "Error: " . $conn->error;
                             }
                           



                            ?>
                            </div>
                        <div class="cardName"><a href='./Labs/Lab408A.php'>Lab MB-408-A</a></div>
                       
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"> <?php 
                            

                            include_once ('connection.php');
                            $sql = "SELECT count(*) FROM inventory_data where labrotary='MB-408-B'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $count = $row['count(*)'];
                                echo $count;
                            } else {
                                echo "Error: " . $conn->error;
                             }
                           



                            ?></div>
                        <div class="cardName"><a href='./Labs/Lab408B.php'>Lab MB-408-B</a></div>
                        
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"> <?php 
                            

                            include_once ('connection.php');
                            $sql = "SELECT count(*) FROM inventory_data where labrotary='MB-409'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $count = $row['count(*)'];
                                echo $count;
                            } else {
                                echo "Error: " . $conn->error;
                             }
                           



                            ?>
                            </div>
                        <div class="cardName"><a href='./Labs/Lab409.php'>Lab MB-409</a></div>
                        
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"> <?php 
                            

                            include_once ('connection.php');
                            $sql = "SELECT count(*) FROM inventory_data where labrotary='MB-413'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $count = $row['count(*)'];
                                echo $count;
                            } else {
                                echo "Error: " . $conn->error;
                             }
                           



                            ?>
                            </div>
                        <div class="cardName"><a href='./Labs/Lab413.php'>Lab MB-413</a></div>
                       
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"> <?php 
                            

                            include_once ('connection.php');
                            $sql = "SELECT count(*) FROM inventory_data where labrotary='MB-414'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $count = $row['count(*)'];
                                echo $count;
                            } else {
                                echo "Error: " . $conn->error;
                             }
                           



                            ?>
                            </div>
                        <div class="cardName"><a href='./Labs/Lab414.php'>Lab MB-414</a></div>
                      
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>


                <div class="card">
                    <div>
                        <div class="numbers"> <?php 
                            

                            include_once ('connection.php');
                            $sql = "SELECT count(*) FROM inventory_data where labrotary='Blockchain-Lab'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $count = $row['count(*)'];
                                echo $count;
                            } else {
                                echo "Error: " . $conn->error;
                             }
                           



                            ?>
                            </div>
                        <div class="cardName"><a href='./Labs/block-chain.php'>Blockchain-Lab</a></div>
                       
                    </div>
                    <div class="iconBx">
                        <ion-icon name="desktop-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- Add charts -->

            <div class="graphBox">
                <div class="box">
                    <canvas id="myChart">
                       
                    </canvas>
                </div>
                <div class="box">
                    <canvas id="totalInventoryCountChart"></canvas>
                </div>
            </div>


            

            <?php


        $conn = new mysqli("localhost", "root", "", "inventory_mgmt");

  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "SELECT labrotary, COUNT(*) AS total_quantity FROM inventory_data GROUP BY labrotary";
    $result = $conn->query($sql);

    $lab_names = array();
    $quantities = array();

    if ($result->num_rows > 0) {
        // Fetching data and storing it in arrays
        while ($row = $result->fetch_assoc()) {
            $lab_names[] = $row["labrotary"];
            $quantities[] = $row["total_quantity"];
        }
    } else {
        echo "0 results";
    }



       $conn->close();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <canvas id="myChart"></canvas>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');

        const lab_names = <?php echo json_encode($lab_names) ?>;
        const quantities = <?php echo json_encode($quantities) ?>;

        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: lab_names,
                datasets: [{
                    label: 'Product Count',
                    data: quantities,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(0, 0, 255, 0.8)',
                        'rgba(255, 206, 0, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(75, 255, 192, 1)'
                    ],
                }]
            },
            options: {
                responsive: true,
            }
        });
    </script>



  <!-- barchart -->

  <?php

$conn = new mysqli("localhost", "root", "", "inventory_mgmt");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Inventory_Description, labrotary, COUNT(*) AS total_count FROM inventory_data GROUP BY Inventory_Description, labrotary";
$result = $conn->query($sql);

$inventory_counts = array();

if ($result->num_rows > 0) {
    // Fetching data and storing it in an associative array
    while ($row = $result->fetch_assoc()) {
        $inventory_counts[$row["Inventory_Description"]][$row["labrotary"]] = $row["total_count"];
    }
} else {
    echo "0 results";
}


?>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="totalInventoryCountChart"></canvas>

<script>
    const inventory_counts_php = <?php echo json_encode($inventory_counts) ?>;

    // Debugging: Check data retrieval
    console.log(inventory_counts_php);

    // Extract labels (inventory items) and datasets (total counts for each lab) from PHP variable
    const labels = Object.keys(inventory_counts_php);
    const datasets = Object.values(inventory_counts_php).map((labCounts) => ({
        label: Object.keys(labCounts).join(', '),
        data: Object.values(labCounts),
        backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(0, 0, 255, 0.8)',
                    'rgba(255, 206, 0, 1)',
                   // 'rgba(75, 192, 192, 1)',
                    //'rgba(153, 102, 255, 1)',
                    //'rgba(255, 159, 64, 1)',
                   // 'rgba(75, 255, 192, 1)'
                ],// Adjust color as needed
    }));

    // Initialize the chart after DOM content is loaded
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('totalInventoryCountChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: datasets
            },
            options: {
                responsive: true
            }
        });
    });
</script>


  



            <!-- details list -->
        
        <div class="demo">

        <div class="details">
            <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Total Inventory</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <td>Serial No</td>
                                <td>Purchase Date</td>
                                <td>Inventory Description</td>
                                <td>Labrotary</td>
                                <td>Purchase_Price</td>
                                <td>Dsr_Number</td>
                               
                                
                            </tr>
                        </thead>
                        <?php

            // Database connection

            //session_start();
            include_once ('connection.php');


            // Fetch data from the manage_invent table

            $sql = "SELECT * FROM inventory_data";

            $result = $conn->query($sql);


            if ($result->num_rows > 0) {

                // Display each row as a table row (<tr>)

                while ($row = $result->fetch_assoc()) {

                    echo "<tr>";

                    echo "<td>" . $row["serial_no"] . "</td>";
                    echo "<td>" . $row["purchase_date"] . "</td>";

                    echo "<td>" . $row["Inventory_Description"] . "</td>";
                    echo "<td>" . $row["labrotary"] . "</td>";

                    echo "<td>" . $row["Purchase_Price"] . "</td>";

                    echo "<td>" . $row["dsr_number"] . "</td>";

           

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
       

            

        <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Project Members</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./images/img1.jpg" /></div>
                            </td>
                            <td>
                                <h4>Tejashree<br /><span>Member 1</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./images/img2.jpg" /></div>
                            </td>
                            <td>
                                <h4>Omkar<br /><span>Member 2</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./images/img3.jpg" /></div>
                            </td>
                            <td>
                                <h4>Shantanu<br /><span>Member 3</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./images/img4.jpg" /></div>
                            </td>
                            <td>
                                <h4>Kalyani<br /><span>Member 4</span></h4>
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