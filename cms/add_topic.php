<?php
  require("../functions/connect.php");
  require("../functions/engine.php");
?>

  <script type="text/javascript" src="../javascript/addtopic.js"></script>
  <script type="text/javascript" src="../javascript/jquery.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <link rel="stylesheet" type="text/css" href="../css/addtopic.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate_css.css">

  <!-- wysiwyg files -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
  
  <script src="../ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="../ckeditor/samples/js/sample.js"></script>

  <!--  -->
  <script>
  $(document).ready(function(){
    initSample();
    
    $(".wysiwyg_container").css({
      "margin-left":"69px",
      "margin-top":"20px",
    });

  });//
  </script>

<div id="paragraph_box">
  <p id="heads_up">Create a new topic</p>
  </div>

<div id="add_topic_content_container">

<form id="usr" class="pure-form pure-form-stacked">
  <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name" id="topic_name_label">Topic Name</label>
                <input id="first-name" placeholder="Type something" class="pure-u-23-24" type="text">
            </div>
</div>


</form>

<div  id="wysiwyg_box">
  <div id="editor"></div>
</div>


<div id="submit_button_container">
  <div></div>
  <button id="submit_button" class="pure-button pure-button-primary">Submit</button>
</div>
<!--
  #add_topic_content_container #usr,#add_topic_content_container #wysiwyg_box,#add_topic_content_container #usr,#add_topic_content_container #submit_button_container{
  margin:20px;
  margin-left:50px;
}
-->
  
</div>

<br><br><br><br><br><br>

 <div id="paragraph_box">
  <p id="heads_up">Your topics</p>
</div>

<?php
  print_all_topics();
?>