## Build Binary Tree Has Ten Level
- Requirements 
    - PHP >= 7.1
    - Laravel 7.0
    - Package for [Nested Set Model]('https://github.com/lazychaser/laravel-nestedset') called `laravel-nestedset`

- Installation
    - create Model ex Category
    - create migration for table children
    - add relation [children]to the Category Model as has many

- When we run this query 
```php
 return Category::create([
        'name' => 'Root',
        'children' => [
            [
                'name' => 'Level-1.1',
                'children' => [
                    [
                        'name' => 'level-2.1'
                    ],
                ],
            ],
            [
                'name' => 'Level-1.2',
                'children' => [
                    [
                        'name' => 'level-2.2'
                    ],
                ],
            ]
        ]
    ]);
```

- Result will be like so : 
```json
{
    name: "Root",
    parent_id: null,
    _lft: 3103,
    _rgt: 4570,
    id: 1552,
    children: [
        {
            name: "Level-1.1",
            parent_id: 1552,
            _lft: 3104,
            _rgt: 3655,
            id: 1553,
            children: []
        },
        {
            name: "Level-1.2",
            parent_id: 1552,
            _lft: 3104,
            _rgt: 3655,
            id: 1553,
            children: []
        }
}
```
