</div>
<div id="tail">
    <?php
    if ($_head["step"] == 1) {
        if (fileperms(".") != 16839 && fileperms(".") != 16895) {
    ?>
            <span>
                현재 폴더 ( <?= getPath("relative") ?> )의 권한이 707 또는 777로 설정되어 있지 않습니다.<br>
                FTP나 SSH, TELNET을 이용하여 권한을 조정하신 후 재시도하시기 바랍니다.
            </span><br><br>
            <button onclick="return location.reload()">새로고침</button>
        <?php
        } else {
        ?><br><br>
            <input type="submit" value="[ 다음으로 ]" />
        <?php
        }
        ?>
        <script>
            $("form").submit(function() {
                if ($("#agree")[0].checked == false) {
                    alert("라이센스에 동의하지 않으시면 다음으로 진행하실 수 없습니다.");
                    return false;
                }
            });
        </script>
    <?php
    }
    ?>
</div>
</form>
</div>
</body>

</html>