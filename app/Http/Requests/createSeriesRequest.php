<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Series;
use Session;
class createSeriesRequest extends FormRequest
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
            
            'series_title' => 'required',
            'series_description' => 'required',
            'series_image_url' => 'required|image'
        ];
    }

    public function storeSeries(){

        $title = $this->series_title;
        Series::create([

            'title' => $title,
            'slug' => str_slug($title),
            'description' => $this->series_description,
            'image_url' => 'series/' . $this->fileName
        ]);

         session()->flash('success', 'Series created successfully.');
    }

   public function uploadSeriesImage() 
    {
        $uploadedImage = $this->series_image_url;
        $this->fileName = str_slug($this->series_title) . '.' . $uploadedImage->getClientOriginalExtension();
        $uploadedImage->storePubliclyAs(
            'public/series',  $this->fileName
        );
        return $this;
    }
}
