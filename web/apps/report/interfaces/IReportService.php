<?php

namespace apps\report\interfaces;

/**
 * @name IReportService
 * @uri /report
 * @description เรียกดูรายงาน
 */
interface IReportService
{

    /**
     * @name view
     * @uri /view
     * @description  viewReport
     */
    public function view();

    /**
     * @name listReport
     * @uri /listReport
     * @return string Report
     * @description  viewReport
     */
    public function listReport();

}
