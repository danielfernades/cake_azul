<?php

App::uses('AppModel', 'Model');

/**
 * ContaBancaria Model
 *
 * @property Banco $Banco
 */
class Conta extends AppModel {

    public $belongsTo = array('Banco');
    
}
