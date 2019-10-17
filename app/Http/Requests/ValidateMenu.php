<?php

namespace App\Http\Requests;

use App\Models\Menu;
use Illuminate\Foundation\Http\FormRequest;

class ValidateMenu extends FormRequest
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
            'parent_id'=>'string',
            'sort'=>'required|integer',
            'name' =>'required|string:min:5',
            'link' => 'required|string', //regex:....
            'type' => 'required|in:'
            .Menu::TYPE_MENU . ','
            .Menu::TYPE_CATEGORY,
            'active'=>'boolean',
        ];
    }
}
