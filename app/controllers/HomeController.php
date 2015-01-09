<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    /*public function getIndex(){
        return View::make("backend.dashboard.index");
    }*/
	public function showWelcome()
	{
		return View::make('hello');
	}

    public function index()
    {
        //$page = Post::where('permalink', '=', 'welcome')->first();
        //$slides = Slideshow::latest()->get();

        /*$this->layout->title = 'Home';
        $this->layout->content = View::make('frontend.pages.home')
            ->with('page', $page);*/
        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
                if($clist->close > $clist->pclose){
                    $topgainers[]   = $clist;


                }elseif($clist->close < $clist->pclose){
                    $toploosers[]   = $clist;

                }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();

        return View::make('pages.home')->with("page_title","Welcome")
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("topgainers",$topgainers)
            ->with("slideshows",$sliders)
            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
    }

    public function getPages($pagelink){

        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();



        $page = Post::where('permalink', '=', $pagelink)->first();
        if($page->type =="post"){
            return View::make('posts.post')->with('page',$page)->with('title',$page->title)
                ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
                ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
                ->with("topgainers",$topgainers)
                ->with("slideshows",$sliders)
                ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
                ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
                ->with("toploosers",$toploosers)
                ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get());
        }elseif($page->type=="page"){
            return View::make('pages.page')->with('page',$page)->with('title',$page->title)
                ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
                ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
                ->with("topgainers",$topgainers)
                ->with("slideshows",$sliders)
                ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
                ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
                ->with("toploosers",$toploosers)
                ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get());
        }elseif($page->type == "category"){
            $categories  = Post::where("parent_id",$page->id)->get();
            return View::make("posts.category")->with('page',$page)->with('title',$page->title)
                ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
                ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
                ->with("topgainers",$topgainers)
                ->with("slideshows",$sliders)
                ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
                ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
                ->with("toploosers",$toploosers)
                ->with("categories",$categories)->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get());
        }
        //$slides = Slideshow::latest()->get();

       /* $this->layout->title = $page->title;
        $this->layout->content = View::make('pages.page')
       e     ->with('page', $page);*/
    }


    public function getSymbol(){
        $symbol = Stockpricelist::where("symbol",Input::get("symbol"))->orderBy("id","desc")->skip(1)->take(1)->get()->first();
        echo $symbol->pclose;//["pclose"];
    }

    public function getContact()
    {
        $contact = Post::type('page')
            ->where('permalink', 'contact')
            ->first();

        $this->layout->title = 'Contact Us';

        $this->layout->content = View::make('public.'.$this->current_theme.'.contact')
            ->with('contact', $contact);
    }

    public function postContact()
    {
        $input = Input::all();

        $rules = array(
            'email' => 'required|min:5|email',
            'name' => 'required|alpha|min:5',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            Mail::send('public.'.$this->current_theme.'.email', $input, function($message) use($input) {
                $message->from($input['email'], $input['name']);
                $message->to(Setting::value('email_username'), $input['name'])
                    ->subject($input['subject']);
            });
        } catch (Exception $e) {
            return Redirect::back()
                ->withInput()
                ->with('error_message', $e->getMessage());
        }

        return Redirect::back()
            ->with('success_message', 'The mail was sent.');
    }

    /*
	|--------------------------------------------------------------------------
	| Section for Account registration
	|--------------------------------------------------------------------------
	|*/

    public function getIndividual(){
        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();


        return View::make("accounts.individual")->with("page_title","Individual Account Form")
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("topgainers",$topgainers)
            ->with("slideshows",$sliders)
            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
    }
    public function getCorporate(){
        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();
        return View::make("accounts.corporate")->with("page_title","Corporate Account Form")
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("topgainers",$topgainers)
            ->with("slideshows",$sliders)
            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
    }



    public function getJoint(){
        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();
        return View::make("accounts.joint")->with("page_title","Joint Account Form")
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("topgainers",$topgainers)
            ->with("slideshows",$sliders)
            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
    }

    public function getDownload(){
        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();
        return View::make("downloads.index")->with("page_title","Downloads")
            ->with("categories",Post::where("type","document category")->get())
            ->with("downloads",Post::where("type","document")->get())
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("topgainers",$topgainers)
            ->with("slideshows",$sliders)
            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
    }


    public function getStockRecommendations(){
        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();
        return View::make("research.stockrecommendations")
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("topgainers",$topgainers)
            ->with("slideshows",$sliders)
            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
    }
    public function getPriceList(){

        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }






        $dt  = \DB::table("stockpricelists")->get();
        $listTable ="";

        $listsn=0;
        foreach($dt as $list){
            $listsn++ ;
            $listTable .="<tr>

                                <td class='txt-color-blue'>$list->symbol</td>
                                <td>$list->pclose</td>
                                <td>$list->open</td>
                                <td>$list->high</td>
                                <td>$list->low</td>
                                <td>$list->close</td>
                                <td>$list->change</td>
                                <td>$list->deal</td>
                                <td>$list->volume</td>
                                <td>$list->value</td>
                                <td>$list->percentage_change</td>
                                <td>$list->average_price</td>

                                <td>".date_format(date_create($list->stocklist_date),"d/m/Y")."</td>


                            </tr>";
        }
        return \View::make("research.pricelist")->with("title","Stock Price List")->with("pricelists",$listTable)
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())

            ->with("topgainers",$topgainers)

            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);

    }

    public function getMarketSummary(){

        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = DB::table("stockpricelists")->where(DB::raw('CAST(close AS DECIMAL(5,0))'),">",DB::raw('CAST(pclose AS DECIMAL(5,0))'))->where("stocklist_date",$currentDate)->orderBy(DB::raw('CAST(close AS DECIMAL(5,0))'),"desc")->take(5)->get();
        $currentListLoose  = DB::table("stockpricelists")->where(DB::raw('CAST(pclose AS DECIMAL(5,0))'),">",DB::raw('CAST(close AS DECIMAL(5,0))'))->where("stocklist_date",$currentDate)->orderBy(DB::raw('CAST(close AS DECIMAL(5,0))'),"desc")->take(5)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }


        return View::make('research.marketsummary')->with("page_title","Welcome")
            ->with("topgainers",$currentList)
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("toploosers",$currentListLoose)
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())


            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
           ;
    }

    public function getMarketSnapShot(){

        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();




        return View::make("research.marketsnapshot")->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("topgainers",$topgainers)
            ->with("slideshows",$sliders)
            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
    }
    public function getCorporateAction(){
        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();





        $dt  = \DB::table("corporateactions")->get();
        $listTable ="";
        $z =1;
        $listsn=0;
        foreach($dt as $list){
            $listsn++ ;
            $listTable .="<tr>
                                <td>$z</td>
                                <td>$list->company</td>
                                <td>$list->dividend</td>
                                <td>$list->bonus</td>
                                <td>$list->closure</td>
                                <td>$list->AGM_date</td>
                                <td>$list->payment_date</td>

                             </tr>";
            $z++;
        }
        return \View::make("research.corporateAction")->with("pricelists",$listTable)
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())

            ->with("topgainers",$topgainers)

            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
        //return View::make("research.corporateAction");
    }
    public function getMarketToday(){
        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();





        return View::make("research.markettoday")
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("topgainers",$topgainers)
            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
    }
    public function getCompaniesResults(){
        $currentDate = DB::table("stockpricelists")->max('stocklist_date');

        $lastDate    = DB::table("stockpricelists")->groupBy("stocklist_date")->skip(1)->take(1)->max('stocklist_date');

        $currentList  = Stockpricelist::where("stocklist_date",$currentDate)->get();
        $lastList  = Stockpricelist::where("stocklist_date",$lastDate)->get();
        $topgainers = array();
        $toploosers = array();

        foreach($currentList as $clist){
            //foreach($lastList as $llist ){
            if($clist->close > $clist->pclose){
                $topgainers[]   = $clist;


            }elseif($clist->close < $clist->pclose){
                $toploosers[]   = $clist;

            }
            //}
        }
        $sliders  = \DB::table("posts")->where("type","slideshow")->get();






        return View::make("research.companiesresults")->with("page_title","Downloads")->with("downloads",Post::where("parent_id","=",111)->get())
            ->with("symbols", DB::table("stockpricelists")->groupBy("symbol")->get())
            ->with("pricelists",DB::table("stockpricelists")->where("stocklist_date",DB::table("stockpricelists")->max('stocklist_date'))->get())
            ->with("topgainers",$topgainers)
            ->with("slideshows",$sliders)
            ->with("pageblocks",DB::table("posts")->where("type","page block")->get())
            ->with("marketnews",DB::table("posts")->where("parent_id",92)->get())
            ->with("toploosers",$toploosers);
       // return View::make("research.companiesresults");
    }





}
