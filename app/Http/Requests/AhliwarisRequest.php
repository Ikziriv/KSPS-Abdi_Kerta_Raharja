<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AhliwarisRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'no_ktp' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tlp' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'kodepos' => 'required',
            'status' => 'required',
            'jml_anak' => 'required',
            'hubungan' => 'required'
        ];
    }
}
