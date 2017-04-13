<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;

/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2017/4/13
 * Time: 下午10:02
 */
class LoginUserComposer
{
    public function compose(View $view)
    {
        $view->with('user',session('power.home.user'));
    }
}