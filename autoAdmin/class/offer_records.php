<?php
class Records {	
   
	private $recordsTable = 'offer';
	public $id;
    
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listRecords(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR cname LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR uname LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR uemail LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR offer LIKE "%'.$_POST["search"]["value"].'%") ';			
		}
		
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}
		
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$rows = array();			
			$rows[] = $record['id'];
			$rows[] = ucfirst($record['cname']);
			$rows[] = $record['cid'];
			$rows[] = $record['uname'];		
			$rows[] = $record['uemail'];	
			$rows[] = $record['esti_price'];
			$rows[] = $record['offer'];
			$rows[] = $record['offered_at'];
			if($record['winning'] == 'win' ) {
				$rows[] = '<button type="button" name="deactivate" id="'.$record["id"].'" class="btn btn-primary btn-xs deactivate">to competitor</button>';
			}else{
				$rows[] = '<button type="button" name="activate" id="'.$record["id"].'" class="btn btn-warning btn-xs activate">to Winner</button>';
			}
			$rows[] = '<button type="button" name="delete" id="'.$record["id"].'" class="btn btn-danger btn-xs delete" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
			$records[] = $rows;
		}
		
		$output = array(
			"draw"	=>	intval($_POST["draw"]),			
			"iTotalRecords"	=> 	$displayRecords,
			"iTotalDisplayRecords"	=>  $allRecords,
			"data"	=> 	$records
		);
		
		echo json_encode($output);
	}
	
	public function getRecord(){
		if($this->id) {
			$sqlQuery = "
				SELECT * FROM ".$this->recordsTable." 
				WHERE id = ?";			
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("i", $this->id);	
			$stmt->execute();
			$result = $stmt->get_result();
			$record = $result->fetch_assoc();
			echo json_encode($record);
		}
	}
	public function deactivateRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
				UPDATE ".$this->recordsTable." 
				SET winning = 'lose'
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
			
		}	
	}
	public function activateRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
				UPDATE ".$this->recordsTable." 
				SET winning = 'win'
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
			
		}	
	}
	public function deleteRecord(){
		if($this->id) {			

			$stmt = $this->conn->prepare("
				DELETE FROM ".$this->recordsTable." 
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
		}
	}
}
?>