[![CodeFactor](https://www.codefactor.io/repository/github/lukentui/lumen-vue-feedback-form/badge)](https://www.codefactor.io/repository/github/lukentui/lumen-vue-feedback-form)

##Инструкция по запуску
### Frontend
- `npm i`
- `npm run serve`

### Backend
- `composer install`
- `copy .env.example to .env`
- setup db info in .env
- `php artisan migrate:install`
- `php artisan migrate`
- `php -S localhost:8000 -t public`

*tested on php 7.4.3