<?php


session_start();

require_once 'config.php';
require_once 'Model.php';

if($_SESSION['auth']){
    
    $pdo = new PDO("mysql:host=localhost:3306;dbname=".DBNAME.";charset=utf8;", USERNAME, PASSWORD);
    
    $model = new Database($pdo);
    
    $posts = $model->getPosts();

}

?>

<!DOCTYPE html>
<html lang="ua">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link href="style.css" rel="stylesheet">
    
  <title>Панель управління</title>
</head>
<body>

<?php if($_SESSION['auth']): ?>


    
    <button class="btn btn-success fixed-top" data-bs-toggle="modal" data-bs-target="#add">Додати пост...</button>
  
    <div class="container mt-5">
        
        <?php if($posts): ?>
	
		<h2 class="text-center mb-4">Пости в наявності:</h2>
		
		<?php foreach ($posts as $post): ?>
		
		<div class="d-flex flex-wrap justify-content-evenly">
		
			<img src="<?= $post['uri'] ?>" class="img-thumbnail posts-img" alt=""/>
			
			<div>
			
				<p><b>Пост за <?= $post['datetime'] ?></b></p>
				
				<p><?= $post['text'] ?></p>
				
				<p><b>Текст поста на английском:</b></p>
				
				<p><?= $post['text_en'] ?></p>
			
			</div>
			
			<div class="d-flex flex-column justify-content-center">
			
				<button class="btn btn-secondary mb-2" data-id="<?= $post['id'] ?>" data-bs-toggle="modal" data-bs-target="#edit" onclick="edit(this)">EDIT</button>
				<button class="btn btn-danger" onclick="del(this)">DELETE</button>
			
			</div>
		
		</div>
		
		<hr>
		
		<?php endforeach; ?>
		
		<?php else: ?>
		    <h2 class="text-center mb-4">Пости відсутнi</h2>
		<?php endif; ?>
		
	
	</div>
	
	
	<!-- Modal-add -->
<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

			<form id='form_add' onsubmit="return false">

				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Додати пост...</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				
				<div class="text-danger ms-4 mb-2" id="info"></div>
				
				<div class="modal-body">
					
					<div class="text-danger mb-3"></div>          

				  <div class="mb-3">
					<label for="formFileMultiple" class="form-label">Додати зображення...</label>
					<input type="file" class="form-control" name="file" placeholder="" required="true">
				  </div>
				  
				  <div class="mb-3">
					<label for="prices" class="form-label">Текст...</label>
					<textarea class="form-control" name="text" placeholder="" rows="5" required="true">
						
					</textarea>
				  </div>
				  
				  <div class="mb-3">
					<label for="prices" class="form-label">Текст на английском...</label>
					<textarea class="form-control" name="text_en" placeholder="" rows="5" required="true">
						
					</textarea>
				  </div>

				</div>
				
				<div class="modal-footer">        
				  <button type="submit" class="btn btn-primary" onclick="save_add()">Зберегти...</button>
				  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыти</button>
				</div>

			</form>

	    </div>
	</div>
</div>
	
<!-- Modal-edit -->
<div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">

			<form id='form_edit' onsubmit="return false">

				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Редагувати...</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				
				<div class="text-danger ms-4 mb-2" id="info"></div>
				
				<div class="modal-body">
					
					<div class="text-danger mb-3"></div>          

				  <div class="mb-3">
					<label for="formFileMultiple" class="form-label">Змінити зображення...</label>
					<input type="file" class="form-control" name="file" placeholder="">
				  </div>
				  
				  <div class="mb-3">
					<label for="prices" class="form-label">Текст...</label>
					<textarea class="form-control" name="text" placeholder="" rows="5">
						
					</textarea>
				  </div>
				  
				  <div class="mb-3">
					<label for="prices" class="form-label">Текст на английском...</label>
					<textarea class="form-control" name="text_en" placeholder="" rows="5" required="true">
						
					</textarea>
				  </div>
				 
				    <input name="id" placeholder="" hidden="true" value="">
				  

				</div>
				
				<div class="modal-footer">        
				  <button type="submit" class="btn btn-primary" onclick="save_edit(this)">Зберегти...</button>
				  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыти</button>
				</div>

			</form>

	    </div>
	</div>
