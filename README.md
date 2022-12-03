# dws-thame
Фреймворк тем DWS


Установка GitHub Desktop:
https://desktop.github.com


Установка docker Desktop:
https://www.docker.com 


Запуск локального сервера:
```sh

gh repo clone ZOrtanin/dws-thame
cd ./dws-thame
docker-compose -f docker-compose.yml up -d

```

Установка базы данных актуальной версии:
```sh

docker exec -i db mysql -uroot -proot wordpress < wordpress.sql

```
* если выдало ошибку заходим в phpMyAdmin и стераем все что есть в базе wordpress за тем повотряем команду


Сайт:
http://localhost:8000

phpMyAdmin:
http://localhost:8080