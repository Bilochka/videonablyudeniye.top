

<h1 class='contact-title'>Отправка Сообщения Администрации:</h1>
<form action="send.php" method="post">
    <table>
        <tbody><tr>
            <th class="lable">*Імя:</th>
            <td class="input"><input name="name" size="40" maxlength="40" class="input" type="text"></td>
        </tr>
        <tr>
            <th class="lable">*E-mail:</th>
            <td class="input"><input name="email" size="40" maxlength="40" class="input" type="text"></td>
        </tr>
        <tr>
            <th class="lable">Тема:</th>
            <td class="input"><input name="subject" size="40" maxlength="40" class="input" type="text"></td>
        </tr>
        <tr>
            <th class="lable">*Сообщение:</th>
            <td class="input"><textarea name="text_message" cols="40" rows="10" class="input"></textarea></td>
        </tr>
        <br><br>
        <tr><th></th>
            <td align="center">
                <input name="mail_submit" type="submit" value="Отправить сообщение">     </td>
        </tr>
        </tbody></table>
</form>