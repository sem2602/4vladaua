<?php

class Database {
	
	public function __construct($pdo){
	    $this->pdo = $pdo;
	}
	
	public function getUser($user, $pass){
		
		$sql = "SELECT id, login, password FROM users WHERE login = :login AND password = :password";
		$stmt = $this->pdo->prepare($sql);
		$params = [
			':login' => $user,
			':password' => $pass
		];
		$stmt->execute($params);
		
		return $stmt->fetch(PDO::FETCH_ASSOC);
		
	}
	
	public function addPost($text, $text_en, $uri){
	    
	    $sql = "INSERT INTO posts SET text = :text, text_en = :text_en, uri = :uri";
	    $params = [
			':text' => $text,
			':text_en' => $text_en,
			':uri' => $uri
		];
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($params);
	    
	}
	
	public function updatePost($id, $text, $text_en, $uri = null){
	    
	    $params = [
			':id' => $id,
			':text' => $text,
			':text_en' => $text_en
		];
		$sql = "UPDATE posts SET text = :text, text_en = :text_en WHERE id = :id";
		if($uri){
		    $sql = "UPDATE posts SET text = :text, text_en = :text_en, uri = :uri WHERE id = :id";
		    $params[':uri'] = $uri;
		}
	    
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($params);
	    
	}
	
	public function getPosts(){
	    
	    $sql = "SELECT * FROM posts ORDER BY datetime DESC";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    
	}
	
	public function getPostById($id){
	    
	    $sql = "SELECT * FROM posts WHERE id = :id";
		$stmt = $this->pdo->prepare($sql);
		$params = [':id' => $id];
		$stmt->execute($params);
		
		return $stmt->fetch();
	    
	}
	
	public function deletePost($id){
	    
	    $sql = "DELETE FROM posts WHERE id = :id";
		$stmt = $this->pdo->prepare($sql);
		$params = [':id' => $id];
		$stmt->execute($params);
	    
	}
	
	
	
}