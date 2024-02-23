<?php


$fullUrl = $url . "data_src/api/badgeType/read.php";

$vars = ["APIKEY" => $api_key];
$web_string = DatabaseAPIConnection::get($fullUrl, $vars);

$badgeTypes = json_decode($web_string);
echo "<div class=\"dayTime\">";
echo "<div class=\"userSelect\">";
echo "<select class=\"dropdown\" id=\"badgeType\" onchange=\"showParking()\"\"><option id = 0>Choose an option</option>";
foreach ($badgeTypes as $badgeType) {
    echo "<option value=\"" . $badgeType->name . "\" id=\"" . $badgeType->typeID . "\">" . $badgeType->name . "</option>";
}
echo "</select>";
?>
<LINK rel='stylesheet' href='css/dropdown.css'>

<select class="dropdown" id="day" onchange="showParking()">
    <option id="0">Please Choose a Day</option>
    <option id="sun" value="Sunday">Sunday</option>
    <option id="mon" value="Monday">Monday</option>
    <option id="tue" value="Tuesday">Tuesday</option>
    <option id="wed" value="Wednesday">Wednesday</option>
    <option id="thu" value="Thursday">Thursday</option>
    <option id="fri" value="Friday">Friday</option>
    <option id="sat" value="Saturday">Saturday</option>
</select>

<form id="timeForm">
    <label for="appt" class="timeLabel">Select a time:</label>
    <input type="time" id="appt" name="appt" onchange="showParking()" class="dropdown">
</form>

<input type="radio" id="noneEV" name="EV" checked onclick="showEV(true);" class="ev">
<label for="noneEV" class="ev">none EV</label>

<input type="radio" id="EV" name="EV" onclick="showEV(false);" class="ev">
<label for="EV" class="ev">EV</label>

<select class="dropdown" id="building" onchange="showParking()">
    <option id="0">Select a Building</option>
    <option id="ba" value="Building1">Brossman Commons (BSC)</option>
    <option id="bb" value="Building2">Bowers Center</option>
    <option id="bc" value="Building3">Masters Center (Includes\n Esbenshade, Lyet, and Musser)</option>
    <option id="bd" value="Building4">Hoover</option>
    <option id="be" value="Building5">Nicarry</option>
    <option id="bf" value="Building6">Zug</option>
    <option id="bg" value="Building7">Alpha Hall</option>
    <option id="bh" value="Building8">Admissions Office</option>
    <option id="bi" value="Building9">Campus Security</option>
    <option id="bj" value="Building10">Bowers Writers House</option>
    <option id="bk" value="Building11">Thompson Gym</option>
    <option id="bl" value="Building12">Leffler Chapel</option>
</select>

<select class="dropdown" id="residence" onchange="showParking()">
    <option id="0">Select a Residence Hall</option>
    <option id="ra" value="Schlosser">Schlosser</option>
    <option id="rb" value="Royer">Royer</option>
    <option id="rc" value="Myer">Myer</option>
    <option id="rd" value="Ober">Ober</option>
    <option id="re" value="Brinser">Brinser</option>
    <option id="rf" value="Founders">Founders</option>
    <option id="rg" value="Hackman">Hackman Apartments</option>
    <option id="rh" value="Quads">Quads</option>
</select>

<br>
<!-- Add onclick to display EV charging station-->
<img src="images/EVPinNew.png" id="evpin1"
    style="z-index:200; position: absolute; left: 415px; top: 238px; display:none;">

<img src="images/EVPinNew.png" id="evpin2"
    style="z-index:200; position: absolute; left: 400px; top: 238px; display:none;">

<img src="images/EVPinNew.png" id="evpin3"
    style="z-index:200; position: absolute; left: 330px; top: 428px; display:none;">

<img src="images/EVPinNew.png" id="evpin4"
    style="z-index:200; position: absolute; left: 555px; top: 508px; display:none;">
<script>

    function showEV(imgOn) {
        if (imgOn) {
            console.log("off " + imgOn);
            document.getElementById("evpin1").style.display = 'none';
            document.getElementById("evpin2").style.display = 'none';
            document.getElementById("evpin3").style.display = 'none';
            document.getElementById("evpin4").style.display = 'none';
            //imgOn=false;
        }
        else {
            console.log("on " + imgOn);
            document.getElementById("evpin1").style.display = 'block';
            document.getElementById("evpin2").style.display = 'block';
            document.getElementById("evpin3").style.display = 'block';
            document.getElementById("evpin4").style.display = 'block';
            //imgOn=true;
        }
    }
</script>
<div>