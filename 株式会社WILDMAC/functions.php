<?php
//カスタムメニュー
register_nav_menus( //メニュー機能をオンにする
array(
'place_global' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
'place_utility' => 'ユーティリティ',
'place_sidebar' => 'サイドメニュー',
'place_footer' => 'フッター',
)
);
add_theme_support('post-thumbnails');
add_image_size('thumbside', 85, 85, true);
?>