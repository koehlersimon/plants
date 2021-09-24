CREATE TABLE tx_plants_domain_model_family (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,
    categories int(11) unsigned DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '0' NOT NULL,
    slug varchar(255) DEFAULT '0' NOT NULL,
	description text NOT NULL,
	botanical_name varchar(255) DEFAULT '0' NOT NULL,
	media varchar(100) DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,
	fe_group varchar(100) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	l10n_state text,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY language (l10n_parent,sys_language_uid)

);

CREATE TABLE tx_plants_domain_model_plant (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,
    categories int(11) unsigned DEFAULT '0' NOT NULL,

	family int(11) DEFAULT '0' NOT NULL,
    title varchar(255) DEFAULT '0' NOT NULL,
    slug varchar(255) DEFAULT '0' NOT NULL,
	description text NOT NULL,
	cultivation text NOT NULL,
	health_benefits text NOT NULL,
	botanical_name varchar(255) DEFAULT '0' NOT NULL,
	media varchar(100) DEFAULT '0' NOT NULL,

	protein_content double(11,2) NOT NULL DEFAULT '0.00',
	iron_content double(11,2) NOT NULL DEFAULT '0.00',
	fiber_content double(11,2) NOT NULL DEFAULT '0.00',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,
	fe_group varchar(100) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	l10n_state text,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY language (l10n_parent,sys_language_uid)

);
