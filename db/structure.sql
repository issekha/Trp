drop table if exists t_ticket;
drop table if exists t_commande;


create table t_commande (
    comd_id integer not null primary key auto_increment,
    comd_email varchar(50) not null,
    comd_rate varchar(50) not null,
	comd_date datetime not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_ticket (
    tck_id integer not null primary key auto_increment,
	comd_id integer not null,
	tck_fname varchar(50) not null,
	tck_name varchar(50) not null,
    tck_date datetime not null,
    tck_rate integer not null,
	tck_country varchar(50) not null,
	constraint fk_tck_comd foreign key(comd_id) references t_commande(comd_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;
