<?php
class RegistrationsController extends AppController {

	var $name = 'Registrations';

	function index() {
		$this->Registration->recursive = 0;
		$this->set('registrations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid registration', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('registration', $this->Registration->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Registration->create();
			if ($this->Registration->save($this->data)) {
				$this->Session->setFlash(__('The registration has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registration could not be saved. Please, try again.', true));
			}
		}
		$vehicles = $this->Registration->Vehicle->find('list');
		$contacts = $this->Registration->Contact->find('list');
		$accounts = $this->Registration->Account->find('list');
		$this->set(compact('vehicles', 'contacts', 'accounts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid registration', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Registration->save($this->data)) {
				$this->Session->setFlash(__('The registration has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registration could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Registration->read(null, $id);
		}
		$vehicles = $this->Registration->Vehicle->find('list');
		$contacts = $this->Registration->Contact->find('list');
		$accounts = $this->Registration->Account->find('list');
		$this->set(compact('vehicles', 'contacts', 'accounts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for registration', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Registration->delete($id)) {
			$this->Session->setFlash(__('Registration deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Registration was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>