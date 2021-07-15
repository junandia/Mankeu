<?php 

$string = "<div class=\"content-wrapper\">
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12 w-100 p-3\">
                <div class=\"box box-warning box-solid\">
                    <?php echo anchor(site_url('".$c_url."/create'), '<i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Tambah Data', 'class=\"btn btn-danger btn-sm\" style=\"margin-bottom: 10px\"'); ?>";
                    if ($export_excel == '1') {
                        $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/excel'), '<i class=\"fa fa-file-excel-o\" aria-hidden=\"true\"></i> Export Ms Excel', 'class=\"btn btn-success btn-sm\"'); ?>";
                    }
                    if ($export_word == '1') {
                        $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/word'), '<i class=\"fa fa-file-word-o\" aria-hidden=\"true\"></i> Export Ms Word', 'class=\"btn btn-primary btn-sm\"'); ?>";
                    }
                    if ($export_pdf == '1') {
                        $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/pdf'), 'PDF', 'class=\"btn btn-primary\"'); ?>";
}

$string.="<div class=\"flash-data\" data-flashdata=\"<?= \$this->session->flashdata('flash'); ?>\"></div>

                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">KELOLA DATA ".  strtoupper($table_name)."</h6>
                        </div>
                        <div class=\"card-body\">";

$string.="
 <div class=\"table w-100 p-3\">
    <table class=\"table table-bordered fs-2\" id=\"dataTable\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>No</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t<th>Action</th>
            </tr>
            \n</thead>";
$string .= "<tbody>\n
            <?php
            foreach ($" . $c_url . "_data as \$$c_url)
            {
                ?>
                <tr>";

$string .= "\n\t\t\t<td width=\"10px\"><?php echo ++\$start ?></td>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t\t<td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
}


$string .= "\n\t\t\t<td style=\"text-align:center\" width=\"200px\">"
        . "\n\t\t\t\t<?php "
        . "\n\t\t\t\techo anchor(site_url('".$c_url."/read/'.$".$c_url."->".$pk."),'<i class=\"far fa-eye\"></i>','class=\"btn btn-info btn-sm\"'); "
        . "\n\t\t\t\techo '  '; "
        . "\n\t\t\t\techo anchor(site_url('".$c_url."/update/'.$".$c_url."->".$pk."),'<i class=\"fas fa-pen\"></i>','class=\"btn btn-warning btn-sm\"'); "
        . "\n\t\t\t\techo '  '; "
        . "\n\t\t\t\techo anchor(site_url('".$c_url."/delete/'.$".$c_url."->".$pk."),'<i class=\"fas fa-trash\"></i>','class=\"btn btn-danger btn-sm tombol-hapus\"'); "
        . "\n\t\t\t\t?>"
        . "\n\t\t\t</td>";

$string .=  "\n\t\t</tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>";


$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

?>