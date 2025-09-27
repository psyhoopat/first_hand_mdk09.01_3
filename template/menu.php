<aside class="menu">
<?php 

$t = !empty($_GET['t']) ? $_GET['t'] : '';

include 'config.php';

if($t == '') echo $but1.$but2.$but3.$but4.$but5;
if($t == '1') echo $but1.$but2.$but3.$but4.$but5;
if($t == '2') echo $but1.$but2.$but2_1.$but2_2.$but3.$but4.$but5;
if($t == '3') echo $but1.$but2.$but3.$but3_1.$but3_2.$but4.$but5;
if($t == '4') echo $but1.$but2.$but3.$but4.$but5;
if($t == '5') echo $but1.$but2.$but3.$but4.$but5;

?>    
</aside>