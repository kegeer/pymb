<?php

namespace App\Repos;


/**
 * Repo for resport, to merge date from other table
 */
class ReportRepoInterface
{
  public function getAll();
  public function getReport($result_id);
  public function findReport($id);
}
