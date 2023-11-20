<?php
class Equipos extends Controller {
	public function __construct(){
		parent::__construct();
		Auth::handleLogin();
	}
	public function index(){$this->view->marcasList = $this->model->marcasList();$this->view->tipoequiposList = $this->model->tipoequiposList();$this->view->areasList = $this->model->areasList();$this->view->lugaresList = $this->model->lugaresList();$this->view->procesadorList = $this->model->procesadorList();$this->view->memoriasList = $this->model->memoriasList();$this->view->almacenamientoList = $this->model->almacenamientoList();$this->view->estadoequiposList = $this->model->estadoequiposList();$this->view->usuariosList = $this->model->usuariosList();
	$start=0;
	$this->view->page=1;
	$limite="1000000";
	$this->view->totalList=$this->model->anyList("equipos",$limite);
	$this->view->total_registros=count($this->view->totalList);
	$this->view->total_pages=ceil($this->view->total_registros/NUM_ITEMS_BY_PAGE);
	$this->view->equiposList = $this->model->equiposList($start,NUM_ITEMS_BY_PAGE);
	$this->view->render("equipos/index");
	}
	public function index_($page){$this->view->marcasList = $this->model->marcasList();$this->view->tipoequiposList = $this->model->tipoequiposList();$this->view->areasList = $this->model->areasList();$this->view->lugaresList = $this->model->lugaresList();$this->view->procesadorList = $this->model->procesadorList();$this->view->memoriasList = $this->model->memoriasList();$this->view->almacenamientoList = $this->model->almacenamientoList();$this->view->estadoequiposList = $this->model->estadoequiposList();$this->view->usuariosList = $this->model->usuariosList();
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
	$this->view->totalList=$this->model->anyList("equipos",$limite);
	$this->view->total_registros=count($this->view->totalList);
	$this->view->total_pages=ceil($this->view->total_registros/NUM_ITEMS_BY_PAGE);
	$this->view->equiposList = $this->model->equiposList($start,NUM_ITEMS_BY_PAGE);
	$this->view->render("equipos/index");
	}

