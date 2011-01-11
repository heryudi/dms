<?php
class AccountPhonesController extends AppController {

	var $name = 'AccountPhones';

	function index() {
		$this->AccountPhone->recursive = 0;
		$this->set('accountPhones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid account phone', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('accountPhone', $this->AccountPhone->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AccountPhone->create();
			if ($this->AccountPhone->save($this->data)) {
				$this->Session->setFlash(__('The account phone has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account phone could not be saved. Please, try again.', true));
			}
		}
		$accounts = $this->AccountPhone->Account->find('list');
		$this->set(compact('accounts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid account phone', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AccountPhone->save($this->data)) {
				$this->Session->setFlash(__('The account phone has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account phone could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AccountPhone->read(null, $id);
		}
		$accounts = $this->AccountPhone->Account->find('list');
		$this->set(compact('accounts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for account phone', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AccountPhone->delete($id)) {
			$this->Session->setFlash(__('Account phone deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Account phone was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>