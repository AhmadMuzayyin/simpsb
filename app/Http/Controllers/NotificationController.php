<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function read(User $user)
    {
        try {
            $notifications = $user->unreadNotifications;
            foreach ($notifications as $key => $value) {
                $value->markAsRead();
            }
            return redirect()->back()->with('succes', 'Berhasil');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal');
        }
    }
}
