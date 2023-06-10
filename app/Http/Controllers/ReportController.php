<?php

namespace App\Http\Controllers;

use App\Http\Utils\Response;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function PHPUnit\Framework\isNull;

class ReportController extends Controller
{
    use Response;

    public function index()
    {
        $reports = Report::all()->load('pemasukan', 'pengeluaran', 'pemasukan.user');

        return  $this->responseData($reports, 'success');
    }

    public function store(Request $request)
    {
        $reports = $request->validate([
            'description' => 'required',
            'income_id' => 'required',
            'expense_id' => 'required',
        ]);

        $reports = Report::create($reports);

        return  $this->responseData($reports, 'success');
    }

    public function show($id)
    {
        $reports = Report::whereId($id)->first();

        if ($reports == null) {
            return $this->responseDataNotFound('Report', isNull($reports));
        }

        return  $this->responseData($reports, 'success');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'income_name' => 'required',
            'total' => 'required',
            'note' => 'required',
            'user_id' => 'required'
        ]);

        $reports = Report::whereId($id)->first();

        if ($reports == null) {
            return $this->responseDataNotFound('Report is Not Found', isNull($reports));
        }

        $reports = $reports->update($request->all());

        return $this->responseData($reports,'success');
    }

    public function destroy(Report $reports, $id)
    {
        $reports = Report::where('id', $id)->first();

        if ($reports == null) {
            return $this->responseDataNotFound('Report is Not Found',isNull($reports));
        }

        $reports = $reports->delete();

        return $this->responseData($reports,'success');
    }
}
