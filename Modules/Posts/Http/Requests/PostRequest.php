<?php

namespace Modules\Posts\Http\Requests;
use Modules\posts\Entities\Post;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->request->get('id') ? ',' . $this->request->get('id') : '';
        return [
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:Ps_posts,id,'.$id,
            'body' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
