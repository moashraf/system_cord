<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNEWSRequest;
use App\Http\Requests\UpdateNEWSRequest;
use App\Repositories\NEWSRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Mail;

use Validator;
use App\Models\NEWS;
use App\Models\News_en;
use App\Models\services;
use App\Models\projects;
use App\Models\Source;
use App\Models\Client_Status;
use App\Models\post_Comment;


use App\Models\Client_Sub_Status;
use App\Models\country;

use App\Models\order;
use App\Models\News_ar;
use App\Models\news_photo;
use App\Models\categories_news;
use App\User;

class NEWSController extends AppBaseController
{
  /** @var  NEWSRepository */
  private $nEWSRepository;

  public function __construct(NEWSRepository $nEWSRepo)
  {

    App()->setLocale('en');
    $this->nEWSRepository = $nEWSRepo;
  }



  /*  -------------------------------------------------------------------------------------------------*/


  public function OneTime_filter(Request $request)
  {

    $sal = User::get();

    $Person =  $request->user_id;
    $Project =  $request->description_ar;
    $from =  $request->from;
    $to =  $request->to;

    $from = date("Y-m-d H:i:s", strtotime($from));
    $to = date("Y-m-d H:i:s", strtotime($to));

    $all_sals_data = \DB::table('n_e_w_s')

      ->orderBy('id_new', 'DESC')

      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')

      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)



      ->where(function ($query) use ($Person) {
        if ($Person !== 'NO') {

          $query->where('user_id', $Person);
        }
      })




      ->where(function ($query) use ($Project) {
        if ($Project !== 'NO') {

          $query->where('description', $Project);
        }
      })


