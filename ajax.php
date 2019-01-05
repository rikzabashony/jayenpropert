<?php
  // Fill up array with names
  $a[]="Anna";
  $a[]="bagas";
  $a[]="angga";
  $a[]="Anne";
  $a[]="Andi";
  $a[]="Brittany";
  $a[]="Bagol";
  $a[]="Budi";
  $a[]="Budiman";
  $a[]="Cinderella";
  $a[]="cyntia";
  $a[]="c";
  $a[]="Dani";
  $a[]="Deni";
  $a[]="Doni";
  $a[]="Diana";
  $a[]="Eva";
  $a[]="Elenia";
  $a[]="Fiona";
  $a[]="Gunda";
  $a[]="Gilang";
  $a[]="Gunawan";
  $a[]="Hege";
  $a[]="Inga";
  $a[]="Johanna";
  $a[]="Kitty";
  $a[]="Linda";
  $a[]="Nina";
  $a[]="Ophelia";
  $a[]="Petunia";
  $a[]="Amanda";
  $a[]="Raquel";
  $a[]="Cindy";
  $a[]="Doris";
  $a[]="Eve";
  $a[]="Evita";
  $a[]="Sunniva";
  $a[]="Tove";
  $a[]="Unni";
  $a[]="Violet";
  $a[]="Liza";
  $a[]="Elizabeth";
  $a[]="Ellen";
  $a[]="Wenche";
  $a[]="Vicky";
 $q=$_GET["q"];

  if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
  {
  if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
  {
  if ($hint=="")
  {
  $hint=$a[$i];
  }
  else
  {
  $hint=$hint." , ".$a[$i];
  }
  }
  }
  }
  if ($hint == "")
  {
  $response="no suggestion";
  }
  else
  {
  $response=$hint;
  }

  echo $response;
  ?>