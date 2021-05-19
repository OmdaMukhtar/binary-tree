<?php

use App\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* increase the execution time for PHP */
ini_set('max_execution_time', 500);

Route::get('/', function () {

    return Category::create([
        'name' => 'Root',
        'children' => [
            [
                'name' => 'Level-1.1',
                'children' => [
                    [
                        'name' => 'level-2.1',
                        'children' => [
                            [
                                'name' => 'Level-3.1',
                                'children' => [
                                    [
                                        'name' => 'level-4.1',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'name' => 'level-4.2',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'name' => 'Level-3.2',
                                'children' => [
                                    [
                                        'name' => 'level-4.1'
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'name' => 'level-2.2',
                        'children' => [
                            [
                                'name' => 'Level-3.1',
                                'children' => [
                                    [
                                        'name' => 'level-4.1',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2',
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'name' => 'level-4.2',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],//done
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [//came back
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'name' => 'Level-3.2',
                                'children' => [
                                    [
                                        'name' => 'level-4.1',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2',
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'name' => 'level-4.2',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],//done
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [//came back
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Level-1.2',
                'children' => [
                    [
                        'name' => 'level-2.1',
                        'children' => [
                            [
                                'name' => 'Level-3.1',
                                'children' => [
                                    [
                                        'name' => 'level-4.1',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'name' => 'level-4.2',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'name' => 'Level-3.2',
                                'children' => [
                                    [
                                        'name' => 'level-4.1'
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'name' => 'level-2.2',
                        'children' => [
                            [
                                'name' => 'Level-3.1',
                                'children' => [
                                    [
                                        'name' => 'level-4.1',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'name' => 'level-4.2',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],//done
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [//came back
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'name' => 'Level-3.2',
                                'children' => [
                                    [
                                        'name' => 'level-4.1',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2'
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],//done
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [//came back
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'name' => 'level-4.2',
                                        'children' => [
                                            [
                                                'name' => 'level-5.1',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.1',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],//done
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [//came back
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1'
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2'
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            [
                                                'name' => 'level-5.2',
                                                'children' => [
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.1',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    [
                                                                        'name' => 'level-8.2',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    [
                                                        'name' => 'Level-6.2',
                                                        'children' => [
                                                            [
                                                                'name' => 'level-7.2',
                                                                'children' => [
                                                                    [
                                                                        'name' => 'level-8.1',
                                                                        'children' => [
                                                                            [
                                                                                'name' => 'level-9.1',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            [
                                                                                'name' => 'level-9.2',
                                                                                'children' => [
                                                                                    [
                                                                                        'name' => 'level-10.1',
                                                                                    ],
                                                                                    [
                                                                                        'name' => 'level-10.2',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]);
});
