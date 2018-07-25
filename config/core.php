<?php

return [
    'layout' => [
        'col' => [
            //栅格的占位格数，可选值为0~24的整数，为 0 时，相当于display:none
            'span' => 10,
            // 栅格的顺序，在flex布局模式下有效
            'order' => '',
            // 栅格左侧的间隔格数，间隔内不可以有栅格
            'offset' => '',
            // 栅格向右移动格数
            'push' => '',
            // 栅格向左移动格数
            'pull' => '',
            // <768px 响应式栅格，可为栅格数或一个包含其他属性的对象
            'xs' => 24,
            // ≥768px 响应式栅格，可为栅格数或一个包含其他属性的对象
            'sm' => 16,
            // ≥992px 响应式栅格，可为栅格数或一个包含其他属性的对象
            'md' => 12,
            // ≥1200px 响应式栅格，可为栅格数或一个包含其他属性的对象
            'lg' => 10,
            // 自定义 vue 样式对象
            'style' => [
            ],
        ],
        'row' => [
            // 栅格间距，单位 px，左右平分
            'gutter' => 5,
            // 布局模式，可选值为flex或不选，在现代浏览器下有效
            'type' => 'flex',
            // flex 布局下的垂直对齐方式，可选值为top、middle、bottom
            'align' => 'top',
            // flex 布局下的水平排列方式，可选值为start、end、center、space-around、space-between
            'justify' => 'start',
        ]
    ]
];
