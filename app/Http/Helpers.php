<?php

// Doubleasam's helpers

namespace App;

use App\Asset;
use App\AssetValuation;
use App\AuditTrail;
use App\Contribution;
use App\Expense;
use App\MemberTag;
use App\OtherIncome;
use App\Payroll;
use App\PayrollMeta;
use App\Pledge;
use App\PledgePayment;

use App\Setting;
use Cartalyst\Sentinel\Laravel\Facades\Sentine;

class Helpers
{


	public static function pledge_money_due($id)
	{
		$pledge_fee = Pledge::find($id)->amount;
		$payments = PledgePayment::where('pledge_id', $id)->sum('amount');
		return $pledge_fee - $payments;
	}


	    public static function batch_total_amount($id, $start_date = '', $end_date = '')
    {
        if (empty($start_date)) {
            return Contribution::where('contribution_batch_id', $id)->sum('amount');
        } else {
            return Contribution::where('contribution_batch_id', $id)->whereBetween('date',
                [$start_date, $end_date])->sum('amount');

        }
    }

    public static function total_contributions($start_date = '', $end_date = '')
    {
        if (empty($start_date)) {
            return Contribution::sum('amount');
        } else {
            return Contribution::whereBetween('date',
                [$start_date, $end_date])->sum('amount');

        }
    }

    public static function fund_total_amount($id, $start_date = '', $end_date = '')
    {
        if (empty($start_date)) {
            return Contribution::where('fund_id', $id)->sum('amount');
        } else {
            return Contribution::where('fund_id', $id)->whereBetween('date',
                [$start_date, $end_date])->sum('amount');

        }
    }

    public static function campaign_total_amount($id, $start_date = '', $end_date = '')
    {
        if (empty($start_date)) {
            $amount = 0;
            foreach (Pledge::where('campaign_id', $id)->get() as $key) {
                $amount = $amount + PledgePayment::where('pledge_id', $key->id)->sum('amount');
            }
            return $amount;
        } else {

            $amount = 0;
            foreach (Pledge::where('campaign_id', $id)->whereBetween('created_at',
                [$start_date, $end_date])->get() as $key) {
                $amount = $amount + PledgePayment::where('pledge_id', $key->id)->sum('amount');
            }
            return $amount;

        }
    }

    public static function campaign_pledged_amount($id, $start_date = '', $end_date = '')
    {
        if (empty($start_date)) {

            return Pledge::where('campaign_id', $id)->sum('amount');
        } else {

            return Pledge::where('campaign_id', $id)->whereBetween('created_at',
                [$start_date, $end_date])->sum('amount');

        }
    }

    public static function total_pledges($start_date = '', $end_date = '')
    {
        if (empty($start_date)) {

            return Pledge::sum('amount');
        } else {

            return Pledge::whereBetween('created_at',
                [$start_date, $end_date])->sum('amount');

        }
    }
    public static function total_pledges_payments($start_date = '', $end_date = '')
    {
        if (empty($start_date)) {

            return PledgePayment::sum('amount');
        } else {

            return PledgePayment::whereBetween('created_at',
                [$start_date, $end_date])->sum('amount');

        }
    }


    public static function time_ago($eventTime)
    {
        $totaldelay = time() - strtotime($eventTime);
        if ($totaldelay <= 0) {
            return '';
        } else {
            if ($days = floor($totaldelay / 86400)) {
                $totaldelay = $totaldelay % 86400;
                return $days . ' days ago';
            }
            if ($hours = floor($totaldelay / 3600)) {
                $totaldelay = $totaldelay % 3600;
                return $hours . ' hours ago';
            }
            if ($minutes = floor($totaldelay / 60)) {
                $totaldelay = $totaldelay % 60;
                return $minutes . ' minutes ago';
            }
            if ($seconds = floor($totaldelay / 1)) {
                $totaldelay = $totaldelay % 1;
                return $seconds . ' seconds ago';
            }
        }
    }

    public static function member_total_contributions($id, $start_date = '', $end_date = '')
    {
        if (empty($start_date)) {

            return Contribution::where('member_id', $id)->sum('amount');
        } else {

            return Contribution::where('member_id', $id)->whereBetween('date',
                [$start_date, $end_date])->sum('amount');

        }
    }


    public static function member_total_pledges($id, $start_date = '', $end_date = '')
    {
        if (empty($start_date)) {

            return Pledge::where('member_id', $id)->sum('amount');
        } else {

            return Pledge::where('member_id', $id)->whereBetween('date',
                [$start_date, $end_date])->sum('amount');

        }
    }

    public static function member_total_pledges_payments($id, $start_date = '', $end_date = '')
    {
        if (empty($start_date)) {

            return PledgePayment::where('member_id', $id)->sum('amount');
        } else {

            return PledgePayment::where('member_id', $id)->whereBetween('date',
                [$start_date, $end_date])->sum('amount');

        }
    }

    // public static function single_payroll_total_pay($id)
    // {
    //     return PayrollMeta::where('payroll_id', $id)->where('position', 'bottom_left')->sum('value');
    // }

    // public static function single_payroll_total_deductions($id)
    // {
    //     return PayrollMeta::where('payroll_id', $id)->where('position', 'bottom_right')->sum('value');
    // }

    public static function total_expenses($start_date = '', $end_date = '')
    {
        if (empty($start_date)) {
            return Expense::sum('amount');
        } else {
            return Expense::whereBetween('date', [$start_date, $end_date])->sum('amount');

        }

    }

    // public static function total_expenses($start_date = '', $end_date = '')
    // {
    //     if (empty($start_date)) {
    //         return Expense::sum('amount');
    //     } else {
    //         return Expense::whereBetween('date', [$start_date, $end_date])->sum('amount');

    //     }

    // }

 

    public static function total_payroll($start_date = '', $end_date = '')
    {
        if (empty($start_date)) {
            $payroll = 0;
            foreach (Payroll::all() as $key) {
               return $payroll; 
            }
            
        } else {
            $payroll = 0;
            foreach (Payroll::whereBetween('date', [$start_date, $end_date])->get() as $key) {
                return $payroll;

            }
            
        }

    }


    // public static function total_other_income($start_date = '', $end_date = '')
    // {
    //     if (empty($start_date)) {
    //         return OtherIncome::sum('amount');
    //     } else {
    //         return OtherIncome::whereBetween('date', [$start_date, $end_date])->sum('amount');

    //     }

    // }
}