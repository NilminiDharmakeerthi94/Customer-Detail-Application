<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   

    public function index()
    {
        $customers = Customer::all();
        return view('customers',['customers'=>$customers,'layout'=>'index']);
    }

    public function create()
    {
        $customers = Customer::all();
        return view('customers',['customers'=>$customers,'layout'=>'create']);
    }



    public function store(Request $request){
        $customers = new Customer();
        $customers->name= $request->input('name');
        $customers->contact= $request->input('contact');         //store function
        $customers->item= $request->input('item');
        $customers->save();
        return redirect('/');

    }

    public function show($id)
    {
        $customer = Customer::find($id);
        $customers = Customer::all();
        return view('customers',['customers'=>$customers,'customer'=>$customer,'layout'=>'show']);
    }
   /* public function search(Request $request) {
        $query = $request->get('q');
        $results = Item::where('name_items', 'LIKE', '%' . $query . '%')
        ->paginate((env('PER_PAGE')));
        return view('items.result', compact('results', 'query'));
    }
*/
public function search(Request $request){
    $query = $request ->get('q');
    $results = Customer :: where ('name', 'LIKE', '%' . $query . '%')->paginate((env('PER_PAGE')));
    return view('result', compact('results', 'query'));
}


    public function edit($id)
    {
        $customer = Customer::find($id);
        $customers = Customer::all();
        return view('customers',['customers'=>$customers,'customer'=>$customer,'layout'=>'edit']);
    }
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->contact = $request->input('contact');
        $customer->item = $request->input('item');
        
        $customer->save();
        return redirect('/');
    }
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/');
    }
}
