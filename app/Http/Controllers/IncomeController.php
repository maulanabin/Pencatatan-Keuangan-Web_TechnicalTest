<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Utils\Response;

use function PHPUnit\Framework\isNull;

class IncomeController extends Controller
{
    use Response;

    public function index()
    {
        $incomes = Income::all();

        return  $this->responseData($incomes, 'success');
    }

    public function store(Request $request)
    {
        $incomes = $request->validate([
            'income_name' => 'required',
            'total' => 'required',
            'note' => 'required',
            'user_id' => 'required'
        ]);

        $incomes = Income::create($incomes);

        return  $this->responseData($incomes, 'success');
    }

    public function show(Income $incomes, $id)
    {
        $incomes = Income::whereId($id)->first();

        if ($incomes == null) {
            return $this->responseDataNotFound('Income', isNull($incomes));
        }

        return  $this->responseData($incomes, 'success');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'income_name' => 'required',
            'total' => 'required',
            'note' => 'required',
            'user_id' => 'required'
        ]);

        $incomes = Income::whereId($id)->first();

        if ($incomes == null) {
            return $this->responseDataNotFound('Income is Not Found', isNull($incomes));
        }

        $incomes = $incomes->update($request->all());

        return response()
            ->json(['status' => 'true', 'message' => 'success' ,'data' => $request->all() ]);
    }

    public function destroy($id)
    {
        $incomes = Income::where('id', $id)->first();

        if ($incomes == null) {
            return $this->responseDataNotFound('Income is Not Found',isNull($incomes));
        }

        $incomes = $incomes->delete();

        return $this->responseData($incomes,'success');
    }
}
