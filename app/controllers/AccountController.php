<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 1/11/15
 * Time: 11:01 AM
 */

class AccountController extends BaseController{
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
            ->with("toploosers",$toploosers)
            ->with("countries",DB::table("country")->get())
            ->with("states",DB::table("zone")->where("country_id","156")->get());
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


    public function postIndividual(){

        if(Request::ajax()){

            if(isset($_POST['country'])){
                $st ="";
                if(isset($_POST['country']) && !empty($_POST['country'])){
                    $scra = explode(",",$_POST['country']);
                    $states = Lga::where("zone_id",$scra[0])->get();
                    if($states){

                        $st .="<option value=''>Select LGA of birth</option>";
                        foreach($states as $state){
                            $st .="<option value='".$state->LGA."'>$state->LGA</option>";
                        }
                        $st .="<option value='other'>Other</option>";
                    }
                }
                echo $st;
            }
            exit;

        }
        $validation = Individual::validate(Input::all());
        $input = Input::all();
        print_r($input);
        if($validation->fails()){

                return Redirect::back()->withErrors($validation)->withInput();
           /* }elseif($input['type']=="post"){
                return Redirect::back()->withErrors($validation)->withInput();
            }elseif($input['type'] == "category"){
                return Redirect::back()->withErrors($validation)->withInput();
            }*/

        }else{
            try{

                array_forget($input,'file-photo');
                array_forget($input,'file-signature');
                array_forget($input,'file-utility');
                array_forget($input,'file-identity');
                array_forget($input,'_token');
                array_forget($input,'title');
                $author = new Individual();

                foreach( $input as $key => $value) {
                    $author->$key = $value;
                }
                $author->save();


            } catch(ValidationException $e) {
                \Session::put("error_message",$e->getMessage());
                return \Redirect::back()->withInput()->withInput();
            }catch(\Illuminate\Database\QueryException $e){
                \Session::put("error_message",$e->getMessage());
                return \Redirect::back()->withInput();
            }catch(\PDOException $e){
                \Session::put("error_message",$e->getMessage());
                return \Redirect::back()->withInput();
            }catch(\Exception $e){
                \Session::put("error_message",$e->getMessage());
                return \Redirect::back()->withInput();
            }
        }
    }
} 