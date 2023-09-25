<?php
/*
 # Made by ItzZyann (2023)
 # Be sure to credit me while using my code.
 # Thanks. For more info contact me via email!
 # "itzzyanngames@gmail.com"
*/

$videoFile = "input_video.mp4";
$musicFile = "output_music.mp3";

$command = "ffmpeg -i $videoFile -q:a 0 -map a $musicFile";
exec($command, $output, $returnCode);

if($returnCode === 0) {
 // Succesfull message.
 echo "Successfully Converted!";
} else {
 // Error message.
 // I coded it so that it shows error log.
 echo "Error during conversion: " . implode("\n", $output);
}

?>