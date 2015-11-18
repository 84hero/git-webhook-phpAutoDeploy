<?php
/**
 * PROJECT git-webhook-phpAutoDeploy
 * FileName index.php
 * Author: Yi Wu
 * Email: wushunyi@vip.qq.com
 * Time: 2015/11/19 0:10
 * description:
 *
 */

define('DIR_ROOT',__DIR__);
require_once(DIR_ROOT.'src/Bootstrap.php');
$deploy = new Response();
$deploy->run();