	public function ultimo(){$this->view->marcasList = $this->model->marcasList();$this->view->tipoequiposList = $this->model->tipoequiposList();$this->view->areasList = $this->model->areasList();$this->view->lugaresList = $this->model->lugaresList();$this->view->procesadorList = $this->model->procesadorList();$this->view->memoriasList = $this->model->memoriasList();$this->view->almacenamientoList = $this->model->almacenamientoList();$this->view->estadoequiposList = $this->model->estadoequiposList();$this->view->usuariosList = $this->model->usuariosList();
	$this->view->equiposList = $this->model->equiposListUltimo();
	$this->view->render("equipos/index");
	}
	public function add(){$this->view->marcasList = $this->model->marcasList();$this->view->tipoequiposList = $this->model->tipoequiposList();$this->view->areasList = $this->model->areasList();$this->view->lugaresList = $this->model->lugaresList();$this->view->procesadorList = $this->model->procesadorList();$this->view->memoriasList = $this->model->memoriasList();$this->view->almacenamientoList = $this->model->almacenamientoList();$this->view->estadoequiposList = $this->model->estadoequiposList();$this->view->usuariosList = $this->model->usuariosList();
	$limite=10;
	$start=0;
	$this->view->anyList=$this->model->anyList("equipos",$limite);
	$this->view->equiposList = $this->model->equiposList($start,NUM_ITEMS_BY_PAGE);
	$this->view->equiposListUltimo = $this->model->equiposListUltimo();
	$this->view->render("equipos/add");
	}
	public function search(){$this->view->marcasList = $this->model->marcasList();$this->view->tipoequiposList = $this->model->tipoequiposList();$this->view->areasList = $this->model->areasList();$this->view->lugaresList = $this->model->lugaresList();$this->view->procesadorList = $this->model->procesadorList();$this->view->memoriasList = $this->model->memoriasList();$this->view->almacenamientoList = $this->model->almacenamientoList();$this->view->estadoequiposList = $this->model->estadoequiposList();$this->view->usuariosList = $this->model->usuariosList();
	$start=0;
	$this->view->page=1;
	$this->view->equiposList = $this->model->equiposSingleSearch($_POST["dato"],$_POST["criterio"]);
	$this->view->total_registros=count($this->view->equiposList );
	$this->view->total_pages=ceil($this->view->total_registros/NUM_ITEMS_BY_PAGE);
	$this->view->render("equipos/index");
	}
	public function view($id){
		$this->view->marcasList = $this->model->marcasList();$this->view->tipoequiposList = $this->model->tipoequiposList();$this->view->areasList = $this->model->areasList();$this->view->lugaresList = $this->model->lugaresList();$this->view->procesadorList = $this->model->procesadorList();$this->view->memoriasList = $this->model->memoriasList();$this->view->almacenamientoList = $this->model->almacenamientoList();$this->view->estadoequiposList = $this->model->estadoequiposList();$this->view->usuariosList = $this->model->usuariosList();
	$limite=10;
	$this->view->anyList=$this->model->anyList("equipos",$limite);
	$this->view->equiposList = $this->model->equiposSingleList($id);
	$this->view->equiposList2 = $this->model->equiposList2();
	$this->view->perifericosList = $this->model->perifericosList($id);
	$this->view->actividadesList = $this->model->actividadesList($id);
	$this->view->equipoempleadoList = $this->model->equipoempleadoList($id);
	$this->view->estadoActividadList = $this->model->estadoactividadList();
	$this->view->empleadosList = $this->model->empleadosList();
	$this->view->marcasList = $this->model->marcasList();
	
	$this->view->render("equipos/view");
	}
    public function edit($id){$this->view->marcasList = $this->model->marcasList();$this->view->tipoequiposList = $this->model->tipoequiposList();$this->view->areasList = $this->model->areasList();$this->view->lugaresList = $this->model->lugaresList();$this->view->procesadorList = $this->model->procesadorList();$this->view->memoriasList = $this->model->memoriasList();$this->view->almacenamientoList = $this->model->almacenamientoList();$this->view->estadoequiposList = $this->model->estadoequiposList();$this->view->usuariosList = $this->model->usuariosList();
		$limite=10;
		$this->view->anyList=$this->model->anyList("equipos",$limite);
		$this->view->equiposList = $this->model->equiposSingleList($id);
		$this->view->render("equipos/edit");

	}

