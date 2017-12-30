
<!DOCTYPE html>
<html>
	<head>
		<title>Calculator - Syrnia Domain</title>
		<link href="../CSS/main.css" type="text/css" rel="stylesheet" />
		<link rel="icon" type="image/png" sizes="16x16" href="../Images/favicon/domain16fav.ico">
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
            	<a href="main.html"> <img alt="Syrnia Domain Logo" src="../Images/BackgroundImages/header.png"></a>
            </div>
        <div id="content">
        	<div id="topcontent">
            </div>
            <div id="middlecontent">
        		
                <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                    <fieldset>
                      <legend>Health Calculator</legend>
                      Health Level:<br />
                      <input type="text" name="healthlevel" value="1" autofocus><br />
                      Hitpoints:<br />
                      <input type="text" name="hitpoints" value="4"><br />
                      <input type="reset">
                      <input type="submit" value="Calculate">
                    </fieldset>
				</form>
                
                
<?php $htl = $_POST["healthlevel"]; ?>
<?php $hp = $_POST["hitpoints"]; ?>

<?php 
    	$hp_ = floor(($htl / 10) + $htl + 3);
        $htl_ = $htl;
    	$htl__ = ceil( (($hp - 3) / 1.1));
        $hp__ = $hp;
?>
<table>
<tr><th>Hitpoints</th><th>Health Level</th></tr>
<tr><td><?php echo $hp_;?></td><td><?php echo $htl_;?></td></tr>
<tr><td><?php echo $hp__;?></td><td><?php echo $htl__;?></td></tr>
</table>

<br />
<p>Health Level:</p> <?php echo $htl;?>
<br />
<br />
<p>Hit points:</p> <?php echo $hp; ?>
                
            </div>
            <div id="bottomcontent">
            </div>
        </div>
	</body>
</html>


