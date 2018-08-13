<?php

namespace App\Http\Controllers;

use App\Helpers;



use App\Contribution;

use App\Expense;
use App\ExpenseType;

use App\OtherIncome;
use App\Payroll;
use App\PledgePayment;

use App\User;




use Laracasts\Flash\Flash;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function cash_flow(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $expenses = Helpers::total_expenses($request->start_date, $request->end_date);
        // $payroll = Helpers::total_payroll($request->start_date, $request->end_date);
        $contributions = Helpers::total_contributions($request->start_date, $request->end_date);
        $pledges = Helpers::total_pledges_payments($request->start_date, $request->end_date);

        $total_payments = $expenses;
        $total_receipts = $pledges + $contributions;
        $cash_balance = $total_receipts - $total_payments;
        return view('report.cash_flow',
            compact('expenses', 'payroll', 'contributions', 'total_payments', 'other_income', 'pledges',
                'interest_paid', 'fees_paid', 'penalty_paid', 'total_receipts', 'cash_balance', 'start_date',
                'end_date'));
    }


    public function profit_loss(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $expenses = Helpers::total_expenses($request->start_date, $request->end_date);
        $payroll = Helpers::total_payroll($request->start_date, $request->end_date);
        $contributions = Helpers::total_contributions($request->start_date, $request->end_date);
        // $other_income = Helpers::total_other_income($request->start_date, $request->end_date);
        $pledges = Helpers::total_pledges_payments($request->start_date, $request->end_date);
        // $operating_expenses = $expenses + $payroll;
        $operating_profit = $contributions + $pledges;
        $gross_profit = $operating_profit;
        $net_profit = $gross_profit;
        //build graphs here
        $monthly_net_income_data = array();
        $monthly_operating_profit_expenses_data = array();
        $monthly_overview_data = array();
        if (isset($request->end_date)) {
            $date = $request->end_date;
        } else {
            $date = date("Y-m-d");
        }
        $start_date1 = date_format(date_sub(date_create($date),
            date_interval_create_from_date_string('1 years')),
            'Y-m-d');
        $start_date2 = date_format(date_sub(date_create($date),
            date_interval_create_from_date_string('1 years')),
            'Y-m-d');
        $start_date3 = date_format(date_sub(date_create($date),
            date_interval_create_from_date_string('1 years')),
            'Y-m-d');
        for ($i = 1; $i < 14; $i++) {
            $d = explode('-', $start_date1);
            $o_profit = Contribution::where('year', $d[0])->where('month',
                    // $d[1])->sum('amount') + OtherIncome::where('year', $d[0])->where('month',
                    $d[1])->sum('amount') + PledgePayment::where('year', $d[0])->where('month', $d[1])->sum('amount');
            $o_expense = Expense::where('year', $d[0])->where('month',
                $d[1])->sum('amount');
            // foreach (Payroll::where('year', $d[0])->where('month',
            //     $d[1])->get() as $key) {
            //     $o_expense = $o_expense + Helpers::single_payroll_total_pay($key->id);
            // }

            $ext = ' ' . $d[0];
            $n_income = $o_profit - $o_expense;
            array_push($monthly_net_income_data, array(
                'month' => date_format(date_create($start_date1),
                    'M' . $ext),
                'amount' => $n_income

            ));
            //add 1 month to start date
            $start_date1 = date_format(date_add(date_create($start_date1),
                date_interval_create_from_date_string('1 months')),
                'Y-m-d');
        }
        for ($i = 1; $i < 14; $i++) {
            $d = explode('-', $start_date2);
            //get loans in that period
            $o_profit = Contribution::where('year', $d[0])->where('month',
                    // $d[1])->sum('amount') + OtherIncome::where('year', $d[0])->where('month',
                    $d[1])->sum('amount') + PledgePayment::where('year', $d[0])->where('month', $d[1])->sum('amount');
            $o_expense = Expense::where('year', $d[0])->where('month',
                $d[1])->sum('amount');
            // foreach (Payroll::where('year', $d[0])->where('month',
            //     $d[1])->get() as $key) {
            //     $o_expense = $o_expense + Helpers::single_payroll_total_pay($key->id);
            // }

            $ext = ' ' . $d[0];
            array_push($monthly_operating_profit_expenses_data, array(
                'month' => date_format(date_create($start_date2),
                    'M' . $ext),
                'profit' => $o_profit,
                'expenses' => $o_expense

            ));
            //add 1 month to start date
            $start_date2 = date_format(date_add(date_create($start_date2),
                date_interval_create_from_date_string('1 months')),
                'Y-m-d');
        }
        for ($i = 1; $i < 14; $i++) {
            $d = explode('-', $start_date3);
            //get loans in that period
            // $contributions = Contribution::where('year', $d[0])->where('month',
            //         $d[1])->sum('amount') ;
            // $pledges=PledgePayment::where('year', $d[0])->where('month', $d[1])->sum('amount');
            // $other_income=OtherIncome::where('year', $d[0])->where('month',
            //     $d[1])->sum('amount');

            // $ext = ' ' . $d[0];
            // array_push($monthly_overview_data, array(
            //     'month' => date_format(date_create($start_date3),
            //         'M' . $ext),
            //     'contributions' => $contributions,
            //     'pledges' => $pledges,
            //     'other_income' => $other_income,
            // ));
            //add 1 month to start date
            $start_date3 = date_format(date_add(date_create($start_date3),
                date_interval_create_from_date_string('1 months')),
                'Y-m-d');
        }
        $monthly_net_income_data = json_encode($monthly_net_income_data);
        $monthly_operating_profit_expenses_data = json_encode($monthly_operating_profit_expenses_data);
        $monthly_overview_data = json_encode($monthly_overview_data);
        return view('report.profit_loss',
            compact('expenses', 'payroll', 'operating_expenses', 'other_income',
                'contributions', 'pledges', 'operating_profit', 'gross_profit', 'start_date',
                'end_date', 'net_profit', 'monthly_net_income_data',
                'monthly_operating_profit_expenses_data', 'monthly_overview_data', 'other_expenses'));
    }
}
