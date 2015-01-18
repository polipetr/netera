<div class="panel panel-default">
<form method='post' role="form" enctype="multipart/form-data">
  <div class="form-group">
    <label for="email">Имейл:</label>
    <input <?php if(isset($error['email'])){echo "id='error'";}?> type="text" name="data[News][email]" class="form-control">
  </div>

  <div class="form-group">
    <label for="name">Име:</label>
    <input <?php if(isset($error['name'])){echo "id='error'";}?> type="text" name="data[News][name]" class="form-control" ">
  </div>
<div class="form-group">
    <label for="title">Заглавие на новина:</label>
    <input <?php if(isset($error['title'])){echo "id='error'";}?> type="text" name="data[News][title]" class="form-control" ">
 </div>
 <div class="form-group">
  <label for="description">Описание:</label>
  <textarea <?php if(isset($error['description'])){echo "id='error'";}?> class="form-control" name="data[News][description]" rows="5" id="description"></textarea>
</div>
 <div class="form-group">
  <label for="description">Новина към картинката:</label>
<?php foreach($image as $value){

echo
 "<div class='radio'>
  <label><input type='radio' name='data[Image][news_id]' value='{$value['Image']['id']}'>{$value['Image']['title']}</label>
</div>";
}
?>

  <button type="submit" class="btn btn-default">Публикуване</button>
</form>
</div>