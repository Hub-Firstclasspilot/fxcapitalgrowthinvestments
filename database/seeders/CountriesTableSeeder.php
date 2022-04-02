<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'iso' => 'AF',
                'name' => 'AFGHANISTAN',
                'nicename' => 'Afghanistan',
                'iso3' => 'AFG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'iso' => 'AL',
                'name' => 'ALBANIA',
                'nicename' => 'Albania',
                'iso3' => 'ALB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'iso' => 'DZ',
                'name' => 'ALGERIA',
                'nicename' => 'Algeria',
                'iso3' => 'DZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'iso' => 'AS',
                'name' => 'AMERICAN SAMOA',
                'nicename' => 'American Samoa',
                'iso3' => 'ASM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'iso' => 'AD',
                'name' => 'ANDORRA',
                'nicename' => 'Andorra',
                'iso3' => 'AND',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'iso' => 'AO',
                'name' => 'ANGOLA',
                'nicename' => 'Angola',
                'iso3' => 'AGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'iso' => 'AI',
                'name' => 'ANGUILLA',
                'nicename' => 'Anguilla',
                'iso3' => 'AIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'iso' => 'AQ',
                'name' => 'ANTARCTICA',
                'nicename' => 'Antarctica',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'iso' => 'AG',
                'name' => 'ANTIGUA AND BARBUDA',
                'nicename' => 'Antigua and Barbuda',
                'iso3' => 'ATG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'iso' => 'AR',
                'name' => 'ARGENTINA',
                'nicename' => 'Argentina',
                'iso3' => 'ARG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'iso' => 'AM',
                'name' => 'ARMENIA',
                'nicename' => 'Armenia',
                'iso3' => 'ARM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'iso' => 'AW',
                'name' => 'ARUBA',
                'nicename' => 'Aruba',
                'iso3' => 'ABW',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'iso' => 'AU',
                'name' => 'AUSTRALIA',
                'nicename' => 'Australia',
                'iso3' => 'AUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'iso' => 'AT',
                'name' => 'AUSTRIA',
                'nicename' => 'Austria',
                'iso3' => 'AUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'iso' => 'AZ',
                'name' => 'AZERBAIJAN',
                'nicename' => 'Azerbaijan',
                'iso3' => 'AZE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'iso' => 'BS',
                'name' => 'BAHAMAS',
                'nicename' => 'Bahamas',
                'iso3' => 'BHS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'iso' => 'BH',
                'name' => 'BAHRAIN',
                'nicename' => 'Bahrain',
                'iso3' => 'BHR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'iso' => 'BD',
                'name' => 'BANGLADESH',
                'nicename' => 'Bangladesh',
                'iso3' => 'BGD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'iso' => 'BB',
                'name' => 'BARBADOS',
                'nicename' => 'Barbados',
                'iso3' => 'BRB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'iso' => 'BY',
                'name' => 'BELARUS',
                'nicename' => 'Belarus',
                'iso3' => 'BLR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'iso' => 'BE',
                'name' => 'BELGIUM',
                'nicename' => 'Belgium',
                'iso3' => 'BEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'iso' => 'BZ',
                'name' => 'BELIZE',
                'nicename' => 'Belize',
                'iso3' => 'BLZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'iso' => 'BJ',
                'name' => 'BENIN',
                'nicename' => 'Benin',
                'iso3' => 'BEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'iso' => 'BM',
                'name' => 'BERMUDA',
                'nicename' => 'Bermuda',
                'iso3' => 'BMU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'iso' => 'BT',
                'name' => 'BHUTAN',
                'nicename' => 'Bhutan',
                'iso3' => 'BTN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'iso' => 'BO',
                'name' => 'BOLIVIA',
                'nicename' => 'Bolivia',
                'iso3' => 'BOL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'iso' => 'BA',
                'name' => 'BOSNIA AND HERZEGOVINA',
                'nicename' => 'Bosnia and Herzegovina',
                'iso3' => 'BIH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'iso' => 'BW',
                'name' => 'BOTSWANA',
                'nicename' => 'Botswana',
                'iso3' => 'BWA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'iso' => 'BV',
                'name' => 'BOUVET ISLAND',
                'nicename' => 'Bouvet Island',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'iso' => 'BR',
                'name' => 'BRAZIL',
                'nicename' => 'Brazil',
                'iso3' => 'BRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'iso' => 'IO',
                'name' => 'BRITISH INDIAN OCEAN TERRITORY',
                'nicename' => 'British Indian Ocean Territory',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'iso' => 'BN',
                'name' => 'BRUNEI DARUSSALAM',
                'nicename' => 'Brunei Darussalam',
                'iso3' => 'BRN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'iso' => 'BG',
                'name' => 'BULGARIA',
                'nicename' => 'Bulgaria',
                'iso3' => 'BGR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'iso' => 'BF',
                'name' => 'BURKINA FASO',
                'nicename' => 'Burkina Faso',
                'iso3' => 'BFA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'iso' => 'BI',
                'name' => 'BURUNDI',
                'nicename' => 'Burundi',
                'iso3' => 'BDI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'iso' => 'KH',
                'name' => 'CAMBODIA',
                'nicename' => 'Cambodia',
                'iso3' => 'KHM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'iso' => 'CM',
                'name' => 'CAMEROON',
                'nicename' => 'Cameroon',
                'iso3' => 'CMR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'iso' => 'CA',
                'name' => 'CANADA',
                'nicename' => 'Canada',
                'iso3' => 'CAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'iso' => 'CV',
                'name' => 'CAPE VERDE',
                'nicename' => 'Cape Verde',
                'iso3' => 'CPV',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'iso' => 'KY',
                'name' => 'CAYMAN ISLANDS',
                'nicename' => 'Cayman Islands',
                'iso3' => 'CYM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'iso' => 'CF',
                'name' => 'CENTRAL AFRICAN REPUBLIC',
                'nicename' => 'Central African Republic',
                'iso3' => 'CAF',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'iso' => 'TD',
                'name' => 'CHAD',
                'nicename' => 'Chad',
                'iso3' => 'TCD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'iso' => 'CL',
                'name' => 'CHILE',
                'nicename' => 'Chile',
                'iso3' => 'CHL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'iso' => 'CN',
                'name' => 'CHINA',
                'nicename' => 'China',
                'iso3' => 'CHN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'iso' => 'CX',
                'name' => 'CHRISTMAS ISLAND',
                'nicename' => 'Christmas Island',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'iso' => 'CC',
            'name' => 'COCOS (KEELING) ISLANDS',
            'nicename' => 'Cocos (Keeling) Islands',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'iso' => 'CO',
                'name' => 'COLOMBIA',
                'nicename' => 'Colombia',
                'iso3' => 'COL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'iso' => 'KM',
                'name' => 'COMOROS',
                'nicename' => 'Comoros',
                'iso3' => 'COM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'iso' => 'CG',
                'name' => 'CONGO',
                'nicename' => 'Congo',
                'iso3' => 'COG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'iso' => 'CD',
                'name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
                'nicename' => 'Congo, the Democratic Republic of the',
                'iso3' => 'COD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'iso' => 'CK',
                'name' => 'COOK ISLANDS',
                'nicename' => 'Cook Islands',
                'iso3' => 'COK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'iso' => 'CR',
                'name' => 'COSTA RICA',
                'nicename' => 'Costa Rica',
                'iso3' => 'CRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'iso' => 'CI',
                'name' => 'COTE D\'IVOIRE',
                'nicename' => 'Cote D\'Ivoire',
                'iso3' => 'CIV',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'iso' => 'HR',
                'name' => 'CROATIA',
                'nicename' => 'Croatia',
                'iso3' => 'HRV',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'iso' => 'CU',
                'name' => 'CUBA',
                'nicename' => 'Cuba',
                'iso3' => 'CUB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'iso' => 'CY',
                'name' => 'CYPRUS',
                'nicename' => 'Cyprus',
                'iso3' => 'CYP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'iso' => 'CZ',
                'name' => 'CZECH REPUBLIC',
                'nicename' => 'Czech Republic',
                'iso3' => 'CZE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'iso' => 'DK',
                'name' => 'DENMARK',
                'nicename' => 'Denmark',
                'iso3' => 'DNK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'iso' => 'DJ',
                'name' => 'DJIBOUTI',
                'nicename' => 'Djibouti',
                'iso3' => 'DJI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'iso' => 'DM',
                'name' => 'DOMINICA',
                'nicename' => 'Dominica',
                'iso3' => 'DMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'iso' => 'DO',
                'name' => 'DOMINICAN REPUBLIC',
                'nicename' => 'Dominican Republic',
                'iso3' => 'DOM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'iso' => 'EC',
                'name' => 'ECUADOR',
                'nicename' => 'Ecuador',
                'iso3' => 'ECU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'iso' => 'EG',
                'name' => 'EGYPT',
                'nicename' => 'Egypt',
                'iso3' => 'EGY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'iso' => 'SV',
                'name' => 'EL SALVADOR',
                'nicename' => 'El Salvador',
                'iso3' => 'SLV',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'iso' => 'GQ',
                'name' => 'EQUATORIAL GUINEA',
                'nicename' => 'Equatorial Guinea',
                'iso3' => 'GNQ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'iso' => 'ER',
                'name' => 'ERITREA',
                'nicename' => 'Eritrea',
                'iso3' => 'ERI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'iso' => 'EE',
                'name' => 'ESTONIA',
                'nicename' => 'Estonia',
                'iso3' => 'EST',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'iso' => 'ET',
                'name' => 'ETHIOPIA',
                'nicename' => 'Ethiopia',
                'iso3' => 'ETH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'iso' => 'FK',
            'name' => 'FALKLAND ISLANDS (MALVINAS)',
            'nicename' => 'Falkland Islands (Malvinas)',
                'iso3' => 'FLK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'iso' => 'FO',
                'name' => 'FAROE ISLANDS',
                'nicename' => 'Faroe Islands',
                'iso3' => 'FRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'iso' => 'FJ',
                'name' => 'FIJI',
                'nicename' => 'Fiji',
                'iso3' => 'FJI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'iso' => 'FI',
                'name' => 'FINLAND',
                'nicename' => 'Finland',
                'iso3' => 'FIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'iso' => 'FR',
                'name' => 'FRANCE',
                'nicename' => 'France',
                'iso3' => 'FRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'iso' => 'GF',
                'name' => 'FRENCH GUIANA',
                'nicename' => 'French Guiana',
                'iso3' => 'GUF',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'iso' => 'PF',
                'name' => 'FRENCH POLYNESIA',
                'nicename' => 'French Polynesia',
                'iso3' => 'PYF',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'iso' => 'TF',
                'name' => 'FRENCH SOUTHERN TERRITORIES',
                'nicename' => 'French Southern Territories',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'iso' => 'GA',
                'name' => 'GABON',
                'nicename' => 'Gabon',
                'iso3' => 'GAB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'iso' => 'GM',
                'name' => 'GAMBIA',
                'nicename' => 'Gambia',
                'iso3' => 'GMB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'iso' => 'GE',
                'name' => 'GEORGIA',
                'nicename' => 'Georgia',
                'iso3' => 'GEO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'iso' => 'DE',
                'name' => 'GERMANY',
                'nicename' => 'Germany',
                'iso3' => 'DEU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'iso' => 'GH',
                'name' => 'GHANA',
                'nicename' => 'Ghana',
                'iso3' => 'GHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'iso' => 'GI',
                'name' => 'GIBRALTAR',
                'nicename' => 'Gibraltar',
                'iso3' => 'GIB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'iso' => 'GR',
                'name' => 'GREECE',
                'nicename' => 'Greece',
                'iso3' => 'GRC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'iso' => 'GL',
                'name' => 'GREENLAND',
                'nicename' => 'Greenland',
                'iso3' => 'GRL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'iso' => 'GD',
                'name' => 'GRENADA',
                'nicename' => 'Grenada',
                'iso3' => 'GRD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'iso' => 'GP',
                'name' => 'GUADELOUPE',
                'nicename' => 'Guadeloupe',
                'iso3' => 'GLP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'iso' => 'GU',
                'name' => 'GUAM',
                'nicename' => 'Guam',
                'iso3' => 'GUM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'iso' => 'GT',
                'name' => 'GUATEMALA',
                'nicename' => 'Guatemala',
                'iso3' => 'GTM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'iso' => 'GN',
                'name' => 'GUINEA',
                'nicename' => 'Guinea',
                'iso3' => 'GIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'iso' => 'GW',
                'name' => 'GUINEA-BISSAU',
                'nicename' => 'Guinea-Bissau',
                'iso3' => 'GNB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'iso' => 'GY',
                'name' => 'GUYANA',
                'nicename' => 'Guyana',
                'iso3' => 'GUY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'iso' => 'HT',
                'name' => 'HAITI',
                'nicename' => 'Haiti',
                'iso3' => 'HTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'iso' => 'HM',
                'name' => 'HEARD ISLAND AND MCDONALD ISLANDS',
                'nicename' => 'Heard Island and Mcdonald Islands',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'iso' => 'VA',
            'name' => 'HOLY SEE (VATICAN CITY STATE)',
            'nicename' => 'Holy See (Vatican City State)',
                'iso3' => 'VAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'iso' => 'HN',
                'name' => 'HONDURAS',
                'nicename' => 'Honduras',
                'iso3' => 'HND',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'iso' => 'HK',
                'name' => 'HONG KONG',
                'nicename' => 'Hong Kong',
                'iso3' => 'HKG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'iso' => 'HU',
                'name' => 'HUNGARY',
                'nicename' => 'Hungary',
                'iso3' => 'HUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'iso' => 'IS',
                'name' => 'ICELAND',
                'nicename' => 'Iceland',
                'iso3' => 'ISL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'iso' => 'IN',
                'name' => 'INDIA',
                'nicename' => 'India',
                'iso3' => 'IND',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'iso' => 'ID',
                'name' => 'INDONESIA',
                'nicename' => 'Indonesia',
                'iso3' => 'IDN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'iso' => 'IR',
                'name' => 'IRAN, ISLAMIC REPUBLIC OF',
                'nicename' => 'Iran, Islamic Republic of',
                'iso3' => 'IRN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'iso' => 'IQ',
                'name' => 'IRAQ',
                'nicename' => 'Iraq',
                'iso3' => 'IRQ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'iso' => 'IE',
                'name' => 'IRELAND',
                'nicename' => 'Ireland',
                'iso3' => 'IRL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'iso' => 'IL',
                'name' => 'ISRAEL',
                'nicename' => 'Israel',
                'iso3' => 'ISR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'iso' => 'IT',
                'name' => 'ITALY',
                'nicename' => 'Italy',
                'iso3' => 'ITA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'iso' => 'JM',
                'name' => 'JAMAICA',
                'nicename' => 'Jamaica',
                'iso3' => 'JAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'iso' => 'JP',
                'name' => 'JAPAN',
                'nicename' => 'Japan',
                'iso3' => 'JPN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'iso' => 'JO',
                'name' => 'JORDAN',
                'nicename' => 'Jordan',
                'iso3' => 'JOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'iso' => 'KZ',
                'name' => 'KAZAKHSTAN',
                'nicename' => 'Kazakhstan',
                'iso3' => 'KAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'iso' => 'KE',
                'name' => 'KENYA',
                'nicename' => 'Kenya',
                'iso3' => 'KEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'iso' => 'KI',
                'name' => 'KIRIBATI',
                'nicename' => 'Kiribati',
                'iso3' => 'KIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'iso' => 'KP',
                'name' => 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF',
                'nicename' => 'Korea, Democratic People\'s Republic of',
                'iso3' => 'PRK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'iso' => 'KR',
                'name' => 'KOREA, REPUBLIC OF',
                'nicename' => 'Korea, Republic of',
                'iso3' => 'KOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'iso' => 'KW',
                'name' => 'KUWAIT',
                'nicename' => 'Kuwait',
                'iso3' => 'KWT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'iso' => 'KG',
                'name' => 'KYRGYZSTAN',
                'nicename' => 'Kyrgyzstan',
                'iso3' => 'KGZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'iso' => 'LA',
                'name' => 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC',
                'nicename' => 'Lao People\'s Democratic Republic',
                'iso3' => 'LAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'iso' => 'LV',
                'name' => 'LATVIA',
                'nicename' => 'Latvia',
                'iso3' => 'LVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'iso' => 'LB',
                'name' => 'LEBANON',
                'nicename' => 'Lebanon',
                'iso3' => 'LBN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'iso' => 'LS',
                'name' => 'LESOTHO',
                'nicename' => 'Lesotho',
                'iso3' => 'LSO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'iso' => 'LR',
                'name' => 'LIBERIA',
                'nicename' => 'Liberia',
                'iso3' => 'LBR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'iso' => 'LY',
                'name' => 'LIBYAN ARAB JAMAHIRIYA',
                'nicename' => 'Libyan Arab Jamahiriya',
                'iso3' => 'LBY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'iso' => 'LI',
                'name' => 'LIECHTENSTEIN',
                'nicename' => 'Liechtenstein',
                'iso3' => 'LIE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'iso' => 'LT',
                'name' => 'LITHUANIA',
                'nicename' => 'Lithuania',
                'iso3' => 'LTU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'iso' => 'LU',
                'name' => 'LUXEMBOURG',
                'nicename' => 'Luxembourg',
                'iso3' => 'LUX',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'iso' => 'MO',
                'name' => 'MACAO',
                'nicename' => 'Macao',
                'iso3' => 'MAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'iso' => 'MK',
                'name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
                'nicename' => 'Macedonia, the Former Yugoslav Republic of',
                'iso3' => 'MKD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'iso' => 'MG',
                'name' => 'MADAGASCAR',
                'nicename' => 'Madagascar',
                'iso3' => 'MDG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'iso' => 'MW',
                'name' => 'MALAWI',
                'nicename' => 'Malawi',
                'iso3' => 'MWI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'iso' => 'MY',
                'name' => 'MALAYSIA',
                'nicename' => 'Malaysia',
                'iso3' => 'MYS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'iso' => 'MV',
                'name' => 'MALDIVES',
                'nicename' => 'Maldives',
                'iso3' => 'MDV',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'iso' => 'ML',
                'name' => 'MALI',
                'nicename' => 'Mali',
                'iso3' => 'MLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'iso' => 'MT',
                'name' => 'MALTA',
                'nicename' => 'Malta',
                'iso3' => 'MLT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'iso' => 'MH',
                'name' => 'MARSHALL ISLANDS',
                'nicename' => 'Marshall Islands',
                'iso3' => 'MHL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'iso' => 'MQ',
                'name' => 'MARTINIQUE',
                'nicename' => 'Martinique',
                'iso3' => 'MTQ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'iso' => 'MR',
                'name' => 'MAURITANIA',
                'nicename' => 'Mauritania',
                'iso3' => 'MRT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'iso' => 'MU',
                'name' => 'MAURITIUS',
                'nicename' => 'Mauritius',
                'iso3' => 'MUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'iso' => 'YT',
                'name' => 'MAYOTTE',
                'nicename' => 'Mayotte',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'iso' => 'MX',
                'name' => 'MEXICO',
                'nicename' => 'Mexico',
                'iso3' => 'MEX',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'iso' => 'FM',
                'name' => 'MICRONESIA, FEDERATED STATES OF',
                'nicename' => 'Micronesia, Federated States of',
                'iso3' => 'FSM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'iso' => 'MD',
                'name' => 'MOLDOVA, REPUBLIC OF',
                'nicename' => 'Moldova, Republic of',
                'iso3' => 'MDA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'iso' => 'MC',
                'name' => 'MONACO',
                'nicename' => 'Monaco',
                'iso3' => 'MCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'iso' => 'MN',
                'name' => 'MONGOLIA',
                'nicename' => 'Mongolia',
                'iso3' => 'MNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'iso' => 'MS',
                'name' => 'MONTSERRAT',
                'nicename' => 'Montserrat',
                'iso3' => 'MSR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'iso' => 'MA',
                'name' => 'MOROCCO',
                'nicename' => 'Morocco',
                'iso3' => 'MAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'iso' => 'MZ',
                'name' => 'MOZAMBIQUE',
                'nicename' => 'Mozambique',
                'iso3' => 'MOZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'iso' => 'MM',
                'name' => 'MYANMAR',
                'nicename' => 'Myanmar',
                'iso3' => 'MMR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'iso' => 'NA',
                'name' => 'NAMIBIA',
                'nicename' => 'Namibia',
                'iso3' => 'NAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'iso' => 'NR',
                'name' => 'NAURU',
                'nicename' => 'Nauru',
                'iso3' => 'NRU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'iso' => 'NP',
                'name' => 'NEPAL',
                'nicename' => 'Nepal',
                'iso3' => 'NPL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'iso' => 'NL',
                'name' => 'NETHERLANDS',
                'nicename' => 'Netherlands',
                'iso3' => 'NLD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'iso' => 'AN',
                'name' => 'NETHERLANDS ANTILLES',
                'nicename' => 'Netherlands Antilles',
                'iso3' => 'ANT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'iso' => 'NC',
                'name' => 'NEW CALEDONIA',
                'nicename' => 'New Caledonia',
                'iso3' => 'NCL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'iso' => 'NZ',
                'name' => 'NEW ZEALAND',
                'nicename' => 'New Zealand',
                'iso3' => 'NZL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'iso' => 'NI',
                'name' => 'NICARAGUA',
                'nicename' => 'Nicaragua',
                'iso3' => 'NIC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'iso' => 'NE',
                'name' => 'NIGER',
                'nicename' => 'Niger',
                'iso3' => 'NER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'iso' => 'NG',
                'name' => 'NIGERIA',
                'nicename' => 'Nigeria',
                'iso3' => 'NGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'iso' => 'NU',
                'name' => 'NIUE',
                'nicename' => 'Niue',
                'iso3' => 'NIU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'iso' => 'NF',
                'name' => 'NORFOLK ISLAND',
                'nicename' => 'Norfolk Island',
                'iso3' => 'NFK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'iso' => 'MP',
                'name' => 'NORTHERN MARIANA ISLANDS',
                'nicename' => 'Northern Mariana Islands',
                'iso3' => 'MNP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'iso' => 'NO',
                'name' => 'NORWAY',
                'nicename' => 'Norway',
                'iso3' => 'NOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'iso' => 'OM',
                'name' => 'OMAN',
                'nicename' => 'Oman',
                'iso3' => 'OMN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'iso' => 'PK',
                'name' => 'PAKISTAN',
                'nicename' => 'Pakistan',
                'iso3' => 'PAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'iso' => 'PW',
                'name' => 'PALAU',
                'nicename' => 'Palau',
                'iso3' => 'PLW',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'iso' => 'PS',
                'name' => 'PALESTINIAN TERRITORY, OCCUPIED',
                'nicename' => 'Palestinian Territory, Occupied',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'iso' => 'PA',
                'name' => 'PANAMA',
                'nicename' => 'Panama',
                'iso3' => 'PAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'iso' => 'PG',
                'name' => 'PAPUA NEW GUINEA',
                'nicename' => 'Papua New Guinea',
                'iso3' => 'PNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'iso' => 'PY',
                'name' => 'PARAGUAY',
                'nicename' => 'Paraguay',
                'iso3' => 'PRY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'iso' => 'PE',
                'name' => 'PERU',
                'nicename' => 'Peru',
                'iso3' => 'PER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'iso' => 'PH',
                'name' => 'PHILIPPINES',
                'nicename' => 'Philippines',
                'iso3' => 'PHL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'iso' => 'PN',
                'name' => 'PITCAIRN',
                'nicename' => 'Pitcairn',
                'iso3' => 'PCN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'iso' => 'PL',
                'name' => 'POLAND',
                'nicename' => 'Poland',
                'iso3' => 'POL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'iso' => 'PT',
                'name' => 'PORTUGAL',
                'nicename' => 'Portugal',
                'iso3' => 'PRT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'iso' => 'PR',
                'name' => 'PUERTO RICO',
                'nicename' => 'Puerto Rico',
                'iso3' => 'PRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'iso' => 'QA',
                'name' => 'QATAR',
                'nicename' => 'Qatar',
                'iso3' => 'QAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'iso' => 'RE',
                'name' => 'REUNION',
                'nicename' => 'Reunion',
                'iso3' => 'REU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'iso' => 'RO',
                'name' => 'ROMANIA',
                'nicename' => 'Romania',
                'iso3' => 'ROM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'iso' => 'RU',
                'name' => 'RUSSIAN FEDERATION',
                'nicename' => 'Russian Federation',
                'iso3' => 'RUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'iso' => 'RW',
                'name' => 'RWANDA',
                'nicename' => 'Rwanda',
                'iso3' => 'RWA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'iso' => 'SH',
                'name' => 'SAINT HELENA',
                'nicename' => 'Saint Helena',
                'iso3' => 'SHN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'iso' => 'KN',
                'name' => 'SAINT KITTS AND NEVIS',
                'nicename' => 'Saint Kitts and Nevis',
                'iso3' => 'KNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'iso' => 'LC',
                'name' => 'SAINT LUCIA',
                'nicename' => 'Saint Lucia',
                'iso3' => 'LCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'iso' => 'PM',
                'name' => 'SAINT PIERRE AND MIQUELON',
                'nicename' => 'Saint Pierre and Miquelon',
                'iso3' => 'SPM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'iso' => 'VC',
                'name' => 'SAINT VINCENT AND THE GRENADINES',
                'nicename' => 'Saint Vincent and the Grenadines',
                'iso3' => 'VCT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'iso' => 'WS',
                'name' => 'SAMOA',
                'nicename' => 'Samoa',
                'iso3' => 'WSM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'iso' => 'SM',
                'name' => 'SAN MARINO',
                'nicename' => 'San Marino',
                'iso3' => 'SMR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'iso' => 'ST',
                'name' => 'SAO TOME AND PRINCIPE',
                'nicename' => 'Sao Tome and Principe',
                'iso3' => 'STP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'iso' => 'SA',
                'name' => 'SAUDI ARABIA',
                'nicename' => 'Saudi Arabia',
                'iso3' => 'SAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'iso' => 'SN',
                'name' => 'SENEGAL',
                'nicename' => 'Senegal',
                'iso3' => 'SEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'iso' => 'CS',
                'name' => 'SERBIA AND MONTENEGRO',
                'nicename' => 'Serbia and Montenegro',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'iso' => 'SC',
                'name' => 'SEYCHELLES',
                'nicename' => 'Seychelles',
                'iso3' => 'SYC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'iso' => 'SL',
                'name' => 'SIERRA LEONE',
                'nicename' => 'Sierra Leone',
                'iso3' => 'SLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'iso' => 'SG',
                'name' => 'SINGAPORE',
                'nicename' => 'Singapore',
                'iso3' => 'SGP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'iso' => 'SK',
                'name' => 'SLOVAKIA',
                'nicename' => 'Slovakia',
                'iso3' => 'SVK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'iso' => 'SI',
                'name' => 'SLOVENIA',
                'nicename' => 'Slovenia',
                'iso3' => 'SVN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'iso' => 'SB',
                'name' => 'SOLOMON ISLANDS',
                'nicename' => 'Solomon Islands',
                'iso3' => 'SLB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'iso' => 'SO',
                'name' => 'SOMALIA',
                'nicename' => 'Somalia',
                'iso3' => 'SOM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'iso' => 'ZA',
                'name' => 'SOUTH AFRICA',
                'nicename' => 'South Africa',
                'iso3' => 'ZAF',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'iso' => 'GS',
                'name' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
                'nicename' => 'South Georgia and the South Sandwich Islands',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'iso' => 'ES',
                'name' => 'SPAIN',
                'nicename' => 'Spain',
                'iso3' => 'ESP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'iso' => 'LK',
                'name' => 'SRI LANKA',
                'nicename' => 'Sri Lanka',
                'iso3' => 'LKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'iso' => 'SD',
                'name' => 'SUDAN',
                'nicename' => 'Sudan',
                'iso3' => 'SDN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'iso' => 'SR',
                'name' => 'SURINAME',
                'nicename' => 'Suriname',
                'iso3' => 'SUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'iso' => 'SJ',
                'name' => 'SVALBARD AND JAN MAYEN',
                'nicename' => 'Svalbard and Jan Mayen',
                'iso3' => 'SJM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'iso' => 'SZ',
                'name' => 'SWAZILAND',
                'nicename' => 'Swaziland',
                'iso3' => 'SWZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'iso' => 'SE',
                'name' => 'SWEDEN',
                'nicename' => 'Sweden',
                'iso3' => 'SWE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'iso' => 'CH',
                'name' => 'SWITZERLAND',
                'nicename' => 'Switzerland',
                'iso3' => 'CHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'iso' => 'SY',
                'name' => 'SYRIAN ARAB REPUBLIC',
                'nicename' => 'Syrian Arab Republic',
                'iso3' => 'SYR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'iso' => 'TW',
                'name' => 'TAIWAN, PROVINCE OF CHINA',
                'nicename' => 'Taiwan, Province of China',
                'iso3' => 'TWN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'iso' => 'TJ',
                'name' => 'TAJIKISTAN',
                'nicename' => 'Tajikistan',
                'iso3' => 'TJK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'iso' => 'TZ',
                'name' => 'TANZANIA, UNITED REPUBLIC OF',
                'nicename' => 'Tanzania, United Republic of',
                'iso3' => 'TZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'iso' => 'TH',
                'name' => 'THAILAND',
                'nicename' => 'Thailand',
                'iso3' => 'THA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'iso' => 'TL',
                'name' => 'TIMOR-LESTE',
                'nicename' => 'Timor-Leste',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'iso' => 'TG',
                'name' => 'TOGO',
                'nicename' => 'Togo',
                'iso3' => 'TGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'iso' => 'TK',
                'name' => 'TOKELAU',
                'nicename' => 'Tokelau',
                'iso3' => 'TKL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'iso' => 'TO',
                'name' => 'TONGA',
                'nicename' => 'Tonga',
                'iso3' => 'TON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'iso' => 'TT',
                'name' => 'TRINIDAD AND TOBAGO',
                'nicename' => 'Trinidad and Tobago',
                'iso3' => 'TTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'iso' => 'TN',
                'name' => 'TUNISIA',
                'nicename' => 'Tunisia',
                'iso3' => 'TUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'iso' => 'TR',
                'name' => 'TURKEY',
                'nicename' => 'Turkey',
                'iso3' => 'TUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'iso' => 'TM',
                'name' => 'TURKMENISTAN',
                'nicename' => 'Turkmenistan',
                'iso3' => 'TKM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'iso' => 'TC',
                'name' => 'TURKS AND CAICOS ISLANDS',
                'nicename' => 'Turks and Caicos Islands',
                'iso3' => 'TCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'iso' => 'TV',
                'name' => 'TUVALU',
                'nicename' => 'Tuvalu',
                'iso3' => 'TUV',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'iso' => 'UG',
                'name' => 'UGANDA',
                'nicename' => 'Uganda',
                'iso3' => 'UGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'iso' => 'UA',
                'name' => 'UKRAINE',
                'nicename' => 'Ukraine',
                'iso3' => 'UKR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'iso' => 'AE',
                'name' => 'UNITED ARAB EMIRATES',
                'nicename' => 'United Arab Emirates',
                'iso3' => 'ARE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'iso' => 'GB',
                'name' => 'UNITED KINGDOM',
                'nicename' => 'United Kingdom',
                'iso3' => 'GBR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'iso' => 'US',
                'name' => 'UNITED STATES',
                'nicename' => 'United States',
                'iso3' => 'USA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'iso' => 'UM',
                'name' => 'UNITED STATES MINOR OUTLYING ISLANDS',
                'nicename' => 'United States Minor Outlying Islands',
                'iso3' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'iso' => 'UY',
                'name' => 'URUGUAY',
                'nicename' => 'Uruguay',
                'iso3' => 'URY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'iso' => 'UZ',
                'name' => 'UZBEKISTAN',
                'nicename' => 'Uzbekistan',
                'iso3' => 'UZB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'iso' => 'VU',
                'name' => 'VANUATU',
                'nicename' => 'Vanuatu',
                'iso3' => 'VUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'iso' => 'VE',
                'name' => 'VENEZUELA',
                'nicename' => 'Venezuela',
                'iso3' => 'VEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'iso' => 'VN',
                'name' => 'VIET NAM',
                'nicename' => 'Viet Nam',
                'iso3' => 'VNM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'iso' => 'VG',
                'name' => 'VIRGIN ISLANDS, BRITISH',
                'nicename' => 'Virgin Islands, British',
                'iso3' => 'VGB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'iso' => 'VI',
                'name' => 'VIRGIN ISLANDS, U.S.',
                'nicename' => 'Virgin Islands, U.s.',
                'iso3' => 'VIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'iso' => 'WF',
                'name' => 'WALLIS AND FUTUNA',
                'nicename' => 'Wallis and Futuna',
                'iso3' => 'WLF',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'iso' => 'EH',
                'name' => 'WESTERN SAHARA',
                'nicename' => 'Western Sahara',
                'iso3' => 'ESH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'iso' => 'YE',
                'name' => 'YEMEN',
                'nicename' => 'Yemen',
                'iso3' => 'YEM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'iso' => 'ZM',
                'name' => 'ZAMBIA',
                'nicename' => 'Zambia',
                'iso3' => 'ZMB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'iso' => 'ZW',
                'name' => 'ZIMBABWE',
                'nicename' => 'Zimbabwe',
                'iso3' => 'ZWE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}