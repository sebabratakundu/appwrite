<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model\Attribute;

class AttributeURL extends Attribute
{
    public function __construct()
    {
        parent::__construct();

        $this
            ->addRule('format', [
                'type' => self::TYPE_STRING,
                'description' => 'String format.',
                'default' => APP_DATABASE_ATTRIBUTE_URL,
                'example' => APP_DATABASE_ATTRIBUTE_URL,
                'array' => false,
                'required' => true,
            ])
            ->addRule('default', [
                'type' => self::TYPE_STRING,
                'description' => 'Default value for attribute when not provided. Cannot be set when attribute is required.',
                'default' => null,
                'example' => 'http://example.com',
                'array' => false,
                'require' => false,
            ])
        ;
    }

    /**
     * Get Name
     * 
     * @return string
     */
    public function getName():string
    {
        return 'AttributeURL';
    }

    /**
     * Get Collection
     * 
     * @return string
     */
    public function getType():string
    {
        return Response::MODEL_ATTRIBUTE_URL;
    }
}