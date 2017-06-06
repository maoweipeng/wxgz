<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use function PHPSTORM_META\type;

class MenuController extends Controller
{
    public $menu;

    public function __construct(Application $app)
    {
        $this->menu = $app->menu;
    }

    public function menu()
    {
        $buttons = [
            [
                "type" => "view",
                "name" => "图书借阅",
                "key" => "menu1",
                "url" => "https://www.gdouplh.cn/main",
            ],
            [
                "name" => "主菜单",
                "sub_button" => [//子菜单
                    [
                        "type" => "view",
                        "name" => "百度",
                        "url" => "http://www.baidu.com/",
                        "key" => "rselfmenu_0_0",
                        "sub_button" => []
                    ],
                    [

                        "type" => "scancode_waitmsg",
                        "name" => "扫码带提示",
                        "key" => "rselfmenu_0_2",
                        "sub_button" => []
                    ],
                    [
                        "type" => "pic_sysphoto",
                        "name" => "拍照",
                        "key" => "rselfmenu_0_3",
                        "sub_button" => []
                    ],
                    [
                        "type" => "pic_photo_or_album",
                        "name" => "相册",
                        "key" => "rselfmenu_0_4",
                        "sub_button" => []
                    ]
                ],
            ],
            [
                "name" => "关于我们",
                "sub_button" => [//子菜单
                    [
                        "type" => "view",
                        "name" => "博客",
                        "url" => "https://www.maoweipeng.cn",
                        "key" => "rselfmenu_0_5",
                        "sub_button" => []
                    ],
                    [
                        "type" => "location_select",
                        "name" => "发送位置",
                        "sub_button" => [],
                        "key" => "rselfmenu_0_7"
                    ],
                    [
                        "type" => "click",
                        "name" => "点击事件",
                        "sub_button" => [],
                        "key" => "rselfmenu_0_8"
                    ], [
                        "type" => "scancode_push",
                        "name" => "扫码",
                        "sub_button" => [],
                        "key" => "rselfmenu_0_9"
                    ],
                ],
            ],
        ];
        $this->menu->add($buttons);
    }

}
