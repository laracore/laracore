<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '上传管理',
     'icon'   => 'fa fa-cloud-upload',
     //前端路由名称  graphql 查询字段根据这个名称
     'name'  => 'upload',
     //前端路由路径
     'path'   => 'upload',
     // 数据模型，用作数据的 CRUD
     'model'   => Laracore\Core\App\Models\Upload::class,
     // 默认布局
     'layout' =>[
        [
            'style' => 'row',
            'content' => [
                [
                   'style' => 'col',
                   'config' => [
                        //栅格的占位格数，可选值为0~24的整数，为 0 时，相当于display:none
                        'span' => 24,
                    ],
                   'content' => [
                       [
                            'style' => 'item',
                            'config' => [
                                'card' => [
                                    'title' => '上传管理',
                                    'icon' => 'fa fa-cog',
                                ],
                                'item' => 'formUpload'
                            ],
                       ]
                   ]
               ],
            ],
        ]
    ],
    // 索引项目
    'item' => [
        'formUpload' => [
            'style' => 'form',
            'config' => [
                //全局唯一识别 不能有重复
                // 'ref' => 'admin:system:form1',
                'labelWidth' => 80,
            ],
            'item' => [
                'table' => [
                    'component' => 'table',
                ],
                'submit' => [
                    'component' => 'button',
                    'title' => '提交',
                    'type' => 'primary',
                    'long' => true,
                    'event' => 'formSubmit', // 触发前端事件 form 提交表单
                    'isValue' => false, //是否允许前端获取这个的 value 值 默认 true
                ],
                'reset' => [
                    'component' => 'button',
                    'title' => '重置',
                    'type' => 'ghost',
                    'long' => true,
                    'event' => 'formReset', // 触发前端事件 form 重置表单
                    'isValue' => false, //是否允许前端获取这个的 value 值 默认 true
                ],
            ]
        ],
    ]
];
