<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use App\CensusModel;

class CensusController extends Controller
{
    public function addressid()
    {
    	try {
			$query = CensusModel::addressid();
			return Response::json(array('result' => $query),200);
		}
		catch(Exception $e) 
		{
			return Response::json(array(
				"error" => true,
				"result" => $e->getMessage()
				),400
			);
		}
    }

    public function address($user_id, $province, $municipality, $barangay, $building, $fname, $lname, $contact)
    {
    	try {
			$query = CensusModel::address($user_id, $province, $municipality, $barangay, $building, $fname, $lname, $contact);
			return Response::json(array('result' => $query),200);
		}
		catch(Exception $e) 
		{
			return Response::json(array(
				"error" => true,
				"result" => $e->getMessage()
				),400
			);
		}
    }

    public function member($address_id,$fname,$mname,$lname,$exname,$relation_head,$gender,$birthday,$birth_certificate,$marital,$religion,$school_attendance,$literacy,$highest_grade,$employed,$occupation)
    {
    	try {
    		if($exname=="000") {$exname="";};
			$query = CensusModel::member($address_id,$fname,$mname,$lname,$exname,$relation_head,$gender,$birthday,$birth_certificate,$marital,$religion,$school_attendance,$literacy,$highest_grade,$employed,$occupation);
			return Response::json(array('result' => $query),200);
		}
		catch(Exception $e) 
		{
			return Response::json(array(
				"error" => true,
				"result" => $e->getMessage()
				),400
			);
		}
    }

    public function housing($address_id,$building,$roof,$wall,$light,$drink,$cooking,$tenure)
    {
    	try {
			$query = CensusModel::housing($address_id,$building,$roof,$wall,$light,$drink,$cooking,$tenure);
			return Response::json(array('result' => $query),200);
		}
		catch(Exception $e) 
		{
			return Response::json(array(
				"error" => true,
				"result" => $e->getMessage()
				),400
			);
		}
    }

    public function death($address_id,$fname,$lname,$gender,$age_at_death,$registry_office,$death_certificate)
    {
    	try {
			$query = CensusModel::death($address_id,$fname,$lname,$gender,$age_at_death,$registry_office,$death_certificate);
			return Response::json(array('result' => $query),200);
		}
		catch(Exception $e) 
		{
			return Response::json(array(
				"error" => true,
				"result" => $e->getMessage()
				),400
			);
		}
    }

    public function login1($user,$password)
    {
    	try {
			$query = CensusModel::login1($user,$password);
			return Response::json(array('result' => $query),200);
		}
		catch(Exception $e) 
		{
			return Response::json(array(
				"error" => true,
				"result" => $e->getMessage()
				),400
			);
		}
    }

}
