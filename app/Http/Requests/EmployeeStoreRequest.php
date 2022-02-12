<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
      'name' => 'required',
      'dob' => 'required',
      'phone' => 'required',
      'email' => 'required',
      'address' => 'required',
      'company_id' => 'required'
    ];
  }

  public function messages(){
    return [
      'name.required' => 'Please enter employee\'s name',
      'dob.required' => 'Please enter employee\'s date of birth',
      'phone.required' => 'Please enter employee\'s phone number',
      'email.required' => 'Please enter employee\'s email',
      'address.required' => 'Please enter employee\'s address',
      'company_id.required' => 'Please choose a company that employee work for'
    ];
  }
}
