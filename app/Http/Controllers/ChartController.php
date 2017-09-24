<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logs;
use DB;

class ChartController extends Controller
{
    public function index($month = null)
    {
      if ($month) {
        if ($month < 10) {
          $month = '0'.$month;
        }
        $user_agent = Logs::select(['user_agent', DB::raw('count(user_agent) as count')])
                          ->where('created_at', 'like', '%-' . $month . '%')
                          ->groupBy('user_agent')
                          ->orderBy('user_agent')
                          ->get();
        $url = Logs::select(['url', DB::raw('count(url) as count')])
                          ->where('created_at', 'like', '%-' . $month . '%')
                          ->groupBy('url')
                          ->orderBy('url')
                          ->get();
        $http_host = Logs::select(['http_host', DB::raw('count(http_host) as count')])
                          ->where('created_at', 'like', '%-' . $month . '%')
                          ->groupBy('http_host')
                          ->orderBy('http_host')
                          ->get();
      } else {
        $user_agent = Logs::select(['user_agent', DB::raw('count(user_agent) as count')])
                          ->groupBy('user_agent')
                          ->orderBy('user_agent')
                          ->get();
        $url = Logs::select(['url', DB::raw('count(url) as count')])
                          ->groupBy('url')
                          ->orderBy('url')
                          ->get();
        $http_host = Logs::select(['http_host', DB::raw('count(http_host) as count')])
                          ->groupBy('http_host')
                          ->orderBy('http_host')
                          ->get();
      }
      return view('welcome', ['data_user_agent' => $user_agent, 'data_url' => $url, 'data_http_host' => $http_host, 'month' => $month]);
    }
}
