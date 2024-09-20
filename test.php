<?php
$arr = [1,2,3];
?>
<ol> 
 <?php foreach ($arr as $v): ?>
       <li> <?= $v ?> </li>
   <?php endforeach ?>
</ol>