<?echo "<pre>";
print_r($this->params);
echo "</pre>";?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1><?=$this->title?></h1>

            <div class="breadcrumbs">
                <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                    <?foreach($this->params['breadcrumbs'] as $param):?>
                    <!--<li><a href="#">Home</a></li>-->
                    <li><?=$param?></li>
                    <?endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>