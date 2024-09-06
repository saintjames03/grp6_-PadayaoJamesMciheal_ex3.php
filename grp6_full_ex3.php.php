<?php

$filename = 'example.txt';


if (file_exists($filename)) {
	echo "The file '$filename' already exists.<br>";
} else {

	$content = "Hello, this is a sample content written to the file.";
	file_put_contents($filename, $content);
	echo "The file '$filename' has been created and content has been written.<br>";
}


$fileContent = file_get_contents($filename);


echo "Content of the file '$filename':<br>";
echo nl2br(htmlspecialchars($fileContent));
$fileArray = file($filename);
echo "<br>File content as an array:<br>";
print_r($fileArray);
?>