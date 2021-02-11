<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view("welcome", compact("animals"));
    }

    public function store(Request $request)
    {
        $store = new Animal;
        $store->name = $request->name;
        $store->age = $request->age;
        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Animal::find($id);
        $destroy->delete();
        return redirect("/");
    }

    public function show($id)
    {
        $show = Animal::find($id);
        return view("show", compact("show"));
    }

    public function edit($id)
    {
        $edit = Animal::find($id);
        return view("edit", compact("edit"));
    }

    public function update($id, Request $request)
    {
        $animal = Animal::find($id);
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->save();
        return redirect("/");
    }
}
