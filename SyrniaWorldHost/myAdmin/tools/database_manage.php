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
                	  <input type="url" id="image" name="image" value="ImageURL" onfocus="this.value = this.value=='ImageURL'?'':this.value;" onblur="this.value = this.value==''?'ImageURL':this.value;" disabled>
                      <input type="text" id="name" name="name" value="Name" onfocus="this.value = this.value=='Name'?'':this.value;" onblur="this.value = this.value==''?'Name':this.value;">
                      <select name="type" id="type" style="width:173px;">
                      			<option value="type" selected disabled>Item Type</option>
                            	<option value="weapon">Weapon</option>
                                <option value="collectors">Collectors</option>
                       </select>
                       <input type="number" id="level" name="level" placeholder="Level" onfocus="this.value = this.value=='Level'?'':this.value;" onblur="this.value = this.value==''?'Level':this.value;">
                       <input type="number" id="power" name="power" placeholder="Power" onfocus="this.value = this.value=='Power'?'':this.value;" onblur="this.value = this.value==''?'Power':this.value;">
                       <input type="number" id="aim" name="aim" placeholder="Aim" onfocus="this.value = this.value=='Aim'?'':this.value;" onblur="this.value = this.value==''?'Aim':this.value;">
                       <input type="number" id="armor" name="armor" placeholder="Armor" onfocus="this.value = this.value=='Armor'?'':this.value;" onblur="this.value = this.value==''?'Armor':this.value;">
                       <input type="number" id="npcbuy" name="npcbuy" placeholder="NPC Buy" onfocus="this.value = this.value=='NPC Buy'?'':this.value;" onblur="this.value = this.value==''?'NPC Buy':this.value;">
                       <input type="number" id="npcsell" name="npcsell" placeholder="NPC Sell" onfocus="this.value = this.value=='NPC Sell'?'':this.value;" onblur="this.value = this.value==''?'NPC Sell':this.value;">
                       <input type="text" id="obtain" name="obtain" value="Obtained by" onfocus="this.value = this.value=='Obtained by'?'':this.value;" onblur="this.value = this.value==''?'Obtained by':this.value;" disabled>
                       <input type="text" id="use" name="use" value="Usage" onfocus="this.value = this.value=='Usage'?'':this.value;" onblur="this.value = this.value==''?'Usage':this.value;" disabled><br />
					   <input type="checkbox" id="enchantable" name="enchantable" value="enchantable" checked="yes"> Is enchantable?
                       <input type="checkbox" id="bound" name="bound" value="bound" selected> Is bound?
                       <input type="checkbox" id="quest" name="quest" value="quest" selected> Quest item?
                       <input type="checkbox" id="event" name="event" value="event" selected> Event item? <br />
                	   <input type="submit" value="Add to Database.">
                </fieldset>
                </form>   
                
                
                
                <form autocomplete="off" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                <fieldset>
                <legend>Modify Database</legend>
                <select id="current" name="current" style="width:173px;">
                <?php
                
                    $populate = 'SELECT * from myTest';
                    foreach( $pdo->query($populate) as $row)
                    {
                    	echo "<option value='". $row['Name']."'>". $row['Name']."</option>";
                    }
                
                
                ?>
                
                </select>
                	  <input type="url" id="cimage" name="cimage" value="ImageURL" onfocus="this.value = this.value=='ImageURL'?'':this.value;" onblur="this.value = this.value==''?'ImageURL':this.value;" disabled>
                      <input type="text" id="cname" name="cname" value="Name" onfocus="this.value = this.value=='Name'?'':this.value;" onblur="this.value = this.value==''?'Name':this.value;">
                      <select name="ctype" id="ctype" style="width:173px;">
                      			<option value="type" selected disabled>Item Type</option>
                            	<option value="weapon">Weapon</option>
                                <option value="collectors">Collectors</option>
                       </select>
                       <input type="number" id="clevel" name="clevel" placeholder="Level" onfocus="this.value = this.value=='Level'?'':this.value;" onblur="this.value = this.value==''?'Level':this.value;">
                       <input type="number" id="cpower" name="cpower" placeholder="Power" onfocus="this.value = this.value=='Power'?'':this.value;" onblur="this.value = this.value==''?'Power':this.value;">
                       <input type="number" id="caim" name="caim" placeholder="Aim" onfocus="this.value = this.value=='Aim'?'':this.value;" onblur="this.value = this.value==''?'Aim':this.value;">
                       <input type="number" id="carmor" name="carmor" placeholder="Armor" onfocus="this.value = this.value=='Armor'?'':this.value;" onblur="this.value = this.value==''?'Armor':this.value;">
                       <input type="number" id="cnpcbuy" name="cnpcbuy" placeholder="NPC Buy" onfocus="this.value = this.value=='NPC Buy'?'':this.value;" onblur="this.value = this.value==''?'NPC Buy':this.value;">
                       <input type="number" id="cnpcsell" name="cnpcsell" placeholder="NPC Sell" onfocus="this.value = this.value=='NPC Sell'?'':this.value;" onblur="this.value = this.value==''?'NPC Sell':this.value;">
                       <input type="text" id="cobtain" name="cobtain" value="Obtained by" onfocus="this.value = this.value=='Obtained by'?'':this.value;" onblur="this.value = this.value==''?'Obtained by':this.value;" disabled>
                       <input type="text" id="cuse" name="cuse" value="Usage" onfocus="this.value = this.value=='Usage'?'':this.value;" onblur="this.value = this.value==''?'Usage':this.value;" disabled><br />
					   <input type="checkbox" id="cenchantable" name="cenchantable" value="enchantable"> Is enchantable?
                       <input type="checkbox" id="cbound" name="cbound" value="bound" selected> Is bound?
                       <input type="checkbox" id="cquest" name="cquest" value="quest" selected> Quest item?
                       <input type="checkbox" id="cevent" name="cevent" value="event" selected> Event item? <br />
                	   <input type="submit" value="Modify Database.">
                </fieldset>
                </form>  
                
                
                
                <form autocomplete="off" action=<?php echo htmlspecialchars($_SERVER["../tools/deletefromdatabase.php"]); ?> method="post">
                <fieldset>
                <legend>Delete from Database</legend>
                <select id="remove" name="remove" style="width:173px;">
                <?php
                    $populate = 'SELECT Name from myTest';
                    foreach( $pdo->query($populate) as $row)
                    {
                    	echo "<option value='". $row['Name']."'>". $row['Name']."</option>";
                    }
                ?>
                
                </select>
                	   <input type="submit" value="Remove from Database.">
                </fieldset>
                </form>  
                
                
                
                
                <!--Php starts here-->
                	<!--Get and Post call name attribute, not the id attribute-->
                	<!--//$var = $POST['var']-->
                <? 
                	//php does not support alert boxes, function to generate javascript code to call alert box
                	function phpAlert($notification){
                    	echo "<script type='text/javascript'>alert'". $notification ."')</script>";
                    }
                	// called by phpAlert( "Message to be sent"); 
                
                	$nimage = $_POST['image'];
                    $nname = $_POST['name'];
                	$ntype = $_POST['type'];
                    $nlevel = $_POST['level'];
                    $npower = $_POST['power'];
                    $naim = $_POST['aim'];
                    $narmor = $_POST['armor'];
                    $nnpcbuy = $_POST['npcbuy'];
                    $nnpcsell = $_POST['npcsell'];
                    $nobtain = $_POST['obtain'];
                    $nuse = $_POST['use'];
                    $nenchantable = $_POST['enchantable'];
                    $nbound = $_POST['bound'];
                    $nquest = $_POST['quest'];
                    $nevent = $_POST['event'];
                
                	$createnewentry = "INSERT INTO myTest (ImageURL, Name, Type, Level, Power, Aim, Armor, NPCBuy, NPCSell, Obtain, ActionUse, isEnchantable, isBound, isQuest, isEvent)
                    VALUES('nimage', 'nname', 'ntype', 'nlevel', 'npower', 'naim', 'narmor', 'nnpcbuy', 'nnpcsell', 'nobtain', 'nuse', 'nenchantable', 'nbound', 'nquest', 'nevent')";
                    if ($pdo->query($createnewentry)){
                    	phpAlert( $nname ." added sucessfully!"); 
                    }else {
                    	phpAlert( "Error: Failed to connect."); 
                    }
                	//Above used to add new items
                    //below used to modify items
                    $current = $_POST['current'];
                	$cimage = $_POST['cimage'];
                    $cname = $_POST['cname'];
                	$ctype = $_POST['ctype'];
                    $clevel = $_POST['clevel'];
                    $cpower = $_POST['cpower'];
                    $caim = $_POST['caim'];
                    $carmor = $_POST['carmor'];
                    $cnpcbuy = $_POST['cnpcbuy'];
                    $cnpcsell = $_POST['cnpcsell'];
                    $cobtain = $_POST['cobtain'];
                    $cuse = $_POST['cuse'];
                    $cenchantable = $_POST['cenchantable'];
                    $cbound = $_POST['cbound'];
                    $cquest = $_POST['cquest'];
                    $cevent = $_POST['cevent'];
                	                
                	$updateentry = "UPDATE myTest (ImageURL, Name, Type, Level, Power, Aim, Armor, NPCBuy, NPCSell, Obtain, ActionUse, isEnchantable, isBound, isQuest, isEvent)
                    VALUES('nimage', 'nname', 'ntype', 'nlevel', 'npower', 'naim', 'narmor', 'nnpcbuy', 'nnpcsell', 'nobtain', 'nuse', 'nenchantable', 'nbound', 'nquest', 'nevent')
                    WHERE Name = $current";
                	//Above used to modify
                    //Below used to delete
                    
                    $deleteMe = $_POST['remove'];
                    
                    $deleteentry = "DELETE FROM myTest
                    WHERE Name = $deleteMe";
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