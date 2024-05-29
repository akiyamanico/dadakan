<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'email' => 'required|email',
            'telpon' => 'required|min:12',
            'alamat'=> 'required|string',
            'pendidikan_terakhir'=> 'required|string',
            'foto_user' => 'required|mimes:jpg,png,jpeg',
        ];
    }
    public function messages(): array
    {
        return [
            'nama.required' => 'Data Harus Diisikan!',
            'email.required' => 'Email Harus Diisikan!',
            'email.email' => 'Pastikan Yang dimasukan berupa email!',
            'telpon.required' => 'Telepon wajib di isikan',
            'alamat.required' => 'Alamat Wajid Diisikan!',
            'pendidikan_terakhir.required'=> 'Pendidikan Terakhir Wajib Diisikan!',
            'foto_user.mimes'=> 'Foto Wajib Diisikan!',
        ];
    }
}
