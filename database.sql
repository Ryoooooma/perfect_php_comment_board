create database perfect_php_comment_board;

use perfect_php_comment_board;

create table post (
	id int not null auto_increment primary key,
	name varchar(40),
	comment varchar(200),
	created datetime,
	modified datetime
);