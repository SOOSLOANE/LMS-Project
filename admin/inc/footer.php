    </div>
</div>
    <script>
        $('.logout').hover(
            function(){
                $(this).find('i').removeClass('bi-door-closed');
                $(this).find('i').addClass('bi-door-open');
            },function(){
                $(this).find('i').addClass('bi-door-closed');
                $(this).find('i').removeClass('bi-door-open');
            }
        )
    </script>
</body>
</html>