CREATE TABLE tx_staff_domain_model_member (
  uid INT(11) NOT NULL AUTO_INCREMENT,
  pid INT(11) DEFAULT '0' NOT NULL,
  
  first_name VARCHAR(255) DEFAULT '' NOT NULL,
  last_name VARCHAR(255) DEFAULT '' NOT NULL,
  title VARCHAR(255) DEFAULT '' NOT NULL,
  position VARCHAR(255) DEFAULT '' NOT NULL,
  description TEXT,
  image INT(11) DEFAULT '0',
  slug VARCHAR(2048) DEFAULT '' NOT NULL,

  tstamp INT(11) DEFAULT '0' NOT NULL,
  crdate INT(11) DEFAULT '0' NOT NULL,
  cruser_id INT(11) DEFAULT '0' NOT NULL,
  deleted TINYINT(4) DEFAULT '0' NOT NULL,
  hidden TINYINT(4) DEFAULT '0' NOT NULL,
  starttime INT(11) DEFAULT '0' NOT NULL,
  endtime INT(11) DEFAULT '0' NOT NULL,
  sorting INT(11) DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);
