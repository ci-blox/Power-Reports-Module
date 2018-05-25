<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Reports controller
 *
 * Rapid Reports main controller.
 *
 */

class Reports extends Base_Controller {

    public function __construct()
    {
		parent::__construct();
        //sets up autoload (looks in classes/local/, classes/, and lib/ in that order)
		require_once APPPATH . 'modules/reports/libraries/twig.php';
		require_once APPPATH . 'modules/reports/libraries/IGOReports/IGOReports.php';
		header("Access-Control-Allow-Origin: *");

    }

    // [GET] /
	public function index()
	{
		// List Reports
		IGOReports::listReports();
        exit; /* use twig and not built-in templating */
	}

    // [GET] /
	public function dashboards()
	{
        // List dashboards
		IGOReports::listDashboards();
        exit; /* use twig and not built-in templating */
	}

	// [GET] /getlist
	public function getlist()
	{
        // List Reports json
        $data = array('id' => $id, 'name' => 'sample '.$id);
        exit; /* use json and not built-in templating */        
	}
	
	// [GET] /reportlistjson	
	public function reportlistjson(){  	
		header("Content-Type: application/json");
		header("Cache-Control: max-age=3600");

		// List Reports json
		echo IGOReports::getReportListJSON();
        exit; /* use json and not built-in templating */        
	}
	
	// [GET] /sample/{id}
	protected function get_item($id)
	{
		$data = array('id' => $id, 'name' => 'sample '.$id);
		$this->to_response($data);
	}
	
	// [GET] /sample/{parent_id}/{subitem}
	protected function get($parent_id, $subitem)
	{
		$data = array(
			array('id' => 1, 'name' => 'Parent '.$parent_id.' - '.$subitem.' 1'),
			array('id' => 2, 'name' => 'Parent '.$parent_id.' - '.$subitem.' 2'),
			array('id' => 3, 'name' => 'Parent '.$parent_id.' - '.$subitem.' 3'),
		);
		$this->to_response($data);
	}

	// [POST] /sample
	protected function create_item()
	{
		$this->load->helper('array');
		$params = elements(array('filter', 'valid', 'fields', 'here'), $this->mParams);
		$this->to_created();
	}

	// [PUT] /sample/{id}
	protected function update_item($id)
	{
		$this->load->helper('array');
		$params = elements(array('filter', 'valid', 'fields', 'here'), $this->mParams);
		$this->to_accepted();
	}

	// [DELETE] /sample/{id}
	protected function remove_item($id)
	{
		$this->to_accepted();
	}
}
