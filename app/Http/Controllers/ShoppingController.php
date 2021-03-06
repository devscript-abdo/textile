<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrderRequest;
use App\Mail\Order\OrderMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShoppingController extends Controller
{
    //

    public function cart()
    {
        $productsCart = \MailletexCart::all();

        return view('textile.pages.cart.index', compact('productsCart'));
    }

    public function cartUpdate(Request $request)
    {

        // dd($request->productId);
        \MailletexCart::update($request->productId, $request->quantity);
        // \MailletexCart::update($request->productId, ['name' => 'New item name']);
        return redirect()->back();
    }

    public function cartDelete(Request $request)
    {
        //dd($request);
        \MailletexCart::remove($request->id);
    }

    public function cartSend(OrderRequest $request)
    {

        //  dd($commands);
        /* $order = new Order();
        $order->nom = $request->nom;
        $order->prenom = $request->prenom;
        $order->adresse = $request->adresse;
        $order->telephone = $request->telephone;
        $order->email = $request->email;
        $order->profession = $request->profession;
        $order->entreprise = $request->entreprise;
        $order->message = $request->message;

        $order->product_name = 'alpha';
        $order->quantity = 100;
        $order->save();*/
        /******************************************* */
        $data = (object)[
            'nom' => $request->nom,
            'prenom' =>  $request->prenom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'profession' => $request->profession,
            'entreprise' => $request->entreprise,
            'message' => $request->message,
        ];
        $productsCart = \MailletexCart::all();

        $email = setting('contact.email_reciver') ?? 'contact@' . request()->getHost();

        if ($productsCart) {

            Mail::to($email)->send(new OrderMail($data, $productsCart));

            // check for failures
            if (!Mail::failures()) {

                \MailletexCart::destroy();
            }

            return redirect()->route('cart')->with('cartSend', 'Merci pour votre demande de devis');
        }
    }
}
