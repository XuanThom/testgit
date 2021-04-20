
 <html>  
   <head>
      <title>Writing a file using PHP</title>
   </head>
   
   <body>
   <?php
   $filename = "test.txt";
   $file = fopen( $filename, "w" );
   
   if( $file == false ) {
      echo ( "Error in opening new file" );
      exit();
   }
   fwrite( $file, "ok\n" );
   fclose( $file );
?>

      <?php
         $filename = "test.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "$filetext"."<br>" );
         echo("file name: $filename ");
      ?>
      
   </body>
</html>