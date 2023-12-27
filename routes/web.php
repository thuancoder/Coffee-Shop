<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController as ClientPostController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Client\CommentController;





use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;



use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('client.index');
Route::get('/test',[HomeController::class,'test']);
Route::post('/test/add',[HomeController::class,'testadd']);

Route::get('/client/products', [ClientProductController::class, 'index'])->name('client.products');
Route::get('/client/posts', [ClientPostController::class, 'index'])->name('client.posts');
Route::get('/client/about', [HomeController::class, 'about'])->name('client.about');
Route::get('/client/contact', [HomeController::class, 'contact'])->name('client.contact');
Route::get('/client/posts/post-single/{id}', [ClientPostController::class, 'postSingle'])->name('client.posts.post-single');
Route::get('/client/products/product-single/{id}', [ClientProductController::class, 'productSingle'])->name('client.products.product-single');
Route::get('/search',[ClientProductController::class, 'search'])->name('client.search');
Route::get('/filter',[ClientProductController::class, 'filter'])->name('client.filter');
//Cart và Thanh toán
Route::prefix('checkout')->group(function (){
    Route::get('/',[CheckoutController::class,'getCheckout'])->middleware(['auth', 'verified'])->name('getCheckout');
});
Route::post('/payment', [PaymentController::class, 'create'])->name('payment.create');
Route::get('/payment/return', [PaymentController::class, 'return'])->name('payment.return');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('checkout/thanks', [HomeController::class, 'thanks'])->name('checkpout.thanks');;
//Bình luận
Route::resource('comments', CommentController::class);
Route::post('/comments/reply/{id}', [ClientPostController::class, 'reply'])->name('comments.reply');

//Admin
Route::get('/admin', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.index');;
Route::get('/admin/logout', [DashboardController::class, 'logoutAdmin'])->name('admin.logout');;
//Sản Phẩm
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/add', [ProductController::class, 'addProduct'])->name('admin.products.add');
Route::post('/admin/products/store', [ProductController::class, 'storeProduct'])->name('admin.products.store');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'editProduct'])->name('admin.products.edit');
Route::post('/admin/products/update/{id}', [ProductController::class, 'updateProduct'])->name('admin.products.update');
Route::get('/admin/products/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.products.delete');
//Loại Sản Phẩm
Route::get('/admin/category/products', [ProductCategoryController::class, 'index'])->name('admin.category.products.index');
Route::get('/admin/category/products/add', [ProductCategoryController::class, 'addCategory'])->name('admin.category.products.add');
Route::post('/admin/category/products/store', [ProductCategoryController::class, 'storeCategory'])->name('admin.category.products.store');
Route::get('/admin/category/products/edit/{id}', [ProductCategoryController::class, 'editCategory'])->name('admin.category.products.edit');
Route::post('/admin/category/products/update/{id}', [ProductCategoryController::class, 'updateCategory'])->name('admin.category.products.update');
Route::get('/admin/category/products/delete/{id}', [ProductCategoryController::class, 'deleteCategory'])->name('admin.category.products.delete');
//Bài viết
Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index');
Route::get('/admin/posts/add', [PostController::class, 'addPost'])->name('admin.posts.add');
Route::post('/admin/posts/store', [PostController::class, 'storePost'])->name('admin.posts.store');
Route::get('/admin/posts/edit/{id}', [PostController::class, 'editPost'])->name('admin.posts.edit');
Route::post('/admin/posts/update/{id}', [PostController::class, 'updatePost'])->name('admin.posts.update');
Route::get('/admin/posts/delete/{id}', [PostController::class, 'deletePost'])->name('admin.posts.delete');
//Danh mục bài viết
Route::get('/admin/category/posts', [PostCategoryController::class, 'index'])->name('admin.category.posts.index');
Route::get('/admin/category/posts/add', [PostCategoryController::class, 'addCategory'])->name('admin.category.posts.add');
Route::post('/admin/category/posts/store', [PostCategoryController::class, 'storeCategory'])->name('admin.category.posts.store');
Route::get('/admin/category/posts/edit/{id}', [PostCategoryController::class, 'editCategory'])->name('admin.category.posts.edit');
Route::post('/admin/category/posts/update/{id}', [PostCategoryController::class, 'updateCategory'])->name('admin.category.posts.update');
Route::get('/admin/category/posts/delete/{id}', [PostCategoryController::class, 'deleteCategory'])->name('admin.category.posts.delete');
//User
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
//Orders
Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');
//pdf
Route::get('/export-pdf', [PDFController::class, 'exportPDF'])->name('export.pdf');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Đăng nhập google
Route::get('/google', [\App\Http\Controllers\Api\GoogleController::class, 'getGoogleSignInUrl']);
Route::get('/google/callback', [\App\Http\Controllers\Api\GoogleController::class, 'loginCallback']);

require __DIR__.'/auth.php';

