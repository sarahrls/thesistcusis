<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
		
if (isset($_POST['save'])){

	if ($_POST['questions'] == "" OR $_POST['answers'] == "") {
		message("All field is required!", "error");
		redirect('index.php?view=add');

	}else{
		$chatbot = new Chatbot();
		$chatbotid		= $_POST['chatbotid'];
		$questions     = $_POST['questions'];
		$answers 	= $_POST['answers'];
		$res = $chatbot->find_all_query($questions);
				
		if ($res >=1) {
			message("Question already exist!","error");
			redirect('index.php?view=add');

		}else{
			$chatbot->QUERIES = $questions;
			$chatbot->ANSWERS = $answers;
			 $istrue = $chatbot->create(); 
			 if ($istrue == 1){
			 
			 	//message("New [". $questions ."] Query created successfully!","success");
			 	message("New Query created successfully!","success");
				redirect('index.php');

			 }
		}	 

		
	}
}
}



function doEdit(){
	$chatbotid = $_GET['id'];

	if (isset($_POST['save'])){

		if ($_POST['questions'] == "" OR $_POST['answers'] == "") {
			$message= "All field is required!";
			redirect('index.php?view=edit&id='.$chatbotid);

		}else{
			$chatbot = new Chatbot();
			$chatbotid		= $_POST['chatbotid'];
			$questions     = $_POST['questions'];
			$answers	= $_POST['answers'];
					
			$chatbot->CHATBOT_ID	 = $chatbotid;
			$chatbot->QUERIES = $questions;
			$chatbot->ANSWERS = $answers;
			$chatbot->update($chatbotid);

			$message = $questions. " has updated successfully!";
			redirect('index.php');
		}
}
}

function doDelete(){
		
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$chatbot = new Chatbot();
		$chatbot->delete($id[$i]);
	}

message("Query/Queries already Deleted!","info");
redirect('index.php');

}

?>