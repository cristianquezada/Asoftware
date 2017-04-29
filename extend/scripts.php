</main>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
  </script>

  <script src="../js/materialize.min.js"></script>
  <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.0/sweetalert2.js"></script>
  <script>
  	$('.button-collpase').sideNav();
    $('select').material_select();
  function may(obj, id){
    obj = obj.toUpperCase();
    document.getElementById(id).value = obj;
  }

  </script>
  <script>
  	$(document).ready(function(){
      $('.slider').slider();
    });
  </script>
