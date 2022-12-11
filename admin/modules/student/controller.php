<?php 
require_once ("../../../includes/initialize.php");
require_once ("../../../includes/encryption.php");
//require_once ("../../../encryption.php");

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
//$studentAES = new StudentEncryption();

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
    case 'uploadcoe' :
	doUploadCOE();
	break;    
        
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;
	case 'assign' :
	doAssignsubj();
	break;
	case 'delsubj' :
	doDelsubj();
	break;
	case 'enroll' :
	doEnroll();
	break;
	case 'delsy' :
		doDelsy();
	break;
	}


	function doDelsy(){
		$studentId=$_GET['studentId'];
		
		  @$id=$_POST['selector'];
		  $key = count($id);


		if (!$id==''){
		//multi delete using checkbox as a selector
			
			for($i=0;$i<$key;$i++){

				 //echo $id[$i];
		 
				$sy = new Schoolyr();
				$sy->delete($id[$i]);
			}
					message("Schoolyear is successfully deleted!","info");
					redirect('index.php?view=view&studentId='.$studentId.'');
		}else{
			message("Select your Schoolyear first, if you want to delete it!","error");
			redirect('index.php?view=view&studentId='.$studentId.'');
		}
	}
function doEnroll(){

	if (isset($_POST['savestep1'])){

 				 $created =  strftime("%Y-%m-%d %H:%M:%S", time()); 
				 $idno  =  $_POST['idno'];
				 $Status = $_POST['Status'];
				 $course = $_POST['course'];
				 $ay 	 = $_POST['ay'];
				 $Semester = $_POST['Semester'];

				$sy = new Schoolyr();
				$sy->AY = $ay;
				$sy->STATUS = $Status;
				$sy->SEMESTER = $Semester;
				$sy->COURSE_ID = $course;
        
				$sy->DATE_RESERVED = $created;
				
				 $istrue = $sy->create();
			 if ($istrue == 1){
			 	
			 	message("Students successfully enrolled! Assign now the student's subjects.","success");
			 	// check_message();
			 	redirect('index.php?view=view&studentId='.$idno.'');
				
			 }



			}
}	


