<?php

function displayQueryResult($qry,$terms) {
    $results = query_db($qry);
    $title = ($terms ? "Terms" : "Array Terms");
    $id_label = ($terms ? "File" : "Array Id");
    //print "<SPAN class=msg>Status of ".$title." Terms Translation. Count : ". count($results)."</SPAN>";
    print "<TABLE align=center cellspacing=0 width='700px' class='tabform-list' border=1>";
    print "<TR class='title'><TD colspan=5>Status of ".$title." Translation. Count : ". count($results)."</TD></TR>";
    print "<TR><TD width=10%>Id</TD><TD width=10%>$id_label</TD><TD width=50%>".$title."</TD><TD width=20%>Reference</TD><TD width=20%>Translation</TD></TR>";
    for ($i = 0 ; $i < count($results); $i++) {
        $class = ($i % 2 ? "even" : "odd");
        $color = ($results[$i]->ref == $results[$i]->trx ? "green" : "red" );
        
        print "\n<TR CLASS='$class' ><TD >".$i."</TD><TD CLASS=$color>".$results[$i]->id."</TD><TD CLASS=$color>".$results[$i]->array_id."</TD><TD CLASS=$color>".$results[$i]->ref."</TD><TD CLASS=$color>".$results[$i]->trx."</TD></TR>";
    }
    print "</TABLE>";


}

$qry_mod = "select A.module id, A.array_id, ref, trx from ";
$qry_mod .= "(select SUBSTRING_INDEX(file, '/', 2 ) module, array_id, count(*) ref from vtiger_terms where version_id=$version_id and lang = 'REF' and sub_array_id = '' group by module,array_id) A LEFT JOIN ";
$qry_mod .= "(select SUBSTRING_INDEX(file, '/', 2 ) module, array_id, count(*) trx from vtiger_terms where version_id=$version_id and lang = 'TRX' and sub_array_id = '' group by module,array_id) B ";
$qry_mod .= "ON A.module = B.module and A.array_id = B.array_id";

$qry_app = "select CONcAT(A.module, ':', A.array_id) id, A.sub_array_id array_id, ref, trx from ";
$qry_app .= "(select SUBSTRING_INDEX(file, '/', 2 ) module, array_id, sub_array_id, count(*) ref from vtiger_terms where version_id=$version_id and lang = 'REF' and sub_array_id != '' group by module,array_id,sub_array_id) A LEFT JOIN ";
$qry_app .= "(select SUBSTRING_INDEX(file, '/', 2 ) module, array_id, sub_array_id, count(*) trx from vtiger_terms where version_id=$version_id and lang = 'TRX' and sub_array_id != '' group by module,array_id,sub_array_id) B ";
$qry_app .= "ON A.module = B.module and A.array_id = B.array_id and A.sub_array_id = B.sub_array_id";

displayQueryResult($qry_mod,true);
print "<BR><BR>";
displayQueryResult($qry_app,false);



?>
