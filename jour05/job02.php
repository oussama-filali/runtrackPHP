<?php
function bonjour (bool $jour): void {
    if ($jour) {
    echo "Bonjour";
    }
    
}

bonjour(true);
bonjour(false);

?>