<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '用户管理',
     'icon'   => 'fa fa-users',
     //前端路由名称  graphql 查询字段根据这个名称
     'name' => config('admin.name').':login',
     //前端路由
     'path'   => config('admin.uri').'/login',
     // 数据模型，用作数据的 CRUD
     'model'   => Laracore\Core\App\Models\User::class,
     // 自定义前端 form 类型请求方法 此方法房子啊 models 里面
     'handlerFormRequest' => 'getToken',
     // 默认布局
     'layout' =>[
        [
            'style' => 'row',
            'config' => config('admin.layout.row'),
            'content' => [
                [
                   'style' => 'col',
                   'config' => [
                       'span' => 24,
                       'style' => [
                           'width' => '300px'
                       ]
                   ],
                   'content' => [
                       'style' => 'item',
                       'config' => [
                           'card' => [
                               'title' => '欢迎登陆',
                               'icon' => 'fa fa-arrow-circle-right',
                           ],
                           'item' => 'formLogin'
                       ],
                   ]
               ],
           ]
        ]
    ],
    // 索引项目
    'item' => [
        'formLogin' => [
             'style' => 'form',
             'config' => [
                 //全局唯一识别 不能有重复
                 'ref' => 'admin:system:form1',
                 'buttonSubmit' => [
                     'title' => '登录',
                     'style' => 'width:100%'
                 ],
                 'buttonReset' => [
                     'hidden' => true
                 ]
             ],
             'item' => [
                 'username' => [
                     'component' => 'input',
                     'placeholder' => '请输入用户名',
                     'prepend' => [
                         'icon' => 'fa fa-user'
                     ]
                 ],
                 'password' => [
                     'component' => 'input',
                     'placeholder' => '请输入密码',
                     'type' => 'password',
                     'prepend' => [
                         'icon' => 'fa fa-lock'
                     ]
                 ],
             ]
        ],
    ]

];
