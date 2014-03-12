
<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 12.03.14
 * Time: 20:54
 */
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body{ font-size: 12px; font-family: Arial; }
    </style>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<div id="content"></div>

<script>
    function show()
    {
        $.ajax({
            url: "radio.php",
            cache: false,
            success: function(html){
                $("#content").html(html);
            }
        });
    }

    $(document).ready(function(){
        show();
        setInterval('show()',10000);
    });
</script>

</body>
</html>