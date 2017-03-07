<?php

function matchImageFile($fileMatchPath, $defaultFilePath = null) {

	if (null == $defaultFilePath) {
		if (file_exists('img-custom/' .$fileMatchPath)) {
			return 'img-custom/' . $fileMatchPath;
		}
		return 'img/' . $fileMatchPath;
	} else {
		if (file_exists('img-custom/' .$fileMatchPath)) {
			return 'img-custom/' . $fileMatchPath;
		}
		return 'img/' . $defaultFilePath;
	}
}
