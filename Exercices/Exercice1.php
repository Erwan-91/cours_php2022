<?php //correction
$pays = array(
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
    'Espagne' => 'Madrid',
    'inconnu' => '?',
);

foreach ($pays as $key => $value) {
    if($key == 'inconnu'){
        echo '<p>Ce pays n\'est pas connu</p>';
    }
    else{
        echo '<p>' . $key . ' est le pays de ' . $value . '</p>';
    }
}
?>