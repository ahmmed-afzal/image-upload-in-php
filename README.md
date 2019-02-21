To upload image in php you have to follow some rule....

1. One of the building function to upload file is , 
move_uploaded_file($filename, $destination);
first parameter is the temporary name and second one is the destination where we want to upload.

2. we have to caught  the file input file by
isset($_FILES['image'] and put into $file = $_FILES['image'] ['image' is the name where given into form];

3.we have to caught the upload file name by 
$name = $file["name"];

4. we have to decide where want to upload our file
$destination = 'uploads/'.$name; [uploads is the folder name];

5. we need make temporary name given input file
$filename = $file["tmp_name"];

6. we are talking about to upload image thats why we have to make sure that our file extension should be image type. 
if it is image extension ,that time we give permission to upload.
let our image extension will be like this,
$image_extensions = ['jpg','png','jpeg','gif'];

7. we have find out our given image extension by explode(); which work to seperate. it have to paramater. one parameter 
says from what character(.) to be seperate. our image extension is like example.png
so before dot we can make a string and after dot.
$exploded_name = explode('.', $name);

8. we have take extension by the end(); method.
9.after that we have to check our given extension and input image extension match or not by,
in_array($extension, $image_extensions)
   