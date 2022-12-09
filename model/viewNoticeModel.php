<?php 

class view{

    public function order($objConnection, $id, $value){

        
        $query = "SELECT id_Article, title, name_user, type_Article, date_register, article_content, image_rute FROM register_article AS r
        JOIN users AS u  ON r.type_a = u.id
        JOIN type_article AS t  ON r.type_a = t.id_type WHERE type_Article = '$value' AND id_Article='$id'";

        $result = $objConnection->query($query);
        return $result;
    }

    public function llist($objConnection, $value){


        $query = "SELECT max(id_Article) AS id FROM register_article AS r
            JOIN users AS u  ON r.type_a = u.id
            JOIN type_article AS t  ON r.type_a = t.id_type WHERE type_Article = '$value' ";
           
           $result = $objConnection->query($query);

           return $result;

    }



}