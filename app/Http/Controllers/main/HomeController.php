<?php

namespace App\Http\Controllers;

use App\Models\NEWS;
use App\Models\slider;
use App\Models\order;
use App\Models\services;
use App\Models\News_ar;
use App\Models\News_en;
use App\Models\categories_news;
use App\Models\categories_news_ar;
use App\Models\categories_news_en;
use Illuminate\Support\Facades\Input;
use Mail;

use Illuminate\Http\Request;

class HomeController extends Controller
{

	public function __construct()
	{


		$url_with_public = \Request::url();


		$url = (explode("/", $url_with_public));
		$lang = \Request::segment(1);

		if ($url[3] == "public") {

			$full_url_with_out_public = str_replace("/public", "", " $url_with_public");
			header("Location: $full_url_with_out_public ", TRUE, 301);
			exit;
		}
	}






	public function lang_redirect(request $request)
	{
		dd();
		$input = $request->all();

		$currentURL = $input['previous'];
		$locale = \Request::segment(1);

		if ($locale == 'en') {
			App()->setLocale('ar');
			$url = str_replace("/en/", "/ar/", "$currentURL");
			// dd( $url );
			return redirect($url);
		} else {
			App()->setLocale('en');
			$url = str_replace("/en/", "/ar/", "$currentURL");

			return redirect($url);
		}



		$locale = \Request::segment(1);


		//  dd(    $locale );
		if ($locale == 'en') {

			$currentURL = $input['previous'];


			if ($currentURL == \URL::to('/en')) {


				$url = \URL::to('/ar');
			} else {


				$url = str_replace("/en/", "/ar/", "$currentURL");
			}


			App()->setLocale('ar');
		} else {


			$currentURL = $input['previous'];

			if ($currentURL == \URL::to('/ar')) {

				$url = \URL::to('/en');
			} else {
				$url = str_replace("/ar/", "/en/", "$currentURL");
			}



			App()->setLocale('en');
		}
		return redirect($url);
	}