</div>


<?php else: ?>

    <div class="min-vh-100 d-flex justify-content-center align-items-center">
		<div class="p-4 bg-light rounded shadow" style="min-width:350px">
			<h4>Вход в панель управления:</h4>
			<div class="text-danger mb-2" id="error_info"><?= $_SESSION['error'] ?></div>
			<form method="POST" action="check.php">
				<div class="mb-3">
					<label for="login" class="form-label">Логин</label>
					<input type="text" class="form-control" id="login" name="login">
				</div>
				
				<div class="mb-3">
					<label for="password" class="form-label">Пароль</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				
				<button type="submit" class="btn btn-primary">Войти</button>
			</form>
		</div>
	</div>

<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script>

    const info = document.querySelector('#info');
    let form_edit = document.querySelector('#form_edit');
    
    function save_add(){
        
        let form_add = document.querySelector('#form_add');
        
        const file = form_add[1].files[0];
		const text = form_add[2].value;
		const text_en = form_add[3].value;
		
		let formData = new FormData();
		if(!file){
		    info.innerText = 'Необхiдно додати зображення!';
		    return false;
		}
		if(text.trim() == '' || text_en.trim() == ''){
		    info.innerText = 'Необхiдно додати текст посту!';
		    return false;
		}
		formData.append('file', file, file.name);
		formData.append('text', text.trim());
		formData.append('text_en', text_en.trim());
		formData.append('method', 'add');
		
		const url = 'data.php';
		
		sendRequest(url, formData).then(json=>{

            if (json.response) {
                location.reload();
            }else{
                info.innerText = 'Помилка серверу!';
		        return false;
            }
        });
        
    }
	
	function edit(elem){
	
		let id = elem.getAttribute('data-id');
		let text = elem.parentElement.previousElementSibling.children[1].innerText;
		let text_en = elem.parentElement.previousElementSibling.children[3].innerText;
		form_edit[2].value = text;
		form_edit[3].value = text_en;
		form_edit[4].value = id;
	
	}
	
	function save_edit(elem){
	    
	    let form_edit = document.querySelector('#form_edit');
	
		const file = form_edit[1].files[0];
		const text = form_edit[2].value;
		const text_en = form_edit[3].value;
		
		let formData = new FormData();
		if(file){
		    formData.append('file', file, file.name);
		}
		if(text.trim() == '' || text_en.trim() == ''){
		    info.innerText = 'Необхiдно додати текст посту!';
		    return false;
		}
		formData.append('id', form_edit[4].value);
		formData.append('text', text.trim());
		formData.append('text_en', text_en.trim());
		formData.append('method', 'edit');
		
		const url = 'data.php';

		
		sendRequest(url, formData).then(json=>{

            if (json.response) {
                //console.dir(json);
                location.reload();
            }else{
                info.innerText = 'Помилка серверу!';
		        return false;
            }
        });
	
	}
	
	function del(elem){
	    
	    const id = elem.previousElementSibling.getAttribute('data-id');
	    
	    let formData = new FormData();
	    formData.append('id', id);
		formData.append('method', 'delete');
		
		const url = 'data.php';
		
		sendRequest(url, formData).then(json=>{

            if (json.response) {
                location.reload();
            }else{
                info.innerText = 'Помилка серверу!';
		        return false;
            }
        });
	    
	}
		
		
		
		
	async function sendRequest(url, body) {
        const response = await fetch(url, {
            method: 'POST',
            body: body
        });
        return await response.json();
    }
    
</script>

</body>

</html>