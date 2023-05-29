<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher;

class NotificationController extends Controller
{
    public function index()
    {
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );

        $pusher = new Pusher\Pusher(
            '04745098b594885850e9',
            '9f1a9066c78d5c0bf6c2',
            '1609039',
            $options
        );
        $data['message'] = 'Berhasil Simpan';
        $data['user']   = "Syahrizal";
        

        $pusher->trigger('Notification-info', "syahrizal", $data);

        return "Success Info";
    }
}
