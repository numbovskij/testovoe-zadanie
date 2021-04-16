<?php

namespace App\graphql\Mutations;

use App\Lead;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateLeadMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createLead',
        'description' => 'A mutation'
    ];

    public function type(): Type
    {
        return GraphQL::type('Lead');
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'email' => [
                'name' => 'email',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'phone' => [
                'name' => 'phone',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'whantToBy' => [
                'name' => 'whantToBy',
                'type' =>  Type::nonNull(Type::boolean()),
            ],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
         $lead = new Lead();
        $lead->fill($args);
        $lead->save();

        return $lead;
    }
}
