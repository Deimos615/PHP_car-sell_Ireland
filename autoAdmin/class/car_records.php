<?php
class Records {	
   
	private $recordsTable = 'stock';
	public $id;
    public $name;
    public $esti_price;
    public $buy_price;
	public $timer;
	public $premium;
	public $offers;
	public $watching;
	public $grade;
    public $fuel;
    public $years;
    public $color;
    public $doors;
    public $transmission;
    public $engine;
    public $mileage;
	public $comment;
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listRecords(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." WHERE live_status IS NULL ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'and(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR name LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR esti_price LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR buy_price LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR timer LIKE "%'.$_POST["search"]["value"].'%") ';			
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
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable." WHERE live_status IS NULL ");
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$rows = array();			
			$rows[] = $record['id'];
			$rows[] = ucfirst($record['name']);
			$rows[] = $record['esti_price'];		
			$rows[] = $record['buy_price'];	
			$rows[] = $record['timer'];
			$rows[] = $record['premium'];
			$rows[] = $record['offers'];
			$rows[] = $record['watching'];	
            $rows[] = $record['grade'];	
			$rows[] = '<button type="button" name="update" id="'.$record["id"].'" class="btn btn-primary btn-xs update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>';
			if($record['list_status'] == 'active' ) {
				$rows[] = '<button type="button" name="deactivate" id="'.$record["id"].'" class="btn btn-warning btn-xs deactivate">Deactivate</button>';
			}else{
				$rows[] = '<button type="button" name="activate" id="'.$record["id"].'" class="btn btn-success btn-xs activate">activate</button>';
			}
			if($record['feature'] == 'yes' ) {
				$rows[] = '<button type="button" name="reject" id="'.$record["id"].'" class="btn btn-warning btn-xs reject">Reject</button>';
			}else{
				$rows[] = '<button type="button" name="feature" id="'.$record["id"].'" class="btn btn-success btn-xs feature">Featured</button>';
			}
			$rows[] = '<button type="button" name="delete" id="'.$record["id"].'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
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
	public function updateRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
			UPDATE ".$this->recordsTable." 
			SET name = ?, esti_price = ?, buy_price = ?, timer = ?, premium = ?, offers = ?, watching = ?, grade = ?, years = ?,
                color = ?, doors = ?, fuel = ?, transmission = ?, engine = ?, mileage = ?, comment = ?
			WHERE id = ?");
	 
			$this->id = htmlspecialchars(strip_tags($this->id));
			$this->name = htmlspecialchars(strip_tags($this->name));
			$this->esti_price = htmlspecialchars(strip_tags($this->esti_price));
			$this->buy_price = htmlspecialchars(strip_tags($this->buy_price));
			$this->timer = htmlspecialchars(strip_tags($this->timer));
			$this->premium = htmlspecialchars(strip_tags($this->premium));
            $this->offers = htmlspecialchars(strip_tags($this->offers));
			$this->watching = htmlspecialchars(strip_tags($this->watching));
			$this->grade = htmlspecialchars(strip_tags($this->grade));
			$this->years = htmlspecialchars(strip_tags($this->years));
			$this->color = htmlspecialchars(strip_tags($this->color));
			$this->doors = htmlspecialchars(strip_tags($this->doors));
            $this->fuel = htmlspecialchars(strip_tags($this->fuel));
			$this->transmission = htmlspecialchars(strip_tags($this->transmission));
			$this->engine = htmlspecialchars(strip_tags($this->engine));
            $this->mileage = htmlspecialchars(strip_tags($this->mileage));
			$this->comment = htmlspecialchars(strip_tags($this->comment));
			
			$stmt->bind_param("siisiiisisisssisi", $this->name, $this->esti_price, $this->buy_price, $this->timer, $this->premium, $this->offers, $this->watching, 
                                        $this->grade, $this->years, $this->color, $this->doors, $this->fuel, $this->transmission, $this->engine, $this->mileage,
										$this->comment, $this->id);
			
			if($stmt->execute()){
				return true;
			}
			
		}	
	}
	public function deactivateRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
				UPDATE ".$this->recordsTable." 
				SET list_status = 'inactive'
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
				SET list_status = 'active'
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
			
		}	
	}
	public function rejectRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
				UPDATE ".$this->recordsTable." 
				SET feature = 'no'
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
			
		}	
	}
	public function featureRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
				UPDATE ".$this->recordsTable." 
				SET feature = 'yes'
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
				UPDATE ".$this->recordsTable." 
				SET live_status = 'die'
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