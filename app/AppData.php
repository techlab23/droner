<?php
namespace App;
use App\User;
use Auth;
class AppData {
  public static function loadInitialData() {
    if(Auth::check())
    {
      return [
        'user' => Auth::user()
      ];
    }
  }
}