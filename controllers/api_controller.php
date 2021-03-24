<?php
class ApiController extends AppController {

	var $name = 'Api';
	var $uses = array('Municipality','Province','Barangay');

	
	/**API**/
	function data(){
		if(isset($_GET['model']) && !in_array($_GET['model'], $this->uses)){
			die('Bad Request: Check Correct Params');
		}
		
		if($this->RequestHandler->ext == 'json'){
			$this->layout = false;
			header("Access-Control-Allow-Origin: *");
			$model = isset($_GET['search'])?ucfirst($_GET['search']):'Profile';
			$type = isset($_GET['type'])?strtolower($_GET['type']):'all';
			$recursive = isset($_GET['recursive'])?$_GET['recursive']:0;
			$fields = array();
			$conditions=array();
			$page = 1-1;
			$limit = 50;
			$offset =  $page*$limit;
			if(isset($_GET['fields'])){
				$fields = explode(',',$_GET['fields']);
			}else{
				$schema = $this->$model->_schema;
				foreach($schema as $field => $attr){
					if(strpos($field, '_id') === false){
						array_push($fields,$field);
					}
				}
			}
			
			if(isset($_GET['filter'])){
				$conditions['OR']= array();
				foreach($fields as $d){
					$conditions['OR'][$model.'.'.$d.' LIKE']='%'.$_GET['filter'].'%';
				}
			}
			//$fields = implode(',',$fields);
			$data = $this->$model->find($type, array(	
				'recursive'=>$recursive,
				'conditions'=>$conditions,
				'fields' => $fields,
				//'offset' => $offset,
				//'limit' => $limit
			));
			
			$this->set(compact('data'));
		}
	}
}


