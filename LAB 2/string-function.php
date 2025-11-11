<?php
$firstString = "The quick brown fox";
$secondString = " jumped over the lazy dog.";
$thirdString = $firstString;
$thirdString. $secondString; 
echo $thirdString; ?><br/>
Lowercase: <?php echo strtolower($thirdString); ?><br />
Uppercase: <?php echo strtoupper($thirdString); ?><br/>
Uppercase first-letter: <?php echo ucfirst($thirdString); ?><br />
Uppercase words: <?php echo ucwords($thirdString); ?><br />
Length: <?php echo strlen($thirdString); ?><br />
Number of Word: <?php echo str_word_count($thirdString); ?><br/>
Trim: <?php echo $firstString . trim($secondString); ?><br />
Replace by string: <?php echo str_replace("quick", "super-fast", $thirdString); ?><br/>