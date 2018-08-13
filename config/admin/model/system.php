<?php
/**
 * 后台设置
 */
return [
     // 菜单名称
     'title'   => '系统设置',
     'icon'   => 'fa fa-cog fa-spin',
     //前端路由名称  graphql 查询字段根据这个名称
     'name'  => 'system',
     //前端路由
     'path'   => 'system',
     // 数据模型，用作数据的 CRUD
     'model'   => Laracore\Admin\App\Models\Config::class,
     // 数据读取模式 id 一般用户 table 数据库; key 用于 form 表单 key 数据库
     'modelType' => 'key',
     // 默认布局
     'layout' =>[
        [
            'style' => 'row',
            // 'config' => config('admin.layout.row'),
            'content' => [
                [
                   'style' => 'col',
                //    'config' => config('admin.layout.col'),
                   'content' => [
                       [
                            'style' => 'item',
                            'config' => [
                                'card' => [
                                    'title' => '网站设置',
                                    'icon' => 'fa fa-cog',
                                ],
                                'item' => 'formWeb'
                            ],
                       ]
                   ]
               ],
               [
                  'style' => 'col',
                //   'config' => config('admin.layout.col'),
                  'content' => [
                      [
                            'style' => 'item',
                            'config' => [
                                'card' => [
                                    'title' => '表单演示',
                                    'icon' => 'fa fa-cog',
                                ],
                                'item' => 'formSystem'
                            ],
                      ]
                  ]
              ],
            ],
        ]
     ],
    // 索引项目
    'item' => [
        'formWeb' => [
            'style' => 'form',
            'config' => [
                //全局唯一识别 不能有重复
                // 'ref' => 'admin:system:form1',
                'labelWidth' => 80,
            ],
            'item' => [
                'TOGGLE_WEB_SITE' => [
                    'component' => 'switch',
                    'label' => '站点开关',
                    'placeholder' => '站点关闭后将不能访问',
                ],
                'WEB_SITE_TITLE' => [
                    'component' => 'input',
                    'label' => '网站标题',
                    // 最大输入长度
                    'maxlength' => 50,
                    'placeholder' => '网站标题前台显示标题',
                ],
                'WEB_SITE_SLOGAN' => [
                    'component' => 'input',
                    'label' => '网站口号',
                    // 最大输入长度
                    'maxlength' => 50,
                    'placeholder'        => '网站口号、宣传标语、一句话介绍',
                ],
                'WEB_SITE_LOGO' => [
                    'component' => 'upload',
                    'label' => '网站LOGO',
                    'placeholder'  => '设置网站LOGO',
                    'fileType' => 'image', //上传文件类型
                ],
                'WEB_SITE_DESCRIPTION' => [
                    'component' => 'input',
                    'label' => '网站描述',
                    'type' => 'textarea',
                    'placeholder' => '网站搜索引擎描述',
                    'autosize' => [
                        'minRows' => 2,
                        'maxRows' => 5
                    ],
                ],
                'WEB_SITE_KEYWORD' => [
                    'component' => 'input',
                    'label' => '网站关键字',
                    'type' => 'textarea',
                    'placeholder'        => '网站搜索引擎关键字',
                ],
                'WEB_SITE_COPYRIGHT' => [
                    'component' => 'input',
                    'label' => '版权信息',
                    'type' => 'text',
                    'placeholder'        => '设置在网站底部显示的版权信息，如“版权所有 © 2007-2017 某某科技”',
                ],
                'WEB_SITE_ICP' => [
                    'component' => 'input',
                    'label' => '网站备案号',
                    'type' => 'text',
                    'placeholder'        => '设置在网站底部显示的备案号，如“鲁ICP备1272117-1号”',
                ],
                'WEB_SITE_STATISTICS' => [
                    'component' => 'input',
                    'label' => '站点统计',
                    'type' => 'textarea',
                    'placeholder' => '支持百度、Google、cnzz等所有Javascript的统计代码',
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
        'formSystem' => [
              'style' => 'form',
              'config' => [
                  //全局唯一识别 不能有重复
                  'ref' => 'admin:system:form2',
                  'labelWidth' => 120,
              ],
              'item' => [
                  'DEMO_CHECKBOX' => [
                      'component' => 'checkbox',
                      'label' => 'checkbox 多选框',
                      'placeholder' => 'checkbox 多选框 demo',
                      'allSelect' => true,
                      'allSelectName' => '全国',
                      'options' => [
                          [
                              'label' => 'demo',
                              'title' => '测试',
                              'icon' => 'fa fa-cog fa-spin',
                          ],
                          [
                              'label' => 'demo1',
                              'title' => '测试1',
                              'disabled' => true,
                              'size' => 'small',
                              'icon' => 'fa fa-unlock-alt',
                          ],
                          [
                              'label' => 'demo2',
                              'title' => '测试2',
                          ],
                      ]
                  ],
                'DEMO_SELECT' => [
                      'component' => 'select',
                      'label' => 'select 选择器',
                      'placeholder' => 'select 选择器 demo',
                      'multiple' => true,
                      'options' => [
                          [
                              'value' => 'demo',
                              'label' => '测试',
                          ],
                          [
                              'value' => 'demo1',
                              'label' => '测试1',
                              'disabled' => true,
                          ],
                          [
                              'value' => 'demo2',
                              'label' => '测试2',
                          ],
                      ]
                ],
                'DEMO_TABLE' => [
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
        ]
    ]

];
