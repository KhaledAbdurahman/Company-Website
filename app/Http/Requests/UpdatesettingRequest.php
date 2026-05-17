<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatesettingRequest extends FormRequest
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
            'address' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'facebook' => 'url',
            'linkedin' => 'url',
            'twitter' => 'url',
            'instagram' => 'url',
            'youtube' => 'url',
        ];
    }

    public function attributes(): array
    {
        return [
            'address' => __("keywords.address"),
            'phone' => __("keywords.phone"),
            'email' => __("keywords.email"),
            'facebook' => __("keywords.facebook"),
            'linkedin' => __("keywords.linkedin"),
            'twitter' => __("keywords.twitter"),
            'instagram' => __("keywords.instagram"),
            'youtube' => __("keywords.youtube"),
        ];
    }
}
