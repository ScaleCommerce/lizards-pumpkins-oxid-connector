OXID2LIZARDS Import:
=====================

Array to use in LizardAndPumpkins Product builder:

    private $products = [
        [
            'type_id'             => 'simple|configurable',
            'tax_class'           => 'STRING',
            'sku'                 => 'STRING',
            'images'              => [
                [
                    'main'  => 'BOOL',
                    'file'  => '/var/images/blub.png',
                    'label' => 'STRING',
                ]
            ],
            'attributes'          => [
                'category' => '123',
                'field'    => 'value',
            ],
            'associated_products' => [
                [
                    'sku'        => 'associated-product-1',
                    'tax_class'  => 4,
                    'attributes' => [
                        'stock_qty' => 12,
                        'visible'   => true,
                        'color'     => 'green',
                    ],
                ],
            ],
            'variations' => [
                'size',
                'color',
            ],
        ]
    ];