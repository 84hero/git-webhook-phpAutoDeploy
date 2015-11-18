<?php
/**
 * PROJECT git-webhook-phpAutoDeploy
 * FileName Bootstrap.php
 * Author: Yi Wu
 * Email: wushunyi@vip.qq.com
 * Time: 2015/11/19 0:15
 * description:
 *
 */
if(file_exists(DIR_ROOT.'/conf/config_local.php')){
    require_once(DIR_ROOT.'/conf/config_local.php');
}else require_once(DIR_ROOT.'/conf/config.php');

if(isset($_GET['deploy_token']) || trim($_GET['deploy_token']) !== DEPLOY_TOKEN ){
   die('Access Deny!');
}
