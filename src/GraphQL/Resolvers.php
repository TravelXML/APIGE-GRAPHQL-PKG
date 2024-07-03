
<?php
namespace Apige\GraphQLMySQLAPI\GraphQL;

class Resolvers {
    public static function exampleResolver($root, $args, $context, $info) {
        return 'Resolved example field!';
    }
}
?>