<?php

class BaseController extends Controller {

	public $data = array();
	
	public function __construct(){
		$this->user_model 		= new User();
		$this->role_model 		= new Role();
		$this->location_model 	= new Location();
		$this->dealer_model 	= new Dealer();
		$this->branch_model 	= new Branch();
	}
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

static function downloadCSV($data, $options)
  {
           
    $filename = (isset($options['filename']) && !empty($options['filename'])) ? $options['filename'] : 'export.csv';
    
    if(is_array($options) && isset($options['headers']) && is_array($options['headers'])) {
      $headers 	= $options['headers'];
    }else{
      $headers = array(
          'Content-Type' => 'text/csv',
          'Content-Disposition' => 'attachment; filename="'.$filename.'"'
      );
    }
     
    $output = '';    
    if (isset($options['firstRow']) && is_array($options['firstRow'])) {
      foreach ($options['firstRow'] as $label) {
        $output .= '"'.$label.'"';
        $output .= ',';
      }
      $output .= "\n"; // new line after the first line
    }
    
    if (isset($options['columns']) && is_array($options['columns'])) {
      $columns = $options['columns'];
    } else {
      $objectKeys = get_object_vars($data[0]);
      $columns = array_keys($objectKeys);
    }
     
    foreach ($data as $row) {
      foreach ($columns as $column) {
        //$output .= str_replace(',', ';', $row->$column);
        $output .= '"'.$row->$column.'"';
        $output .= ',';
      }
      $output .= "\n";
    }
     
    return Response::make($output, 200, $headers);
  }
}
