<?php


class edit
{
    public function list($objConection, $id)
    {
        //$query = "SELECT  register_article.id, register_article.title, register_article.date_register, type_article.type_Article FROM register_article 
        //INNER JOIN type_article ON register_article.type_a = type_article.id";

        if($id){

            $query = "SELECT id_Article, title, name_user, type_Article,date_register, article_content, image_rute FROM register_article AS r
            JOIN users AS u  ON r.type_a = u.id
            JOIN type_article AS t  ON r.type_a = t.id_type WHERE id_article = '$id'";
           
           $result = $objConection->query($query);

        }
        else{

            $query = "SELECT id_Article, title, name_user, type_Article,date_register, article_content FROM register_article AS r
            JOIN users AS u  ON r.type_a = u.id
            JOIN type_article AS t  ON r.type_a = t.id_type";
            $result = $objConection->query($query);
        }

        if(empty($result)){

            return "no dio nada la consulta";

        }

      

        return $result;
    }





    public  function update($objConection, $id, $titulo, $editor, $articulo, $fechaActualizada){   

           
                $query = "UPDATE register_article SET title = '$titulo', article_content = '$editor', type_a = $articulo, date_register = '$fechaActualizada' WHERE id_article= '$id'";
                $result=$objConection->query($query);

                return $result;
            
    }






    public function inner($objConnection, $id){
        
            $query = "SELECT title, type_article, article_content FROM register_article AS r
            INNER JOIN type_article AS t ON r.type_a = t.id_type WHERE id_article = '$id'";

            $result = $objConnection->query($query);

            if(!$result){

                die('consulta fallida');

            }

            return $result;
        
    }
}