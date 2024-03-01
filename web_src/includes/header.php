<!DOCTYPE html>
<html>

<head>
  <title>Etown Parking Website</title>
  <link rel='stylesheet' href='css/style.css'>
  <link rel='stylesheet' href='./css/head.css'>
</head>

<body>

  <ul>
    <li class="etownLogo"><a href="./"><img src="./images/ETOWN_Footer_Logo.png" class="logo"></a></li>
    <li class="home"><a href="./">Home</a></li>
    <!--<li><a href="#">onclick=switchBadge('')-->
    <li><a href="https://www.etown.edu/offices/security/parkingregs.aspx" target="_blank">Regulations</a></li>
    <li><a href="./editDatabase.php">Database</a></li>
    <li><a href="#">Settings</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#about">About</a></li>
  </ul>

  <div id="AboutModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('AboutModal')">&times;</span>
      <div class="image-container">
        <p>This is a page where we can discuss the context and reason for the site.</p>
      </div>
    </div>
  </div>

  <div id="ContactModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('ContactModal')">&times;</span>
      <div class="image-container">
        <p>This is a page where we can house information about submitting bug reports.</p>
      </div>
    </div>
  </div>

  <div id="enlargedClickableArea" onclick="showAbout();"></div>
  <div id="enlargedClickableArea2" onclick="showContact();"></div>

  <script>
    var modal19 = document.getElementById("AboutModal");
    var modal20 = document.getElementById("ContactModal");

    function showAbout() { modal19.style.display = "block"; }
    function showContact() { modal20.style.display = "block"; }


    function closeModal(modalId) {
      var modal = document.getElementById(modalId);
      modal.style.display = "none";
    }

    window.onclick = function (event) {
      if (event.target == modal19) { modal19.style.display = "none"; }
      if (event.target == modal20) { modal20.style.display = "none"; }
    }
  </script>

  <style>
    #enlargedClickableArea {
      position: absolute;
      right: 3px;
      top: 0px;
      width: 120px;
      /* Adjust width and height as needed */
      height: 60px;
      /* Adjust width and height as needed */
      background-color: transparent;
      cursor: pointer;
      z-index: 999;
      /* Ensure it's above other elements */
    }

    #enlargedClickableArea2 {
      position: absolute;
      right: 123px;
      top: 0px;
      width: 120px;
      /* Adjust width and height as needed */
      height: 60px;
      /* Adjust width and height as needed */
      background-color: transparent;
      cursor: pointer;
      z-index: 999;
      /* Ensure it's above other elements */
    }
  </style>

</body>

</html>