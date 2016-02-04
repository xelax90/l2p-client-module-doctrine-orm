<?php
namespace L2PClientModuleDoctrineORM;

use L2PClient\Storage\StorageInterface as L2PStorage;

return array(
	'service_manager' => array(
		'invokables' => array(
		),
		'factories' => array(
			L2PStorage::class => Service\DoctrineStorage::class,
			Storage\DoctrineStorage::class => Service\DoctrineStorage::class,
		),
	),
	
    'doctrine' => array(
        'driver' => array(
            'l2pclient_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/xml/l2pclient'
            ),

            'orm_default' => array(
                'drivers' => array(
                    'L2PClient\Token'  => 'l2pclient_entity'
                )
            )
        )
    ),
);