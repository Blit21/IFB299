<!DOCTYPE html>
<html>

<head>


<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #789;
    position: fixed;
    height: 97%;
    overflow: auto;
    border: 1px solid #000;
}

li a {
    display: block;
    color: #000;
    text-decoration: none;
	padding-top: 20px;
	padding-bottom: 20px;
}

li a:hover {
    background-color: #784;
    color: white;
}

li {
    text-align:center;
    border-bottom: 1px solid #000;
    display: block;
    color: #000;
    text-decoration: none;
	width: 100;
}

li:last-child {
    border-bottom: none;
}

.NavButtons{
	height:58px;

}

.infobars{
	padding-top: 20px;
	padding-bottom: 20px;
    background-color: #789;
}

.ProfilePicture{
	width:80px;
	height:75px;
	border:1px solid black;
}

.InfoColumn{
    float:left;
    margin-left: 140px;
    width:550px;
}

.ContactBox{
    height: 175px;
    min-width:500px;
    max-width:600px;
}

.ContactTextBox{
    float:left;
    text-align: left;
    padding-left:10px;
    width:400px;
    border:1px solid black;
    min-height: 100px;
}

.info{
    line-height: 140%;
}

.AdvertColumn{
    float: left;
    margin-left: 20px;
    max-width: 150px;
}

.picture{
    float:left;
    width:140px;
    height:175px;
    border:1px solid black;
}



</style>
</head>