function doInsert(){
		
	//primary Details
$IDNO  = $_POST['idno'];
$FNAME = $_POST['fName'];
$LNAME = $_POST['lName'];
$MNAME = $_POST['mName'];
$SEX   = $_POST['gender'];
$BDAY  = $_POST['bday'];
$BPLACE= $_POST['bplace'];
$STATUS= $_POST['status'];
$AGE   = $_POST['age'];
$NATIONALITY = $_POST['nationality'];
$RELIGION = $_POST['religion'];
$CONTACT_NO = $_POST['contact'];
$HOME_ADD = $_POST['home'];
$EMAIL   = $_POST['email'];

//$studentAES = new StudentEncryption();
    $aes = new AdvanceEncryptionStandard('WR7rLKlVvJdEAIzHUMpt4dcEKsXPinIU2KiWzm++bhg=','AES-256-CBC','NJ0oI9P1fytagUfPny3qTA==');
    
$student = new Student();
$student->S_ID				=    "null";
$student->IDNO 				=	$aes->encryptData($IDNO);
$student->LNAME				=	$aes->encryptData($LNAME);
$student->FNAME				=	$aes->encryptData($FNAME);
$student->MNAME				=	$aes->encryptData($MNAME);
$student->SEX				=	$aes->encryptData($SEX);
$student->BDAY				=	$aes->encryptData($BDAY);
$student->BPLACE			=	$aes->encryptData($BPLACE);
$student->STATUS			=	$aes->encryptData($STATUS);
$student->AGE				=	$aes->encryptData($AGE);
$student->NATIONALITY		=	$aes->encryptData($NATIONALITY);
$student->RELIGION			=	$aes->encryptData($RELIGION);
$student->CONTACT_NO		=	$aes->encryptData($CONTACT_NO);
$student->HOME_ADD			=	$aes->encryptData($HOME_ADD);
$student->EMAIL 			=	$aes->encryptData($EMAIL);

//$student->IDNO 				=	$IDNO;
//$student->LNAME				=	$LNAME;
//$student->FNAME				=	$FNAME;
//$student->MNAME				=	$MNAME;
//$student->SEX				=	$SEX;
//$student->BDAY				=	$BDAY;
//$student->BPLACE			=	$BPLACE;
//$student->STATUS			=	$STATUS;
//$student->AGE				=	$AGE;
//$student->NATIONALITY		=	$NATIONALITY;
//$student->RELIGION			=	$RELIGION;
//$student->CONTACT_NO		=	$CONTACT_NO;
//$student->HOME_ADD			=	$HOME_ADD;
//$student->EMAIL 			=	$EMAIL;

//$decrypted_IDNO = $studentAES->decryptData($student->IDNO);
  //                          $decrypted_Name = $studentAES->decryptData($student->Name);
    
    
//$decrypted_SEX = $studentAES->decryptData($student->SEX);
    
//course infor
/*$course	= $_POST['course'];
$semester = $_POST['semester'];
$ay		= $_POST['AY'];
$sy = new Schoolyr();
$sy->AY 		= $ay;
$sy->SEMESTER 	= $semester;
$sy->COURSE_ID	= $course;
$sy->IDNO 		= $IDNO;*/
/*if ($istrue) {
	output_message('course info successfully added!');
	redirect ('newstudent.php');
}

*/  
//secondary Details
//$FATHER 			= $_POST['father'];
//$FATHER_OCCU 		= $_POST['fOccu'];
//$MOTHER 			= $_POST['mother'];
//$MOTHER_OCCU 		= $_POST['mOccu'];
//$BOARDING 			= $_POST['boarding'];
//$WITH_FAMILY 		= $_POST['withfamily'];
$GUARDIAN 			=  $_POST['guardian'];
$GUARDIAN_ADDRESS 	=  $_POST['guardianAdd'];
$OTHER_PERSON_SUPPORT = $_POST['otherperson'];
$ADDRESS 			=  $_POST['otherAddress'];

$studdetails = new Student_details();
//$studdetails->FATHER				=	$FATHER;
//$studdetails->FATHER_OCCU			=	$FATHER_OCCU;
//$studdetails->MOTHER				=	$MOTHER;
//$studdetails->MOTHER_OCCU			=	$MOTHER_OCCU;
//$studdetails->BOARDING			    =	$BOARDING;
//$studdetails->WITH_FAMILY			=	$WITH_FAMILY;
$studdetails->GUARDIAN			    =	$GUARDIAN;
$studdetails->GUARDIAN_ADDRESS		=	$GUARDIAN_ADDRESS;
$studdetails->OTHER_PERSON_SUPPORT	=	$OTHER_PERSON_SUPPORT;
$studdetails->ADDRESS				=	$ADDRESS;
$studdetails->IDNO 				    =	$IDNO;

//  
/*if ($istrue) {
	output_message('Seccondary details successfully added!');
	redirect ('newstudent.php');
}
*/

//requirements
//$nso  				  = isset($_POST['nso']) ? "Yes" : "No";
//$bapt 				  = isset($_POST['baptismal']) ? "Yes" : "No";
//$entrance 			  = isset($_POST['entrance']) ? "Yes" : "No";
//$mir_contract  		  = isset($_POST['mir_contract']) ? "Yes" : "No";
//$certifcateOfTransfer = isset($_POST['certifcateOfTransfer']) ? "Yes" : "No";

//$requirements = new Requirements();

//$requirements->NSO				 		= $nso;
//$requirements->BAPTISMAL		   		= $bapt;
//$requirements->ENTRANCE_TEST_RESULT		= $entrance;
//$requirements->MARRIAGE_CONTRACT        = $mir_contract;
//$requirements->CERTIFICATE_OF_TRANSFER	= $certifcateOfTransfer;
//$requirements->IDNO 			   		= $IDNO;
//$istrue = $requirements->create(); 
/*if ($istrue) {
	output_message('Student requirements successfully added!');
	redirect ('newstudent.php');
} 
*/

    
		 		//$upload = New Upload();
                //$COE_ID		= $_POST['COE_ID'];
				//$upload->COE_ID				=	'null';
				//$upload->IDNO				=	$IDNO;
				//$upload->COE           	  	=	'NONE';
				//$upload->COE2				=	'NONE';
				//$upload->COE3				=	'NONE';
				//$upload->COE4				=	'NONE';
				//$upload->COE5   			=	'NONE';
				//$upload->COE6				=	'NONE';
				//$upload->COE7				=	'NONE';
				//$upload->COE8   			=	'NONE';
				//$upload->COE8   			=	'NONE';
				//$upload->COE9   			=	'NONE';
				//$upload->COE10   			=	'NONE';
				
			
    
        
    
    
    
    
    
    
    

if ($IDNO == "") {
	message('ID Number is required!', "error");
	redirect ('index.php?view=add');
}elseif ($LNAME == "") {
	message('Last Name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($FNAME == "") {
	message('First Name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($MNAME == "") {
	message('Middle Name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($SEX == "") {
	message('Gender is required!', "error");
	redirect ('index.php?view=add');
}elseif ($BDAY   == "") {
	message('Birthdate is required!', "error");
	redirect ('index.php?view=add');
}elseif ($BPLACE == "") {
	message('Birth Place is required!', "error");
	redirect ('index.php?view=add');
}elseif ($STATUS == "") {
	message('Status is required!', "error");
	redirect ('index.php?view=add');
}elseif ($AGE == "") {
	message('Age is required!', "error");
	redirect ('index.php?view=add');
}elseif ($NATIONALITY == "") {
	message('Nationality is required!', "error");
	redirect ('index.php?view=add');
}elseif ($RELIGION == "") {
	message('Religion is required!', "error");
	redirect ('index.php?view=add');
}elseif ($CONTACT_NO == "") {
	message('Contact No. is required!', "error");
	redirect ('index.php?view=add');
}elseif ($HOME_ADD == "") {
	message('Home Address is required!', "error");
	redirect ('index.php?view=add');
}elseif ($EMAIL == "") {
	message('Email address is required!', "error");
	redirect ('index.php?view=add');
    
}elseif ($GUARDIAN == "") {
	message('Guardian is required!', "error");
	redirect ('index.php?view=add');
}elseif ($GUARDIAN_ADDRESS == "") {
	message('Guardian Address is required!', "error");
	redirect ('index.php?view=add');
}elseif ($OTHER_PERSON_SUPPORT == "") {
	message('Other Person Supporting is required!', "error");
	redirect ('index.php?view=add');
}elseif ($ADDRESS == "") {
	message('Address is required!', "error");
	redirect ('index.php?view=add');
    	
}else{

	$student->create(); 
	#$sy->create();  
	$studdetails->create();
    //$upload->create();
	//$requirements->create(); 
	message('New student addedd successfully!', "success");
	redirect('index.php?view=list');	


}

}
function doEdit(){
	if (isset($_POST['submit'])){	

$IDNO  = $_POST['idno'];
$LNAME = $_POST['lName'];
$FNAME = $_POST['fName'];
$MNAME = $_POST['mName'];
$SEX   = $_POST['gender'];
$BDAY  = $_POST['bday'];
$BPLACE= $_POST['bplace'];
$STATUS= $_POST['status'];
$AGE   = $_POST['age'];
$NATIONALITY = $_POST['nationality'];
$RELIGION = $_POST['religion'];
$CONTACT_NO = $_POST['contact'];
$HOME_ADD = $_POST['home'];
$EMAIL   = $_POST['email'];


$student = new Student();
//$student->S_ID				= "null";
$student->IDNO 				=	$IDNO;
$student->LNAME				=	$LNAME;
$student->FNAME				=	$FNAME;
$student->MNAME				=	$MNAME;
$student->SEX				=	$SEX;
$student->BDAY				=	$BDAY;
$student->BPLACE			=	$BPLACE;
$student->STATUS			=	$STATUS;
$student->AGE				=	$AGE;
$student->NATIONALITY		=	$NATIONALITY;
$student->RELIGION			=	$RELIGION;
$student->CONTACT_NO		=	$CONTACT_NO;
$student->HOME_ADD			=	$HOME_ADD;
$student->EMAIL 			=	$EMAIL;

//course infor
/*$course	= $_POST['course'];
$semester = $_POST['semester'];
$ay		= $_POST['AY'];
$sy = new Schoolyr();
$sy->AY 		= $ay;
$sy->SEMESTER 	= $semester;
$sy->COURSE_ID	= $course;
$sy->IDNO 		= $IDNO;*/
/*if ($istrue) {
	output_message('course info successfully added!');
	redirect ('newstudent.php');
}

*/  
//secondary Details

$GUARDIAN 			=  $_POST['guardian'];
$GUARDIAN_ADDRESS 	=  $_POST['guardianAdd'];
$OTHER_PERSON_SUPPORT = $_POST['otherperson'];
$ADDRESS 			=  $_POST['otherAddress'];

$studdetails = new Student_details();

$studdetails->GUARDIAN			    =	$GUARDIAN;
$studdetails->GUARDIAN_ADDRESS		=	$GUARDIAN_ADDRESS;
$studdetails->OTHER_PERSON_SUPPORT	=	$OTHER_PERSON_SUPPORT;
$studdetails->ADDRESS				=	$ADDRESS;
$studdetails->IDNO 				    =	$IDNO;
        
        
//  
/*if ($istrue) {
	output_message('Seccondary details successfully added!');
	redirect ('newstudent.php');
}
*/

//requirements
    /*
$nso  				  = isset($_POST['nso']) ? "Yes" : "No";
$bapt 				  = isset($_POST['baptismal']) ? "Yes" : "No";
$entrance 			  = isset($_POST['entrance']) ? "Yes" : "No";
$mir_contract  		  = isset($_POST['mir_contract']) ? "Yes" : "No";
$certifcateOfTransfer = isset($_POST['certifcateOfTransfer']) ? "Yes" : "No";

$requirements = new Requirements();

$requirements->NSO				 		= $nso;
$requirements->BAPTISMAL		   		= $bapt;
$requirements->ENTRANCE_TEST_RESULT		= $entrance;
$requirements->MARRIAGE_CONTRACT        = $mir_contract;
$requirements->CERTIFICATE_OF_TRANSFER	= $certifcateOfTransfer;
$requirements->IDNO 			   		= $IDNO;*/
//$istrue = $requirements->create(); 
/*if ($istrue) {
	output_message('Student requirements successfully added!');
	redirect ('newstudent.php');
} 
*/

if ($IDNO == "") {
	message('ID Number is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($LNAME == "") {
	message('Last Name is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($FNAME == "") {
	message('First Name is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($MNAME == "") {
	message('Middle Name is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($BPLACE == "") {
	message('Birth Place is required!', "error");
	redirect ('index.php?view=add');
}elseif ($EMAIL == "") {
	message('Email address is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
    
	
}else{

	$student->update($_GET['id']); 
	//$sy->update($_GET['id']);  
	$studdetails->update($_GET['id']);
	//$requirements->update($_GET['id']); 
	message('Student infomation updated successfully!', "info");
	redirect('index.php');	


}
}

		
}

function doDelete(){
 @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$student = new Student();
		$student->delete($id[$i]);
		$details = new Student_details();
		$details->delete($id[$i]);
		$sy = new Schoolyr();
		$sy->delete($id[$i]);
		$req = new Requirements();
		$req->delete($id[$i]);

	}
		message("Student has successfully deleted!","info");
		redirect('index.php');
	}
	function doAssignsubj(){
		global $mydb;
		$studentId = $_GET['studentId'];
		$SY = $_GET['SY'];
		$studentId=$_GET['studentId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];


		$subjectId = $_POST['selector'];
		$subjId = count($subjectId);

		if (!$subjectId==''){
		// echo $selector , $selector;
		$mydb->setQuery("SELECT * FROM `schoolyr` WHERE `SYID` ='{$sy}' AND `IDNO`='{$studentId}'");
		$res = $mydb->loadSingleResult();

		//echo $res->SYID . '<br/>';
		for ($i=0;$i<$subjId; $i++){
			$mydb->setQuery("SELECT  * 
							FROM  `subject` s ,`course` c 
							WHERE  s.`COURSE_ID`=c.`COURSE_ID` AND SUBJ_ID='{$subjectId[$i]}'");
			$cur = $mydb->loadResultlist();

			foreach ($cur as  $result) {
		  
		 		$grades = New Grades();
				$grades->SUBJ_ID			=	$result->SUBJ_ID;
				$grades->IDNO				=	$studentId;
				$grades->INST_ID			=	'NONE';
				$grades->SYID				=	$res->SYID;
				$grades->PRE				=	'NONE';
				$grades->MID				=	'NONE';
				$grades->FIN				=	'NONE';
				$grades->FIN_AVE			=	'NONE';
				$grades->DAY				=	'NONE';
				$grades->G_TIME				=	'NONE';
				$grades->REMARKS			=	'NONE';
				$grades->create();
			}
		message("Student's subjects already Added!","info");
			redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		 
		}
		}else{
			message("Select first the subject(s) you want to Add!","error");
			redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		}

	}

function doUploadCOE(){
    //$COE_ID = $_GET['id'];
    if (isset($_POST['submit'])){

        //echo encrypt($_POST['savegrades']);

        
        $COE=$_FILES['COE']['name'];
        $COE_type=$_FILES['COE']['type'];
        $COE_size=$_FILES['COE']['size'];
        $COE_tem_loc=$_FILES['COE']['tmp_name'];
        $COE_store="COE/".$COE;
        
        move_uploaded_file($COE_tem_loc,$COE_store);

		//$upload = new Upload();
        //$COE_ID		= $_POST['COE_ID'];
        
		//$upload->COE_ID 	= $COE_ID;
        $student = new Student();
		$upload->IDNO 	    = $IDNO;
        $upload = new Upload();
		$upload->COE		= $COE;
		//$upload->COE2		= $COE2;
		//$upload->COE3		= $COE3;
		//$upload->COE4		= $COE4;
		//$upload->COE5		= $COE5;
		//$upload->COE6		= $COE6;
		//$upload->COE7		= $COE7;
		//$upload->COE8		= $COE8;
		//$upload->COE9		= $COE9;
		//$upload->COE10		= $COE10;

		$upload->create();		 
 		//message("Grade successfully updated!");
		redirect("index.php");
	
}
}
//function doUploadCOE(){

       // global $mydb;
		//$studentId = $_GET['studentId'];

       // $idno  =  $_POST['idno'];
        // include 'db.php';
           // if (isset($_POST['submit'])) {
          //$COE=$_FILES['COE']['name'];
          //$COE_type=$_FILES['COE']['type'];
          //$COE_size=$_FILES['COE']['size'];
          //$COE_tem_loc=$_FILES['COE']['tmp_name'];
          //$COE_store="COE/".$COE;  
            
          //move_uploaded_file($COE_tem_loc,$COE_store);

          //$sql="UPDATE tblstudcoe COE=$COE WHERE IDNO=$idno";
          //$query=mysqli_query($conn,$sql);
          //          redirect("index.php?view=class&studentId=")
            //}
            
           // if (isset($_POST['submit'])) {
          //$COE2=$_FILES['COE2']['name'];
          //$COE2_type=$_FILES['COE2']['type'];
          //$COE2_size=$_FILES['COE2']['size'];
          //$COE2_tem_loc=$_FILES['COE2']['tmp_name'];
          //$COE2_store="COE2/".$COE2;  
            
          //move_uploaded_file($COE_tem_loc,$COE_store);

         // $sql="INSERT INTO tblstudcoe (IDNO, COE2) values('$idno','$COE2')";
          //$query=mysqli_query($conn,$sql);

         //   }
    //$student->update($_GET['studentId']); 
    //$studdetails->update($_GET['studentId']);
	//$requirements->update($_GET['id']); 
	
    //message('Student infomation updated successfully!', "info");
	//redirect('index.php');


	function doDelsubj(){
		$studentId=$_GET['studentId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];
		
	  @$id=$_POST['selector'];
	  $key = count($id);


		if (!$id==''){
		//multi delete using checkbox as a selector
			
			for($i=0;$i<$key;$i++){

				 //echo $id[$i];
		 
				$studSubjects = NEW Grades();
				$studSubjects->delete($id[$i]);
			}
					message("Student subject(s) already Deleted!","info");
					redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		}else{
			message("Select your subject(s) first, if you want to delete it!","error");
			redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		}
	}
?>