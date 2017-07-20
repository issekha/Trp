create database if not exists trp character set utf8 collate utf8_unicode_ci;
use trp;

grant all privileges on trp.* to 'trp_user'@'localhost' identified by 'secret';
