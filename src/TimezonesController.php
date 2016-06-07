<?php
/**
 * Created by PhpStorm.
 * User: alimaisam
 * Date: 7/6/2016
 * Time: 2:23 PM
 */

namespace SeekAsia\Timezones;


use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone = NULL)
    {
        $current_time = ($timezone) ? Carbon::now(str_replace('-', '/', $timezone)) : Carbon::now();
        return view('timezones::time', compact('current_time'));
    }
}