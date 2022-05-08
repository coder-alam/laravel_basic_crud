<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicCrudController extends Controller {
    public function onSelect() {
        $jsonData = DB::select('select * from students where id = ?', [3]);
        $jsonDecode = json_encode($jsonData);
        $selectData = json_decode($jsonDecode);
        return view('select', ['selectKey' => $selectData]);
    }
    public function onInsert(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $cla = $request->input('class');
        $roll = $request->input('roll');
        $result = DB::insert('INSERT INTO students(`name`, `email`, `class`, `roll`)
         VALUES (?, ?, ?, ?)', [$name, $email, $cla, $roll]);
        return ($result == true ? 'Data insert success!' : 'Data insert failed!');

    }
    public function onDelete(Request $request) {
        $id = $request->input('id');
        $result = DB::delete('DELETE from students WHERE id = ? ', [$id]);
        return ($result == true ? 'Data deleted successfully!' : 'Somethings wrong!');

    }
    public function onUpdate(Request $request) {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $cla = $request->input('class');
        $roll = $request->input('roll');

        $result = DB::update('UPDATE `students` SET `name`=?,`email`=?,`class`=?,`roll`=? WHERE `id` = ?', [$name, $email, $cla, $roll, $id]);
        return ($result == true ? 'Update data success!' : 'Update data failed!');
    }
}
