<?php
session_start();
$id = $_SESSION['loggedIn'];
?>
<div class="container">
    <div class="card" style="padding: 5px">
        <h3>Please choose your favorite programing language?</h3>
        <div class="content" style="margin-left: 3rem">
            <form action="/?view=choice" method="post">
                <div class="form-group">
                    <input class="form-check-input" type="radio" value="css" id="css" name="programingLanguages" <?php checkOption($id . '-chooseOption', 'css');?> >
                    <label class="form-check-label" for="css">CSS</label><br>
                    <input class="form-check-input" type="radio" value="html" id="html" name="programingLanguages"  <?php checkOption($id . '-chooseOption', 'html');?> >
                    <label class="form-check-label" for="html">HTML</label><br>
                    <input class="form-check-input" type="radio" value="javascript" id="javascript" name="programingLanguages"  <?php checkOption($id . '-chooseOption', 'javascript');?> >
                    <label class="form-check-label" for="javascript">JavaScript</label><br>
                    <input class="form-check-input" type="radio" value="php" id="php" name="programingLanguages"  <?php checkOption($id . '-chooseOption', 'php');?> >
                    <label class="form-check-label" for="php">PHP</label><br>
                </div>
                <input type="submit" value="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<!--<script>-->
<!--    $(document).ready(function (e){-->
<!--        $('input[type="radio"]').click(function (){-->
<!--            $.ajax({-->
<!--                url: '/?view=choice',-->
<!--                type: 'post',-->
<!--               data: {-->
<!--                    programingLanguages: $(this).val(),-->
<!--                },-->
<!--                dataType: 'text',-->
<!--                success : function (result){-->
<!--                }-->
<!--           });-->
<!--        });-->
<!--    });-->
<!--</script>-->
