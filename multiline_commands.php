<?php
  $author = "Jacob Duncan";
  echo "This is a Headline
  
  This is the first line
  This is the second
  Written by $author.";

  // I've seen this syntax in vimrc where you can 
  // write a language inside another with the END OR EOF
  echo <<< END
  This is the first line.
  This is the second.
  - Written by $author.
  END;

  // Assigning to a variable
  $out = <<< _END
  This is the first line.
  This is the second.
  - Written by $author.
  _END;

  echo $out;
?>