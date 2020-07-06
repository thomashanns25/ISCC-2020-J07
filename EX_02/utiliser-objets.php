<?php
$date1 = new DateTime();      
echo '<p>' .$date1->format('Y-m-d H:i:s'). '</p>';

$date2= new DateTime();
echo '<p>' .$date2->format('2020-06-22 9:00'). '</p>';

$date2 = $date1->diff(new DateTime('2020-06-22'));
echo '<p>'.$date2->d.' jours, '.$date2->h.' heures, '.$date2->i.' minute, depuis le début de la piscine. </p>';
?>