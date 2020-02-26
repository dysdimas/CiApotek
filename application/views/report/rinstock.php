<?php
$pdf = new Pdf('P', 'mm', 'Legal', true, 'UTF-8', false);
$pdf->SetTitle('Report of Stock In');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->SetLeftMargin(15);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$i = 0;
$html = '<h3 align="center">Report Stock In</h3>
            <h4 align="center">Apotek</h4>
            <h3 align="center">Kelompok 4</h3><hr>
            <table>
            <tr>
            <td></td>
            </tr>
            </table>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2" border="2">
                        <tr bgcolor="silver">
                            <th width="5%" align="center">No</th>
                            <th align="center">Transaction Id</th>
                            <th align="center">Transaction Date</th>
                            <th align="center">Medicine Id</th>
                            <th align="center">Medicine Name</th>
                            <th align="center">Type</th>
                            <th align="center">Qty</th>
                            <th align="center">Price</th>
                            <th align="center">Total</th>
                        </tr>';
foreach ($rinstock as $rin) {
    $i++;
    $html .= '<tr bgcolor="#ffffff">
                            <td align="center">' . $i . '</td>
                            <td align="center">' . $rin['transaction_id'] . '</td>
                            <td align="center">' . $rin['date_stock'] . '</td>
                            <td align="center">' . $rin['medicine_id'] . '</td>
                            <td align="center">' . $rin['medicine_name'] . '</td>
                            <td align="center">' . $rin['medicine_type'] . '</td>
                            <td align="center">' . $rin['medicine_qty'] . '</td>
                            <td align="center">' . 'Rp' . number_format($rin['price'], 0, ',', '')  . '</td>
                            <td align="center">' . 'Rp' . number_format($rin['total'], 0, ',', '')  . '</td>
                         </tr>';
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('daftar_produk.pdf', 'I');
