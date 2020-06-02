<?php
class ORMServiceProvider extends ServiceProvider
{
    //서비스 컨테이너에서 많은 서비스 객체들을
    public $bindings = [
        testinterface::class => testimp::class,
    ];


    /**
     * 서비스 컨테이너에서 서비스 프로바이더 booting 이후 사용되는 것
     * *macro를 사용하여 transform을 작성한다.
     *
     */
    public function boot()
    {
        //
    }
}
