# Configuração

## Primeiro rodar a imagem:
```bash
docker run -d adrianoapi/docker-laravel
```

## No diretório da aplicação, executar o comando abaixo:
```bash
docker-compose up -d
```

## Comandos internos:
```bash
docker exec -it webserver php artisan migrate
```
```bash
docker exec -it webserver php artisan db:seed
```

## Para acessar a máquina do banco:
```bash
docker exec -it database /bin/bash
```

## Para acessar o banco:
```bash
psql -h 127.0.0.1 -U homestead -W
```

## Para acessar a aplicação:
```bash
http://localhost:8080/products
```