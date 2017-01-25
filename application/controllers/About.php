<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome
 *
 * @author Michael
 */
class About extends Application {
    
    public function index()
    {
       // $this->load->view('About');
         $this->data['pagebody']='About';
        $this->render();
    }
}