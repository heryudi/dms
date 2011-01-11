<?php
class ComplaintsController extends AppController {

	var $name = 'Complaints';

	function index() {
		$this->Complaint->recursive = 0;
		$this->set('complaints', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid complaint', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('complaint', $this->Complaint->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Complaint->create();
			if ($this->Complaint->save($this->data)) {
				$this->Session->setFlash(__('The complaint has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaint could not be saved. Please, try again.', true));
			}
		}
		$repairOrders = $this->Complaint->RepairOrder->find('list');
		$this->set(compact('repairOrders'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid complaint', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Complaint->save($this->data)) {
				$this->Session->setFlash(__('The complaint has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaint could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Complaint->read(null, $id);
		}
		$repairOrders = $this->Complaint->RepairOrder->find('list');
		$this->set(compact('repairOrders'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for complaint', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Complaint->delete($id)) {
			$this->Session->setFlash(__('Complaint deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Complaint was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>