<?php if (!empty($this->concert)): ?>
<form method=post action="order_process">
        <input type=hidden name=concert_id value="<?= $this->concert['id'] ?>">
        <h1 align=center>Заказать билеты <?= $this->concert['description'] ?></h1>

        <table align=center cellspacing=0 cellpadding=5 border=0>
            <tr>
                <td colspan=2>
                    <input type=text name=name value="" placeholder="Имя">
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type=text name=phone value="380" placeholder="Мобильный телефон">
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type=number name=count_of_tickets min="0" max="100">
                </td>
            </tr>
            <tr>
                <td colspan=2 align=center>
                    <input type=submit value="Заказать">
                </td>
            </tr>
        </table>
    </form>
    <?php
 endif ?>