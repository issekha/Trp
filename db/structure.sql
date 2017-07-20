drop table if exists t_ticket;
drop table if exists t_order;


create table t_order (
    ord_id integer not null primary key auto_increment,
    ord_email varchar(50) not null,
    ord_rate varchar(50) not null,
	ord_date datetime not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_ticket (
    tck_id integer not null primary key auto_increment,
	ord_id integer not null,
	tck_fname varchar(50) not null,
	tck_name varchar(50) not null,
    tck_date datetime not null,
    tck_rate integer not null,
	tck_country varchar(50) not null,
	constraint fk_tck_ord foreign key(ord_id) references t_order(ord_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;
