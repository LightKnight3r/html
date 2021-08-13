<?php
/**
 * Countries list for payment form
 *
 */

if (!defined('ABSPATH')) exit;

if (!class_exists('HTCC_Countries')) :

	class HTCC_Countries
	{
		static $contries = array(
            [
                "AF",
                "Afghanistan (‫افغانستان‬‎)"
            ],
            [
                "AX",
                "Åland Islands"
            ],
            [
                "AL",
                "Albania (Shqipëri)"
            ],
            [
                "DZ",
                "Algeria (‫الجزائر‬‎)"
            ],
            [
                "AS",
                "American Samoa (Amerika Sāmoa)"
            ],
            [
                "AD",
                "Andorra"
            ],
            [
                "AO",
                "Angola"
            ],
            [
                "AI",
                "Anguilla"
            ],
            [
                "AG",
                "Antigua and Barbuda"
            ],
            [
                "AR",
                "Argentina"
            ],
            [
                "AM",
                "Armenia (Հայաստան)"
            ],
            [
                "AW",
                "Aruba"
            ],
            [
                "AU",
                "Australia"
            ],
            [
                "AT",
                "Austria (Österreich)"
            ],
            [
                "AZ",
                "Azerbaijan (Azərbaycan)"
            ],
            [
                "BS",
                "Bahamas"
            ],
            [
                "BH",
                "Bahrain (‫البحرين‬‎)"
            ],
            [
                "BD",
                "Bangladesh (বাংলাদেশ)"
            ],
            [
                "BB",
                "Barbados"
            ],
            [
                "BY",
                "Belarus (Беларусь)"
            ],
            [
                "BE",
                "Belgium (België)"
            ],
            [
                "BZ",
                "Belize"
            ],
            [
                "BJ",
                "Benin (Bénin)"
            ],
            [
                "BM",
                "Bermuda"
            ],
            [
                "BT",
                "Bhutan (འབྲུག)"
            ],
            [
                "BO",
                "Bolivia"
            ],
            [
                "BA",
                "Bosnia and Herzegovina"
            ],
            [
                "BW",
                "Botswana"
            ],
            [
                "BR",
                "Brazil (Brasil)"
            ],
            [
                "IO",
                "British Indian Ocean Territory"
            ],
            [
                "VG",
                "British Virgin Islands"
            ],
            [
                "BN",
                "Brunei (Negara Brunei Darussalam)"
            ],
            [
                "BG",
                "Bulgaria (България)"
            ],
            [
                "BF",
                "Burkina Faso"
            ],
            [
                "BI",
                "Burundi (Uburundi)"
            ],
            [
                "KH",
                "Cambodia (កម្ពុជា)"
            ],
            [
                "CM",
                "Cameroon (Cameroun)"
            ],
            [
                "CA",
                "Canada"
            ],
            [
                "CV",
                "Cape Verde (Kabu Verdi)"
            ],
            [
                "BQ",
                "Caribbean Netherlands"
            ],
            [
                "KY",
                "Cayman Islands"
            ],
            [
                "CF",
                "Central African Republic"
            ],
            [
                "TD",
                "Chad (Tchad)"
            ],
            [
                "CL",
                "Chile"
            ],
            [
                "CN",
                "China (中国)"
            ],
            [
                "CX",
                "Christmas Island"
            ],
            [
                "CC",
                "Cocos (Keeling) Islands"
            ],
            [
                "CO",
                "Colombia"
            ],
            [
                "KM",
                "Comoros (‫جزر القمر‬‎)"
            ],
            [
                "CD",
                "Congo (DRC) (Kongo)"
            ],
            [
                "CG",
                "Congo (Republic) (Congo-Brazzaville)"
            ],
            [
                "CK",
                "Cook Islands"
            ],
            [
                "CR",
                "Costa Rica"
            ],
            [
                "CI",
                "Côte d’Ivoire"
            ],
            [
                "HR",
                "Croatia (Hrvatska)"
            ],
            [
                "CU",
                "Cuba"
            ],
            [
                "CW",
                "Curaçao"
            ],
            [
                "CY",
                "Cyprus (Κύπρος)"
            ],
            [
                "CZ",
                "Czech Republic (Česká republika)"
            ],
            [
                "DK",
                "Denmark (Danmark)"
            ],
            [
                "DJ",
                "Djibouti"
            ],
            [
                "DM",
                "Dominica"
            ],
            [
                "DO",
                "Dominican Republic"
            ],
            [
                "EC",
                "Ecuador"
            ],
            [
                "EG",
                "Egypt (‫مصر‬‎)"
            ],
            [
                "SV",
                "El Salvador"
            ],
            [
                "GQ",
                "Equatorial Guinea (Guinea Ecuatorial)"
            ],
            [
                "ER",
                "Eritrea"
            ],
            [
                "EE",
                "Estonia (Eesti)"
            ],
            [
                "ET",
                "Ethiopia"
            ],
            [
                "FK",
                "Falkland Islands (Islas Malvinas)"
            ],
            [
                "FO",
                "Faroe Islands (Føroyar)"
            ],
            [
                "FJ",
                "Fiji (Matanitu Tugalala o Viti)"
            ],
            [
                "FI",
                "Finland (Suomi)"
            ],
            [
                "FR",
                "France (République française)"
            ],
            [
                "GF",
                "French Guiana (Guyane française)"
            ],
            [
                "PF",
                "French Polynesia (Polynésie française)"
            ],
            [
                "GA",
                "Gabon (République gabonaise)"
            ],
            [
                "GM",
                "Gambia"
            ],
            [
                "GE",
                "Georgia (საქართველო)"
            ],
            [
                "DE",
                "Germany (Deutschland)"
            ],
            [
                "GH",
                "Ghana (Gaana)"
            ],
            [
                "GI",
                "Gibraltar"
            ],
            [
                "GR",
                "Greece (Ελλάδα)"
            ],
            [
                "GL",
                "Greenland (Kalaallit Nunaat)"
            ],
            [
                "GD",
                "Grenada"
            ],
            [
                "GP",
                "Guadeloupe"
            ],
            [
                "GU",
                "Guam (Guåhån)"
            ],
            [
                "GT",
                "Guatemala"
            ],
            [
                "GG",
                "Guernsey"
            ],
            [
                "GN",
                "Guinea (Guinée)"
            ],
            [
                "GW",
                "Guinea-Bissau (Guiné Bissau)"
            ],
            [
                "GY",
                "Guyana"
            ],
            [
                "HT",
                "Haiti (République d'Haïti)"
            ],
            [
                "HN",
                "Honduras"
            ],
            [
                "HK",
                "Hong Kong (香港)"
            ],
            [
                "HU",
                "Hungary (Magyarország)"
            ],
            [
                "IS",
                "Iceland (Ísland)"
            ],
            [
                "IN",
                "India (भारत)"
            ],
            [
                "ID",
                "Indonesia"
            ],
            [
                "IR",
                "Iran (‫ایران‬‎)"
            ],
            [
                "IQ",
                "Iraq (‫العراق‬‎)"
            ],
            [
                "IE",
                "Ireland"
            ],
            [
                "IM",
                "Isle of Man"
            ],
            [
                "IL",
                "Israel (‫ישראל‬‎)"
            ],
            [
                "IT",
                "Italy (Italia)"
            ],
            [
                "JM",
                "Jamaica"
            ],
            [
                "JP",
                "Japan (日本)"
            ],
            [
                "JE",
                "Jersey"
            ],
            [
                "JO",
                "Jordan (‫الأردن‬‎)"
            ],
            [
                "KZ",
                "Kazakhstan (Казахстан)"
            ],
            [
                "KE",
                "Kenya"
            ],
            [
                "KI",
                "Kiribati"
            ],
            [
                "KW",
                "Kuwait (‫الكويت‬‎)"
            ],
            [
                "KG",
                "Kyrgyzstan (Кыргызстан)"
            ],
            [
                "LA",
                "Laos (ລາວ)"
            ],
            [
                "LV",
                "Latvia (Latvija)"
            ],
            [
                "LB",
                "Lebanon (‫لبنان‬‎)"
            ],
            [
                "LS",
                "Lesotho"
            ],
            [
                "LR",
                "Liberia"
            ],
            [
                "LY",
                "Libya (‫ليبيا‬‎)"
            ],
            [
                "LI",
                "Liechtenstein"
            ],
            [
                "LT",
                "Lithuania (Lietuva)"
            ],
            [
                "LU",
                "Luxembourg (Lëtzebuerg)"
            ],
            [
                "MO",
                "Macau (澳門)"
            ],
            [
                "MK",
                "Macedonia (FYROM) (Македонија)"
            ],
            [
                "MG",
                "Madagascar (Madagasikara)"
            ],
            [
                "MW",
                "Malawi (Malaŵi)"
            ],
            [
                "MY",
                "Malaysia"
            ],
            [
                "MV",
                "Maldives"
            ],
            [
                "ML",
                "Mali"
            ],
            [
                "MT",
                "Malta"
            ],
            [
                "MH",
                "Marshall Islands"
            ],
            [
                "MQ",
                "Martinique"
            ],
            [
                "MR",
                "Mauritania (‫موريتانيا‬‎)"
            ],
            [
                "MU",
                "Mauritius (Moris)"
            ],
            [
                "YT",
                "Mayotte"
            ],
            [
                "MX",
                "Mexico (México)"
            ],
            [
                "FM",
                "Micronesia"
            ],
            [
                "MD",
                "Moldova (Republica Moldova)"
            ],
            [
                "MC",
                "Monaco"
            ],
            [
                "MN",
                "Mongolia (Монгол)"
            ],
            [
                "ME",
                "Montenegro (Crna Gora)"
            ],
            [
                "MS",
                "Montserrat"
            ],
            [
                "MA",
                "Morocco (‫المغرب‬‎)"
            ],
            [
                "MZ",
                "Mozambique (Moçambique)"
            ],
            [
                "MM",
                "Myanmar (Burma) (မြန်မာ)"
            ],
            [
                "NA",
                "Namibia (Namibië)"
            ],
            [
                "NR",
                "Nauru (Repubrikin Naoero)"
            ],
            [
                "NP",
                "Nepal (नेपाल)"
            ],
            [
                "NL",
                "Netherlands (Nederland)"
            ],
            [
                "NC",
                "New Caledonia (Nouvelle-Calédonie)"
            ],
            [
                "NZ",
                "New Zealand"
            ],
            [
                "NI",
                "Nicaragua"
            ],
            [
                "NE",
                "Niger (Nijar)"
            ],
            [
                "NG",
                "Nigeria"
            ],
            [
                "NU",
                "Niue (Niuē)"
            ],
            [
                "NF",
                "Norfolk Island"
            ],
            [
                "KP",
                "North Korea (조선 민주주의 인민 공화국)"
            ],
            [
                "MP",
                "Northern Mariana Islands"
            ],
            [
                "NO",
                "Norway (Norge)"
            ],
            [
                "OM",
                "Oman (‫عُمان‬‎)"
            ],
            [
                "PK",
                "Pakistan (‫پاکستان‬‎)"
            ],
            [
                "PW",
                "Palau (Beluu er a Belau)"
            ],
            [
                "PS",
                "Palestine (‫فلسطين‬‎)"
            ],
            [
                "PA",
                "Panama (Panamá)"
            ],
            [
                "PG",
                "Papua New Guinea"
            ],
            [
                "PY",
                "Paraguay (Tetã Paraguái)"
            ],
            [
                "PE",
                "Peru (Perú)"
            ],
            [
                "PH",
                "Philippines (Republika ng Pilipinas)"
            ],
            [
                "PL",
                "Poland (Polska)"
            ],
            [
                "PT",
                "Portugal (República Portuguesa)"
            ],
            [
                "PR",
                "Puerto Rico"
            ],
            [
                "QA",
                "Qatar (‫قطر‬‎)"
            ],
            [
                "RE",
                "Réunion (La Réunion)"
            ],
            [
                "RO",
                "Romania (România)"
            ],
            [
                "RU",
                "Russia (Россия)"
            ],
            [
                "RW",
                "Rwanda"
            ],
            [
                "BL",
                "Saint Barthélemy (Saint-Barthélemy)"
            ],
            [
                "SH",
                "Saint Helena"
            ],
            [
                "KN",
                "Saint Kitts and Nevis"
            ],
            [
                "LC",
                "Saint Lucia"
            ],
            [
                "MF",
                "Saint Martin (Saint-Martin)"
            ],
            [
                "PM",
                "Saint Pierre and Miquelon"
            ],
            [
                "VC",
                "Saint Vincent and the Grenadines"
            ],
            [
                "WS",
                "Samoa (Sāmoa)"
            ],
            [
                "SM",
                "San Marino"
            ],
            [
                "ST",
                "São Tomé and Príncipe"
            ],
            [
                "SA",
                "Saudi Arabia (‫المملكة العربية السعودية‬‎)"
            ],
            [
                "SN",
                "Senegal (Sénégal)"
            ],
            [
                "RS",
                "Serbia (Србија)"
            ],
            [
                "SC",
                "Seychelles (Repiblik Sesel)"
            ],
            [
                "SL",
                "Sierra Leone"
            ],
            [
                "SG",
                "Singapore (Singapura) (新加坡共和国)"
            ],
            [
                "SX",
                "Sint Maarten"
            ],
            [
                "SK",
                "Slovakia (Slovensko)"
            ],
            [
                "SI",
                "Slovenia (Slovenija)"
            ],
            [
                "SB",
                "Solomon Islands"
            ],
            [
                "SO",
                "Somalia (Soomaaliya)"
            ],
            [
                "ZA",
                "South Africa"
            ],
            [
                "KR",
                "South Korea (대한민국)"
            ],
            [
                "SS",
                "South Sudan (‫جنوب السودان‬‎)"
            ],
            [
                "ES",
                "Spain (España)"
            ],
            [
                "LK",
                "Sri Lanka (ශ්‍රී ලංකාව)"
            ],
            [
                "SD",
                "Sudan (‫السودان‬‎)"
            ],
            [
                "SR",
                "Suriname"
            ],
            [
                "SJ",
                "Svalbard and Jan Mayen"
            ],
            [
                "SZ",
                "Swaziland (Umbuso weSwatini)"
            ],
            [
                "SE",
                "Sweden (Sverige)"
            ],
            [
                "CH",
                "Switzerland (Schweiz)"
            ],
            [
                "SY",
                "Syria (‫سوريا‬‎)"
            ],
            [
                "TW",
                "Taiwan (台灣)"
            ],
            [
                "TJ",
                "Tajikistan (Ҷумҳурии Тоҷикистон)"
            ],
            [
                "TZ",
                "Tanzania"
            ],
            [
                "TH",
                "Thailand (ไทย)"
            ],
            [
                "TL",
                "Timor-Leste (Timór-Leste)"
            ],
            [
                "TG",
                "Togo (République togolaise)"
            ],
            [
                "TK",
                "Tokelau"
            ],
            [
                "TO",
                "Tonga"
            ],
            [
                "TT",
                "Trinidad and Tobago"
            ],
            [
                "TN",
                "Tunisia (‫تونس‬‎)"
            ],
            [
                "TR",
                "Turkey (Türkiye)"
            ],
            [
                "TM",
                "Turkmenistan (Türkmenistan)"
            ],
            [
                "TC",
                "Turks and Caicos Islands"
            ],
            [
                "TV",
                "Tuvalu"
            ],
            [
                "VI",
                "U.S. Virgin Islands"
            ],
            [
                "UG",
                "Uganda"
            ],
            [
                "UA",
                "Ukraine (Україна)"
            ],
            [
                "AE",
                "United Arab Emirates (‫الإمارات العربية المتحدة‬‎)"
            ],
            [
                "GB",
                "United Kingdom"
            ],
            [
                "US",
                "United States"
            ],
            [
                "UY",
                "Uruguay"
            ],
            [
                "UZ",
                "Uzbekistan (Oʻzbekiston)"
            ],
            [
                "VU",
                "Vanuatu"
            ],
            [
                "VA",
                "Vatican City (Città del Vaticano)"
            ],
            [
                "VE",
                "Venezuela"
            ],
            [
                "VN",
                "Vietnam (Việt Nam)"
            ],
            [
                "WF",
                "Wallis and Futuna (Wallis-et-Futuna)"
            ],
            [
                "EH",
                "Western Sahara (‫الصحراء الغربية‬‎)"
            ],
            [
                "YE",
                "Yemen (‫اليمن‬‎)"
            ],
            [
                "ZM",
                "Zambia"
            ],
            [
                "ZW",
                "Zimbabwe"
            ]
		);


	}

endif; // END class_exists check