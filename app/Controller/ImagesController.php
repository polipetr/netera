<?php

App::uses('AppController', 'Controller');

class ImagesController extends AppController {

    public $uses = array(
        'Image'
        ,'News'
    );

    public function add() {
        $dir = WWW_ROOT . 'img';
       
        if ($this->request->is('post')) {
            $this->Image->create();
            $name=$this->request->data['Image']['filename']['name'];
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $title=$this->request->data['Image']['title'].'.'.$ext;                   
            $this->Image->set('ext', $ext);
           
            $this->Image->save($this->request->data);
            $this->Image->create();
            if(isset($name)){
            move_uploaded_file(
                    $this->request->data['Image']['filename']['tmp_name'], $dir ."/". $title
            );
            }elseif(!$name){
                 $this->set('error',"Не сте задали заглавие!");
            
            }
        }
        
    }

}
