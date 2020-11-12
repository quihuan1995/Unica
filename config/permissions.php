<?php
///////// User
    [
        'name' => 'user',
        'flag' => 'user.index',
        'parent_flag' => null,
    ];

    [
        'name' => 'user.edit',
        'flag' => 'user.edit',
        'parent_flag' => 'user.index',
    ];

    [
        'name' => 'user.delete',
        'flag' => 'user.delete',
        'parent_flag' => 'user.index',
    ];
/////// Teacher
    [
        'name' => 'teacher',
        'flag' => 'teacher.index',
        'parent_flag' => null,
    ];

    [
        'name' => 'teacher.create',
        'flag' => 'teacher.create',
        'parent_flag' => 'teacher.index',
    ];

    [
        'name' => 'teacher.edit',
        'flag' => 'teacher.edit',
        'parent_flag' => 'teacher.index',
    ];

    [
        'name' => 'teacher.delete',
        'flag' => 'teacher.delete',
        'parent_flag' => 'teacher.index',
    ];
/////////Admin
    [
        'name' => 'admin',
        'flag' => 'admin.index',
        'parent_flag' => null,
    ];

    [
        'name' => 'admin.create',
        'flag' => 'admin.create',
        'parent_flag' => 'admin.index',
    ];

    [
        'name' => 'admin.delete',
        'flag' => 'admin.delete',
        'parent_flag' => 'admin.index',
    ];

    [
        'name' => 'admin.give-admin',
        'flag' => 'admin.give-admin',
        'parent_flag' => 'admin.index',
    ];

    [
        'name' => 'admin.remove-admin',
        'flag' => 'admin.remove-admin',
        'parent_flag' => 'admin.index',
    ];
