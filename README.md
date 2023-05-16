## Тестовое задание

#### Фронтенд:

Сделать одностраничное приложение (SPA) используя vueJs, vuex, vue-router
Приложение должно содержать 2 страницы:
1 страница: форма с полями (имя, обращение). Форма должна отправляться на бэкенд и сохраняться в локальном store (vuex)
2 страница: отображает списком эти формы, только то, что отправляли на 1 странице и было сохранено во vuex, без запроса к бекенду. (Если после обновления страницы данные пропадут, это нормально)
Переключение между страницами сделать через vue-router без перезагрузки. Дизайн и внешний вид вообще не важен, смотрим на использование vuex, vue-router.

#### Бэкенд:

Принимать данные с фронта и сохранять данные через статическую фабрику (реализовать Static Factory).
В фабрику передается database или email строкой при создании. И у фабрики должен быть метод save(). Фабрика должна выбрать место для сохранения и сохранить (данные можно и не сохранять, просто реализовать методы).

Что необходимо использовать:
- PHP 7 и выше
- ООП (для реализации фабрики сохранения)
- Фреймворк Laravel
- Обязательно Vuejs, Vuex, Vue-Router

***

folder заменить на название папки

git clone https://github.com/Div-Man/laravel-vue.git folder

composer update 
cp .env.example .env
php artisan key:generate

При необходимости, изменить доступ к папкам и файлам

sudo chown -R www-data:www-data storage/logs
sudo chown -R www-data:www-data storage/framework/sessions
sudo chown -R www-data:www-data storage/framework
sudo chown -R www-data:www-data storage/framework/cache
sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache


