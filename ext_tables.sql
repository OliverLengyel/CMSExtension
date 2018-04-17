CREATE TABLE tx_storeinventory_domain_model_product (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	description text NOT NULL,
	quantity int(11) DEFAULT '0' NOT NULL,
	bewertungen int(11) NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

CREATE TABLE tx_storeinventory_domain_model_bewertung (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	autor varchar(255) DEFAULT '' NOT NULL,
	description text NOT NULL,
	product int(11) NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);
