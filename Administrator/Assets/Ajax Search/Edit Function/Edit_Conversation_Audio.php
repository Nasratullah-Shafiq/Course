<?php
	$filepath = realpath(dirname(__FILE__));
	include_once($filepath.'./../_Partial Components/CRUD.php');

	$crd = new CRUD();

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$Audio_ID = $_POST['Edit_Conversation_Audio_ID'];
			$Book = $_POST['Edit_Conversation_Book'];
			$Unit = $_POST['Edit_Conversation_Unit'];
			
			$updtConversationAudio = $crd->updateConversationAudio($Audio_ID, $Book, $Unit);
		
	}
?>