<?php

App::uses('AppController', 'Controller');

class SubcategoriesController extends AppController {
    
    public function beforeFilter() {
        $this->Auth->allow('getByCategory');
    }

    public function getByCategory() {
        $category_id = $this->request->data['Shipment']['category_id'];

        $subcategories = $this->Subcategory->getSubcategoriesByCategory($category_id);

        $this->set('subcategories', $subcategories);
        $this->layout = 'ajax';
    }

}
