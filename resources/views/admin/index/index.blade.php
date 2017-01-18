<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" >
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ elixir('css/reset.css') }}">
        <link rel="stylesheet" href="{{ elixir('css/admin.css') }}">
        <!-- Scripts -->
        <script>
        window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
        </script>        
        <title>{{ config('app.name', '管理系统') }}</title>
    </head>
    <body>

    <div id="wp">

        <!-- 头部 -->
        <div id="top">
            <em><a href="{{ url('admin') }}"><span class="fa fa-th-large" style="margin-right:3px;"></span>管理系统</a></em>    
            <span>您好 , admin </span>
                ┊ <span><a href="{{ url('admin/logout') }}">退出</a></span>
                ┊ <span><a href="{{ url('admin') }}">后台首页</a></span>
                ┊ <span><a href="{{ url('/') }}" target="_blank">前台首页</a></span>    
            <div class="about">
                <a href="{{ url('admin/about') }}"><span class="fa fa-info-circle"></span>关于</a>
            </div>
        </div>



        <!-- 左菜单 -->
        <div id="left">
            <div class="menu">
                <div class="item">
                    <h3 class="title"><span class="fa fa-home"></span>后台首页</h3>
                    <ul class="list">
                        <li><a href="#">后台默认页</a></li>            
                    </ul>
                </div>

                <div class="item">
                    <h3 class="title"><span class="fa fa-user"></span>用户管理</h3>
                    <ul class="list">
                        <li><a href="#">角色管理</a></li>
                        <li><a href="#">用户列表</a></li>
                        <li><a href="#">用户添加</a></li>
                    </ul>
                </div>

                <div class="item">
                    <h3 class="title"><span class="fa fa-user"></span>文章管理</h3>
                    <ul class="list">
                        <li><a href="#">添加文章分类</a></li>
                        <li><a href="#">文章分类列表</a></li>
                        <li><a href="#">添加文章</a></li>
                        <li><a href="#">文章列表</a></li>
                    </ul>
                </div>

                <div class="item">
                    <h3 class="title"><span class="fa fa-book"></span>新闻管理</h3>
                    <ul class="list">
                        <li><a href="#">添加新闻分类</a></li>
                        <li><a href="#">新闻分类列表</a></li>
                        <li><a href="#">添加新闻</a></li>
                        <li><a href="#">新闻列表</a></li>
                   </ul>
                </div>
                
            </div>
        </div>

        <!-- 右边主体 -->
        <div id="right">
           <div id="content">

                <!-- 内容导航 -->
                <div id="nav">系统首页</div>

                <!-- 系统首页 -->
                <table border="0" cellspacing="0" cellpadding="4" width="100%">
                    <tr class="hd">
                        <td colspan="2" height="30"><strong>用户信息</strong></td>
                    </tr>
                    <tr class="bg1">
                        <td height="25" width="50%">用　户：</td>
                        <td height="25"><strong class="red"><?php echo $systemInfo['username']; ?></strong></td>
                    </tr>
                    <tr class="bg2">
                        <td height="25">登陆统计：</td>
                        <td height="25">总登陆 <?php echo $systemInfo['login_total'].' 次　错误：'.$systemInfo['error_total'].' 次'; ?></td>
                    </tr>  
                    <tr class="bg1">
                        <td height="25">本次登陆时间/IP：</td>
                        <td height="25"><?php echo gmdate("Y-m-d H:i:s",$systemInfo['last_login_time']).' / IP：'.$systemInfo['last_login_ip']; ?></td>
                    </tr>
                    <tr class="bg2">
                        <td height="25">上次登陆时间/IP：</td>
                        <td height="25"><?php echo gmdate("Y-m-d H:i:s",$systemInfo['last_login_time2']).' / IP：'.$systemInfo['last_login_ip2']; ?></td>
                    </tr>
                </table>

                <br/>
                <table border="0" cellspacing="0" cellpadding="4" width="100%">
                    <tr class="hd">
                        <td colspan="2" height="30"><strong>系统信息</strong></td>
                    </tr>    
                    <tr class="bg1">
                        <td height="25">服务器端信息：</td>
                        <td height="25"><?php echo $systemInfo["server_os"]; ?></td>
                    </tr>
                    <tr class="bg2">
                        <td height="25">PHP/MYSQL版本：</td>
                        <td height="25"><?php echo "PHP：".$systemInfo["php_version"]. " / MYSQL：".$systemInfo["db_version"]; ?></td>
                    </tr>
                    <tr class="bg1">
                        <td height="25" width="50%">Cookie测试：</td>
                        <td height="25"><?php echo $systemInfo["ifcookie"]; ?></td>
                    </tr>
                    <tr class="bg2">
                        <td height="25">邮件支持模式：</td>
                        <td height="25"><?php echo $systemInfo["sys_mail"]; ?></td>
                    </tr>    
                    <tr class="bg1">
                        <td height="25">上传/执行时间：</td>
                        <td height="25">Max upload <?php echo $systemInfo["max_upload"]." / Max run ".$systemInfo["max_ex_time"]; ?></td>
                    </tr>
                </table>

        	</div> 
        </div>
    </div>
    </body>
</html>