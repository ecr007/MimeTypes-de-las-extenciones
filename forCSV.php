$mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
if(in_array($_FILES['file']['type'],$mimes)){
  // do something
} else {
  die("Sorry, mime type not allowed");
}
