<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApplicationException
 *
 * @author vikra
 */
class ApplicationException extends Exception {

    public function errorMessage() {
        //error message
        $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
                . ': <b>' . $this->getMessage() ;
        return $errorMsg;
    }

}
