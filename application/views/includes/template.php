<?php
	if(isset($title)){ 		 
 	}else{
 		$title['title'] = "Some Page";
 	}
 	$this->load->view('includes/header',$title)
 ?>
<?php 

	if(isset($data)){		
		$this->load->view($main_content,$data); 
	}else{
		$this->load->view($main_content);
	}
?>

<?php $this->load->view('includes/footer') ?>