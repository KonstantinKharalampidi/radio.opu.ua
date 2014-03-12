
<script src="http://code.jquery.com/jquery-1.11.0.js"></script>
<div id='content'></div>

<script>
    function show()
    {
        $.ajax({
            url: 'classes/radio.php',
            cache: false,
            success: function(html){
                $('#content').html(html);
            }
        });
    }

    $(document).ready(function(){
        show();
        setInterval('show()',10000);
    });
</script>