	public function copy($id){$this->view->marcasList = $this->model->marcasList();$this->view->tipoequiposList = $this->model->tipoequiposList();$this->view->areasList = $this->model->areasList();$this->view->lugaresList = $this->model->lugaresList();$this->view->procesadorList = $this->model->procesadorList();$this->view->memoriasList = $this->model->memoriasList();$this->view->almacenamientoList = $this->model->almacenamientoList();$this->view->estadoequiposList = $this->model->estadoequiposList();$this->view->usuariosList = $this->model->usuariosList();
		$limite=1;
		$this->view->anyList=$this->model->anyList("equipos",$limite);
		$this->view->equiposList = $this->model->equiposSingleList($id);
		$this->view->render("equipos/copy");
	
		}
    public function create(){
    $data = array();
	$imagen=$this->save_file(@$_FILES["imagen"]);
	$data["nombre"] = @$_POST["nombre"];
	$data["marcas_id"] = @$_POST["marcas_id"];
	$data["serial"] = @$_POST["serial"];
	$data["numInventario"] = @$_POST["numInventario"];
	$data["tipoequipos_id"] = @$_POST["tipoequipos_id"];
	$data["areas_id"] = @$_POST["areas_id"];
	$data["lugares_id"] = @$_POST["lugares_id"];
	$data["procesador_id"] = @$_POST["procesador_id"];
	$data["memorias_id"] = @$_POST["memorias_id"];
	$data["almacenamiento_id"] = @$_POST["almacenamiento_id"];
	$data["imagen"]=$imagen;
	$data["created_at"] = @$_POST["created_at"];
	$data["updated_at"] = @$_POST["updated_at"];
	$data["estadoequipos_id"] = @$_POST["estadoequipos_id"];
	$data["usuarios_id"] = Session::get("id");
	$data["estado"] = "activo";
	$this->model->create($data);
	$salida="";
	$data=array();
	$resultadoOrdenado = array();
	$limite=REGISTROS_INSERTADOS;
	$this->view->anyList=$this->model->anyList("equipos",$limite);
	foreach($this->view->anyList as $key => $value)
		{
	//salida de datos como una tabla
	        $salida.="<tr>";
			
		    $salida.= "<td>".@$value["nombre"]."</td>";
		    $salida.= "<td>".@$value["marcas_id"]."</td>";
		    $salida.= "<td>".@$value["serial"]."</td>";
		    $salida.= "<td>".@$value["numInventario"]."</td>";
		    $salida.= "<td>".@$value["tipoequipos_id"]."</td>";
		    $salida.= "<td>".@$value["areas_id"]."</td>";
		    $salida.= "<td>".@$value["lugares_id"]."</td>";
		    $salida.= "<td>".@$value["procesador_id"]."</td>";
		    $salida.= "<td>".@$value["memorias_id"]."</td>";
		    $salida.= "<td>".@$value["almacenamiento_id"]."</td>";
			$salida.="<td>".$value["imagen"]."</td>";
		    $salida.= "<td>".@$value["created_at"]."</td>";
		    $salida.= "<td>".@$value["updated_at"]."</td>";
		    $salida.= "<td>".@$value["estadoequipos_id"]."</td>";
		    $salida.="<td>".@$this->roles(session::get("role"),$value["id"],1)."</td></tr>";
		    //$data["nombre"] = @value["nombre"];
		    //$data["marcas_id"] = @value["marcas_id"];
		    //$data["serial"] = @value["serial"];
		    //$data["numInventario"] = @value["numInventario"];
		    //$data["tipoequipos_id"] = @value["tipoequipos_id"];
		    //$data["areas_id"] = @value["areas_id"];
		    //$data["lugares_id"] = @value["lugares_id"];
		    //$data["procesador_id"] = @value["procesador_id"];
		    //$data["memorias_id"] = @value["memorias_id"];
		    //$data["almacenamiento_id"] = @value["almacenamiento_id"];
    //salida de datos como un array tipo json
			//$data["imagen"]=@$value["imagen"];
		    //$data["created_at"] = @value["created_at"];
		    //$data["updated_at"] = @value["updated_at"];
		    //$data["estadoequipos_id"] = @value["estadoequipos_id"];
	        array_push($resultadoOrdenado, $data);
		}
		echo $salida;
	    //echo json_encode($resultadoOrdenado, JSON_UNESCAPED_UNICODE );
        //header("location: " . URL . "equipos/add");
}
public function editSave($id){
	$data = array();
	$resultadoOrdenado = array();
	$data["id"] = $id;
	$imagen=$this->save_file(@$_FILES["imagen"]);
	$data["nombre"] = @$_POST["nombre"];
	$data["marcas_id"] = @$_POST["marcas_id"];
	$data["serial"] = @$_POST["serial"];
	$data["numInventario"] = @$_POST["numInventario"];
	$data["tipoequipos_id"] = @$_POST["tipoequipos_id"];
	$data["areas_id"] = @$_POST["areas_id"];
	$data["lugares_id"] = @$_POST["lugares_id"];
	$data["procesador_id"] = @$_POST["procesador_id"];
	$data["memorias_id"] = @$_POST["memorias_id"];
	$data["almacenamiento_id"] = @$_POST["almacenamiento_id"];
    if($imagen==1){
		$data["imagen"]=$_POST["imagen2"];
	}
    else{
		$data["imagen"]=@$imagen;
	}

	
	$data["created_at"] = @$_POST["created_at"];
	$data["updated_at"] = @$_POST["updated_at"];
	$data["estadoequipos_id"] = @$_POST["estadoequipos_id"];
	$salida="";
	$resultadoOrdenado = array();
	$limite=1000000;
	$this->view->anyList=$this->model->anyList("equipos",$limite);
		foreach($this->view->anyList as $key => $value)
			{
		//salida de datos como una tabla
		//$salida.="<tr>";
				
				//$salida. = "<td>".@$value["nombre"]."</td>";
				//$salida. = "<td>".@$value["marcas_id"]."</td>";
				//$salida. = "<td>".@$value["serial"]."</td>";
				//$salida. = "<td>".@$value["numInventario"]."</td>";
				//$salida. = "<td>".@$value["tipoequipos_id"]."</td>";
				//$salida. = "<td>".@$value["areas_id"]."</td>";
				//$salida. = "<td>".@$value["lugares_id"]."</td>";
				//$salida. = "<td>".@$value["procesador_id"]."</td>";
				//$salida. = "<td>".@$value["memorias_id"]."</td>";
				//$salida. = "<td>".@$value["almacenamiento_id"]."</td>";
				//$salida.="<td>".$value["imagen"]."</td>";
				//$salida. = "<td>".@$value["created_at"]."</td>";
				//$salida. = "<td>".@$value["updated_at"]."</td>";
				//$salida. = "<td>".@$value["estadoequipos_id"]."</td>";
			    //$salida.="<td>".@$this->roles(session::get("role"),$value["id"],1)."</td></tr>";
				//$data["nombre"] = @value["nombre"];
				//$data["marcas_id"] = @value["marcas_id"];
				//$data["serial"] = @value["serial"];
				//$data["numInventario"] = @value["numInventario"];
				//$data["tipoequipos_id"] = @value["tipoequipos_id"];
				//$data["areas_id"] = @value["areas_id"];
				//$data["lugares_id"] = @value["lugares_id"];
				//$data["procesador_id"] = @value["procesador_id"];
				//$data["memorias_id"] = @value["memorias_id"];
				//$data["almacenamiento_id"] = @value["almacenamiento_id"];
		        //salida de datos como un array tipo json
				//$data["imagen"]=@$value["imagen"];
				//$data["created_at"] = @value["created_at"];
				//$data["updated_at"] = @value["updated_at"];
				//$data["estadoequipos_id"] = @value["estadoequipos_id"];
		        array_push($resultadoOrdenado, $data);
			}
			echo $salida;
			//echo json_encode($resultadoOrdenado, JSON_UNESCAPED_UNICODE );
    $this->model->editSave($data);
    header("location: " . URL . "equipos");
}

