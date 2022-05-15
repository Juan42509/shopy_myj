<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{
	
	public function index(){
		Utils::isAdmin();
		$categoria = new Categoria();
		$categorias = $categoria->getAll();

		require_once 'views/categoria/index.php';
	}
	
	public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria = $categoria->getOne();
			
			// Conseguir productos;
			$producto = new Producto();
			$producto->setCategoria_id($id);
			$productos = $producto->getAllCategory();
		}
		
		require_once 'views/categoria/ver.php';
	}
	
	public function crear(){
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}
	
	public function save(){
		Utils::isAdmin();
	    if(isset($_POST) && isset($_POST['nombre'])){
			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setNombre($_POST['nombre']);
			$save = $categoria->save();
		}
		header("Location:".base_url."categoria/index");
	}

	public function editar(){
		Utils::isAdmin();

		if(isset($_GET)){
			$id_categoria = $_GET['id'];

			$categoria = new Categoria();
			$categoria->setId($id_categoria);
			$categoria = $categoria->getOne();

			require_once("views/categoria/editar.php");
		}
	}

	public function saveEdit(){
		Utils::isAdmin();

		if(isset($_POST)){
			$id_categoria = $_POST['id_cat'];
			$nombre_cat = $_POST['nombre_cat'];

			$categoria = new Categoria();
			$categoria->setNombre($nombre_cat);
			$categoria->setId($id_categoria);
			$editar = $categoria->editOne();

			if($editar){
				header("Location:".base_url."categoria/index");
			}
		}
	}

	public function delete(){
		Utils::isAdmin();

		if(isset($_GET)){
			$id_categoria = $_GET['id'];

			$categoria = new Categoria();
			$categoria->setId($id_categoria);
			$delete = $categoria->delete();

			var_dump($delete);
			exit;

			if($delete){
				header("Location:".base_url."categoria/index");
			}
		}
	}
	
}