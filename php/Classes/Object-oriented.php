<?php

namespace Johnthedev\objectoriented;

require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;
/** creating author class for Object-Oriented-Phase 1
 *
 *This is an example able that we wish to create in order to improve our familiarity with OOP.
 * @author John Johnson-Rodgers <jjohnsonrodger@cnm.edu>
 * @version 1.0.0
 */
class author{
	use validateUuid;
	/**
	 * id for author; Primary Key
	 * @var Uuid $authorId
	 */
	private $authorId;
}
