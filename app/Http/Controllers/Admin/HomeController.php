<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $systemInfo = array();
        $systemInfo["php_version"] = PHP_VERSION;
        $systemInfo["server_os"] = PHP_OS;
        $systemInfo["max_upload"]= ini_get('file_uploads') ? ini_get('upload_max_filesize') : 'Disabled';
        $systemInfo["max_ex_time"] = ini_get('max_execution_time').' seconds';
        $systemInfo["ifcookie"] = isset($_COOKIE) ? "SUCCESS" : "FAIL";
        $systemInfo["db_version"] = function_exists('mysql_get_server_info') ? @mysql_get_server_info() : "unknow";
        $systemInfo["max_ex_time"] = ini_get('max_execution_time').' seconds';
        $systemInfo["sys_mail"]    = ini_get('sendmail_path') ? 'Unix Sendmail ( Path: '.ini_get('sendmail_path').')' : ( ini_get('SMTP') ? 'SMTP ( Server: '.ini_get('SMTP').')': 'Disabled' );

        if(!$systemInfo["db_version"] || $systemInfo["db_version"]=="unknow"){
            ob_start(); 
            phpinfo(INFO_MODULES); 
            $info = ob_get_contents(); 
            ob_end_clean(); 
            $info = stristr($info, 'Client API version'); 
            preg_match('/[1-9].[0-9].[1-9][0-9]/', $info, $match); 
            $gd = $match[0]; 
            $systemInfo["db_version"] = $gd;
        }
        


        // GD相关 
        if (function_exists('gd_info')){
            $gdInfo = gd_info();
            $systemInfo["gdsupport"] = true; 
            $systemInfo["gdversion"] = $gdInfo["GD Version"]; 
        } else { 
            $systemInfo["gdsupport"] = false; 
            $systemInfo["gdversion"] = ''; 
        } 

        // 安全模式 
        $systemInfo["safemode"] = ini_get("safe_mode"); 
          
        // 注册全局变量 
        $systemInfo["registerglobals"] = ini_get("register_globals"); 
          
        // 开启魔术引用 
        $systemInfo["magicquotes"] = (function_exists("get_magic_quotes_gpc") && get_magic_quotes_gpc());

        //pdo
        /*$db = new Pdo_Mysql(CFG_DB_HOST, CFG_DB_NAME, CFG_DB_USER, CFG_DB_PWD);
        $sql = "SELECT * FROM `users` WHERE `uid`='".$uid."'";
        $result = $db->query($sql);
        $rows = $result->fetch(PDO::FETCH_ASSOC);
        if($rows){
            $systemInfo['username'] = $rows['username'];
            $systemInfo['login_total'] = $rows['login_total'];
            $systemInfo['error_total'] = $rows['error_total'];
            $systemInfo['last_login_time'] = $rows['last_login_time'];
            $systemInfo['last_login_ip'] = $rows['last_login_ip'];
            $systemInfo['last_login_time2'] = $rows['last_login_time2'];
            $systemInfo['last_login_ip2'] = $rows['last_login_ip2'];
        }*/

            $systemInfo['username'] = "100000";
            $systemInfo['login_total'] = "100000";
            $systemInfo['error_total'] = "100000";
            $systemInfo['last_login_time'] = "100000";
            $systemInfo['last_login_ip'] = "100000";
            $systemInfo['last_login_time2'] = "100000";
            $systemInfo['last_login_ip2'] = "100000";

        return view('admin.index.index', compact('systemInfo'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {


    }
}
