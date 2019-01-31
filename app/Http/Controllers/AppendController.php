<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppendController extends BaseController
{
    //
    public function Get_Backup(){

		$Country = $this->country->get();
		$State = $this->state->get();
		$City = $this->city->get();	

		$all_country = array();
		$all_state = array();
		$all_city = array();

		foreach($Country as $c){
			$all_country[] = array(
						 'id'=>$c->id,
						 'sortname'=>$c->sortname,
						 'name'=>$c->name
						);
		}

		foreach($State as $s){
			$all_state[] = array(
						 'id'=>$s->id,
						 'name'=>$s->name,
						 'country_id'=>$s->country_id
						);
		}

		foreach($City as $ci){
			$all_city[] = array(
						 'id'=>$ci->id,
						 'name'=>$ci->name,
						 'state_id'=>$ci->state_id
						);
		}

		$data = array(
						'country'=>$all_country,
						'state'=>$all_state,
						'city'=>$all_city
					);
		//print_r($data);exit;
		file_put_contents('api/countries_states_cities_list.json', json_encode($data));
		return Response()->json(['success'=>true]);
    }

    public function Get_Country(){

		$Country = $this->country->get();
		return Response()->json(['data'=>$Country]);
    }

    public function Get_State($id){

		$State = $this->state->where('country_id',$id)->get();
		return Response()->json(['data'=>$State]);
    }

    public function Get_City($id){

		$City = $this->city->where('state_id',$id)->get();
		return Response()->json(['data'=>$City]);
    }


}
