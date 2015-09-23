# uLogin

Donate link: http://ulogin.ru  
Tags: ulogin, login, social, authorization  
Requires at least: 5.4  
Tested up to: 5.7.3  
Stable tag: 2.0  
License: GNU General Public License, version 2  

**uLogin** — это инструмент, который позволяет пользователям получить единый доступ к различным Интернет-сервисам без необходимости повторной регистрации,
а владельцам сайтов — получить дополнительный приток пользователей из социальных сетей и популярных порталов (Google, Яндекс, Mail.ru, ВКонтакте, Facebook и др.)

## Установка
- Загрузите архив плагина через Админку сайта в разделе "Плагины".
- Включите модуль "uLogin" и он заработает сразу с настройками по умолчанию.
- Добавьте вывод панелей регистрации/авторизации и синхронизации в шаблон сайта.

Более детальную информацию смотрите на сайте https://ulogin.ru/help.php

## Модуль "uLogin"

Данный модуль находится в Админке в разделе *"Плагины"*.

Здесь задаются: 
 
**uLogin ID форма входа:** общее поле для всех виджетов uLogin, необязательный параметр (см. *"Настройки виджета uLogin"*);
**uLogin ID форма синхронизации:** общее поле для всех виджетов uLogin, необязательный параметр (см. *"Настройки виджета uLogin"*);

## Настройки виджета uLogin

При установке расширения uLogin авторизация пользователей будет осуществляться с настройками по умолчанию.  
Для более детальной настройки виджетов uLogin Вы можете воспользоваться сервисом uLogin.  

Вы можете создать свой виджет uLogin и редактировать его самостоятельно:

- для создания виджета необходимо зайти в "Личный Кабинет" (ЛК) на сайте http://ulogin.ru/lk.php
- добавить свой сайт к списку "Мои сайты" и на вкладке "Виджеты" добавить новый виджет. После этого вы можете отредактировать свой виджет.

В графе "Возвращаемые поля профиля пользователя" вы можете включить необходимые поля, например, **Дата рождения** или **Телефон**, MogutaCMS запишет эти параметры
в соответствующие поля Пользователя при регистрации.

**Важно!** Для успешной работы плагина необходимо включить в обязательных полях профиля поле **Еmail** в Личном кабинете uLogin.  
Заполнять поля в графе "Тип авторизации" не нужно, т.к. uLogin настроен на автоматическое заполнение данного параметра.

Созданный в Личном Кабинете виджет имеет параметры **uLogin ID**.  
Скопируйте значение **uLogin ID** вашего виджета в соответствующее поле в настройках плагина на вашем сайте и сохраните настройки.   

Если всё было сделано правильно, виджет изменится согласно вашим настройкам.


## Особенности

Для вывода панели регистрации/авторизации в любом месте шаблона MogutaCMS используйте шорт-код `[ulogin]`
Например, чтобы добавить блок регистрации/авторизации в Шапку сайта, добавьте шорт-код [ulogin] в шаблон Админки
`Настройки->Шаблон->template.php`, например, в блок `<div class="header">`

Для вывода блока синхронизации используйте шорт-код `[sync_ulogin]`
Например, чтобы добавить блок синхронизации в личный кабинет пользователя, добавьте шорт-код [sync_ulogin] в шаблон Админки
`Настройки->Шаблон->personal.php`, например, в блок `<div id="personal">`


## Изменения

####2.0.0.
* Релиз.
