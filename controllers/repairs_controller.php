<?php
class RepairsController extends AppController {

	var $name = 'Repairs';

	function index() {
		$this->Repair->recursive = 0;
		$this->set('repairs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid repair', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('repair', $this->Repair->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Repair->create();
			if ($this->Repair->save($this->data)) {
				$this->Session->setFlash(__('The repair has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repair could not be saved. Please, try again.', true));
			}
		}
		$complaints = $this->Repair->Complaint->find('list');
		$labours = $this->Repair->Labour->find('list');
		$invoices = $this->Repair->Invoice->find('list');
		$this->set(compact('complaints', 'labours', 'invoices'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid repair', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Repair->save($this->data)) {
				$this->Session->setFlash(__('The repair has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repair could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Repair->read(null, $id);
		}
		$complaints = $this->Repair->Complaint->find('list');
		$labours = $this->Repair->Labour->find('list');
		$invoices = $this->Repair->Invoice->find('list');
		$this->set(compact('complaints', 'labours', 'invoices'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for repair', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Repair->delete($id)) {
			$this->Session->setFlash(__('Repair deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Repair was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>