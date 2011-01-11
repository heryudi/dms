<?php
class LaboursController extends AppController {

	var $name = 'Labours';

	function index() {
		$this->Labour->recursive = 0;
		$this->set('labours', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid labour', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('labour', $this->Labour->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Labour->create();
			if ($this->Labour->save($this->data)) {
				$this->Session->setFlash(__('The labour has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The labour could not be saved. Please, try again.', true));
			}
		}
		$types = $this->Labour->Type->find('list');
		$this->set(compact('types'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid labour', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Labour->save($this->data)) {
				$this->Session->setFlash(__('The labour has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The labour could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Labour->read(null, $id);
		}
		$types = $this->Labour->Type->find('list');
		$this->set(compact('types'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for labour', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Labour->delete($id)) {
			$this->Session->setFlash(__('Labour deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Labour was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>