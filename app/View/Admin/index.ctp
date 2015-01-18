<ul class="list-group">
<?php
 foreach ($data as $item){
$id=$item['News']['id'];
echo $item['News']['title'].'<br/>';
echo $item['News']['description'].'<br/>';
echo "Одобряване";
echo "<form method='post'>";
echo "<input type='checkbox'/>.<br/>";
echo "<input type='hidden' name=data[News][id] value='{$id}'/>.<br/>";
echo "<input type='submit' value='Одобряване'/>";
echo "</form>";
}

  
?>
</ul>