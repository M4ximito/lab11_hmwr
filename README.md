# lab11_hmwr

Ten projekt umożliwia uruchomienie kontenerów z usługami PHP, MySQL, phpMyAdmin i Nginx przy użyciu Dockera.

## Struktura projektu

- `docker-compose.yml`: Plik konfiguracyjny Docker Compose, który definiuje usługi i ich zależności.
- `Dockerfile.php`: Plik Dockerfile dla usługi PHP, który buduje obraz PHP z rozszerzeniem mysqli.
- `Dockerfile.nginx`: Plik Dockerfile dla usługi Nginx, który buduje obraz Nginx z konfiguracją serwera.
- `nginx/default.conf`: Plik konfiguracyjny Nginx, który przekierowuje żądania do serwera PHP.
- `php/index.php`: Przykładowy plik PHP, który wyświetla informacje o konfiguracji PHP.

