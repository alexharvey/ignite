<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Sales controller
 * @created on : 
 * @author :
 * Copyright {year}
 *
 */
class Sales extends Front_Controller
{
    protected $permissionCreate = 'Sales.Sales.Create';
    protected $permissionDelete = 'Sales.Sales.Delete';
    protected $permissionEdit   = 'Sales.Sales.Edit';
    protected $permissionView   = 'Sales.Sales.View';

    /**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		 $this->load->model('sales/sales_model');
        $this->lang->load('sales');
        Template::set('page_title', lang('sales_area_title'));
		
	}

	/**
	 * Display a list of sales data.
	 *
	 * @return void
	 */
	public function index()
	{
		$data = array();
        
		
        
        
        		$data['records'] = $this->sales_model->find_all();
       foreach( $data as $key => $value )
            Template::set($key, $value);
        
		Template::render();
	}
    
}