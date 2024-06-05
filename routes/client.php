<?php

// website có các trang là:
// trang chủ
// giới thiệu
// sản phẩm
// chi tiết sản phẩm
// liên hệ

// để định nghĩa được, điều đầu tiên làm là phải tạo Controller trước
// tiếp theo, khai function tương ứng để xử lý
// bước cuối, định nghĩa đường dẫn

/* HTTP method: 
    get: lấy ra dữ liệu
    post: lưu, tạo mới tài nguyên
    put ( path): update
    delete: xóa
    option
    head
*/

use Tongtrankien1605\XuongOop\Controllers\Client\AboutController;
use Tongtrankien1605\XuongOop\Controllers\Client\ContactController;
use Tongtrankien1605\XuongOop\Controllers\Client\HomeController;
use Tongtrankien1605\XuongOop\Controllers\Client\ProductController;

$router->get( '/' ,                 HomeController::class .         '@index');
$router->get( '/about' ,            AboutController::class .        '@index');

$router->get( '/contact' ,          ContactController::class .      '@index');
$router->post( '/contact/store' ,   ContactController::class .      '@index');

$router->get( '/products' ,         ProductController::class .      '@index');
$router->get( '/products/{id}' ,    ProductController::class .      '@detail');
