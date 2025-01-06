<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Custom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomController extends Controller
{
    public function index()
    {
        $custom = Custom::all()->map(function ($item) {
            $item->no_tlpn_first = $this->formatPhoneNumber($item->no_tlpn_first);
            $item->no_tlpn_second = $this->formatPhoneNumber($item->no_tlpn_second);
            return $item;
        });

        return view('admin.custom.index', compact('custom'));
    }
    
    public function edit($id)
    {
        $custom = Custom::findOrFail($id);
        return view('admin.custom.edit', compact('custom'));
    }

    public function update(Request $request, $id)
    {
        $custom = Custom::findOrFail($id);

        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_background' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_promo_first' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'image_promo_second' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'image_profile_first' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'image_profile_second' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'text_promo' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'link_ig' => 'required|string|max:255',
            'no_tlpn_first' => 'required|string|max:255',
            'no_tlpn_second' => 'required|string|max:255',
        ]);

        $data = $request->except(['_token']);

        $fileFields = [
            'logo', 
            'image_background', 
            'image_promo_first', 
            'image_promo_second', 
            'image_profile_first', 
            'image_profile_second'
        ];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                if (!empty($custom->$field)) {
                    Storage::disk('public')->delete($custom->$field);
                }
                $data[$field] = $request->file($field)->store('images/customs', 'public');
            }
        }

        $custom->update($data);

        return redirect()->route('admin.custom.index')->with('success', 'Data berhasil diperbarui.');
    }

    private function formatPhoneNumber($number)
    {
        $number = preg_replace('/\D/', '', $number);

        if (substr($number, 0, 1) === '0') {
            $number = '+62' . substr($number, 1);
        } elseif (substr($number, 0, 2) === '62') {
            $number = '+62' . substr($number, 2);
        } elseif (substr($number, 0, 3) !== '+62') {
            $number = '+62' . $number;
        }

        return preg_replace('/(\+62)(\d{3})(\d{4})(\d+)/', '$1 $2 $3 $4', $number);
    }

}
