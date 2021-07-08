<?php
function directorySize($directory) {
$directorySize=0;
// Open the directory and read its contents.
$iterator = new DirectoryIterator($directory);
foreach ($iterator as $fileinfo) {
		if ($fileinfo->isFile()) {
		$directorySize += $fileinfo->getSize();
		}

		if ($fileinfo->isDir() && !$fileinfo->isDot()) {
		$directorySize += directorySize($directory.'/'.$fileinfo->
		getFilename());
		}
	}
return $directorySize;
}
$directory = 'C:\xampp\htdocs\idbPhp';
$totalSize = round((directorySize($directory) / 1048576), 2);
printf("Directory %s: %f MB", $directory, $totalSize);
?>