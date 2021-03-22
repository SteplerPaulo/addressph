<?php
class MunicipalitiesController extends AppController {

	var $name = 'Municipalities';

	function index() {
		$this->Municipality->recursive = 0;
		$this->set('municipalities', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid municipality', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('municipality', $this->Municipality->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Municipality->create();
			if ($this->Municipality->save($this->data)) {
				$this->Session->setFlash(__('The municipality has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.', true));
			}
		}
		$provinces = $this->Municipality->Province->find('list');
		$this->set(compact('provinces'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid municipality', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Municipality->save($this->data)) {
				$this->Session->setFlash(__('The municipality has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipality could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Municipality->read(null, $id);
		}
		$provinces = $this->Municipality->Province->find('list');
		$this->set(compact('provinces'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for municipality', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Municipality->delete($id)) {
			$this->Session->setFlash(__('Municipality deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Municipality was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
