<?phpClass ControllerCore{	protected $tempPath;	protected $dirPath;	protected $model;	protected $absPath;		public function __construct(){		}		public function setModel($model){		require $this->dirPath."data/ModelCore.php";		require $this->dirPath."model/".$model.".model.php";				$req_model = $model."Model";		$model = strtolower($model);		$this->$model =  new $req_model();		$this->$model->__initialize();	}		public function setUtility($utility){		require $this->dirPath."utilities/".$utility.".php";	}			public function setTemplatePath($tempPath){		$this->tempPath = $tempPath;	}		public function template($template,$data = NULL){		require $this->tempPath.$template.".php";	}		public function dirPath($dirPath){		$this->dirPath = $dirPath;	}		public function dirPathAbsolute($absPath){		$this->absPath = $absPath;	}		public function style($style){		echo '<link rel="stylesheet" type="text/css" href="'.$this->dirPath.'styles/'.$style.'.css">';	}	public function addLibrary($library){		require $this->dirPath."libraries/".$library.".php";	}		}?>