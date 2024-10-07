$boletim = array(
    array(˜disciplina˜ => ˜matematica˜, ˜faltas˜ => ˜5˜, ˜media => ˜5˜);
    array(˜disciplina˜ => ˜portugues˜, ˜faltas˜ => ˜2˜, ˜media => ˜6˜);
    array(˜disciplina˜ => ˜ed fisica˜, ˜faltas˜ => ˜0˜, ˜media => ˜9˜);
    array(˜disciplina˜ => ˜geografia˜, ˜faltas˜ => ˜1˜, ˜media => ˜8˜);
    array(˜disciplina˜ => ˜historia˜, ˜faltas˜ => ˜1˜, ˜media => ˜7˜);

);

echo ˜<table>
        <tr>
            <td>Diciplina</td>
            <td>Faltas</td>
            <td>Media</td>
        </tr>˜;
    
    foreach ($boletim as $disciplina){
        echo ˜<tr>˜;
        foreach($disciplina as $chave => $valor){
            echo ˜<td>$valor</td>;
        }
        echo ˜</tr>;
    }
    echo ˜</table>;
    
?>