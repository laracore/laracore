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
                    'columns' => [
                        [
                            'title'=> 'ID',
                            'key'=> 'id'
                        ],
                        [
                            'title'=> '图片',
                            'key'=> 'path'
                        ],
                        [
                            'title'=> '文件名',
                            'key'=> 'name'
                        ],
                        [
                            'title'=> '文件大小',
                            'key'=> 'size'
                        ],
                        [
                            'title'=> '文件类型',
                            'key'=> 'extension'
                        ],
                        [
                            'title'=> '存储器',
                            'key'=> 'disk'
                        ],
                        [
                            'title'=> '下载次数',
                            'key'=> 'download'
                        ],
                        [
                            'title'=> '状态',
                            'key'=> 'status'
                        ],
                        [
                            'title'=> '时间',
                            'key'=> 'created_at'
                        ],
                    ]
                ],
                'agGrid' => [
                    'component' => 'agGrid',
                    'columns' => [
                        [
                            'headerName'=> 'ID',
                            'field'=> 'id'
                        ],
                        [
                            'headerName'=> '图片',
                            'field'=> 'path'
                        ],
                        [
                            'headerName'=> '文件名',
                            'field'=> 'name',
                            'editable'=> true
                        ],
                        [
                            'headerName'=> '文件大小',
                            'field'=> 'size',
                            'editable'=> false
                        ],
                        [
                            'headerName'=> '文件类型',
                            'field'=> 'extension'
                        ],
                        [
                            'headerName'=> '存储器',
                            'field'=> 'disk'
                        ],
                        [
                            'headerName'=> '下载次数',
                            'field'=> 'download'
                        ],
                        [
                            'headerName'=> '状态',
                            'field'=> 'status'
                        ],
                        [
                            'headerName'=> '时间',
                            'field'=> 'created_at'
                        ],
                    ],
                    'onresize' => true,//根据窗口自动调整
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
                    'type' => 'default',
                    'long' => true,
                    'event' => 'formReset', // 触发前端事件 form 重置表单
                    'isValue' => false, //是否允许前端获取这个的 value 值 默认 true
                ],
            ]
        ],
    ]
];
