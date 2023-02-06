<?php

namespace App\GraphQL\Types;

use GraphQL;
use App\Models\Post;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{
    protected $attributes = [
        'name'          => 'Post',
        'description'   => 'A post',
        'model'         => Post::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the post',
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The title of post',
            ],
            'content' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The content of post'
            ],
            'user' => [
                'type' => GraphQL::type('User'),
                'description' => 'The User of the post'
            ]
        ];
    }
}