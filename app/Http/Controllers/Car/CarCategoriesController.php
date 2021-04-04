<?php

namespace App\Http\Controllers\Car;


use App\Http\Controllers\Controller;

use App\car\CarCategories;
use Illuminate\Http\Request;

class CarCategoriesController extends Controller
{
    public function __construct() {
        $this->middleware('role:1');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carcategories = CarCategories::all();
        return view('Car.admin.carcategory.index',['carcategories' => $carcategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Car.admin.carcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'car_category' => 'required',
        ]);

        $car_category = new CarCategories();
        $car_category->car_category = $request->input('car_category');
        $car_category->save();
        return redirect('/carcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarCategories  $carCategories
     * @return \Illuminate\Http\Response
     */
    public function show(CarCategories $carCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarCategories  $carCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car_category = CarCategories::find($id);
        return view('Car.admin.carcategory.edit', compact('car_category'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarCategories  $carCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car_category = CarCategories::find($id);
        $car_category->car_category = request('car_category');
        $car_category->save();
        return redirect('/carcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarCategories  $carCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_category= CarCategories::find($id)->delete();
        return redirect()->back();
    }
}
