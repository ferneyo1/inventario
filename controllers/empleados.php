<?php
class Empleados extends Controller {
	public function __construct(){
		parent::__construct();
		Auth::handleLogin();
	}
	public function index(){
	$start=0;
	$this->view->page=1;
	$limite="1000000";
	$this->view->totalList=$this->model->anyList("empleados",$limite);
	$this->view->total_registros=count($this->view->totalList);
	$this->view->total_pages=ceil($this->view->total_registros/NUM_ITEMS_BY_PAGE);
	$this->view->empleadosList = $this->model->empleadosList($start,NUM_ITEMS_BY_PAGE);
	$this->view->render("empleados/index");
	}
	public function index_($page){
	if(isset($page)){
		$this->view->page=$page;
	}
	if(!$page){
		$start=0;
		$this->view->page=1;
	}else{
		$start=($page-1) * NUM_ITEMS_BY_PAGE;
	}
	$limite="1000000";
	$this->view->totalList=$this->model->anyList("empleados",$limite);
	$this->view->total_registros=count($this->view->totalList);
	$this->view->total_pages=ceil($this->view->total_registros/NUM_ITEMS_BY_PAGE);
	$this->view->empleadosList = $this->model->empleadosList($start,NUM_ITEMS_BY_PAGE);
	$this->view->render("empleados/index");
	}

	public function ultimo(){
	$this->view->empleadosList = $this->model->empleadosListUltimo();
	$this->view->render("empleados/index");
	}
	public function add(){
	$limite=10;
	$start=0;
	$this->view->anyList=$this->model->anyList("empleados",$limite);
	$this->view->empleadosList = $this->model->empleadosList($start,NUM_ITEMS_BY_PAGE);
	$this->view->empleadosListUltimo = $this->model->empleadosListUltimo();
	$this->view->render("empleados/add");
	}
	public function search(){
	$start=0;
	$this->view->page=1;
	$this->view->empleadosList = $this->model->empleadosSingleSearch($_POST["dato"],$_POST["criterio"]);
	$this->view->total_registros=count($this->view->empleadosList );
	$this->view->total_pages=ceil($this->view->total_registros/NUM_ITEMS_BY_PAGE);
	$this->view->render("empleados/index");
	}
	public function view($id){
	$limite=10;
	$this->view->anyList=$this->model->anyList("empleados",$limite);
	$this->view->empleadosList = $this->model->empleadosSingleList($id);
	$this->view->render("empleados/view");
	}
    public function edit($id){
		$limite=10;
		$this->view->anyList=$this->model->anyList("empleados",$limite);
		$this->view->empleadosList = $this->model->empleadosSingleList($id);
		$this->view->render("empleados/edit");

	}

	public function copy($id){
		$limite=1;
		$this->view->anyList=$this->model->anyList("empleados",$limite);
		$this->view->empleadosList = $this->model->empleadosSingleList($id);
		$this->view->render("empleados/copy");
	
		}
    public function create(){
    $data = array();
	$imagen=$this->save_file(@$_FILES["imagen"]);
	$data["documento"] = @$_POST["documento"];
	$data["nombre"] = @$_POST["nombre"];
	$data["cargo"] = @$_POST["cargo"];
	$data["ingreso"] = @$_POST["ingreso"];
	$data["imagen"]=$imagen;
	$data["usuarios_id"] = Session::get("id");
	$data["estado"] = "activo";
	$this->model->create($data);
	$salida="";
	$data=array();
	$resultadoOrdenado = array();
	$limite=REGISTROS_INSERTADOS;
	$this->view->anyList=$this->model->anyList("empleados",$limite);
	foreach($this->view->anyList as $key => $value)
		{
	//salida de datos como una tabla
	        $salida.="<tr>";
			
		    $salida.= "<td>".@$value["documento"]."</td>";
		    $salida.= "<td>".@$value["nombre"]."</td>";
		    $salida.= "<td>".@$value["cargo"]."</td>";
		    $salida.= "<td>".@$value["ingreso"]."</td>";
			$salida.="<td>".$value["imagen"]."</td>";
		    $salida.="<td>".@$this->roles(session::get("role"),$value["id"],1)."</td></tr>";
		    //$data["documento"] = @value["documento"];
		    //$data["nombre"] = @value["nombre"];
		    //$data["cargo"] = @value["cargo"];
		    //$data["ingreso"] = @value["ingreso"];
    //salida de datos como un array tipo json
			//$data["imagen"]=@$value["imagen"];
	        array_push($resultadoOrdenado, $data);
		}
		echo $salida;
	    //echo json_encode($resultadoOrdenado, JSON_UNESCAPED_UNICODE );
        //header("location: " . URL . "empleados/add");
}
public function editSave($id){
	$data = array();
	$resultadoOrdenado = array();
	$data["id"] = $id;

	
	$imagen=$this->save_file(@$_FILES["imagen"]);
	$data["documento"] = @$_POST["documento"];
	$data["nombre"] = @$_POST["nombre"];
	$data["cargo"] = @$_POST["cargo"];
	$data["ingreso"] = @$_POST["ingreso"];
    if($imagen==1){
		$data["imagen"]=$_POST["imagen2"];
	}
    else{
		$data["imagen"]=@$imagen;
	}

	
	$salida="";
	$resultadoOrdenado = array();
	$limite=1000000;
	$this->view->anyList=$this->model->anyList("empleados",$limite);
		foreach($this->view->anyList as $key => $value)
			{
		//salida de datos como una tabla
		//$salida.="<tr>";
				
				//$salida. = "<td>".@$value["documento"]."</td>";
				//$salida. = "<td>".@$value["nombre"]."</td>";
				//$salida. = "<td>".@$value["cargo"]."</td>";
				//$salida. = "<td>".@$value["ingreso"]."</td>";
				//$salida.="<td>".$value["imagen"]."</td>";
			    //$salida.="<td>".@$this->roles(session::get("role"),$value["id"],1)."</td></tr>";
				//$data["documento"] = @value["documento"];
				//$data["nombre"] = @value["nombre"];
				//$data["cargo"] = @value["cargo"];
				//$data["ingreso"] = @value["ingreso"];
		        //salida de datos como un array tipo json
				//$data["imagen"]=@$value["imagen"];
		        array_push($resultadoOrdenado, $data);
			}
			//echo $salida;
			//echo json_encode($resultadoOrdenado, JSON_UNESCAPED_UNICODE );
    $this->model->editSave($data);
    header("location: " . URL . "empleados");
}

