/*文章表*/
CREATE TABLE article(
	id  int auto_increment not null primary key,
	uid int not null,
	title varchar(60) not null,
	tags varchar(60) not null,
	text text ,
	classify_id int not null,
	page_view int not null default 0,
	likenum_int int not null default 0,
	created_at char(12),
	updated_at char(12)
)ENGINE=innodb;
/*用户表*/
CREATE TABLE users(
	id int auto_increment not null primary key,
	name varchar(20) not null,
	password varchar(60) not null,
	token varchar(255) not null,
	created_at char(12),
	updated_at char(12)
)ENGINE=innodb;
/*相册表*/
CREATE TABLE photo(
	id int auto_increment not null primary key,
	uid int not null,
	title varchar(60) not null,
	adddress varchar(255) not null,
	url varchar(100) not null,
	created_at char(12),
	updated_at char(12)
)ENGINE=innodb;
/*评论表*/
CREATE TABLE commment(
	id int auto_increment not null primary key,
	uid int not null,
	selected_id int not null,
	article_id int not null,
	created_at char(12),
	updated_at char(12)
)ENGINE=innodb;
/*分类表*/
CREATE TABLE classify(
	id int auto_increment not null primary key,
	name varchar(20) not null,
	detaill varchar(20) not null,
	created_at char(12),
	updated_at char(12)
)ENGINE=innodb;
