<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Tariff;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function showPaymentForm($id)
    {
        $tariff = Tariff::find($id);
        return view('pages.payment_form', compact('tariff'));
    }

    public function addPayment(Request $request, $id)
    {
        $tariff = Tariff::find($id);
        $request->validate([
            'card_number' => 'required|string|max:255',
            'expiration_date' => 'required|string|max:255',
            'cvc' => 'required|string|max:255',
        ]);

        Subscription::create([
            'user_id' => auth()->user()->id,
            'tariff_id' => $tariff->id,
            'start_date' => now(),
            'end_date' => now()->addDays($tariff->duration),
        ]);

        return redirect()->route('show.tariffs')->with('success', 'Подписка на тариф ' . $tariff->name . ' оформлена');
    }
}
