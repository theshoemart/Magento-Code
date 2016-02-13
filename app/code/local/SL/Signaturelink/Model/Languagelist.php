<?php
class SL_SignatureLink_Model_Languagelist
{
	public function toOptionArray()
	{
		$ret = Array(
					Array('value' => 'aa',	'label' => 'Afar'),
					Array('value' => 'ab',	'label' => 'Abkhaz'),
					Array('value' => 'ae',	'label' => 'Avestan'),
					Array('value' => 'af',	'label' => 'Afrikaans'),
					Array('value' => 'ak',	'label' => 'Akan'),
					Array('value' => 'am',	'label' => 'Amharic'),
					Array('value' => 'an',	'label' => 'Aragonese'),
					Array('value' => 'ar',	'label' => 'Arabic'),
					Array('value' => 'as',	'label' => 'Assamese'),
					Array('value' => 'av',	'label' => 'Avaric'),
					Array('value' => 'ay',	'label' => 'Aymara'),
					Array('value' => 'az',	'label' => 'Azerbaijani'),
					Array('value' => 'ba',	'label' => 'Bashkir'),
					Array('value' => 'be',	'label' => 'Belarusian'),
					Array('value' => 'bg',	'label' => 'Bulgarian'),
					Array('value' => 'bh',	'label' => 'Bihari'),
					Array('value' => 'bi',	'label' => 'Bislama'),
					Array('value' => 'bm',	'label' => 'Bambara'),
					Array('value' => 'bn',	'label' => 'Bengali, Bangla'),
					Array('value' => 'bo',	'label' => 'Tibetan Standard, Tibetan, Central'),
					Array('value' => 'br',	'label' => 'Breton'),
					Array('value' => 'bs',	'label' => 'Bosnian'),
					Array('value' => 'ca',	'label' => 'Catalan; Valencian'),
					Array('value' => 'ce',	'label' => 'Chechen'),
					Array('value' => 'ch',	'label' => 'Chamorro'),
					Array('value' => 'co',	'label' => 'Corsican'),
					Array('value' => 'cr',	'label' => 'Cree'),
					Array('value' => 'cs',	'label' => 'Czech'),
					Array('value' => 'cu',	'label' => 'Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic'),
					Array('value' => 'cv',	'label' => 'Chuvash'),
					Array('value' => 'cy',	'label' => 'Welsh'),
					Array('value' => 'da',	'label' => 'Danish'),
					Array('value' => 'de',	'label' => 'German'),
					Array('value' => 'dv',	'label' => 'Divehi, Dhivehi, Maldivian'),
					Array('value' => 'dz',	'label' => 'Dzongkha'),
					Array('value' => 'ee',	'label' => 'Ewe'),
					Array('value' => 'el',	'label' => 'Greek, Modern'),
					Array('value' => 'en',	'label' => 'English'),
					Array('value' => 'eo',	'label' => 'Esperanto'),
					Array('value' => 'es',	'label' => 'Spanish; Castilian'),
					Array('value' => 'et',	'label' => 'Estonian'),
					Array('value' => 'eu',	'label' => 'Basque'),
					Array('value' => 'fa',	'label' => 'Persian'),
					Array('value' => 'ff',	'label' => 'Fula, Fulah, Pulaar, Pular'),
					Array('value' => 'fi',	'label' => 'Finnish'),
					Array('value' => 'fj',	'label' => 'Fijian'),
					Array('value' => 'fo',	'label' => 'Faroese'),
					Array('value' => 'fr',	'label' => 'French'),
					Array('value' => 'fy',	'label' => 'Western Frisian'),
					Array('value' => 'ga',	'label' => 'Irish'),
					Array('value' => 'gd',	'label' => 'Scottish Gaelic; Gaelic'),
					Array('value' => 'gl',	'label' => 'Galician'),
					Array('value' => 'gn',	'label' => 'Guarani'),
					Array('value' => 'gu',	'label' => 'Gujarati'),
					Array('value' => 'gv',	'label' => 'Manx'),
					Array('value' => 'ha',	'label' => 'Hausa'),
					Array('value' => 'he',	'label' => 'Hebrew (modern)'),
					Array('value' => 'hi',	'label' => 'Hindi'),
					Array('value' => 'ho',	'label' => 'Hiri Motu'),
					Array('value' => 'hr',	'label' => 'Croatian'),
					Array('value' => 'ht',	'label' => 'Haitian, Haitian Creole'),
					Array('value' => 'hu',	'label' => 'Hungarian'),
					Array('value' => 'hy',	'label' => 'Armenian'),
					Array('value' => 'hz',	'label' => 'Herero'),
					Array('value' => 'ia',	'label' => 'Interlingua'),
					Array('value' => 'id',	'label' => 'Indonesian'),
					Array('value' => 'ie',	'label' => 'Interlingue'),
					Array('value' => 'ig',	'label' => 'Igbo'),
					Array('value' => 'ii',	'label' => 'Nuosu'),
					Array('value' => 'ik',	'label' => 'Inupiaq'),
					Array('value' => 'io',	'label' => 'Ido'),
					Array('value' => 'is',	'label' => 'Icelandic'),
					Array('value' => 'it',	'label' => 'Italian'),
					Array('value' => 'iu',	'label' => 'Inuktitut'),
					Array('value' => 'ja',	'label' => 'Japanese'),
					Array('value' => 'jv',	'label' => 'Javanese'),
					Array('value' => 'ka',	'label' => 'Georgian'),
					Array('value' => 'kg',	'label' => 'Kongo'),
					Array('value' => 'ki',	'label' => 'Kikuyu, Gikuyu'),
					Array('value' => 'kj',	'label' => 'Kwanyama, Kuanyama'),
					Array('value' => 'kk',	'label' => 'Kazakh'),
					Array('value' => 'kl',	'label' => 'Kalaallisut, Greenlandic'),
					Array('value' => 'km',	'label' => 'Khmer'),
					Array('value' => 'kn',	'label' => 'Kannada'),
					Array('value' => 'ko',	'label' => 'Korean'),
					Array('value' => 'kr',	'label' => 'Kanuri'),
					Array('value' => 'ks',	'label' => 'Kashmiri'),
					Array('value' => 'ku',	'label' => 'Kurdish'),
					Array('value' => 'kv',	'label' => 'Komi'),
					Array('value' => 'kw',	'label' => 'Cornish'),
					Array('value' => 'ky',	'label' => 'Kyrgyz'),
					Array('value' => 'la',	'label' => 'Latin'),
					Array('value' => 'lb',	'label' => 'Luxembourgish, Letzeburgesch'),
					Array('value' => 'lg',	'label' => 'Ganda'),
					Array('value' => 'li',	'label' => 'Limburgish, Limburgan, Limburger'),
					Array('value' => 'ln',	'label' => 'Lingala'),
					Array('value' => 'lo',	'label' => 'Lao'),
					Array('value' => 'lt',	'label' => 'Lithuanian'),
					Array('value' => 'lu',	'label' => 'Luba-Katanga'),
					Array('value' => 'lv',	'label' => 'Latvian'),
					Array('value' => 'mg',	'label' => 'Malagasy'),
					Array('value' => 'mh',	'label' => 'Marshallese'),
					Array('value' => 'mi',	'label' => 'Maori'),
					Array('value' => 'mk',	'label' => 'Macedonian'),
					Array('value' => 'ml',	'label' => 'Malayalam'),
					Array('value' => 'mn',	'label' => 'Mongolian'),
					Array('value' => 'mr',	'label' => 'Marathi'),
					Array('value' => 'ms',	'label' => 'Malay'),
					Array('value' => 'mt',	'label' => 'Maltese'),
					Array('value' => 'my',	'label' => 'Burmese'),
					Array('value' => 'na',	'label' => 'Nauru'),
					Array('value' => 'nb',	'label' => 'Norwegian Bokmal'),
					Array('value' => 'nd',	'label' => 'North Ndebele'),
					Array('value' => 'ne',	'label' => 'Nepali'),
					Array('value' => 'ng',	'label' => 'Ndonga'),
					Array('value' => 'nl',	'label' => 'Dutch'),
					Array('value' => 'nn',	'label' => 'Norwegian Nynorsk'),
					Array('value' => 'no',	'label' => 'Norwegian'),
					Array('value' => 'nr',	'label' => 'South Ndebele'),
					Array('value' => 'nv',	'label' => 'Navajo, Navaho'),
					Array('value' => 'ny',	'label' => 'Chichewa, Chewa, Nyanja'),
					Array('value' => 'oc',	'label' => 'Occitan'),
					Array('value' => 'oj',	'label' => 'Ojibwe, Ojibwa'),
					Array('value' => 'om',	'label' => 'Oromo'),
					Array('value' => 'or',	'label' => 'Oriya'),
					Array('value' => 'os',	'label' => 'Ossetian, Ossetic'),
					Array('value' => 'pa',	'label' => 'Panjabi, Punjabi'),
					Array('value' => 'pi',	'label' => 'Pali'),
					Array('value' => 'pl',	'label' => 'Polish'),
					Array('value' => 'ps',	'label' => 'Pashto, Pushto'),
					Array('value' => 'pt',	'label' => 'Portuguese'),
					Array('value' => 'qu',	'label' => 'Quechua'),
					Array('value' => 'rm',	'label' => 'Romansh'),
					Array('value' => 'rn',	'label' => 'Kirundi'),
					Array('value' => 'ro',	'label' => 'Romanian, Moldavian (Romanian from Republic of Moldova)'),
					Array('value' => 'ru',	'label' => 'Russian'),
					Array('value' => 'rw',	'label' => 'Kinyarwanda'),
					Array('value' => 'sa',	'label' => 'Sanskrit'),
					Array('value' => 'sc',	'label' => 'Sardinian'),
					Array('value' => 'sd',	'label' => 'Sindhi'),
					Array('value' => 'se',	'label' => 'Northern Sami'),
					Array('value' => 'sg',	'label' => 'Sango'),
					Array('value' => 'si',	'label' => 'Sinhala, Sinhalese'),
					Array('value' => 'sk',	'label' => 'Slovak'),
					Array('value' => 'sl',	'label' => 'Slovene'),
					Array('value' => 'sm',	'label' => 'Samoan'),
					Array('value' => 'sn',	'label' => 'Shona'),
					Array('value' => 'so',	'label' => 'Somali'),
					Array('value' => 'sq',	'label' => 'Albanian'),
					Array('value' => 'sr',	'label' => 'Serbian'),
					Array('value' => 'ss',	'label' => 'Swati'),
					Array('value' => 'st',	'label' => 'Southern Sotho'),
					Array('value' => 'su',	'label' => 'Sundanese'),
					Array('value' => 'sv',	'label' => 'Swedish'),
					Array('value' => 'sw',	'label' => 'Swahili'),
					Array('value' => 'ta',	'label' => 'Tamil'),
					Array('value' => 'te',	'label' => 'Telugu'),
					Array('value' => 'tg',	'label' => 'Tajik'),
					Array('value' => 'th',	'label' => 'Thai'),
					Array('value' => 'ti',	'label' => 'Tigrinya'),
					Array('value' => 'tk',	'label' => 'Turkmen'),
					Array('value' => 'tl',	'label' => 'Tagalog'),
					Array('value' => 'tn',	'label' => 'Tswana'),
					Array('value' => 'to',	'label' => 'Tonga (Tonga Islands)'),
					Array('value' => 'tr',	'label' => 'Turkish'),
					Array('value' => 'ts',	'label' => 'Tsonga'),
					Array('value' => 'tt',	'label' => 'Tatar'),
					Array('value' => 'tw',	'label' => 'Twi'),
					Array('value' => 'ty',	'label' => 'Tahitian'),
					Array('value' => 'ug',	'label' => 'Uighur, Uyghur'),
					Array('value' => 'uk',	'label' => 'Ukrainian'),
					Array('value' => 'ur',	'label' => 'Urdu'),
					Array('value' => 'uz',	'label' => 'Uzbek'),
					Array('value' => 've',	'label' => 'Venda'),
					Array('value' => 'vi',	'label' => 'Vietnamese'),
					Array('value' => 'vo',	'label' => 'Volapuk'),
					Array('value' => 'wa',	'label' => 'Walloon'),
					Array('value' => 'wo',	'label' => 'Wolof'),
					Array('value' => 'xh',	'label' => 'Xhosa'),
					Array('value' => 'yi',	'label' => 'Yiddish'),
					Array('value' => 'yo',	'label' => 'Yoruba'),
					Array('value' => 'za',	'label' => 'Zhuang, Chuang'),
					Array('value' => 'zh',	'label' => 'Chinese'),
					Array('value' => 'zu',	'label' => 'Zulu')
		);
		return $ret;
	}
}