    public function delete($id){
    $this->model->delete($id);
    header("location: " . URL . "empleados");
    }
	public function delete_multiple(){
		$checked = array();
		$checked = $_POST["check"];
		for($i=0; $i < count($checked); $i++){
			$this->model->delete($checked[$i]);
		}
	header("location: " . URL . "empleados");
}


	public function activo($id){
        $data = array();
    	$data["id"] = $id;
        $data["estado"] = "inactivo";
        $this->model->disable($data);
    header("location: " . URL ."empleados");
    }
    public function inactivo($id){
        $data = array();
    	$data["id"] = $id;
        $data["estado"] = "activo";
        $this->model->enable($data);
    header("location: " . URL ."empleados");
    }


	public function save_file($fil){
	if( !$fil){
		  return "Ha habido un error, tienes que elegir un archivo<br/>";
		}
		else{
			$nombre = trim($fil["name"]);
			$nombre_tmp = trim($fil["tmp_name"]);
			$tipo = $fil["type"];
			$tamano = $fil["size"];
			$ext_permitidas = array("jpg","jpeg","gif","png","pdf","doc","docx","xls","xlsx");
			$partes_nombre = explode(".", $nombre);
			$extension = end( $partes_nombre );
			$ext_correcta = in_array($extension, $ext_permitidas);
			if( $ext_correcta){
			if( $fil["error"] > 0 ){
			  return "Error: " . $fil["error"] . "<br/>";
			}else{
			  //echo "Nombre: " . $nombre . "<br/>";
			  //echo "Tipo: " . $tipo . "<br/>";
			  //echo "Tamaño: " . ($tamano / 1024) . " Kb<br/>";
			  //echo "Guardado en: " . $nombre_tmp;
			  if( file_exists( "subidas/".$nombre) ){
				return "<br/>El archivo ". $nombre." ya existe: ";
			  }else{
				move_uploaded_file($nombre_tmp,"subidas/" . $nombre);
				return $nombre;
			  }
			}
		  }else{
			return 1;
		  }
		}

	}

    public function _ver($st1,$st2){
		$st3="";
		foreach($st1 as $key => $value){
			if($value["id"]==$st2){
				$st3.="<option value=".$value["id"]." selected>".$value["nombre"]."</option>";
			}$st3.="<option value=".$value["id"].">".$value["nombre"]."</option>";
		}
		return $st3;
	}
	public function _ver2($st1,$st2){
		foreach($st1 as $key => $value){
			if($value["id"]==$st2){
				$st3=$value["id"];
			}
		}
		return $st3;
	}
	public function _ver_mas($st1,$st2,$st3){
	foreach($st1 as $key => $value){
	if($value["id"]==$st2){
		return $value[$st3];
		}
	}
	}
	public function roles($rol,$id,$opcion){
		switch($rol){
			case 1:
				if($opcion==1){$vista="block";}else{$vista="none";}
				return "
				<a href=".URL."empleados/copy/$id>
					<i class='fa fa-repeat'title=Copiar></i>
				</a>&nbsp;
				<a href=".URL."empleados/view/$id>
					<i class='fa fa-eye'title=Ver ></i>
				</a>&nbsp;
				<a href=".URL."empleados/edit/$id>
					<i class='fa fa-edit'title=Editar ></i>
				</a>&nbsp;
				<a href=".URL."empleados/delete/$id  id=erase>
					<i class='fa fa-trash'title=Borrar ></i>
				</a>&nbsp;
				<a href=#>
					<i class='fa fa-plus' data-bs-toggle='modal' data-bs-target='#staticBackdrop' title='Modal' id='a$id'></i>
					</a>&nbsp;";
			break;
			case 2:
				case 1:
					if($opcion==1){$vista="block";}else{$vista="none";}
					return "
					<a href=".URL."empleados/copy/$id>
						<i class='fa fa-repeat'title=Copiar></i>
					</a>&nbsp;
					
					<a href=".URL."empleados/view/$id>
						<i class='fa fa-eye'title=Ver ></i>
					</a>&nbsp;
					
					<a href=".URL."empleados/edit/$id>
						<i class='fa fa-edit'title=Editar ></i>
					</a>&nbsp;
					<a href=#>
					<i class='fa fa-plus' data-bs-toggle='modal' data-bs-target='#staticBackdrop' title='Modal' id='a$id'></i>
					</a>&nbsp;";
				break;
				case 1:
					if($opcion==1){$vista="block";}else{$vista="none";}
					return "
					<a href=".URL."empleados/view/$id>
						<i class='fa fa-eye'title=Ver ></i>
					</a>&nbsp;
					<a href=#>
					<i class='fa fa-plus' data-bs-toggle='modal' data-bs-target='#staticBackdrop' title='Modal' id='a$id'></i>
					</a>&nbsp;";
				break;
			case 4:
			break;
			default:
				return "permisos no asignados";
				break;
		}

	}

}
?>