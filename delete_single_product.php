<?php
// Dodaj plik konfiguracyjny PrestaShop, aby załadować środowisko
include(dirname(__FILE__).'/config/config.inc.php');

// Załaduj klasę Product
$product = new Product(123); // 123 to ID produktu, który chcesz usunąć

// Sprawdź, czy produkt został poprawnie załadowany
if (Validate::isLoadedObject($product)) {
    // Usuń produkt
    if ($product->delete()) {
        echo 'Produkt został pomyślnie usunięty.';
    } else {
        echo 'Wystąpił błąd podczas usuwania produktu.';
    }
} else {
    echo 'Nie znaleziono produktu o podanym ID.';
}
?>
