<?php

/**
 * Saves some user infos of the ones that press OK
 */
include_once 'cookies-box-config.php';

if ($enableSave) {
    /**
     * Database connection
     */
    $dns = "mysql:host=" . $host . ";dbname=" . $database;
    $dbh = new PDO($dns, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /**
     * User infos
     */
    $ip = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $page = $_SERVER['HTTP_REFERER'];

    $stmtCreate = $dbh->prepare('CREATE TABLE IF NOT EXISTS `' . $database . '`.`cookies-box` (
                                    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                                    `ip` varchar(20) NOT NULL,
                                    `user-agent` text NOT NULL,
                                    `page` text NOT NULL,
                                    `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                                    PRIMARY KEY (`id`)
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
    $stmtCreate->execute();

    $stmtInsert = $dbh->prepare('INSERT INTO `cookies-box` (ip,`user-agent`,`page`) VALUES(?,?,?)');
    $stmtInsert->execute(array($ip, $userAgent, $page));
}

?>