      ->where('sort_num',  'o')
      ->get();
    //dd($all_sals_data );
    return view('n_e_w_s.OneTime')
      ->with('person', $sal)
      ->with('nEWS', $all_sals_data);
  }



  /*  -------------------------------------------------------------------------------------------------*/


  public function Domains_Servers_filter(Request $request)
  {
    $sal = User::get();

    //  return view('n_e_w_s.sales')  ->with('nEWS', $nEWS); 
    $Domain_Ownership =  $request->main_img_alt_ar;
    $Sales_Person = $request->user_id;
    $Server_Ownership = $request->op14;

    $all_sals_data = \DB::table('n_e_w_s')
      ->orderBy('id_new', 'DESC')

      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')

      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)



      ->where(function ($query) use ($Domain_Ownership) {
        if ($Domain_Ownership !== 'NO') {

          $query->where('main_img_alt', $Domain_Ownership);
        }
      })




      ->where(function ($query) use ($Sales_Person) {
        if ($Sales_Person !== 'NO') {

          $query->where('user_id', $Sales_Person);
        }
      })


      ->where(function ($query) use ($Server_Ownership) {
        if ($Server_Ownership !== 'NO') {

          $query->where('op14', $Server_Ownership);
        }
      })


      ->where('sort_num',  'd')
      // ->select('n_e_w_s.*', 'news_en.date4' )

      ->get();

    return view('n_e_w_s.Domains_Servers')
      ->with('person', $sal)
      ->with('nEWS', $all_sals_data);
  }


  /*  -------------------------------------------------------------------------------------------------*/





  public function monthly_Acc_filter(Request $request)
  {
    $sal = User::get();

    $Person =  $request->user_id;
    $Status = $request->op2;
    $Project =  $request->description_ar;
    $period =  $request->op10;

    $all_sals_data = \DB::table('n_e_w_s')
      ->orderBy('id_new', 'DESC')

      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')

      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)



      ->where(function ($query) use ($Project) {
        if ($Project !== 'NO') {

          $query->where('description', $Project);
        }
      })




      ->where(function ($query) use ($Status) {
        if ($Status !== 'NO') {

          $query->where('op2', $Status);
        }
      })


      ->where(function ($query) use ($Person) {
        if ($Person !== 'NO') {

          $query->where('user_id', $Person);
        }
      })

      ->where(function ($query) use ($period) {
        if ($period !== 'NO') {

          $query->where('op10', $period);
        }
      })




      ->where('sort_num',  'm')

      ->get();

    return view('n_e_w_s.monthlyAccDisplay')
      ->with('person', $sal)
      ->with('nEWS', $all_sals_data);
  }




  public function sales_filter_get(Request $request)
  {


    $sal = User::get();

    //  return view('n_e_w_s.sales')  ->with('nEWS', $nEWS); 
    $country =  $request->country_id;
    $Person =  $request->user_id;
    $Status = $request->Client_Status_id;
    $Sub_Status = $request->Client_Sub_Status_id;
    $Project =  $request->service_id;
    $Source =  $request->Source_id;
    $from =  $request->from;
    $to =  $request->to;
    //$search = $request-> search;
    // $search2 = $request-> search2;

    $from = date("Y-m-d H:i:s", strtotime($from));
    $to = date("Y-m-d H:i:s", strtotime($to));



    $all_sals_data = \DB::table('n_e_w_s')
      ->orderBy('id_new', 'DESC')

      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')
      ->join('corddigital_sys.Client_Status', 'corddigital_sys.n_e_w_s.Client_Status_id', '=', 'corddigital_sys.Client_Status.id')
      ->leftJoin('corddigital_sys.country', 'corddigital_sys.n_e_w_s.country_id', '=', 'corddigital_sys.country.id')
      // ->leftJoin('corddigital_sys.post_Comment', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys.post_Comment.id_new_Comment')
      ->where('sort_num',  's')
      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)


      ->where(function ($query) use ($Sub_Status) {
        if ($Sub_Status !== 'NO') {

          $query->where('corddigital_sys.n_e_w_s.Client_Sub_Status_id', $Sub_Status);
        }
      })




      ->where(function ($query) use ($Person) {
        if ($Person !== 'NO') {

          $query->where('user_id', $Person);
        }
      })


      ->where(function ($query) use ($country) {
        if ($country !== 'NO') {

          $query->where('corddigital_sys.n_e_w_s.country_id', $country);
        }
      })


      ->where(function ($query) use ($Status) {
        if ($Status !== 'NO') {

          $query->where('corddigital_sys.n_e_w_s.Client_Status_id', $Status);
        }
      })




      ->where(function ($query) use ($Project) {
        if ($Project !== 'NO') {

          $query->where('corddigital_sys.n_e_w_s.service_id', $Project);
        }
      })



      ->where(function ($query) use ($Source) {
        if ($Source !== 'NO') {

          $query->where('corddigital_sys.n_e_w_s.Source_id', $Source);
        }
      })


      ->where(function ($query) use ($from, $to) {
        if ($from !== '1970-01-01 00:00:00') {

          $query->whereBetween('date1', [$from, $to]);
        }
      })







      ->where('sort_num',  's')
      // ->select('n_e_w_s.*', 'news_en.date4' )
      ->select('Client_Status.title as title_Client_Status', 'Client_Status.id as id_Client_Status', 'country.name as title_country', 'n_e_w_s.*', 'news_en.*', 'users.*')

      ->paginate(9);
    $services = services::orderBy('created_at')->get();
    $Source_data =  projects::orderBy('created_at')->with('get_all_data_of_Source')->get();
    $Client_Status = Client_Status::get();
    $Client_Sub_Status = Client_Sub_Status::get();
    $country = country::get();


    return view('n_e_w_s.sales')
      ->with('person', $sal)
      ->with('services', $services)
      ->with('Client_Status', $Client_Status)
      ->with('Client_Sub_Status', $Client_Sub_Status)
      ->with('country', $country)

      ->with('Source', $Source_data)
      ->with('nEWS', $all_sals_data);
  }



  /*  -------------------------------------------------------------------------------------------------*/



  public function export_file(Request $request)
  {

    $sal = User::get();

    //  return view('n_e_w_s.sales')  ->with('nEWS', $nEWS); 
    $op14 =  $request->op14;
    $Person =  $request->date4;
    $action = $request->op11;
    $Project =  $request->service_id;
    $Place =  $request->Source_id;
    $from =  $request->from;
    $to =  $request->to;
    $search = $request->search;
    $search2 = $request->search2;

    // dd($op14);

    $from = date("Y-m-d H:i:s", strtotime($from));
    $to = date("Y-m-d H:i:s", strtotime($to));

    //dd($from);
    $nEWS = NEWS::join('corddigital_sys_en.news_en', 'n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->orderBy('n_e_w_s.created_at', 'desc')
      // ->with('get_description')
      ->where('n_e_w_s.sort_num',  's')

      //  $nEWS = News:: orderBy('created_at', 'desc')->with('get_description') ->where('sort_num', '=', 's')

      //->where (function($query) use ($op14) // Hossam
      // {
      //		  if($op14 !== 'NO'){
      //dd($op14);

      //		   $query ->where('news_en.op14', "$op14") ;

      //	}
      //	 
      // })






      ->where(function ($query) use ($Person) {
        if ($Person !== 'NO') {

          $query->where('date4', '=', $Person);
        }
      })





      ->where(function ($query) use ($Place) {
        if ($Place !== 'NO') {

          $query->where('op6', 'LIKE', "%{$Place}%");
        }
      })





      ->where(function ($query) use ($from, $to) {
        if ($from !== '1970-01-01 00:00:00') {

          $query->whereBetween('news_en.date1', [$from, $to]);
        }
      })






      ->where(function ($query) use ($Project) {
        if ($Project !== 'NO') {
          //dd("ff");
          // $query ->where('news_en.op11', 'LIKE', "%{$action}%") ;
          $query->where('n_e_w_s.service_id', 'LIKE', "$Project");
        }
      })








      ->where(function ($query) use ($action) {
        if ($action !== 'NO') {
          //dd("ff");
          // $query ->where('news_en.op11', 'LIKE', "%{$action}%") ;
          $query->where('news_en.op11', 'LIKE', "$action");
        }
      })






      ->where(function ($query) use ($search) {

        if ($search !== 'NO') {

          $query->where('news_en.title', 'LIKE', "%{$search}%")->orwhere('news_en.seo_title', 'LIKE', "%{$search}%");


          //	dd($search);
        }
      })





      ->get();

    //dd($nEWS);

    //	dd(   $Person );
    return view('n_e_w_s.file')
      ->with('person', $sal)
      ->with('op14', $op14)
      ->with('nEWS', $nEWS);
  }


  /*  -------------------------------------------------------------------------------------------------*/




  public static function  sendM()
  {
    /*
    if(1==1){
        dd("fff");
     
   $rand = mt_rand(15, 9950);

    Mail::send( ['html' => 'main.Mail_send'] , ['order' =>  $order], function ($m) use ($order, $rand  ,$titel_of_mail) {
 $m->from('s46451659@gmail.com', "$titel_of_mail -  Corddigital Request    - $rand ");
 
$m->to( 'Sales@corddigital.com' , " $titel_of_mail - Corddigital Request   - $rand "  )->subject(  "$titel_of_mail-  Corddigital Request  - $rand " );
$m->cc(  ['info@cord.digital','info@corddigital.com'] )->subject(  " $titel_of_mail - Corddigital Request   - $rand " );

            
        });
       
    }
     */
    $nEWS =   NEWS::where('sort_num', '=', 'm')->with('get_description')->with('get_cat')->get();

    foreach ($nEWS as $Data_val) {
      foreach ($Data_val->get_description as $Data_val_dic) {
        if ($Data_val_dic->op2) {
        }
        dd($Data_val_dic->op2);
        $services_en = $Data_val_dic;

        Mail::send(['html' => 'main.Mail_send'], ['services_en' =>  $services_en], function ($m) use ($services_en) {
          $m->from("info@corddigital.com",  "  Corddigital - $rand ");

          $m->to('ashraf@corddigital.com', "   Corddigital     ")->subject("  Corddigital - $rand ");
          //$m->cc(  [$email,$email] )->subject(  "  Corddigital - $rand " );


        });
      }
    }
  }


  /*  -------------------------------------------------------------------------------------------------*/


  public function upload(Request $request)
  {
    if ($request->hasFile('upload')) {
      $originName = $request->file('upload')->getClientOriginalName();
      $fileName = pathinfo($originName, PATHINFO_FILENAME);
      $extension = $request->file('upload')->getClientOriginalExtension();
      $fileName = $fileName . '_' . time() . '.' . $extension;

      $request->file('upload')->move(public_path('images'), $fileName);

      $CKEditorFuncNum = $request->input('CKEditorFuncNum');
      $url = asset('images/' . $fileName);
      $msg = 'Image uploaded successfully';
      $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

      @header('Content-type: text/html; charset=utf-8');
      echo $response;
    }
  }






  public function sort_new(Request $request)
  {

    //   dd( $request->position_php);
    $validator = Validator::make($request->all(), [
      'position_php' => 'required',
      'id_by_class_php' => 'required',
    ]);

    if ($validator->fails()) {
      return redirect('site/admin')
        ->withErrors($validator)
        ->withInput();
    }


    $sort_new = NEWS::where('id', $request->id_by_class_php)->first();

    $sort_new->sort_num =  $request->position_php;

    $sort_new->save();


    return $sort_new;
  }


  /*  -------------------------------------------------------------------------------------------------*/



  public function all_post($id)
  {



    $nEWS = NEWS::with('get_description')->with('get_cat')->where('cat_id', '=', $id)->orderBy('sort_num', 'asc')->get();
    $categories_news = categories_news::with('get_description')->get();


    return view('n_e_w_s.index')
      ->with('categories_news', $categories_news)
      ->with('nEWS', $nEWS);
  }

  /*  -------------------------------------------------------------------------------------------------*/


  public function Analytics(Request $request)
  {
    /*
                	      	$nEWS  =NEWS::where('deleted_at', NULL)->where('service_id', 0 )->get();

 foreach($nEWS as $nEWS_val44 ){
 


 dd($nEWS_val44);
    $fgf=$nEWS_val44;
  $fgf->service_id =6;
 
		$fgf->save();
    
     
 
    
}

 
 
*/

    $nEWS =  \DB::table('n_e_w_s')
      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->where('sort_num',  's')
      // ->whereDate('corddigital_sys_en.news_en.created_at' , '<', '2021-3-11 12:42:46')
      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)
      ->get();

    /////////////////////////////////////
    $Social_Media =  \DB::table('n_e_w_s')
      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->where('sort_num',  's')
      // ->  where('corddigital_sys_en.news_en.OP6',  'Social Media')
      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)
      ->get()->unique('Source_id');
    //dd($Social_Media);
    ///////////////////////////////////


    /////////////////////////////////////
    $khdmat =  \DB::table('n_e_w_s')
      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->where('sort_num',  's')
      // ->  where('corddigital_sys_en.news_en.OP6',  'Social Media')
      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)
      ->get()->unique('service_id');
    //dd($khdmat);
    ///////////////////////////////////

    /*
  $Sals =  \DB::table('users')
 ->join('corddigital_sys.n_e_w_s', 'corddigital_sys.users.id', '=', 'corddigital_sys_en.news_en.id_new')
 // ->whereDate('corddigital_sys_en.news_en.created_at' , '<', '2021-3-11 12:42:46')
    ->  where('corddigital_sys.n_e_w_s.deleted_at',NULL)
->get();
*/
    $Client_Status = Client_Status::orderBy('created_at')->get();
    $country = country::get();

    $sal = User::orderBy('created_at')->with('get_all_data_of_user')->get();
    $all_services = services::orderBy('created_at')->with('get_all_data_of_service_type')->get();
    $Source_data = projects::orderBy('created_at')->with('get_all_data_of_Source')->get();
    return view('n_e_w_s.Analytics')
      ->with('Social_Media', $Social_Media)
      ->with('Source', $Source_data)
      ->with('khdmat', $khdmat)
      ->with('Client_Status', $Client_Status)
      ->with('all_services', $all_services)
      ->with('country', $country)
      ->with('person', $sal)
      ->with('nEWS', $nEWS);
  }



  /*  -------------------------------------------------------------------------------------------------*/

  public function index(Request $request)
  {

    $this->nEWSRepository->pushCriteria(new RequestCriteria($request));
    $nEWS =   NEWS::where('sort_num', '=', 's')->with('get_description')->get();
    $categories_news = categories_news::with('get_description')->get();



    return view('n_e_w_s.index')
      ->with('categories_news', $categories_news)
      ->with('nEWS', $nEWS);
  }



  /*  -------------------------------------------------------------------------------------------------*/


  public function Ticket(Request $request)
  {


    $nEWS =   NEWS::where('sort_num', '=', 't')->with('get_description')->with('get_cat')->get();
    $categories_news = categories_news::with('get_description')->get();

    //	NEWSController::sendM($nEWS);	

    return view('n_e_w_s.Ticket')
      ->with('categories_news', $categories_news)
      ->with('nEWS', $nEWS);
  }




  /*  -------------------------------------------------------------------------------------------------*/


  public function add_data_sales(Request $request)
  {

    $nEWS =   NEWS::where('sort_num', '=', 's')->orderBy('created_at', 'DESC')->with('get_description')->get();
    $categories_news = categories_news::with('get_description')->get();
    $sal = User::get();
    return view('n_e_w_s.add_data_sales')
      ->with('person', $sal)
      ->with('categories_news', $categories_news)
      ->with('nEWS', $nEWS);
  }



  /*  -------------------------------------------------------------------------------------------------*/


  public function sales(Request $request)
  {


    //	dd( bcrypt("11FHD6hy6346"));
    /*
   
      $nEWS =  \DB::table('n_e_w_s')
    ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
    ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')
      ->  where('sort_num',  's')
        -> where('corddigital_sys.n_e_w_s.deleted_at',NULL)
        -> where('corddigital_sys_en.news_en.op1','Saudi Arabia')
        
        
      ->get();
      //dd($nEWS);
      foreach($nEWS as $nEWS_val){
        //  dd($nEWS_val->id_new);
              
        $nEWS = $this->nEWSRepository->findWithoutFail($nEWS_val->id_new);
        
            $nEWS->country_id =187;
        $nEWS->save();
        
        
      }
      //	 $sal = User::with('get_all_data_of_user')->get();

          dd("fg");
    */
        $nEWS =  \DB::table('n_e_w_s')
          ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
          ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')
          ->join('corddigital_sys.Client_Status', 'corddigital_sys.n_e_w_s.Client_Status_id', '=', 'corddigital_sys.Client_Status.id')
          ->leftJoin('corddigital_sys.country', 'corddigital_sys.n_e_w_s.country_id', '=', 'corddigital_sys.country.id')
          // ->leftJoin('corddigital_sys.post_Comment', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys.post_Comment.id_new_Comment')
          ->where('sort_num',  's')
          ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
          ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)
          ->select('Client_Status.title as title_Client_Status', 'Client_Status.id as id_Client_Status', 'country.name as title_country', 'n_e_w_s.*', 'news_en.*', 'users.*')

          ->paginate(9);

        // dd(count($nEWS ));
        $sal = User::get();
        $Client_Status = Client_Status::get();
        $services = services::orderBy('created_at')->get();
        $Client_Sub_Status = Client_Sub_Status::get();
        $country = country::orderBy('id')->get();
        $post_Comment = post_Comment::orderBy('id')->get();
        //  dd(($post_Comment )); 
        $Source_data =  projects::orderBy('created_at')->with('get_all_data_of_Source')->get();
        return view('n_e_w_s.sales')
          ->with('person', $sal)
          ->with('Source', $Source_data)
          ->with('Client_Sub_Status', $Client_Sub_Status)
          ->with('Client_Status', $Client_Status)
          ->with('post_Comment', $post_Comment)
          ->with('country', $country)
          ->with('services', $services)
          ->with('nEWS', $nEWS);
  }


  /*  -------------------------------------------------------------------------------------------------*/



  public function Invoice(Request $request)
  {


    //	 $sal = User::with('get_all_data_of_user')->get();

    //   dd($sal);

    $nEWS =  \DB::table('n_e_w_s')
      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')
      ->where('sort_num',  's')
      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)
      ->get();

    // dd(count($nEWS ));
    $sal = User::get();
    return view('n_e_w_s.Invoice')
      ->with('person', $sal)
      ->with('nEWS', $nEWS);
  }




  /*  -------------------------------------------------------------------------------------------------*/


  public function Domains_Servers(Request $request)
  {

    $nEWS =  \DB::table('n_e_w_s')
      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')

      ->where('sort_num',  'd')
      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)
      ->get();
    $person = User::get();
    $Client_Status = Client_Status::get();
    $services = services::orderBy('created_at')->get();
    $Client_Sub_Status = Client_Sub_Status::get();
    $country = country::orderBy('id')->get();
    $post_Comment = post_Comment::orderBy('id')->get();
    //  dd(($post_Comment )); 
    $Source_data =  projects::orderBy('created_at')->with('get_all_data_of_Source')->get();

    return view('n_e_w_s.Domains_Servers')
      ->with('person', $person)
      ->with('nEWS', $nEWS);
  }


  /*  -------------------------------------------------------------------------------------------------*/


  public function monthlyAccDisplay(Request $request)
  {
    $nEWS =  \DB::table('n_e_w_s')
      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')

      ->where('sort_num',  'm')
      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)
      ->get();

    $person = User::get();
    $Client_Status = Client_Status::get();
    $services = services::orderBy('created_at')->get();
    $Client_Sub_Status = Client_Sub_Status::get();
    $country = country::orderBy('id')->get();
    $post_Comment = post_Comment::orderBy('id')->get();
    //  dd(($post_Comment )); 
    $Source_data =  projects::orderBy('created_at')->with('get_all_data_of_Source')->get();
    return view('n_e_w_s.monthlyAccDisplay')
      ->with('person', $person)
      ->with('Source', $Source_data)
      ->with('Client_Sub_Status', $Client_Sub_Status)
      ->with('Client_Status', $Client_Status)
      ->with('post_Comment', $post_Comment)
      ->with('country', $country)
      ->with('services', $services)
      ->with('nEWS', $nEWS);
  }


  /*  -------------------------------------------------------------------------------------------------*/


  public function OneTime(Request $request)
  {
    $nEWS =  \DB::table('n_e_w_s')
      ->join('corddigital_sys_en.news_en', 'corddigital_sys.n_e_w_s.id', '=', 'corddigital_sys_en.news_en.id_new')
      ->join('corddigital_sys.users', 'corddigital_sys.n_e_w_s.user_id', '=', 'corddigital_sys.users.id')

      ->where('sort_num',  'o')
      ->orderBy('corddigital_sys.n_e_w_s.id', 'desc')
      ->where('corddigital_sys.n_e_w_s.deleted_at', NULL)
      ->get();

    $person = User::get();
     $services = services::orderBy('created_at')->get();
     $country = country::orderBy('id')->get();
    $post_Comment = post_Comment::orderBy('id')->get();
    //  dd(($post_Comment )); 
     return view('n_e_w_s.OneTime')

      ->with('person', $person)
       ->with('post_Comment', $post_Comment)
      ->with('country', $country)
      ->with('services', $services)
      ->with('nEWS', $nEWS);
  }



  /*  -------------------------------------------------------------------------------------------------*/


  public function getsystem(Request $request)
  {
    $person = User::with('person')->get();

    $categories = categories_news::with('get_description')->get();

    // dd(  $categories->get_description);
    return view('n_e_w_s.system')
      ->with('person')
      ->with('categories', $categories);
  }


  /*  -------------------------------------------------------------------------------------------------*/




  public function thanks()
  {



    $locale = \Request::segment(1);
    App()->setLocale($locale);
    $cat_sitting =   categories_news::with('get_description')->where('id', '=', '34')->get();



    $Products   = NEWS::limit(14)->latest()->with('get_description')->where('cat_id', '=', '40')->get();




    return view(
      'main.thanks',
      [
        'cat_sitting' => $cat_sitting,
        'Products' => $Products
      ]
    );
  }




  /*  -------------------------------------------------------------------------------------------------*/


  public function orders(request $request)
  {

    $person = User::with('person')->get();
    $locale = \Request::segment(1);
    App()->setLocale($locale);
    $validator = \Validator::make($request->all(), [
      'meta_description_en' => 'required',
    ]);

    if ($validator->fails()) {
      dd("يجب اكمال جميع الخانات ");
      return redirect('en#no')
        ->withErrors($validator)
        ->withInput();
    }
    $input = $request->all();

    //if( !isset( $input['product'] ) ) {   $input['product']=" Digital Marketing "; }




    /*  ----------------------------------------------------------

		 	$services_en = new News_en;
        $services_en->title = $request->title_en;
        $services_en->status = '333';
        $services_en->id_new =99999999;
        $services_en->description = $request->description_en;
        $services_en->main_img_alt = $request->main_img_alt_en;
		$services_en->seo_title = $request->seo_title_en;
        $services_en->meta_description = $request->meta_description_en;
		
		 $services_en_old =  str_replace(" ","-","$request->slug_en");
        $services_en_old =  str_replace("/","-","$services_en_old");
		   $services_en->slug =  $services_en_old ;
         $services_en->save();
		
		  ----------------*/

    /*  --------------------------------------------------------------------------*/





    if ($input['quantity'] == "Landing Page") {
      $titel_of_mail = "Landing Page";
    } else {
      $titel_of_mail = " website ";
    }

    $rand = mt_rand(15, 9950);

    Mail::send(['html' => 'main.Mail_send'], ['services_en' =>  $services_en], function ($m) use ($services_en) {
      $m->from('s46451659@gmail.com', "$titel_of_mail -  Corddigital Request    - $rand ");

      $m->to('Sales@corddigital.com', " $titel_of_mail - Corddigital Request   - $rand ")->subject("$titel_of_mail-  Corddigital Request  - $rand ");
      $m->cc([$email, $email])->subject(" $titel_of_mail - Corddigital Request   - $rand ");
    });





    return redirect(route('thanks'));
  }



  /*  -------------------------------------------------------------------------------------------------*/


  public function create()
  {
    $person = User::with('person')->get();

    $categories = categories_news::with('get_description')->get();

    // dd(  $categories->get_description);
    return view('n_e_w_s.create')
      ->with('person', $person)
      ->with('categories', $categories);
  }



  /*  -------------------------------------------------------------------------------------------------*/

  public function store(CreateNEWSRequest $request)
  {


    $validator = Validator::make($request->all(), [

     // 'seo_title_ar' => 'required|unique:mysqlen.corddigital_sys_en.news_en,seo_title',
    //  'description_ar' => 'required|unique:mysqlen.corddigital_sys_en.news_en,description',

    ]);

    if ($validator->fails()) {
      dd("بيانات مكرره ");
      return \Redirect::back()
        ->withErrors($validator)
        ->withInput();
    }




    $input = $request->all();


    /*  --------------------------------------------------------------------------*/

    //  $nEWS = $this->nEWSRepository->create($input);

    $nEWS = new NEWS;
    $nEWS->single_photo = "1";
    $nEWS->cat_id = 1;
    $nEWS->tag_id = 1;
    $nEWS->icon =  "1";
    $nEWS->Source_id = $request->Source_id;

    $nEWS->service_id = $request->service_id;
    $nEWS->country_id = $request->op1;
    $nEWS->Client_Sub_Status_id = $request->op14;
    $nEWS->sort_num = $request->source;
    $nEWS->user_id = \Auth::user()->id;


    $nEWS->save();


    /*  --------------------------------------------------------------------------*/


    $services_ar = new News_en;
    $services_ar->title = $request->title_ar;
    $services_ar->status = '1';
    $services_ar->id_new = $nEWS->id;
    $services_ar->meta_description = $request->meta_description_ar;
    $services_ar->seo_title = $request->seo_title_ar;
    $services_ar->date1 = $request->date1;
    $services_ar->date2 = $request->date2;
    $services_ar->date3 = $request->date3;
    $services_ar->date4 = $request->date4;
    $services_ar->op1 = $request->op1;
    $services_ar->op2 = $request->op2;
    $services_ar->op3 = $request->op3;
    $services_ar->op6 = $request->op6;
    $services_ar->op7 = $request->op7;
    $services_ar->op8 = $request->op8;
    $services_ar->op9 = $request->op9;
    $services_ar->op10 = $request->op10;
    $services_ar->op11 = $request->op11;
    $services_ar->op13 = $request->op13;

    $services_ar->main_img_alt = $request->main_img_alt_ar;
    $services_ar->description = $request->description_ar;
    $services_ar_old =  str_replace(" ", "-", "$request->slug_ar");
    $services_ar_old =  str_replace("/", "-", "$services_ar_old");
    $services_ar->slug =  $services_ar_old;
    $services_ar->save();

    /*  --------------------------------------------------------------------------*/

    //dd($services_ar);


    return  \Redirect::back()->with('status', '  تم الحفظ بنجاح!');
    // return redirect('nEWS');
  }

  /*  -------------------------------------------------------------------------------------------------*/

  public function show($id)
  {
    $nEWS = $this->nEWSRepository->findWithoutFail($id);

    if (empty($nEWS)) {
      Flash::error('N E W S not found');

      return redirect(route('nEWS.index'));
    }

    return view('n_e_w_s.show')->with('nEWS', $nEWS);
  }


  public function sys_show($id)
  {
    $nEWS = $this->nEWSRepository->findWithoutFail($id);

    if (empty($nEWS)) {
      Flash::error('N E W S not found');

      return redirect(route('nEWS.index'));
    }

    return view('n_e_w_s.show')->with('nEWS', $nEWS);
  }


  /**
   * Show the form for editing the specified NEWS.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function edit($id)
  {




    $categories = categories_news::with('get_description')->get();



    $nEWS = $this->nEWSRepository->findWithoutFail($id);

    $News_ar = News_ar::where('id_new', $id)->first();
    $News_en = News_en::where('id_new', $id)->first();
    if (empty($nEWS)) {
      Flash::error('N E W S not found');

      return redirect(route('nEWS.index'));
    }

    return view('n_e_w_s.edit')->with('nEWS', $nEWS)->with('News_ar', $News_ar)
      ->with('News_en', $News_en)
      ->with('categories', $categories);
  }

  /**
   * Update the specified NEWS in storage.
   *
   * @param  int              $id
   * @param UpdateNEWSRequest $request
   *
   * @return Response
   */
  public function update($id, UpdateNEWSRequest $request)
  {



    $input = $request->all();


    $nEWS = $this->nEWSRepository->findWithoutFail($id);

    $nEWS->Source_id = $request->Source_id;
    $nEWS->service_id = $request->service_id;
    $nEWS->Client_Status_id = $request->Client_Status_id;
    $nEWS->Client_Sub_Status_id = $request->Client_Sub_Status_id;
    $nEWS->country_id = $request->country_id;
    $nEWS->user_id = $request->user_id;

    $nEWS->save();

    // dd($input);
    if (empty($nEWS)) {
      Flash::error('N E W S not found');

      return redirect(route('nEWS.index'));
    }

    //  $nEWS = $this->nEWSRepository->update( $input, $id);



    $date_timestamp_convert_format =    date("Y-m-d H:i:s", strtotime($request->created_at));
    $services_ar  = News_en::where('id_new', $id)->first();

    $services_ar->title = $request->title_ar;
    $services_ar->status = '1';
    $services_ar->id_new = $nEWS->id;
    $services_ar->meta_description = $request->meta_description_ar;
    $services_ar->seo_title = $request->seo_title_ar;
    $services_ar->date1 = $request->date1;
    $services_ar->date2 = $request->date2;
    $services_ar->date3 = $request->date3;
    $services_ar->date4 = $request->date4;
    $services_ar->op1 = $request->op1;
    $services_ar->op2 = $request->op2;
    $services_ar->op3 = $request->op3;
    $services_ar->op6 = $request->op6;
    $services_ar->op7 = $request->op7;
    $services_ar->op8 = $request->op8;
    $services_ar->op9 = $request->op9;
    $services_ar->op10 = $request->op10;
    $services_ar->op11 = $request->op11;
    $services_ar->op13 = $request->op13;
    $services_ar->op14 = $request->op14;
    $services_ar->main_img_alt = $request->main_img_alt_ar;
    $services_ar->description = $request->description_ar;
    $services_ar_old =  str_replace(" ", "-", "$request->slug_ar");
    $services_ar_old =  str_replace("/", "-", "$services_ar_old");
    $services_ar->slug =  $services_ar_old;
    $services_ar->save();

    /////////////////////////////

    if ($request->fields != null) {

      $post_Comment = new post_Comment;

      $post_Comment->id_new_Comment = $nEWS->id;
      $post_Comment->title = $request->fields;

      if (empty($request->date_Comment)) {

        $post_Comment->created_at = date('Y-m-d H:i:s');
      } else {


        $post_Comment->created_at = $request->date_Comment;
      }



      $post_Comment->save();
    }






    /*  --------------------------------------------------------------------------*/

    Flash::success('N E W S updated successfully.');
    return redirect()->back()->with('status', ' تم التعديل بنجاح  !');

    //return redirect(route('nEWS.index'));
  }

  /**
   * Remove the specified NEWS from storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function destroy($id)
  {
    $nEWS = $this->nEWSRepository->findWithoutFail($id);

    if (empty($nEWS)) {
      Flash::error('N E W S not found');

      return redirect(route('nEWS.index'));
    }

    $this->nEWSRepository->delete($id);



    $services_ar = News_ar::where('id_new', '=', $id);
    $services_ar->delete();

    $services_en = News_en::where('id_new', '=', $id);
    $services_en->delete();



    Flash::success('  deleted successfully.');
    return redirect()->back()->with('status', '  deleted successfully      !');


    //return redirect(route('nEWS.index'));
  }





  public function destroyComment(Request $request)
  {
    $news = post_Comment::where('id', $request->id)->where('id_new_Comment', $request->id_new_Comment)->first();

    if (empty($news)) {
      return back();
    }
    $news->delete($request->id);
    return back();
  }


  public function ajax_del_news_photo($id, $news_id)
  {
    $news = news_photo::where('id', $id)->where('news_id', $news_id)->first();

    if (empty($news)) {
      return back();
    }
    $news->delete($id);
    return back();
  }
}
