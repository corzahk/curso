</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
<script> $('.button-collpase').sideNav(); </script>
<script>
    $('.button-collpase').sideNav();
    $('select').material_select();

    function may(obj, id){
    obj = obj.toUpperCase()
    document.getElementById(id).value = obj;
    }
</script>