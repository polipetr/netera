<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {

    public $helpers = array('Html', 'Form');
    public $uses = array(
        'News'
        , 'Image'
    );

    public function index() {
        $data = $this->News->find('all',array(
            'conditions'=>array(
                'News.view'=>1
            )
        ));
        
        
        
        $this->set('data',$data);
    }

    public function add() {
        $error = null;
        $image = $this->Image->find('all');


        if ($this->request->is('post')) {
            $this->News->create();
            if ($this->News->saveAssociated($this->request->data, array('deep' => true))) {

                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                    __('The user could not be saved. Please, try again.')
            );


            $error = $this->News->validationErrors;
        }
        $this->set('error', $error);
        $this->set('image', $image);
    }

}
