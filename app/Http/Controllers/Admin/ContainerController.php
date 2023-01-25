<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Container;
use Illuminate\Http\Request;
use Mockery\Matcher\Contains;

class ContainerController extends Controller
{
     public function index()
    {
        $containers = Container::where('softDeletes',1)->get();
        return view('container.index', compact('containers'));
    }

    public function store(Request  $request)
    {
        $request->validate([
            'bl_number'=> 'required|unique:containers,bl_number,',
            'container_no'=> 'required',
            'c_size'=> 'required',
            'seal_no'=> 'required',
            'vessel_name'=> 'required',
            'voyage'=> 'required',
            'place_receipt'=> 'required',
            'place_loading'=> 'required',
            'port_discharge'=> 'required',
            'final_destination'=> 'required',
            'comidity'=> 'required',
            'etd'=> 'required',
            'eta'=> 'required',
            'shipped_board'=> 'required',
            'bl_type'=> 'required',
            'issue_date'=> 'required',
            'location'=> 'required',
            'status'=> 'required',
        ]);
        $store = new Container();
        $store->bl_number = $request->bl_number;
        $store->supplier_name = $request->supplier_name;
        $store->container_no = $request->container_no;
        $store->c_size = $request->c_size;
        $store->seal_no = $request->seal_no;
        $store->receiver_name = $request->receiver_name;
        $store->vessel_name = $request->vessel_name;
        $store->voyage = $request->voyage;
        $store->place_receipt = $request->place_receipt;
        $store->place_loading = $request->place_loading;
        $store->port_discharge = $request->port_discharge;
        $store->final_destination = $request->final_destination;
        $store->comidity = $request->comidity;
        $store->mode = $request->mode;
        $store->gross_weight = $request->gross_weight;
        $store->remarks = $request->remarks;
        $store->etd = $request->etd;
        $store->eta = $request->eta;
        $store->shipped_board = $request->shipped_board;
        $store->bl_type = $request->bl_type;
        $store->issue_date = $request->issue_date;
        $store->location = $request->location;
        $store->status = $request->status;
        $store->save();
        return redirect()->back()->with('success', 'Container Added Successfully!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'bl_number'=> 'required|unique:containers,bl_number,'.$id,
            'container_no'=> 'required',
            'c_size'=> 'required',
            'seal_no'=> 'required',
            'vessel_name'=> 'required',
            'voyage'=> 'required',
            'place_receipt'=> 'required',
            'place_loading'=> 'required',
            'port_discharge'=> 'required',
            'final_destination'=> 'required',
            'comidity'=> 'required',
            'etd'=> 'required',
            'eta'=> 'required',
            'shipped_board'=> 'required',
            'bl_type'=> 'required',
            'issue_date'=> 'required',
            'location'=> 'required',
        ]);
        $update = Container::find($id);
        $update->bl_number = $request->bl_number;
        $update->supplier_name = $request->supplier_name;
        $update->container_no = $request->container_no;
        $update->c_size = $request->c_size;
        $update->seal_no = $request->seal_no;
        $update->receiver_name = $request->receiver_name;
        $update->vessel_name = $request->vessel_name;
        $update->voyage = $request->voyage;
        $update->place_receipt = $request->place_receipt;
        $update->place_loading = $request->place_loading;
        $update->port_discharge = $request->port_discharge;
        $update->final_destination = $request->final_destination;
        $update->comidity = $request->comidity;
        $update->mode = $request->mode;
        $update->gross_weight = $request->gross_weight;
        $update->remarks = $request->remarks;
        $update->etd = $request->etd;
        $update->eta = $request->eta;
        $update->shipped_board = $request->shipped_board;
        $update->bl_type = $request->bl_type;
        $update->issue_date = $request->issue_date;
        $update->location = $request->location;
        $update->status = $request->status;
        $update->save();
        return redirect()->back()->with('success', 'Container Updated Successfully!');
    }
     public function show($id)
    {
        $data['show'] = Container::find($id);
        return view('container.details', $data);
    }
    public function destroy($id)
    {
        $delete = Container::find($id);
        $delete->delete();
        return redirect()->back()->with('danger', 'Customer Delete Successfully!');
    }
    public function search()
    {
        $search = Container::get();
        return view('container.search', compact('search'));
    }
    public function getBLNumber(Request $request)
    {
        $query = $request->bl_number;
        $item = Container::where('bl_number', '=', $query)->first();
        return view('container.get_bl_no_by_ajax', compact('item'));

    }

}
