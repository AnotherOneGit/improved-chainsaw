<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Нужно реализовать приложение с 3-мя частями: frontend, backend и api.

#Описание задачи:
Нужно реализовать систему с базой пользователей, которые при регистрации могут получить бонусную услугу.

Требования к бизнес-логике:
Бонусную услугу можно получить только один раз после регистрации
Возможны 3 бонуса:
Бесплатное обследование (количество ограничено)
Скидка на поездку в санаторий (количество не ограничено)
Кружку с логотипом (количество ограничено)
Бонус генерируется случайно

Необходимо реализовать:

#Для части frontend
Авторизацию пользователя на приложении frontend через Facebook
Просмотр страницы профиля пользователя в приложении с информацией из профиля Facebook: имя, фото и т.д.
На странице пользователя должна быть кнопка для получения бонуса, если пользователь бонус уже получил, то кнопка не отображается. При нажатии на кнопку система случайным образом выдает пользователю бонусную услугу из имеющихся в наличии на данный момент (обратите внимание, что некоторые бонусные услуги имеют ограничение).
Данные пользователя в базе приложения не храним, только отображаем.
В базе приложения храним только его дату его регистрации и бонус
Для работы с Facebook используйте https://developers.facebook.com/docs/graph-api/. Настройки для работы с API Facebook хранить в настройках приложения
#Для части backend
Авторизацию администратора через штатную форму входа
администратор должен быть добавлен в базу миграцией с логином и паролем
просмотр списка зарегистрированных пользователей с датой их регистрации и бонусом который они получили
#Для части api
Запрос (GET /users) на получение списка пользователей с полями: id, дата регистрации, бонус который получил пользователь.
Авторизация по token в headers. Token хранится в настройках приложения
