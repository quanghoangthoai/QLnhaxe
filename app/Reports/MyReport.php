<?php
namespace App\Reports;
class MyReport extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\bootstrap4\Theme;
    use \koolreport\inputs\Bindable;
    use \koolreport\inputs\POSTBinding;
    protected function bindParamsToInputs()
    {
        return array(
            "begin_date",
            "end_date",

        );
    }
        protected function setup()
    {
        $query_params = array();
        if($this->params["bengin_date"]!=array())
        {
            $query_params[":begin_date"] = $this->params["begin_date"];
        }
        if($this->params["end_date"]!=array())
        {
            $query_params[":end_date"] = $this->params["end_date"];
        }

        $this->query("SELECT * FROM banxe")
            ->params($query_params)
            ->pipe($this->dataStore("banxe"));
    }
}
