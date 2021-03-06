<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
        'name' => 'required|max:200',
        'mobile' => 'required|digits:10',
        'adress' => 'required|max:200',
        'pregnent_count' => 'required|lt:10|integer',
        'newborn_count' => 'required|lt:10|integer',
        'family_count' => 'required|between:1,10|integer',
        'blood_group.*' => 'required|max:100|string',
        'disease_history.*' => 'nullable|max:100|string',
        'operative_history.*' => 'nullable|max:100|string',
        'weight.*' => 'nullable|max:30|string',
        'height.*' => 'nullable|max:30|string',
        'is_physically_challenged.*' => 'required|boolean',
        'medicine.*' => 'required|string|max:50',
        'insulin.*' => 'required|string|max:50',
        'age.*' => 'required|integer|between:1:100',
        'gender.*' => 'required|string|max:50',
        'temp.*' => 'required|string|max:50',
        'symptoms.*' => 'required|string|max:50',
        'exposure.*' => 'required|string|max:50',
        'symptoms_condition.*' => 'string|max:50'
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
            'name.required' => 'Please enter your Full Name',
            'name.max' => 'Name should not exceed 200 Characters.',
            'mobile.required'  => 'Please enter your Mobile no.',
            'adress.required'  => 'Please enter your Address',
            'adress.max'  => 'Address should not exceed 200 Characters.',
            'pregnent_count.required'  => 'Please mention if there is a Pregnant Woman in your Family.',
            'newborn_count.required'  => 'Please mention if there is a New-born in your Family.',
            'family_count.required'  => 'Please mention number of Family Members.',
            'blood_group.required'  => 'Please mention Blood Group.',
            'blood_group.max'  => 'Blood Group should not exceed 100 Characters.',            
            'disease_history.max'  => 'Disease History should not exceed 100 Characters.',            
            'operative_history.max'  => 'Operation History should not exceed 100 Characters.',            
            'is_physically_challenged.required'  => 'Please mention if you are Physically Challenged.',
            'medicine.required'  => 'Please mention your Medicines.',
            'medicine.max'  => 'Medicines details should not exceed 50 Characters.',
            'insulin.required'  => 'Please mention your Insulin intake.',
            'insulin.max'  => 'Insulin details should not exceed 50 Characters.',
            'weight.max'  => 'Weight should not exceed 30 Characters.',
            'height.max'  => 'Height should not exceed 30 Characters.',
            'age.required'  => 'Please mention your Age.',
            'gender.required'  => 'Please mention your Gender.',
            'temp.required'  => 'Please mention your Body Temperature (in Degree Celsius).',
            'symptoms.max'  => 'Symptoms should not exceed over 50 Characters.',
            'symptoms.required'  => 'Please mention your Symptoms you are facing.',
            'exposure.required'  => 'Please mention your Travel Exposure Details.',
            'exposure.required'  => 'Travel Exposure Details should not exceed over 50 Characters.',
            
        ];
    }
}
