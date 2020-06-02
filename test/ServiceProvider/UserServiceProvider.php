<?php
class TestServiceProvider extends ServiceProvider
{
    서비스 컨테이너에서 많은 서비스 객체들을
    public $bindings = [
        User::class => UserIm::class,
        Repository::class => UserRepository::class,
        UserService::class=> UserServiceImp::class,
    ];

    /**
     * Register services.
     * 서비스 컨테이너만 작성한다.
     * 더불어 조건문이 붙을 수 있음.
     * @return void
     */
    // public function register()
    // {
    //     //
    //     $this->app->bind('User','UserIm');
    //     $this->app->bind('Repository','UserRepository');
    // }

    /**
     * 서비스 컨테이너에서 서비스 프로바이더 booting 이후 사용되는 것
     * *macro를 사용하여 transform을 작성한다.
     *
     */
    public function boot()
    {
        //
        $this->app->macro('')
    }
}
