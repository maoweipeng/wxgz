<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;

class MessageController extends Controller
{
    //
    private $broadcast;

    public function __construct(Application $app)
    {
        $this->broadcast = $app->broadcast;
    }

    public function sendText()
    {
        $this->broadcast->previewTextByName("hello",'gdoumaoweipeng');
        return "send";
    }
}
