<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'lastname',
        'country',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }


    public static function getUserName($userId)  {

        $user = User::find($userId);
        return $user->name;
    }

    public static function listParents() {

        $parents = User::where('role_id', 3)->get();
        return $parents;
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const STATUS_FROM = [
                    "121"                                                =>  "Afghanistan",
                    "30"                                            =>  "South Africa",
                    "154"                                                        =>  "Albania",
                    "23"                                                        =>  "Algeria",
                    "172"                                                      =>  "Germany",
                    "155"                                                        =>  "Andorra",
                    "16"                                                          =>  "Angola",
                        "45"                                                      =>  "Anguilla",
                            "94"                                                 =>  "Antarctica",
                                            "46"                                 =>  "Antigua and Barbuda",
                                    "189"                                           =>  "Saudi Arabia",
                        "80"                                                    =>  "Argentina",
                    "95"                                                        =>  "Armenia",
                "47"                                                            =>  "Aruba",
                        "194"                                                    =>  "Australia",
                        "169"                                                       =>  "Austria",
                            "96"                                                 =>  "Azerbaijan",
                    "48"                                                        =>  "Bahamas",
                    "180"                                                        =>  "Bahrain",
                            "122"                                                  =>  "Bangladesh",
                        "49"                                                       =>  "Barbados",
                        "170"                                                       =>  "Belgium",
                        "76"                                                       =>  "Bermuda",
                    "123"                                                         =>  "Bhutan",
                        "132"                                                    =>  "Belarus",
                    "81"                                                        =>  "Bolivia",
                                                    "235"                           =>  "Bonaire, Sint Eustatius & Saba",
                                                "156"                              =>  "Bosnia and Herzegovina",
                        "27"                                                      =>  "Botswana",
                                        "111"                                    =>  "Brunei Darussalam",
                    "82"                                                          =>  "Brazil",
                        "136"                                                      =>  "Bulgaria",
                                "33"                                              =>  "Burkina Faso",
                    "1"                                                        =>  "Burundi",
                    "68"                                                          =>  "Belize",
                "32"                                                            =>  "Benin",
                        "112"                                                      =>  "Cambodia",
                        "17"                                                      =>  "Cameroon",
                    "77"                                                          =>  "Canada",
                        "34"                                                    =>  "Cape Verde",
                "83"                                                            =>  "Chile",
                "103"                                                            =>  "China",
                    "129"                                                          =>  "Cyprus",
                                    "232"                                           =>  "Vatican City",
                        "84"                                                      =>  "Colombia",
                    "223"                                                        =>  "Comoros",
                "19"                                                            =>  "Congo",
                                    "20"                                          =>  "Congo-Kinshasa",
                "109"                                                            =>  "Korea",
                            "69"                                                  =>  "Costa Rica",
                    "157"                                                        =>  "Croatia",
                    "218"                                                        =>  "Curacao",
                                "35"                                            =>  "Cote d'Ivoire",
                        "142"                                                       =>  "Denmark",
                        "219"                                                      =>  "Djibouti",
                        "53"                                                     =>  "Dominica",
                            "70"                                                =>  "El Salvador",
                    "168"                                                          =>  "Spain",
                    "143"                                                        =>  "Estonia",
                "197"                                                             =>  "Fiji",
                        "145"                                                       =>  "Finland",
                    "171"                                                          =>  "France",
                "21"                                                            =>  "Gabon",
                    "36"                                                          =>  "Gambia",
                "37"                                                            =>  "Ghana",
                        "158"                                                    =>  "Gibraltar",
                    "55"                                                        =>  "Grenada",
                        "78"                                                    =>  "Greenland",
                    "159"                                                           =>  "Greece",
                            "56"                                                  =>  "Guadeloupe",
                "202"                                                              =>  "Guam",
                        "71"                                                    =>  "Guatemala",
                        "130"                                                     =>  "Guernsey",
                    "38"                                                          =>  "Guinea",
                                            "221"                                   =>  "Equatorial Guinea",
                                "222"                                            =>  "Guinea-Bissau",
                    "88"                                                          =>  "Guyana",
                                    "87"                                         =>  "French Guiana",
                    "97"                                                        =>  "Georgia",
                "57"                                                            =>  "Haiti",
                        "72"                                                      =>  "Honduras",
                        "104"                                                    =>  "Hong Kong",
                    "138"                                                        =>  "Hungary",
                                                "238"                            =>  "Northern Mariana Islands (Saipan)",
                "124"                                                             =>  "India",
                        "113"                                                    =>  "Indonesia",
                "181"                                                              =>  "Iraq",
                    "147"                                                        =>  "Ireland",
                    "146"                                                        =>  "Iceland",
                    "182"                                                          =>  "Israel",
                    "160"                                                           =>  "Italy",
                        "58"                                                       =>  "Jamaica",
                "105"                                                            =>  "Japan",
                    "131"                                                          =>  "Jersey",
                    "183"                                                        =>  "Jordan",
                            "98"                                                  =>  "Kazakhstan",
                "3"                                                            =>  "Kenya",
                            "99"                                                =>  "Kyrgyzstan",
                        "203"                                                      =>  "Kiribati",
                    "233"                                                          =>  "Kosovo",
                    "184"                                                          =>  "Kuwait",
                "114"                                                              =>  "Laos",
                    "28"                                                        =>  "Lesotho",
                    "149"                                                        =>  "Latvia",
                    "185"                                                          =>  "Lebanon",
                "215"                                                            =>  "Libya",
                    "39"                                                        =>  "Liberia",
                                "173"                                            =>  "Liechtenstein",
                        "150"                                                     =>  "Lithuania",
                            "174"                                                  =>  "Luxembourg",
                "106"                                                            =>  "Macau",
                        "161"                                                    =>  "Macedonia",
                            "4"                                                  =>  "Madagascar",
                        "115"                                                      =>  "Malaysia",
                    "5"                                                          =>  "Malawi",
                        "125"                                                      =>  "Maldives",
                "40"                                                              =>  "Mali",
                "162"                                                            =>  "Malta",
                    "24"                                                          =>  "Morocco",
                            "59"                                                  =>  "Martinique",
                        "6"                                                      =>  "Mauritius",
                            "224"                                                  =>  "Mauritania",
                    "7"                                                        =>  "Mayotte",
                    "73"                                                         =>  "Mexico",
                            "205"                                                  =>  "Micronesia",
                        "133"                                                       =>  "Moldova",
                    "175"                                                          =>  "Monaco",
                        "107"                                                      =>  "Mongolia",
                            "60"                                                  =>  "Montserrat",
                            "163"                                                  =>  "Montenegro",
                            "8"                                                  =>  "Mozambique",
                    "29"                                                        =>  "Namibia",
                "225"                                                            =>  "Nauru",
                        "74"                                                    =>  "Nicaragua",
                "41"                                                            =>  "Niger",
                    "42"                                                        =>  "Nigeria",
                "210"                                                              =>  "Niue",
                    "151"                                                         =>  "Norway",
                                        "198"                                       =>  "New Caledonia",
                                    "196"                                           =>  "New Zealand",
                "126"                                                            =>  "Nepal",
                "186"                                                              =>  "Oman",
                    "13"                                                         =>  "Uganda",
                            "102"                                                 =>  "Uzbekistan",
                        "127"                                                      =>  "Pakistan",
                    "206"                                                           =>  "Palau",
                    "75"                                                          =>  "Panama",
                                                "199"                             =>  "Papua New Guinea",
                        "89"                                                      =>  "Paraguay",
                            "176"                                                   =>  "Netherlands",
                            "117"                                                =>  "Philippines",
                    "139"                                                         =>  "Poland",
                                            "209"                                   =>  "French Polynesia",
                        "164"                                                      =>  "Portugal",
                            "62"                                                =>  "Puerto Rico",
                "90"                                                             =>  "Peru",
                "188"                                                            =>  "Qatar",
                        "140"                                                       =>  "Romania",
                                "153"                                             =>  "United Kingdom",
                                "134"                                              =>  "Russian Federation",
                    "228"                                                          =>  "Rwanda",
                                                        "217"                     =>  "Central African Republic",
                                                "54"                              =>  "Dominican Republic",
                                        "137"                                      =>  "Czech Republic",
                    "9"                                                        =>  "Reunion",
                                "214"                                              =>  "Saint Martin",
                                        "216"                                      =>  "Saint Barthelemy",
                                                        "63"                       =>  "Saint Kitts and Nevis",
                            "165"                                                 =>  "San Marino",
                                "234"                                              =>  "Sint Maarten",
                                                        "226"                     =>  "Saint Pierre and Miquelon",
                                                        "64"                     =>  "Saint Vincent and Grenadines",
                                "236"                                             =>  "Saint Helena",
                                "213"                                               =>  "Saint Lucia",
                "211"                                                            =>  "Samoa",
                                        "207"                                       =>  "American Samoa",
                                                "22"                             =>  "Sao Tome and Principe",
                    "166"                                                          =>  "Serbia",
                            "10"                                                  =>  "Seychelles",
                                "230"                                              =>  "Sierra Leone",
                        "118"                                                    =>  "Singapore",
                        "141"                                                     =>  "Slovakia",
                        "167"                                                      =>  "Slovenia",
                    "11"                                                        =>  "Somalia",
                        "128"                                                    =>  "Sri Lanka",
                        "177"                                                     =>  "Switzerland",
                        "91"                                                      =>  "Suriname",
                    "152"                                                           =>  "Sweden",
                        "31"                                                    =>  "Swaziland",
                    "43"                                                        =>  "Senegal",
                            "100"                                                 =>  "Tajikistan",
                        "12"                                                      =>  "Tanzania",
                    "110"                                                          =>  "Taiwan",
                "18"                                                             =>  "Chad",
                        "119"                                                     =>  "Thailand",
                            "231"                                                =>  "Timor-Leste",
                "44"                                                              =>  "Togo",
                "212"                                                            =>  "Tonga",
                                            "65"                                  =>  "Trinidad and Tobago",
                                        "241"                                      =>  "Tristan da Cunha",
                    "26"                                                        =>  "Tunisia",
                                "101"                                              =>  "Turkmenistan",
                    "191"                                                         =>  "Turkey",
                    "239"                                                          =>  "Tuvalu",
                    "135"                                                        =>  "Ukraine",
                    "92"                                                        =>  "Uruguay",
                    "201"                                                        =>  "Vanuatu",
                        "93"                                                    =>  "Venezuela",
                        "120"                                                       =>  "Vietnam",
                                        "242"                                     =>  "Wallis and Futuna",
                "193"                                                            =>  "Yemen",
                    "14"                                                          =>  "Zambia",
                        "15"                                                      =>  "Zimbabwe",
                    "178"                                                           =>  "Egypt",
                                                "192"                               =>  "United Arab Emirates",
                        "85"                                                       =>  "Ecuador",
                        "220"                                                       =>  "Eritrea",
                                        "79"                                    =>  "United States of America",
                        "2"                                                      =>  "Ethiopia",
                                    "195"                                         =>  "Christmas Island",
                            "148"                                                 =>  "Isle of Man",
                                        "240"                                    =>  "Ascension Island",
                                "51"                                            =>  "Cayman Islands",
                            "208"                                                 =>  "Cook Islands",
                                    "86"                                        =>  "Falkland Islands",
                                "144"                                               =>  "Faroe Islands",
                                    "204"                                         =>  "Marshall Islands",
                                    "227"                                         =>  "Pitcairn Islands",
                                    "200"                                           =>  "Solomon Islands",
                                                        "66"                       =>  "Turks and Caicos Islands",
                                                        "50"                       =>  "British Virgin Islands",
                                                    "67"                        =>  "U.S. Virgin Islands",
    ];

}
