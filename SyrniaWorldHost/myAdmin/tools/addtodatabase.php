<?php
    // Stick this in its own file (like db.php, connection.php,..)
    try {
        $host = '192.168.10.10';    // 'localhost'
        $db = 'king1104';           // 'my_zgs'
        $user = 'homestead';        // 'zgs'
        $pass = 'secret';           // ''
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        $opt = [
            PDO::ATTR_ERRMODE           =>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES  =>false,
        ];

        $pdo = new PDO($dsn, $user, $pass, $opt);

        pre('Database connection established');
    } catch(PDOException $ex) {
        pre('Unable to connect to database');
    }

    if (count($_POST) > 0) {
        // Sanitize how you wish
        $image_url      = isset($_POST['image'])    && !empty($_POST['image'])    ? $_POST['image']      : null;
        $name           = isset($_POST['name'])     && !empty($_POST['name'])     ? $_POST['name']       : 'Sword';
        $type           = isset($_POST['type'])     && !empty($_POST['type'])     ? $_POST['type']       : 'weapon';
        $level          = isset($_POST['level'])    && !empty($_POST['level'])    ? $_POST['level']      : 7;
        $power          = isset($_POST['power'])    && !empty($_POST['power'])    ? $_POST['power']      : 5;
        $aim            = isset($_POST['aim'])      && !empty($_POST['aim'])      ? $_POST['aim']        : 5;
        $armor          = isset($_POST['armor'])    && !empty($_POST['armor'])    ? $_POST['armor']      : null; // 'armour', you cretins
        $npc_buy        = isset($_POST['npcbuy'])   && !empty($_POST['npcbuy'])   ? $_POST['npcbuy']     : 30;
        $npc_sell       = isset($_POST['npcsell'])  && !empty($_POST['npcsell'])  ? $_POST['npcsell']    : 300;
        $obtain         = isset($_POST['obtain'])   && !empty($_POST['obtain'])   ? $_POST['obtain']     : 'obtain';
        $action_use     = isset($_POST['use'])      && !empty($_POST['use'])      ? $_POST['use']        : 'use';
        $is_enchantable = isset($_POST['enchantable'])  && !empty($_POST['enchantable'])? $_POST['enchantable'] : 0;
        $is_bound       = isset($_POST['bound'])    && !empty($_POST['bound'])    ? $_POST['bound']      : 1;
        $is_quest       = isset($_POST['quest'])    && !empty($_POST['quest'])    ? $_POST['quest']      : 1;
        $is_event       = isset($_POST['event'])    && !empty($_POST['event'])    ? $_POST['event']      : 1;

        // Run validation logic here.
        $valid = true;

        if (!$valid) return false;

        saveToDB($pdo, $image_url, $name, $type, $level, $power, $aim, $armor, $npc_buy, $npc_sell, $obtain, $action_use, $is_enchantable, $is_bound, $is_quest, $is_event);
    }

    // Helper
    function pre($array) {
        echo '<pre style="background: #FF5722;display: inline-block;padding: 5px;margin: 5px;color: white;border-radius: 2px;font-size: 12px;">';
        print_r($array);
        echo '</pre>';
    }

    function saveToDB($pdo, $image_url, $name, $type, $level, $power, $aim, $armor, $npc_buy, $npc_sell, $obtain, $action_use, $is_enchantable, $is_bound, $is_quest, $is_event) {

        $sql = 'INSERT into myTest (ImageURL, Name, Type, Level, Power, Aim, Armor, NPCBuy, NPCSell, Obtain, ActionUse, isEnchantable, isBound, isQuest, isEvent)
                VALUES (:image_url, :name, :type, :level, :power, :aim, :armor, :npc_buy, :npc_sell, :obtain, :action_use, :is_enchantable, :is_bound, :is_quest, :is_event)';

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':image_url', $image_url);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':level', $level);
        $stmt->bindParam(':power', $power);
        $stmt->bindParam(':aim', $aim);
        $stmt->bindParam(':armor', $armor);
        $stmt->bindParam(':npc_buy', $npc_buy);
        $stmt->bindParam(':npc_sell', $npc_sell);
        $stmt->bindParam(':obtain', $obtain);
        $stmt->bindParam(':action_use', $action_use);
        $stmt->bindParam(':is_enchantable', $is_enchantable);
        $stmt->bindParam(':is_bound', $is_bound);
        $stmt->bindParam(':is_quest', $is_quest);
        $stmt->bindParam(':is_event', $is_event);

        if($stmt->execute()) {
            pre('Successfully saved data to DB');
            return true;
        } else {
            pre('Failed to save data to DB.');
            return false;
        }
    }
?>
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
                <?php if (count($_POST) > 0) pre($_POST); ?>
            </div>
            <div id="bottomcontent"></div>
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