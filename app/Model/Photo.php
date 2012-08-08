<?php
App::uses('AppModel', 'Model');
/**
 * Photo Model
 *
 */
class Photo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	public $validate = array
	(
		'rabbit_id'	=> array
		(
			'there'		=> array
			(
				'rule'		=> 'notEmpty',
				'message'	=> 'required'
			),
			'number'	=> array
			(
				'rule'		=> 'numeric',
				'message'	=> 'must be numeric'
			)
		),
		'geo_long'				=> 'notEmpty',
		'geo_lat'				=> 'notEmpty',
		'Photo_file_path'		=> 'notEmpty',
		'Photo_file_name'		=> 'notEmpty',
		'Photo_file_size'		=> 'notEmpty',
		'Photo_content_type'	=> 'notEmpty'
	);


	// Finds photos between a date range
	// Then groups them by date in array
	public function find_by_date($start_date, $end_date){

		$photos = $this->find('all', array
			(
				'conditions'	=> array
				(
					'DATE(Photo.date_taken) BETWEEN ? AND ?' => array($start_date, $end_date)
				),
				'order'			=> array
				(
					'Photo.date_taken ASC'
				)
			)
		);

		$regroup = array();

		foreach ($photos as $photo) {
			$regroup[date('Y-m-d', strtotime($photo['Photo']['date_taken']))][] = $photo;
		}

		return $regroup;
	}


	// Finds photos between a date range
	// Then groups them by date in array
	public function find_by_time($date, $start_time, $end_time){

		$photos = $this->find('all', array
			(
				'conditions'	=> array
				(
					'DATE(Photo.date_taken)' => $date,
					'TIME(Photo.date_taken) BETWEEN ? AND ?'	=> array($start_time, $end_time)
				),
				'order'			=> array
				(
					'Photo.date_taken ASC'
				)
			)
		);

		$regroup = array();

		foreach ($photos as $photo) {
			$regroup[date('gA', strtotime($photo['Photo']['date_taken']))][] = $photo;
		}

		return $regroup;
	}

}
