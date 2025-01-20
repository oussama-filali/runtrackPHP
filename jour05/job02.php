<?php
function bonsoir(bool $jour):void{
if($jour){
echo"Bonjour";
}else{
echo"Bonsoir";}}
function bonjour (bool $jour): void {
    if ($jour) {
    echo "Bonjour";
    } else {
        echo "Bonsoir";}
    }
    


bonjour(true);
bonsoir(false);

?>