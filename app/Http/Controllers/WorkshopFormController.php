<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopFormController extends Controller
{
    public function index()
    {
        return view('workshop.form');
    }

    // รับค่าจากฟอร์ม
    public function store(Request $request)
    {
        // รับค่าทุกช่อง (ยกเว้นไฟล์)
        $data = $request->all();

        return view('workshop.result', compact('data'));
    }
}
