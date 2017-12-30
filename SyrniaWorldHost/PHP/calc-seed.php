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
                      <legend>Seed Calculator</legend>
                      Radish/Beet<input type="text" name="radbee" value="0"><br />
                      Carrot<input type="text" name="car" value="0"><br />
                      Cabbage<input type="text" name="cab" value="0"><br />
                      Onion<input type="text" name="oni" value="0"><br />
                      Grain<input type="text" name="gra" value="0"><br />
                      Tomato<input type="text" name="tom" value="0"><br />
                      Corn<input type="text" name="cor" value="0"><br />
                      Strawberry<input type="text" name="str" value="0"><br />
                      Green Pepper<input type="text" name="gre" value="0"><br />
                      <input type="reset">
                      <input type="submit" value="Calculate">
                    </fieldset>
				</form>
                

<?php
$radbee = $_POST["radbee"];
$car = $_POST["car"];
$cab = $_POST["cab"];
$oni = $_POST["oni"];
$gra = $_POST["gra"];
$tom = $_POST["tom"];
$cor = $_POST["cor"];
$str = $_POST["str"];
$gre = $_POST["gre"];
?>


<?php 
	$totalxp = (1*$radbee)+(2*$car)+(3*$cab)+(5*$oni)+(7*$gra)+(7*$tom)+(13*$cor)+(17*$str)+(19*$gre);
    $totalgp = $totalxp * 2;
?>


	<p> Your seeds, when planted, grant a total of <?php echo $totalxp; ?> experience.</p>
    <br />
    <p> When valued at 2 gold per experience, your seeds would sell for <?php echo $totalgp; ?> gold.</p>

                
            </div>
            <div id="bottomcontent">
            </div>
        </div>
	</body>
</html>


