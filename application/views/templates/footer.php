<div class="clearfix"></div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>  
    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/all.min.js')?>"></script>

    <script>
        $("[rel='tooltip']").tooltip();    
 
        $('.thumbnail').hover(
            function(){
                $(this).find('.caption').fadeIn(250); //.fadeIn(250)
            },
            function(){
                $(this).find('.caption').fadeOut(250); //.fadeOut(205)
            }
        ); 
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>
</html>