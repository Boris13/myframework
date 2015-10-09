<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 09.10.2015
 * Time: 13:23
 */$this->title='Сторінка зворотнього звязку';
?>
<div class="contact">
    <h1><?=$this->title ?>  </h1>
    <form method="post" action="/contact" class="form-horizontal">
        <fieldset>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input required type="email" name="email"  class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">ПІБ</label>
                <div class="col-lg-10">
                    <input required type="text"  name="name" class="form-control" id="inputName" >
                </div>
            </div>
            <div class="form-group">
                <label required for="textArea" required class="col-lg-2 control-label">Повідомлення</label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="message" rows="3" id="textArea"></textarea>
                    <span class="help-block"></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Очистити</button>
                    <button type="submit" class="btn btn-primary">Відправити</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>