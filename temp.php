<html>
 <head>
  <script type="text/javascript">
    window.onload = function() {

    	var ex1 = document.getElementById('example1');
    	var ex2 = document.getElementById('example2');
    	var ex3 = document.getElementById('example3');

    	ex1.onclick = handler;
    	ex2.onclick = handler;
    	ex3.onclick = handler;

    }

    function handler() {
    	alert('clicked');
    }
  </script>
 </head>
 <body>
  <input type="radio" name="example1" id="example1" value="Example 1" />
  <label for="example1">Example 1</label>
  <input type="radio" name="example2" id="example2" value="Example 2" />
  <label for="example1">Example 2</label>
  <input type="radio" name="example3" id="example3" value="Example 3" />
  <label for="example1">Example 3</label>
 </body>
</html>