<?php

namespace App\Http\Controllers;

use App\Models\setting;
use App\Http\Requests\StoresettingRequest;
use App\Http\Requests\UpdatesettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = setting::findOrFail(1);
        return view('admin.settings.index', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesettingRequest $request, setting $setting)
    {
        $data = $request->validated();
        $setting->update($data);

        return to_route('admin.settings.index')->with('success', __('keywords.updated_successfully'));
    }

}
