<?php
class TopicsController extends AppController {

	var $name = 'Topics';
	var $helpers = array('Html', 'Form');

	function index($userId = 0) {
	    $userId = intval($userId);
	    if($userId <= 0 || !$this->Topic->User->hasAny(array('User.id' => $userId))) {
	        $this->Session->setFlash('選擇的使用者不存在！');
	        $this->redirect(array('controller' => 'users', 'action'=>'index'));
	    }
		$this->Topic->recursive = 0;
		$this->paginate['Topic'] = array(
		    'order' => array('Topic.sort ASC'),
		);
		$this->set('topics', $this->paginate($this->Topic, array('Topic.user_id' => $userId)));
		$this->set('userId', $userId);
	}

	function sort($userId = 0) {
	    $userId = intval($userId);
	    if($userId > 0 && $this->Topic->User->find('count', array(
            'conditions' => array(
                'User.id' => $userId,
            ),
        )) == 1 && $this->Topic->find('count', array(
            'conditions' => array(
                'Topic.id' => array_keys($_POST),
                'Topic.user_id' => $userId,
            ),
        )) == count($_POST)) {
            foreach($_POST AS $topicId => $sort) {
                $this->Topic->save(array('Topic' => array(
                    'id' => $topicId,
                    'sort' => $sort,
                )));
            }
        }
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Topic.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('topic', $this->Topic->read(null, $id));
	}

	function add($userId = 0) {
	    $userId = intval($userId);
	    if($userId <= 0 || !$this->Topic->User->hasAny(array('User.id' => $userId))) {
	        $this->Session->setFlash('選擇的使用者不存在！');
	        $this->redirect(array('controller' => 'users', 'action'=>'index'));
	    }
		if (!empty($this->data)) {
			$this->Topic->create();
			$this->data['Topic']['user_id'] = $userId;
			if ($this->Topic->save($this->data)) {
				$this->Session->setFlash(__('The Topic has been saved', true));
				$this->redirect(array('action'=>'index', $userId));
			} else {
				$this->Session->setFlash(__('The Topic could not be saved. Please, try again.', true));
			}
		}
		$this->set('userId', $userId);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Topic', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Topic->save($this->data)) {
				$this->Session->setFlash(__('The Topic has been saved', true));
				$this->redirect(array('action'=>'index', $this->Topic->field('user_id')));
			} else {
				$this->Session->setFlash(__('The Topic could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Topic->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id || !$userId = $this->Topic->field('user_id', array('Topic.id' => $id))) {
			$this->Session->setFlash(__('Invalid id for Topic', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Topic->del($id)) {
			$this->Session->setFlash(__('Topic deleted', true));
			$this->redirect(array('action'=>'index', $userId));
		}
	}


	function admin_index() {
		$this->Topic->recursive = 0;
		$this->set('topics', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Topic.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('topic', $this->Topic->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Topic->create();
			if ($this->Topic->save($this->data)) {
				$this->Session->setFlash(__('The Topic has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Topic could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Topic->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Topic', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Topic->save($this->data)) {
				$this->Session->setFlash(__('The Topic has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Topic could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Topic->read(null, $id);
		}
		$users = $this->Topic->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Topic', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Topic->del($id)) {
			$this->Session->setFlash(__('Topic deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>