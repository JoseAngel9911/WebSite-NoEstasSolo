<?php 


class view{

    public function order($objConnection,$id){

        $query = "SELECT id_Article, title, name_user, type_Article,date_register, article_content, image_rute FROM register_article AS r
        JOIN users AS u  ON r.type_a = u.id
        JOIN type_article AS t  ON r.type_a = t.id_type WHERE id_Article = $id";

        $result = $objConnection->query($query);
        
        return $result;
    }

}