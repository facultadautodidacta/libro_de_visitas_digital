<?php 
    date_default_timezone_set('America/Mexico_City');
    class Visitas {
        public function conexion() {
            return mysqli_connect(
                'localhost', 'root', '', 'libro_visitas'
            );
        }

        public function agregarVisita($datos) {
            $conexion = $this->conexion();
            $sql = "INSERT INTO t_visitas (paterno, 
                                            materno, 
                                            nombre, 
                                            motivo, 
                                            fecha) 
                    VALUES (?, ?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('sssss' , $datos['paterno'], 
                                        $datos['materno'],
                                        $datos['nombre'],
                                        $datos['motivo'],
                                        $datos['fecha']);
            return $query->execute();
        }

        public function mostrarDia(){
            $conexion = $this->conexion();
            $fecha = date("Y-m-d");
            $sql = "SELECT * FROM t_visitas WHERE fecha like '%$fecha%'";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }

        public function mostrarTodos(){
            $conexion = $this->conexion();
            $sql = "SELECT * FROM t_visitas";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }
    }
?>