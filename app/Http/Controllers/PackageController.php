<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.packages_list', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.package_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name_package' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'weight' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'date' => ['required', 'date'],
        ]);

        Package::create([
            'name_package' => $request->name_package,
            'description' => $request->description,
            'weight' => $request->weight,
            'price' => $request->price,
            'date' => $request->date,
            'user_id' => Auth::user()->id,
        ]);

        return redirect(route('package.index'))->with('message','Colis ajouté avec succès');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'edit_name_package' => ['required', 'string', 'max:255'],
            'edit_description' => ['required', 'string'],
            'edit_weight' => ['required', 'numeric'],
            'edit_price' => ['required', 'numeric'],
            'edit_date' => ['required', 'date'],
            'edit_package_id' => ['required', 'numeric'],
            'edit_user_id' => ['required', 'numeric'],
        ]);

        $package = Package::find($request->edit_package_id);

        $package->update([
            'name_package' => $request->edit_name_package,
            'description' => $request->edit_description,
            'weight' => $request->edit_weight,
            'price' => $request->edit_price,
            'date' => $request->edit_date,
            'user_id' => $request->edit_user_id,
        ]);

        return redirect(route('package.index'))->with('message','Colis mis à jour avec succès');
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
