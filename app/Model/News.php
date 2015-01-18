<?php

class News extends AppModel {
    
    public $hasAndBelongsToMany = 'Image';

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
      
        'title' => array(
            'rule' => 'notEmpty'
        ),
         'email' => array(
            'rule' => 'notEmpty'
        ),
       
         'description' => array(
            'rule' => 'notEmpty'
        ),
        
    );
    
     public function afterSave($created, $options = array()) {
        parent::afterSave($created, $options);

        // Send notification emails on creation
       
     
             $this->sendEmail();
         
    }
    
    public function sendEmail() {
        
         $email=$this->data['News']['email'];
        //bibliotekata ne kachena;
         require_once(DESKTOP_PATH . 'Vendor' . DS . 'Mandril' . DS . 'Mandrill.php');
         $mandrill = new Mandrill('uOaJLuxH1HHp0FcugWDzfw');
         
         $message = array(
            'subject' => 'Email',
            'from_email' => 'stefan@abv.bg',
            'html' => "Чакане за потвърждение",
            'to' => $email
            , 'merge_vars' => array(array(
                    'rcpt' => 'stefan.brojdenov@gmail.com',
                    'vars' =>
                    array(
                        array(
                            'name' => 'FIRSTNAME',
                            'content' => 'Recipient 1 first name'),
                        array(
                            'name' => 'LASTNAME',
                            'content' => 'Last name')
        ))));
    
         
         $mandrill->messages->send($message, $async = false, $ip_pool = null, $send_at = null);
    }

}
