# Laravel

使用 Laravel ```5.3.26``` +  vue ```2``` + Bootstrap ```3``` 构建（自动更新）。

## How to?

```
# clone项目
git clone https://github.com/addcn/laravel.git your-project-folder

cd your-project-folder

# 安装依赖
php composer.phar install

# 数据库连接
cp .env.example .env

# 目录权限
chown -R apache:apache /path/your-project-folder/storage /path/your-project-folder/bootstrap/cache

chmod -R 775 /path/your-project-folder/storage /path/your-project-folder/bootstrap/cache

# 数据迁移
cd /path/your-project-folder
php artisan migrate

```
查看演示 http://www.uedao.com/article/index


## About me

- 微博 [http://www.weibo.com/addcn](http://www.weibo.com/addcn)
