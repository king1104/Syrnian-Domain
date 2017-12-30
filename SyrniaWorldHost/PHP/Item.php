<!DOCTYPE html>
<html>
	<head>
		<title>Syrnia Domain</title>
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
        		

                <?php
                	$id = $_GET["id"];
                
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
                        $stmt = $pdo->prepare('SELECT * FROM LockedItems WHERE name = ? LIMIT 1');
						$stmt->execute([$id]);
                        $row = $stmt->fetch();

					
                       echo "<p>".$row['Name']."</p><br />";
                       echo "<img src='".$row['ImageURL']."' alt='".$row['Name']."' style='float:right;'>";
                       echo "<p>Level:". $row['Level']."</p> <br />";
                       echo "<p>Experience:". $row['Exp']."</p> <br />";
                       echo "<p>NPC Sell Price:". $row['NPCSell']."</p>";
                       
                       $pdo = null;
                       ?>
                
                
            </div>
            <div id="bottomcontent">
            </div>
        </div>
	</body>
    
    <script>
		if (new Date().getHours() > 18)
        {
        	document.body.style.backgroundImage = "url('../Images/BackgroundImages/homenight.png')";
            document.body.style.backgroundPosition = "center";
            document.body.style.backgroundRepeat = "no-repeat";
            document.body.style.backgroundSize = "cover";
            document.body.style.backgroundAttachment = "fixed";
        }
    </script>

</html>