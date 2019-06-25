<?php 

namespace Core;

use \Core\DB\Sql;
use \Core\Model;


class Rule extends Model
{

	/* WIRECARD */
	const WIRECARD_ACCESS_TOKEN = '4632c0e6e7a14598a1533ce207d307f5_v2';
	const WIRECARD_APP = 'APP-MSL2111M3D69';
	const WIRECARD_API_TOKEN = '6PAOYPC0B4AUCM3VFALVQX3ZLOKALJTV';
	const WIRECARD_API_KEY = 'BSF67OFMNPGC8TKKULSCBZ3LNPZWH3205RJN59VT';
	const WIRECARD_PRIMARY_RECEIVER = 'MPA-3064B2D26F42';


	const SELLER_CATEGORY_PLAN = '10';
	const SKU_PREFIX_PLAN = 'PLAN-';
	const SKU_PREFIX_PRODUCT = 'PROD-';



	const DESCOUNTRY = "Brasil";
	const DESCOUNTRYCODE = "BRA";
	const NR_COUNTRY_AREA = 55;

	/**GENERAL */
	const ITENS_PER_PAGE = "10";





	/**PHOTO */
	const CODE_PRODUCTS = "11";
	const CODE_BESTFRIENDS = "22";
	const CODE_GIFTS = "33";
	const CODE_WEDDINGS = "44";
	const CODE_CONSORTS = "55";
	const CODE_PARTIES = "66";
	const CODE_EVENTS = "77";
	const CODE_ALBUNS = "88";
	const CODE_CUSTOMSTYLE = "99";










	const DEFAULT_PHOTO = '0.jpg';
	const DEFAULT_PHOTO_EXTENSION = 'jpg';
	const DEFAULT_PHOTO_SIZE = '3180';



	const PHOTO_QUALITY = '70';
	const PHOTO_QUALITY_PNG = '6.3';


	const MAX_PHOTO_UPLOAD_SIZE = '1000000';

	const UPLOAD_MIME_TYPE = [

		'image/jpeg',
		'image/jpg',
		'image/gif',
		'image/png'

	];

	const PLAN_NAME_FREE = "Plano 10 Dias Free";
	const PLAN_NAME_BASIC = "Plano Básico";
	const PLAN_NAME_INTERMEDIATE = "Plano Clássico";
	const PLAN_NAME_ADVANCED = "Plano Gold";





	
	/**BEST FRIENDS */

	const MAX_BESTFRIENDS_FREE = "2";
	const MAX_BESTFRIENDS_BASIC = "2";
	const MAX_BESTFRIENDS_INTERMEDIATE = "4";
    const MAX_BESTFRIENDS_ADVANCED = "6";
	
	


    /**EVENTS */

    const MAX_EVENTS_FREE = "10";
	const MAX_EVENTS_BASIC = "10";
	const MAX_EVENTS_INTERMEDIATE = "20";
	const MAX_EVENTS_ADVANCED = "30";
	
	



    /**STAKEHOLDERS */

    const MAX_STAKEHOLDERS_FREE = "3";
	const MAX_STAKEHOLDERS_BASIC = "3";
	const MAX_STAKEHOLDERS_INTERMEDIATE = "6";
	const MAX_STAKEHOLDERS_ADVANCED = "10";
	



    /**RSVP */

    const MAX_RSVP_FREE = "1000";
	const MAX_RSVP_BASIC = "1000";
	const MAX_RSVP_INTERMEDIATE = "2000";
	const MAX_RSVP_ADVANCED = "2000";
	



    /**MESSAGES */

    const MAX_MESSAGES_FREE = "1000";
	const MAX_MESSAGES_BASIC = "1000";
	const MAX_MESSAGES_INTERMEDIATE = "2000";
	const MAX_MESSAGES_ADVANCED = "2000";
	





	/**VIDEOS */

    const MAX_VIDEOS_FREE = "10";
	const MAX_VIDEOS_BASIC = "10";
	const MAX_VIDEOS_INTERMEDIATE = "20";
	const MAX_VIDEOS_ADVANCED = "30";





	/**IMAGES */

    const MAX_IMAGES_FREE = "10";
	const MAX_IMAGES_BASIC = "10";
	const MAX_IMAGES_INTERMEDIATE = "20";
	const MAX_IMAGES_ADVANCED = "30";






	/**PRODUCTS */

    const MAX_PRODUCTS_FREE = "1000";
	const MAX_PRODUCTS_BASIC = "1000";
	const MAX_PRODUCTS_INTERMEDIATE = "2000";
	const MAX_PRODUCTS_ADVANCED = "2000";





	# OUTER LISTS

    const MAX_OUTER_LISTS_FREE = "1000";
	const MAX_OUTER_LISTS_BASIC = "1000";
	const MAX_OUTER_LISTS_INTERMEDIATE = "2000";
	const MAX_OUTER_LISTS_ADVANCED = "2000";





}//END class Rule




 ?>