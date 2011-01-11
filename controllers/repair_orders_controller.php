<?php
class RepairOrdersController extends AppController {

	var $name = 'RepairOrders';

	function index() {
		$this->RepairOrder->recursive = 0;
		$this->set('repairOrders', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid repair order', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('repairOrder', $this->RepairOrder->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->RepairOrder->create();
			if ($this->RepairOrder->save($this->data)) {
				$this->Session->setFlash(__('The repair order has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repair order could not be saved. Please, try again.', true));
			}
		}
		$vehicles = $this->RepairOrder->Vehicle->find('list');
		$contacts = $this->RepairOrder->Contact->find('list');
		$parentRepairOrders = $this->RepairOrder->ParentRepairOrder->find('list');
		$this->set(compact('vehicles', 'contacts', 'parentRepairOrders'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid repair order', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->RepairOrder->save($this->data)) {
				$this->Session->setFlash(__('The repair order has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repair order could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RepairOrder->read(null, $id);
		}
		$vehicles = $this->RepairOrder->Vehicle->find('list');
		$contacts = $this->RepairOrder->Contact->find('list');
		$parentRepairOrders = $this->RepairOrder->ParentRepairOrder->find('list');
		$this->set(compact('vehicles', 'contacts', 'parentRepairOrders'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for repair order', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RepairOrder->delete($id)) {
			$this->Session->setFlash(__('Repair order deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Repair order was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>