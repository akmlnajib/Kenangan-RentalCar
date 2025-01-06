<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Custom;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        
        $totalTransactionsCount = Transaction::count();

        $currentMonth = now()->month;
        $currentYear = now()->year;

        $totalRevenueThisMonth = Transaction::whereMonth('created_at', $currentMonth)
                                ->whereYear('created_at', $currentYear)
                                ->sum('total_transaksi');

        $totalRevenueThisYear = Transaction::whereYear('created_at', $currentYear)
        ->sum('total_transaksi');

        $totalTransactions = Transaction::sum('total_transaksi');
        

        return view('admin.dashboard', compact('totalRevenueThisMonth', 'totalTransactionsCount', 'totalRevenueThisYear', 'totalTransactions' ));
    }

}
