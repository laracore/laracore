<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '上传管理',
     'icon'   => 'fa fa-cloud-upload',
     //前端路由名称  graphql 查询字段根据这个名称
     'name'  => config('admin.name').':upload',
     //前端路由路径
     'path'   => config('admin.uri').'/upload',
     // 用户认证 默认 true
     'auth' => false,

];
