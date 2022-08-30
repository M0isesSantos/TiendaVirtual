<?php

    class Conexion {
        private $conect;

        public function __construct(){
            $connectionString = "mysql:hos=".DB_HOST. ";dbname=".DB_NAME.";.DB_CHARSET.";

            try {
                $this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Nos permite capturar o detectar los errores de conexion
               // echo "Conexion Exitosa";
            }catch (Exception $e){
                $this->conect = 'Error de Conexion';
                echo "ERROR: ". $e->getMessage();
            }           
        }
        public function connect()
        {
            return  $this->conect;
        }

        // $conect = new Conexion();
    public function select_all(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }

}

?>