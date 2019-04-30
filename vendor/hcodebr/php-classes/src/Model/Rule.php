<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;


class Rule extends Model
{

	/**GENERAL */
	const ITENS_PER_PAGE = "10";
	const DEFAULT_ENTITY_PHOTO = '0.jpg';
	const THUMBNAIL_SUFIX = 't';
	const ENTITY_SQUARE_PHOTO_QUALITY = '70';

	/**UPLOAD */
	const UPLOAD_CODE_BESTFRIENDS = "22";

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






}//END class Rule




 ?>