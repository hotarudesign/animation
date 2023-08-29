<?php
// imageパス
define('ImgPath', get_template_directory_uri() . "/assets/images");

// ナビメニューの追加
function theme_setup()
{
    //メニュー
    register_nav_menus(
        array(
            'g-nav' => 'ヘッダーメニュー',
            'f-nav' => 'フッターメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');
