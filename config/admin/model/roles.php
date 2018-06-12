<?php
/**
 * 后台侧边栏菜单
 */
 return [
     // 菜单名称
     'title'   => '角色管理',
     'icon'   => 'fa fa-user-secret',
     //前端路由名称  graphql 查询字段根据这个名称
     'name'  => config('admin.name').':roles',
     //前端路由
     'path'   => config('admin.uri').'/roles',
     // 用户认证 默认 true
     'auth' => false,
];
