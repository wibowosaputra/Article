<?php

    require_once 'koneksi.php';

    function getPublish() {
		global $conn;
		$sql 	= "SELECT * FROM posts WHERE Status='Publish'";
		$result	= mysqli_query($conn, $sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
		mysqli_close($conn);
	}

    function getDraft() {
		global $conn;
		$sql 	= "SELECT * FROM posts WHERE Status='Draft'";
		$result	= mysqli_query($conn, $sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
		mysqli_close($conn);
	}

    function getThrash() {
		global $conn;
		$sql 	= "SELECT * FROM posts WHERE Status='Thrash'";
		$result	= mysqli_query($conn, $sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
		mysqli_close($conn);
	}

    function showData($id) {
		global $conn;
		$fixid 	= mysqli_real_escape_string($conn, $id);
		$sql 	= "SELECT * FROM posts
					WHERE id='$fixid'";
		$result	= mysqli_query($conn, $sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_close($conn);
	}

    function addData($Title, $Content, $Category, $Status) {
		global $conn;
		$sql 	= "INSERT INTO posts (Title, Content, Category, Status) VALUES ('$Title','$Content','$Category','$Status')";
		$result	= mysqli_query($conn, $sql);
		return ($result) ? true : false;
		mysqli_close($conn);
	}

    function editData($id, $Title, $Content, $Category, $Status) {
		global $conn;
		$fixid 	= mysqli_real_escape_string($conn, $id);
		$sql 	= "UPDATE posts SET Title='$Title', Content='$Content', Category='$Category', Status='$Status' WHERE id='$fixid'";
		$result	= mysqli_query($conn, $sql);
		return ($result) ? true : false;
		mysqli_close($conn);
	}

    if (isset($_POST['add'])) {
		$Title	    = mysqli_real_escape_string($conn, $_POST['Title']);
        $Content	= mysqli_real_escape_string($conn, $_POST['Content']);
		$Category	= mysqli_real_escape_string($conn, $_POST['Category']);
		$Status	    = mysqli_real_escape_string($conn, $_POST['Status']);
		$add 	    = addData($Title, $Content, $Category, $Status);
		header("location:../index.php");

	}elseif (isset($_POST['edit'])) {
		$id         = mysqli_real_escape_string($conn, $_POST['id']);
		$Title	    = mysqli_real_escape_string($conn, $_POST['Title']);
        $Content	= mysqli_real_escape_string($conn, $_POST['Content']);
		$Category	= mysqli_real_escape_string($conn, $_POST['Category']);
		$Status	    = mysqli_real_escape_string($conn, $_POST['Status']);
		$edit 		= editData($id, $Title, $Content, $Category, $Status);		
		header("location:../index.php");	
	}
?>