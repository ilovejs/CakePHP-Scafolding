<?php
/**
 * Naming Kits
 * http://inflector.cakephp.org/
 */

/**
 * Controller Convention: CamelCase/Plurized
 */
class ItemsController extends AppController{
    /**
     * Controller function conventions: camelCase(lowercase first word), No underscores
     * underscore is only for private methods
     */

    //Missing its implementation will trigger 'ItemController is missing' error
    public function view($id = null){
        //this->Model
        if(! $id){
            //localization string
            throw new NotFoundException(__("ID is not set."));
        }
        $data = $this->Item->findById($id);

        if(! $data){
            throw new NotFoundException(__("ID was not in database"));
        }
        $this->set('item', $data);
    }

    public function index(){
//        $this->set('color', 'blue');
        $data = $this->Item->find('all', array('order' => 'year'));
        $count =$this->Item->find('count');
        $info = array(
            'items' => $data,
            'count' => $count
        );

//        $this->set('count', $count);
//        $this->set('items', $data);

        //no name
        $this->set($info);

    }

    public function search(){

    }

    public function _countItems(){

    }
}

/**
 * Naming Views - 1.name after the controller function they display
 *                2.all lowercase
 *                3.underscore to separate multiple words
 * Example
 * cakes() -> cakes.ctp
 * favoriteCookies() -> favorite_cookies.ctp
 *
 * Locate view folder
 * /Desserts/favorite_cookies.ctp
 * Desserts is controller, then function
 */