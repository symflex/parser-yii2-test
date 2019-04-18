### Установка и запуск
```
git clone https://github.com/symflex/parser-yii2-test.git .

php yii migrate/up
php yii parser/index
php yii parser/index 1
```
### Задача
Создать панель управления + парсер данных. 
1. Страны с полями (список/редактирование/удаление): 
  – названия страны  
  – локаль (буквенное значение US, CA, GB, IT и т.д.) 

2. Рекламные сети с полями(список/редактирование/удаление):  
  – имя,  
  – URL парсера 

3. Офферы с полями(список/удаление): 
  – имя оффера 
  – описание оффера 
  – страны 
  – рекламная сеть 
  – выплата (payout) 
4. Создать консольное приложение которое по id рекламной сети запустит конкретный парсер или без id все сразу по следующим Urls: 
  – http://api.peerfly.com/rss/offers.php?count=all
  – https://offerdollar.com/offer_feed.php?pubid=2
5. Реализовать 1 абстрактный класс для всех парсеров и на каждый парсер релизовать отдельный класс со своей реализацией 
6. Все записи должны быть уникальными. т.е. если запустить скрипт несколько раз, дублей создаться не должно. 