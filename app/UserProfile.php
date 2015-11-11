<?php namespace Course;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

	protected $table = 'user_profiles';

	public function getAgeAttribute(){     
     
       $row->age = \Carbon\Carbon::parse($this->birthdate)->age;
	
	}

}
