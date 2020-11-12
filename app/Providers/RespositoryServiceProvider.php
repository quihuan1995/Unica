<?php

namespace App\Providers;

use App\Models\Order;
use Illuminate\Support\ServiceProvider;
use App\Repositories\menu\{MenuItemReposiroryInterface,MenuItemRepository,MenuRepositoryInterface,MenuRepository,MenuLocationRepository,MenuLocationReposiroryInterface};
use App\Repositories\Tag\TagRespositoryInterface;
use App\Repositories\Tag\TagRespository;
use App\Repositories\AbstractRepositoryInterface;
use App\Repositories\Category\{CategoryRespositoryInterface,CategoryRespository};
use App\Repositories\role\RoleRespository;
use App\Repositories\role\RoleRespositoryInterface;
use App\Repositories\users\{UserRepositoryInterface,UserRepository};
use App\Repositories\Order\{OrderRespositoryInterface,OrderRespository};
use App\Repositories\course\{CourseRespositoryInterface,CourseRespository};
use App\Models\{User,Tag,Category,Course,Menu,MenuItems,MenuLocation};

class RespositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MenuRepositoryInterface::class,function(){
            return new MenuRepository(new Menu);
        });
        $this->app->bind(MenuItemReposiroryInterface::class,function(){
            return new MenuItemRepository(new MenuItems);
        });
        $this->app->bind(MenuLocationReposiroryInterface::class,function(){
            return new MenuLocationRepository(new MenuLocation);
        });

        $this->app->bind(UserRepositoryInterface::class,function(){
            return new UserRepository(new User);
        });

        $this->app->bind(CategoryRespositoryInterface::class, function(){
            return new CategoryRespository(new Category);
        });

        $this->app->bind(TagRespositoryInterface::class,function(){
            return new TagRespository(new Tag);
        });
        $this->app->bind(OrderRespositoryInterface::class,function(){
            return new OrderRespository(new Order);
        });
        $this->app->bind(CourseRespositoryInterface::class,function(){
            return new CourseRespository(new Course);
        });
        $this->app->bind(VoucherRespositoryInterface::class,function(){
            return new VoucherRespository(new Voucher);
        });
        $this->app->bind(CustomerRespositoryInterface::class,function(){
            return new CustomerRespository(new Customer);
        });
    }



    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}