function generateQRCode() {
    var formData = new FormData(document.getElementById("inventory"));
    var data = "";
  
    formData.forEach(function(value, key){
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
  