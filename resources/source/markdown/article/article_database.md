# Docker多容器部署LNMP环境

database/migrations/*

php artisan migrate








0. 进入项目根目录，将.env.example重命名为.env（Sublime）。
1. composer install （安装就略了，时间有点久）
2. npm install （Git Bash）
3. php artisan migrate （运行前，先根据自己的本地环境修改.env文件的数据库配置，作用是导入结构）
4. php artisan db:seed （作用是导入数据）
5. gulp （如未安装，全局安装，Git Bash：cnpm install gulp -g）
6. php artisan key:generate （增加）【管理员运行cmd】
运行结果：Application key [base64:c0aNXLaXxoldyhTMPTkb6hqrZW7UyH9UAXoAedbabWE=] set successfully.接下来，要将生成的key复制到config/app.php的APP_KEY作为键值。
如：'key' => env('APP_KEY', 'c0aNXLaXxoldyhTMPTkb6hqrZW7UyH9UAXoAedbabWE'),
7. php.ini配置（增加）：xdebug.max_nesting_level =500
8. php artisan serve
自己摸索了一遍，确实了解了很多，感谢大神的分享，与大家共同学习进步！

基于 Laravel 和 Vue.js 构建的博客平台 —— Vuedo

http://laravelacademy.org/post/5271.html


使用 Laravel 快速构建网站系列 —— 分类聚合网站：webshowu
http://laravelacademy.org/post/4353.html

## About me

- 微博[http://www.weibo.com/addcn](http://www.weibo.com/addcn)