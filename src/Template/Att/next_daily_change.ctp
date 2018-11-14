<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
</script>
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
    <div class="container-fluid mt-md-3">
        <div class="row">
        <?php foreach($name as $obj):?>
            <?= $this->Form->create('null',['type' => 'post',
                                            'url' => ['action' => 'nextDailyChange']]) ?>
            <div class="mb-4 form-inline border-bottom ">
                <div class="col-md-12">
                <p>名前 : 
                <?php 
                    echo $obj->student_name;
                ?>
                </p>
                </div>
                <div class="col-md-12">
                    <?=$this->Form->select('reason',['7' => '届け欠席',
                                                    '9' => '公欠',
                                                    '10' => '休学',
                                                    '11' => '謹慎',
                                                    '12' => '出社'],
                                                    ['empty' => '欠席理由','style' => 'width:150px'])?>
                </div>
                <div class="col-md-12">
                        <?=$this->Form->input ("start", ["label" => "開始日",
                                                        "type" => "datetime",
                                                        "dateformat" => "YMD",
                                                        "monthNames" => false,
                                                        "separator" => "/",
                                                        "templates" => [ "dateWidget" => '{{year}} 年 {{month}} 月 {{day}} 日'],
                                                        "minYear" => date ( "Y" ) - 3,
                                                        "maxYear" => date ( "Y" ) + 3,
                                                        "default" => date ( "Y-m-d" ),
                                                        "empty" => [ "year" => "年", "month" => "月", "day" => "日" ]])?>
                </div>
                <div class="col-md-12">
                    <?=$this->Form->input ("end", ["label" => "終了日",
                                                    "type" => "datetime",
                                                    "dateformat" => "YMD",
                                                    "monthNames" => false,
                                                    "templates" => [ "dateWidget" => '{{year}} 年 {{month}} 月 {{day}} 日'],
                                                    "minYear" => date ( "Y" ),
                                                    "maxYear" => date ( "Y" ) + 3,
                                                    "default" => date ( "Y-m-d" ),
                                                    "empty" => [ "year" => "年", "month" => "月", "day" => "日" ]
                                                    ])?>
                </div>
                <div class="col-md-12">
                    <?=$this->Form->button('保存',['class' => 'btn btn-primary']) ?>
                </div>
                <br>
            </div>
            <?=$this->Form->hidden('student_number',['value' => $obj->student_number]) ?>
            <?= $this->Form->end() ?>
        <?php endforeach;?>
        </div>
    </div>
</body>

</html>
