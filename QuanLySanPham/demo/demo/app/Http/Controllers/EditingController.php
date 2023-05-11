<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditingController extends Controller
{
    public function create (Request $request, $modelName) {
        $adminUser = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        
        $configs = $model->editingConfigs();
        return view ('admin.editing', [
            'user'=>$adminUser,
            'modelName' => $modelName,
            'configs' => $configs
        ]);
    }

    public function store(Request $request, $modelName) {
        
        $adminUser = Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        $configs = $model->editingConfigs();
        $arrayValidateFields = [];

        foreach ($configs as $config) {
            if (!empty($config['validate'])) {
                $arrayValidateFields [$config['field']] = $config['validate']; 
            }
        }

        $arrayValidateFields = [ 
            'name' => 'required|max:100',
            'price' =>  'required|Numeric'
        ];
        $validated = $request->validate([$arrayValidateFields]);
        foreach ($configs as $config) {
            if (!empty($config) && $config ['editing'] == true) {
                switch ($config['type']) {
                    case "image":
                        if ($request->hasFile($config['field'])) {
                            $name = $request->file($config['field']) ->getClientOriginalName();
                            $path = $request->file($config['field'])->storeAs(
                                'public',  $name
                            );
                            $model->{$config['field']} = '/'.str_replace("public", "storage", $path);
                        }
                        break;
                    default:
                    $model->{$config['field']} = $request->input($config['field']);
                        break;
                }
            }
        }

        return view ('admin.editing', [
            'success' => $model->save(),
            'user'=>$adminUser,
            'modelName' => $modelName,
            'configs' => $configs
        ]);

    }
}
