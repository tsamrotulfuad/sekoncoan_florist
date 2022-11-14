<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreTestimoniRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_pelanggan' => 'required|max:50',
            'asal_pelanggan' => 'required',
            'isi_testimoni' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nama_pelanggan.required' => 'Nama Pelanggan is required',
            'asal_pelanggan.required' => 'Asal Pelanggan is required',
            'isi_testimoni.required' => 'Isi Testimoni is required',
        ];
    }
}
