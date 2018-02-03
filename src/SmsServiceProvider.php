<?php
/**
 * Created by PhpStorm.
 * User: samxiao
 * Date: 2018/2/3
 * Time: 下午2:22
 */

namespace Bright\Aliyun\Sms;


use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

        $accessKeyId = config('aliyun.sms.access_key_id');
        $accessKeySecret = config('aliyun.sms.access_key_secret');
        $this->app->singleton(Sms::class, function ($app) use ($accessKeyId, $accessKeySecret) {
            return new Sms($accessKeyId, $accessKeySecret);
        });
    }


}