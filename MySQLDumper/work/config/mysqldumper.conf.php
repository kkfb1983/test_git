<?php
#Vars - written at 2015-03-26
$dbhost="localhost";
$dbname="weiq";
$dbuser="root";
$dbpass="";
$dbport=3306;
$dbsocket="";
$compression=1;
$backup_path="E:/xampp/htdocs/test/MySQLDumper/work/backup/";
$logdatei="E:/xampp/htdocs/test/MySQLDumper/work/log/mysqldump_perl.log.gz";
$completelogdatei="E:/xampp/htdocs/test/MySQLDumper/work/log/mysqldump_perl.complete.log.gz";
$sendmail_call="\xampp\mailtodisk\mailtodisk.exe";
$nl="\n";
$cron_dbindex=-3;
$cron_printout=1;
$cronmail=0;
$cronmail_dump=0;
$cronmailto="";
$cronmailto_cc="";
$cronmailfrom="";
$cron_use_sendmail=1;
$cron_smtp="localhost";
$cron_smtp_port="25";
@cron_db_array=("201208hotel","201303hotelnews","201303news","bugtracker","cdcol","cmx_news","drupal","fxlbbs","hotel","hunsha","mediaforce","myshow_odin","performance_schema","phpmyadmin","schema","sugar","test","universal","webauth","weim","weiq","weirenwu","weirenwu_125","xmbj","yii");
@cron_dbpraefix_array=("","","","","","","","","","","","","","","","","","","","","","","","","");
@cron_command_before_dump=("","","","","","","","","","","","","","","","","","","","","","","","","");
@cron_command_after_dump=("","","","","","","","","","","","","","","","","","","","","","","","","");
@ftp_server=("","","");
@ftp_port=(21,21,21);
@ftp_mode=(0,0,0);
@ftp_user=("","","");
@ftp_pass=("","","");
@ftp_dir=("","","");
@ftp_timeout=(30,30,30);
@ftp_useSSL=(0,0,0);
@ftp_transfer=(0,0,0);
$mp=0;
$multipart_groesse=1048576;
$email_maxsize=3145728;
$auto_delete=0;
$max_backup_files=3;
$perlspeed=10000;
$optimize_tables_beforedump=1;
$logcompression=1;
$log_maxsize=1048576;
$complete_log=1;
$my_comment="";
?>