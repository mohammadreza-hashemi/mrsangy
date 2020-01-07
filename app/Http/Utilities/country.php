<?php 



namespace App\Http\Utilities;



class Country{
    
protected static  $countries=[
   "IR"=> "Iran, Islamic Republic of",
    "AL"=> "Albania",
    "DZ"=> "Algeria",
    "AS"=> "American Samoa",
    "AD"=> "Andorra",
    "AO"=> "Angola",
    "AI"=> "Anguilla",
    "AQ"=> "Antarctica",
    "AG"=> "Antigua and Barbuda",
    "AR"=> "Argentina",
    "AM"=> "Armenia",
    "AW"=> "Aruba",
    "AU"=> "Australia",
    "AT"=> "Austria",
    "AZ"=> "Azerbaijan",
    "BS"=> "Bahamas",
    "BH"=> "Bahrain",
    "BD"=> "Bangladesh",
    "BB"=> "Barbados",
    "BY"=> "Belarus",
    "BE"=> "Belgium",
    "BZ"=> "Belize",
    "BJ"=> "Benin",
    "IN"=> "India",
    "IR"=> "Iran, Islamic Republic of",
    "IQ"=> "Iraq",
    "IL"=> "Israel",
    "IT"=> "Italy",
    "JP"=> "Japan",
    "TR"=> "Turkey",
    "US"=> "United States",
    "VN"=> "Viet Nam",
    
];
    public static function all() {
        return static::$countries;
    }
}