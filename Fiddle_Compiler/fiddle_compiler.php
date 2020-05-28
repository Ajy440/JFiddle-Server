<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/ace.js" type="text/javascript" charset="utf-8"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js" type="text/javascript"></script>
<link rel="icon" href="https://i.ibb.co/Fmx6DXF/favicon.png" type="image/x-icon"/>


  <link rel="stylesheet" type="text/css" href="compilers/style.css">
    <title>Fiddle Compiler</title>




<style type="text/css" media="screen">
    #editor { 
          color :white;
          height: 65vh;

    }
</style>

  </head>
  <body>

<!--Navbar starts-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar-custom">
  <a class="navbar-brand" id="icon" href="http://jfiddle.epizy.com"><img src="assets/logo.png" class="img-fluid float-left" alt="Responsive image" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" ><input type="submit" id="st" class="btn btn-success" value="Run Code"> <span class="sr-only">(current)</span></a>
      </li>
      <li><a class="nav-link" href="http://jfiddle.epizy.com"><input type="button" class="btn btn-secondary" name="" value="Home"></a></li>
      
      
    </ul>
     <div class="dropdown" style="margin-right: 5px;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Editor Type
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" onclick="collap1()">Basic Editor</a>
    <a class="dropdown-item" onclick="collap2()">Ace Editor</a>
  
  </div>
</div>
     
     <img src="assets/user.png" class="img-fluid " alt="Responsive image" id="icon2">
   
  </div>
</nav>

<!--Navbar ends-->

<div class="row">
  <div class="col-sm-1">
 
   <h1 style="font-size:1vw;" align="center">Quick Pallete</h1><br><br>
   <button type="button" class="btn btn-primary"  id="scanne">Scanner</button>
   <br><br>
   <button type="button" class="btn btn-primary"  id="foloop">For Loop</button>
   <br><br>
   <button type="button" class="btn btn-primary"  id="outpu">Output</button>
   <br><br>
   <button type="button" class="btn btn-primary"  id="arra">Array</button>
  </div>





  <div class="col-sm-11">
<form action="/compilers/java.php" id="form" name="f2" method="POST" >
    <div class="collapse multi-collapse" id="multiCollapseExample1">
 

<textarea class="form-control" name="code" rows="20" cols="50" id="ta1" contenteditable="true" spellcheck="false" >
  class Main{
    public static void main(String [] abc){
      System.out.println("hello java");
    }
  }
</textarea>
</div>
    <div class="collapse multi-collapse" id="multiCollapseExample2">
 

<div id="editor">public class Main
{
    public static void main(String args[])
    {
       System.out.println("Hello World");
    }
}
</div>
</div>
<hr id="hr1">
<div class="container-fluid">
  <div class="row" id="main2">
    <div class="col-sm-6">
      <label for="input" id="label1"> Enter your Input Here: </label>
      <textarea class="form-control" name="input" rows="5" id="input"></textarea>

    </div>
    <div class="col-sm-6">
      <label for="output" id="label1"> Output: </label>
      <textarea class="form-control" name="div" rows="5"  id="output"></textarea>
    </div>
  </div>

</form>
</div>
</div>





<!--code script-->


<script type="text/javascript">

  $(document).ready(function(){

     $("#st").click(function(){

           $("#output").html("Loading ......");
            $("#form").submit();

new Noty({
  type: 'success',
  theme: 'nest',
    text: 'Compiling',
    dismissQueue: true,
      timeout: 500,
    
}).show();



     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
       checker();
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX
      $.ajax({
            type: "POST",
            cache: false, //important or else you might get wrong data returned to you
            // url: "compile.php", //destination
            url: "compilers/java.php",

            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                if(result.length>=4)
                {
                     var res = result.substr(1, 4);
                if(res=="pre>"){

new Noty({
  type: 'alert',
  theme: 'nest',
    text: 'You got errors in code!',
    dismissQueue: true,
      timeout: 2000,
    
}).show();


                           }

                           else{
new Noty({
  type: 'success',
  theme: 'nest',
    text: 'Code Compiled Successfully.',
    dismissQueue: true,
      timeout: 2000,
    
}).show();
}
                }

                  else{
new Noty({
  type: 'success',
  theme: 'nest',
    text: 'Code Compiled Successfully.',
    dismissQueue: true,
      timeout: 2000,
    
}).show();
}







                $("#output").html(result);



            }
        });
    });
});
</script>
<!--code script ends-->




