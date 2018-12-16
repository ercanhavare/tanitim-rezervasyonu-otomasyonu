</div>


<div class="row">
    <div class="12u">
        <div id="copyright">
            &copy; İlkay Aksakal - 2014
        </div>
    </div>
</div>
</footer>
</div>

</body>
</html>
<script type="text/javascript">
    function menu_sec(menu_id)
    {
        $("#nav ul li").removeClass("current_page_item");
        $("#menu_" + menu_id).addClass("current_page_item");
    }
    $(document).ready(function(){
       menu_sec(<?=$menu?>); 
    });
</script>