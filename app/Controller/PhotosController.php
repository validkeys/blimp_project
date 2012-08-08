<?php
App::uses('AppController', 'Controller');
/**
 * Photos Controller
 *
 * @property Photo $Photo
 */
class PhotosController extends AppController {

	var $components = array
	(
		'Attachment'	=> array
		(
			'files_dir'				=> "img",
			'rm_tmp_file'			=> false, //remove temp image after resizing
			'allow_non_image_files'	=> false,
			'default_col'			=> 'Photo', // default prefix | defaults to model name
			'images_size'			=> array
			(
				'large'		=> array(1936,2592,'resize'), //w,h,crop (resize, resizeCrop, crop)
				'med'		=> array(1000,1000,'resizeCrop'),
				'small'		=> array(200, 268, 'resize')
			)
		)
	);


	function beforeFilter(){
		parent::beforeFilter();
		$this->layout = "default_bootstrap";
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {

			$alloweable_orgs = array('date','time','rabbit');

			$org = "date";

			if(!empty($this->passedArgs) && isset($this->passedArgs['org']) && in_array($this->passedArgs['org'], $alloweable_orgs)){
				$org = $this->passedArgs['org'];
			}

			$this->autoRender = false;
			$this->Photo->recursive = 0;
			// $this->set('photos', $this->Photo->find('all'));

			switch ($org) {
				case 'time':
					$photos = $this->Photo->find_by_time('2012-08-07','17:00:00','22:00:00');
					break;
				
				default:
					// Default to the last 7 days
					$start_date = date('Y-m-d',strtotime('-7 Days'));
					$end_date 	= date('Y-m-d');
					if(isset($this->passedArgs['start_date']) && isset($this->passedArgs['end_date'])){
						$start_date = date('Y-m-d',strtotime($this->passedArgs['start_date']));
						$end_date 	= date('Y-m-d',strtotime($this->passedArgs['end_date']));							
					}
					$photos = $this->Photo->find_by_date($start_date,$end_date);
					break;
			}

			$this->set('photos', $photos);
			$this->set('org', $org);
			$this->render('index_'.$org);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Invalid photo'));
		}
		$this->set('photo', $this->Photo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Photo->create();
			if($tmp = $this->Attachment->upload($this->request->data['Photo'])){
				$this->log($this->request->data, LOG_DEBUG);	
			}
			


			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('The photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The photo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function edit($id = null) {
	// 	$this->Photo->id = $id;
	// 	if (!$this->Photo->exists()) {
	// 		throw new NotFoundException(__('Invalid photo'));
	// 	}
	// 	if ($this->request->is('post') || $this->request->is('put')) {
	// 		if ($this->Photo->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The photo has been saved'));
	// 			$this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The photo could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$this->request->data = $this->Photo->read(null, $id);
	// 	}
	// }

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function delete($id = null) {
	// 	if (!$this->request->is('post')) {
	// 		throw new MethodNotAllowedException();
	// 	}
	// 	$this->Photo->id = $id;
	// 	if (!$this->Photo->exists()) {
	// 		throw new NotFoundException(__('Invalid photo'));
	// 	}
	// 	if ($this->Photo->delete()) {
	// 		$this->Session->setFlash(__('Photo deleted'));
	// 		$this->redirect(array('action' => 'index'));
	// 	}
	// 	$this->Session->setFlash(__('Photo was not deleted'));
	// 	$this->redirect(array('action' => 'index'));
	// }
}
