<?php if (!empty($this->concert)): ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <form method=post action="order_process" role="form">
                <input type=hidden name=concert_id value="<?= $this->concert['id'] ?>">
                <h1 class="text-center">Заказать билеты <?= $this->concert['description'] ?></h1>

                <div class="form-group">
    		<label for="name" class="control-label col-sm-2">ФИО</label>	

    		<input type=text name=name value="" placeholder="ФИО" class="form-control">

                </div>
                <div class="form-group">
    		<label for="phone" class="control-label col-sm-2">Телефон</label>	

    		<input type=text name=phone value="380" placeholder="Мобильный телефон" class="form-control">

                </div>
                <div class="form-group">
    		<label for="count_of_tickets">Кол-во билетов</label>	

    		<input type=number name=count_of_tickets min="0" max="100" class="form-control">

                </div>
                <div class="form-group">

    		<input type=submit value="Заказать" class="btn btn-success btn_auth">

                </div>
            </form>
        </div>
    </div>
    <?php




 endif ?>