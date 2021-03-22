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
			$model= isset($_GET['search'])?$_GET['search']:'Municipality';
			$type= isset($_GET['type'])?$_GET['type']:'all';
			$fields = array();
			$conditions=array();
			$page = 1-1;
			$limit = 50;
			$offset =  $page*$limit;
			
			if(isset($_GET['fields'])){
				$fields = explode(',',$_GET['fields']);
			}else{
				$fields = array();
				$schema = $this->$model->_schema;
				foreach($schema as $field => $attr){
					if(strpos($field, 'id') === false){
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
				
			
			$data = $this->$model->find($type, array(
				'conditions'=>$conditions,
				'fields' => $fields,
				'offset' => $offset,
				//'limit' => $limit
			));
		
			$this->set(compact('data'));
		}
	}
}


