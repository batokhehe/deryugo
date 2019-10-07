<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Brand;
use App\BrandInterest;
use App\Influencer;
use App\InfluencerCategory;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected function redirectTo()
    {
        if (auth()->user()->type == 0) {
            return '/influencer/profile/edit';
        }
        return '/brand/tools';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     
    protected function create(array $data)
    {
        $user = User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'type' => $data['type'],
          'group_id' => $data['type'],
          'status' => '0'
        ]);
        
        if($data['type'] == '0'){
            $influencer = Influencer::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'gender' => $data['gender'],
              'birthdate' => date('Y-m-d', strtotime($data['birthdate'])),
              'image' => 'http://www.deryugo.com/progress/public/assets/images/influencer/default.png',
              'user_id' => $user->id,
              'engagement_rate' => '0',
              'type' => 'Nano',
              'followers' => '0',
              'instagram_username' => $data['instagram_username'],
              'password' => '',
              'status' => '0',
              'avg_impression' => '',
              'avg_impression_image' => '',
            ]);
            
            foreach($data['interest'] as $int){
                InfluencerCategory::create([
                  'influencer_id' => $influencer->id,
                  'category_id' => $int
                ]);
            }
        } else {
            $brand = Brand::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'user_id' => $user->id,
              'website' => $data['website'],
              'socmed' => $data['social_media'],
              'socmed_link' => '',
              'phone_number' => $data['phone'],
              'password' => '',
              'image' => 'http://www.deryugo.com/progress/public/assets/images/influencer/default.png',
              'status' => '0',
            ]);

            foreach($data['service'] as $int){
                BrandInterest::create([
                  'brand_id' => $brand->id,
                  'category_id' => $int
                ]);
            }
        }
      
        return $user;
    }
    
    public function indexInfluencer(){
        $interest = Category::all();
        return view('auth.registerinfluencer')
            ->with('interests', $interest);
    }
    
    public function indexInterest(Request $request){
        if($request->interest){
            return view('auth.registerinterest')
            ->with('interests', $request->interest);
        }
        
        return abort('404');
    }

    public function indexBrand(){
        return view('auth.registerbrand');
    }
}
