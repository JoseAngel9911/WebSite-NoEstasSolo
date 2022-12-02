<?php


class edit
{
    public function list($objConection)
    {
        //$query = "SELECT  register_article.id, register_article.title, register_article.date_register, type_article.type_Article FROM register_article 
        //INNER JOIN type_article ON register_article.type_a = type_article.id";

        $query = "SELECT id, title,  type_article, date_register FROM register_article AS r
        JOIN type_article AS t ON r.type_a = t.id_type";

        $result = $objConection->query($query);

        if(empty($result)){

            echo "vacio";

        }

        if (!$result) {

            die('datos muertos');

        };

        return $result;
    }

    public  function update($objConection, $id, $titulo, $editor, $articulo){   

            $fechaActualizada = date('d/m/y');
           
                $query = "UPDATE register_article SET title = '$titulo', article_content = '$editor', type_a = $articulo, date_register = '$fechaActualizada' WHERE id= '$id'";
                $result=$objConection->query($query);

                return $result;
            
    }

    public function inner($objConnection, $id){
        
            $query = "SELECT title, type_article, article_content FROM register_article AS r
            INNER JOIN type_article AS t ON r.type_a = t.id_type WHERE id = '$id'";

            $result = $objConnection->query($query);

            if(!$result){

                die('consulta fallida');

            }

            return $result;
        
    }
}