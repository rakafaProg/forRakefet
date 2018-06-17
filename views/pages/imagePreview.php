<?php

    class ImagePreview{

        public function output($fileds,$i){
            var_dump( $fileds);
            //echo '<input  type="file" name="image" style="text-align: center" onchange="readURL(this);" '.$fileds[$i].'" id="'.$fileds[$i].'" required>';
            // rakefet -  deleted unnessery part
            echo '<input  type="file" name="image" style="text-align: center" onchange="readURL(this);" id="'.$fileds[$i].'" required>';
            // image preview
            echo '<script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $("#myimage")
                                .attr("src", e.target.result)
                                .width(150)
                                .height(165);
                            };
                             reader.readAsDataURL(input.files[0]);
                        }
                    }
                 </script>';
        }
    }
?>
