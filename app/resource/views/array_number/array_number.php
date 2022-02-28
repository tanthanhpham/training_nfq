
<div class="container" style="margin-top: 1rem">
    <div class="card">
        <div class="content" style="margin-left: 1rem">
            <h4>Please enter your array.</h4>
            <p> Noticed, they should be seperated by comma.</p>
            <form method="post" action="/?view=array">
                <div class="form-group row">
                    <label style="    margin-left: 20px; margin-top: 7px;" >Your array</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="arrayNumber" name="arrayNumber" placeholder="For example: 1,4,4.5,...">
                        <span id="err_array_number"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px; margin: auto;">Submit</button>
                </div>
            </form>
            <div id="response">
            </div>
        </div>

    </div>

</div>


<!--<script>-->
<!--    function checkValidation(){-->
<!--        let array_string = document.getElementById("arrayNumber").value;-->
<!--        let array_number_string = array_string.replace(/[, ]+/g,' ');-->
<!--        let array_number = array_number_string.split(' ');-->
<!--        let flag = true;-->
<!--        for (let number of array_number) {-->
<!--            if(isNaN(number)) {-->
<!--                flag = false;-->
<!--                document.getElementById("err_array_number").innerHTML = 'Please enter string number!';-->
<!--            }-->
<!--        }-->
<!--        if(flag){-->
<!--            $.ajax({-->
<!--                url : '../php/ArrayNumber.php',-->
<!--                type : 'post',-->
<!--                data: {-->
<!--                    arrayNumber: array_string,-->
<!--                },-->
<!--                dataType : 'text',-->
<!--                success : function (result){-->
<!--                    $('#response').html(result);-->
<!--                }-->
<!--            });-->
<!--        }-->
<!--        return flag;-->
<!--    }-->
<!--</script>-->
