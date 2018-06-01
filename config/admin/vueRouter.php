<?php
/**
 * vue_router 参考 vue 官网配置
 * https://router.vuejs.org/zh-cn/
 */
return [
    [
        'path'  =>  config('admin.uri').'/login',
        'name'  =>  config('admin.name').':as:login',
        'component' =>  ['template'=> '<cvi-login/>'],
        "children" => [
        ],
        'originalChildren' => [
            'model'  =>  [
                'login',
            ],
            'component' =>  ['template'=> '<jvi-index/>'],
        ]
    ],[
          'path'  =>  config('admin.uri'),
          'name'  =>  config('admin.name'),
          'component' =>  ['template'=> '<cvi-layout/>'],
          "children" => [
          ],
          'originalChildren' => [
              'model'  =>  [
                  'system',
                  'upload',
                  'users',
                  'roles',
                  'permission',
              ],
              'component' =>  ['template'=> '<jvi-index/>'],
          ]
    ]
];
