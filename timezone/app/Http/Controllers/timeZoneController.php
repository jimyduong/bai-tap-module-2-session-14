<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class timeZoneController extends Controller
{
    public function getAll(){
        return view('index');
    }

    public function checkTime($timezone = null){
        if (!empty($timezone)) {

            // Khởi tạo giá trị giờ theo múi giờ UTC
            $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

            // Thay đổi về múi giờ được chọn
            $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

            // Hiển thị giờ theo định dạng mong muốn
            $showTime = 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
        }
        return view('displayTime',compact('showTime'));
    }
}
