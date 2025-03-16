<?
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    
    public function index($id){
        $user = User::find($id);
       
        return $user->name;
        
    }
    
    public function store(){
        User::create([
            'id'=>22,
            'first_name' => 'ali',
            'last_name' => 'abd',
            'email' => 'ali@yahoo.com',
            'password' => '123456',
            
        ]);
        return  ('ok');
    }
    
    }

