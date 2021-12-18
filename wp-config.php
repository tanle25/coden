<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'coding_house' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8Y<U=<`6.+CGQ([?T-NMy33ot/]*b]@/1#?m)ac9C}|rLo(v5.!;]nBS? N7t2B3' );
define( 'SECURE_AUTH_KEY',  ',%#Cf6.B24om}FwRlB3`*d#jpj3K+9UxC(c3tD bDBJoHQ{tXR{3 m=+1A{JmwVw' );
define( 'LOGGED_IN_KEY',    'x0{-[5idw0.]wX8`ed:t05Jl#!G@(;*V:_ib$#)CP1!H$r3#;E|]I:O*,Q|Q$ dY' );
define( 'NONCE_KEY',        '#V#.CAopJlBj+:YpPHi&!IJg{}B={<35UAN[d_L!]&YcHX@4[xgG/6j@jwD|>l_d' );
define( 'AUTH_SALT',        '8O!m2li8o;1N7cil1>Vf~=lw,Iw_wq{l&!_2!cnK<1`pJf@xOyPz>]x2#AqcZ#{I' );
define( 'SECURE_AUTH_SALT', 'XH[D|>MgGew1~OPw<iEN?#JT/tGDB:qh*K+!DO=%SL{dEIux]:foCSvdK%,t>-M4' );
define( 'LOGGED_IN_SALT',   'KLKyx.wQ*i!m]RD>Dc0G+!SF~F B=k;p1OCA$ncuf[Lmd5+;k`x1mnDT|}R-N7ar' );
define( 'NONCE_SALT',       'g:Eds3vqG5:Dt1]@bIBAA:@qaQthbTV}0%h<h|x~:r&>{<ZrgbOi&tDGK~fQ6;yW' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('FS_METHOD','direct');
/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
