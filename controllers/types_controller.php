<?php
class TypesController extends AppController {

	var $name = 'Types';

	function index() {
		$this->Type->recursive = 0;
		$this->set('types', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('type', $this->Type->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Type->create();
			if ($this->Type->save($this->data)) {
				$this->Session->setFlash(__('The type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type could not be saved. Please, try again.', true));
			}
		}
		$labours = $this->Type->Labour->find('list');
		$this->set(compact('labours'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Type->save($this->data)) {
				$this->Session->setFlash(__('The type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Type->read(null, $id);
		}
		$labours = $this->Type->Labour->find('list');
		$this->set(compact('labours'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Type->delete($id)) {
			$this->Session->setFlash(__('Type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>