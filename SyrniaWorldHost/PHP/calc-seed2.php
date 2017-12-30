<!DOCTYPE html>
<html>
	<head>
		<title>Seed Calculator - Syrnia Domain</title>
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
                      <input type="text" id="radbee" name="radbee" value="<?php echo isset($_POST['radbee']) ? $_POST['radbee'] : 'Radish/Beet' ?>" onfocus="this.value = this.value=='Radish/Beet'?'':this.value;" onblur="this.value = this.value==''?'Radish/Beet':this.value;">
                      <input type="text" id="gre" name="gre" value="<?php echo isset($_POST['gre']) ? $_POST['gre'] : 'Green Pepper' ?>" onfocus="this.value = this.value=='Green Pepper'?'':this.value;" onblur="this.value = this.value==''?'Green Pepper':this.value;">
                      <input type="text" id="spi" name="spi" value="<?php echo isset($_POST['spi']) ? $_POST['spi'] : 'Spinach' ?>" onfocus="this.value = this.value=='Spinach'?'':this.value;" onblur="this.value = this.value==''?'Spinach':this.value;"><br />
                      <input type="text" id="car" name="car" value="<?php echo isset($_POST['car']) ? $_POST['car'] : 'Carrot' ?>" onfocus="this.value = this.value=='Carrot'?'':this.value;" onblur="this.value = this.value==''?'Carrot':this.value;">
                      <input type="text" id="egg" name="egg" value="<?php echo isset($_POST['egg']) ? $_POST['egg'] : 'Eggplant' ?>" onfocus="this.value = this.value=='Eggplant'?'':this.value;" onblur="this.value = this.value==''?'Eggplant':this.value;">
                      <input type="text" id="cuc" name="cuc" value="<?php echo isset($_POST['cuc']) ? $_POST['cuc'] : 'Cucumber' ?>" onfocus="this.value = this.value=='Cucumber'?'':this.value;" onblur="this.value = this.value==''?'Cucumber':this.value;"><br />
                      <input type="text" id="cab" name="cab" value="<?php echo isset($_POST['cab']) ? $_POST['cab'] : 'Cabbage' ?>" onfocus="this.value = this.value=='Cabbage'?'':this.value;" onblur="this.value = this.value==''?'Cabbage':this.value;">
                      <input type="text" id="pum" name="pum" value="<?php echo isset($_POST['pum']) ? $_POST['pum'] : 'Pumpkin' ?>" onfocus="this.value = this.value=='Pumpkin'?'':this.value;" onblur="this.value = this.value==''?'Pumpkin':this.value;">
                      <input type="text" id="app" name="app" value="<?php echo isset($_POST['app']) ? $_POST['app'] : 'Apple' ?>" onfocus="this.value = this.value=='Apple'?'':this.value;" onblur="this.value = this.value==''?'Apple':this.value;"><br />
                      <input type="text" id="oni" name="oni" value="<?php echo isset($_POST['oni']) ? $_POST['oni'] : 'Onion' ?>" onfocus="this.value = this.value=='Onion'?'':this.value;" onblur="this.value = this.value==''?'Onion':this.value;">
                      <input type="text" id="pear" name="pear" value="<?php echo isset($_POST['pear']) ? $_POST['pear'] : 'Pear' ?>" onfocus="this.value = this.value=='Pear'?'':this.value;" onblur="this.value = this.value==''?'Pear':this.value;">
                      <input type="text" id="bro" name="bro" value="<?php echo isset($_POST['bro']) ? $_POST['bro'] : 'Broccoli' ?>" onfocus="this.value = this.value=='Broccoli'?'':this.value;" onblur="this.value = this.value==''?'Broccoli':this.value;"><br />
                      <input type="text" id="gra" name="gra" value="<?php echo isset($_POST['gra']) ? $_POST['gra'] : 'Grain' ?>" onfocus="this.value = this.value=='Grain'?'':this.value;" onblur="this.value = this.value==''?'Grain':this.value;">
                      <input type="text" id="peach" name="peach" value="<?php echo isset($_POST['peach']) ? $_POST['peach'] : 'Peach' ?>" onfocus="this.value = this.value=='Peach'?'':this.value;" onblur="this.value = this.value==''?'Peach':this.value;">
                      <input type="text" id="ora" name="ora" value="<?php echo isset($_POST['ora']) ? $_POST['ora'] : 'Orange' ?>" onfocus="this.value = this.value=='Orange'?'':this.value;" onblur="this.value = this.value==''?'Orange':this.value;"><br />
                      <input type="text" id="tom" name="tom" value="<?php echo isset($_POST['tom']) ? $_POST['tom'] : 'Tomato' ?>" onfocus="this.value = this.value=='Tomato'?'':this.value;" onblur="this.value = this.value==''?'Tomato':this.value;">
                      <input type="text" id="plu" name="plu" value="<?php echo isset($_POST['plu']) ? $_POST['plu'] : 'Plum' ?>" onfocus="this.value = this.value=='Plum'?'':this.value;" onblur="this.value = this.value==''?'Plum':this.value;">
                      <input type="text" id="avo" name="avo" value="<?php echo isset($_POST['avo']) ? $_POST['avo'] : 'Avocado' ?>" onfocus="this.value = this.value=='Avocado'?'':this.value;" onblur="this.value = this.value==''?'Avocado':this.value;"><br />
                      <input type="text" id="cor" name="cor" value="<?php echo isset($_POST['cor']) ? $_POST['cor'] : 'Corn' ?>" onfocus="this.value = this.value=='Corn'?'':this.value;" onblur="this.value = this.value==''?'Corn':this.value;">
                      <input type="text" id="pin" name="pin" value="<?php echo isset($_POST['pin']) ? $_POST['pin'] : 'Pineapple' ?>" onfocus="this.value = this.value=='Pineapple'?'':this.value;" onblur="this.value = this.value==''?'Pineapple':this.value;">
                      <input type="text" id="wat" name="wat" value="<?php echo isset($_POST['wat']) ? $_POST['wat'] : 'Watermelon' ?>" onfocus="this.value = this.value=='Watermelon'?'':this.value;" onblur="this.value = this.value==''?'Watermelon':this.value;"><br />
                      <input type="text" id="str" name="str" value="<?php echo isset($_POST['str']) ? $_POST['str'] : 'Strawberry' ?>" onfocus="this.value = this.value=='Strawberry'?'':this.value;" onblur="this.value = this.value==''?'Strawberry':this.value;">
                      <input type="text" id="ver" name="ver" value="<?php echo isset($_POST['ver']) ? $_POST['ver'] : 'Vervefruit' ?>" onfocus="this.value = this.value=='Vervefruit'?'':this.value;" onblur="this.value = this.value==''?'Vervefruit':this.value;">
                      <input type="text" id="fru" name="fru" value="<?php echo isset($_POST['fru']) ? $_POST['fru'] : 'Fruit of Life' ?>" onfocus="this.value = this.value=='Fruit of Life'?'':this.value;" onblur="this.value = this.value==''?'Fruit of Life':this.value;"><br />
                      <p>Gold value per experience:<input type="number" id="num" name="num" step="0.01" value="<?php echo isset($_POST['num']) ? $_POST['num'] : '2' ?>"></p>
                      <input type="submit" name="reset" value="Reset" onclick="myReset()">
                      <input type="submit" value="Calculate">
                    </fieldset>
				</form>
