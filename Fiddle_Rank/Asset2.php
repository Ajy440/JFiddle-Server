<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="js/ace.js" type="text/javascript" charset="utf-8"></script>

  <link rel="stylesheet" type="text/css" href="Rank_compilers\style1.css">
    <title>Fiddle Compiler</title>



<style type="text/css" media="screen">
    #editor {
          color :white;
          height: 65vh;

    }
    #questionname{
      font-family: 'proximanovasoftw03-boldRg';
    }
    #inputparam{
      font-family: 'proximanovasoftw03-boldRg';
    }
</style>

  </head>
  <body>

<!--Navbar starts-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar-custom">
  <a class="navbar-brand" id="icon" href="http://jfiddle.epizy.com"><img src="Rank_assets/logo.png" class="img-fluid float-left" alt="Responsive image" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" ><input type="submit" id="st" class="btn btn-success" value="Run Code" style="font-family: 'proximanovasoftw03-boldRg'; "> <span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item active">

        <a class="nav-link" ><input type="submit" id="runcode" class="btn btn-primary" data-toggle="modal" data-target="#RunModal" value="Submit" style="font-family: 'proximanovasoftw03-boldRg';  "> <span class="sr-only">(current)</span></a>
      </li>

    </ul>

    <button class="btn btn-primary " style="color: white; margin-right: 8px;"><a href="welcome.html" style="color: white;">Home</a></button>

     <div class="dropdown" style="margin-right: 5px;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Editor Type
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" onclick="collap1()">Basic Editor</a>
    <a class="dropdown-item" onclick="collap2()">Ace Editor</a>

  </div>
</div>
     <img src="Rank_assets/user.png" class="img-fluid " alt="Responsive image" id="icon2">

  </div>
</nav>

<!--Navbar ends-->

<div class="row">
  <div class="col-sm-3">

 <div class="container-fluid" id="question">
  <h5 id="questionname">Compress the string</h5>
  Write a program to do basic string compression. For a character which is consecutively repeated more than once,
  replace consecutive duplicate occurrences with the count of repetitions.



    <br><br><h6 id="inputparam">Input Parameters</h6>
    Input string S<br>


 <br><br><h6 id="inputparam">Output Parameters</h6>
 Compressed string



 <br><br><h6 id="inputparam">Sample Input</h6>
 aaabbccdsa<br>


  <br><br><h6 id="inputparam">Sample Output</h6>
  a3b2c2dsa

 </div>



  </div>





  <div class="col-sm-9">
<form action="/Rank_compilers/java.php" id="form" name="f2" method="POST" >

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
      <label for="input" id="label1"> Debug Input Here: </label>
      <textarea class="form-control" name="input" rows="5" id="input"></textarea>

    </div>
    <div class="col-sm-6">
      <label for="output" id="label1">Debug  Output: </label>
      <textarea class="form-control" name="div" rows="5"  id="output"></textarea>
    </div>
  </div>

</form>
</div>
</div>






<!-- Modal -->
<div class="modal fade" id="RunModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fiddling..</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="youtput">
      Please be Patient while your code is being compiled
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>



<!-- Modal for compile error -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error..</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="youtput">
      OOPS! Compilation Fail. <br>
      Please review your code
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal for testcaserun -->
<div class="modal fade" id="caseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cooking your Code..</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="youtput">
  <img src="Rank_assets/load.gif" class="img-fluid float-left">
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>




<!-- Modal for allpass -->
<div class="modal fade" id="passModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Congratulations.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="aljh2">

<br><br>
TestCase 1 :<br>
TestCase 2 :<br>
TestCase 3 :<br>
TestCase 4 :<br>
TestCase 5 :<br><br>

      </div>
      <div class="modal-body" id="aljh3" >
      Your Code has Passed <span style="color: green">5/5</span> test cases
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal for allfail -->
<div class="modal fade" id="failModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">OOPS! Your code failed one or more Testcases</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="alhj" >

      </div>
      <div class="modal-body" id="alhj1" >

      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="invisible">
  <textarea class="form-control" name="inputfic" rows="5" id="inputfic"></textarea>
  <input type="text" name="" id="t1" ><input type="text" name="" id="tt1" >
  <input type="text" name="" id="t2" ><input type="text" name="" id="tt2" >
  <input type="text" name="" id="t3" ><input type="text" name="" id="tt3" >
  <input type="text" name="" id="t4" ><input type="text" name="" id="tt4" >
  <input type="text" name="" id="t5" ><input type="text" name="" id="tt5" >
</div>












<!--code script-->


<script type="text/javascript">

  $(document).ready(function(){

     $("#st").click(function(){

           $("#output").html("Loading ......");
            $("#form").submit();


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
            url: "Rank_compilers/java.php",

            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php
                  var res = result.substr(5,);
                $("#output").html(res);
            }
        });
    });
});
</script>
<!--code script ends-->




<--!color changer-->

<--!changer ends-->











