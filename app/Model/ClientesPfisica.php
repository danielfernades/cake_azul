<?php

App::uses('AppModel', 'Model');

/**
 * ClientesPfisica Model
 *
 */
class ClientesPfisica extends AppModel {

    public $validate = array(
        'nome' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Preencha o NOME do cliente'
            )
        ),
        'cpf' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Preencha o CPF'
            )
        ),
        'tipo_logradouro' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Informe o TIPO DO LOGRADOURO'
            )
        ),
        'logradouro' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Informe o LOGRADOURO'
            )
        ),
        'numero' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Informe o NÚMERO'
            )
        ),
        'bairro' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Informe o BAIRRO'
            )
        ),
        'cidade' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Informe a CIDADE'
            )
        ),
        'estado' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Informe o ESTADO'
            )
        ),
        'telefone_fixo' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Informe o telefone.'
            )
        )
    );

}
