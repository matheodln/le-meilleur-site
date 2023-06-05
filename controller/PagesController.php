<?php
class PagesController extends Controller{
    function view($id = null){
        $this->loadModel('Item');
        $this->loadModel('Photo_Item');
        $items = $this->Item->find(array('order' => '(quantite_initial - quantite_actuel) DESC', 'limit' => '3'));
        $images = array();
        foreach($items as $k => $v):
            $images[$k] = $this->Photo_Item->findFirst(array('conditions' => array('Id_Item'=>$v->Nom)));
        endforeach;
        $this->set('images', $images);
    }

}
