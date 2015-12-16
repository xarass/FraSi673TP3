<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '6',
			'username' => 'admin',
			'password' => '$2a$10$17IkLhP1lfJshKPLpyt8x.cSPPL5CsVeUP//iKkgIAjUar/0UGA.a',
			'role' => 'admin',
			'email' => 'simfra2@hotmail.com',
			'created' => '2015-09-25',
			'modified' => '2015-10-06',
			'active' => 1
		),
		array(
			'id' => '7',
			'username' => 'visiteur',
			'password' => '$2a$10$PlOZjvaHtLZQDIL8UVQ80ele3vATwfhrDClFd9DHc1PQ5sY4.z7Ii',
			'role' => 'super-user',
			'email' => 'simfra2@hotmail.com',
			'created' => '2015-09-25',
			'modified' => '2015-09-25',
			'active' => 0
		),
		array(
			'id' => '9',
			'username' => 'xaras',
			'password' => '$2a$10$T5w9ARHRaShKZW8MkA2OIeTNCids/EZEDYeADhi7.05ofq/F5Mg/m',
			'role' => 'super-user',
			'email' => 'simfra2@hotmail.com',
			'created' => '2015-10-03',
			'modified' => '2015-10-03',
			'active' => 0
		),
		array(
			'id' => '17',
			'username' => 'xarass',
			'password' => '$2a$10$nxKtl0XoWna3mhirrsH6QuRefIzwtqiYfkg/9iu.OtmUdbTi78nT6',
			'role' => 'super-user',
			'email' => 'simfra2@hotmail.com',
			'created' => '2015-10-03',
			'modified' => '2015-10-03',
			'active' => 0
		),
		array(
			'id' => '18',
			'username' => 'awef',
			'password' => '$2a$10$y3UTWhHqMEzsIWfrPlZy6OWiwUIoI/CyegzCCD73gJTaR3H6HcSsy',
			'role' => 'super-user',
			'email' => 'simfra2@hotmail.com',
			'created' => '2015-11-11',
			'modified' => '2015-11-11',
			'active' => 1
		),
		array(
			'id' => '20',
			'username' => 'aewff',
			'password' => '$2a$10$oMhyl15/vdMOooHd3VLDMu8BpIVMnl5hKZEr54Z4DwBq.Q6Tozasa',
			'role' => 'visiteur',
			'email' => 'simfra2@hotmail.com',
			'created' => '2015-12-03',
			'modified' => '2015-12-03',
			'active' => 0
		),
		array(
			'id' => '21',
			'username' => 'aewfff',
			'password' => '$2a$10$quXVlyOd4vnePPQAjQAMiul/.WCF/LbMUwRMXCiExTpATo9VPuaHm',
			'role' => 'visiteur',
			'email' => 'simfra2@hotmail.com',
			'created' => '2015-12-03',
			'modified' => '2015-12-03',
			'active' => 0
		),
		array(
			'id' => '22',
			'username' => 'aewffff',
			'password' => '$2a$10$MW5Lim/pH/Rcg6pYwYGQZuVoMPH25OIZOZ9JZ4vnJ2.y5XkmOOkDK',
			'role' => 'visiteur',
			'email' => 'sim.franc2@gmail.com',
			'created' => '2015-12-03',
			'modified' => '2015-12-03',
			'active' => 0
		),
		array(
			'id' => '23',
			'username' => 'aewffffa',
			'password' => '$2a$10$WOtYFBV3JrS5BobvTNa/2ucmDIGIFCIl6QKJzI6mE76NaNCUztqiu',
			'role' => 'visiteur',
			'email' => 'sim.franc2@gmail.com',
			'created' => '2015-12-03',
			'modified' => '2015-12-03',
			'active' => 0
		),
		array(
			'id' => '24',
			'username' => 'a',
			'password' => '$2a$10$WmiBPFUO9rABdS1NdO7Sh.GsIhoCNhPu9F9aTJapjndmfXlz43Ku2',
			'role' => 'visiteur',
			'email' => 'ecoletp2simon@gmail.com',
			'created' => '2015-12-03',
			'modified' => '2015-12-03',
			'active' => 0
		),
	);

}
