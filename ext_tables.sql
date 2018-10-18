#
# Table structure for table 'tx_phpunitexample_domain_model_foo'
#
CREATE TABLE tx_phpunitexample_domain_model_foo (

	field1 varchar(255) DEFAULT '' NOT NULL,
	field2 varchar(255) DEFAULT '' NOT NULL,
	field3 varchar(255) DEFAULT '' NOT NULL,
	bar_relation int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_phpunitexample_domain_model_bar'
#
CREATE TABLE tx_phpunitexample_domain_model_bar (

	foo int(11) unsigned DEFAULT '0' NOT NULL,

	field1 int(11) unsigned DEFAULT '0',
	field2 int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_phpunitexample_domain_model_bar'
#
CREATE TABLE tx_phpunitexample_domain_model_bar (

	foo int(11) unsigned DEFAULT '0' NOT NULL,

);
