<?php
class PartTransactionsController extends AppController {

	var $name = 'PartTransactions';

	function index() {
		$this->PartTransaction->recursive = 0;
		$this->set('partTransactions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid part transaction', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('partTransaction', $this->PartTransaction->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PartTransaction->create();
			if ($this->PartTransaction->save($this->data)) {
				$this->Session->setFlash(__('The part transaction has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The part transaction could not be saved. Please, try again.', true));
			}
		}
		$parts = $this->PartTransaction->Part->find('list');
		$repairOrders = $this->PartTransaction->RepairOrder->find('list');
		$contacts = $this->PartTransaction->Contact->find('list');
		$invoices = $this->PartTransaction->Invoice->find('list');
		$this->set(compact('parts', 'repairOrders', 'contacts', 'invoices'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid part transaction', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PartTransaction->save($this->data)) {
				$this->Session->setFlash(__('The part transaction has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The part transaction could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PartTransaction->read(null, $id);
		}
		$parts = $this->PartTransaction->Part->find('list');
		$repairOrders = $this->PartTransaction->RepairOrder->find('list');
		$contacts = $this->PartTransaction->Contact->find('list');
		$invoices = $this->PartTransaction->Invoice->find('list');
		$this->set(compact('parts', 'repairOrders', 'contacts', 'invoices'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for part transaction', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PartTransaction->delete($id)) {
			$this->Session->setFlash(__('Part transaction deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Part transaction was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>