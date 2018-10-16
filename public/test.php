<?php 
$result = '';
if ( !empty($_REQUEST['data']) )  {
	$app = new PARSER_DOCX();
	$result = $app->parse($_REQUEST['data']);
}
echo $result;

class PARSER_DOCX {

	function __construct() {
	}

	/**
	 *	Парсер
	 *
	 *	@access public
	 */
	public function parse($data) {
		$result = '';
		if ( !empty($data) ) {
			$matches = array();
			preg_match('~/<h1>(.?*)</h1>~imsU', $data, $matches, PREG_OFFSET_CAPTURE);
			print_r($matches);
		}

		return $result;
	}

}

?>