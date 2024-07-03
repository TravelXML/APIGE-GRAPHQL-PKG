<?php 

namespace Apige\GraphQLMySQLAPI\GraphQL;

use GraphQL\Type\Schema;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ObjectType;

class Schema {
    public static function build() {
        $queryType = new ObjectType([
            'name' => 'Query',
            'fields' => [
                'example' => [
                    'type' => Type::string(),
                    'resolve' => function() {
                        return 'Hello, world!';
                    }
                ]
            ]
        ]);

        return new Schema([
            'query' => $queryType
        ]);
    }
}
?>
