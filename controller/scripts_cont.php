<?php 
    /*
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);*/

    class scripts_pag {        

        public $arr_scripts = [];
        public $arr_css = [];

        public function creaArrayScripts(){


            $this->arr_scripts = [

                "jQuery"=>"bower_components/jquery/dist/jquery.min.js",
                //"jQueryUI"=>"js/plugins/autocompleta/jquery-ui.min.js",
                "Bootstrap"=>"bower_components/bootstrap/dist/js/bootstrap.min.js",
                //"Metis Menu"=>"bower_components/metisMenu/dist/metisMenu.min.js",
                //"DataTables"=>"bower_components/datatables/media/js/jquery.dataTables.min.js",
                //"DataTables-Bootstrap"=>"bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js",
                //"DataTables-Data"=>"js/data_tabla.js",
                //"validav1"=>"../js/plugins/validav1/valida_p_v1.js",
                //"jquery ui widget"=>"js/jquery.ui.widget.js",
                //"jquery iframe-transport"=>"js/jquery.iframe-transport.js",
                //"fileupload plugin"=>"js/jquery.fileupload.js",
                //"moment"=>"js/plugins/calendario/moment.min.js",
                //"jquery-ui-timepicker"=>"js/plugins/calendario/jquery-ui-timepicker-addon.js",
                //"Setup Calendario"=>"js/plugins/calendario/calendarCotizacion.js",
                //"mask.js"=>"js/plugins/mask/jquery.mask.js",
                //"formatCurrency.js"=>"js/plugins/mask/jquery.formatCurrency.js",
                //"accounting.js"=>"js/plugins/mask/accounting.min.js",
                //"timer.js"=>"js/plugins/sesion_plugin/timer.jquery.js",
                //"bootstrap-treeview"=>"bower_components/bootstrap-treeview/public/js/bootstrap-treeview.js",
                //"valida_p_v1.js"=>"bower_components/valida_p.js/js/valida_p_v1.js",
                //"jquery_controllerV2"=>"bower_components/jquery_controllerV2.js/jquery_controllerV2.js",
                //"validaArchivoPlugin.js"=>"bower_components/validaArchivoPlugin.js/validaArchivoPlugin.js",
                //"raphael-min.js"=>"bower_components/raphael/raphael-min.js",
                //"morris.js"=>"bower_components/morrisjs/morris.min.js",
                "sb-admin-2.js"=>"bower_components/sb-admin-2/js/sb-admin-2.js",

            ];

        }

        public function creaArrayCss(){


            $this->arr_css = [

                "bootstrap"=>"bower_components/bootstrap/dist/css/bootstrap.min.css",
                //"metisMenu"=>"bower_components/metisMenu/dist/metisMenu.min.css",
                //"timeline"=>"dist/css/timeline.css",
                "sb-admin-2"=>"bower_components/sb-admin-2/css/sb-admin-2.css",
                //"morris"=>"bower_components/morrisjs/morris.css",
                "font-awesome"=>"bower_components/sb-admin-2/font-awesome-4.1.0/css/font-awesome.min.css",
                //"dataTables.bootstrap"=>"bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css",
                //"font-awesome"=>"bower_components/font-awesome/css/font-awesome.min.css",
                //"jquery-ui"=>"js/plugins/autocompleta/jquery-ui.min.css",
                //"jquery-ui-timepicker-addon"=>"js/plugins/calendario/jquery-ui-timepicker-addon.css",
            ];

        }
        
        public function standar(){

            $this->creaArrayScripts();

            $paths = "";

            foreach ($this->arr_scripts as $key => $value){
                
                $paths .= "<script src='../".$value."'></script>\n";
                $paths .= "<!-- ".$key." -->\n";

            }

            echo $paths;
        }

        public function standarCss(){

            $this->creaArrayCss();

            $paths = "";

            foreach ($this->arr_css as $key => $value){
                
                $paths .= "<link href='../".$value."' rel='stylesheet'>\n";
                $paths .= "<!-- ".$key." -->\n";

            }

            echo $paths;
        }

        public function special($arr_script){

            $this->standar();

            for ($i=0; $i < sizeof($arr_script); $i++) { 
                # code...
                echo '<script src="../js/scripts_cont/'.$arr_script[$i].'"></script>';
            }
        }

    //------------------------------------------------------------------------------------------------------
    }

 ?>
