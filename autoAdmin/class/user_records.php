<?php
class Records {	
   
	private $recordsTable = 'user';
	public $id;
    public $name;
    public $dealership;
    public $link;
	public $email;
	public $vat;
	public $garage;
	public $bank;
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listRecords(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." WHERE waiting IS NOT NULL  ";
        // $sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'and(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR name LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR dealership LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR link LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR email LIKE "%'.$_POST["search"]["value"].'%") ';			
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
			$rows[] = ucfirst($record['name']);
			$rows[] = $record['dealership'];		
			$rows[] = $record['link'];	
			$rows[] = $record['email'];
			$rows[] = $record['vat'];
			$rows[] = $record['garage'];
			$rows[] = $record['bank'];	
            $rows[] = $record['approved_at'];	
			if($record['status'] == 'active' ) {
				$rows[] = '<button type="button" name="deactivate" id="'.$record["id"].'" class="btn btn-warning btn-xs deactivate">Deactivate</button>';
			}else{
				$rows[] = '<button type="button" name="activate" id="'.$record["id"].'" class="btn btn-primary btn-xs activate">activate</button>';
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
	public function addRecord(){
		$approved_at = date('Y-m-d H-i-s');
		if($this->name) {
		$stmt = $this->conn->prepare("
			INSERT INTO ".$this->recordsTable."(`name`, `dealership`, `link`, `email`, `vat`, `garage`, `bank`, `password`, `approved_at`, `waiting`, `status` )
			VALUES(?,?,?,?,?,?,?,?, '$approved_at', 'OKay', 'active' )");
		
			$this->name = htmlspecialchars(strip_tags($this->name));
			$this->dealership = htmlspecialchars(strip_tags($this->dealership));
			$this->link = htmlspecialchars(strip_tags($this->link));
			$this->email = htmlspecialchars(strip_tags($this->email));
			$this->vat = htmlspecialchars(strip_tags($this->vat));
			$this->garage = htmlspecialchars(strip_tags($this->garage));
			$this->bank = htmlspecialchars(strip_tags($this->bank));
			$this->password = htmlspecialchars(strip_tags($this->password));
			
			$stmt->bind_param("ssssssss", $this->name, $this->dealership, $this->link, $this->email, $this->vat, $this->garage, $this->bank, $this->password );
			
			if($stmt->execute()){
				return true;
			}		
		}
	}
	public function deactivateRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
				UPDATE ".$this->recordsTable." 
				SET status = 'inactive'
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
				SET status = 'active'
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