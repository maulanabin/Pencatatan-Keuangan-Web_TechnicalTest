<?php

namespace App\Http\Controllers;

use App\Http\Utils\Response;
use App\Models\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function PHPUnit\Framework\isNull;


class ExpenseController extends Controller
{
    use Response;

    public function index()
    {
        $expenses = Expense::all();

        return  $this->responseData($expenses, 'success');
    }


    public function store(Request $request)
    {
        $expenses = $request->validate([
            'expense_name' => 'required',
            'total' => 'required',
            'note' => 'required',
            'user_id' => 'required'
        ]);

        $expenses = Expense::create($expenses);

        return  $this->responseData($expenses, 'success');
    }

    public function show($id)
    {
        $expenses = Expense::whereId($id)->first();

        if ($expenses == null) {
            return $this->responseDataNotFound('Expense', isNull($expenses));
        }

        return  $this->responseData($expenses, 'success');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'expense_name' => 'required',
            'total' => 'required',
            'note' => 'required',
            'user_id' => 'required'
        ]);

        $expenses = Expense::whereId($id)->first();

        if ($expenses == null) {
            return $this->responseDataNotFound('Expense is Not Found', isNull($expenses));
        }

        $expenses = $expenses->update($request->all());

        return response()
            ->json(['status' => 'true', 'message' => 'success' ,'data' => $request->all() ]);
    }

    public function destroy($id)
    {
        $expenses = Expense::where('id', $id)->first();

        if ($expenses == null) {
            return $this->responseDataNotFound('Expense is Not Found',isNull($expenses));
        }

        $expenses = $expenses->delete();

        return $this->responseData($expenses,'success');
    }
}
