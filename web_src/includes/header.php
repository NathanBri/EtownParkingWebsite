<!DOCTYPE html>
<html>
<body>

<title>Etown Parking Website</title>

<ul>
  <li class="etownLogo"><a href="../web_src"><img src="images/ETOWN_Footer_Logo.png" class="logo"></a></li>
  <li class="home"><a href="../web_src">Home</a></li>
  <!--<li><a href="#">onclick=switchBadge('')-->
  <li><a href="https://www.etown.edu/offices/security/parkingregs.aspx" target="_blank">Existing parking rule website</a></li>
  <li><a href="#">Edit database</a></li>
  <li><a href="#">Setting</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="#">About</a></li>
</ul>

</body>
</html>

<style>
h1, .logo{
    background-color:  #004B98;
}
.logo{
    width: 150px;
     
}

.etownLogo{
  margin-right: 413px;

}

.home{
  margin-left: 0px;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #004B98;
  height: 90px;
  display: flex;
}

li {
  float: left;
  font-size: 26px;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 30px 15px 0px;
  text-decoration: none;
  height: 80px;
}

.etownLogo a{
  padding-top: 15px;
  padding-bottom: 10px;
  padding-left: 20px;
  padding-right: 10px;
}
.etownLogo a:hover{
  background-color: #004B98;
}

li a:hover {
  background-color: #3DB5E6;
  text-decoration: underline;
  text-decoration-color: black;
  color: #E1261C;
  text-underline-offset: 0.5em;
  
}

li {
  border-right: 2px solid #0A2240;
  height: 90px;
}

li:last-child {
  border-right: none;
}
li:first-child {
  border-right: none;

}

body {
   margin: 0;
}
</style>


