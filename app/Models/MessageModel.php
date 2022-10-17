<?php
namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
    {
        protected $table = 'user';
        protected $primaryKey = ['id_comment', 'id_post'];

        protected $useAutoIncrement = true;
        protected $allowedFields = ['nama', 'email', 'no_telepon', 'message', 'tipe', 'id_post', 'id_main'];

        private $belajar = 'belajar';
        private $user = 'user';

        function post($slug) {
            $query = $this->db->table($this->belajar)->where('slug', $slug)->get();
            
            return $query->getRow();
        }

        function comment_post($slug)
        {
            $query = $this->db->query('SELECT u.id_comment, u.id_post, u.id_main, u.message, u.email, u.tipe, u.nama,
                        u.dibuat FROM ' . $this->user . ' u, ' . $this->belajar . ' b
                        WHERE u.id_post=b.id_post AND 
                            b.slug=' . $this->db->escape($slug) .
                        ' ORDER BY u.dibuat DESC');
                    
            if ($query->resultID->num_rows > 0)
            {
                $items = array();
                foreach ($query->getResult() as $row)
                {
                    $items[] = $row;
                }

                helper("custom");

                $comments = $this->format_comments($items);
                return $comments;
            }

            return '<ul class="row-cols" style="list-style-type: none"></ul>';
        }

        function comment_add($data)
        {
            $this->db->table($this->user)->insert($data);
            $added_id = $this->db->insertID();

            if($added_id > 0)
            {
                $query = $this->db->query('SELECT u.id_comment, u.id_post, u.id_main, u.message, u.email, u.tipe, u.nama,
                        u.dibuat
                        FROM ' . $this->user . ' u
                        WHERE u.id_comment=' . $added_id);

                return $query->getResult();
            }
            return NULL;
        }

        private function format_comments($comments)
        {
            $html = array();
            $default_id = 0;
            foreach($comments as $com)
                $children[$com->id_main][] = $com;

            $loop = !empty($children[$default_id]);

            $parent = $default_id;
            $parent_stack = array();


            $html[] = '<ul class="row-cols" style="list-style-type: none">';


            while ($loop && ( ( $option = an_each($children[$parent]) ) || ( $parent > $default_id ) ))
            {
                if ($option === false) {
                    $parent = array_pop($parent_stack);

                    $html[] = str_repeat("\t", ( count($parent_stack) + 1 ) * 2) . '</ul>';
                    $html[] = str_repeat("\t", ( count($parent_stack) + 1 ) * 2 - 1) . '</li>';

                } elseif (!empty($children[$option['value']->id_comment])) {
                    $tab = str_repeat("\t", ( count($parent_stack) + 1 ) * 2 - 1);

                    $html[] = sprintf(
                            '%1$s<li class="col-12 col-lg-12 col-md-12 col-sm-12 pb-2 pt-2 mb-3 ml-auto bg-komentar border-bottom" id="li_comment_%2$s>'.
                            '%1$s%1$s<p class="border-bottom">%3$s(<small class="border-bottom"><i>%4$s</i></small>) <small class="float-right border-bottom">%5$s</small></p>'.
                            '%1$s%1$s<p class="ml-2">%6$s</p>'.
                            '%1$s%1$s<a href="#" class="ml-2 balas" id="%2$s"><button class="btn btn-primary">Balas</button></a>', $tab, // %1$s = tabulation
                            $option['value']->id_comment, //%2$s = id comment
                            $option['value']->nama, // %3$s = username
                            $option['value']->email, //%4$s = email
                            php_date($option['value']->dibuat), // %5$s = comment created_date
                            $option['value']->message // %6$s = comment
                    );


                    //$check_status = "";
                    $html[] = $tab . '\t' . '<ul class="row-cols" style="list-style-type: none">';

                    array_push($parent_stack, $option['value']->id_main);
                    $parent = $option['value']->id_comment;

                } else {
                    // HTML for comment item with no children (aka "leaf")
                    $html[] = sprintf(
                        '%1$s<li class="col-12 col-lg-12 col-md-12 col-sm-12 pb-2 pt-2 mb-3 ml-auto bg-komentar" id="li_comment_%2$s">'.
                        '%1$s%1$s<p class="border-bottom">%3$s(<small><i>%4$s</i></small>) <small class="float-right">%5$s</small></p>'.
                        '%1$s%1$s<p class="ml-2">%6$s</p>'.
                        '%1$s%1$s<a href="#" class="ml-2 balas" id="%2$s"><button class="btn btn-primary">Balas</button></a>'.
                        '%1$s</li>', str_repeat("\t", ( count($parent_stack) + 1 ) * 2 - 1), // %1$s = tabulation
                        $option['value']->id_comment, //%2$s = id comment
                        $option['value']->nama, // %3$s = username
                        $option['value']->email, //%4$s = email
                        php_date($option['value']->dibuat), // %5$s = comment created_date
                        $option['value']->message // %6$s = comment
                        );

                    }
            }

            // HTML wrapper for the comment (close)
            $html[] = '</ul>';
            return implode("\r\n", $html);
        }
    }

?>