    public function delete($id){
    $this->model->delete($id);
    header("location: " . URL . "equipos");
    }
public function delete_multiple(){
		$checked = array();
		$checked = $_POST["check"];
		for($i=0; $i < count($checked); $i++){
			$this->model->delete($checked[$i]);
		}
	header("location: " . URL . "equipos");
}

	public function activo($id){
        $data = array();
    	$data["id"] = $id;
        $data["estado"] = "inactivo";
        $this->model->disable($data);
    header("location: " . URL ."equipos");
    }
    public function inactivo($id){
        $data = array();
    	$data["id"] = $id;
        $data["estado"] = "activo";
        $this->model->enable($data);
    header("location: " . URL ."equipos");
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
				<a href=".URL."equipos/copy/$id>
					<i class='fa fa-repeat'title=Copiar></i>
				</a>&nbsp;
				<a href=".URL."equipos/view/$id>
					<i class='fa fa-eye'title=Ver ></i>
				</a>&nbsp;
				<a href=".URL."equipos/edit/$id>
					<i class='fa fa-edit'title=Editar ></i>
				</a>&nbsp;
				<a href=".URL."equipos/delete/$id  id=erase>
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
					<a href=".URL."equipos/copy/$id>
						<i class='fa fa-repeat'title=Copiar></i>
					</a>&nbsp;
					
					<a href=".URL."equipos/view/$id>
						<i class='fa fa-eye'title=Ver ></i>
					</a>&nbsp;
					
					<a href=".URL."equipos/edit/$id>
						<i class='fa fa-edit'title=Editar ></i>
					</a>&nbsp;
					<a href=#>
					<i class='fa fa-plus' data-bs-toggle='modal' data-bs-target='#staticBackdrop' title='Modal' id='a$id'></i>
					</a>&nbsp;";
				break;
				case 1:
					if($opcion==1){$vista="block";}else{$vista="none";}
					return "
					<a href=".URL."equipos/view/$id>
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