<body bgcolor="#E6E6FA">


    <div class="Navigation">
        <ul>
            <li class="AllNav" style="padding:20px 20px;"><img   src="davidattenboroughface.jpg" class="ProfilePicture" ></li>
            <li class="AllNav infobars"> Dave/Admin:</li>
            <li class="AllNav" style="height:20px;background-color:#787"></li>

            <li class="AllNav NavButtons"><a href="file:///C:/Users/Joshua/Documents/Uni/ifb299/Website%20shit/Login%20Page.html">Sign Out</a></li>
            <li class="AllNav NavButtons"><a href="file:///C:/Users/Joshua/Documents/Uni/ifb299/Website%20shit/Daves%20Tenant%20Page.html">Tenants</a></li>
            <li class="AllNav NavButtons"><a href="file:///C:/Users/Joshua/Documents/Uni/ifb299/Website%20shit/Daves%20Page.html">Properties</a></li>
            <li class="AllNav NavButtons"><a href="file:///C:/Users/Joshua/Documents/Uni/ifb299/Website%20shit/Daves%20Contact%20Page.html">Contacts</a></li>

            <li class="AllNav" style="height:20px;background-color:#787"></li>
            <li >
                    <p style="text-align:left; padding-left:10px;"> 	 email:</p>
                    <p style="text-align:left; padding-left:10px;"> 	 address:</p>
            </li>
        </ul>
	</div>

    <div style="min-width:1000px;">
        <div class="InfoColumn">
                <h2 style="margin-left:20px;">Estate Management</h2>
                <table class="ContactBox" >
                    <tr>
                        <td>
                            <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                        </td>
                        <td>
                            <div class="ContactTextBox" >
                                <h3><?php
                                $severname = "localhost";
                                $username = "id1609331_dave1";
                                $password = "DaveProperties";
                                $dbname = "id1609331_houses";
                                $conn = new mysqli($severname, $username, $password, $dbname);
                                if ($conn->connect_error){
                                  die("Connect failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT Name FROM staffinformation";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while($row = $result->fetch_assoc()){
                                    echo  $row["Name"];
                                  }
                                }else{
                                  echo "0 results";
                                }

                                $conn->close();
                                ?></h3>
                                <p class="info">Position: Real Estate Agent<br>
                                Works at: Baker Property International Melbourne <br>
                                Email: jake.cassimatis@bakerproperty.com<br>
                                Cell phone #: 0487 672 201<br>
                                House #: N/A <br>Income: $48,000</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                        </td>
                        <td>
                            <div class="ContactTextBox" >
                                <h3> Michael Wing</h3>
                                <p class="info">Position:QLD Business Development Manager<br>
                                Works at: Baker Property Head Office<br>
                                Email: m.wing@bakerproperty.com<br>
                                Cell phone #: 0496 872 513<br>
                                House #: 02 7642 9855<br>Income: $75,000</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                        </td>
                        <td>
                            <div class="ContactTextBox" >
                                <h3> Abby Weber</h3>
                                <p class="info">Position: Real Estate Agent<br>
                                Works at: Baker Property Carina<br>
                                Email: abby.weber@bakerproperty.com<br>
                                Cell phone #: 0473 619 573<br>
                                House #: N/A <br>Income: $48,000 </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                        </td>
                        <td>
                            <div class="ContactTextBox" >
                                <h3> Amy Timber</h3>
                                <p class="info">Position: Property Manager<br>
                                Works at: Baker Property Newtown<br>
                                Email: amy.wing@bakerproperty.com<br>
                                Cell phone #: 0421 528 117<br>
                                House #: N/A <br>Income: $50,000</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                        </td>
                        <td>
                            <div class="ContactTextBox" >
                                <h3> Beavis Cornholio</h3>
                                <p class="info">Position: Real Estate Agent<br>
                                Works at: Baker Property Avalon<br>
                                Email: : beavis.cornholio@bakerproperty.com<br>
                                Cell phone #: 0437 671 572<br>
                                House #: N/A <br>Income: $48,000</p>
                            </div>
                        </td>
                    </tr>
                </table>

          <!--*******************************************************************************************-->
                <h2 style="margin-left:20px;">Property Owners</h2>
                <table class="ContactBox" >
                <tr>
                    <td>
                        <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                    </td>
                    <td>
                        <div class="ContactTextBox" >
                                <h3> Brace Blesing</h3>
                                <p class="info">Property owned: #1 <br>Cellphone #: 0462 107 495 <br> Years in Leasing properties: 5 </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                    </td>
                    <td>
                        <div class="ContactTextBox" >
                                <h3> Jordan Doorly</h3>
                                <p class="info">Property owned: #2 <br>Cellphone #: 0467 428 233 <br> Years in Leasing properties: 2 </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                    </td>
                    <td>
                        <div class="ContactTextBox" >
                                <h3> Amy Matthaei</h3>
                                <p class="info">Property owned: #3 <br>Cellphone #: 0456 779 760 <br> Years in Leasing properties: 10</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                    </td>
                    <td>
                        <div class="ContactTextBox" >
                                <h3> Oliver Moowattin</h3>
                                <p class="info">Property owned: #4 <br>Cellphone #: 0487 247 575 <br> Years in Leasing properties: 6</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                    </td>
                    <td>
                        <div class="ContactTextBox" >
                                <h3> Aiden McMinn</h3>
                                <p class="info">Property owned: #5 <br>Cellphone #:  0453 973 687 <br> Years in Leasing properties: 25</p>
                        </div>
                    </td>
                </tr>
                </table>


                <h2 style="margin-left:20px;">System Admin</h2>
                <table class="ContactBox" >
                    <tr>
                    <td>
                        <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                    </td>
                    <td>
                        <div class="ContactTextBox" >

                                <h3><?php
                                $severname = "localhost";
                                $username = "id1609331_dave1";
                                $password = "DaveProperties";
                                $dbname = "id1609331_houses";
                                $conn = new mysqli($severname, $username, $password, $dbname);
                                if ($conn->connect_error){
                                  die("Connect failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT AdminID, Name, PhoneNum FROM administration";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while($row = $result->fetch_assoc()){
                                    echo  $row["Name"];
                                  }
                                }else{
                                  echo "0 results";
                                }

                                $conn->close();
                                ?>
                                </h3>

                                <p class="info"><?php
                                $severname = "localhost";
                                $username = "id1609331_dave1";
                                $password = "DaveProperties";
                                $dbname = "id1609331_houses";
                                $conn = new mysqli($severname, $username, $password, $dbname);
                                if ($conn->connect_error){
                                  die("Connect failed: " . $conn->connect_error);
                                }
                                $sql = "SELECT PhoneNum FROM administration";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while($row = $result->fetch_assoc()){
                                    echo  "CellPhone #: ". $row["PhoneNum"];
                                  }
                                }else{
                                  echo "0 results";
                                }

                                $conn->close();
                                ?></p>
                        </div>
                    </td>
                </tr>
                </table>

                <h2 style="margin-left:20px;">Site Owner</h2>
                <table class="ContactBox" >
                    <tr>
                        <td>
                            <img class="picture" src="morganfreemanface.jpg" alt="first staffmember">
                        </td>
                        <td>
                            <div class="ContactTextBox" >
                                    <h3> Davo</h3>
                                    <p class="info">CEO of Baker Property <br>Email: david@bakerproperty.com</p>
                            </div>
                        </td>
                    </tr>
                </table>


        </div>

        <div class ="AdvertColumn" style="border:1px solid black;">
                <h3 style="text-align:center;">Ads</h3>
                <img src="advertisement%20images.jpg"alt="advert image" style="width:150px;height:115px">
                <img src="advertisement%20images.jpg"alt="advert image" style="width:150px;height:115px">
                <img src="advertisement%20images.jpg"alt="advert image" style="width:150px;height:115px">
        </div>
    </div>

</body>

</html>

<!--Joshua Moratalla "table the contact info"-->
