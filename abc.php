<?php
  echo "hellow world"; 
  $fname="Akash";
  $sname="Kumar";
  echo " $fname"." $sname"." is my name\n";
  $a=10;
  $b=20;
  $c=$a+$b;
  echo "\nsum= ".$c;
  $c=$b-$a;
  echo "\nsub= ".$c;
  $c++;
  echo " inc=".$c;
  $a--;
  echo " dec =".$a;
  date_default_timezone_set("ASIA/KOLKATA");
  echo "<pre>";
  print_r(getdate());
  $d=getdate();
  //echo $d['mday'];
  echo date('d-F-Y');
  echo "\n";
  echo date('d-M-Y');
  echo "\n";
  date_default_timezone_set("ASIA/KOLKATA");
  echo date('d-m-Y h:i:s:a'); //h hours i-minutes s-seconds a-AM/pm
  
?>
