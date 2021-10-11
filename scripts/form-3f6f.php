<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Envío de Consulta',
    'email_message' => 'Tienes una nueva consulta',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'evilla@fundacionedison.org.ar',
    'to' => 'evilla@fundacionedison.org.ar'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>