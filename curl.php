<?php
function lib(){
                header("Content-type:text/html;charset=gbk");

                $url = "http://121.33.188.47:22995/opac_two/search2/searchout.jsp";
                $post_data = array ("search_no_type" => "Y","snumber_type" => "Y","suchen_type" => "1","suchen_word" => "PHP","suchen_match" => "qx",
                "recordtype" => "all","library_id" => "all","show_type" => "wenzi","B1" => "确定");
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                // post数据

                curl_setopt($ch, CURLOPT_POST, 1);
                // post的变量
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

                $output = curl_exec($ch);
                curl_close($ch);

                //打印获得的数据

                print_r($output);



        }
?>
