<?php
namespace App\Services\Business;

use App\Services\Data\JobListDAO;
use App\Models\JobListingModel;

class JobListBS
{
    private $service;
    
    public function getAllJobs()
    {
        // Instantiate DAO
        $this->service = new JobListDAO();
        
        // Return array of jobs
        return $this->service->getAllJobs();
    }
    
    public function getJob($id)
    {
        $this->service = new JobListDAO();
        
        return $this->service->getJob($id);
    }
    public function addJob(JobListingModel $job)
    {
        $this->service = new JobListDAO();
        
        return $this->service->addJob($job);
    }
    
    public function editJob(JobListingModel $job)
    {
        $this->service = new JobListDAO();
        
        return $this->service->editJob($job);
    }
    
    public function deleteJob($id)
    {
        $this->service = new JobListDAO();
        
        return $this->service->deleteJob($id);
    }
}

