<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProductsController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $uses = array('Product','Category','Quantity','Order');
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
	    $this->checkSession();
		$this->layout='admin';
		$this->Product->recursive = 0;
		$this->set('products', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	    $this->checkSession();
		$this->layout='admin';
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	    $this->checkSession();
		$this->layout='admin';
		
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
			    $product_id = $this->Product->getLastInsertId();
				$Quantities = $this->request->data['Quantity']['size']; 
				foreach($Quantities as $size=>$quantity){
					$this->request->data['Quantity']['category_id'] = $this->request->data['Product']['category_id'];
					$this->request->data['Quantity']['product_id'] = $product_id;
					$this->request->data['Quantity']['size'] =  $size;
					$this->request->data['Quantity']['quantity'] =  $quantity;
		            $this->Quantity->create();
			        $this->Quantity->save($this->request->data);
				}
				$this->Session->setFlash(__('<p class="bg-success" style="padding:10px;">The product has been saved.</p>'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p class="bg-danger" style="padding:10px;">The product could not be saved. Please, try again.</p>'));
			}
		}
		$categories = $this->Product->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	    $this->checkSession();
		$this->layout='admin';
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Product->save($this->request->data)) {
			    $Quantities = $this->request->data['Quantity']['size']; 
				foreach($Quantities as $size=>$quantity){
					$this->request->data['Quantity']['category_id'] = $this->request->data['Product']['category_id'];
					$this->request->data['Quantity']['size'] =  $size;
					$this->request->data['Quantity']['quantity'] =  $quantity;
			        $this->Quantity->updateAll(array('Quantity.quantity' => $quantity),array('Quantity.category_id' => $this->request->data['Product']['category_id'],'Quantity.product_id' => $this->request->data['Product']['id'],'Quantity.size'=>$size));
				}
				$this->Session->setFlash(__('<p class="bg-success" style="padding:10px;">The product has been saved.</p>'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p class="bg-danger" style="padding:10px;">The product could not be saved. Please, try again.</p>'));
			}
		} else {
			$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
			$this->request->data = $this->Product->find('first', $options);
			$Quantities = $this->request->data['Quantity']; 
				foreach($Quantities as $quantity){
				  if($this->request->data['Product']['id'] == $quantity['product_id']){
				    $this->request->data['Quantity']['id'][$quantity['size']] = $quantity['id'];
					$this->request->data['Quantity']['category_id'] = $quantity['category_id'];
					$this->request->data['Quantity']['product_id'] = $quantity['product_id'];
					$this->request->data['Quantity']['size'][$quantity['size']] =  $quantity['quantity'];
				  }
				}
		}
		$categories = $this->Product->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
	    $this->checkSession();
		$this->layout='admin';
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('<p class="bg-success" style="padding:10px;">The product has been deleted.</p>'));
		} else {
			$this->Session->setFlash(__('<p class="bg-danger" style="padding:10px;">The product could not be deleted. Please, try again.</p>'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function ajaxProductsList($cat_id) {
	    $this->checkSession();
		$this->layout='admin';
		$conditions = array('conditions' => array('Product.category_id' => $cat_id));
		$products = $this->Product->find('all', $conditions);
		
	    echo '<div class="col-sm-10" >';
		echo "<label for='OrderProductId'>Product</label>";
        echo '<select name="data[Order][product_id]" class="form-control"  id="OrderProductId" onChange="OrderProduct(this.value)">';
		echo '<option value="">Select Category</option>';
		foreach($products as $product){
		 $id = $product['Product']['id'];
		 $prodname = $product['Product']['name'];
		 echo "<option value=$id>$prodname</option>";
		}
		echo '</select>';	
		echo '</div>';
		exit;
	}
	
	public function ajaxProductdetails($prod_id) {
	    $this->checkSession();
		$this->layout='admin';
		$conditions = array('conditions' => array('Product.id' => $prod_id));
		$product = $this->Product->find('first', $conditions);
        $model_no = $product['Product']['model_no'];
		$retail_price = $product['Product']['retail_price'];
        echo "<div class='col-sm-5'>Model No: $model_no</div>";
		echo "<div class='col-sm-5'>Price Rs: $retail_price</div>";
		exit;
	}
}