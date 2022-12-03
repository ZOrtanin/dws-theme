# dws-theme
Фреймворк тем DWS


Установка GitHub Desktop:
https://desktop.github.com


Установка docker Desktop:
https://www.docker.com 


Запуск локального сервера:
```sh

gh repo clone ZOrtanin/dws-theme
cd ./dws-theme
docker-compose -f docker-compose.yml up -d

```


Установка базы данных актуальной версии:
```sh

docker exec -i db mysql -uroot -proot wordpress < wordpress.sql

```
* если выдало ошибку заходим в phpMyAdmin и стераем все что есть в базе wordpress за тем повотряем команду

-----------------------------------
Все готово можно начинать прогать
-----------------------------------

Обновить базу данных, задаст вопрос отвечаем 'y' :
```sh

chmod +x update-base.sh
./update-base.sh

```
* тут могут возникнуть проблемы 



Сайт:
http://localhost:8000
```

user: root
password: root

```

phpMyAdmin:
http://localhost:8080
```

user: root
password: root

```


Правила для разработки:
1. Любое именение делается в отдельной ветке.
2. Название ветки по примеру 'ek-contact-form-fix' инициалы -> краткое -> описание -> задачи
3. После пушим и смотрим что и как ... 