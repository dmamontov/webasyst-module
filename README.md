Webasyst модуль
===============

Webasyst модуль для взаимодействия с [retailCRM](http://www.retailcrm.ru) через [REST API](http://retailcrm.ru/docs/Разработчики).

### Модуль позволяет

* Обмен заказов с retailCRM
* Настроить соотвествие справочников retailCRM и Webasyst (статусы, платежи, типы доставки и т.д.)
* Создание [ICML](http://docs.retailcrm.ru/index.php?n=Разработчики.ФорматICML) (Intaro Markup Language) для выгрузки каталога в retailCRM

### Установка

#### Marketplace

* Модуль устанавливается через Webasyst Marketplace

#### Настройки

1. Перейдите к компоненту "Магазин"
2. Нажмите на ссылку "Плагины"
3. В левой колонке, нажмите на ссылку "Retailcrm"
4. Произведите первоначальные настройки и нажмите кнопку "Сохранить"
5. После сохранения, откроются дополнительные вкладки с настройками плагина, заполните их и нажмите "Сохранить"
6. Вернитесь на первую вкладку и активируйте плагин

#### Экспорт Каталога

Добавьте запись в cron для экспорта каталога по расписанию

```bash
* */12 * * * /path/to/php /path/to/cli.php shop retailcrmIcml
```

#### Импорт истории изменении заказов в CRM

Добавьте запись в cron для обмена заказов между CRM и вашим магазином по расписанию

```bash
*/15 * * * * /path/to/php /path/to/cli.php shop retailcrmHistory
```
