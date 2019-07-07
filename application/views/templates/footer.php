<div class="clearfix"></div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?=base_url('assets/js/main.js')?>"></script>
    <script src="<?=base_url('assets/js/all.min.js')?>"></script>

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