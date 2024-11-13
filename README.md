# PrestaShop Product Deletion Scripts

## Opis

Zestaw dwóch skryptów PHP do usuwania produktów w PrestaShop, które automatyzują i przyspieszają proces usuwania danych produktów bez pozostawiania zbędnych rekordów w bazie danych. Skrypty używają wbudowanej metody `Product::delete()`, która zapewnia bezpieczne i kompletne usunięcie produktu oraz powiązanych danych, takich jak kategorie, zdjęcia, ceny specjalne i inne.

## Zawartość repozytorium

### 1. Skrypt do usunięcia pojedynczego produktu

**Plik**: `delete_single_product.php`

**Opis**: Skrypt służy do usunięcia jednego produktu o podanym identyfikatorze (`id_product`). Wykorzystując metodę `Product::delete()`, skrypt usuwa produkt wraz z wszystkimi powiązanymi danymi z bazy danych.

**Instrukcja użycia**:

1. Skopiuj `delete_single_product.php` do głównego katalogu PrestaShop lub innego z dostępem do pliku konfiguracyjnego `config/config.inc.php`.
2. Otwórz plik i wprowadź ID produktu, który chcesz usunąć, w linii:
   ```php
   $product = new Product(123); // 123 to przykładowy ID produktu
   ```

### 2. Skrypt do usunięcia wielu produktów

**Plik**: `delete_multiple_products.php`

**Opis**: Skrypt służy do usunięcia wielu produktu o podanym identyfikatorze.

```php
$productIds = [123, 124, 125]; // Lista ID produktów do usunięcia

```

## Uwagi

**Ostrzeżenie**:
Przed uruchomieniem skryptów wykonaj kopię zapasową bazy danych, ponieważ produkty i powiązane z nimi dane zostaną trwale usunięte.

**Bezpieczeństwo**:
Po użyciu skryptów należy je usunąć lub zabezpieczyć, aby zapobiec przypadkowemu lub nieautoryzowanemu uruchomieniu.

Skrypty te są przeznaczone dla administratorów i developerów PrestaShop, którzy mają dostęp do plików instalacyjnych oraz środowiska PHP.
