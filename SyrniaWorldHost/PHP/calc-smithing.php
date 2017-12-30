<!DOCTYPE html>
<html>
	<head>
		<title>Smithing Calculator - Syrnia Domain</title>
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
				<button name="monsters" type="button" onclick="location.href='../HTMLFiles/creatures.html'">Monsters</button>
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
                      <legend>Smithing Calculator</legend>
                      <p>Level:</p>
                      <input type="text" name="smithinglevel"><br />
                      <p>Experience:</p>
                      <input type="text" name="smithingxp" value="0">
                      
                      <input type="submit" value="Calculate">
                    </fieldset>
				</form>

<?php
$level = $_POST["smithinglevel"];
$xp = $_POST["smithingxp"];

$calclevel = floor(pow($xp, 1/3.507655116));
$calcexp = ceil(exp( 3.507655116 * log($level+1) ));


$calcexp2 = ceil(exp(log(10000000) * ( log($level) / log(99) )));
?>


	<p>For level <?php echo $level; ?>, you will need a minimum of <?php echo $calcexp2; ?> experience.</p>
    <br />
    <p>At <?php echo $xp; ?> experience, you will be level <?php echo $calclevel; ?>.</p>
    
    <?php 
    	$bcauldron = 4;
    ?>
                
            </div>
            <div id="bottomcontent">
            </div>
        </div>
	</body>
</html>

