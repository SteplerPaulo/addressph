<?php
class BarangaysController extends AppController {

	var $name = 'Barangays';

	function index() {
		$this->Barangay->recursive = 0;
		$this->set('barangays', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid barangay', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('barangay', $this->Barangay->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Barangay->create();
			if ($this->Barangay->save($this->data)) {
				$this->Session->setFlash(__('The barangay has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The barangay could not be saved. Please, try again.', true));
			}
		}
		$municipalities = $this->Barangay->Municipality->find('list');
		$this->set(compact('municipalities'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid barangay', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Barangay->save($this->data)) {
				$this->Session->setFlash(__('The barangay has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The barangay could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Barangay->read(null, $id);
		}
		$municipalities = $this->Barangay->Municipality->find('list');
		$this->set(compact('municipalities'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for barangay', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Barangay->delete($id)) {
			$this->Session->setFlash(__('Barangay deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Barangay was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
