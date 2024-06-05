<?php


//  CRUD bao gồm: danh sách, thêm, sửa, xem, xóa
//  User: 
//      GET     -> USER/INDEX       ->      INDEX   -> DANH SÁCH
//      GET     -> USER/CREATE      ->      CREATE  -> HIỆN THỊ FORM THÊM MỚI
//      POST    -> USER/STORE       ->      STORE   -> LƯU DỮ LIỆU TỪ FORM THÊM MỚI VÀO DB
//      GET     -> USER/ID          ->      SHOW ($id)    -> XEM CHI TIẾT
//      PUT     -> USER/ID/EDIT     ->      EDIT ($id)    -> HIỆN THỊ FORM CẬP NHẬT
//      POSt    -> USER/ID          ->      UPDATE ($id)  -> LƯU DỮ LIỆU TỪ FORM CẬP NHẬT VÀO DB
//      DELETE  -> USER/ID          ->      DELETE ($id)  -> XÓA BẢN GHI TRONG DB

use Tongtrankien1605\XuongOop\Controllers\Admin\UserController;


$router->mount('/admin', function () use ($router) {

    // CRUD USER

    $router->mount('/users', function () use ($router) {

        $router->get('/', UserController::class . '@index');
        $router->get('/create', UserController::class . '@create');
        $router->post('/store', UserController::class . '@store');
        $router->get('/{id}', UserController::class . '@show');
        $router->get('/{id}/edit', UserController::class . '@edit');
        $router->put('/{id}', UserController::class . '@update');
        $router->delete('/{id}', UserController::class . '@delete');
    });
});
