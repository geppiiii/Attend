<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
    $('.datepicker_start').datepicker();
    </script>
    <script>
    $('.datepicker_end').datepicker();
    </script>
    <script>
        $(function(){
            $('.dropdown-menu .dropdown-item').click(function(){
                var visibleItem = $('.dropdown-toggle', $(this).closest('.dropdown'));
                visibleItem.text($(this).attr('value'));
            });
        });
</script>
<body>
    <div class="container mt-md-3">
        <div class="row">
            <div class="col-md-3">
                <h4>名前</h4>
            </div>
            <div class="col-md-3">
                <h4>出席状況</h4>
            </div>
            <div class="col-md-2">
                <h4>開始日</h4>
            </div>
            <div class="col-md-2">
                <h4>終了日</h4>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <div class="container-fluid mt-md-3">
        <div class="row">
        <?php foreach($name as $obj):?>
            <div class="mb-2 form-inline border-bottom">
                <div class="col-md-3">
                <?php 
                    echo $obj->student_name;
                ?>
                </div>
                <div class="col-md-3 dropdown dropright">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">欠席理由
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">届け出欠席</a>
                        <a class="dropdown-item">公欠</a>
                        <a class="dropdown-item">休学</a>
                        <a class="dropdown-item">謹慎</a>
                        <a class="dropdown-item">出社</a>
                    </div>

                </div>
                <div class="col-md-2">
                    <input Type="text" class="datepicker_start" name="start">
                </div>
                <div class="col-md-2">
                    <input type="text" class="datepicker_end" name="end">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" type="submit">保存</button>
                </div>
                <br>
            </div>
        <?php endforeach;?>
        </div>
    </div>
</body>

</html>
