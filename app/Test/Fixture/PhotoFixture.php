<?php
/**
 * PhotoFixture
 *
 */
class PhotoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rabbit_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'geo_long' => array('type' => 'float', 'null' => false, 'default' => null),
		'geo_lat' => array('type' => 'float', 'null' => false, 'default' => null),
		'date_taken' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'rabbit_id' => 1,
			'geo_long' => 1,
			'geo_lat' => 1,
			'date_taken' => '2012-08-06 11:23:56',
			'created' => '2012-08-06 11:23:56',
			'modified' => '2012-08-06 11:23:56'
		),
	);

}