<--!color changer-->

<--!changer ends-->


<--!scanner-->
<script type="text/javascript">
 $( '#scanne' ).on('click', function(){
  //var impo='import java.util.*;'+'\n';
var valu='Scanner s=new Scanner(System.in);';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#ta1').val( textBefore+ valu +textAfter );
             //var newta=v.substring(0,v.length);
            // $('#ta1').val( impo+newta );

            //$('#ta1').focus();
            //$('#ta1').setCursorPosition(2);

            editor.insert("Scanner s=new Scanner(System.in);");
        });
</script>
<!--scanner ens-->



<--!import-->
<script type="text/javascript">
 $( '#scanne' ).on('click', function(){
  var impo='import java.util.*;'+'\n';
//var valu='Scanner s=new Scanner(System.in);';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            //var textBefore = v.substring(0,  cursorPos );
           // var textAfter  = v.substring( cursorPos, v.length );
            //$('#ta1').val( textBefore+ valu +textAfter );
             var newta=v.substring(0,v.length);
             $('#ta1').val( impo+newta );

            //$('#ta1').focus();
            //$('#ta1').setCursorPosition(2);

              var line=editor.selection.getCursor();
              editor.gotoLine(1);
              editor.insert(impo);
              editor.gotoLine(line+1);
        });
</script>
<!--import end-->










<--!for loop-->
<script type="text/javascript">
 $( '#foloop' ).on('click', function(){
var valu='for(int i=0;i< ;i++){}';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#ta1').val( textBefore+ valu +textAfter );
          //  $('#ta1').focus();
            //$('#ta1').setCursorPosition(9);
             editor.insert(valu);

        });
</script>
<!--forloop end-->


<--!output-->
<script type="text/javascript">
 $( '#outpu' ).on('click', function(){
var valu='System.out.println();';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#ta1').val( textBefore+ valu +textAfter );
          //  $('#ta1').focus();
           // $('#ta1').setCursorPosition(9);
           editor.insert(valu);
        });
</script>
<!--output end-->




<--!array-->
<script type="text/javascript">
 $( '#arra' ).on('click', function(){
var valu='int size= ;'+'\n'+'int ar[]=new int[size];'+'\n'+'for(int i=0;i<size;i++)'+'\n'+'{ar[i]=s.nextInt();}';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#ta1').val( textBefore+ valu +textAfter );
          //  $('#ta1').focus();
           // $('#ta1').setCursorPosition(9);
           editor.insert(valu);
        });
</script>
<!--array end-->








    
<!--tabspace-->
<script>
$('#ta1').keydown(function (e) {
    var keyCode = e.keyCode || e.which;

    if (keyCode === 9) {
        
        var start = this.selectionStart;
        var end = this.selectionEnd;

        // set textarea value to: text before caret + tab + text after caret
        spaces = "    ";
        this.value = this.value.substring(0, start) + spaces + this.value.substring(end);

        // put caret at right position again
        this.selectionStart = this.selectionEnd = start + spaces.length;
        return false;
    }
});
</script>


<!--tabspace ends-->




<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    editor.session.setMode("ace/mode/java");
</script>

<script type="text/javascript">
  var tty=0;
  function collap1(){
$('#multiCollapseExample2').collapse('hide');
$('#multiCollapseExample1').collapse('show');  
checker();

}
  function collap2(){

$('#multiCollapseExample1').collapse('hide');
$('#multiCollapseExample2').collapse('show'); 
revchecker(); 
tty=1;
  }

  
$('#editor').on('change', function() {
  
      document.getElementById("ta1").innerHTML=editor.getValue();
});

$('#ta1').on('change', function() {

  var gg=document.getElementById("ta1").value;
  editor.setValue(gg);
});

  window.onload = function() {
  collap1();
};


function checker(){
  var x=document.getElementById("ta1").value;
  var y=editor.getValue();
  if(x!=y){
    document.getElementById("ta1").value=y;
  }
}

function revchecker(){
    var x=document.getElementById("ta1").value;
  var y=editor.getValue();
  if(x!=y){
    editor.setValue(x);
  }
}
</script>









    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>s