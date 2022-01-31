<?php
fscanf(STDIN, "%d\n", $D);
fscanf(STDIN, "%d %d %d\n", $Oc, $Of,$Od);
fscanf(STDIN, "%d %d %d %d\n", $Cs, $Cb, $Cm, $Cd);

$Ot = $Oc + ($D - $Of)*$Od;
$Ct = $Cb + (($D / $Cs)*$Cm) +($D *$Cd);

  if( $Ot < $Ct){
    echo "Online Taxi";
  }
else{
    echo "Classic Taxi";
  }
?>
