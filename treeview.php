<body>
<link rel="stylesheet" type="text/css" href="_styles.css" media="screen">
<?php
mysql_connect('localhost', 'root');
mysql_select_db('test');


 $qry="SELECT * FROM treeview_items";
 $result=mysql_query($qry);


 $arrayCategories = array();

 while($row = mysql_fetch_assoc($result)){ 
 $arrayCategories[$row['id']] = array("parent_id" => $row['parent_id'], "name" =>                       
 $row['name']);   
  }
//createTree($arrayCategories, 0);

 function createTree($array, $currentParent, $currLevel = 0, $prevLevel = -1) {

foreach ($array as $categoryId => $category) {

if ($currentParent == $category['parent_id']) {                       
/*echo "<li>
			<label for='folder2'>Folder 2</label> <input type='checkbox' id='folder2' /> 
			<ol>
				<li class='file'><a href=''>File 1</a></li>
				<li>
					<label for='subfolder2'>Subfolder 1</label> <input type='checkbox' id='subfolder2' /> 
					<ol>
						<li class='file'><a href=''>Subfile 1</a></li>
						<li class='file'><a href=''>Subfile 2</a></li>
						<li class='file'><a href=''>Subfile 3</a></li>
						<li class='file'><a href=''>Subfile 4</a></li>
						<li class='file'><a href=''>Subfile 5</a></li>
						<li class='file'><a href=''>Subfile 6</a></li>
					</ol>
				</li>
			</ol>
		</li>";*/
    if ($currLevel > $prevLevel) echo " <ol class='tree'> "; 

    if ($currLevel == $prevLevel) echo " </li> ";

    echo '<li> <label for="subfolder2">'.$category['name'].'</label> <input type="checkbox" id="subfolder2"/>';

    if ($currLevel > $prevLevel) { $prevLevel = $currLevel; }

    $currLevel++; 

    createTree ($array, $categoryId, $currLevel, $prevLevel);

    $currLevel--;               
    }   

}

if ($currLevel == $prevLevel) echo " </li>  </ol> ";

}   
?>
<div id="content" class="general-style1">
<?php
 if(mysql_num_rows($result)!=0)
 {
?>
<?php 

createTree($arrayCategories, 0); ?>
<?php
}
?>

</div>
</body>
</html>