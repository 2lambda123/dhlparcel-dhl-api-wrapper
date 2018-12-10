<?php
return array (
  'createLabel' =>
  array (
    'httpMethod' => 'POST',
    'uri' => '/labels',
    'responseModel' => 'getResponse',
    'parameters' =>
    array (
      'body' =>
      array (
        'description' => 'LabelSpecification',
        'type' => 'object',
        'required' => true,
        'location' => 'body',
        'properties' =>
        array (
          'labelId' =>
          array (
            'name' => 'labelId',
            'description' => 'Provide UUID for the label',
            'type' => 'string',
            'required' => true,
            'format' => 'uuid',
            'example' => '061091e9-f6cf-453e-951d-5a276303d060',
          ),
          'labelFormat' =>
          array (
            'name' => 'labelFormat',
            'description' => 'The format of the returned label when a json response is requested, pdf, zpl or both. When omitted, the format is pdf',
            'type' => 'string',
            'required' => false,
            'enum' =>
            array (
              0 => 'pdf',
              1 => 'zpl',
              2 => 'both',
              3 => 'neither',
            ),
            'example' => 'pdf',
          ),
          'orderReference' =>
          array (
            'name' => 'orderReference',
            'description' => 'Add an order reference by which the label can be retrieved later',
            'type' => 'string',
            'required' => false,
            'example' => 'myReference',
          ),
          'parcelTypeKey' =>
          array (
            'name' => 'parcelTypeKey',
            'description' => 'Parcel type key as provided by the parceltype endpoint',
            'type' => 'string',
            'required' => true,
            'example' => 'SMALL',
          ),
          'receiver' =>
          array (
            'name' => 'receiver',
            'description' => 'Receiver details',
            'type' => 'object',
            'required' => true,
            'properties' =>
            array (
              'name' =>
              array (
                'name' => 'name',
                'type' => 'object',
                'required' => true,
                'properties' =>
                array (
                  'firstName' =>
                  array (
                    'name' => 'firstName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'John',
                  ),
                  'lastName' =>
                  array (
                    'name' => 'lastName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Doe',
                  ),
                  'companyName' =>
                  array (
                    'name' => 'companyName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ACME Corp.',
                  ),
                  'additionalName' =>
                  array (
                    'name' => 'additionalName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Benelux',
                  ),
                ),
              ),
              'address' =>
              array (
                'name' => 'address',
                'type' => 'object',
                'required' => true,
                'properties' =>
                array (
                  'countryCode' =>
                  array (
                    'name' => 'countryCode',
                    'description' => 'ISO 3166-1 alpha-2 country code',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NL',
                  ),
                  'postalCode' =>
                  array (
                    'name' => 'postalCode',
                    'type' => 'string',
                    'required' => false,
                    'example' => '3542AD',
                  ),
                  'city' =>
                  array (
                    'name' => 'city',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Utrecht',
                  ),
                  'street' =>
                  array (
                    'name' => 'street',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Reactorweg',
                  ),
                  'additionalAddressLine' =>
                  array (
                    'name' => 'additionalAddressLine',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Street part 2',
                  ),
                  'number' =>
                  array (
                    'name' => 'number',
                    'type' => 'string',
                    'required' => false,
                    'example' => '25',
                  ),
                  'isBusiness' =>
                  array (
                    'name' => 'isBusiness',
                    'description' => '\'true\' for a business address. \'false\' for a consumer address',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => '1',
                  ),
                  'addition' =>
                  array (
                    'name' => 'addition',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'A',
                  ),
                ),
              ),
              'email' =>
              array (
                'name' => 'email',
                'type' => 'string',
                'required' => false,
                'example' => 'mrparcel@dhlparcel.nl',
              ),
              'phoneNumber' =>
              array (
                'name' => 'phoneNumber',
                'type' => 'string',
                'required' => false,
                'example' => '0031612345678',
              ),
            ),
          ),
          'shipper' =>
          array (
            'name' => 'shipper',
            'description' => 'Shipper details',
            'type' => 'object',
            'required' => true,
            'properties' =>
            array (
              'name' =>
              array (
                'name' => 'name',
                'type' => 'object',
                'required' => true,
                'properties' =>
                array (
                  'firstName' =>
                  array (
                    'name' => 'firstName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'John',
                  ),
                  'lastName' =>
                  array (
                    'name' => 'lastName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Doe',
                  ),
                  'companyName' =>
                  array (
                    'name' => 'companyName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ACME Corp.',
                  ),
                  'additionalName' =>
                  array (
                    'name' => 'additionalName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Benelux',
                  ),
                ),
              ),
              'address' =>
              array (
                'name' => 'address',
                'type' => 'object',
                'required' => true,
                'properties' =>
                array (
                  'countryCode' =>
                  array (
                    'name' => 'countryCode',
                    'description' => 'ISO 3166-1 alpha-2 country code',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NL',
                  ),
                  'postalCode' =>
                  array (
                    'name' => 'postalCode',
                    'type' => 'string',
                    'required' => false,
                    'example' => '3542AD',
                  ),
                  'city' =>
                  array (
                    'name' => 'city',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Utrecht',
                  ),
                  'street' =>
                  array (
                    'name' => 'street',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Reactorweg',
                  ),
                  'additionalAddressLine' =>
                  array (
                    'name' => 'additionalAddressLine',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Street part 2',
                  ),
                  'number' =>
                  array (
                    'name' => 'number',
                    'type' => 'string',
                    'required' => false,
                    'example' => '25',
                  ),
                  'isBusiness' =>
                  array (
                    'name' => 'isBusiness',
                    'description' => '\'true\' for a business address. \'false\' for a consumer address',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => '1',
                  ),
                  'addition' =>
                  array (
                    'name' => 'addition',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'A',
                  ),
                ),
              ),
              'email' =>
              array (
                'name' => 'email',
                'type' => 'string',
                'required' => false,
                'example' => 'mrparcel@dhlparcel.nl',
              ),
              'phoneNumber' =>
              array (
                'name' => 'phoneNumber',
                'type' => 'string',
                'required' => false,
                'example' => '0031612345678',
              ),
              'vatNumber' =>
              array (
                'name' => 'vatNumber',
                'type' => 'string',
                'required' => false,
                'example' => 'NL007096100B01',
              ),
              'eori' =>
              array (
                'name' => 'eori',
                'type' => 'string',
                'required' => false,
                'example' => 'Fix me',
              ),
            ),
          ),
          'accountId' =>
          array (
            'name' => 'accountId',
            'description' => 'Account id as provided by DHL. May only be empty for C2C customers.',
            'type' => 'string',
            'required' => true,
            'example' => '01234567',
          ),
          'options' =>
          array (
            'name' => 'options',
            'description' => 'Shipment options for this piece.',
            'type' => 'array',
            'required' => false,
            'items' =>
            array (
              'type' => 'object',
              'properties' =>
              array (
                'key' =>
                array (
                  'type' => 'string',
                  'example' => 'DOOR',
                  'description' => 'The shipment option key as provided by the capabilities endpoint',
                ),
                'input' =>
                array (
                  'type' => 'string',
                  'description' => 'Optional input for the shipment option',
                ),
              ),
            ),
          ),
          'onBehalfOf' =>
          array (
            'name' => 'onBehalfOf',
            'description' => 'Shipper details when sending on behalf of someone',
            'type' => 'object',
            'required' => false,
            'properties' =>
            array (
              'name' =>
              array (
                'name' => 'name',
                'type' => 'object',
                'required' => true,
                'properties' =>
                array (
                  'firstName' =>
                  array (
                    'name' => 'firstName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'John',
                  ),
                  'lastName' =>
                  array (
                    'name' => 'lastName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Doe',
                  ),
                  'companyName' =>
                  array (
                    'name' => 'companyName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ACME Corp.',
                  ),
                  'additionalName' =>
                  array (
                    'name' => 'additionalName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Benelux',
                  ),
                ),
              ),
              'address' =>
              array (
                'name' => 'address',
                'type' => 'object',
                'required' => true,
                'properties' =>
                array (
                  'countryCode' =>
                  array (
                    'name' => 'countryCode',
                    'description' => 'ISO 3166-1 alpha-2 country code',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NL',
                  ),
                  'postalCode' =>
                  array (
                    'name' => 'postalCode',
                    'type' => 'string',
                    'required' => false,
                    'example' => '3542AD',
                  ),
                  'city' =>
                  array (
                    'name' => 'city',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Utrecht',
                  ),
                  'street' =>
                  array (
                    'name' => 'street',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Reactorweg',
                  ),
                  'additionalAddressLine' =>
                  array (
                    'name' => 'additionalAddressLine',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Street part 2',
                  ),
                  'number' =>
                  array (
                    'name' => 'number',
                    'type' => 'string',
                    'required' => false,
                    'example' => '25',
                  ),
                  'isBusiness' =>
                  array (
                    'name' => 'isBusiness',
                    'description' => '\'true\' for a business address. \'false\' for a consumer address',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => '1',
                  ),
                  'addition' =>
                  array (
                    'name' => 'addition',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'A',
                  ),
                ),
              ),
              'email' =>
              array (
                'name' => 'email',
                'type' => 'string',
                'required' => false,
                'example' => 'mrparcel@dhlparcel.nl',
              ),
              'phoneNumber' =>
              array (
                'name' => 'phoneNumber',
                'type' => 'string',
                'required' => false,
                'example' => '0031612345678',
              ),
              'vatNumber' =>
              array (
                'name' => 'vatNumber',
                'type' => 'string',
                'required' => false,
                'example' => 'NL007096100B01',
              ),
              'eori' =>
              array (
                'name' => 'eori',
                'type' => 'string',
                'required' => false,
                'example' => 'Fix me',
              ),
            ),
          ),
          'returnLabel' =>
          array (
            'name' => 'returnLabel',
            'description' => 'Indicate whether the label should be a return label or not.',
            'type' => 'boolean',
            'required' => false,
            'example' => '',
          ),
          'pieceNumber' =>
          array (
            'name' => 'pieceNumber',
            'description' => 'Used to generate the piece counter e.g. 1/1',
            'type' => 'integer',
            'required' => false,
            'format' => 'int32',
            'example' => '1',
          ),
          'quantity' =>
          array (
            'name' => 'quantity',
            'description' => 'Used to generate the piece counter e.g. 1/1',
            'type' => 'integer',
            'required' => false,
            'format' => 'int32',
            'example' => '1',
          ),
          'automaticPrintDialog' =>
          array (
            'name' => 'automaticPrintDialog',
            'description' => 'Add an instruction to the PDF label so that it on opening it will automatically show the print dialog on PDF readers that implement this feature',
            'type' => 'boolean',
            'required' => false,
          ),
          'weight' =>
          array (
            'name' => 'weight',
            'description' => 'Actual weight of the parcel in kilograms. Maximum weight depends on the parcel type.',
            'type' => 'number',
            'required' => false,
            'minimum' => 0,
            'maximum' => 1000,
            'example' => '1',
          ),
        ),
      ),
    ),
    'summary' => 'Create a label',
  ),
);
