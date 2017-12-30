<!DOCTYPE html>
<html>
	<head>
		<title>Syrnia Domain</title>
		<link href="../../CSS/main.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" sizes="16x16" href="../../Images/favicon/domain16fav.ico">
	</head>
	<body id="main_body">
		<div id="header">
			<li>
				<button name="highscore" type="button" onclick="location.href='http://www.syrnia.com/index.php?page=highscore'">High Scores</button>
				<button name="calculator" type="button" onclick="location.href='http://www.tlgrounds.com/calculators.php'">Calculators</button>
				<button name="skill guide" type="button" onclick="location.href='#'">Skill Guides</button>
				<button name="updates" type="button" onclick="location.href='http://www.syrnia.com/theGame/mainincludes/forum.php?pop=yes&action=viewcat&cat=36557'">Updates?</button>
				<button name="monsters" type="button" onclick="location.href='creatures.html'">Monsters</button>
				<button name="tools" type="button" onclick="location.href='http://www.tlgrounds.com/tools.php'">Tools</button>
			</li>
		</div>
            <div id="secondheader">
            	<a href="main.html"> <img alt="Syrnia Domain Logo" src="../../Images/BackgroundImages/header.png"></a>
            </div>
        <div id="content">
        	<div id="topcontent">
            </div>
            <div id="middlecontent">
                            <?php
                	$host = 'localhost';
                    $db = 'my_zgs';
                    $user = 'zgs';
                    $pass = '';
                    $charset = 'utf8mb4';
                    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
                    $opt = [
                    	PDO::ATTR_ERRMODE			=>PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES	=>false,
                        ];
                        
					$pdo = new PDO($dsn, $user, $pass, $opt);
                    ?>
                    

                <form autocomplete="off" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                <fieldset>
                <legend>Add to Database</legend>
                	  <input type="url" id="image" name="image" placeholder="ImageURL" disabled>
                      <input type="text" id="name" name="name" placeholder="Name">
                      <select name="type" id="type" style="width:173px;">
                      			<option value="type" selected disabled>Item Type</option>
                            	<option value="weapon">Weapon</option>
                                <option value="collectors">Collectors</option>
                       </select>
                       <input type="number" id="level" name="level" placeholder="Level">
                       <input type="number" id="power" name="power" placeholder="Power">
                       <input type="number" id="aim" name="aim" placeholder="Aim">
                       <input type="number" id="armor" name="armor" placeholder="Armor">
                       <input type="number" id="npcbuy" name="npcbuy" placeholder="NPC Buy">
                       <input type="number" id="npcsell" name="npcsell" placeholder="NPC Sell">
                       <input type="text" id="obtain" name="obtain" placeholder="Obtained by" disabled>
                       <input type="text" id="use" name="use" placeholder="Usage" disabled><br />
					   <input type="checkbox" id="enchantable" name="enchantable" value="1" checked="yes"> Is enchantable?
                       <input type="checkbox" id="bound" name="bound" value="1" selected> Is bound?
                       <input type="checkbox" id="quest" name="quest" value="1" selected> Quest item?
                       <input type="checkbox" id="event" name="event" value="1" selected> Event item? <br />
                	   <input type="submit" value="Add to Database.">
                </fieldset>
                </form>   
                           
                           <button onlick="writetodatabase();">Test Database Write</button><br />
                           
                           <script>
                           		function writetodatabase()
                                {
                                
                                }
                           </script>
                           
					<!--Php Starts here-->
                    
                    <?php
                    	$addimage = $_POST['image']; 
                        $addname = $_POST['name'];
                        $addtype = $_POST['type'];
                    	$addlevel = $_POST['level'];
                        $addpower = $_POST['power'];
                        $addaim = $_POST['aim'];
                        $addarmor = $_POST['armor'];
                        $addnpcbuy = $_POST['npcbuy'];
                        $addnpcsell = $_POST['npcsell'];
                        $addobtain = $_POST['obtain'];
                        $adduse = $_POST['use'];
                        $addenchantable = $_POST['enchantable'];
                        $addbound = $_POST['bound'];
                        $addquest = $_POST['quest'];
                        $addevent = $_POST['event'];
                    
                    	echo "Image: ".$addimage."<br />";
                        echo "Name: ".$addname."<br />";
                        echo "Type: ".$addtype."<br />";
                        echo "Level: ".$addlevel."<br />";
                        echo "Aim: ".$addaim."<br />";
                        echo "Power: ".$addpower."<br />";
                        echo "Armor: ".$addarmor."<br />";
                        echo "NPC Buy: ".$addnpcbuy."<br />";
                        echo "NPC Sell: ".$addnpcsell."<br />";
                        echo "Obtain: ".$addobtain."<br />";
                        echo "Use: ".$adduse."<br />";
                        echo "Enchantable: ".$addenchantable."<br />";
                        echo "Bound: ".$addbound."<br />";
                        echo "Quest: ".$addquest."<br />";
                        echo "Event: ".$addevent."<br />";
                        
                        $name = "George Test";
                        
                        if ($addevent == 1){
                        
                		$createnewentry = "INSERT INTO myTest (ImageURL, Name, Type, Level, Power, Aim, Armor, NPCBuy, NPCSell, Obtain, ActionUse, isEnchantable, isBound, isQuest, isEvent)
                    	VALUES('null', 'Sword', 'weapon', '7', '5', '5', 'null', '30', '300', 'obtain', 'use', '0', '1', '1', '1')";
                        
                        
                        
                        
						//$additem = "INSERT INTO myTest ('ImageURL', 'Name', 'Type', 'Level', 'Power', 'Aim', 'Armor', 'NPCBuy', 'NPCSell', 'Obtain', 'ActionUse', 'isEnchantable', 'isBound', 'isQuest', 'isEvent')
    					//VALUES('image', 'name', 'type', 'level', 'power', 'aim', 'armor', 'buy', 'sell', 'obtain', 'use', '1', '0', '0', '0)";

                        //$additem = "INSERT INTO myTest ('Name')";
						//$pdo->prepare($additem)->execute([$name]);                        
                        
                        //$additem = "INSERT INTO myTest ('ImageURL', 'Name', 'Type', 'Level', 'Power', 'Aim', 'Armor', 'NPCBuy', 'NPCSell', 'Obtain', 'ActionUse', 'isEnchantable', 'isBound', 'isQuest', 'isEvent";
						//$pdo->prepare($sql)->execute([$name, $id]);
                        //$addgeorge = "INSERT INTO myTest ('Name') VALUES ('Georgey')";
                        //$pdo->query("INSERT INTO myTest ('Name') VALUES ('Georgey')");
                        
                        echo "Variable add event is equal to one. Database insert test.";
                        }
                        
                        
                        
                    ?>
                           
                           
            </div>
            <div id="bottomcontent">
            </div>
        </div>
	</body>
    
    <script>
		if (new Date().getHours() > 18)
        {
        	document.body.style.backgroundImage = "url('../../Images/BackgroundImages/homenight.png')";
        	document.body.style.backgroundRepeat = "no-repeat";
            document.body.style.backgroundPosition = "center";
            document.body.style.backgroundSize = "cover";
            document.body.style.backgroundAttachment = "fixed";
        }
    </script>

</html>