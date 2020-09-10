<?php
class modelVotar extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function votar($idUser,$idVoto,$nomina)
    {   
        try {
            $query = $this->db->query('INSERT INTO votaciones(id_user,id_nominado,nomina) values('.$idUser.','.$idVoto.',"'.$nomina.'")');
            if ($query) {
                return true;
            } else{
                return false;
            }

        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }
    public function verificar($userId,$nomina) 
    {

        $query = $this->db->query('SELECT * FROM VOTACIONES WHERE id_user='.$userId.' AND nomina="'.$nomina.'"');
  
        if ($query->num_rows()>0) {
            return true;
        } else{
            return false;
        }
    }

}
?>