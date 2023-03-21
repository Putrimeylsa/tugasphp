<head>
    <title>Luas Jajar Genjang</title>
</head>
<body>
    <form action="index.html" method="post">
        <table width="434" height="86" border="2" bordercolor="pink">
            <tr>
                <td height="43" colspan="4" align="center" bgcolor="#D0E382">
                    <div><h2><u><i>Luas Jajar Genjang</i></u></h2></div>
                </td>
            </tr>
            <td>
                <pre>
                    alas: <input name="alas" type="text" id="nilaiA" size="20" value=""/>
                    tinggi: <input name="tinggi" type="text" id="nilaiB" size="20" value=""/> 
                </pre>
            </td>
            </tr>
                <pre><tr><td height="43" colspan="4" align="center">
            
            <?php 
            $nilaiA = $_POST['alas'];
            $nilaiB = $_POST['tinggi'];
            function add($nilaiA, $nilaiB) {
                $luas=$nilaiA * $nilaiB;
                return $luas;
            }

            echo "Luas Jajar Genjang adalah  <br>";
            $luas=add($nilaiA, $nilaiB);
            printf("luas : %d * %d = %d<br>", $nilaiA,$nilaiB,$luas);
            ?>
            </td></tr></pre>
            <tr>
                <td height="43" colspan="4" align="center">
                    <input type="submit" value="Home">
                </td>
            </tr>

</table>
</form>
</body>


