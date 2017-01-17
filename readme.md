

## Laravel

Laravel Version ```5.3.26```


## How?


```

git clone https://github.com/addcn/laravel.git your-project-folder

cd your-project-folder

php composer.phar install # 安裝依賴

cp .env.example .env # 数据库连接


chown -R apache:apache /path/your-project-folder/storage /path/your-project-folder/bootstrap/cache

chmod -R 775 /path/your-project-folder/storage /path/your-project-folder/bootstrap/cache

cd /path/your-project-folder
php artisan migrate # 数据迁移

```


## About me

- 微博[http://www.weibo.com/addcn](http://www.weibo.com/addcn)
