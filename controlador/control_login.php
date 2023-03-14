<?php
    include('../modelo/modelo.php');
    if($_POST["btn-log"])
    {

        if(isset($_POST["usu"]) and isset($_POST["contra"]))
        {

            $d1=$_POST["usu"];
            $d2=$_POST["contra"];

            $acc = new LOGIN($d1,$d2);
            $conformado= $acc ->COM2();

            if($conformado== 1)
            {
                include("../../paginas/administrador.php");

            }
            else if($conformado== 0)
            {
                include('../../paginas/error.php');
            }


        }
    }
?>