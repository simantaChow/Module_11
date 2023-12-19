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
        $products = DB::table('products')->get()->all();
        return view('Pages.productlist', compact('products'));
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

    public function showupdate($id)
    {
        $products = DB::table('products')->where('id',$id)->get();
        return view('Pages.updateproduct', compact('products'));
    }

    public function update(Request $request,$id)
    {
            $this->validate($request, rules: array(
                'name' => 'required|string|max:255',
                'price' => 'required|integer',
                'quantity' => 'required|integer',
            ));

            DB::table('products')->where('id',$id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'qty' => $request->quantity,
            ]);
            return redirect()->action([ProductController::class,'index']);
    }

    public function destroy($id)
    : RedirectResponse {
        DB::table('products')->where('id',$id)->delete();
        return redirect()->action([ProductController::class,'index']);
    }
}
