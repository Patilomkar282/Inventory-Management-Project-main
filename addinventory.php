<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add-Inventory</title>
    <link rel="stylesheet" href="css/addinventory.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode-generator/1.4.4/qrcode.min.js"></script>
</head>

<body>
     <div class="container">
       <div class="navigation">
            <ul>
                <li>
                    <a href="">
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

                <form action="inventory.php" method="post" id="inventory">
                <form action="" method="post" id="inventory">
                    <label for="serial-no">Serial No:</label>
                    <input type="text" id="serial-no" name="serial_no" required>
                    <label for="purchase-date">Purchase Date:</label>
                    <input type="date" id="purchase-date" name="purchase_date" required>
                    <br><br>
                    <label for="Inventory-Description">Inventory Description:</label>
                    <input type="Text" id="Inventory-Description" name="Inventory_Description" required>
                    <label for="labrotary">Laboratory:</label>
                    <select id="labrotary" name="labrotary" required>
                        <option value="">Select a Laboratory</option>
                        <option value="MB-407-A">MB-407-A</option>
                        <option value="MB-407-B">MB-407-B</option>
                        <option value="MB-408-A">MB-408-A</option>
                        <option value="MB-408-B">MB-408-B</option>
                        <option value="MB-409">MB-409</option>
                        <option value="MB-413">MB-413</option>
                        <option value="MB-414">MB-414</option>
                        <option value="Blockchain-lab">Blockchain-lab</option>

                    </select>
                    <label for="Purchase-Price">Purchase Price:</label>
                    <input type="number" id="Purchase-Price" name="Purchase_Price" required>
                    <label for="dsr-number">DSR Number:</label>
                    <input type="text" id="dsr-number" name="dsr_number" required>
                    
                    <input type="text" name="image_url" id="imageUrlInput" placeholder="Enter image URL">
                    <div id="qrCode"></div>
                    
                    <input type="submit" id='submit'  name='additem' value="Add Item">
                    <!-- <button name='additem' value="Generate QR Code" onclick="generateQRCode()"> -->
                    <button type="button" id="imageUrlInput"  onclick="generateQRCode()" style="margin:10px;">Generate QR Code</button>
                    <!-- <input type="submit" name='additem' value="Add Inventory"> -->
                    <!-- <button name='additem' value="Generate QR Code" onclick="generateQRCode()"> -->
                    

                </form>


            </div>

        </div>
        <a id="downloadLink" style="display:none;">Download QR Code</a>


        <div id="qrcode"></div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

        <script>
            let qrCodeDownloadLink;
           function generateQRCode() {
  var qrData = JSON.stringify({
    serial_no: document.getElementById('serial-no').value,
    purchase_date: document.getElementById('purchase-date').value,
    Inventory_Description: document.getElementById('Inventory-Description').value,
    labrotary: document.getElementById('labrotary').value,
    Purchase_Price: document.getElementById('Purchase-Price').value,
    dsr_number: document.getElementById('dsr-number').value,
   
  });
  var qrCode = new QRCode(document.getElementById('qrCode'), {
    text: qrData,
    width: 150,
    height: 150,
    colorDark : "#000000",
    colorLight : "#ffffff",
   
    correctLevel : QRCode.CorrectLevel.Q
  });

  // Download QR code as image file
  var canvas = document.getElementById('qrCode').children[0];
  var imageURL = canvas.toDataURL('image/png');
  var downloadLink = document.getElementById('downloadLink');
  downloadLink.href = imageURL;
  downloadLink.download = 'qrcode.png';
  downloadLink.click();
    // Store the download link in the qrCodeDownloadLink variable

    qrCodeDownloadLink = imageURL;

    document.getElementById("imageUrlInput").value = qrCodeDownloadLink;

   



    
  
}




        </script>
    





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