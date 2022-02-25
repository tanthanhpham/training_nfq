<?php
session_start();
$id = $_SESSION['loggedIn'];

?>
<div class="container">
    <div class="card">
        <div class="content" style="margin-left: 3:rem">
            <h3>Please choose your favorite programing language?</h3>
            <form action="" method="post">
                <div class="form-group">
                    <input class="form-check-input" type="radio" value="css" id="css" name="programingLanguages" <?php checkOption($id.'-chooseOption', 'css');?> >
                    <label class="form-check-label" for="css">CSS</label><br>
                    <input class="form-check-input" type="radio" value="html" id="html" name="programingLanguages"  <?php checkOption($id.'-chooseOption', 'html');?> >
                    <label class="form-check-label" for="html">HTML</label><br>
                    <input class="form-check-input" type="radio" value="javascript" id="javascript" name="programingLanguages"  <?php checkOption($id.'-chooseOption', 'javascript');?> >
                    <label class="form-check-label" for="javascript">JavaScript</label><br>
                    <input class="form-check-input" type="radio" value="php" id="php" name="programingLanguages"  <?php checkOption($id.'-chooseOption', 'php');?> >
                    <label class="form-check-label" for="php">PHP</label><br>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (e){
        $('input[type="radio"]').click(function (){
            $.ajax({
                url: '../php/HandleCookie.php',
                type: 'post',
               data: {
                    programingLanguages: $(this).val(),
                },
                dataType: 'text',
                success : function (result){
                }
           });
        });
    });
</script>