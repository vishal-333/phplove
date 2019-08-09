<?php
/**
 * 
 */
class PostsController extends AppController
{
	// public function loginview()
	// {
	// 	//$this->layout = 'defaultmy';
	// }
	public function home()
	{
		$this->set('posts',$this->Post->find('all'));
	}

	public function view($id = null)
	{
		$id = $this->request->params['named']['id'];
		//debug($this->request->params['named']['id']);
		//exit;

		if (empty($id)) {
		    throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		// debug($post);exit();
		if (empty($post)) {
		    throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);
	}

	public function add()
	{
		if ($this->request->is('post')) {
			$this->Post->create();
			if($this->Post->save($this->request->data)){
				$this->Session->setFlash('Your post is added.');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('Unable to add your post');
		}
	}

	public function index()
	{
		$this->set('posts',$this->Post->find('all'));
	}

	public function edit($id)
	{
		if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		}
		$post = $this->Post->findById($id);
		if (!$post) {
		        throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
		       $this->Post->id = $id;
		       if ($this->Post->save($this->request->data)) {
		           $this->Session->setFlash('Your post has been updated.');
		           return $this->redirect(array('action' => 'index'));
		       }
		       $this->Session->setFlash('Unable to update your post.');
		}
		if (!$this->request->data) {
		        $this->request->data = $post;
		}
			
	}
	public function delete()
	{
		$id = $this->request->params['id'];
		
		$this->autoRender = false;// no view for this method
		// if ($this->request->is('get')) {
		//         throw new MethodNotAllowedException();
		// }
		?>
		
		<?php
		if ($this->Post->delete($id)) {
		        $this->Session->setFlash('The post with id: %s has been deleted.');//,($id)
		} else {
		    $this->Session->setFlash('The post with id: %s could not be deleted.');//, ($id)
		}
		 	return $this->redirect(array('action' => 'index'));
	}
}
