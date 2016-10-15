<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Response;
use Request;
 
class CensusModel extends Model
{
    public static function addressid() 
    {
        $query=DB::select(DB::raw("select max(id) as addressid from address"));
        return $query;
    }

    public static function address($user_id, $province, $municipality, $barangay, $building, $fname, $lname, $contact) 
    {
        $query = DB::select(DB::raw("INSERT INTO address ( year, user_id, province_id, municipality_id, barangay_id, building_no, fname, lname, contact) VALUES ('2016', '$user_id', '$province', '$municipality', '$barangay', '$building', '$fname', '$lname', '$contact')"));   
        return $query;
    }

    public static function member($address_id,$fname,$mname,$lname,$exname,$relation_head,$gender,$birthday,$birth_certificate,$marital,$religion,$school_attendance,$literacy,$highest_grade,$employed,$occupation) 
    {

        $query = DB::select(DB::raw("INSERT INTO name (address_id, fname, mname,lname, exname, relation_head, gender,birthday, birth_certificate, marital, religion, school_attendance, literacy, highest_grade, employed, occupation) VALUES 
            ('$address_id','$fname','$mname','$lname','$exname','$relation_head','$gender','$birthday','$birth_certificate','$marital','$religion','$school_attendance','$literacy','$highest_grade','$employed','$occupation')"));    
        return $query;
    }

    public static function housing($address_id,$building,$roof,$wall,$light,$drink,$cooking,$tenure) 
    {
        $query = DB::select(DB::raw("INSERT INTO housing (address_id,building,roof,wall,light,drink,cooking,tenure) VALUES ('$address_id','$building','$roof','$wall','$light','$drink','$cooking','$tenure')"));    
        return $query;
    }

    public static function death($address_id,$fname,$lname,$gender,$age_at_death,$registry_office,$death_certificate) 
    {
        $query = DB::select(DB::raw("INSERT INTO death (address_id,fname,lname,gender,age_at_death,registry_office,death_certificate) VALUES ('$address_id','$fname','$lname','$gender','$age_at_death','$registry_office','$death_certificate')"));    
        return $query;
    }

    public static function login1($user,$password) 
    {
        $query = DB::select(DB::raw("SELECT * FROM login where user='$user' and password='$password' and user_level='1'"));    
        return $query;
    }

}
