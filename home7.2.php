<?php
$a = ['пн', 'вт','ср','чт','пт','сб','вс'];
$key = date(w);
foreach ($a as $key=>$elem) {
  if ($key == $day) {
      echo '<i>' . $elem . '</i>.<br>';
  } else {
      echo $elem . '<br>';
    }
}
?>