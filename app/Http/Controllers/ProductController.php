<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->get()->all();
        return view('Pages.productlist', compact($product));
    }

    public function create()
    {
        return view('Pages.newproduct');
    }

    /**
     * @throws ValidationException
     */
    public function NewProduct(Request $request): RedirectResponse
    {
        $this->validate($request, rules: array(
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ));

        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->quantity,
        ]);

        return redirect()->back()->with('success', 'Products Insert Successfully');
    }
}
