<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Utils\ResponseFormater;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    // fetch all transaction
    public function fetchAll(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $status = $request->input('status');

        if ($id) {
            $transaction = Transaction::with(['items.product'])->find($id);
            if ($transaction) {
                return ResponseFormater::success($transaction, 'Data Berhasil Di Ambil');
            } else {
                return ResponseFormater::error(NULL, 'Data tidak ditemeukan', 404);
            }
        }

        $transaction = Transaction::with(['items.product'])->where('users_id', Auth::user()->id);


        if ($status) {
            $transaction->where('status', $status);
        }

        return ResponseFormater::success($transaction->paginate($limit), 'Data Berhasil Diambil');
    }
}
