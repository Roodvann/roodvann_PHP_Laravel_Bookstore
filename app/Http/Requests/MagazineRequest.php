<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MagazineRequest extends FormRequest
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
            'price' => 'required|numeric|min:1|max:1000000',
            'subscriptionPrice' => 'required|numeric|min:1|max:1000000',
            'title' => 'required|min:1|max:30',
            'pages' => 'required|integer|min:1|max:1000',
            'publisher' => 'required|min:1|max:30',
            'year' => 'required|integer|min:1|max:2018',
            'number' => 'required|integer|min:1|max:1000',
            'numsPerYear' => 'required|integer|min:1|max:1000',
            'size_id' => 'required|integer|min:1|max:1000',
        ];
    }
}
