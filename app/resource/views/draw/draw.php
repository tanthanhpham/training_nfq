
    <div class="container">
        <div class="card">
            <div class="content" style="margin-left: 1rem">
                <h3>Please input height and width</h3>
                <form action="/?view=draw" method="post">
                    <div class="form-group">
                        <table>
                            <tr>
                                <td><label for="height">Height: </label></td>
                                <td><input type="number" id="height" name="height"></td>
                            </tr>
                            <tr>
                                <td><label for="width">Width: </label></td>
                                <td> <input type="number" id="width" name="width"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <pre id="response"> </pre>
            </div>
        </div>
    </div>
    <div class="container"
    <pre id="response"><?php
        include '../controllers/draw/Draw.php';
    ?>
    </pre>
    </div>
<!--<script>-->
<!--    function draw(){-->
<!--        $.ajax({-->
<!--            url : '/?view=draw',-->
<!--            type : 'post',-->
<!--            data: {-->
<!--                height: $('#height').val(),-->
<!--                width: $('#width').val()-->
<!--            },-->
<!--            dataType : 'text',-->
<!--            success : function (result){-->
<!--                $('#response').html(result);-->
<!--            }-->
<!--        });-->
<!--    }-->
<!--</script>-->
