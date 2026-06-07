namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        
    $sum =2+5;
    $str = "$sum";
    echo $str;
    return view('landing.landing', compact('str'));
    }
}