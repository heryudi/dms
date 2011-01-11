<?php
class ContactPhonesController extends AppController {

	var $name = 'ContactPhones';

	function index() {
		$this->ContactPhone->recursive = 0;
		$this->set('contactPhones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contact phone', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contactPhone', $this->ContactPhone->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ContactPhone->create();
			if ($this->ContactPhone->save($this->data)) {
				$this->Session->setFlash(__('The contact phone has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact phone could not be saved. Please, try again.', true));
			}
		}
		$contacts = $this->ContactPhone->Contact->find('list');
		$this->set(compact('contacts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contact phone', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ContactPhone->save($this->data)) {
				$this->Session->setFlash(__('The contact phone has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact phone could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContactPhone->read(null, $id);
		}
		$contacts = $this->ContactPhone->Contact->find('list');
		$this->set(compact('contacts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contact phone', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContactPhone->delete($id)) {
			$this->Session->setFlash(__('Contact phone deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contact phone was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>