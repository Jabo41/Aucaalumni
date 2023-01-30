<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class DashboardController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        //analytics for opportunities
        $opportunities = DB::table('opportunities')
            ->whereNotNull('status')
            ->select(DB::raw("status"), DB::raw('count(*) as total'))
            ->groupBy('status')
            ->get();
        $opportunitiesData =  ['status' => json_encode($opportunities->pluck('status')), 'total' => json_encode($opportunities->pluck('total'))];
        //analytics for users
        $user = [User::where('is_staff', true)->count(), User::where('is_staff', false)->count()];
        $userData = json_encode($user);
        //analytics for events
        $events = DB::table('social_activities')
            ->select(DB::raw("MONTH(created_at) as month, YEAR(created_at) as year"), DB::raw('count(*) as total'))
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('year', 'month')
            ->get();
        $months = CarbonPeriod::create(Carbon::create(Carbon::now()->year)->startOfYear(), '1 month', Carbon::create(Carbon::now()->year)->endOfYear());
        $eventsData = $this->formatData($events, $months,);

        return view('backend.layouts.dashboard', compact('sliders', 'opportunitiesData', 'userData', 'eventsData'));
    }

    public function formatData($orders, $periods)
    {
        foreach ($periods as $month) {
            $order = $orders->where('month', Carbon::parse($month)->format('m'))->first();
            $monthFormat[] = ($month->isSameMonth() ? 'This Month' : $month->format('M Y'));


            $data[] = $order->total ?? 0;
        }

        return ['months' => json_encode($monthFormat), 'data' => json_encode($data)];
    }
}
