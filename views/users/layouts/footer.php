
</div>
<!-- Bootstrap core JavaScript -->
<script src="<?= getJs('jquery.min' , 'users')?>"></script>
<script src="<?= getJs('bundel' , 'users')?>"></script>

<!-- Additional Scripts -->
<script src="<?= getJs('custom' , 'users')?>"></script>
<script src="<?= getJs('owl' , 'users')?>"></script>
<script src="<?= getJs('slick' , 'users')?>"></script>
<script src="<?= getJs('iso' , 'users')?>"></script>
<script src="<?= getJs('acco' , 'users')?>"></script>

<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>

</body>
</html>