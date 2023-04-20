<?php

require_once "../autoload.php";

Session::set('message', "Gửi lời nhắn tới người quản trị thành công");
redirect('/');
