<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

use Rebing\GraphQL\Support\Type as GraphQLType;

class leadType extends GraphQLType
{
	protected $attributes = [
		'name' => 'lead',
		'email' => 'email',
		'phone' => 'phone',
		'whantToBy' => 'whantToBy',
		'model' => Lead::class
	];

	public function fields(): array
	{
		return [
			'name' => [
				'type' => Type::nonNull(Type::string()),
				'description' => 'Name',
			],
			'email' => [
				'type' => Type::nonNull(Type::string()),
				'description' => 'Email',
			],
			'phone' => [
				'type' => Type::nonNull(Type::string()),
				'description' => 'phone',
			],
			'whantToBy' => [
				'type' => Type::nonNull(Type::boolean()),
				'description' => 'whantToBy',
			]
		];
	}
}
