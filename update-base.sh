#!/bin/sh
export USER_ID=$(id -u)
export GROUP_ID=$(id -g)
docker exec -i db mysqladmin -uroot -proot drop wordpress;
docker exec -i db mysqladmin -uroot -proot create wordpress;
docker exec -i db mysql -uroot -proot wordpress < wordpress.sql
