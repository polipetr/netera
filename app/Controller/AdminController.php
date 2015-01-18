<?php

App::uses('AppController', 'Controller');

class AdminController extends AppController {
     public $uses = array(
        'News'
    );

   public function index(){
       
       $data=$this->News->find('all');
       
      if ($this->request->is('post')) {
         $id=$this->request->data['News']['id'];
         $view=1; 
          $this->News->query("UPDATE news SET view=$view WHERE id=$id");
      }
      
       
       $this->set('data',$data);
       
   }

}
