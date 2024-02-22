<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\User;
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
        $packages = Package::with('level')->get();
        $users = User::all();
        return view('admin.packages.packages_list', compact('packages', 'users'));
    }

    public function byUser($user_id)
    {
        $packages = Package::where('user_id', $user_id)->with('level')->get();
        $users = User::all();
        return view('admin.packages.packages_list', compact('packages', 'users'));
    }

    public function editPackageLevel($package_id)
    {
        $package = Package::find($package_id);
        $package->update([
            'level_id' => 2,
        ]);
        return redirect(route('packages.in.progress'))->with('message','Colis en cours de traitement');
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
            'user_id' => ['required', 'numeric'],
            'address' => ['required', 'string'],
        ]);

        Package::create([
            'name_package' => $request->name_package,
            'description' => $request->description,
            'weight' => $request->weight,
            'price' => $request->price,
            'date' => $request->date,
            'user_id' => $request->user_id,
            'address' => $request->address,
        ]);

        if ($request->by_user == 0) {
            return redirect(route('packages.by.user'))->with('message','Colis ajouté avec succès');
        }else {
            return redirect(route('package.index'))->with('message','Colis ajouté avec succès');
        }
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
            'level_id' => ['required', 'numeric'],
            'address' => 'required|string|max:255',
        ]);

        $package = Package::find($request->edit_package_id);

        $package->update([
            'name_package' => $request->edit_name_package,
            'description' => $request->edit_description,
            'weight' => $request->edit_weight,
            'price' => $request->edit_price,
            'date' => $request->edit_date,
            'user_id' => $request->edit_user_id,
            'level_id' => $request->level_id,
            'address' => $request->address,
        ]);

        return redirect(route('package.index'))->with('message','Colis mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect(route('package.index'))->with('message','Colis supprimé avec succès');
    }
}
