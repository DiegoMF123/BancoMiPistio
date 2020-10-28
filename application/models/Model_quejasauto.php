<?php
class Model_quejasauto extends CI_Model{

  public function guardar($sigcor,$desc,$fecha){

    $this->load->database();

    $query = $this->db->query("

    insert into Tipo_Queja(
     Correlativo,
     FechaCreacion,
      Estados_idEstados,
      Descripcion
     )values(
       '".$sigcor."',
       STR_TO_DATE('".$fecha."', '%d-%m-%Y %h:%i:%s'),
       '1',
      '".$desc."'
       )

    ");

  }

  public function listadoq(){

    $this->load->database();

    $query = $this->db->query("

    select tq.idTipo_Queja, tq.Correlativo, est.NombreEstado, tq.Descripcion
    from Tipo_Queja as tq inner join Estados est where tq.Estados_idEstados = est.idEstados;

    ");
      return $query->result();

  }

  public function selectidlistadoq($id){

    $this->load->database();

    $query = $this->db->query("

    select tq.idTipo_Queja, tq.Correlativo, est.NombreEstado, tq.Descripcion
from Tipo_Queja as tq inner join Estados est where tq.Estados_idEstados = est.idEstados and tq.idTipo_Queja = '".$id."';

    ");
      return $query->result();

  }

  public function update($id,$estado,$desc,$fechamodifi){

  $this->load->database();
  $query =  $this->db->query("
  update Tipo_Queja
    set idTipo_Queja= '".$id."',
       FechaModificacion= STR_TO_DATE('".$fechamodifi."', '%d-%m-%Y %h:%i:%s'),
       Estados_idEstados= '".$estado."',
       Descripcion = '".$desc."'
       where idTipo_Queja ='".$id."'
  ");
}






}


 ?>
