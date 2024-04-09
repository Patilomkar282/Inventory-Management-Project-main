<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab Assistants</title>
    <link rel="stylesheet" href="css/lab_assist.css" />
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
            <!-- ID,Name,Lab No,Mail-id,Mobile No -->

            <!-- cards -->

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">Assistant 1</div>
                        <div class="cardName">Prof. Joe</div>
                        <div class="cardName">Id 101</div>
                        <div class="cardName">9850058502</div>
                        <div class="cardName">Lab MB-407-A</div>
                        <div class="cardName">joe@mmcoe.edu.in</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">Assistant 2</div>
                        <div class="cardName">Prof. Alan</div>
                        <div class="cardName">Id 102</div>
                        <div class="cardName">9758064502</div>
                        <div class="cardName">Lab MB-407-B</div>
                        <div class="cardName">alan@mmcoe.edu.in</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">Assistant 3</div>
                        <div class="cardName">Prof. Smith</div>
                        <div class="cardName">Id 103</div>
                        <div class="cardName">9652052502</div>
                        <div class="cardName">Lab MB-408-A</div>
                        <div class="cardName">smith@mmcoe.edu.in</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">Assistant 4</div>
                        <div class="cardName">Prof. Jack</div>
                        <div class="cardName">Id 104</div>
                        <div class="cardName">9404882188</div>
                        <div class="cardName">Lab MB-408-B</div>
                        <div class="cardName">jack@mmcoe.edu.in</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
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