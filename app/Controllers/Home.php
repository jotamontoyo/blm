<?php

namespace App\Controllers;

use App\Models\EstadosModel;
use App\Models\DepartamentosModel;
use App\Models\MunicipiosModel;



use App\Models\PaisResidenciaModel;
use App\Models\GeoNivel1Model;
use App\Models\GeoNivel2Model;



class Home extends BaseController
{

    private $db;
    private $estadosModel;
    private $departamentosModel;
    private $municipiosModel;

    private $paisResidenciaModel;
    private $geoNivel1Model;
    private $geoNivel2Model;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
        $this->estadosModel = new EstadosModel();
        $this->departamentosModel = new DepartamentosModel();
        $this->municipiosModel = new MunicipiosModel();
        $this->paisResidenciaModel = new PaisResidenciaModel();
        $this->geoNivel1Model = new GeoNivel1Model();
        $this->geoNivel2Model = new GeoNivel2Model();
         
    }







    public function index()
    {
        $data = [
            'titulo'        => 'Gimnasio Blume'
        ];
        return view('index', $data);
    }






    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function solicitud_afiliacion()
    {
        $estados = $this->estadosModel->findAll();
        $departamentos = $this->departamentosModel->findAll();
        $municipios = $this->municipiosModel->findAll();

        $paisesResidencia = $this->paisResidenciaModel->findAll();
        $geoNiveles1 = $this->geoNivel1Model->findAll();
        $geoNiveles2 = $this->geoNivel2Model->findAll();


        $data = [
            'titulo'                => 'Partido Liberal de Nicaragua',
            'estados'               => $estados,
            'departamentos'         => $departamentos,
            'municipios'            => $municipios,
            'paisesResidencia'      => $paisesResidencia,
            'geoNiveles1'           => $geoNiveles1,
            'geoNiveles2'           => $geoNiveles2
        ];
        return view('formularios/solicitud-afiliacion', $data);
    }







    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function area_blume_sports()
    {
        $data = [
            'titulo'        => 'Blume Sports'
        ];
        return view('area/blume-sports', $data);
    }












    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function videos()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('comunicaciones/videos', $data);
    }








    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function articulos()
    {
        $data = [
            'titulo'        => 'Partido Liberal de Nicaragua'
        ];
        return view('comunicaciones/articulos', $data);
    }






    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function horario_blume()
    {
        $data = [
            'titulo'        => 'Horarios'
        ];
        return view('horarios/blume', $data);
    }





    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function horario_box()
    {
        $data = [
            'titulo'        => 'Horarios'
        ];
        return view('horarios/box', $data);
    }





}
