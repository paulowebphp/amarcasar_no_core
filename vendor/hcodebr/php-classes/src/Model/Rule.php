<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;


class Rule extends Model
{

	/**GENERAL */
	const ITENS_PER_PAGE = "10";

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
	








}//END class Rule




 ?>