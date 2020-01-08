<?php

namespace App\Reports;


class banxe extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\inputs\Bindable;
    use \koolreport\inputs\POSTBinding;

    protected function bindParamsToInputs()
    {
        return array(
            "dateRange"
        );
    }
    protected function setup()
    {
        $query_params = array();
        if ($this->params["dateRange"] != array()) {
            $query_params[":dateRange"] = $this->params["dateRange"];
        }
        $this->src('dateRange')->query("
            select
                sohd,
                thongtinxe_id,
                khachhang_id,
                giaban,
                tongthu
            from banxe
            join thongtinxe
            on
                thongtinxe.thongtinxe_id = banxe.thongtinxe_id
            join khachhang
            on khachhang.khachhang_id = banxe.khachhang_id
            where 1=1
            " . (($this->params["dateRange"] != array()) ? "and Day(created_at) in (:dateRange)" : "") . "

            GROUP BY tongthu
        ")->params($query_params)
            ->pipe($this->dataStore("qlnhaxe"));
    }
}
