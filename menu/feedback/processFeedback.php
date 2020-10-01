<?php
include "feedback.php";
if(isSet($_POST['addFeedbackButton']))
	{
	header('Location: feedbackInfo.php');
	}
if(isSet($_POST['saveNewFeedbackButton']))
	{
	addNewFeedback();
	header( "refresh:1; url=feedback.php" );
	}
if(isSet($_POST['deleteFeedbackButton']))
	{
	deleteFeedback();
	echo "<script>";
	echo " alert('Feedback Record has been deleted.');
		</script>";
	header( "refresh:1; url=../feedback.php" );
	}
if(isSet($_POST['updateFeedbackButton']))
	{
	updateFeedbackInformation();
	header( "refresh:1; url=../feedback.php" );
	}
?>