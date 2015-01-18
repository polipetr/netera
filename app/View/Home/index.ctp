

<div class="panel panel-default">
    <div class="panel-body">
 <?php foreach($data as $item){
   echo "<h1  class='header'>".$item['News']['title'].'</h1>';

echo "<p  class='description'>".$item['News']['description'].'</h1>';
$image=$item['Image'][0]['title'];
$ext=$item['Image'][0]['ext'];
$dot=".";
$path=$image.$dot.$ext;
 echo "<div class='small'>".$this->Html->image($path, array('class' => 'small'))."</div>";
}
?>
  </div>
</div>