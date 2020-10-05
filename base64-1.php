<?php

echo "[]TOOL ENCODE DAN DECODE BY IndoSecWar🔥]\n1. ENCODE\n2. DECODE\n>>";
$inp = trim(fgets(STDIN));

if($inp == 1){
  echo "MASUKAN KATA NYA BRO: ";
  $enc = trim(fgets(STDIN));
  $encoded = base64_encode($enc);
  echo "Hasil Encode Nya gan = $encoded \n";
}
else if($inp == 2){
  echo "MASUKIN STRING BASE NYA OM : ";
  $dec = trim(fgets(STDIN));
  $decoded = base64_decode($dec);
  echo "HASILNYA GAN😎👊 = $decoded \n";
}
else {
  echo "PILIHAN TIDAK TERSEDIA GAN😎 \n";
}
?>