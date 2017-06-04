<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class WechatController extends Controller
{
    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
//        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $wechat = app('wechat');
        $userApi = $wechat->user;
        $wechat->server->setMessageHandler(function ($message) use ($userApi, $wechat) {
            switch ($message->MsgType) {
                case 'event'://事件处理
                    if ($message->Event == 'subscribe') {//关注事件
                        return '你好，欢迎关注霹雳火团队';
                    }
                    if ($message->Event == 'CLICK') {//点击事件
                        if ($message->EventKey == 'rselfmenu_0_8') {
                            return '你点击了事件';
                        }
                    }
                    break;
                case 'text':
                    return '你好' . $userApi->get($message->FromUserName)->nickname;
                    break;
                case 'image':
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                // ... 其它消息
                default:

                    return '收到其它消息';
                    break;
            }

        });

//        Log::info('return response.');
        $response = $wechat->server->serve();
        return $response;
    }

    public function test()
    {
//        echo phpinfo();
        return 'successful';
    }
}
