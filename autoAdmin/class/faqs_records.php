<?php
class Records {	
   
	private $recordsTable = 'faqs';
	public $id;
    public $title;
    public $text;
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listRecords(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR title LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR text LIKE "%'.$_POST["search"]["value"].'%") ';
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
			$rows[] = ucfirst($record['title']);
			$rows[] = $record['text'];		
			$rows[] = '<button type="button" name="edit" id="'.$record["id"].'" class="btn btn-primary btn-xs edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>';
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
		if($this->faq) {

			$stmt = $this->conn->prepare("
			INSERT INTO ".$this->recordsTable."(`title`, `text` )
			VALUES(?,?)");
		
			$this->title = htmlspecialchars(strip_tags($this->faq));
			$this->text = htmlspecialchars(strip_tags($this->description));
						
			$stmt->bind_param("ss", $this->title, $this->text );
			
			if($stmt->execute()){
				return true;
			}		
		}
	}
	public function editRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
			UPDATE ".$this->recordsTable." 
			SET title= ?, text = ?
			WHERE id = ?");
	 
			$this->id = htmlspecialchars(strip_tags($this->id));
			$this->title = htmlspecialchars(strip_tags($this->faq));
			$this->text = htmlspecialchars(strip_tags($this->description));
			
			$stmt->bind_param("ssi", $this->title, $this->text, $this->id);
			
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