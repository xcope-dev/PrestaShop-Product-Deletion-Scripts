<?php
// Dodaj plik konfiguracyjny PrestaShop, aby załadować środowisko
include(dirname(__FILE__).'/config/config.inc.php');

// Lista ID produktów do usunięcia
$productIds = [123, 124, 125]; // Podaj ID produktów, które chcesz usunąć

foreach ($productIds as $id) {
    $product = new Product($id);
    
    // Sprawdź, czy produkt został poprawnie załadowany
    if (Validate::isLoadedObject($product)) {
        // Usuń produkt
        if ($product->delete()) {
            echo "Produkt o ID $id został pomyślnie usunięty.<br>";
        } else {
            echo "Wystąpił błąd podczas usuwania produktu o ID $id.<br>";
        }
    } else {
        echo "Nie znaleziono produktu o ID $id.<br>";
    }
}
?>