<script>
function myReset() {
    document.getElementById('radbee').value='Radish/Beet' ; 
    document.getElementById('gre').value='Green Pepper' ; 
    document.getElementById('spi').value='Spinach' ; 
    document.getElementById('car').value='Carrot' ; 
    document.getElementById('egg').value='Eggplant' ; 
    document.getElementById('cuc').value='Cucumber' ; 
    document.getElementById('cab').value='Cabbage' ; 
    document.getElementById('pum').value='Pumpkin' ; 
    document.getElementById('app').value='Apple' ; 
    document.getElementById('oni').value='Onion' ; 
    document.getElementById('pear').value='Pear' ; 
    document.getElementById('bro').value='Broccoli' ; 
    document.getElementById('gra').value='Grain' ; 
    document.getElementById('peach').value='Peach' ; 
    document.getElementById('ora').value='Orange' ; 
    document.getElementById('tom').value='Tomato' ; 
    document.getElementById('plu').value='Plum' ; 
    document.getElementById('avo').value='Avocado' ; 
    document.getElementById('cor').value='Corn' ; 
    document.getElementById('pin').value='Pineapple' ; 
    document.getElementById('wat').value='Watermelon' ; 
    document.getElementById('str').value='Strawberry' ; 
    document.getElementById('ver').value='Vervefruit' ; 
    document.getElementById('fru').value='Fruit of Life' ; 
    document.getElementById('num').value='2';
}
</script>

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
$spi = $_POST["spi"];
$egg = $_POST["egg"];
$cuc = $_POST["cuc"];
$pum = $_POST["pum"];
$app = $_POST["app"];
$pear = $_POST["pear"];
$bro = $_POST["bro"];
$peach = $_POST["peach"];
$ora = $_POST["ora"];
$plu = $_POST["plu"];
$avo = $_POST["avo"];
$pin = $_POST["pin"];
$wat = $_POST["wat"];
$ver = $_POST["ver"];
$fru = $_POST["fru"];
$num = $_POST["num"];
?>


<?php 
	$totalxp = (1*$radbee)+(2*$car)+(3*$cab)+(5*$oni)+(7*$gra)+(9*$tom)+(13*$cor)+(17*$str)+(19*$gre)+(23*$spi)+(27*$egg)+(31*$cuc)+(35*$pum)+(38*$app)+(42*$pear)+(45*$bro)+(48*$peach)+(51*$ora)+(54*$plu)+(57*$avo)+(61*$pin)+(64*$wat)+(70*$ver)+(100*$fru);
    $totalgp = $totalxp * $num;
?>


	<p> Your seeds, when planted, grant a total of <?php echo $totalxp; ?> experience.</p>
    <br />
    <p> When valued at <? echo $num; ?> gold per experience, your seeds would sell for <?php echo $totalgp; ?> gold.</p>
    <br /><br />
    <strong>This does not include experience gained from harvesting.</strong>

                
            </div>
            <div id="bottomcontent">
            </div>
        </div>
	</body>
</html>

