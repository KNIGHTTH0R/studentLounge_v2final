<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<title>Document</title>
</head>
<body>
	
	<form enctype="multipart/form-data" action="addPostToDb.php" method="POST">
		<h1>Add Post</h1>
		<input type="text" placeholder="Game Title" name="title"><br/>
		<input type="text" placeholder="Game Description" name="description">
		<div id="uploadFile" onclick="getFile()"><span id="uploadPlaceholder">Upload image</span> <img src="../images/uploadIcon.png" height="30px"></div>
		<input type="file" id="imgUploader" accept="image/jpeg" name="fileToUpload"><br/>
		<button type="submit" class="buttons">Upload!</button>
	</form>

</body>
</html>