<--!for loop-->
<script type="text/javascript">
 $( '#foloop' ).on('click', function(){
var valu='for(int i=0;i< ;i++)'+'\n'+'{}';
            var cursorPos = $('#ta1').prop('selectionStart');
            var v = $('#ta1').val();
            var textBefore = v.substring(0,  cursorPos );
            var textAfter  = v.substring( cursorPos, v.length );
            $('#ta1').val( textBefore+ valu +textAfter );
          //  $('#ta1').focus();
            //$('#ta1').setCursorPosition(9);
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



<!--testcase-->

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('#runcode').on('click', function(e){
      checker();

      e.preventDefault();

      // AJAX
      $.ajax({
            type: "POST",
            cache: false,
            url: "Rank_compilers/java.php",
            datatype: "html",
            data: $('form').serialize(),
            success: function(result) {

                var res = result.substr(1, 4);
                if(res=="pre>"){$('#RunModal').modal('hide');
                                $('#errorModal').modal('show');
              }
              if(res=="pra>"){

                runcases(0);
                $('#RunModal').modal('hide');
                $('#caseModal').modal('show');

              }




            }

        });
    });
  });
</script>



<!--testcase ends-->




<script type="text/javascript">


var inputcases=new Array("passaasssaaaassst","uhuchwucdshhdbhjcdchbbdhdb","ccvvchcbchccccccjjhjhjhkkc","uduuuduuddhhshhhbbbcbhfdjjjxhhxxxjjdjndp","aaabbccdsa");
var outputcases=new Array("pas2a2s3a4s3t","uhuchwucdsh2dbhjcdchb2dhdb","c2v2chcbchc6j2hjhjhk2c","udu3du2d2h2sh3b3cbhfdj3xh2x3j2djndp","a3b2c2dsa");
var results=[];
var tee="";
  function runcases(i){

 if(i==6){
validate(results,outputcases);
 }
 else{

  if(i==0){results=[];}
//alert(i);
//for(i=0;i<5;i++){
  try{throw i}
  catch(ii){
var ch1=$('#ta1').serialize();
//start
document.getElementById("inputfic").innerHTML=inputcases[ii];
var ch2=$('#inputfic').serialize();
  var dataserial=ch1+"&"+ch2+"&div=Loading%20......";
//alert(dataserial);
 $.ajax({



            type: "POST",
            cache: false, //important or else you might get wrong data returned to you
            // url: "compile.php", //destination
            url: "Rank_compilers/javafict1.php",
            datatype: "html", //expected data format from process.php
            data:dataserial, //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php
                  var res = result.substr(5,);
                  var tt=outputcases[ii];
                  results.push(res);
                 runcases(i+1);

               }


        });

 //end
}

}
//}
}


</script>

<script type="text/javascript">
  function validate(res,out){
document.getElementById("t1").value=res[0];
document.getElementById("tt1").value=out[0];
document.getElementById("t2").value=res[1];
document.getElementById("tt2").value=out[1];
document.getElementById("t3").value=res[2];
document.getElementById("tt3").value=out[2];
document.getElementById("t4").value=res[3];
document.getElementById("tt4").value=out[3];
document.getElementById("t5").value=res[4];
document.getElementById("tt5").value=out[4];
var tcase1="fail"; var color1="red";
var tcase2="fail"; var color2="red";
var tcase3="fail";var color3="red";
var tcase4="fail";var color4="red";
var tcase5="fail";var color5="red";
if(document.getElementById("t1").value==document.getElementById("tt1").value){tcase1="Pass";color1="green";}
if(document.getElementById("t2").value==document.getElementById("tt2").value){tcase2="Pass";color2="green";}
if(document.getElementById("t3").value==document.getElementById("tt3").value){tcase3="Pass";color3="green";}
if(document.getElementById("t4").value==document.getElementById("tt4").value){tcase4="Pass";color4="green";}
if(document.getElementById("t5").value==document.getElementById("tt5").value){tcase5="Pass";color5="green";}

if(tcase1=="fail" || tcase2=="fail" || tcase3=="fail" || tcase4=="fail" || tcase5=="fail"){
var retr="TestCase 1 :"+" "+'<span style="color:'+color1+'">'+tcase1+"</span>"+"<br>"+"TestCase 2 :"+" "+'<span style="color:'+color2+'">'+tcase2+"</span>"+"<br>"+"TestCase 3 :"+" "+'<span style="color:'+color3+'">'+tcase3+"</span>"+"<br>"+ "TestCase 4 :"+" "+'<span style="color:'+color4+'">'+tcase4+"</span>"+"<br>"+"TestCase 5 :"+" "+'<span style="color:'+color5+'">'+tcase5+"</span>";


var retr1="<br><br>"+"TestCase 1 :"+" "+"<br>"+"TestCase 2 :"+" "+"<br>"+"TestCase 3 :"+" "+"<br>"+ "TestCase 4 :"+" "+"<br>"+"TestCase 5 :"+" "+"<br><br>";

 $('#alhj1').html(retr);
 $('#alhj').html(retr1);
   $('#caseModal').modal('hide');
      // Display Modal
      $('#failModal').modal('show');
res=[];
    }



      else{

         $('#caseModal').modal('hide');
      // Display Modal
      $('#passModal').modal('show');
      res=[];}


  }

</script>







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

</script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>