	public function index()
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);

		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', '57')->get();

		$feedback  = NEWS::with('get_description')->orderBy('status', 'asc')->with('get_News_Photos')->where('cat_id', 5)->get();
		$partners = NEWS::with('get_description')->orderBy('status', 'asc')->with('get_News_Photos')->where('cat_id', 4)->get();
		$slider  = slider::limit(5)->with('get_slider_description')->get();
		$NEWS  = NEWS::limit(3)->latest()->with('get_description')->where('cat_id', '=', '1')->get();
		$categories_news  =  categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();
		//$Portfolio  = NEWS::limit(4) ->orderBy('status', 'asc')->with('get_description')->where('cat_id','=','3')->get();
		// $slider = slider::latest()->with('get_slider_description')->get();
		// $projects = projects::with('get_projects_description')->where('project_cat_id','=','1')->orWhere('project_cat_id','=','2')->limit(4)->get();

		return view(
			'main.index',
			[
				// 'slider' => $slider ,  
				// 'projects' => $projects ,
				'slider' => $slider,
				'categories_news' => $categories_news,
				'feedback' => $feedback,
				'partners' => $partners,
				'NEWS' => $NEWS,
				//'Portfolio' => $Portfolio ,
				'cat_sitting' => $cat_sitting,
				'all_main_services' => $all_main_services,
			]
		);
	}




	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/


	public function search()
	{


		$q = Input::get('q');
		// dd($q);
		$search = '';
		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', '57')->get();

		//dd($locale );

		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();

		if ($locale == 'ar') {

			$search_News_en = News_ar::latest()
				->where('title', 'LIKE', '%' . $q . '%')
				->orWhere('description', 'LIKE', '%' . $q . '%')
				->get();


			$search = array();


			foreach ($search_News_en as  $News_en) {
				$search_arr = NEWS::latest()->where('id', $News_en->id_new)->get();
				array_push($search, $search_arr);
			}
		} else {
			$search_News_en = News_en::latest()
				->where('title', 'LIKE', '%' . $q . '%')
				->orWhere('description', 'LIKE', '%' . $q . '%')
				->get();


			//dd($search_News_en );

			$search = array();

			foreach ($search_News_en as  $News_en) {
				$search_arr = NEWS::latest()->where('id', $News_en->id_new)->get();
				array_push($search, $search_arr);
			}

			//dd($search_final );

		}

		return view(
			'main.search',
			[
				'search_News_en' => $search_News_en,
				'search' => $search,
				'all_main_services' => $all_main_services,
				'cat_sitting' => $cat_sitting,

			]
		);
	}


	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/



	public function singel_cat($id)
	{

		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();

		$Categories_Products = Categories_Products::where('id', '=', $id)->orderBy('status', 'asc')->get();
		if (!$Categories_Products->isEmpty()) {

			$Products = Products::where('cat_id', '=', $Categories_Products[0]['id'])->paginate(20);
			return view(
				'main.all_property',
				[
					'Categories_Products' => $Categories_Products,
					'Products' => $Products,
					'all_main_services' => $all_main_services,
				]
			);
			// dd(    $Categories_Products[0]['id']); 

		} else {


			return redirect('/');
		}
	}



	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/


	public function orders_get()
	{
		return view('main.orders');
	}
	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/




	public function landingpage()
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);
		return view('main.landingpage');
	}






	public function thanks()
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', '34')->get();



		$Products   = NEWS::limit(14)->latest()->with('get_description')->where('cat_id', '=', '40')->get();




		return view(
			'main.thanks',
			[
				'cat_sitting' => $cat_sitting,
				'Products' => $Products
			]
		);
	}






	public function orders(request $request)
	{


		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$validator = \Validator::make($request->all(), [
			'phone' => 'required',
		]);

		if ($validator->fails()) {
			return redirect('en#no')
				->withErrors($validator)
				->withInput();
		}
		$input = $request->all();

		if (!isset($input['product'])) {
			$input['product'] = " Digital Marketing ";
		}
		$product =  $input['product'];
		$phone =  $input['phone'];
		$email =  $input['email'];
		$title =  $input['title'];
		if (!isset($input['quantity'])) {
			$input['quantity'] = " Digital Marketing ";
		}

		$quantity =  $input['quantity'];
		$body =  $input['body'];



		$phone_first_num = substr($phone, 0, 1);


		if (strpos($phone_first_num, '8') !== false) {
			return \Redirect::to('/', 301);
		}

		if ($input['quantity'] == "Landing Page") {
			$titel_of_mail = "Landing Page";
		} else {
			$titel_of_mail = " website ";
		}
		$order = order::create($input);

		$rand = mt_rand(15, 9950);

		Mail::send(['html' => 'main.Mail_send'], ['order' =>  $order], function ($m) use ($order, $rand, $titel_of_mail) {
			$m->from('s46451659@gmail.com', "$titel_of_mail -  Corddigital Request    - $rand ");

			$m->to('Sales@corddigital.com', " $titel_of_mail - Corddigital Request   - $rand ")->subject("$titel_of_mail-  Corddigital Request  - $rand ");
			$m->cc(['info@cord.digital', 'info@corddigital.com'])->subject(" $titel_of_mail - Corddigital Request   - $rand ");
		});





		return redirect(route('thanks'));
	}




	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/




	public static	function startsWith($string, $startString)
	{
		$len = strlen($startString);
		return (substr($string, 0, $len) === $startString);
	}


	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/

	public function order_dlete()
	{



		$order =  order::all();

		foreach ($order as $order_aal) {

			if (HomeController::startsWith("$order_aal->phone", "8")) {

				$order_aal->forceDelete();

				// dd($order_aal->phone); 

			}
		}
	}




	public function our_news()
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', 3)->get();
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();
		$NEWS = NEWS::with('get_description')->where('cat_id', 3)->orderBy('sort_num', 'asc')->paginate(9);
		$categories_news = categories_news::where('id', 3)->orderBy('status', 'asc')->get();




		if ($locale == 'ar') {
			$cat_with_slg = categories_news_ar::where('id_categories',  $categories_news[0]->id)->get();
			//dd( $News_ar);
		} else {

			$cat_with_slg = categories_news_en::where('id_categories',  $categories_news[0]->id)->get();
		}




		if (!$cat_with_slg->isEmpty()) {

			return view(
				'main.all_news',
				[
					'categories_news' => $categories_news,
					'cat_sitting' => $cat_sitting,
					'all_main_services' => $all_main_services,
					'NEWS' => $NEWS,

				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}




	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/



	public function Marketing_news()
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', 1)->get();
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();
		$NEWS = NEWS::with('get_description')->where('cat_id', 1)->orderBy('sort_num', 'asc')->paginate(9);
		$categories_news = categories_news::where('id', 1)->orderBy('status', 'asc')->get();




		if ($locale == 'ar') {
			$cat_with_slg = categories_news_ar::where('id_categories',  $categories_news[0]->id)->get();
			//dd( $News_ar);
		} else {

			$cat_with_slg = categories_news_en::where('id_categories',  $categories_news[0]->id)->get();
		}




		if (!$cat_with_slg->isEmpty()) {

			return view(
				'main.all_news',
				[
					'categories_news' => $categories_news,
					'cat_sitting' => $cat_sitting,
					'all_main_services' => $all_main_services,
					'NEWS' => $NEWS,

				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}




	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/

	public function all_methodology()
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);

		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', 34)->get();
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')
			->where('parentid', '=', '29')->get();

		$all_methodology = NEWS::latest()->with('get_description')->where('cat_id', 34)->paginate(9);
		$categories_news = categories_news::where('id', 34)->orderBy('status', 'asc')->get();


		if ($locale == 'ar') {
			$cat_with_slg = categories_news_ar::where('id_categories',  $categories_news[0]->id)->get();
			//dd( $News_ar);
		} else {

			$cat_with_slg = categories_news_en::where('id_categories',  $categories_news[0]->id)->get();
		}




		if (!$cat_with_slg->isEmpty()) {

			return view(
				'main.all_methodology',
				[
					'all_main_services' => $all_main_services,
					'cat_sitting' => $cat_sitting,
					'categories_news' => $categories_news,
					'all_methodology' => $all_methodology,

				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}



	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/



	public function all_packages()
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', 35)->get();
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();

		$all_packages = NEWS::latest()->with('get_description')->whereIn('cat_id', [37, 38, 39, 40, 41, 51])->get();
		$SEO = NEWS::latest()->with('get_description')->with('get_cat')->where('cat_id', 37)->get()->chunk(3);
		$categories_SEO = categories_news::where('id', 37)->with('get_description')->orderBy('status', 'asc')->get();
		$categories_Web = categories_news::where('id', 38)->with('get_description')->orderBy('status', 'asc')->get();
		$categories_Designs = categories_news::where('id', 40)->with('get_description')->orderBy('status', 'asc')->get();
		$categories_Mobile  = categories_news::where('id', 41)->with('get_description')->orderBy('status', 'asc')->get();
		$categories_Social = categories_news::where('id', 48)->with('get_description')->orderBy('status', 'asc')->get();
		$categories_Video = categories_news::where('id', 39)->with('get_description')->orderBy('status', 'asc')->get();

		$Web  = NEWS::latest()->with('get_description')->where('cat_id', 38)->get()->chunk(3);
		$Video  = NEWS::latest()->with('get_description')->where('cat_id', 39)->get()->chunk(3);
		$Designs  = NEWS::latest()->with('get_description')->where('cat_id', 40)->get()->chunk(3);
		$Mobile  = NEWS::latest()->with('get_description')->where('cat_id', 41)->get()->chunk(3);
		$Social  = NEWS::latest()->with('get_description')->where('cat_id', 48)->get()->chunk(3);


		$ِall_categories = categories_news::with('get_description')->orderBy('status', 'asc')
			->with('get_all_post_on_cat')->where('parentid', 35)->get();



		$categories_news = categories_news::where('id', 35)->orderBy('status', 'asc')->get();

		if ($locale == 'ar') {
			$cat_with_slg = categories_news_ar::where('id_categories',  $categories_news[0]->id)->get();
			//dd( $News_ar);
		} else {

			$cat_with_slg = categories_news_en::where('id_categories',  $categories_news[0]->id)->get();
		}

		if (!$cat_with_slg->isEmpty()) {





			return view(
				'main.all_packages',
				[
					'all_main_services' => $all_main_services,
					'cat_sitting' => $cat_sitting,
					'categories_news' => $categories_news,
					'ِall_categories' => $ِall_categories,
					'all_packages' => $all_packages,
					'Web' => $Web,
					'Video' => $Video,
					'Designs' => $Designs,
					'Mobile' => $Mobile,
					'SEO' => $SEO,
					'Social' => $Social,
					'categories_SEO' => $categories_SEO,
					'categories_Web' => $categories_Web,
					'categories_Social' => $categories_Social,
					'categories_Video' => $categories_Video,
					'categories_Designs' => $categories_Designs,
					'categories_Mobile' => $categories_Mobile,

				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}





	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/


	public function singel_news($slg)
	{


		$locale = \Request::segment(1);
		App()->setLocale($locale);

		if ($locale == 'ar') {
			$singe_NEWS_d = News_ar::where('slug', $slg)->get();
			//dd( $News_ar);
		} else {
			$singe_NEWS_d = News_en::where('slug', $slg)->get();
		}



		if (!$singe_NEWS_d->isEmpty()) {



			$cat_sitting = 	 NEWS::with('get_description')->where('id',   $singe_NEWS_d[0]->id_new)->get();

			$AllNEWS  = NEWS::limit(4)->inRandomOrder()->with('get_description')->where('cat_id',   $cat_sitting[0]->cat_id)->get();
			$NEWS = NEWS::with('get_description')->with('get_News_Photos')->orderBy('status', 'asc')->where('id',   $singe_NEWS_d[0]->id_new)->get();
			$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();


			//dd( $NEWS);


			return view(
				'main.singel_news',
				[


					'all_main_services' => $all_main_services,
					'cat_sitting' => $cat_sitting,
					'AllNEWS' => $AllNEWS,
					'NEWS' => $NEWS,


				]
			);
		} else {


			if ($locale == 'ar') {
				return \Redirect::to('/ar', 301);
			} else {
				return \Redirect::to('/en', 301);
			}
		}
	}



	/////////////////////////////////////////


	public function singel_packages($slg)
	{


		$locale = \Request::segment(1);
		App()->setLocale($locale);

		if ($locale == 'ar') {
			$cat_with_slg = categories_news_ar::where('slug', $slg)->get();
		} else {

			$cat_with_slg = categories_news_en::where('slug', $slg)->get();
		}




		if (!$cat_with_slg->isEmpty()) {

			$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();

			$cat_sitting = 	categories_news::with('get_description')->where('id', '=', $cat_with_slg[0]->id_categories)->get();
			//dd($cat_sitting);
			$SEO = NEWS::latest()->with('get_description')->with('get_cat')->where('cat_id', $cat_with_slg[0]->id_categories)->get()->chunk(3);
			$categories_SEO = categories_news::where('id', $cat_with_slg[0]->id_categories)->with('get_description')->orderBy('status', 'asc')->get();
			$ِall_categories = categories_news::with('get_description')->orderBy('status', 'asc')
				->with('get_all_post_on_cat')->where('parentid', 35)->get();





			// dd( $NEWS[0]->get_description[0]->slug );


			return view(
				'main.singel_packages',
				[


					'cat_sitting' => $cat_sitting,
					'all_main_services' => $all_main_services,
					'SEO' => $SEO,
					'categories_SEO' => $categories_SEO,
					'ِall_categories' => $ِall_categories,


				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}



	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function About()
	{
		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', '58')->get();

		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();

		$Our_Board  = NEWS::with('get_description')->with('get_News_Photos')->where('cat_id', 2)->get();
		$partners = NEWS::with('get_description')->orderBy('status', 'asc')->with('get_News_Photos')->where('cat_id', 4)->get();
		if (!is_null($partners)) {


			return view('main.about_us', [
				'cat_sitting' => $cat_sitting,
				'all_main_services' => $all_main_services,
				'partners' => $partners,
				'Our_Board' => $Our_Board
			]);
		}
	}



	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function case_study()
	{
		$locale = \Request::segment(1);
		App()->setLocale($locale);

		return view('main.all_case_study');
	}



	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



	public function Contact()
	{


		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', '59')->get();
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();


		return view(
			'main.Contact',
			[
				'all_main_services' => $all_main_services,
				'cat_sitting' => $cat_sitting
			]
		);
	}


	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	public function all_projects($slg, $id)
	{

		$locale = \Request::segment(1);
		App()->setLocale($locale);

		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', $id)->get();

		$NEWS = NEWS::latest()->with('get_description')->where('cat_id', $id)->get();
		$categories_news = categories_news::where('id', $id)->orderBy('status', 'asc')->get();
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();





		if ($locale == 'ar') {
			$cat_with_slg = categories_news_ar::where('slug', $slg)->where('id_categories',  $categories_news[0]->id)->get();
			//dd( $News_ar);
		} else {

			$cat_with_slg = categories_news_en::where('slug', $slg)->where('id_categories',  $categories_news[0]->id)->get();
		}

		if (!$cat_with_slg->isEmpty()) {


			return view(
				'main.all_projects',
				[
					'all_main_services' => $all_main_services,
					'cat_sitting' => $cat_sitting,
					'categories_news' => $categories_news,
					'NEWS' => $NEWS
				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}




	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	public function singe_projects($id)
	{

		$locale = \Request::segment(1);
		App()->setLocale($locale);

		$cat_sitting = 	 NEWS::with('get_description')->where('id', $id)->get();

		$singl_projects = projects::with('get_projects_description')->orderBy('status', 'asc')->where('id', '=', $id)->get();

		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();


		if ($locale == 'ar') {
			$singe_NEWS_d = News_ar::where('slug', $slg)->where('id_new',  $singl_projects[0]->id)->get();
			//dd( $News_ar);
		} else {
			$singe_NEWS_d = News_en::where('slug', $slg)->where('id_new',  $singl_projects[0]->id)->get();
		}



		if (!$singe_NEWS_d->isEmpty()) {


			return view(
				'main.singel_projects',
				[
					'all_main_services' => $all_main_services,
					'cat_sitting' => $cat_sitting,
					'singl_projects' => $singl_projects,
				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}


	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



	public function all_services($slg)
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);



		if ($locale == 'ar') {
			$singe_NEWS_d = categories_news_ar::where('slug', $slg)->get();
		} else {
			$singe_NEWS_d = categories_news_en::where('slug', $slg)->get();
		}


		if (!$singe_NEWS_d->isEmpty()) {

			$cat_sitting = 	categories_news::with('get_description')->where('id', '=',  $singe_NEWS_d[0]->id_categories)->get();
			$NEWS = NEWS::latest()->with('get_description')->orderBy('status', 'asc')->where('cat_id', $singe_NEWS_d[0]->id_categories)->get();
			$categories_news = categories_news::where('id', $singe_NEWS_d[0]->id_categories)->get();
			$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();

			return view(
				'main.all_services',
				[
					'cat_sitting' => $cat_sitting,
					'categories_news' => $categories_news,
					'NEWS' => $NEWS,
					'all_main_services' => $all_main_services,


				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}




	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/

	public function all_portfolio()
	{


		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting = 	categories_news::with('get_description')->where('id', '=', 42)->get();
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();

		$all_portfolio = NEWS::with('get_description')->whereIn('cat_id', [43, 44, 45, 46, 47, 50, 54, 55])
			->orderBy('status', 'asc')->get();
		$categories_news = categories_news::where('id', 42)->orderBy('status', 'asc')->get();
		$ِall_categories = categories_news::where('parentid', 42)->orderBy('status', 'asc')->get();

		if ($locale == 'ar') {
			$cat_with_slg = categories_news_ar::where('id_categories',  $categories_news[0]->id)->get();
			//dd( $News_ar);
		} else {

			$cat_with_slg = categories_news_en::where('id_categories',  $categories_news[0]->id)->get();
		}




		if (!$cat_with_slg->isEmpty()) {


			return view(
				'main.all_portfolio',
				[
					'all_main_services' => $all_main_services,
					'cat_sitting' => $cat_sitting,
					'categories_news' => $categories_news,
					'ِall_categories' => $ِall_categories,
					'all_portfolio' => $all_portfolio,

				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}




	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/

	public function single_cat_of_portfolio($slg)
	{

		$locale = \Request::segment(1);
		App()->setLocale($locale);

		if ($locale == 'ar') {
			$single_cat_of_portfolio = categories_news_ar::where('slug', $slg)->get();
		} else {
			$single_cat_of_portfolio = categories_news_en::where('slug', $slg)->get();
		}

		if (!$single_cat_of_portfolio->isEmpty()) {
			$cat_sitting = 	categories_news::with('get_description')->where('id', '=',  $single_cat_of_portfolio[0]->id_categories)->get();

			$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();

			$cat_of_portfolio = NEWS::latest()->with('get_description')->where('cat_id', $single_cat_of_portfolio[0]->id_categories)->get();

			$categories_news = categories_news::where('id', $single_cat_of_portfolio[0]->id_categories)->get();

			$ِall_categories = categories_news::where('parentid', 42)->orderBy('status', 'asc')->get();

			if ($locale == 'ar') {
				$cat_with_slg = categories_news_ar::where('id_categories',  $categories_news[0]->id)->get();
				//dd( $News_ar);
			} else {

				$cat_with_slg = categories_news_en::where('id_categories',  $categories_news[0]->id)->get();
			}




			if (!$cat_with_slg->isEmpty()) {


				return view(
					'main.single_cat_of_portfolio',
					[
						'all_main_services' => $all_main_services,
						'cat_sitting' => $cat_sitting,
						'categories_news' => $categories_news,
						'ِall_categories' => $ِall_categories,
						'cat_of_portfolio' => $cat_of_portfolio,

					]
				);
			} else {
				return \Redirect::to('/', 301);
			}
		} else {
			return \Redirect::to('/', 301);
		}
	}


	/* //////////////////////////////////////////////////////////////////////////////////// /////////////////*/


	public function singel_services($slg, $id)
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting =  NEWS::with('get_description')->where('id', $id)->get();




		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();



		$list_of_cat_id = array();

		foreach ($all_main_services   as $value) {

			array_push($list_of_cat_id, $value->id);
		}




		$services_singl = NEWS::with('get_description')
			->orderBy('status', 'asc')
			->where('id', $id)
			->whereIn('cat_id', $list_of_cat_id)
			->first();

		//dd($services_singl->id);

		if (!is_null($services_singl)) {

			if ($locale == 'ar') {
				$singe_NEWS_d = News_ar::where('slug', $slg)->where('id_new',  $services_singl->id)->get();
				//dd( $News_ar);
			} else {
				$singe_NEWS_d = News_en::where('slug', $slg)->where('id_new',  $services_singl->id)->get();
			}
		} else {
			return \Redirect::to('/', 301);
		}


		if (!$singe_NEWS_d->isEmpty()) {
			return view(
				'main.singel_services',
				[
					'all_main_services' => $all_main_services,
					'cat_sitting' => $cat_sitting,
					'services_singl' => $services_singl,


				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}


	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



	public function singel_portfolio($slg, $id)
	{



		$locale = \Request::segment(1);
		App()->setLocale($locale);
		$cat_sitting = 	 NEWS::with('get_description')->where('id', $id)->get();
		$all_main_services  =   categories_news::limit(40)->orderBy('status', 'asc')->with('get_description')->where('parentid', '=', '29')->get();

		$singel_portfolio = NEWS::with('get_description')->orderBy('status', 'asc')->where('id', $id)->get();
		if ($locale == 'ar') {
			$singe_NEWS_d = News_ar::where('slug', $slg)->where('id_new',  $singel_portfolio[0]->id)->get();
			//dd( $News_ar);
		} else {
			$singe_NEWS_d = News_en::where('slug', $slg)->where('id_new',  $singel_portfolio[0]->id)->get();
		}




		if (!$singe_NEWS_d->isEmpty()) {
			return view(
				'main.singel_portfolio',
				[


					'all_main_services' => $all_main_services,
					'cat_sitting' => $cat_sitting,
					'singel_portfolio' => $singel_portfolio,


				]
			);
		} else {
			return \Redirect::to('/', 301);
		}
	}
}
