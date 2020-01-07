<?php
namespace verbb\navigation\gql\arguments;

use craft\gql\base\StructureElementArguments;
use craft\gql\types\QueryArgument;

use GraphQL\Type\Definition\Type;

class NodeArguments extends StructureElementArguments
{
    // Public Methods
    // =========================================================================

    public static function getArguments(): array
    {
        return array_merge(parent::getArguments(), [
            'nav' => [
                'name' => 'nav',
                'type' => Type::listOf(Type::string()),
                'description' => 'Narrows the query results based on the navigation the node belongs to.'
            ],
            'navHandle' => [
                'name' => 'navHandle',
                'type' => Type::string(),
                'description' => 'Narrows the query results based on the provided navigation handle.'
            ],
            'navId' => [
                'name' => 'navId',
                'type' => Type::int(),
                'description' => 'Narrows the query results based on the provided navigation ID.'
            ],
            'type' => [
                'name' => 'type',
                'type' => Type::listOf(Type::string()),
                'description' => 'Narrows the query results based on the node’s type.'
            ],
        ]);
    }
}
