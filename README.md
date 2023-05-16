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

Версия PHP 8.0+ так как метод ```match``` требует минимум 8 версию.

```
final class StaticFactory
{
    public static function factory($data, $storage)
    {
        return match ($storage) {
            'database' => new DatabaseHandler($data),
            'email' => new EmailHandler($data)
        };  
    }
}
```

**folder** заменить на название папки

1. ```git clone https://github.com/Div-Man/laravel-vue.git folder```

2. ```composer update```
3. ```cp .env.example .env```
4. ```php artisan key:generate```

При необходимости, если будет ошибка **Permission denied**, изменить доступ к папкам и файлам

1. ```sudo chown -R www-data:www-data storage/logs```
2. ```sudo chown -R www-data:www-data storage/framework/sessions```
3. ```sudo chown -R www-data:www-data storage/framework```
4. ```sudo chown -R www-data:www-data storage/framework/cache```
5. ```sudo chown -R $USER:www-data storage```
6. ```sudo chown -R $USER:www-data bootstrap/cache```


