<?php
//
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1", width=device-width>
</head>
<body>
<style>

body {
  text-align: center;
}

.arrow {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}

.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}


/*.buttondown{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
*/

.button, .buttondown{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

/*.wrapper {
  text-align: center;
  display: inline-block;
  position: absolute;
  top: 50%;
  left: 50%;
}
*/
</style>
<div style="text-align: center;">
<!--div class="wrapper"-->

<form action="RemoteController.php" method="post">
	<button class="button"  name="action" value="volup">VOL UP</button>
	<button class="button" name="action" value="voldown">VOL DOWN</button>
	<button class="button" name="action" value="JUMP">INPUT</button>
	<!--button class="button" name="action" value=""></button>
	<button class="button" name="action" value=""></button-->
</form>



<form action="RemoteController.php" method="post">
<button class="button" name="action" value="1">1</button>
<button class="button" name="action" value="2">2</button>
<button class="button" name="action" value="3">3</button>
</form>


<form action="RemoteController.php" method="post">
<button class="button" name="action" value="4">4</button>
<button class="button" name="action" value="5">5</button>
<button class="button" name="action" value="6">6</button>
</form>


<form action="RemoteController.php" method="post">
<button class="button" name="action" value="7">7</button>
<button class="button" name="action" value="8">8</button>
<button class="button" name="action" value="9">9</button>
</form>

<form action="RemoteController.php" method="post">
<button class="button" name="action" value="0">0</button>
</form>



<form action="RemoteController.php" method="post">

<button class="buttondown" name="action" value="up"><i class="arrow up"></i></button>
</form>

<form action="RemoteController.php" method="post">
<button class="buttondown" name="action" value="left"><i class="arrow left"></i></button>
<button class="buttondown" name="action" value="okey">OKEY</button>
<button class="buttondown" name="action" value="right"><i class="arrow right"></i></button>
</form>

<form action="RemoteController.php" method="post">
<button class="buttondown" name="action" value="down"><i class="arrow down"></i></button>
</form>


<!--/div-->
</div>
</body>
</html>
<?php

$ip="192.168.1.24";
$url="/sony/IRCC";

if ($_POST['action'] == 'volup') {
    //action for update here
	
	$command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAASAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

} else if ($_POST['action'] == 'voldown') {
    
	$command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAATAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == 'JUMP') {
    
        
	$command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAAlAw==</IRCCCode>' $ip$url";
	//echo $command;
	shell_exec($command);





//////////////  DIAL /////////////////////////////////////////////////////////////////

}else if ($_POST['action'] == '1') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAAAAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);


}else if ($_POST['action'] == '2') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAABAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == '3') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAACAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == '4') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAADAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == '5') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAAEAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == '6') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAAFAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == '7') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAAGAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == '8') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAAHAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == '9') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAAIAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == '0') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAAJAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

///////////////////////////////////////////////////////// end dials

//////////////////////////////////////////// NAVIGATION UP DOWN LEFT RIGHT OK
}else if ($_POST['action'] == 'up') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAB0Aw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == 'left') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAA0Aw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == 'okey') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAABlAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == 'right') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAAzAw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);

}else if ($_POST['action'] == 'down') {
    
        
        $command = "curl -X POST -d '<IRCCCode>AAAAAQAAAAEAAAB1Aw==</IRCCCode>' $ip$url";
        //echo $command;
        shell_exec($command);








} else {
    //invalid action!
}

?>
